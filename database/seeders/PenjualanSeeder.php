<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['penjualan_id' => 1, 'user_id' => 1, 'pembeli' => 'John Doe', 'penjual_kode' => 'PJ001', 'penjualan tanggal' => now()],
            ['penjualan_id' => 2, 'user_id' => 2, 'pembeli' => 'Jane Doe', 'penjual_kode' => 'PJ002', 'penjualan tanggal' => now()],
            ['penjualan_id' => 3, 'user_id' => 3, 'pembeli' => 'Alice Smith', 'penjual_kode' => 'PJ003', 'penjualan tanggal' => now()],
            ['penjualan_id' => 4, 'user_id' => 1, 'pembeli' => 'Bob Johnson', 'penjual_kode' => 'PJ004', 'penjualan tanggal' => now()],
            ['penjualan_id' => 5, 'user_id' => 2, 'pembeli' => 'Emily Brown', 'penjual_kode' => 'PJ005', 'penjualan tanggal' => now()],
            ['penjualan_id' => 6, 'user_id' => 3, 'pembeli' => 'David Wilson', 'penjual_kode' => 'PJ006', 'penjualan tanggal' => now()],
            ['penjualan_id' => 7, 'user_id' => 1, 'pembeli' => 'Emma Jones', 'penjual_kode' => 'PJ007', 'penjualan tanggal' => now()],
            ['penjualan_id' => 8, 'user_id' => 2, 'pembeli' => 'Michael Davis', 'penjual_kode' => 'PJ008', 'penjualan tanggal' => now()],
            ['penjualan_id' => 9, 'user_id' => 3, 'pembeli' => 'Olivia Martinez', 'penjual_kode' => 'PJ009', 'penjualan tanggal' => now()],
            ['penjualan_id' => 10, 'user_id' => 1, 'pembeli' => 'Sophia Garcia', 'penjual_kode' => 'PJ010', 'penjualan tanggal' => now()],
        ];

        foreach ($data as $penjualan) {
            DB::table('t_penjualan')->insert($penjualan);
        }
    }
}
