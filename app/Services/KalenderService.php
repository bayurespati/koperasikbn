<?php

namespace App\Services;

class KalenderService
{
    public function update($request, $model)
    {
        try {
            removeImage($model);
            $model->image_name = $request->image_name;
            $model->image_link = saveImage($request);
            $model->update();
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
}
