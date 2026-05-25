<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {

            $table->id();

            $table->string('nama');
            $table->string('email');
            $table->string('telepon');

            $table->foreignId('kamar_id')
                  ->constrained('kamars')
                  ->onDelete('cascade');

            $table->date('checkin');
            $table->date('checkout');

            $table->integer('total_harga');

            $table->enum('status', [
                'pending',
                'checkin',
                'selesai'
            ])->default('pending');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};