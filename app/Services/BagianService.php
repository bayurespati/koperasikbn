<?php

namespace App\Services;

use App\Models\Bagian;

class BagianService
{
    public function store($request)
    {
        try {
            $paylod = $request->only('nama', 'divisi_id');
            $model = Bagian::make($paylod);
            $model->save();
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function update($request, $model)
    {
        try {
            $model->nama = $request->nama;
            $model->divisi_id = $request->divisi_id;
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
