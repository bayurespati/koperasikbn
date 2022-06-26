<?php

namespace App\Imports;

use App\Models\SimpanPinjam;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class SimpanPinjamImport implements ToModel, WithStartRow
{
    /**
     * @return int
     */
    public function startRow(): int
    {
        return 2;
    }

    /**
     * Model 
     */
    public function model(array $row)
    {
        if ($row[3] != null) {
            $temp = explode("/", $row[8]);
            $tanggal_tagihan = $temp[2] . '-' . $temp[0] . '-' . $temp[1];
            return new SimpanPinjam([
                'no_anggota' => $row[0],
                'keterangan' => $row[3],
                'kode' => $row[4],
                'akun_pinjaman' => $row[5],
                'pot_pinjaman' => $row[6],
                'pot_jasa' => $row[7],
                'tanggal_tagihan' => $tanggal_tagihan,
                'jumlah_angsuran' => $row[9],
                'cicilan_ke' => $row[10],
                'sisa' => $row[11],
                'total' => $row[12],
                'saldo' => $row[4] == "03" ? $row[12] - $row[6] : $row[12],
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }
    }
}
