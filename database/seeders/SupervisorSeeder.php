<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SupervisorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('supervisors')->insert([
            'name' => 'سامر الشمري',
            'email' => 'samer@mail.com',
            'phone'=>'69511112',
            'password' => Hash::make('123456789'), // password
            'is_approved'=>'تمت الموافقة',
            'address'=>'الكويت بنيدر',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('supervisors')->insert([
            'name' => 'عامر سلمان',
            'email' => 'amer@mail.com',
            'phone'=>'69511112',
            'password' => Hash::make('123456789'), // password
            'is_approved'=>'تمت الموافقة',
            'address'=>'الكويت بنيدر',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('supervisors')->insert([
            'name' => 'محمود سعدان',
            'email' => 'mahmoud@mail.com',
            'phone'=>'69511112',
            'password' => Hash::make('123456789'), // password
            'is_approved'=>'تمت الموافقة',
            'address'=>'الكويت الفيحاء',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
