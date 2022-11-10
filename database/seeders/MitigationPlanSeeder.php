<?php

namespace Database\Seeders;

use App\Models\MitigationPlan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MitigationPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 10; ++$i) {
            $mitigation = new MitigationPlan;
            $mitigation->name = "Mitigation $i";
            $mitigation->save();
        }
    }
}
