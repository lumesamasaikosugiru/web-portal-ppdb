<?php

namespace Database\Seeders;

use App\Models\School;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        School::create([
            "namasekolah" => "SMK YPF 1 Cilegon",
            "jalan" => "Jl. Lenjed R Soeprapto",
            "kecamatan" => "Kubang Sepat",
            "kota_kab" => "Cilegon",
            "kuota" => "100",
        ]);
    }
}
