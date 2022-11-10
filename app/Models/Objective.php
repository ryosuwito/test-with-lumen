<?php

namespace App\Models;

class Objective extends BaseModel {

    protected $table = "objectives";
    protected $hidden = ["id", 'laravel_through_key'];
}