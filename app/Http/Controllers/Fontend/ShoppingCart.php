<?php

namespace App\Http\Controllers\Fontend;
// use Gloudemans\Shoppingcart\Cart;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\ShoppingRequest;
use Illuminate\Http\Request;
use App\Models\Product;
use Carbon\Carbon;
use App\Models\Order;
use App\Models\Transaction;
use Illuminate\Support\Facades\Mail;
use App\Mail\TransactionSuccess;
use App\Models\Payment;

class ShoppingCart extends Controller
{
    //
    public function index()
    {
        $shopping = \Cart::content();
        $viewData = [
            'shopping' =>  $shopping,
            'title_page' => 'Giỏ hàng'
        ];
        return view('frontend.pages.shopping.index', $viewData);
    }
    public function add(Request $request, $id)
    {
        $product = Product::find($id);
        if (!$product) return redirect()->to('/');
        // if($request->sale_number < $product->pro_number) {
        //     toastr()->error('So luong khong du');
        //     return redirect()->back();
        // }

        if ($product->pro_number <= 0) {
            toastr()->error('Số lượng không đủ!');
            return redirect()->back();
        }

        \Cart::add([
            'id' => $product->id,
            'name' => $product->pro_name,
            'qty' => 1,
            'price' => number_price($product->pro_price, $product->pro_sale),
            'weight' => '1',
            'options' => [
                'image' => $product->pro_avatar,
                'sale' => $product->pro_sale,
                'price_old' => $product->pro_price,
                'pro_number' => $product->pro_number
            ]
        ]);
        toastr()->success('Thêm vào giỏ hàng thành công!');
        return redirect()->back();
    }

    public function deleteItem(Request $request, $rowId)
    {
        if ($request->ajax()) {
            \Cart::remove($rowId);
            return response([
                'message' => 'Xóa sản phẩm trong giỏ hàng thành công!',
                'totalMoney' => \Cart::subtotal(0),
            ]);
        }
    }



    public function update(Request $request, $id)
    {
        if ($request->ajax()) {
            //lay tham so
            $qty = $request->qty ?? 1;
            $idProduct = $request->idProduct;
            $product = Product::find($idProduct);

            //kiem tra ton tai san pham
            if (!$product) {
                return response(['message' => 'Không tồn tại sản phẩm cần cập nhật']);
            }
            if ($product->pro_number < $qty) {
                return response(
                    [
                        'message' => 'Số lượng sản phẩm không đủ!',
                        'error' => true
                    ]
                );
            }
            \Cart::update($id, $qty);
            return response([
                'message' => 'Cập nhật số lượng thành công!',
                'totalMoney' => \Cart::subtotal(0),
                'totalItem' => number_format(number_price($product->pro_price, $product->pro_sale) * $qty, 0, ',', '.')
            ]);
        }
    }

    public function checkout()
    {
        $shopping = \Cart::content();
        $viewData = [
            'shopping' =>  $shopping,
            'totalMoney' => \Cart::subtotal(0),
            'title_page' => 'Thanh toán'
        ];
        return view('frontend.pages.shopping.checkout', $viewData);
    }

    public function postPay(ShoppingRequest $request)
    {
        $data = $request->except('_token', 'payment');
        if (isset(Auth::user()->id)) {
            $data['tst_user_id'] = Auth::user()->id;
        }
        $data['tst_total_money'] = str_replace(',', '', \Cart::subtotal(0));
        $data['created_at'] = Carbon::now();

        if ($request->payment == 2) {
            $totalMoney = str_replace(',', '', \Cart::subtotal(0));
            session(['info_customer' => $data]);
            $shopping = \Cart::content();
            $user = Auth::user();
            $total =  str_replace(',', '', \Cart::subtotal(0));
            if ($request->tst_email) {
                Mail::to($request->tst_email)->send(new TransactionSuccess($shopping, $user, $total));
            }
            return view('frontend/pages/vnpay/index', compact('totalMoney'));
        } else {
            $transitionId = Transaction::insertGetId($data);
            if ($transitionId) {
                $shopping = \Cart::content();
                $user = Auth::user();
                $total =  str_replace(',', '', \Cart::subtotal(0));
                if ($request->tst_email) {
                    Mail::to($request->tst_email)->send(new TransactionSuccess($shopping, $user, $total));
                }
                foreach ($shopping as $key => $item) {
                    Order::insert([
                        'od_transaction_id' => $transitionId,
                        'od_product_id' => $item->id,
                        'od_sale' => $item->options->sale,
                        'od_qty' => $item->qty,
                        'od_price' => $item->price,
                        'created_at' => Carbon::now()
                    ]);
                    //Tang so luong lan mua san pham do;
                    \DB::table('products')->where('id', $item->id) //chon san pham nao
                        ->increment('pro_pay'); //tang cot pro_pay len 1
                }
            }
            //     if($request->tst_email) {
            //         Mail::to($request->tst_email)->send(new TransactionSuccess($shopping));
            //    }
            \Cart::destroy();
            toastr()->success('Đặt hàng thành công!');
            // return redirect()->to('/');
            return redirect()->back();
        }
    }

    public function createPayment(Request $request)
    {
        $vnp_TxnRef = randString(15); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = $request->order_desc;
        $vnp_OrderType = $request->order_type;
        $vnp_Amount = str_replace(',', '', \Cart::subtotal(0)) * 100;
        $vnp_Locale = $request->language;
        $vnp_BankCode = $request->bank_code;
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];

        $inputData = array(
            "vnp_Version" => "2.0.0",
            "vnp_TmnCode" => env('VNP_TMNCODE'),
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => route('vnpay.return'),
            "vnp_TxnRef" => $vnp_TxnRef,
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . $key . "=" . $value;
            } else {
                $hashdata .= $key . "=" . $value;
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = env('VNP_URL') . "?" . $query;
        if (env('VNP_HASHSECRET')) {
            // $vnpSecureHash = md5($vnp_HashSecret . $hashdata);
            $vnpSecureHash = hash('sha256', env('VNP_HASHSECRET') . $hashdata);
            $vnp_Url .= 'vnp_SecureHashType=SHA256&vnp_SecureHash=' . $vnpSecureHash;
        }

        return redirect($vnp_Url);
    }

    public function vnpayReturn(Request $request)
    {
        // dd($request->toArray());
        if (session()->has('info_customer') && ($request->vnp_ResponseCode == '00')) {
            \DB::beginTransaction();
            try {
                $vnpayData = $request->all();
                $data = session()->get('info_customer');
                $transactionId = Transaction::insertGetId($data);
                if ($transactionId) {
                    $shopping = \Cart::content();
                    foreach ($shopping as $key => $item) {
                        Order::insert([
                            'od_transaction_id' => $transactionId,
                            'od_product_id' => $item->id,
                            'od_sale' => $item->options->sale,
                            'od_qty' => $item->qty,
                            'od_price' => $item->price,
                            'created_at' => Carbon::now()
                        ]);
                        \DB::table('products')->where('id', $item->id)->increment('pro_pay');
                    }

                    $dataPayment = [
                        'p_transaction_id' => $transactionId,
                        'p_transaction_code' => $vnpayData['vnp_TxnRef'],
                        'p_user_id' => $data['tst_user_id'],
                        'p_money' => $data['tst_total_money'],
                        'p_note' => $vnpayData['vnp_OrderInfo'],
                        'p_vnp_response_code' => $vnpayData['vnp_ResponseCode'],
                        'p_code_vnpay' => $vnpayData['vnp_TransactionNo'],
                        'p_code_bank' => $vnpayData['vnp_BankCode'],
                        'p_time' => date('Y-m-d H:i', strtotime($vnpayData['vnp_PayDate']))
                    ];

                    Payment::insert($dataPayment);
                    \Cart::destroy();
                    \DB::commit();
                    toastr()->success('Thanh toán thành công!', 'Thông báo');

                    return view('frontend/pages/vnpay/vnp_return', compact('vnpayData'));
                }
            } catch (\Exception $exception) {
                \DB::rollBack();
                toastr()->warning('Không thể thực hiện thanh toán (Catch)!', 'Thông báo');

                return redirect()->to('/');
            }
        } else {
            toastr()->warning('Không thể thực hiện thanh toán!', 'Thông báo');
            return redirect()->to('/');
        }
    }
}
