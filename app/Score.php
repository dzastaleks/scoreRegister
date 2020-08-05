<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    //

    public function host_club(){
        return $this->belongsTo('App\Club','host_id');
    }

    public function guest_club(){
        return $this->belongsTo('App\Club','guest_id');
    }
    public function club_totals(){
        return $this->hasMany('App\ClubTotals');
    }
   
}
