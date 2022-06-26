<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PenghargaanService;
use App\Models\Penghargaan;
use App\Http\Requests\PenghargaanRequest;

class PenghargaanController extends Controller
{
    private $penghargaanService;

    public function __construct(PenghargaanService $penghargaanService)
    {
        $this->penghargaanService = $penghargaanService;
    }


    /**
     * Data of a penghargaan 
     *
     */
    public function index()
    {
        return Penghargaan::all();
    }


    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(PenghargaanRequest $request)
    {
        $file = $request->file('file_file');
        return [$file, "oke", $request->all(), $request->file_file, $request->data];
        $penghargaanService = $this->penghargaanService->store($request);

        if (!$penghargaanService)
            return response()->json(['errors' => [
                'error' => ['Gagal menambahkan penghargaan']
            ]], 400);

        return response()->json('Berhasil menambahkan penghargaan', 200);
    }


    /**
     * Update the specified resource in storage.
     *
     */
    public function update(PenghargaanRequest $request, Penghargaan $penghargaan)
    {
        $penghargaanService = $this->penghargaanService->update($request, $penghargaan);

        if (!$penghargaanService)
            return response()->json(['errors' => [
                'error' => ['Gagal mengubah penghargaan']
            ]], 400);

        return response()->json('Berhasil mengubah data penghargaan', 200);
    }


    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy(Penghargaan $penghargaan)
    {
        $penghargaanService = $this->penghargaanService->delete($penghargaan);

        if (!$penghargaanService)
            return response()->json(['errors' => [
                'error' => ['Gagal menghapus data penghargaan']
            ]], 400);

        return response()->json('Berhasil menghapus data penghargaan', 200);
    }
}
