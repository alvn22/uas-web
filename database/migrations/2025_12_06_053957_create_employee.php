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
            $table->integer('nik');
            $table->unsignedBigInteger('id_jabatan');
            $table->unsignedBigInteger('id_divisi');
            $table->timestamps();

            $table->foreign('id_jabatan')->references('id')->on('position');
            $table->foreign('id_divisi')->references('id')->on('division');
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
