<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postulation extends Model
{
    
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 
     'cv','membre_id','post_id' , 'etat'
     
    ];
    public function Membre()
    {
    // Each data is owned by only one user
    return $this->belongsTo('App\membre');
    }
    public function Post()
    {
    // Each data is owned by only one post
    return $this->belongsTo('App\post');
    }
   
}
