<?php

namespace App\Http\Controllers;

use App\Services\JenisPengajuanService;
use App\Models\JenisPengajuan;
use App\Http\Requests\JenisPengajuanRequest;

class JenisPengajuanController extends Controller
{
    private $jenisPengajuanService;

    public function __construct(JenisPengajuanService $jenisPengajuanService)
    {
        $this->jenisPengajuanService = $jenisPengajuanService;
    }


    /** 
     * Data of a user
     * 
     */
    public function index()
    {
        return JenisPengajuan::all();
    }


    /** 
     * Store a newly created resource in storage. 
     * 
     */
    public function store(JenisPengajuanRequest $request)
    {
        $jenisPengajuanService = $this->jenisPengajuanService->store($request);

        if (!$jenisPengajuanService)
            return response()->json(['errors' => [
                'error' => ['Gagal menambahkan jenis pengajuan']
            ]], 400);

        return response()->json('Berhasil menambahkan jenis pengajuan', 200);
    }


    /** 
     * Update the specified resource in storage. 
     * 
     */
    public function update(JenisPengajuanRequest $request, JenisPengajuan $jenisPengajuan)
    {
        $jenisPengajuanService = $this->jenisPengajuanService->update($request, $jenisPengajuan);

        if (!$jenisPengajuanService)
            return response()->json(['errors' => [
                'error' => ['Gagal mengubah jenis pengajuan']
            ]], 400);

        return response()->json('Berhasil mengubah jenis pengajuan', 200);
    }


    /** 
     * Remove the specified resource from storage. 
     * 
     */
    public function destroy(JenisPengajuan $jenisPengajuan)
    {
        $jenisPengajuanService = $this->jenisPengajuanService->delete($jenisPengajuan);

        if (!$jenisPengajuanService)
            return response()->json(['errors' => [
                'error' => ['Gagal menghapus data jenis pengajuan']
            ]], 400);

        return response()->json('Berhasil menghapus jenis pengajuan', 200);
    }
}
