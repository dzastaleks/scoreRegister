<?php

namespace App\Http\Controllers;

use App\Season;
use App\Score;
use App\Club;
use App\ClubTotals;
use Illuminate\Http\Request;
class ScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $seasons = Season::all();
        $scores = Score::all();

        return view('score.index')->with([
            'seasons'=>$seasons,
            'scores'=>$scores
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $seasons = Season::all();
        $clubs = Club::all();

        return view('score.create')->with([
            'seasons'=>$seasons,
            'clubs'=>$clubs
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       $this->validate($request,[
            'season'=>'required',
            'host'=>'required',
            'guest'=>'required',
            'host_score'=>'required|numeric|min:0',
            'guest_score'=>'required|numeric|min:0',
            'played_date'=>'required'
        ]);

        
        $score = New Score;
        $score->season_id = $request->input('season');
        $score->host_id = $request->input('host');
        $score->guest_id = $request->input('guest');
        $score->host_score = $request->input('host_score');
        $score->guest_score = $request->input('guest_score');
        $score->played_at = $request->input('played_date');
        
        $total_score = New ClubTotals();
        if()


        $score->save();
        return redirect('/score')->with('success','Match saved successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the sphp pecified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
 
}
