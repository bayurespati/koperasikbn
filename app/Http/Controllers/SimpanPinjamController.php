<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\SimpanPinjamImport;
use App\Models\SimpanPinjam;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;

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
            return response()->json(['errors' => [
                'error' => ['Format file belom sesuai']
            ]], 400);
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


    public function download(Request $request)
    {
        $dats = SimpanPinjam::Where('kode', $request->jenis)
            ->select([DB::raw("SUM(jumlah_angsuran) as total_angsuran"), 'no_anggota'])
            ->groupBy('no_anggota')
            ->with('user')
            ->get();

        $total = SimpanPinjam::Where('kode', $request->jenis)->sum('jumlah_angsuran');

        $periode = explode("-", $request->periode);
        $tanggal = explode("-", $request->tanggal);
        $data['bulan'] = $this->getMonth($periode[1]);
        $data['tahun'] = $periode[0];
        $data['tipe'] = $this->getTipe($request->jenis);
        $data['results'] = $dats;
        $data['total'] = $total;
        $data['tanggal_ttd'] = $tanggal[2] . " " . $this->getMonth($tanggal[1]) . " " . $tanggal[0];
        $pdf = Pdf::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])
            ->loadview('print.simpanpinjampdf', ['data' => $data]);
        $pdf->setPaper('A4');
        return $pdf->stream('laporan.pdf');
    }

    /** 
     * Remove the specified resource from storage. 
     * 
     */
    public function destroy(SimpanPinjam $simpan_pinjam)
    {
        $data = $simpan_pinjam->delete();

        if (!$data)
            return response()->json(['errors' => [
                'error' => ['Fail delete simpan pinjam']
            ]], 400);

        return response()->json('Success delete simpan pinjam', 200);
    }

    private function getTipe($value)
    {
        if ((int) $value == 1)
            return "Simpanan Wajib";
        if ((int) $value == 2)
            return "Simpanan Sukarela";
        if ((int) $value == 3)
            return "Pinjaman";
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
