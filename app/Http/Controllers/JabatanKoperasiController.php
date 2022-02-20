<?php

namespace App\Http\Controllers;

use App\Services\JabatanKoperasiService;
use App\Models\JabatanKoperasi;
use App\Http\Requests\JabatanKoperasiRequest;

class JabatanKoperasiController extends Controller
{
    private $jabatanKoperasiService;

    public function __construct(JabatanKoperasiService $jabatanKoperasiService)
    {
        $this->jabatanKoperasiService = $jabatanKoperasiService;
    }


    /** 
     * Data of a user
     * 
     */
    public function index()
    {
        return JabatanKoperasi::all();
    }


    /** 
     * Store a newly created resource in storage. 
     * 
     */
    public function store(JabatanKoperasiRequest $request)
    {
        $jabatanKoperasiService = $this->jabatanKoperasiService->store($request);

        if (!$jabatanKoperasiService)
            return response()->json(['errors' => [
                'error' => ['Gagal menambahkan jabatan koperasi']
            ]], 400);

        return response()->json('Berhasil menambahkan jabatan koperasi', 200);
    }


    /** 
     * Update the specified resource in storage. 
     * 
     */
    public function update(JabatanKoperasiRequest $request, JabatanKoperasi $jabatanKoperasi)
    {
        $jabatanKoperasiService = $this->jabatanKoperasiService->update($request, $jabatanKoperasi);

        if (!$jabatanKoperasi)
            return response()->json(['errors' => [
                'error' => ['Gagal mengubah jabatan koperasi']
            ]], 400);

        return response()->json('Berhasil mengubah data jabatan koperasi', 200);
    }

    /** 
     * Remove the specified resource from storage. 
     * 
     */
    public function destroy(JabatanKoperasi $jabatanKoperasi)
    {
        $jabatanKoperasiService = $this->jabatanKoperasiService->delete($jabatanKoperasi);

        if (!$jabatanKoperasiService)
            return response()->json(['errors' => [
                'error' => ['Gagal menghapus data jabatan koperasi']
            ]], 400);

        return response()->json('Berhasil menghapus jabatan koperasi', 200);
    }
}
