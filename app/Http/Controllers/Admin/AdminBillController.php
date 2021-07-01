<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bill;
use App\Models\BillDetail;
use App\Models\Product;
use App\Models\Supplier;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


class AdminBillController extends Controller
{
    //

    public function __construct(Product $product, Supplier $supplier) {
        view()->share([
            'products' =>$product->orderBy('created_at', 'desc')->get(),
            'suppliers' => $supplier->all()
        ]);
    }
    public function index(Request $request)
    {

        $bills = Bill::orderBy('id')
                        ->paginate(10);
        $viewData = [
            'bills' => $bills,
        ];
        return view('admin.bills.index', $viewData);
    }

    public function delete($id)
    {
        
        $bills = Bill::find($id);
        if($bills) {
            $bills->delete();
             \DB::table('bill_details')->where('d_bill_id', $id)
                                  ->delete();

        }
        return redirect()->back();
    }

    public function getBillDetail(Request $request, $id) {
        if($request->ajax()) {
            // $this->printOrder($id);
            $bill = Bill::where('id', $id)->get();

            $bills = BillDetail::with('product:id,pro_name,pro_avatar')->where('d_bill_id', $id)->get();
            $html = view('components.bill_detail',  compact('bills', 'bill'))->render();
            return \response([
                'html' => $html

            ]);
        }
    }
    public function create() {
        return view('admin.bills.create');
    }

    public function store(Request $request)
    {

        // dd($request->all());
        $data = $request->except('_token', 'product', 'supplier', 'number', 'price', 'total');
        if(isset(Auth::user()->id)) {
            $data['b_user_id'] = Auth::user()->id;
        }

        $data['created_at'] = Carbon::now();
        $billId = Bill::insertGetId($data);
        $productId = $request->product;
        $supplier = $request->supplier;
        $number = $request->number;
        $price = $request->price;

        $money = 0;

        if($billId) {

            foreach($productId as $key => $item) {
                $money += $number[$key] * $price[$key];
                    $input['d_bill_id'] = $billId;
                    $input['b_supplier_id'] = $supplier[$key];
                    $input['d_product_id'] = $item;
                    $input['d_number'] = $number[$key];
                    $input['d_price'] = $price[$key];
                    $input['created_at'] = Carbon::now();
                    BillDetail::create($input);
                    // dd($input);
                    \DB::table('products')->where('id', $item)
                    ->increment('pro_number', $number[$key]);
            }
            //\DB::table('bills')->update(['b_total_money' => $money]);
            \DB::table('bills')
            ->where('id', $billId)
            ->update(['b_total_money' => $money]);
        }
        toastr()->success('Thêm đơn hàng thành công!');
        return redirect()->back();
        }
}






