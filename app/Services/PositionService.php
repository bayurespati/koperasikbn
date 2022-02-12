<?php

namespace App\Services;

use App\Models\Position;

class PositionService
{
    public function store($request)
    {
        try {
            $paylod = $request->only('name');
            $model = Position::make($paylod);
            $model->order = (int) Position::max('order') + 1;
            $model->save();
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function update($request, $model)
    {
        try {
            $model->name = $request->name;
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
