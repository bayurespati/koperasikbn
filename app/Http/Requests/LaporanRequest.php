<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LaporanRequest extends FormRequest
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
            'title' => 'required',
            'title_indo' => 'required',
            'description' => 'required',
            'description_indo' => 'required',
            'file_name' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'file_name.required' => 'File laporan harus diisi',
            'title.required' => 'Judul bahasa inggris harus diisi',
            'title_indo.required' => 'Judul bahasa indonesia harus diisi',
            'description.required' => 'Deskripsi bahasa inggris harus diisi',
            'description_indo.required' => 'Deskripsi bahasa indonesia harus diisi',
        ];
    }
}
