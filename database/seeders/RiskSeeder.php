<?php

namespace Database\Seeders;

use App\Models\Risk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RiskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 10; ++$i) {
            $risk = new Risk;
            $risk->name = "Risk $i";
            $risk->save();
        }
    }
}