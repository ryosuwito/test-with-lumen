<?php

namespace App\Models;

class Employee extends BaseModel {

    protected $table = "employees";

    public function issues(){
        return $this->hasMany(Issue::class)
                    ->with('objectives')
                    ->with('risks')
                    ->select("objective_id", "employee_id", "risk_id")
                    ->groupBy("objective_id")
                    ->groupBy("employee_id")
                    ->groupBy("risk_id");
    }        
    public function indicators(){
        return $this->hasMany(Issue::class)
                    ->with('indicators');
    }       
    public function solutions(){
        return $this->hasMany(Issue::class)
                    ->with('solutions');
    }         
}