<?php

namespace App\Services;

use App\Models\JenisPengajuan;

class JenisPengajuanService
{
    public function store($request)
    {
        try {
            $paylod = $request->only('nama');
            $model = JenisPengajuan::make($paylod);
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
