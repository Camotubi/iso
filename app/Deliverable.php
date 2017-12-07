<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deliverable extends Model
{

    public function project()
    {
        return $this->belongsTo('App\Project');
    }

    public function metrics()
    {
        return $this->belongsToMany('App\Metric', 'metric_deliverable')->withPivot('id');
    }

}
