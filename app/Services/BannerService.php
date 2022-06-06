<?php

namespace App\Services;

class BannerService
{
    public function update($request, $model)
    {
        try {
            if ($model->image_link != $request->image_file) {
                removeImage($model);
                $model->image_name = $request->image_name;
                $model->image_link = saveImage($request);
            }
            $model->is_active = $request->is_active;
            $model->title = $request->title;
            $model->title_indo = $request->title_indo;
            $model->description = $request->description;
            $model->description_indo = $request->description_indo;
            $model->button_link = $request->button_link;
            $model->button_title = $request->button_title;
            $model->button_title_indo = $request->button_title_indo;
            $model->button_two_link = $request->button_two_link;
            $model->button_two_title = $request->button_two_title;
            $model->button_two_title_indo = $request->button_two_title_indo;
            $model->update();
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
}
