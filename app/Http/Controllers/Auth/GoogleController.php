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

        // Kiểm tra xem người dùng có tồn tại trong hệ thống không
        $existingUser = User::where('email', $user->email)->first();

        if ($existingUser) {
            // Nếu người dùng tồn tại, cập nhật thông tin từ Google (nếu cần)
            $existingUser->name = $user->name;
            $existingUser->logo = $user->logo;
            $existingUser->save();

            // Đăng nhập người dùng tồn tại
            auth()->login($existingUser, true);
        } else {
            // Nếu không có người dùng tồn tại, tạo tài khoản mới
            $newUser = new User([
                'name' => $user->name,
                'email' => $user->email,
                'password' => bcrypt('randompassword'), // Hoặc có thể tạo mật khẩu ngẫu nhiên
            ]);
            $newUser->save();
            auth()->login($newUser, true);
        }

        return redirect()->route('home');
    }
}
