<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class filmsRequest extends FormRequest
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
            'name' => 'required|string|unique:films',
            'duration' => 'required|numeric',
            'description' => 'required|string',
            'thumb' => 'required',
            'director' => 'required|string',
            'actor' => 'required|string',
            'language' => 'required|string',
            'premiere_date' => 'required|string',
            'country' => 'required|string',
            'trailer' => 'required|string',
            'status' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => ':attribute không được để trống',
            'name.string' => ':attribute phải là ký tự chữ',
            'name.unique' => 'Đã tồn tại cơ sở dữ liệu.',
            'duration.required' => ':attribute không được để trống',
            'duration.number' => ':attribute phải là ký tự số',
            'thumb.required' => ':attribute không được để trống',
            'director.required' => ':attribute không được để trống',
            'director.string' => ':attribute phải là ký tự chữ',
            'actor.required' => ':attribute không được để trống',
            'actor.string' => ':attribute phải là ký tự chữ',
            'language.required' => ':attribute không được để trống',
            'language.string' => ':attribute phải là ký tự chữ',
            'premiere_date.required' => ':attribute không được để trống',
            'country.required' => ':attribute không được để trống',
            'country.string' => ':attribute phải là ký tự chữ',
            'trailer.required' => ':attribute không được để trống',
            'trailer.string' => ':attribute phải là ký tự chữ',
            'status.required' => ':attribute không được để trống',
        ];
    }

    public function attributes()
    {
        return [
            'name' => "Tên phim",
            'duration' => 'Thời lượng phim',
            'description' => 'Mô tả phim',
            'thumb' => 'Ảnh phim',
            'director' => 'Đạo diễn',
            'actor' => 'Diễn viên',
            'language' => 'Ngôn ngữ',
            'premiere_date' => 'Lịch chiếu',
            'country' => 'Quốc gia',
            'trailer' => 'Trailer',
            'status' => 'Trạng thái',
        ];
    }
}
