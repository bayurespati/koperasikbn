<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BannerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|max:45|',
            'title_indo' => 'required|max:45',
            'description' => 'required"max:140',
            'description_indo' => 'required"max:140',
            'button_title' => 'max:20',
            'button_title_indo' => 'max:20',
            'button_two_title' => 'max:20',
            'button_two_title_indo' => 'max:20',
            'image_name' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Judul bahasa inggris harus diisi',
            'title.max' => 'Judul bahasa inggris maksimal 45 karekter',
            'title_indo.required' => 'Judul bahasa indonesia harus diisi',
            'title_indo.max' => 'Judul bahasa indonesia maksimal 45 karekter',
            'description.required' => 'Deskripsi bahasa inggris harus diisi',
            'description.max' => 'Deskripsi bahasa inggris maksimal 130 karekter',
            'description_indo.required' => 'Deskripsi bahasa indonesia harus diisi',
            'description_indo.max' => 'Deskripsi bahasa indonesia maksimal 130 karekter',
            'button_title.max' => 'Nama tombol bahasa inggris maksimal 20 karekter',
            'button_title_indo.max' => 'Nama tombol bahasa indonesia maksimal 20 karekter',
            'button_two_title.max' => 'Nama tombol ke 2 bahasa inggris maksimal 20 karekter',
            'button__two_title_indo.max' => 'Nama tombol ke 2 bahasa indonesia maksimal 20 karakter',
        ];
    }
}
