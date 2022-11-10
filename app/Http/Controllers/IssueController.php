<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;

use App\Models\Employee;
use App\Models\Issue;
use App\Models\IssueIndicator;
use App\Models\Solution;

class IssueController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function list(Request $request) {
        $employees = Employee::with("issues")->get();
        $data_issue = [];
        foreach($employees as $employee){
            foreach($employee->issues as $issue){
                $i = Issue::with("indicators")->with("solutions")
                                    ->where('employee_id', $employee->id)
                                    ->where('objective_id', $issue->objective_id)
                                    ->where('risk_id', $issue->risk_id)->first();
                array_push($data_issue, [
                    "employee_id"=>$employee->id,
                    "name"=>$employee->name,
                    "objective"=>$issue->objectives->name,
                    "risk"=>$issue->risks->name,
                    "score"=>$i->score,
                    "indicators"=>$i->indicators,
                    "solutions"=>$i->solutions
                ]);
            }
        }
        return ApiResponse::success("OK", $data_issue);
    }
}
