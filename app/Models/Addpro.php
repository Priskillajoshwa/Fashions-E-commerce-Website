<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Addpro extends Model
{


    public $timestamps = false;

    protected $table = 'product';

    protected $fillable = [
        
        'name',
        'price',
        'img',
    ];

   
}


