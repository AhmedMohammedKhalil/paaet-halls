<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(AdminSeeder::class);
        $this->call(SupervisorSeeder::class);
        $this->call(ProfessorSeeder::class);
        $this->call(BuildingSeeder::class);
        $this->call(HallSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(ImageSeeder::class);
        $this->call(HallServicesSeeder::class);
    }
}
