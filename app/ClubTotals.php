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
    public function scores(){
        return $this->hasMany('App\Score');
    }
    public function updateScore($request){

        
        if($request->input('host_score') > $request->input('guest_score')){
            $ct = ClubTotals::where('season_id',$request->input('season'))->firstOrCreate([
                'club_id'=>$request->input('host'),
                'season_id'=>$request->input('season')
            ])->increment('score',3);
    
            $ct->save();
        }
    }
}
