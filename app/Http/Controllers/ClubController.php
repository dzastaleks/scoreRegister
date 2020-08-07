<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Club;
use App\ClubTotals;
class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        

    public function index()
    {
        //
        //$join = Club::leftJoin('club_totals','clubs.id','=','club_totals.club_id')->orderBy('club_totals.score','DESC')->get();

        //$club = Club::with('club_totals')->get();
        $request['season_id'] = 1;

        $club = Club::leftJoin('club_totals',function($q) use($request){
            $q->on('clubs.id','=','club_totals.club_id')->where('club_totals.season_id',$request['season_id']);
        })->orderBy('score','Desc')->get();
       
        
        dd($club);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
