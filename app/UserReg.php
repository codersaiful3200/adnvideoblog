<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserReg extends Model
{
    protected $table = "user_regs";
    public $primaryKey = "id";
    public $timestamps = true;
}
