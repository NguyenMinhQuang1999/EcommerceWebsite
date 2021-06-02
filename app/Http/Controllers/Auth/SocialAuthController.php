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
        // $user = SocialAccountService::createOrGetUser(Socialite::driver($social)->stateless()->user(), $social);
         $user = SocialAccountService::createOrGetUser(Socialite::driver($social)->stateless()->user(), $social);
         dd($user);
        if (Auth::attempt([
            'email' => $user->email,
            'password' => $user->name
        ])) {
            // Authentication passed...
            return redirect()->intended('/');
        }

        //return redirect()->to('/home');
    }
}