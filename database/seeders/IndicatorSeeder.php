<?php

namespace Database\Seeders;

use App\Models\Indicator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IndicatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 10; ++$i) {
            $indicator = new Indicator;
            $indicator->name = "Indicator $i";
            $indicator->save();
        }
    }
}