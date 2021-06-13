<?php

namespace App\Http\Controllers\User;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;;
use App\Models\Transaction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequestUpdateInfo;


class UserDashboardController extends Controller
{
    //
    public function dashboard(Request $request)
    {
        
        $userId = Auth::id();
        $total =  DB::table('transactions')->select('id')->where('tst_user_id', $userId );
        $tongDon = $total->count();
        $dangGiao = $total->where('tst_status', 2)->count();
        $daGiao = $total->where('tst_status', 3)->count();
        $daHuy = $total->where('tst_status', -1)->count();


        $transactions = Transaction::whereRaw(1)->where('tst_user_id', Auth::id());

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


        $viewData = [
        'tongDon' => $tongDon,
        'daGiao' =>  $daGiao,
        'dangGiao' =>  $dangGiao,
        'daHuy' => $daHuy,
        'transactions' => $transactions,
        'query' => $request->query()
        ];
    
        return view('user.dashboard', $viewData);
    }

    public function saveUpdateInfo(UserRequestUpdateInfo $request) 
    {
        $data = $request->except('_token');
        $user = User::find(\Auth::id());
        $user->update($data);

        return redirect()->back();
    }
}