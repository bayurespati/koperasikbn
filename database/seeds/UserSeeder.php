<?php

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
                'password' => bcrypt('adminadmin'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama' => 'Admin',
                'nip' => '000000',
                'no_anggota' => '0000-00000-01',
                'email' => 'admin@admin.com',
                'tanggal_masuk' => date('Y-m-d H:i:s'),
                'role_id' => 2,
                'divisi_id' => 1,
                'password' => bcrypt('adminadmin'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama' => 'Andriano Kristiawa P',
                'nip' => '006951073',
                'no_anggota' => '1999-00361-22',
                'email' => 'andriano@kbn.co.id',
                'tanggal_masuk' => "1999-04-01",
                'role_id' => 3,
                'divisi_id' => 20,
                'password' => bcrypt('adminadmin'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama' => 'Dasep Titof',
                'nip' => '955070368',
                'no_anggota' => '1995-00321-22',
                'email' => 'dasep@kbn.co.id',
                'tanggal_masuk' => "1995-06-07",
                'role_id' => 1,
                'divisi_id' => 14,
                'password' => bcrypt('adminadmin'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
