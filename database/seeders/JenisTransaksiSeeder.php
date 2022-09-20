<?php

namespace Database\Seeders;

use App\Models\JenisTransaksi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenisTransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JenisTransaksi::create([
            'id' => 1,
            'jenis' => 'Tarik tunai',
        ]);

        JenisTransaksi::create([
            'id' => 2,
            'jenis' => 'Transfer',
        ]);

        JenisTransaksi::create([
            'id' => 3,
            'jenis' => 'Pembayaran pulsa',
        ]);
    }
}
