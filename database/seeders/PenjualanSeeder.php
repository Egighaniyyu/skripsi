<?php

namespace Database\Seeders;

use App\Models\Penjualan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Penjualan::create([
            'nama_barang' => 'Dress Bali',
            'kategori' => 'Dress',
            'jumlah' => 10,
            'tanggal' => '2021-06-04'
        ]);
        Penjualan::create([
            'nama_barang' => 'Dress Malang',
            'kategori' => 'Dress',
            'jumlah' => 11,
            'tanggal' => '2021-06-04'
        ]);
        Penjualan::create([
            'nama_barang' => 'Jaket Bali',
            'kategori' => 'Jumpsuit',
            'jumlah' => 12,
            'tanggal' => '2021-06-04'
        ]);
        Penjualan::create([
            'nama_barang' => 'Top',
            'kategori' => 'Top',
            'jumlah' => 12,
            'tanggal' => '2021-06-04'
        ]);
    }
}
