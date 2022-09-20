<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            BahasaSeeder::class,
            JenisTransaksiSeeder::class,
            PembayaranPulsaSeeder::class,
            TransferSeeder::class,
            TunaiSeeder::class,
        ]);
    }
}
