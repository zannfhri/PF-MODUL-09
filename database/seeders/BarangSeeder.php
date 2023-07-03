<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('barangs')->insert([
        //     [
        //         'kode_barang' => 'KRS',
        //         'nama_barang' => 'Kursi',
        //         'harga_barang'=> 300000,
        //         'deskripsi_barang' => 'Kursi untuk indoor dan outdoor',
        //         'satuan_id' => 1
        //     ],
        //     [
        //         'kode_barang' => 'SFA',
        //         'nama_barang' => 'Sofa',
        //         'harga_barang'=> 1450000,
        //         'deskripsi_barang' => 'Sofa untuk ruang tamu',
        //         'satuan_id' => 2
        //     ],
        //     [
        //         'kode_barang' => 'KSR',
        //         'nama_barang' => 'Kasur',
        //         'harga_barang'=> 11000000,
        //         'deskripsi_barang' => 'Kasur dengan ukuran 120 x 60 Cm',
        //         'satuan_id' => 3
        //     ],
        // ]);

        Barang::factory()->count(5)->create();
    }
}
