<?php

namespace Database\Seeders;

use App\Models\Objective;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ObjectiveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 10; ++$i) {
            $objective = new Objective;
            $objective->name = "Objective $i";
            $objective->save();
        }
    }
}