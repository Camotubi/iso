<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Characteristic extends Model
{
    //
    public function qualityAttribute()
    {
        return $this->belongsTo('App\QualityAttribute');
    }

    public function subcharacteristics()
    {
        return $this->hasMany('App\Subcharacteristic');
    }

}
