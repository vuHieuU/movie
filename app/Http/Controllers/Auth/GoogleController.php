<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google') //gọi đến dịch vụ google, tạo liên kết đến trang đăng nhập của google
            ->redirect();
    }
    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();

        $existingUser = User::where('email', $user->email)->first();

        if ($existingUser) {
            // Đăng nhập người dùng hiện có
            auth()->login($existingUser, true);
            return redirect()->route('home');
        } else {
            // Tạo một tài khoản mới nếu email chưa tồn tại
            $newUser = new User([
                'name' => $user->name,
                'email' => $user->email,
                'password' => bcrypt('randompassword'), // Hoặc có thể tạo mật khẩu ngẫu nhiên
            ]);
            $newUser->save();

            // Đăng nhập người dùng mới
            auth()->login($newUser, true);

            return redirect()->route('home');
        }
    }
}
