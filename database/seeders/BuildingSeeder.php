<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BuildingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('buildings')->insert([
            'title' => 'مبني 1',
            'details' =>'وصف مبني رقم 1 ',
            'address' =>'الكويت منطقة السالمية',
            'supervisor_id' =>'1'
        ]);
        DB::table('buildings')->insert([
            'title' => 'مبني 2',
            'details' =>'وصف مبني رقم 2 ',
            'address' =>'الكويت  الفحيحيل',
            'supervisor_id' =>'1'
        ]);

        DB::table('buildings')->insert([
            'title' => 'مبني 3',
            'details' =>'وصف مبني رقم 3 ',
            'address' =>'الكويت  الوفرة',
            'supervisor_id' =>'1'
        ]);

        DB::table('buildings')->insert([
            'title' => 'مبني 4',
            'details' =>'وصف مبني رقم 4 ',
            'address' =>'الكويت منطقة السالمية',
            'supervisor_id' =>'1'
        ]);
        DB::table('buildings')->insert([
            'title' => 'مبني 5',
            'details' =>'وصف مبني رقم 5 ',
            'address' =>'الكويت  الفحيحيل',
            'supervisor_id' =>'2'
        ]);

        DB::table('buildings')->insert([
            'title' => 'مبني 6',
            'details' =>'وصف مبني رقم 6 ',
            'address' =>'الكويت  الوفرة',
            'supervisor_id' =>'2'
        ]);

    }
}
