<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class baiviet extends Model
{
    //
    public function baiviet()
    {
        return $this->belongsTo('App\baiviet');
    }
  
}
