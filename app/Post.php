<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
     'titre','postjob',
     
    ];
    public function membre()
    {
    // Each data is owned by only one user
    return $this->belongsTo('App\membre');
    }
    public function categories()
    {
        return $this->hasMany('App\categories');
    }

public function Postulations(){


    return $this->hasMany('App\Postulation');
    
    }


}
