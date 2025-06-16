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
            $table->string('marketplace_name'); // Local Market, Online Store, etc.
            $table->decimal('listing_price', 10, 2);
            $table->integer('quantity_listed');
            $table->enum('status', ['pending', 'active', 'sold', 'expired', 'cancelled'])->default('pending');
            $table->date('expiry_date')->nullable();
            $table->text('listing_notes')->nullable();
            $table->decimal('commission_rate', 5, 2)->default(0); // Marketplace commission %
            $table->timestamps();

            // quantity_sold dihapus
            $table->timestamp('listed_date')->nullable();

            // Relasi
            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            $table->foreignId('marketplace_id')->constrained()->onDelete('cascade');

        });
    }

    public function down()
    {
        Schema::dropIfExists('marketplace_listings');
    }
};
