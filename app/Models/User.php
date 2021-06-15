<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use App\Models\RoleUser;
use App\Datas\UserRole;

class User extends Authenticatable
{
    use Notifiable;
    protected $fillable = ['username','email','password','national','phone_mobile','sms_allow'];
    public function roles()
    {
        //return $this->belongsToMany('App\Models\RoleUser','user_id');
    }

    public function fullName()
    {
        return ucfirst($this->firstName).' '.ucfirst($this->lastName);
    }
}
