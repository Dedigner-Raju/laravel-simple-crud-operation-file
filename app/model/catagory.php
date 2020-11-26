<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class catagory extends Model
{
    //

    protected $guarded = [] ;

    // create relationship model

    public function post(){
        return $this->hasMany('App\model\post', 'catagory_id', 'id');
    }
}
