<?php

namespace Database\Seeders;

use App\Models\Satuan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('satuans')->insert([
        //     [
        //         'kode_satuan' => 'PCS',
        //         'nama_satuan' => 'Pieces',
        //     ],
        //     [
        //         'kode_satuan' => 'UNT',
        //         'nama_satuan' => 'Unit',
        //     ],
        //     [
        //         'kode_satuan' => 'LSN',
        //         'nama_satuan' => 'Lusin',
        //     ],
        // ]);

        Satuan::factory()->count(5)->create();
    }
}
