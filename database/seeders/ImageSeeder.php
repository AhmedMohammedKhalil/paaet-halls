<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('images')->insert([
            'image' => '1.jpg',
            'hall_id' => '1',
        ]);
        DB::table('images')->insert([
            'image' => '2.jpg',
            'hall_id' => '2',
        ]);
        DB::table('images')->insert([
            'image' => '3.jpg',
            'hall_id' => '3',
        ]);
        DB::table('images')->insert([
            'image' => '4.jpg',
            'hall_id' => '4',
        ]);
        DB::table('images')->insert([
            'image' => '5.jpg',
            'hall_id' => '5',
        ]);
        DB::table('images')->insert([
            'image' => '6.jpg',
            'hall_id' => '6',
        ]);
        DB::table('images')->insert([
            'image' => '7.jpg',
            'hall_id' => '7',
        ]);
    }
}
