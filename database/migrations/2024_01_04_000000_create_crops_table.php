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
            $table->string('variety');
            $table->date('planted_date');
            $table->date('expected_harvest');
            $table->enum('status', ['seedling', 'growing', 'flowering', 'ready'])->default('seedling');
            $table->decimal('area', 8, 2);
            $table->foreignId('field_id')->constrained();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('crops');
    }
};
