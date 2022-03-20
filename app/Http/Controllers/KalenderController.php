<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kalender;
use App\Services\KalenderService;

class KalenderController extends Controller
{
    private $kalenderService;

    public function __construct(KalenderService $kalenderService)
    {
        $this->kalenderService = $kalenderService;
    }


    /** 
     * Data of a user
     * 
     */
    public function index()
    {
        return Kalender::all();
    }


    /** 
     * Update the specified resource in storage. 
     * 
     */
    public function update(Request $request, Kalender $kalender)
    {
        $kalenderService = $this->kalenderService->update($request, $kalender);

        if (!$kalenderService)
            return response()->json(['errors' => [
                'error' => ['Gagal mengubah kalender']
            ]], 400);

        return response()->json('Berhasil mengubah data kalender', 200);
    }
}
