<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('sku')->unique();
            $table->text('description');
            $table->decimal('price_per_unit', 10, 2);
            $table->string('unit_type')->default('kg'); // kg, lbs, pieces, etc.
            $table->integer('stock_quantity')->default(0);
            $table->integer('minimum_stock')->default(10);
            $table->enum('status', ['draft', 'active', 'inactive', 'out_of_stock'])->default('draft');
            $table->string('category')->nullable();
            $table->json('images')->nullable();
            $table->decimal('cost_per_unit', 10, 2)->nullable(); // Production cost
            $table->foreignId('crop_id')->constrained();
            $table->foreignId('created_by')->constrained('users');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
};
