<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FaqRequest extends FormRequest
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
            'question' => 'required',
            'question_indo' => 'required',
            'answer' => 'required',
            'answer_indo' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'question.required' => 'Pertanyan dalam bahasa inggris harus diisi',
            'question_indo.required' => 'Pertannyan dalam bahasa indonesia harus diisi',
            'answer.required' => 'Jawaban dalam bahasa inggris harus diisi',
            'answer_indo.required' => 'Jawaban dalam bahasa indonesia harus diisi',
        ];
    }
}
