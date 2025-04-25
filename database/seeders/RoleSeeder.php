<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            ['role_name' => 'Admin', 'url' => '/admin'],
            ['role_name' => 'User', 'url' => '/user'],
            ['role_name' => 'Guest', 'url' => '/guest'],
        ]);

    }
}
