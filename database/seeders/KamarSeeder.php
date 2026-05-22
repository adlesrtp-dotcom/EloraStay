<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KamarSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('kamars')->insert([

            // Deluxe
            ['tipe_kamar_id' => 1, 'nomor_kamar' => 'D01', 'status' => 'tersedia'],
            ['tipe_kamar_id' => 1, 'nomor_kamar' => 'D02', 'status' => 'tersedia'],
            ['tipe_kamar_id' => 1, 'nomor_kamar' => 'D03', 'status' => 'tersedia'],

            // Executive
            ['tipe_kamar_id' => 2, 'nomor_kamar' => 'E01', 'status' => 'tersedia'],
            ['tipe_kamar_id' => 2, 'nomor_kamar' => 'E02', 'status' => 'tersedia'],
            ['tipe_kamar_id' => 2, 'nomor_kamar' => 'E03', 'status' => 'tersedia'],

            // Superior Suite
            ['tipe_kamar_id' => 3, 'nomor_kamar' => 'SS01', 'status' => 'tersedia'],
            ['tipe_kamar_id' => 3, 'nomor_kamar' => 'SS02', 'status' => 'tersedia'],
            ['tipe_kamar_id' => 3, 'nomor_kamar' => 'SS03', 'status' => 'tersedia'],

            // Family
            ['tipe_kamar_id' => 4, 'nomor_kamar' => 'F01', 'status' => 'tersedia'],
            ['tipe_kamar_id' => 4, 'nomor_kamar' => 'F02', 'status' => 'tersedia'],
            ['tipe_kamar_id' => 4, 'nomor_kamar' => 'F03', 'status' => 'tersedia'],

            // Junior Suite
            ['tipe_kamar_id' => 5, 'nomor_kamar' => 'J01', 'status' => 'tersedia'],
            ['tipe_kamar_id' => 5, 'nomor_kamar' => 'J02', 'status' => 'tersedia'],
            ['tipe_kamar_id' => 5, 'nomor_kamar' => 'J03', 'status' => 'tersedia'],

            // Standard
            ['tipe_kamar_id' => 6, 'nomor_kamar' => 'S01', 'status' => 'tersedia'],
            ['tipe_kamar_id' => 6, 'nomor_kamar' => 'S02', 'status' => 'tersedia'],
            ['tipe_kamar_id' => 6, 'nomor_kamar' => 'S03', 'status' => 'tersedia'],

        ]);
    }
}   