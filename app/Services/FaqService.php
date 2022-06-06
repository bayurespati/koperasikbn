<?php

namespace App\Services;

use App\Models\Faq;

class FaqService
{
    public function store($request)
    {
        try {
            $paylod = $request->only('question', 'question_indo', 'answer', 'answer_indo');
            $model = Faq::make($paylod);
            $model->save();
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function update($request, $model)
    {
        try {
            $model->question = $request->question;
            $model->question_indo = $request->question_indo;
            $model->answer = $request->answer;
            $model->answer_indo = $request->answer_indo;
            $model->update();
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function delete($model)
    {
        return $model->delete();
    }
}
