<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('fields', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // nama pemetakan 
            $table->decimal('size', 8, 2); // luas pemetakan (m2)
            $table->string('soil_type'); // tipe tanah
            $table->decimal('ph_level', 3, 1)->nullable(); // pH tanah
            $table->geometry('coordinates')->nullable(); // koordinat pemetakan
            $table->enum('irrigation_status', ['active', 'scheduled', 'off'])->default('off'); // status irigasi
            $table->date('last_tested')->nullable(); // tanggal pemeriksaan terakhir
            $table->decimal('altitude', 8, 2)->nullable(); // tinggi pemetakan (mdpl)

            // Relasi
            $table->foreignId('farm_id')->constrained()->onDelete('cascade'); // relasi ke pertanian

            // Timestamps
            $table->timestamps();

            // Peningkatan Performa & Integritas Data
            // $table->index('name', 'fields_name_index');
            // $table->spatialIndex('coordinates', 'fields_coordinates_spatialindex');
            // $table->unique(['farm_id', 'name'], 'fields_farm_id_name_unique');
        });
    }

    public function down()
    {
        Schema::dropIfExists('fields');
    }
};
