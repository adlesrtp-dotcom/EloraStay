<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('tipe_kamars', function (Blueprint $table) {
            $table->string('kapasitas')->nullable();
            $table->string('ukuran')->nullable();
            $table->decimal('rating', 2, 1)->nullable();

            $table->boolean('wifi')->default(1);
            $table->boolean('ac')->default(1);
            $table->boolean('tv')->default(1);
            $table->boolean('sarapan')->default(1);
            $table->boolean('kamar_mandi')->default(1);
        });
    }

    public function down(): void
    {
        Schema::table('tipe_kamars', function (Blueprint $table) {
            $table->dropColumn([
                'kapasitas',
                'ukuran',
                'rating',
                'wifi',
                'ac',
                'tv',
                'sarapan',
                'kamar_mandi'
            ]);
        });
    }
};