<?php

namespace App\Services;

use App\User;

class UserService
{
    public function create($request = null)
    {
        try {
            $paylod = $request->only(
                'name',
                'nip',
                'email',
                'phone',
                'divisi_id',
                'role_id',
            );

            $model = User::make($paylod);
            $model->password = bcrypt($request->password);
            $model->role_id = 3;
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

            $model->name = $request->name;
            $model->email = $request->email;
            $model->phone = $model->phone;
            $model->role_id = $model->role_id;
            $model->position_id = $model->position_id;
            $model->teacher_id = $model->teacher_id;
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
