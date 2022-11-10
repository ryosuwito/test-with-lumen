<?php

namespace App\Models;

class IssueIndicator extends BaseModel {

    protected $table = "issue_indicators";
    protected $hidden = ["id", "issue_id", "indicator_id"];
}