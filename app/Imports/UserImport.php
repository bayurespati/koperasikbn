<?php

namespace App\Imports;

use App\Models\Divisi;
use App\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use PhpOffice\PhpSpreadsheet\Calculation\TextData\Replace;

class UserImport implements ToModel, WithStartRow
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
        $divisi = $this->getDivisi($row[4]);
        if ($row[3] != null && $divisi != null) {
            $temp = explode("/", $row[1]);
            $tanggal_masuk = $temp[2] . '-' . $temp[0] . '-' . $temp[1];

            $record = user::where('no_anggota', $row[0])->first();

            if (is_null($record)) {
                return new User([
                    'nama' => $row[2],
                    'role_id' => 3,
                    'divisi_id' => $divisi,
                    'no_anggota' => $row[0],
                    'nip' => $row[3],
                    'tipe' => $row[7],
                    'tanggal_masuk' => $tanggal_masuk,
                    'is_active' => true,
                    'password' => bcrypt('password'),
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'email_verified_at' => NULL,
                ]);
            } else {
                $record->nama = $row[2];
                $record->divisi_id = $divisi;
                $record->no_anggota = $row[0];
                $record->tipe = $row[7];
                $record->tanggal_masuk = $tanggal_masuk;
                return $record;
            }
        }
    }

    private function getDivisi($data)
    {
        $divisi = Divisi::where('kode', $data)->first();

        return $divisi ? $divisi->id : null;
    }
}
