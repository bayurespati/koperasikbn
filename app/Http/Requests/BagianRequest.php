<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BagianRequest extends FormRequest
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
            'nama' => 'required|unique:bagian,nama,' . $this->id,
            'divisi_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'nama.required' => 'Nama harus diisi',
            'nama.unique' => 'Nama sudah ada',
            'divisi_id.reqired' => 'Divisi harus dipilih',
        ];
    }
}
