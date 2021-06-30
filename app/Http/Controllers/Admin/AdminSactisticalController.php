<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Transaction;
use App\HelpersClass\Date;
use GuzzleHttp\Handler\Proxy;

class AdminSactisticalController extends Controller
{
    //
    public function index()
    {
        //tong don hang
        $totalTransactions = DB::table('transactions')->select('id')->count();

        //tong nguoi dung
        $totalUsers = DB::table('users')->select('id')->count();

        //tong san pham

        $totalProducts = DB::table('products')->select('id')->count();

        //Tong binh luan
        $totalRatings = DB::table('ratings')->select('id')->count();

        $transactions = Transaction::orderByDesc('id')
                        ->limit(10)
                        ->get();
        $products  = Product::orderByDesc('pro_view')
                             ->limit(5)
                             ->get();
        $topPayProduct = Product::orderByDesc('pro_pay')
                            ->limit(5)
                            ->get();
         $sanPhamSapHet = Product::where('pro_number', '<', 10)->paginate(5);
                           
    

        //thong ke trang thai
        $default = Transaction::where('tst_status', 1)->select('id')->count();

        $process = Transaction::where('tst_status', 2)->select('id')->count();

        $success = Transaction::where('tst_status', 3)->select('id')->count();

        $cancel = Transaction::where('tst_status', -1)->select('id')->count();

        $statusTransaction  = [
            ['Tiếp nhận',$default, false ],
            ['Hủy đơn',$cancel, false ],
            ['Thành công',$success, false ],           
            ['Đang xử lý',$process, false ],
        ];

        $listDay = Date::getListDayInMonth(); 
        
        $revenueTransactionMonth = Transaction::where('tst_status', 3)
                                    ->whereMonth('created_at', date('m'))
                                    ->select(DB::raw('sum(tst_total_money) as totalMoney') , DB::raw('DATE(created_at)  day'))
                                    ->groupBy('day')
                                    ->get()->toArray();

       $revenueTransactionDefault = Transaction::where('tst_status', 1)
                                    ->whereMonth('created_at', date('m'))
                                    ->select(DB::raw('sum(tst_total_money) as totalMoney') , DB::raw('DATE(created_at)  day'))
                                    ->groupBy('day')
                                    ->get()->toArray();                         
        $arrRevenueTractionMonth = [];
        $arrRevenueTransactionMonthDefault = [];
        foreach($listDay as $day) {
            $total = 0;
            foreach($revenueTransactionMonth as $key => $value) {
                if($value['day'] == $day) {
                    $total = $value['totalMoney'];
                    break;
                }
            }
            $arrRevenueTractionMonth[] = (int)$total;
            $total = 0;
            foreach($revenueTransactionDefault as $key =>$value) {
                if($value['day'] == $day) {
                    $total = $value['totalMoney'];
                    break;
                }
            }
            $arrRevenueTransactionMonthDefault[] = (int)$total;
            


        }
        // dump($arrRevenueTractionMonth);
                         


        $viewData = [
            'totalTransactions' => $totalTransactions,
            'totalUsers' => $totalUsers,
            'totalProducts' => $totalProducts,
            'totalRatings' => $totalRatings,
            'transactions' => $transactions,
            'products' => $products,
            'sanPhamSapHet' => $sanPhamSapHet,
            'topPayProduct' => $topPayProduct,
            'statusTransaction' => json_encode($statusTransaction),
            'listDay' => json_encode($listDay),
            'arrRevenueTractionMonth' => json_encode($arrRevenueTractionMonth),
            'arrRevenueTransactionMonthDefault' => json_encode($arrRevenueTransactionMonthDefault)
        ];
        return view('admin.sactistical.index', $viewData);
    }

 
}