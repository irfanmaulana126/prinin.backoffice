<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PrintSubCategorie extends Model
{
    protected $table="print_sub_categories";
    protected $fillable = [
        'name','print_category_id'
    ];
}
