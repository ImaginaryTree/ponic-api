<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\data_statistikModel;

class DataStatistikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataStatistik = [
            [
                'ppm' => 30,
                'suhu' => 55,
                'v_air' => 70,
                'ph' => 4.2,
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
            ],
            [
                'ppm' => 30,
                'suhu' => 55,
                'v_air' => 70,
                'ph' => 4.2,
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
            ],
            [
                'ppm' => 10,
                'suhu' => 15,
                'v_air' => 500,
                'ph' => 1.5,
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
            ]
        ];

        
        data_statistikModel::insert($dataStatistik);
        
    }
}
