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
        Schema::table('users', function (Blueprint $table) {
            $table->string('nik_orangtua', 16)->after('id')->nullable();
            $table->enum('jk', ['L', 'P'])->after('name')->nullable();
            $table->text('jalan')->after('jk')->nullable();
            $table->text('kec')->after('jalan')->nullable();
            $table->text('kota_kab')->after('kec')->nullable();
            $table->text('pekerjaan')->after('kota_kab')->nullable();
            $table->string('no_hp', 15)->after('pekerjaan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['nik_orantua', 'jk', 'jalan', 'kec', 'kota_kab', 'pekerjaan', 'no_hp']);
        });
    }
};
