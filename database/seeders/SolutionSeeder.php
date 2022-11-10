<?php

namespace Database\Seeders;

use App\Models\Solution;
use App\Models\Employee;
use App\Models\Objective;
use App\Models\Risk;
use App\Models\Issue;
use App\Models\MitigationPlan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SolutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = fopen('solution.csv', 'r');
        $count = 0;
        while (($line = fgetcsv($file)) !== FALSE) {
            $solution_raw = explode(",",$line[0]);
            $solution = new Solution;
            $employee = Employee::where('name','=',$solution_raw[1])->first();
            print_r("$line[0]\n");
            $issue = Issue::where('employee_id',$employee->id)->
                            where('objective_id', Objective::where('name','=',$solution_raw[2])->first()->id)->
                            where('risk_id', Risk::where('name','=',$solution_raw[3])->first()->id)->first();
            $solution->mitigation_plan_id = MitigationPlan::where('name','=',$solution_raw[4])->first()->id;
            $solution->issue_id = $issue->id;
            $solution->save();
            $count += 1;
        }
        fclose($file);
    }
}
