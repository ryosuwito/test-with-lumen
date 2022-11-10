<?php

namespace App\Models;

class Risk extends BaseModel {

    protected $table = "risks";
    protected $hidden = ["id",  'laravel_through_key'];

}