<?php
namespace App\Services;

use Laravel\Socialite\Contracts\User as ProviderUser;
use App\Models\SocialAccount;
use App\User;
use Illuminate\Support\Facades\Hash;

class SocialAccountService
{
    public static function createOrGetUser(ProviderUser $providerUser, $social)
    {
        $account = SocialAccount::whereProvider($social)
            ->whereProviderUserId($providerUser->getId())
            ->first();
        if ($account) {
           return $account->user;
        } else {
            $email = $providerUser->email ?? $providerUser->getNickname();
            $account = new SocialAccount([
                'provider_user_id' => $providerUser->id,
                'provider' => $social
            ]);
            $user = User::whereEmail($email)->first();

            if (!$user) {

                $user = User::create([
                    'email' => $email,
                    // 'phone' => $providerUser->id,
                    'name' => $providerUser->name,
                    'password' =>Hash::make($providerUser->name),
                ]);
            }

            $account->user()->associate($user);
            $account->save();
            return $user;
        }
    }
}