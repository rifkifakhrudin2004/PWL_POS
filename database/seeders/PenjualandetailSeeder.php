<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualandetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed data penjualan detail
        $penjualanIds = range(1, 10);
        $barangIds = range(1, 10);

        foreach ($penjualanIds as $penjualanId) {
            // Randomly choose 3 barang for each penjualan
            $chosenBarangIds = array_rand(array_flip($barangIds), 3);

            foreach ($chosenBarangIds as $barangId) {
                $data = [
                    'penjualan_id' => $penjualanId,
                    'barang_id' => $barangId,
                    'harga' => rand(10, 100), // Random harga between 10 and 100
                    'jumlah' => rand(1, 10),   // Random jumlah between 1 and 10
                    'created_at' => now(),
                    'updated_at' => now(),
                ];

                DB::table('t_penjualan_detail')->insert($data);
            }
        }
    }
}
