<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected $table="user_roles";
    protected $fillable = [
        'user_id','user_level_id'
    ];
}
