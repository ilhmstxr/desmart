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
            $table->string('name');
            $table->decimal('size', 8, 2);
            $table->string('soil_type');
            $table->decimal('ph_level', 3, 1)->nullable();
            $table->string('coordinates')->nullable();
            $table->enum('irrigation_status', ['active', 'scheduled', 'off'])->default('off');
            $table->date('last_tested')->nullable();
            $table->foreignId('farm_id')->constrained();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fields');
    }
};
