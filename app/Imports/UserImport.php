<?php

namespace App\Imports;

use App\Models\Divisi;
use App\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

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
        $temp = explode("/", $row[1]);
        if ($row[3] != null && $divisi != null) {
            $tanggal_masuk = $temp[2] . '-' . $temp[1] . '-' . $temp[0];
            return new User([
                'nama' => $row[2],
                'role_id' => 3,
                'divisi_id' => $divisi,
                'no_anggota' => $row[0],
                'nip' => $row[3],
                'tanggal_masuk' => $tanggal_masuk,
                'is_active' => true,
                'password' => bcrypt('adminadmin'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'email_verified_at' => NULL,
            ]);
        }
    }

    private function getDivisi($data)
    {
        $divisi = Divisi::where('kode', $data)->first();

        return $divisi ? $divisi->id : null;
    }
}
