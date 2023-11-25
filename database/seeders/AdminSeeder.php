<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->insert([
            'name' => 'المسئول',
            'email' => 'admin@admin.com',
            'password' => Hash::make('123456789'), // password
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
