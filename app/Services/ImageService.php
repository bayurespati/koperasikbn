<?php

namespace App\Services;

use App\Models\Image;

class ImageService
{
    public function store($request)
    {
        try {
            $paylod = $request->only(
                'title',
                'title_indo',
                'image_name'
            );
            $model = Image::make($paylod);
            $model->image_link = saveImage($request);
            $model->save();
            return true;
        } catch (\Exception $e) {
            return $e->getMessage();
            return false;
        }
    }

    public function update($request, $model)
    {
        try {
            //if update new image
            if ($model->image_link != $request->image_file) {
                removeImage($model); //-- removeImage helpers function -- //
                $model->image_link = saveImage($request);
                $model->image_name = $request->image_name;
            }
            $model->title      = $request->title;
            $model->title_indo = $request->title_indo;
            $model->update();

            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function delete($model)
    {
        try {
            removeImage($model);
            $model->delete();
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
}
