<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\LaporanService;
use App\Models\Laporan;
use App\Http\Requests\LaporanRequest;

class laporanController extends Controller
{
    private $laporanService;

    public function __construct(LaporanService $laporanService)
    {
        $this->laporanService = $laporanService;
    }


    /**
     * Data of a user
     *
     */
    public function index()
    {
        return Laporan::all();
    }

    /**
     * Data of a user
     *
     */
    public function getInternal()
    {
        return Laporan::where('is_internal', true)->get();
    }


    /**
     * Data of a user
     *
     */
    public function getEksternal()
    {
        return Laporan::where('is_internal', false)->get();
    }
    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(LaporanRequest $request)
    {
        $laporanService = $this->laporanService->store($request);

        if (!$laporanService)
            return response()->json(['errors' => [
                'error' => ['Gagal menambahkan laporan']
            ]], 400);

        return response()->json('Berhasil menambahkan laporan', 200);
    }


    /**
     * Update the specified resource in storage.
     *
     */
    public function update(LaporanRequest $request, Laporan $laporan)
    {
        $laporanService = $this->laporanService->update($request, $laporan);

        if (!$laporanService)
            return response()->json(['errors' => [
                'error' => ['Gagal mengubah laporan']
            ]], 400);

        return response()->json('Berhasil mengubah data laporan', 200);
    }


    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy(Laporan $laporan)
    {
        $laporanService = $this->laporanService->delete($laporan);

        if (!$laporanService)
            return response()->json(['errors' => [
                'error' => ['Gagal menghapus data laporan']
            ]], 400);

        return response()->json('Berhasil menghapus data laporan', 200);
    }
}
