<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArtikelRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
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
            'type' => 'required',
            'category' => 'required',
            'title' => 'required',
            'description' => 'required',
            'content' => 'required',
            'title_indo' => 'required',
            'description_indo' => 'required',
            'content_indo' => 'required',
            'image_name'  => 'required',
        ];
    }

    public function messages()
    {
        return [
            'type.required' => 'Tipe artikel harus diisi',
            'category.required' => 'Katergory artikel harus diisi',
            'title.required' => 'Judul bahasa inggris harus diisi',
            'description.required' => 'Deskripsi bahasa inggris harus diisi',
            'content.required' => 'Content bahasa inggris harus diisi',
            'title_indo.required' => 'Judul bahasa indonesia harus diisi',
            'description_indo.required' => 'Deskripsi bahasa indonesia harus diisi',
            'content_indo.required' => 'Content bahasa indonesia harus diisi',
            'image_name.required' => 'Gambar harus diisi',
        ];
    }
}
