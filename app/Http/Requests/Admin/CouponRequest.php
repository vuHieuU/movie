<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CouponRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // Chúng ta có thể đặt quyền truy cập ở đây, tùy theo logic của ứng dụng.
        // Ví dụ: bạn có thể kiểm tra xem người dùng có quyền thực hiện hành động này hay không.
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|size:7|unique:coupons,name',
            'type' => 'required|string|max:255',
            'value' => 'required|numeric|gt:0', 
            'expiry_date' => 'required|date|after_or_equal:today',
        ];
    }

    /**
     * Get custom validation messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Tên là trường bắt buộc.',
            'name.string' => 'Tên phải là một chuỗi.',
            'name.max' => 'Tên chỉ được tối đa 7 ký tự.',
            'name.unique' => 'Tên này đã tồn tại.',
            'type.required' => 'Loại là trường bắt buộc.',
            'type.string' => 'Loại phải là một chuỗi.',
            'type.max' => 'Loại không được vượt quá 255 ký tự.',
            'expiry_date.required' => 'Ngày hết hạn là trường bắt buộc.',
            'expiry_date.date' => 'Ngày hết hạn phải là ngày hợp lệ.',
            'expiry_date.after_or_equal' => 'Ngày hết hạn phải sau hoặc bằng ngày hiện tại.',
            'value.required' => 'Giá trị là trường bắt buộc.',
            'value.numeric' => 'Giá trị phải là số.',
            'value.gt' => 'Giá trị phải lớn hơn 0.',
        ];
        
    }
}





