<?php

namespace Database\Seeders;

use App\Models\Issue;
use App\Models\Employee;
use App\Models\Objective;
use App\Models\Risk;
use App\Models\Indicator;
use App\Models\IssueIndicator;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IssueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = fopen('issue.csv', 'r');
        $count = 0;
        while (($line = fgetcsv($file)) !== FALSE) {
            $issue_raw = explode(",",$line[0]);
            print_r("$line[0]\n");
            $issue = new Issue;
            $employee = Employee::where('name','=',$issue_raw[1])->first();
            $issue->employee_id = $employee->id;
            $issue->objective_id = Objective::where('name','=',$issue_raw[2])->first()->id;
            $issue->risk_id = Risk::where('name','=',$issue_raw[3])->first()->id;
            $issue->score = $issue_raw[4];
            $issue->save();
            $issue_indicator = new IssueIndicator;
            $issue_indicator->issue_id = $issue->id;
            $issue_indicator->indicator_id = Indicator::where('name','=',$issue_raw[5])->first()->id;
            $issue_indicator->save();
            $count += 1;
        }
        fclose($file);
    }
}
