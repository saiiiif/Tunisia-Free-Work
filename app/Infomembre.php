<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Infomembre extends Model
{
    protected $fillable = [
        'id', 'idmembre', 'info','exp', 'education'
    ];
}
