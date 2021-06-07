<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\SocialAccountService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthController extends Controller
{
    //
    public function redirect($social)
    {

        return Socialite::driver($social)->redirect();
    }
    public function callback($social)
    {

         $user = SocialAccountService::createOrGetUser(Socialite::driver($social)->stateless()->user(), $social);

        if (Auth::attempt([
            'email' => $user->email,
            'password' => $user->name
        ]))
        {
            // Authentication passed...a

            return redirect()->to('');
        }

        //return redirect()->to('/home');
    }
}
