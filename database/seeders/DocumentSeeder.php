<?php

namespace Database\Seeders;

use App\Models\Document;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Document::create([
            "name" => "KK Bagus Pribadi33",
            "url_berkas" => "KK Bagus Pribadi",
            "id_biodata" => "2",
        ]);
    }
}
