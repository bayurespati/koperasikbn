<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ArtikelService;
use App\Http\Requests\ArtikelRequest;
use App\Models\Artikel;

class ArtikelController extends Controller
{
    private $artikelService;

    public function __construct(ArtikelService $artikelService)
    {
        $this->artikelService = $artikelService;
    }


    /** 
     * Data of a artikel 
     * 
     */
    public function index()
    {
        return Artikel::all();
    }


    /** 
     * Store a newly created resource in storage. 
     * 
     */
    public function store(ArtikelRequest $request)
    {
        $artikelService = $this->artikelService->store($request);

        if (!$artikelService)
            return response()->json(['errors' => [
                'error' => ['Gagal membuat artikel']
            ]], 400);

        return response()->json('Berhasil menambahkan artikel', 200);
    }


    /** 
     * Update the specified resource in storage. 
     * 
     */
    public function update(ArtikelRequest $request, Artikel $artikel)
    {
        $artikelService = $this->artikelService->update($request, $artikel);

        if (!$artikelService)
            return response()->json(['errors' => [
                'error' => ['Gagal mengubah artikel']
            ]], 400);

        return response()->json('Berhasil mengubah artikel', 200);
    }


    /** 
     * Remove the specified resource from storage. 
     * 
     */
    public function destroy(Artikel $artikel)
    {
        $artikelService = $this->artikelService->delete($artikel);

        if (!$artikelService)
            return response()->json(['errors' => [
                'error' => ['Gagal menghapus artikel']
            ]], 400);

        return response()->json('Berhasil menghapus artikel', 200);
    }
}
