<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

class SocialAuthController extends Controller
{
    public function vkAuth()
    {
        session()->get('soc.token');

        if (Auth::id()) {
            return redirect()->route('news.index');
        }

        return Socialite::with('vkontakte')->redirect();
    }

    public function vkAuthCallback(UserRepository $userRepository)
    {
        if (Auth::id()) {
            return redirect()->route('news.index');
        }
        // анти-паттерн "Copy-paste"
        $user = Socialite::driver('vkontakte')->user();
        session(['soc.token' => $user->token]);
        $userInsystem = $userRepository->getUserBySocId($user, 'vk');
        Auth::login($userInsystem);
        return redirect()->route('news.index');
    }

    public function facebookAuth()
    {
        session()->get('soc.token');

        if (Auth::id()) {
            return redirect()->route('news.index');
        }

        return Socialite::with('facebook')->redirect();

    }

    public function facebookAuthCallback(UserRepository $userRepository)
    {
        if (Auth::id()) {
            return redirect()->route('news.index');
        }
        // анти-паттерн "Copy-paste"
        $user = Socialite::driver('facebook')->user();
        session(['soc.token' => $user->token]);
        $userInsystem = $userRepository->getUserBySocId($user, 'facebook');
        Auth::login($userInsystem);
        return redirect()->route('news.index');
    }
}
