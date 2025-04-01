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
            $table->foreignId('id_school')
                ->constrained('schools')
                ->restrictOnDelete()
                ->cascadeOnUpdate();
            $table->enum('gelombang_daftar', ['Afirmasi', 'Prestasi'])->default('Afirmasi');
            $table->foreignId('id_biodatas')
                ->constrained('biodatas')
                ->restrictOnDelete()
                ->cascadeOnUpdate();
            $table->string('document_path');
            $table->timestamps();
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
