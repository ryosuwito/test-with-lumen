<?php
namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model {


    public static $relation_list = [];
    public $timestamps = false;

}