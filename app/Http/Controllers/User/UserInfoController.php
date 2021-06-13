<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequestUpdateInfo;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserInfoController extends Controller
{
    //
    public function updateInfo() 
    {
        return view('user.update_user');
    }

    public function saveUpdateInfo(UserRequestUpdateInfo $request) 
    {
        $data = $request->except('_token');
        $user = User::find(\Auth::id());
        $data['password'] = Hash::make($request->password);
        $user->update($data);

        return redirect()->back();
    }
}
