<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\ProfileRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpKernel\Profiler\Profile;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
   
        $taitel = "myaccount";
        return view('client.myaccount', compact("taitel"));
    }
    public function edit()
    {
        $taitel = "Editaccount";
        return view('client.editaccount', compact("taitel"));
    }
    public function profile(ProfileRequest $request)
    {
        $user = Auth::user();
        $user = User::find(\auth()->id()); // ham tu lay ID roi
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->logo = $request->logo;
        $user->gender = $request->gender;
        $user->address = $request->address;

        if ($request->hasFile('logo')) {
            $logo = $request->file('logo')->getClientOriginalName();
            $request->file('logo')->storeAs('public/images', $logo);

            $oldLogo = $user->logo;

            if ($oldLogo !== $logo) {
                Storage::delete('public/images/' . $oldLogo);
            }

            $user->fill([
                'logo' => $logo,
            ])->save();
        }

        if ($request->has('change_password')) {

            // Kiểm tra mật khẩu hiện tại
            $current_user = auth()->user();
            if (Hash::check($request->old_password, $current_user->password)) {
                $current_user->update([
                    'password' => bcrypt($request->new_password)
                ]);
                return redirect()->route('profile')->with('success', 'Cập nhật hoàn thành');
            } else {
                return redirect()->back()->with('error', 'Mật khẩu hiện tại không đúng');
            }

            // Cập nhật mật khẩu mới
            $user->password = bcrypt($request->password);
        }

        $user->save();

        return redirect()->route('profile')->with('success', 'Cập nhật hoàn thành.');
    }
}
