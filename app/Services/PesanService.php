<?php

namespace App\Services;

use App\Models\Pesan;
use Illuminate\Support\Facades\Validator;

class PesanService
{
    public function store($request)
    {
        try {
            $paylod = $request->only('nama', 'telepone', 'layanan', 'pertanyaan');
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

    public function validateStore($request)
    {
        $validate = [
            'nama' => 'required',
            'telepone' => 'required',
            'layanan' => 'required',
            'pertanyaan' => 'required',
        ];

        $messages = [];

        $messages = [
            'nama.required' => "Nama harus diisi",
            'telepone.required' => "Telepon harus diisi",
            'layanan.required' => "Layanan harus diisi",
            'pertanyaan.required' => "Pertanyaan harus diisi",
        ];

        $validator = Validator::make($request->all(), $validate, $messages);

        if ($validator->fails()) {
            return $validator->errors();
        }

        return true;
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
