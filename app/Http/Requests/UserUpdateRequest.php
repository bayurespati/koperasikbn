<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
            "nama" => "required",
            "nip" => "required|unique:users,nip," . $this->id,
            "email" => "email|unique:users,email," . $this->id,
            "divisi_id" => "required",
            "role_id" => "required",
        ];
    }

    public function messages()
    {
        return [
            "nama.required" => "Nama harus diisi",
            "nip.required" => "NIP harus diisi",
            "nip.unique" => "NIP sudah ada",
            "email.unique" => "Email sudah ada",
            "divisi_id.required" => "Divisi harus di pilih",
            "role_id.required" => "Role harus di pilih"
        ];
    }
}
