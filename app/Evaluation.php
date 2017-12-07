<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Evaluation extends Pivot
{
    public function deliverable()
    {
        return $this->belongsTo('App\Deliverable');
    }

    public function metric()
    {
        return $this->belongsTo('App\Metric');
    }

    public function measurements()
    {
        return $this->hasMany('App\Measurement');
    }

    public function currentValue()
    {
        $this->
        $calculator = new \NXP\MathExecutor();

    }
}
