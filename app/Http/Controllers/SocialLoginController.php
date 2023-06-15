<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Exception;

class SocialLoginController extends Controller
{
    private function redirectToSocialSite($social_name)
    {
        return Socialite::driver($social_name)->redirect();
    }

    private function handleCallback($social_name)
    {
        try {
            $social_user = Socialite::driver($social_name)->user();
            $user = User::where("{$social_name}_id", $social_user->id)->first();

            if ($user) {

                // If the user exists, log in.
                Auth::login($user);

            } else {

                // If the user does not exist, create a new user.

                // Create a random password.
                $str_password = substr(str_shuffle('ABCDEFGHJKLMNPQRSTUVWXYZabcdefghijkmnpqrstuvwxyz0123456789!@#$%&'), 0, 16);

                $new_user = User::create([
                    "{$social_name}_id" => $social_user->id,
                    'email' => "{$social_name}_$social_user->id",
                    'password' => encrypt($str_password),
                    'first_name' => "First Name",
                    'last_name' => "Last Name",
                ]);

                Auth::login($new_user);

            }

            return redirect()->route('top');

        } catch (Exception $e) {
            throw $e->getMessage();
        }
    }


    public function social_login()
    {
        return view('users.social_login');
    }

    // Redirect to google for authentication
    public function redirectToGoogle()
    {
        return $this->redirectToSocialSite('google');
    }

    // Redirect to facebook for authentication
    public function redirectToFacebook()
    {
        return $this->redirectToSocialSite('facebook');
    }

    // After google login redirect to this
    public function handleGoogleCallback()
    {
        return $this->handleCallback('google');
    }

    // After facebook login redirect to this
    public function handleFacebookCallback()
    {
        return $this->handleCallback('facebook');
    }


}
