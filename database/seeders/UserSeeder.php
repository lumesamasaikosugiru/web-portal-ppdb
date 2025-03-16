<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "nik_orangtua" => "1234567890122222",
            "name" => "Bagas",
            "jk" => "L",
            "jalan" => "Pabean",
            "kec" => "Purwakarta",
            "kota_kab" => "Cilegon",
            "pekerjaan" => "Karyawan Swasta",
            "no_hp" => "089525861543",
            "email" => "testing@gmail.com",
            "password" => "boying"
        ]);

    }
}
