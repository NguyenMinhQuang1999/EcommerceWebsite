<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequestUpdateInfo;
use Illuminate\Http\Request;
use App\User;
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
        $user->update($data);

        return redirect()->back();
    }
}
