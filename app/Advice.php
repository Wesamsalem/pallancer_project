<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advice extends Model
{
    //
    protected $fillable = [             
        'title','content','img','img_cover'
    ];
}
