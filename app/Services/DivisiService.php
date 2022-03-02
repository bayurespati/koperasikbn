<?php

namespace App\Services;

use App\Models\Divisi;

class DivisiService
{
    public function store($request)
    {
        try {
            $paylod = $request->only('nama', 'kode', 'unit_id');
            $model = Divisi::make($paylod);
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
            $model->kode = $request->kode;
            $model->unit_id = $request->unit_id;
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
