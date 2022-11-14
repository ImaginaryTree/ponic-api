<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\hydroModel;

class HydroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataHydro = [
            [
                'pompa' => 1,
                'min_ph' => 10,
                'max_ph' => 50,
                'min_ppm' => 10,
                'max_ppm' => 50,
                // 'time_of' => "15:48:05",
                // 'time_on' => "00:00:00",
                // 'planting_date' => "2022-12-01",
            ]
           
        ];
        hydroModel::create([
            'pompa' => 1,
        ]);
    }
}
