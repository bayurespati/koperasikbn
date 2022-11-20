<?php

namespace App\Http\Controllers;

use App\Services\PermintaanService;
use App\Models\Permintaan;
use Illuminate\Http\Request;
use App\User;

class PermintaanController extends Controller
{
    private $permintaanService;

    public function __construct(PermintaanService $permintaanService)
    {
        $this->permintaanService = $permintaanService;
    }


    /** 
     * Data of a user
     * 
     */
    public function index()
    {
        return Permintaan::with(['user', 'pengajuan'])->get();
    }

    /** 
     * Data of a user
     * 
     */
    public function getByUserId(Request $request)
    {
        return Permintaan::where('user_id', $request->user_id)->with(['user', 'pengajuan'])->get();
    }


    /** 
     * store a newly created resource in storage. 
     * 
     */
    public function store(request $request)
    {
        $user = user::where('id', $request->user_id)->first();
        if ($request->jenis_pengajuan_id == 4 || $request->jenis_pengajuan_id == 2 && $user->tipe == "c")
            return response()->json('tidak bisa melakukan pengajuan', 400);

        //validate
        $validate = $this->permintaanService->validateStore($request, $user);
        if (is_object($validate))
            return response()->json(['message' => $validate], 400);

        $permintaanService = $this->permintaanService->store($request);

        if (!$permintaanService)
            return response()->json(['errors' => [
                'error' => ['gagal melakukan pengajuan']
            ]], 400);

        return response()->json('berhasil melakukan pengajuan', 200);
    }

    /** 
     * Update. 
     * 
     */
    public function update(Request $request, Permintaan $permintaan)
    {
        $user = user::where('id', $request->user_id)->first();
        //validate
        $validate = $this->permintaanService->validateUpdate($request, $user);
        if (is_object($validate))
            return response()->json(['message' => $validate], 400);

        //validate
        $permintaanService = $this->permintaanService->update($request, $permintaan);

        if (!$permintaanService)
            return response()->json(['errors' => [
                'error' => ['gagal melakukan update pengajuan']
            ]], 400);

        return response()->json('berhasil melakukan update pengajuan', 200);
    }
}
