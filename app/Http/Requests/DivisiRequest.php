<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DivisiRequest extends FormRequest
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
            'nama' => 'required|unique:divisi,nama,' . $this->id,
            'kode' => 'required|unique:divisi,kode,' . $this->id,
            'unit_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'nama.required' => 'Nama harus diisi',
            'nama.unique' => 'Nama sudah ada',
            'kode.required' => 'Kode harus diisi',
            'kode.unique' => 'Kode sudah ada',
            'unit_id.required' => 'Unit harus diisi',
        ];
    }
}
