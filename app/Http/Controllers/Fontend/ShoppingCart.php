<?php

namespace App\Http\Controllers\Fontend;
// use Gloudemans\Shoppingcart\Cart;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Carbon\Carbon;
use App\Models\Order;
use App\Models\Transaction;
class ShoppingCart extends Controller
{
    //
    public function index()
    {
        $shopping = \Cart::content();
        $viewData = [
            'shopping' =>  $shopping,
             'title_page' => 'Gio hang'
        ];
        return view('frontend.pages.shopping.index', $viewData);
    }
    public function add(Request $request, $id)
    {
        $product = Product::find($id);
        if(!$product) return redirect()->to('/');
        // if($request->sale_number < $product->pro_number) {
        //     toastr()->error('So luong khong du');
        //     return redirect()->back();
        // }

        if($product->pro_number <= 0) {
            toastr()->error('So luong khong du');
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
                'price_old' => $product->pro_price
            ]
        ]);
        toastr()->success('Them thanh cong');
        return redirect()->back();
       
    }

    public function deleteItem($rowId)  {
        \Cart::remove($rowId);
        return redirect()->back();
    }

    public function update(Request $request, $id) 
    {
        if($request->ajax()) {
            //lay tham so
            $qty = $request->qty ?? 1;
            $idProduct = $request->idProduct;
            $product= Product::find($idProduct);

            //kiem tra ton tai san pham
            if(!$product) {
                return response(['message' => 'Khong ton tai san pham can cap nhat']);
            }
            if($product->pro_number < $qty) {
                return response(['message' => 'So luong cap nhat khong du']);
            }
            \Cart::update($id, $qty);
            return response(['message' => 'Cap nhat so luong thanh cong!']);
        }
    } 

    public function checkout() 
    {
        $shopping = \Cart::content();
        $viewData = [
            'shopping' =>  $shopping,
             'title_page' => 'Thanh toan'
        ];
        return view('frontend.pages.shopping.checkout', $viewData);
    }

    public function postPay(Request $request) 
    {
        $data = $request->except('_token');
        if(isset(Auth::user()->id)) {
            $data['tst_user_id'] = Auth::user()->id;
        }
        $data['tst_total_money'] = str_replace(',', '', \Cart::subtotal(0));
        $data['created_at'] = Carbon::now();
        $transitionId = Transaction::insertGetId($data);
        if($transitionId) {
            $shopping =\Cart::content();
            foreach($shopping as $key => $item) {
                Order::insert([
                    'od_transaction_id' => $transitionId,
                    'od_product_id' =>$item->id,
                    'od_sale' => $item->options->sale,
                    'od_qty' => $item->qty,
                    'od_price' => $item->price,
                    'created_at' => Carbon::now()
                ]);
                //Tang so luong lan mua san pham do;
                \DB::table('products')->where('id', $item->id)//chon san pham nao
                                      ->increment('pro_pay');//tang cot pro_pay len 1
            }
        }
        \Cart::destroy();
        return redirect()->to('/');
    }
}
