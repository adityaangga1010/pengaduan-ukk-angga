<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('masyarakats', function (Blueprint $table) {
            $table->id();
            $table->char('nik',16);
            $table->string('nama',35);
            $table->string('username',25)->unique();
            $table->string('password');
            $table->enum('jenis_kelamin',['perempuan', 'laki-laki']);
            $table->string('telp',13)->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('masyarakats');
    }
};
