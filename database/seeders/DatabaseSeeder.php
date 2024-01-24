<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Produk;
use App\Models\Pelanggan;
use App\Models\Penjualan;
use App\Models\Detailpenjualan;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Produk::create([
            'ProdukID' => 1,
            'NamaProduk' => 'Mie',
            'Harga' => 1000,
            'Stok' => 11
        ]);
        Pelanggan::create([
            'PelangganID' => 1,
            'NamaPelanggan' => 'zakaria',
            'Alamat' => 'Lojejer',
            'NomorTelepon' => '085748440529'
        ]);
        Penjualan::create([
            'PenjualanID' => 1,
            'TanggalPenjualan' => '2024-01-10',
            'TotalHarga' => 1000,
            'PelangganID' => 1
        ]);
        Detailpenjualan::create([
            'DetailID' => 1,
            'PenjualanID' => 1,
            'ProdukID' => 1,
            'JumlahProduk' => 1,
            'Subtotal' => 1
        ]);
    }
}
