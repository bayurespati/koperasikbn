<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'nama' => 'Super Admin',
                'nip' => '0000000',
                'no_anggota' => '0000-00000-00',
                'email' => 'super@admin.com',
                'tanggal_masuk' => date('Y-m-d H:i:s'),
                'role_id' => 1,
                'divisi_id' => 1,
                'tipe' => "B",
                'password' => bcrypt('adminadmin'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'email_verified_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama' => 'Admin',
                'nip' => '000000',
                'no_anggota' => '0000-00000-01',
                'email' => 'admin@admin.com',
                'tanggal_masuk' => date('Y-m-d H:i:s'),
                'role_id' => 2,
                'divisi_id' => 1,
                'tipe' => "A",
                'password' => bcrypt('adminadmin'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'email_verified_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
