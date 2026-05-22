<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipeKamarSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('tipe_kamars')->insert([

            [
                'nama_tipe' => 'Deluxe',
                'deskripsi' => 'Kamar modern dengan suasana nyaman dan fasilitas lengkap untuk pengalaman menginap yang tenang.',
                'harga' => 500000,
                'gambar' => 'deluxe.jpeg',
            ],

            [
                'nama_tipe' => 'Executive',
                'deskripsi' => 'Kamar elegan dengan ruang lebih luas, cocok untuk tamu bisnis maupun liburan premium.',
                'harga' => 700000,
                'gambar' => 'executive.jpeg',
            ],

            [
                'nama_tipe' => 'Superior Suite',
                'deskripsi' => 'Suite mewah dengan interior eksklusif dan kenyamanan terbaik untuk pengalaman menginap istimewa.',
                'harga' => 1200000,
                'gambar' => 'superiorsuite.jpeg',
            ],

            [
                'nama_tipe' => 'Family',
                'deskripsi' => 'Kamar luas yang dirancang khusus untuk keluarga dengan suasana hangat dan nyaman.',
                'harga' => 900000,
                'gambar' => 'family.jpeg',
            ],

            [
                'nama_tipe' => 'Junior Suite',
                'deskripsi' => 'Kamar stylish dengan desain modern dan area santai yang nyaman untuk beristirahat.',
                'harga' => 800000,
                'gambar' => 'juniorsuite.jpeg',
            ],

            [
                'nama_tipe' => 'Standard',
                'deskripsi' => 'Kamar sederhana namun tetap nyaman dengan fasilitas esensial untuk menginap praktis.',
                'harga' => 350000,
                'gambar' => 'standard.jpeg',
            ],

        ]);
    }
}