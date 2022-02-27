<?php

namespace App\Http\Controllers;

use App\Services\DivisiService;
use App\Models\Divisi;
use App\Http\Requests\DivisiRequest;

class DivisiController extends Controller
{
    private $divisiService;

    public function __construct(divisiService $divisiService)
    {
        $this->divisiService = $divisiService;
    }


    /** 
     * Data of a user
     * 
     */
    public function index()
    {
        return Divisi::all();
    }


    /** 
     * Store a newly created resource in storage. 
     * 
     */
    public function store(DivisiRequest $request)
    {
        $divisiService = $this->divisiService->store($request);

        if (!$divisiService)
            return response()->json(['errors' => [
                'error' => ['Gagal menambahkan divisi']
            ]], 400);

        return response()->json('Berhasil menambahkan divisi', 200);
    }


    /** 
     * Update the specified resource in storage. 
     * 
     */
    public function update(DivisiRequest $request, divisi $divisi)
    {
        $divisiService = $this->divisiService->update($request, $divisi);

        if (!$divisiService)
            return response()->json(['errors' => [
                'error' => ['Gagal mengubah divisi']
            ]], 400);

        return response()->json('Berhasil mengubah data divisi', 200);
    }

    /** 
     * Remove the specified resource from storage. 
     * 
     */
    public function destroy(Divisi $divisi)
    {
        $divisiService = $this->divisiService->delete($divisi);

        if (!$divisiService)
            return response()->json(['errors' => [
                'error' => ['Gagal menghapus data divisi']
            ]], 400);

        return response()->json('Berhasil menghapus divisi', 200);
    }
}
