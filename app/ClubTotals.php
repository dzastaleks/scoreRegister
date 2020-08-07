<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class ClubTotals extends Model
{
    //
    protected $fillable = ['club_id','season_id','score'];



    public function club(){
        return $this->belongsTo('App\Club','club_id');
    }
    public function season(){
        return $this->belongsTo('App\Season','season_id');
    }
    

    public function updateTotalScore($request){

        $host_score = $request->input('host_score');
        $guest_score = $request->input('guest_score');
        //Host Win
        if($host_score>$guest_score){
            ClubTotals::updateOrCreate(
                ['club_id' => $request->input('host'), 'season_id' => $request->input('season')]
            );
            ClubTotals::where(['club_id' => $request->input('host'), 'season_id' => $request->input('season')])->increment('score',3);
        }
        // Draw
        else if($host_score == $guest_score){
            //Host gained 1 point
            ClubTotals::updateOrCreate(
                ['club_id' => $request->input('host'), 'season_id' => $request->input('season')]
            );
            ClubTotals::where(['club_id' => $request->input('host'), 'season_id' => $request->input('season')])->increment('score',1);
            //Guest gained 1 point
            ClubTotals::updateOrCreate(
                ['club_id' => $request->input('guest'), 'season_id' => $request->input('season')]
            );
            ClubTotals::where(['club_id' => $request->input('guest'), 'season_id' => $request->input('season')])->increment('score',1);
        }
        //Guest Win
        else{
            ClubTotals::updateOrCreate(
                ['club_id' => $request->input('guest'), 'season_id' => $request->input('season')]
            );
            ClubTotals::where(['club_id' => $request->input('guest'), 'season_id' => $request->input('season')])->increment('score',3);
        }


        

    }
   
}
