<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DataBarang;

class DataBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DataBarang::create([
            'nama_barang' => 'Dress Bali',
            'kategori' => 'Dress'
        ]);
        DataBarang::create([
            'nama_barang' => 'Dress Malang',
            'kategori' => 'Dress'
        ]);
        DataBarang::create([
            'nama_barang' => 'Jaket Bali',
            'kategori' => 'Jumpsuit'
        ]);
    }
}
