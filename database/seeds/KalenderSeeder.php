<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KalenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kalender')->insert([
            [
                'image_link' => NULL,
                'image_name' => NULL,
                'name' => "Januari",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'image_link' => NULL,
                'image_name' => NULL,
                'name' => "Februari",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'image_link' => NULL,
                'image_name' => NULL,
                'name' => "Maret",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'image_link' => NULL,
                'image_name' => NULL,
                'name' => "April",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'image_link' => NULL,
                'image_name' => NULL,
                'name' => "Mei",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'image_link' => NULL,
                'image_name' => NULL,
                'name' => "Juni",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'image_link' => NULL,
                'image_name' => NULL,
                'name' => "July",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'image_link' => NULL,
                'image_name' => NULL,
                'name' => "Agustus",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'image_link' => NULL,
                'image_name' => NULL,
                'name' => "September",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'image_link' => NULL,
                'image_name' => NULL,
                'name' => "Oktober",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'image_link' => NULL,
                'image_name' => NULL,
                'name' => "November",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'image_link' => NULL,
                'image_name' => NULL,
                'name' => "Desember",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
