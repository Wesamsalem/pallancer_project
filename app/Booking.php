<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [             
        'name','email','phone','date','branche_id'
    ];
    
    public function branche()
    {
        
        return $this->belongsTo(
            branche::class,
            'branche_id');
}

}