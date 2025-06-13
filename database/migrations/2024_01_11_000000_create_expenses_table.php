<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->string('expense_number')->unique();
            $table->string('category'); // Seeds, Fertilizer, Equipment, Labor, etc.
            $table->string('description');
            $table->decimal('amount', 10, 2);
            $table->date('expense_date');
            $table->string('vendor_name')->nullable();
            $table->enum('payment_method', ['cash', 'bank_transfer', 'check', 'credit_card'])->default('cash');
            $table->enum('status', ['pending', 'paid', 'overdue'])->default('pending');
            $table->foreignId('field_id')->nullable()->constrained();
            $table->foreignId('crop_id')->nullable()->constrained();
            $table->string('receipt_path')->nullable();
            $table->text('notes')->nullable();
            $table->foreignId('created_by')->constrained('users');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('expenses');
    }
};
