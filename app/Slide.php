<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    //
    protected $fillable = [             
        'title','content','img','page'
    ];

    public function page_name(){
        if($this->page == 0){
            return 'الصفحة الرئيسية';
        }
        elseif($this->page == 1){
            return ' من نحن';
        }
        else{
            return 'الخدمات';
        }
    }
}
