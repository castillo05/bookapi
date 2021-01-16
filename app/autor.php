<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class autor extends Model
{
    //Relaciones
    public function book(Type $var = null)
    {
        # code...
        return $this->hasMany('App\autor');
    }
}
