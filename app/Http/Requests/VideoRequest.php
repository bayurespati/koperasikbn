<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VideoRequest extends FormRequest
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
            'link' => 'required',
            'title' => 'required',
            'title_indo' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'link.required' => 'Link video harus diisi',
            'title.required' => 'Judul bahasa inggris harus diisi',
            'title_indo.required' => 'Judul bahasa indonesia harus diisi',
        ];
    }
}
