<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class FoodRequest extends FormRequest
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
            'name' => 'required',
            'price' => 'required',
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
            'name.required' => 'Tên không được để trống.',
            'price.required' => 'Giá không được để trống.',
        ];
        
    }
}





