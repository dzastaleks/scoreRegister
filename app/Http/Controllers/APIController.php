<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Club;
use App\ClubTotals;
use App\Score;
use App\Season;

class APIController extends Controller
{
    //

    public function getSeasons(){
        
        $seasons = Season::orderBy('id', 'desc')->get();
        return response()->json($seasons);
    }
    public function getClubs(){
        
        $clubs = Club::get();
        return response()->json($clubs);
    }
    public function getPosibleClubs(Request $request){
        
        
            $guest = Score::select('guest_id')->where('host_id', $request['club_id'])->where('season_id',$request['season_id'])->get();

        

            

            $posible_clubs = Club::where('id','<>',$request['club_id'])->whereNotIn('id',$guest)->get();
            return response()->json($posible_clubs);
     



    }
    public function getLatestScores(Request $request)
    {
        $scores = Score::where('season_id',$request['season_id'])->with(['host_club','guest_club'])->latest()->get();
        return response()->json($scores);
    }
    public function getRankings(Request $request)
    {
       
        
      $club = Club::leftJoin('club_totals',function($q) use($request){
        $q->on('clubs.id','=','club_totals.club_id')->where('club_totals.season_id',$request['season_id']);
    })->orderBy('score','Desc')->get();
        
        return response()->json($club);
        
    }
}
