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
        Schema::create('employee', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->string('nik', 13);
            $table->unsignedBigInteger('id_jabatan');
            $table->unsignedBigInteger('id_divisi');
            $table->timestamps();

            $table->foreign('id_jabatan')->references('id')->on('positions');
            $table->foreign('id_divisi')->references('id')->on('divisions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee');
    }
};
