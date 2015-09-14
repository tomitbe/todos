<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class todos extends Model
{
    protected $fillable = array('label', 'userid','done');


}

