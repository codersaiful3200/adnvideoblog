<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $table = "contents";
    public $primaryKey = "id";
    public $timestamps = true;
}
