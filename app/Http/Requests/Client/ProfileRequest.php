<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [
            'name' => 'required|string|max:255',
            'phone' => [
                'required',
                'string',
                'max:15',
                // Sử dụng regex để xác thực số điện thoại Việt Nam
                'regex:/(((\+|)84)|0)(3|5|7|8|9)+([0-9]{8})\b/',
            ],
            'address' => 'nullable|string|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];

        // Kiểm tra xem người dùng muốn thay đổi mật khẩu
        if ($this->input('change_password')) {
            $rules['new_password'] = 'required|min:6|confirmed';
            $rules['old_password'] = [
                'required',
                function ($attribute, $value, $fail) {
                    if (!Hash::check($value, Auth::user()->password)) {
                        $fail('Mật khẩu hiện tại không đúng.');
                    }
                },
            ];
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên.',
            'phone.required' => 'Vui lòng nhập số điện thoại.',
            'phone.regex' => 'Vui lòng nhập số điện thoại Việt Nam',
            'logo.image' => 'Tệp tải lên không phải là hình ảnh.',
            'logo.mimes' => 'Hình ảnh phải có định dạng jpeg, png, jpg, hoặc gif.',
            'logo.max' => 'Kích thước tệp hình ảnh không được vượt quá 2MB.',
            'new_password.required' => 'Vui lòng nhập mật khẩu mới.',
            'new_password.min' => 'Mật khẩu phải chứa ít nhất 6 ký tự.',
            'new_password.confirmed' => 'Xác nhận mật khẩu không khớp.',
            'old_password.required' => 'Vui lòng nhập mật khẩu hiện tại.',
        ];
    }
}
