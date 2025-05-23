<?php

namespace Database\Seeders;

use Database\Seeders\BiodataSeeder;
use Database\Seeders\DocumentSeeder;
use Database\Seeders\JurusanSeeder;
use Database\Seeders\RegistrationSeeder;
use Database\Seeders\SchoolSeeder;
use Database\Seeders\UserSeeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            BiodataSeeder::class,
            DocumentSeeder::class,
            JurusanSeeder::class,
            RegistrationSeeder::class,
            SchoolSeeder::class,
            UserSeeder::class,
        ]);
    }
}
