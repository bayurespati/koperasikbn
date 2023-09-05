<?php

namespace App\Http\Controllers;

use App\Services\PermintaanService;
use App\Models\Permintaan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
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
        if (($request->jenis_pengajuan_id == 4 && strtolower($user->tipe) == "c") || ($request->jenis_pengajuan_id == 2 && strtolower($user->tipe) == "c"))
            return response()->json([
                'message' => [
                    'notice' => ['maaf, anda tidak bisa melakukan pengajuan']
                ]
            ], 400);

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

    public function download_pinjaman_insidentil(Request $request)
    {
        $permintaan = Permintaan::Where('id', $request->id)->with(['user.divisi', 'pengajuan'])->first();
        $data['permintaan'] = $permintaan;
        $data['bulan'] = $permintaan->updated_at !== null ? ($permintaan->updated_at)->format('F') : 'Error';

        $pdf = Pdf::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])
            ->loadview('print.pinjaman_insidentil', ['data' => $data]);
        $pdf->setPaper('A4', 'landscape');

        return $pdf->stream('pinjaman_isidentil.pdf');
    }

    public function download_pinjaman_jangka_pp(Request $request)
    {
        $pinjaman = Permintaan::Where('id', $request->id)->with(['user.divisi', 'pengajuan'])->first();
        $jenisPinjaman = '';
        if ($request->tipe == 2) {
            $jenisPinjaman = 'pendek';
        } else if ($request->tipe == 4) {
            $jenisPinjaman = 'panjang';
        }

        $tanggal = explode("-", $pinjaman->tanggal_pengajuan);
        $data['jenis'] = $jenisPinjaman;
        $data['pinjaman'] = $pinjaman;
        $data['tanggal'] = $tanggal[2] . " " . $this->getMonth($tanggal[1]) . " " . $tanggal[0];

        $pdf = Pdf::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])
            ->loadview('print.pinjaman_jangka_pp', ['data' => $data]);
        $pdf->setPaper('A4', 'portrait');

        return $pdf->stream('pinjaman-jangka' . $jenisPinjaman . '.pdf');
    }

    private function getMonth($month)
    {
        switch ($month) {
            case  1:
                return  "Januari";
                break;
            case  2:
                return  "Februari";
                break;
            case  3:
                return  "Maret";
                break;
            case  4:
                return  "April";
                break;
            case  5:
                return  "Mei";
                break;
            case  6:
                return  "Juni";
                break;
            case  7:
                return  "Juli";
                break;
            case  8:
                return  "Agustus";
                break;
            case  9:
                return  "September";
                break;
            case  10:
                return  "Oktober";
                break;
            case  11:
                return  "November";
                break;
            case  12:
                return  "Desember";
                break;
        }
    }
}
