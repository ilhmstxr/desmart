<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('farms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('owner_id')->constrained('users')->onDelete('cascade'); // pemilik pertanian
            $table->string('name'); // nama pertanian
            $table->string('location'); // lokasi pertanian (alamat)
            $table->geometry('boundary')->nullable(); // batas pertanian
            $table->text('description')->nullable(); // deskripsi pertanian
            $table->decimal('total_area', 10, 2); // total luas pertanian (m2)
            $table->enum('status', ['active', 'inactive', 'archived'])->default('active'); // status, default active
            $table->string('farm_photo_path')->nullable()->after('status');

            // Timestamps
            $table->timestamps();

            // Peningkatan Performa & Integritas Data
            // $table->index('name', 'farms_name_index'); 
            // $table->unique(['owner_id', 'name'], 'farms_owner_id_name_unique'); 
        });
    }

    public function down()
    {
        Schema::dropIfExists('farms');
    }
};
