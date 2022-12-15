<?php

namespace App\Services;

use App\Models\Position;
use Illuminate\Support\Facades\Validator;

class PesanService
{
    public function store($request)
    {
        try {
            $paylod = $request->only('nama', 'telepon', 'layanan', 'pertanyaan');
            $model = Pesan::make($paylod);
            $model->save();
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function update($request, $model)
    {
        try {
            $model->status = $request->status;
            $model->remark = $request->remark;
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

    /**
     * Validate input for check out
     */
    public function validateUpdate($request)
    {
        $validate = [
            'status' => 'required',
        ];

        $messages = [];

        $messages = [
            'status.required' => "Status harus diisi"
        ];

        if ($request->status == 3 || $request->status == 4) {
            $validate['remark'] = 'required';
            $messages['remark.required'] = 'Remark harus diisi';
        }

        $validator = Validator::make($request->all(), $validate, $messages);

        if ($validator->fails()) {
            return $validator->errors();
        }

        return true;
    }
}
