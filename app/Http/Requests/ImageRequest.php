<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImageRequest extends FormRequest
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
            'category' => 'required',
            'title' => 'required',
            'title_indo' => 'required',
            'image_name'  => 'required',
        ];
    }

    public function messages()
    {
        return [
            'category.required' => 'Katergory artikel harus diisi',
            'title.required' => 'Judul bahasa inggris harus diisi',
            'title_indo.required' => 'Judul bahasa indonesia harus diisi',
            'image_name.required' => 'Gambar harus diisi',
        ];
    }
}
