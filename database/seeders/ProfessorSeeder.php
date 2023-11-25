<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProfessorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('professors')->insert([
            'name' => 'سعد الحيضري',
            'email' => 'saad@mail.com',
            'phone'=>'69511112',
            'password' => Hash::make('123456789'), // password
            'address'=>'الكويت السالمية',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('professors')->insert([
            'name' => 'حامد الشيمري',
            'email' => 'hamed@mail.com',
            'phone'=>'69511112',
            'password' => Hash::make('123456789'), // password
            'address'=>'الكويت الوفرة الزراعية',
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('professors')->insert([
            'name' => 'محمد العماني',
            'email' => 'mohamed@mail.com',
            'phone'=>'69511112',
            'password' => Hash::make('123456789'), // password
            'address'=>'الكويت الوفرة',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
