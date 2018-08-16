<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserBankAccount extends Model
{
    protected $table="user_bank_accounts";
    protected $fillable = [
        'user_id','bank_id','account_name','account_number'
    ];
}
