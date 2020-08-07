<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
//
    public function club_totals()
    {
        return $this->hasMany('App\ClubTotals');
    }
}
