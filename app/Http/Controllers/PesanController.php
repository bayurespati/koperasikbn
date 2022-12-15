<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PesanService;
use App\Models\Pesan;
use App\User;

class PesanController extends Controller
{
    private $pesanService;

    public function __construct(PesanService $pesanService)
    {
        $this->pesanService = $pesanService;
    }


    /**
     * Data of a user
     *
     */
    public function index()
    {
        return Pesan::all();
    }


    /**
     * store a newly created resource in storage.
     *
     */
    public function store(request $request)
    {
        //validate
        $validate = $this->pesanService->validateStore($request);
        if (is_object($validate))
            return response()->json(['message' => $validate], 400);

        $pesanService = $this->pesanService->store($request);

        if (!$pesanService)
            return response()->json(['errors' => [
                'error' => ['gagal kirim pesan']
            ]], 400);

        return response()->json('berhasil menuliskan pesan', 200);
    }

    /**
     * Update.
     *
     */
    public function update(Request $request, Pesan $pesan)
    {
        //validate
        $validate = $this->pesanService->validateUpdate($request);
        if (is_object($validate))
            return response()->json(['message' => $validate], 400);

        //validate
        $pesanService = $this->pesanService->update($request, $pesan);

        if (!$pesanService)
            return response()->json(['errors' => [
                'error' => ['gagal melakukan update pesan']
            ]], 400);

        return response()->json('berhasil melakukan update pesan', 200);
    }
}
