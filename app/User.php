<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\QueryException;

class User extends Model
{
    protected $table = "user_table";
    public $timestamp = false;
    // const CREATED_AT = "create-time";
    // const UPDATED_AT = "Update_time";

    protected $primaryKey = "userid";
}
