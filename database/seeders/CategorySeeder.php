<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $categories = [
            [
                "tank_name"=> "Tank No 1",
            ],
            [
                "tank_name"=> "Tank No 2",
            ],
            [
                "tank_name"=> "Tank No 4",
            ],
            [
                "tank_name"=> "Tank No 6",
            ],
        ];

        foreach ($categories as $category) {
            \App\Models\Category::create($category);
        }

        // $categories = \App\Models\Category::all();

        // \App\Models\CalibrationChart::factory()
        //     ->count(3)
        //     ->create()
        //     ->each(function ($chart) use ($categories) {
        //         $chart->cat_id = $categories->random()->id;
        //         $chart->save();
        //     });

            // \App\Models\OilStock::factory()
            // ->count(3)
            // ->create()
            // ->each(function ($stock) use ($categories) {
            //     $stock->cat_id = $categories->random()->id;
            //     $stock->save();
            // });

     
    }
}
