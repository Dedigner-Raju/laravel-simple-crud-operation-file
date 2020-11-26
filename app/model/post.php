<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    //

    protected $guarded = [];
    

    // create one to one relationship model

    public function catagory(){
        return $this->belongsTo('App\model\catagory','catagory_id', 'id');
    }
}
