<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chuyenmuc extends Model
{
    //
    public function chuyenmuc()
    {
        return $this->belongsTo('App\chuyenmuc');
    }  
}
