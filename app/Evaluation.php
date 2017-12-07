<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    protected $primaryKey = 'id';
    public function metricDeliverable()
    {
        return $this->belongsTo('App\MetricDeliverable');
    }
    public function measurements()
    {
        return $this->hasMany('App\Measurement');
    }

}
