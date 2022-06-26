<?php

namespace App\Services;

use App\Models\Video;

class VideoService
{
    public function store($request)
    {
        try {
            $paylod      = $request->only('link', 'title', 'title_indo');
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
            $model->title_indo = $request->title_indo;
            $model->title      = $request->title;
            $model->link       = $request->link;
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
