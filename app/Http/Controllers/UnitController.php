<?php

namespace App\Http\Controllers;

use App\Services\UnitService;
use App\Models\Unit;
use App\Http\Requests\UnitRequest;

class UnitController extends Controller
{
    private $unitService;

    public function __construct(UnitService $unitService)
    {
        $this->unitService = $unitService;
    }


    /** 
     * Data of a user
     * 
     */
    public function index()
    {
        return Unit::all();
    }


    /** 
     * Store a newly created resource in storage. 
     * 
     */
    public function store(UnitRequest $request)
    {
        $unitService = $this->unitService->store($request);

        if (!$unitService)
            return response()->json(['errors' => [
                'error' => ['Gagal menambahkan unit']
            ]], 400);

        return response()->json('Berhasil menambahkan unit', 200);
    }


    /** 
     * Update the specified resource in storage. 
     * 
     */
    public function update(UnitRequest $request, Unit $unit)
    {
        $unitService = $this->unitService->update($request, $unit);

        if (!$unitService)
            return response()->json(['errors' => [
                'error' => ['Gagal mengubah unit']
            ]], 400);

        return response()->json('Berhasil mengubah data unit', 200);
    }

    /** 
     * Remove the specified resource from storage. 
     * 
     */
    public function destroy(Unit $unit)
    {
        $unitService = $this->unitService->delete($unit);

        if (!$unitService)
            return response()->json(['errors' => [
                'error' => ['Gagal menghapus data unit']
            ]], 400);

        return response()->json('Berhasil menghapus unit', 200);
    }
}
