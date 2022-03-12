<?php

namespace App\Services;

use App\User;

class UserService
{
    public function create($request = null)
    {
        try {
            $paylod = $request->only(
                'nama',
                'nip',
                'email',
                'phone',
                'tanggal_masuk',
                'no_anggota',
                'divisi_id',
                'role_id',
                'jabatan_kbn_id',
            );

            $model = User::make($paylod);
            $model->password = bcrypt("password");
            $model->image_link = $request->image_name == "" || $request->image_name == null ? "" : saveImage($request);
            $model->save();

            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function update($request, $model)
    {
        try {
            if ($model->image_name != $request->image_name) {
                removeImage($model);
                $model->image_link = saveImage($request);
                $model->image_name = $request->image_name;
            }

            $model->nama = $request->nama;
            $model->nip = $request->nip;
            $model->email = $request->email;
            $model->phone = $request->phone;
            $model->tanggal_masuk = $request->tanggal_masuk;
            $model->no_anggota = $request->no_anggota;
            $model->divisi_id = $request->divisi_id;
            $model->role_id = $request->role_id;
            $model->jabatan_kbn_id = $request->jabatan_kbn_id;
            $model->update();

            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function delete($model)
    {
        try {
            removeImage($model);
            $model->delete();

            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
}
