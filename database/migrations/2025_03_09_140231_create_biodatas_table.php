<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('biodatas', function (Blueprint $table) {
            $table->id();
            $table->string('nik_siswa');
            $table->string('name', 100);
            $table->string('nisn', 5);
            $table->string('tempat_lahir', 50);
            $table->date('tanggal_lahir');
            $table->enum('jk', ['L', 'P']);
            $table->string('sekolah_asal');
            $table->foreignId('id_user')
                ->constrained('users')
                ->onUpdate('cascade')
                ->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biodatas');
    }
};