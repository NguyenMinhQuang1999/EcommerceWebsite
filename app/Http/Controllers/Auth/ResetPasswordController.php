<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequestNewPassword;
use App\Mail\ResetPasswordEmail;
use App\Providers\RouteServiceProvider;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    public function getEmailReset() 
    {
        return view('auth.passwords.email');
    }

    public function checkEmailResetPassword(Request $request)
    {
        $account  = DB::table('users')->where('email', $request->email)->first();
        if($account) {
            $token =  Hash::make($account->email.$account->id);
            DB::table('password_resets')
            ->insert([
                'email' => $account->email,
                'token' => ($token),
                'created_at' => Carbon::now()
            ]);
           $link = route('get.new_password', ['email' => $account->email, '_token' => $token]);
           Mail::to($account->email)->send(new ResetPasswordEmail($link));
           return redirect()->to('/');
        }
        toastError('Email không tồn tại!');
        return redirect()->back();
    }

    public function changePassword(Request $request) 
    {
        $token = $request->_token;
        $checkToken = DB::table('password_resets')->where('token', $token)->first();
        if(!$checkToken) {
            return redirect()->to('/');
        }
        //check time 
        $time = Carbon::now();
        if($time->diffInMinutes($checkToken->created_at) > 3) {
            DB::table('password_resets')->where('email', $request->email)->delete();
            toastError('Đã hết hạn 3 phút để xác nhận!');
            return redirect()->to('/');

        }
        return view('auth.passwords.reset');

    }

    public function savePassword(UserRequestNewPassword $request)
    {
        $password  = $request->password;
        $data['password'] = Hash::make($password);
        $email = $request->email;
        if(!$email) {
            return redirect()->to('/');
        }
        DB::table('users')->where('email', $email)->update($data);
        DB::table('password_resets')->where('email', $email)->delete();
        toastSuccess('Thay đổi mật khẩu thành công!');
        return redirect()->route('get.login');
    }


}