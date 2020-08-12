<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //
    protected $fillable = [             
        'title','content','img','short_content','logo'
    ];
}
