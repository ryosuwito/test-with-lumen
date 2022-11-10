<?php

namespace App\Models;

class MitigationPlan extends BaseModel {

    protected $table = "mitigation_plans";
    protected $hidden = ["id",  'laravel_through_key'];

}