<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('crops', function (Blueprint $table) {
            $table->id();
            $table->string('name');

            // Kunci asing ke tabel plant_varieties
            // onDelete('cascade') berarti jika varietas tanaman dihapus, semua data crop terkait juga akan terhapus.
            $table->foreignId('plant_variety_id')->constrained('plant_varieties')->onDelete('cascade');

            // Kunci asing ke tabel growth_stages
            // onDelete('restrict') mencegah penghapusan data 'growth_stage' jika masih ada 'crop' yang menggunakannya.
            $table->foreignId('current_stage_id')->constrained('growth_stages')->onDelete('restrict');

            // Kunci asing ke tabel fields (diasumsikan sudah ada)
            $table->foreignId('field_id')->constrained('fields')->onDelete('cascade');

            $table->decimal('area', 8, 2)->nullable()->comment('Luas area tanam dalam meter persegi');
            $table->date('planted_date')->nullable();
            $table->date('expected_harvest_date')->nullable();

            // $table->date('expected_harvest');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('crops');
    }
};
