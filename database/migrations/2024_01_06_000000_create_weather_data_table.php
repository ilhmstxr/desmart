<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('weather_data', function (Blueprint $table) {
            $table->id();
            $table->string('location');
            $table->decimal('latitude', 10, 8);
            $table->decimal('longitude', 11, 8);
            $table->decimal('temperature', 5, 2);
            $table->decimal('humidity', 5, 2);
            $table->decimal('rainfall', 8, 2)->default(0);
            $table->decimal('wind_speed', 5, 2)->default(0);
            $table->string('wind_direction')->nullable();
            $table->decimal('pressure', 7, 2)->nullable();
            $table->string('condition'); // sunny, cloudy, rainy, etc.
            $table->text('description')->nullable();
            $table->datetime('recorded_at');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('weather_data');
    }
};
