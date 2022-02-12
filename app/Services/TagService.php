<?php

namespace App\Services;

use App\Models\Tag;

class TagService
{
    public function store($request)
    {
        try {
            $paylod = $request->only('name');
            $model = Tag::make($paylod);
            $model->save();
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function update($request, $model)
    {
        try {
            $paylod = $request->only('name');
            $model->update($paylod);
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
