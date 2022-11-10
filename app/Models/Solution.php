<?php

namespace App\Models;

class Solution extends BaseModel {

    protected $table = "solutions";
    protected $hidden = ["id", "issue_id", "mitigation_plan_id"];
}