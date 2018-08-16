<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table="users";
    protected $fillable = [
        'name','username','email','phone','ktp','address'
    ];
}
