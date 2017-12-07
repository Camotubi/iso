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
        return $this->hasMany('App\Evaluation','metric_deliverable_id');

    }

    public function currentValue()
    {
        try{
            $expression = $this->metric()->first()->formula;
            $evaluation = $this->evaluations()->orderBy('created_at', 'desc')->first();
            if(empty($evaluation))
            {
                return "Not set";
            }
            $measurements = $evaluation->measurements()->get();
            foreach($measurements as  $measurement)
            {
                $expression = str_replace($measurement->variable,$measurement->value,$expression);
            }
            $calculator = new \NXP\MathExecutor();
            
            $ret= $calculator->execute($expression);
            return $ret;
        }catch(\Exception $e)
        {
            return "error";
        }

    }

    public function valueHistory()
    {
        try{

        $calculator = new \NXP\MathExecutor();
        $valueHistory = array();
        $expression = $this->metric()->first()->formula;
        $evaluations = $this->evaluations()->orderBy('created_at', 'asc')->get();
        foreach($evaluations as $evaluation)
        {
            $expression = $this->metric()->first()->formula;
            $measurements = $evaluation->measurements()->get();
            foreach($measurements as  $measurement)
            {
                $expression = str_replace($measurement->variable,$measurement->value,$expression);
            }
            array_push($valueHistory,$calculator->execute($expression));
        }
        return $valueHistory;
        }catch(\Exception $e)
        {
            return "error";
        }

    }
}
