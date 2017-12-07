<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Metric extends Model
{
    public function subcharacteristic()
    {
        return $this->belongsTo('App\Subcharacteristic');
    }

    public function deliverable()
    {
        return $this->belongsToMany('App\Deliverable','metric_deliverable')->withPivot('id');
    }
}
