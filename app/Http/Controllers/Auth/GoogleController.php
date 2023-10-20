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
            // Địa chỉ email đã tồn tại
            return redirect()->route('register')->with('message', 'Địa chỉ email từ Google đã được sử dụng. Vui lòng sử dụng tài khoản đã đăng ký.');
        } else {
            $newUser = new User([
                'name' => $user->name,
                'email' => $user->email,
                'password' => bcrypt('randompassword'), // Hoặc có thể tạo mật khẩu ngẫu nhiên
            ]);
            $newUser->save();
        }

        // Đăng nhập người dùng (bất kể người dùng là tài khoản hiện có hoặc mới)
        auth()->login($newUser, true);

        return redirect()->route('home');
    }
}
