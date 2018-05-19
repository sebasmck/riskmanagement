<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'lastname', 'nickname', 'city' ,'cellphone' ,'referredby', 'is_approved'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function company(){
        return $this->hasOne('App\Company', 'id_company', 'id_company');
    }

    public function projects(){
        return $this->hasMany('App\Project', 'id_user', 'id');
    }
    
}
