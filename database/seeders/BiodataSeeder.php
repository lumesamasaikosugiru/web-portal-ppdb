<?php

namespace Database\Seeders;

use App\Models\Biodata;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BiodataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Biodata::create([
            "nik_siswa" => "1234512345123451",
            "name" => "Bagus Pribadi",
            "nisn" => "12345",
            "tempat_lahir" => "Prapatan Melbourn",
            "tanggal_lahir" => "2010-03-09",
            "jk" => "L",
            "sekolah_asal" => "SDN R2-UNIVAL",
            "id_user" => "2",
        ]);
    }
}
