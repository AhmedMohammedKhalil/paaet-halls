<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            'name' => 'البروجيكتور',
        ]);

        DB::table('services')->insert([
            'name' => 'معدات صوتية',
        ]);

        DB::table('services')->insert([
            'name' => 'السبورة الذكية',
        ]);

        DB::table('services')->insert([
            'name' => 'واي فاي',
        ]);
        DB::table('services')->insert([
            'name' => 'مكيفات هواء',
        ]);
    }
}
