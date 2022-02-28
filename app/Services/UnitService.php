<?php

namespace App\Services;

use App\Models\Unit;

class UnitService
{
    public function store($request)
    {
        try {
            $paylod = $request->only('nama', 'kode');
            $model = Unit::make($paylod);
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
