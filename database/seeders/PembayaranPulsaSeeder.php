<?php

namespace Database\Seeders;

use App\Models\PembayaranPulsa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PembayaranPulsaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PembayaranPulsa::create([
            'id' => 1,
            'nomorpelanggan' => '12345',
            'nominal' => '100.000',
        ]);

        PembayaranPulsa::create([
            'id' => 2,
            'nomorpelanggan' => 'Transfer',
            'nominal' => '250.000',
        ]);

        PembayaranPulsa::create([
            'id' => 3,
            'nomorpelanggan' => 'Pembayaran pulsa',
            'nominal' => '250.000',
        ]);
    }
}
