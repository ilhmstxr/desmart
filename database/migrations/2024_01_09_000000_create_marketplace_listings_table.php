<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('marketplace_listings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained();
            $table->string('marketplace_name'); // Local Market, Online Store, etc.
            $table->decimal('listing_price', 10, 2);
            $table->integer('quantity_listed');
            $table->integer('quantity_sold')->default(0);
            $table->enum('status', ['pending', 'active', 'sold', 'expired', 'cancelled'])->default('pending');
            $table->date('listed_date');
            $table->date('expiry_date')->nullable();
            $table->text('listing_notes')->nullable();
            $table->decimal('commission_rate', 5, 2)->default(0); // Marketplace commission %
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('marketplace_listings');
    }
};
