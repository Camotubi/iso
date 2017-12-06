<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function deliverable()
    {
        return $this->hasMany('App\Deliverable');
    }

}
