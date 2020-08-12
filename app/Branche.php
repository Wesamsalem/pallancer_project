<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branche extends Model
{
    
    protected $fillable = [             
        'name','content'
    ];

    public function booking()
    {
      return $this->hasMany(Booking::class, 'branche_id');
    }



}
