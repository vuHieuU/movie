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
            'name.required' => 'Name is required.',
            'name.string' => 'Name must be a string.',
            'name.max' => 'Name must only 7 characters.',
            'name.unique' => 'This name is already taken.',
            'type.required' => 'Type is required.',
            'type.string' => 'Type must be a string.',
            'type.max' => 'Type must not exceed 255 characters.',
            'expiry_date.required' => 'Expiry date is required.',
            'expiry_date.date' => 'Expiry date must be a valid date.',
            'expiry_date.after_or_equal' => 'Expiry date must be after or equal to today.',
            'value.required' => 'Value is required.',
            'value.numeric' => 'Value must be a number.',
            'value.gt' => 'Value must be greater than 0.',
        ];
    }
}





