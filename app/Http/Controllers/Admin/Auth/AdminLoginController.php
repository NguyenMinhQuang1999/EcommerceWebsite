<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AdminLoginController extends Controller
{
    //
    use AuthenticatesUsers;

    public function getLoginAdmin()
    {
        return view('admin.auth.login');
    }

    public function postLogin(Request $request)
    {
      //  dd($request);
        if(\Auth::guard('admins')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('/api-admin/sactistical');

        }
        return redirect()->back();
    }

    public function getLogout() {
        \Auth::guard('admins')->logout();
        return redirect()->to('/admin-auth/login');
    }

}