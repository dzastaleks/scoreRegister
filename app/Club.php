<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    //
   
    public function scores(){
        return $this->hasMany('App\Score');
    }

    public function club_totals(){
        return $this->hasMany('App\ClubTotals');
    }
    public function getAll(){
        return $this->all();
    }
    public function getAllExceptSelected($selectID){
        return $this->all()->except($selectID);
        
    }
    
}
