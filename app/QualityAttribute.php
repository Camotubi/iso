<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QualityAttribute extends Model
{
    public function characteristics()
    {
        return $this->hasMany('App\Characteristic');
    } 
}
