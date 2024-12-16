<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->foreignId('kupon_id')->constrained('kupons')->onDelete('cascade'); // Foreign Key ke tabel tickets
            $table->string('user_name'); // Nama Pemesan
            $table->string('user_email'); // Email Pemesan
            $table->string('user_phone'); // No HP Pemesan
            $table->string('payment_proof')->nullable(); // Path File Bukti Pembayaran
            $table->enum('status', ['pending', 'processed', 'cancelled','success'])->default('pending'); // Status Pemesanan
            $table->timestamps(); // Timestamps (created_at, updated_at)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
