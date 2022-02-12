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
            'name'  => 'required',
            'email' => 'required|unique:users,email,' . $this->id,
            'phone' => 'required|unique:users,phone,' . $this->id,
        ];
    }

    public function messages()
    {
        return [
            'name.required'  => 'Nama harus diisi',
            'email.required' => 'Email harus diisi',
            'email.email'    => 'Format email salah',
            'email.unique'   => 'Email Sudah ada',
            'phone.required' => 'No telphone harus diisi',
            'phone.unique'   => 'No telphone sudah ada'
        ];
    }
}
