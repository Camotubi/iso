<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    public function metricDeliverable()
    {
        $this->belongsTo('App\MetricDeliverable');
    }
    public function measurements()
    {
        return $this->hasMany('App\Measurement');
    }

}
