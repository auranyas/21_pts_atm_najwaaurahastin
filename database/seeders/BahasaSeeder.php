<?php

namespace Database\Seeders;

use App\Models\Bahasa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BahasaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bahasa::create([
            'id' => 1,
            'bahasa' => 'Indonesia',
        ]);

        Bahasa::create([
            'id' => 2,
            'bahasa' => 'Inggris',
        ]);

        Bahasa::create([
            'id' => 3,
            'bahasa' => 'Arab',
        ]);
    }
}
