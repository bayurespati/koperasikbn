<?php

namespace App\Services;

use App\Models\Artikel;

class ArtikelService
{
    public function store($request)
    {
        try {
            $paylod = $request->only(
                'type',
                'category',
                'title',
                'description',
                'content',
                'title_indo',
                'description_indo',
                'content_indo',
                'image_name'
            );
            $model = Artikel::make($paylod);
            $model->image_link = saveImage($request);
            $model->save();
            return true;
        } catch (\Exception $e) {
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
            $model->type              = $request->type;
            $model->category          = $request->category;
            $model->description       = $request->description;
            $model->content           = $request->content;
            $model->title             = $request->title;
            $model->description_indo  = $request->description;
            $model->content_indo      = $request->content;
            $model->title_indo        = $request->title;
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
