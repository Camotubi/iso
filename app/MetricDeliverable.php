<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class MetricDeliverable extends Pivot
{
    public function deliverable()
    {
        return $this->belongsTo('App\Deliverable');
    }

    public function metric()
    {
        return $this->belongsTo('App\Metric');
    }

    public function evaluations()
    {
        return $this->hasMany('App\Measurments');
    }

    public function currentValue()
    {
        $expression = $this->metric()->formula;
        $evaluation = $this->evaluations()->orderBy('date', 'desc')->first();
        $measurments = $evaluation->measurments();
        foreach($measurments as  $measurement)
        {
            $expression = str_replace($measurment->variable,$measurment->value,$expression);
        }
        $calculator = new \NXP\MathExecutor();
        return $calculator->execute($expression);


    }
}
