<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcharacteristic extends Model
{
    public function metrics()
    {
        return $this->hasMany('App\Metric');
    }

    public function characteristic()
    {
        return $this->belongsTo('App\Characteristic');
    }
}
