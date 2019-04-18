<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mylist extends Model
{
    protected $table = "mylists";
    public $primaryKey = "id";
    public $timestamps = true;
}
