<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PrintCategorie extends Model
{
    protected $table="print_categories";
    protected $fillable = [
        'name'
    ];
}
