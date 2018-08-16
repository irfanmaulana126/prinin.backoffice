<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    protected $table="villages";
    protected $fillable = [
        'name','district_id'
    ];
}
