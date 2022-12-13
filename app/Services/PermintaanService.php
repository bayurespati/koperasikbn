<?php

namespace App\Services;

use App\Models\JenisPengajuan;
use App\Models\Permintaan;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class PermintaanService
{
    public function store($request)
    {
        try {
            $paylod = $request->only(
                'user_id',
                'jenis_pengajuan_id',
                'tanggal_pengajuan',
                'nominal',
                'is_online',
                'status',
                'keterangan',
                'keperluan',
                'dokumen_1_name',
                'dokumen_2_name',
                'dokumen_3_name',
                'lama_angsuran'
            );
            $model = Permintaan::make($paylod);
            if (($request->jenis_pengajuan_id == 1  || $request->jenis_pengajuan_id == 4) && $request->is_online) {
                $model->dokumen_1 = saveFileWithName($request->dokumen_1, $request->dokumen_1_name);
                $model->dokumen_1_name = $request->dokumen_1_name;
            }
            if ($request->jenis_pengajuan_id == 4 && $request->is_online) {
                $model->dokumen_2 = saveFileWithName($request->dokumen_2, $request->dokumen_2_name);
                $model->dokumen_2_name = $request->dokumen_2_name;
            }
            $model->save();
            return true;
        } catch (\Exception $e) {
            dd($e->getMessage());
            return false;
        }
    }

    public function update($request, $model)
    {
        try {
            //if update new file
            if ($request->is_online == false && $request->status == 4) {
                $model->dokumen_1 = saveFileWithName($request->dokumen_1, $request->dokumen_1_name);
                $model->dokumen_1_name = $request->dokumen_1_name;
            }
            $model->status = $request->status;
            $model->keterangan = $request->keterangan;
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
    public function validateStore($request, $user)
    {
        if ($request->jenis_pengajuan_id == 1) {
            $validate = [
                'jenis_pengajuan_id' => 'required',
                'tanggal_pengajuan'  => 'required',
                'user_id'            => 'required',
                'nominal'            => 'required|numeric|min:100000',
                'is_online'          => 'required',
            ];

            $messages =  $request->bahasa == "eng" ? [] : [
                'jenis_pengajuan.required' => 'Jenis pengajuan tidak boleh kosong',
                'tanggal_pengajuan.required' => 'Tanggal pengajuan tidak boleh kosong',
                'user_id.required' => 'User id tidak boleh kosong',
                'nominal.required' => 'Nominal tidak boleh kosong',
                'nominal.numeric' => 'Nominal harus anggka',
                'nominal.min' => 'Nominal paling kecil 100000',
                'is_online.required' => 'Jenis pembayaran tidak boleh kosong',
            ];

            //if is online
            if ($request->is_online == true) {
                $validate['dokumen_1'] = 'required';

                if ($request->bahasa == "id")
                    $messages['dokumen_1.required'] = 'Bukti trasnfer tidak boleh kosong';
            }
        }

        if ($request->jenis_pengajuan_id == 2) {
            $validate = [
                'jenis_pengajuan_id' => 'required',
                'tanggal_pengajuan'  => 'required',
                'user_id'            => 'required',
                'nominal'            => 'required|numeric',
                'lama_angsuran'      => 'required',
                'keperluan'          => 'required',
            ];

            $messages =  $request->bahasa == "eng" ? [] : [
                'jenis_pengajuan.required' => 'Jenis pengajuan tidak boleh kosong',
                'tanggal_pengajuan.required' => 'Tanggal pengajuan tidak boleh kosong',
                'user_id.required' => 'User id tidak boleh kosong',
                'nominal.required' => 'Nominal tidak boleh kosong',
                'nominal.numeric' => 'Nominal harus anggka',
                'lama_angsuran.required' => 'Lama angsuran tidak boleh kosong',
                'keperluan.required' => 'Keperluan tidak boleh kosong',
            ];
        }

        if ($request->jenis_pengajuan_id == 3) {
            $max_nominal = $user->tipe == "C" ? "500000" : "2000000";

            $validate = [
                'jenis_pengajuan_id' => 'required',
                'tanggal_pengajuan'  => 'required',
                'user_id'            => 'required',
                'nominal'            => 'required|numeric|max:' . $max_nominal,
                'lama_angsuran'      => 'required',
                'keperluan'          => 'required',
            ];

            $messages =  $request->bahasa == "eng" ? [] : [
                'jenis_pengajuan.required' => 'Jenis pengajuan tidak boleh kosong',
                'tanggal_pengajuan.required' => 'Tanggal pengajuan tidak boleh kosong',
                'user_id.required' => 'User id tidak boleh kosong',
                'nominal.required' => 'Nominal tidak boleh kosong',
                'nominal.numeric' => 'Nominal harus anggka',
                'nominal.min' => 'Nominal paling besar ' . $max_nominal,
                'lama_angsuran.required' => 'Lama angsuran tidak boleh kosong',
                'keperluan.required' => 'Keperluan tidak boleh kosong',
            ];
        }

        if ($request->jenis_pengajuan_id == 4) {
            $max_nominal = $user->tipe == "C" ? "500000" : "2000000";

            $validate = [
                'jenis_pengajuan_id' => 'required',
                'tanggal_pengajuan'  => 'required',
                'user_id'            => 'required',
                'nominal'            => 'required|numeric|max:' . $max_nominal,
                'lama_angsuran'      => 'required',
                'keperluan'          => 'required',
                'is_online'          => 'required',
            ];

            $messages =  $request->bahasa == "eng" ? [] : [
                'jenis_pengajuan.required' => 'Jenis pengajuan tidak boleh kosong',
                'tanggal_pengajuan.required' => 'Tanggal pengajuan tidak boleh kosong',
                'user_id.required' => 'User id tidak boleh kosong',
                'nominal.required' => 'Nominal tidak boleh kosong',
                'nominal.numeric' => 'Nominal harus anggka',
                'nominal.min' => 'Nominal paling besar ' . $max_nominal,
                'lama_angsuran.required' => 'Lama angsuran tidak boleh kosong',
                'keperluan.required' => 'Keperluan tidak boleh kosong',
                'is_online.required' => 'Jenis pembayaran tidak boleh kosong',
            ];

            //if is online
            if ($request->is_online == true) {
                $validate['dokumen_1'] = 'required';
                $validate['dokumen_2'] = 'required';

                if ($request->bahasa == "id") {
                    $messages['dokumen_1.required'] = 'Ktp tidak boleh kosong';
                    $messages['dokumen_2.required'] = 'Slip gaji tidak boleh kosong';
                }
            }
        }

        $validator = Validator::make($request->all(), $validate, $messages);

        if ($validator->fails()) {
            return $validator->errors();
        }

        return true;
    }

    public function validateUpdate($request, $user)
    {

        if ($request->jenis_pengajuan_id == 4 || $request->jenis_pengajuan_id == 1) {
            $validate = [
                'status' => 'required',
                'is_online' => 'required',
            ];

            $messages = [
                'status.required' => 'Status tidak boleh kosong',
                'is_online.required' => 'Status tidak boleh kosong',
            ];

            if ($request->is_online == false && $request->status == 4) {
                $validate['dokumen_1'] = 'required';
                $messages['dokumen_1.required'] = 'Kwitansi tidak boleh kosong';
            }

            if ($request->status == 3) {
                $validate['keterangan'] = 'required';
                $messages['keterangan.required'] = 'Keterangan tidak boleh kosong';
            }
        }

        $validator = Validator::make($request->all(), $validate, $messages);

        if ($validator->fails()) {
            return $validator->errors();
        }

        return true;
    }
}
