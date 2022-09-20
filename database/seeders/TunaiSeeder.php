<?php

namespace Database\Seeders;

use App\Models\Tunai;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TunaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tunai::create([
            'id' => 1,
            'nominal' => '100.000',
        ]);

        Tunai::create([
            'id' => 2,
            'nominal' => '250.000',
        ]);

        Tunai::create([
            'id' => 3,
            'nominal' => '250.000',
        ]);
    }
}
