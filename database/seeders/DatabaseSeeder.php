<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            UnitSeeder::class,
            DivisiSeeder::class,
            JabatanKoperasiSeeder::class,
            KalenderSeeder::class,
            BannerSeeder::class,
            UserSeeder::class,
            LaporanInernalSeeder::class
        ]);
    }
}
