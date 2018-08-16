<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable
{
    protected $table="admins";
    protected $fillable = [
        'name', 'email', 'password','status'
    ];
    protected $hidden = [
        'password', 'token_remember','login_login'
    ];
}
