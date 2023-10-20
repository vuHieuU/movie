<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CategoriesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    // public function authorize(): bool
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => ':attribute không được để trống',
            'name.string' => ':attribute phải là ký tự chữ',
            // 'name.unique' => 'Đã tồn tại cơ sở dữ liệu.',
        ];
    }

    public function attributes()
    {
        return [
            'name' => "Thể loại",
        ];
    }
}
