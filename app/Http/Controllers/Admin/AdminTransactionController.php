<?php

namespace App\Http\Controllers\Admin;

use App\Exports\TransactionExport;
use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\Order;
class AdminTransactionController extends Controller
{
    //
    public function index(Request $request)
    {
        $transactions = Transaction::whereRaw(1);

        if($request->id) $transactions->where('id', $request->id);
        if($email = $request->email){
            $transactions->where('tst_email', 'like', '%'.$email .'%');

        }

        if($type= $request->type) {
            if($type == 1) {
                $transactions->where('tst_user_id', "<>", 0);
            }else {
                $transactions->where('tst_user_id', 0);
            }
        }

        if($status = $request->status) {
            $transactions->where('tst_status', $status);
        }

        $transactions = $transactions->orderBy('id')
                        ->paginate(10);


        if($request->export) {
            return \Maatwebsite\Excel\Facades\Excel::download(new TransactionExport($transactions), 'don-hang.csv');
        }

        $viewData = [
            'transactions' => $transactions,
            'query' => $request->query()
        ];
        return view('admin.transaction.index', $viewData);
    }

    public function delete($id)
    {
        $transaction = Transaction::find($id);
        if($transaction) {
            $transaction->delete();
            \DB::table('orders')->where('od_transaction_id', $id)
                                ->delete();

        }
        return redirect()->back();
    }

    public function getTransactionDetail(Request $request, $id) {
        if($request->ajax()) {
            // $this->printOrder($id);
            $orders = Order::with('product:id,pro_name,pro_avatar')->where('od_transaction_id', $id)->get();
            $html = view('components.order',  compact('orders'))->render();
            return \response([
                'html' => $html
                
            ]);
        }
    }

    public function deleteOrderItem(Request $request, $id) {
        if($request->ajax()) {
            $order = Order::find($id); // tim dong chua san pham trong chi tiet don hang
            if($order)
            {
                //tong tien ma san pham do mua
                $money = $order->od_price * $order->od_qty;
                //tim trong bang giao dich theo ma don hang, tru di tong tien san pham dang muon xoa
                \DB::table('transactions')
                      ->where('id', $order->od_transaction_id)
                      ->decrement('tst_total_money', $money);
                      //xoa trong dong trong chi tiet don hang
                      $order->delete();
            }
            return response(['code' => 200]);

        }
    }

    public function action($action, $id) {
        $transaction = Transaction::find($id);

        if($transaction) {
            switch($action) {
                case 'process': {
                    $transaction->tst_status = 2;
                    break;
                }
                case 'success': {
                    $transaction->tst_status = 3;
                    break;
                }
                case 'cancel': {
                    $transaction->tst_status = -1;
                    break;
                }
            }
            $transaction->save();

        }

        return redirect()->back();

    }


    public function printOrder($id) {
        $transaction = Transaction::find($id);

        $orders = Order::with('product:id,pro_name,pro_avatar')->where('od_transaction_id', $id)->get();
        $viewData = [
            'transaction' => $transaction,
            'orders'  => $orders
        ];
        return view('admin.transaction.order_print', $viewData);
    }
}