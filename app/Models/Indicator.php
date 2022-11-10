<?php

namespace App\Models;

class Indicator extends BaseModel {

    protected $table = "indicators";
    protected $hidden = ["id",  'laravel_through_key'];

}