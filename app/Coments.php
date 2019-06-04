<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coments extends Model
{
    //

    public function users () {
        return $this->belongsTo('App\User');
    }

    public function news () {
        return $this->belongsTo('App\News');
    }
}
