<?php

namespace App\Http\Controllers;

use App\Services\BagianService;
use App\Models\Bagian;
use App\Http\Requests\BagianRequest;

class BagianController extends Controller
{
    private $bagianService;

    public function __construct(BagianService $bagianService)
    {
        $this->bagianService = $bagianService;
    }


    /** 
     * Data of a user
     * 
     */
    public function index()
    {
        return Bagian::with('divisi')->get();
    }


    /** 
     * Store a newly created resource in storage. 
     * 
     */
    public function store(BagianRequest $request)
    {
        $bagianService = $this->bagianService->store($request);

        if (!$bagianService)
            return response()->json(['errors' => [
                'error' => ['Gagal menambahkan bagian']
            ]], 400);

        return response()->json('Berhasil menambahkan bagian', 200);
    }


    /** 
     * Update the specified resource in storage. 
     * 
     */
    public function update(BagianRequest $request, Bagian $bagian)
    {
        $bagianService = $this->bagianService->update($request, $bagian);

        if (!$bagianService)
            return response()->json(['errors' => [
                'error' => ['Gagal mengubah bagian']
            ]], 400);

        return response()->json('Berhasil mengubah data bagian', 200);
    }

    /** 
     * Remove the specified resource from storage. 
     * 
     */
    public function destroy(Bagian $bagian)
    {
        $bagianService = $this->bagianService->delete($bagian);

        if (!$bagianService)
            return response()->json(['errors' => [
                'error' => ['Gagal menghapus data bagian']
            ]], 400);

        return response()->json('Berhasil menghapus bagian', 200);
    }
}
