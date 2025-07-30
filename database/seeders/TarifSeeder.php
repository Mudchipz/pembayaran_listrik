<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tarif;
class TarifSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $data = [
            ['daya' => 450, 'tarifperkwh' => 415],
            ['daya' => 900, 'tarifperkwh' => 605],
            ['daya' => 1300, 'tarifperkwh' => 1352],
            ['daya' => 2200, 'tarifperkwh' => 1444],
            ['daya' => 3500, 'tarifperkwh' => 1444],
        ];

        foreach ($data as $item) {
            Tarif::create($item);
        }
    }
}
