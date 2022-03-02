<?php

namespace App\Services;

use App\Models\JabatanKoperasi;

class JabatanKoperasiService
{
    public function store($request)
    {
        try {
            $paylod = $request->only('nama');
            $model = JabatanKoperasi::make($paylod);
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
