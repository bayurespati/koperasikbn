<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JabatanKoperasiRequest extends FormRequest
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
            'nama' => 'required|unique:jabatan_koperasi,nama,' . $this->id,
            'user_id' => 'required|unique:jabatan_koperasi,user_id,' . $this->id,
        ];
    }

    public function messages()
    {
        return [
            'nama.required' => 'Nama harus diisi',
            'nama.unique' => 'Nama sudah ada',
            'user_id.required' => 'User harus dipilih',
            'user_id.unique' => 'User sudah ada memiliki jabatan'
        ];
    }
}
