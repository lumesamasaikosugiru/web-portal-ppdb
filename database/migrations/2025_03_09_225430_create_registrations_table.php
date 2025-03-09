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
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->enum('status', ['Diproses', 'Diterima', 'Ditolak']);
            $table->date('tgl_daftar');
            $table->unsignedBigInteger('id_biodata');
            $table->timestamps();

            $table->foreign('id_biodata')->references('id')->on('biodatas')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
