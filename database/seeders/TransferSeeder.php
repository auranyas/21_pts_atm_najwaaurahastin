<?php

namespace Database\Seeders;

use App\Models\Transfer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Transfer::create([
            'id' => 1,
            'nomorrekeningtujuan' => '12345',
            'nominal' => '100.000',
        ]);

        Transfer::create([
            'id' => 2,
            'nomorrekeningtujuan' => 'Transfer',
            'nominal' => '250.000',
        ]);

        Transfer::create([
            'id' => 3,
            'nomorrekeningtujuan' => 'Pembayaran pulsa',
            'nominal' => '250.000',
        ]);
    }
}
