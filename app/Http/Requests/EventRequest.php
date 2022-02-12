<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            'title'       => 'required|unique:events,title,' . $this->id,
            'description' => 'required',
            'image_name'  => 'required',
            'content'     => 'required',
            'tags'        => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required.required' => 'Judul harus diisi',
            'description.required'    => 'Deskripsi harus diisi',
            'image_name.required'     => 'Image harus diisi',
            'content.required'        => 'Content harus diisi',
            'tags.required'           => 'Tags harus diisi',
        ];
    }
}
