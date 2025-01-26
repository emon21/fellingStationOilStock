<?php

namespace Database\Seeders;

use App\Models\CalibarationChart;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CalibrationChartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        // tank 1

        # for loop

        for ($dip = 0; $dip < 104; $dip++) {
            CalibarationChart::create([
                'dip_in_mm' => $dip,
                'qty_in_ltr' => 0,
                'cat_id' => 1
            ]);
        }
    }
}
