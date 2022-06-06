<?php

namespace App\Services;

use App\Models\Video;

class VideoService
{
    public function store($request)
    {
        try {
            $paylod      = $request->only('link', 'category');
            $model       = Video::make($paylod);
            $model->type = 'media';
            $model->save();
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function update($request, $model)
    {
        try {
            $model->link     = $request->link;
            $model->category = $request->category;
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
