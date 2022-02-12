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
                'name' => 'Super Admin',
                'email' => 'super@admin.com',
                'role_id' => 1,
                'is_teacher' => false,
                'password' => bcrypt('adminadmin'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Bayu Admin',
                'email' => 'bayu@admin.com',
                'role_id' => 2,
                'is_teacher' => false,
                'password' => bcrypt('adminadmin'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Dimas Member',
                'email' => 'super@member.com',
                'role_id' => 3,
                'is_teacher' => false,
                'password' => bcrypt('adminadmin'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Teacher satu',
                'email' => 'teachersatu@member.com',
                'role_id' => 3,
                'is_teacher' => true,
                'password' => bcrypt('adminadmin'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Tacher dua',
                'email' => 'teacherdua@member.com',
                'role_id' => 3,
                'is_teacher' => true,
                'password' => bcrypt('adminadmin'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
