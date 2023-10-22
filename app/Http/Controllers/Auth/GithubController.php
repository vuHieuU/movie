<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class GitHubController extends Controller
{
    public function redirectToGitHub()
    {
        return Socialite::driver('github')->redirect();
    }

    public function handleGitHubCallback()
    {
        $user = Socialite::driver('github')->user();

        $gitUser = User::updateOrCreate([
            'github_id' => $user->id
        ], [
            'name' => $user->name ?? 'gues',
            'email' => $user->email,
            'password' => Hash::make(Str::random(10))
        ]);
        Auth::login($gitUser);

        return redirect()->route('home');
    }
}
