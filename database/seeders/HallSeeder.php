<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HallSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('halls')->insert([
            'details' => 'قاعة 1',
            'gender' =>'بنين',
            'number' =>'1',
            'capacity' =>'50-60',
            'supervisor_id' =>'1',
            'building_id' =>'1',
            'cover' => '1.jpg',
        ]);

        DB::table('halls')->insert([
            'details' => 'قاعة 2',
            'gender' =>'بنين',
            'number' =>'2',
            'capacity' =>'50-100',
            'supervisor_id' =>'1',
            'building_id' =>'1',
            'cover' => '2.jpg',
        ]);

        DB::table('halls')->insert([
            'details' => 'قاعة 1',
            'gender' =>'بنين',
            'number' =>'1',
            'capacity' =>'100-150',
            'supervisor_id' =>'1',
            'building_id' =>'2',
            'cover' => '3.jpg',
        ]);
        DB::table('halls')->insert([
            'details' => 'قاعة 1',
            'gender' =>'بنات',
            'number' =>'1',
            'capacity' =>'80-100',
            'supervisor_id' =>'1',
            'building_id' =>'2',
            'cover' => '4.jpg',
        ]);

        DB::table('halls')->insert([
            'details' => 'قاعة 1',
            'gender' =>'بنات',
            'number' =>'1',
            'capacity' =>'20-35',
            'supervisor_id' =>'2',
            'building_id' =>'5',
            'cover' => '5.jpg',
        ]);
        DB::table('halls')->insert([
            'details' => 'قاعة 4',
            'gender' =>'بنين',
            'number' =>'2',
            'capacity' =>'100-150',
            'supervisor_id' =>'2',
            'building_id' =>'5',
            'cover' => '6.jpg',
        ]);

        DB::table('halls')->insert([
            'details' => 'قاعة 7',
            'gender' =>'بنين',
            'number' =>'2',
            'capacity' =>'100-150',
            'supervisor_id' =>'2',
            'building_id' =>'5',
            'cover' => '7.jpg',
        ]);
    }
}
