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
            $table->foreignId('created_by')->constrained('users');
            $table->foreignId('crop_id')->nullable()->constrained()->onDelete('set null');

            $table->text('description')->nullable(); // Diubah menjadi TEXT
            $table->string('vendor_name')->nullable();

            $table->date('expense_date');


            $table->string('expense_number')->unique();
            $table->decimal('amount', 10, 2);
            $table->enum('payment_method', ['cash', 'bank_transfer', 'check', 'credit_card'])->default('cash');
            $table->enum('status', ['pending', 'paid', 'overdue'])->default('pending');
            $table->string('receipt_path')->nullable();
            $table->text('notes')->nullable();

            $table->foreignId('field_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('expenses_category_id')->nullable()->constrained()->onDelete('set null');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('expenses');
    }
};
