<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\SimpanPinjamImport;
use App\Models\SimpanPinjam;
use Maatwebsite\Excel\Facades\Excel;

class SimpanPinjamController extends Controller
{
    /**
     * Upload data.
     *
     */
    public function upload(Request $request)
    {
        SimpanPinjam::truncate();
        set_time_limit(0);
        $file = $request->file('file');
        try {
            Excel::import(new SimpanPinjamImport, $file, \Maatwebsite\Excel\Excel::XLSX);
            return response()->json(['message' => "Success upload simpan pinjam"], 200);
        } catch (\Exception $e) {
            return $e->getMessage();
            return response()->json(['message' => $this->messageError($e)], 400);
        }
    }


    /**
     * Return all data simpan pinjam.
     *
     */
    public function index()
    {
        return SimpanPinjam::with('user')->get();
    }


    /**
     * Get all data simpanan.
     *
     */
    public function getSimpananPersonal(Request $request)
    {
        return SimpanPinjam::where('no_anggota', $request->no_anggota)->whereIn('kode', [1, 2])->with('user')->get();
    }


    /**
     * Get all data pinjaman.
     *
     */
    public function getPinjamanPersonal(Request $request)
    {
        return SimpanPinjam::where('no_anggota', $request->no_anggota)->where('kode', 3)->with('user')->get();
    }
}
