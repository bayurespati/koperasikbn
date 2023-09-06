<?php

namespace App\Services;

use App\Models\JabatanKoperasi;

class JabatanKoperasiService
{
    public function store($request)
    {
        try {
            $paylod = $request->only('nama', 'user_id', 'is_custom', 'user_name', 'image_name');
            $model = JabatanKoperasi::make($paylod);
            $model->image_link = $request->image_name == "" || $request->image_name == null ? "" : saveImage($request);
            $model->save();
            return true;
        } catch (\Exception $e) {
            dd($e->getMessage());
            return false;
        }
    }

    public function update($request, $model)
    {
        try {
            if ($model->image_link != $request->image_file) {
                removeImage($model);
                $model->image_link = saveImage($request);
                $model->image_name = $request->image_name;
            }
            $model->nama = $request->nama;
            $model->user_id = $request->user_id;
            $model->is_custom = $request->is_custom;
            $model->user_name = $request->user_name;
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
