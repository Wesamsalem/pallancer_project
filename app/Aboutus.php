<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aboutus extends Model
{
    //
    protected $table='aboutas';
    protected $fillable = [             
        'title','content','img','tec'
    ];
    public function tec_name(){
        if($this->tec == 0){
            return 'من نحن ';
        }
        else{
            return 'الاستثمار بالتكنولوجيا';
        }
    }

}