<?php

namespace App\Services;

use App\Models\Event;
use App\Models\Image;
use Illuminate\Support\Facades\DB;

class EventService
{
    public function store($request)
    {
        try {
            $paylod = $request->only('title', 'description', 'content', 'image_name');
            $model = Event::make($paylod);
            $model->image_link = saveImage($request);
            DB::transaction(function () use ($request, $model) {
                $model->save();
                $model->tags()->attach($request->tags);
            });
            return $model;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function update($request, $model)
    {
        try {
            //if update new image
            if ($model->image_name != $request->image_name) {
                removeImage($model); //-- removeImage helpers function -- //
                $model->image_link = saveImage($request);
                $model->image_name = $request->image_name;
            }

            $model->description  = $request->description;
            $model->content      = $request->content;
            $model->title        = $request->title;

            DB::transaction(function () use ($request, $model) {
                $model->update();
                $model->tags()->sync($request->tags);
            });
            return $model;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function delete($model)
    {
        try {
            removeImage($model);
            return $model->delete();
        } catch (\Exception $e) {
            return false;
        }
    }

    public function addImage($request, $event)
    {
        try {
            $image = new Image();
            $image->name = $request->name;
            $image->image_name = $request->image_name;
            $image->image_link = saveImage($request);
            $event->images()->save($image);
            return $image;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function deleteImage($request, $event)
    {
        try {
            $event->images()->where('id', '=', $request->id)->delete();
            return $event;
        } catch (\Exception $e) {
            return false;
        }
    }
}
