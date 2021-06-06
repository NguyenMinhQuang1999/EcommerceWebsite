<?php

namespace App\Http\Controllers\User;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    //
    public function dashboard()
    {
        $userId = \Auth::id();
        $total =  DB::table('transactions')->select('id')->where('tst_user_id', $userId );
        $tongDon = $total->count();
        $dangGiao = $total->where('tst_status', 2)->count();
        $daGiao = $total->where('tst_status', 3)->count();
        $daHuy = $total->where('tst_status', -1)->count();

        $viewData = [
        'tongDon' => $tongDon,
        'daGiao' =>  $daGiao,
        'dangGiao' =>  $dangGiao,
        'daHuy' => $daHuy
        ];
    
        return view('user.dashboard', $viewData);
    }
}