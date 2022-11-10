<?php

namespace App\Models;

class Issue extends BaseModel {

    protected $table = "issues";
    protected $hidden = ["employee_id, id"];
    public function objectives(){
        return $this->hasOne(Objective::class,'id', 'objective_id');
    }
    public function indicators(){
        return $this->hasManyThrough(Indicator::class, IssueIndicator::class, 'issue_id', 'id', 'id', 'indicator_id');
    }
    public function risks(){
        return $this->hasOne(Risk::class, 'id', 'risk_id');
    }
    public function solutions(){
        return $this->hasManyThrough(MitigationPlan::class, Solution::class, 'issue_id', 'id', 'id', 'mitigation_plan_id');
    }
}