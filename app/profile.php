<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    
    protected $fillable = [
        'id', 'idmembre', 'info','exp', 'education'
    ];
}
