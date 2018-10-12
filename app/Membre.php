<?php

namespace App;

use App\Notifications\MembreResetPassword;
use Illuminate\Notifications\Notifiable;
use Backpack\CRUD\CrudTrait;
use Cmgmyr\Messenger\Traits\Messagable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Membre extends Authenticatable
{   
    use Messagable;
    use Notifiable;
    use CrudTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','name', 'email', 'password','type','info','eduction','exp','address',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
      
/*relation with postes */

public function Posts(){


return $this->hasMany('App\Post');

}

public function Categories(){


    return $this->hasMany('App\Categorie');
    
    }

public function Postulations(){


    return $this->hasMany('App\Postulation');
    
    }



    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new MembreResetPassword($token));
    }
}
