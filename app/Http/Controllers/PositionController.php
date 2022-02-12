<?php

namespace App\Http\Controllers;

use App\Services\PositionService;
use App\Http\Requests\PositionRequest;
use App\Models\Position;

class PositionController extends Controller
{
    private $positionService;

    public function __construct(PositionService $positionService)
    {
        $this->positionService = $positionService;
    }


    /** 
     * Data of a user
     * 
     */
    public function index()
    {
        return Position::all();
    }


    /** 
     * Store a newly created resource in storage. 
     * 
     */
    public function store(PositionRequest $request)
    {
        $positionService = $this->positionService->store($request);

        if (!$positionService)
            return response()->json(['errors' => [
                'error' => ['Fail add position']
            ]], 400);

        return response()->json('Success create position', 200);
    }


    /** 
     * Update the specified resource in storage. 
     * 
     */
    public function update(PositionRequest $request, Position $position)
    {
        $positionService = $this->positionService->update($request, $position);

        if (!$positionService)
            return response()->json(['errors' => [
                'error' => ['Fail add position']
            ]], 400);

        return response()->json('Success update jabatan', 200);
    }


    /** 
     * Remove the specified resource from storage. 
     * 
     */
    public function destroy(Position $position)
    {
        $positionService = $this->positionService->delete($position);

        if (!$positionService)
            return response()->json(['errors' => [
                'error' => ['Fail delete jabatan']
            ]], 400);

        return response()->json('Success delete jabatan', 200);
    }
}
