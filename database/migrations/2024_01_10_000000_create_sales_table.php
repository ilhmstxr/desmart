<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->foreignId('marketplace_listing_id')->constrained()->onDelete('cascade');
            $table->string('sale_number')->unique();
            $table->foreignId('product_id')->constrained();
            $table->string('customer_name');
            $table->string('customer_email')->nullable();
            $table->string('customer_phone')->nullable();
            $table->integer('quantity_sold');
            $table->decimal('unit_price', 10, 2);
            $table->decimal('total_amount', 10, 2);
            $table->decimal('net_amount', 10, 2);
            $table->enum('payment_status', ['pending', 'paid', 'partial', 'refunded'])->default('pending');
            $table->date('sale_date');
            $table->date('delivery_date')->nullable();
            $table->text('notes')->nullable();
            $table->foreignId('created_by')->constrained('users');

            $table->decimal('commission_amount', 10, 2)->nullable();
            // product_id dihapus
            $table->enum('delivery_status', ['pending', 'packed', 'shipped', 'delivered', 'cancelled'])->default('pending');

            // Relasi
            $table->foreignId('processed_by_user_id')->nullable()->constrained('users')->onDelete('set null');

            $table->timestamps();

            // Indexing
            $table->index('customer_email');
        });
    }

    public function down()
    {
        Schema::dropIfExists('sales');
    }
};
