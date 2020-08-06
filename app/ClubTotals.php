<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class ClubTotals extends Model
{
    //

    public function club(){
        return $this->belongsTo('App\Club','club_id');
    }
    public function season(){
        return $this->belongsTo('App\Season','season_id');
    }
    
   
}
