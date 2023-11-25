<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HallServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hall_services')->insert([
            'hall_id' =>'1',
            'service_id' =>'1'
        ]);
        DB::table('hall_services')->insert([
            'hall_id' =>'1',
            'service_id' =>'2'
        ]);
        DB::table('hall_services')->insert([
            'hall_id' =>'1',
            'service_id' =>'5'
        ]);
        DB::table('hall_services')->insert([
            'hall_id' =>'2',
            'service_id' =>'1'
        ]);
        DB::table('hall_services')->insert([
            'hall_id' =>'2',
            'service_id' =>'5'
        ]);

        DB::table('hall_services')->insert([
            'hall_id' =>'3',
            'service_id' =>'4'
        ]);
        DB::table('hall_services')->insert([
            'hall_id' =>'3',
            'service_id' =>'3'
        ]);
        DB::table('hall_services')->insert([
            'hall_id' =>'3',
            'service_id' =>'2'
        ]);
        DB::table('hall_services')->insert([
            'hall_id' =>'4',
            'service_id' =>'2'
        ]);
        DB::table('hall_services')->insert([
            'hall_id' =>'5',
            'service_id' =>'5'
        ]);
        DB::table('hall_services')->insert([
            'hall_id' =>'6',
            'service_id' =>'1'
        ]);
        DB::table('hall_services')->insert([
            'hall_id' =>'6',
            'service_id' =>'3'
        ]);
        DB::table('hall_services')->insert([
            'hall_id' =>'6',
            'service_id' =>'5'
        ]);
    }
}
