<?php

namespace App\Http\Controllers;

use App\Services\JabatanKbnService;
use App\Models\JabatanKbn;
use App\Http\Requests\JabatanKbnRequest;

class JabatanKbnController extends Controller
{
    private $jabatanKbnService;

    public function __construct(JabatanKbnService $jabatanKbnService)
    {
        $this->jabatanKbnService = $jabatanKbnService;
    }


    /** 
     * Data of a user
     * 
     */
    public function index()
    {
        return JabatanKbn::all();
    }


    /** 
     * Store a newly created resource in storage. 
     * 
     */
    public function store(JabatanKbnRequest $request)
    {
        $jabatanKbnService = $this->jabatanKbnService->store($request);

        if (!$jabatanKbnService)
            return response()->json(['errors' => [
                'error' => ['Gagal menambahkan jabatan kbn']
            ]], 400);

        return response()->json('Berhasil menambahkan jabatan kbn', 200);
    }


    /** 
     * Update the specified resource in storage. 
     * 
     */
    public function update(JabatanKbnRequest $request, JabatanKbn $jabatanKbn)
    {
        $jabatanKbnService = $this->jabatanKbnService->update($request, $jabatanKbn);

        if (!$jabatanKbnService)
            return response()->json(['errors' => [
                'error' => ['Gagal mengubah jabatan kbn']
            ]], 400);

        return response()->json('Berhasil mengubah data jabatan kbn', 200);
    }


    /** 
     * Remove the specified resource from storage. 
     * 
     */
    public function destroy(JabatanKbn $jabatanKbn)
    {
        $jabatanKbnService = $this->jabatanKbnService->delete($jabatanKbn);

        if (!$jabatanKbnService)
            return response()->json(['errors' => [
                'error' => ['Gagal menghapus data jabatan kbn']
            ]], 400);

        return response()->json('Berhasil menghapus jabatan kbn', 200);
    }
}
