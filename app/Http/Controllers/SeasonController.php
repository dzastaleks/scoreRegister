<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Season;
class SeasonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $seasons= Season::all();

        return view('season.index')->with(['seasons'=>$seasons]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('season.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $this->validate($request,[
            'season_name'=>'required|unique:seasons,name',
            'season_start'=>'required|date',
            'season_end'=>'required|date',
        ]);
        $season = New Season;
        $season->name = $request->input('season_name');
        $season->season_start = $request->input('season_start');
        $season->season_end = $request->input('season_end');
        
        $season->save();
        return redirect('/season')->with('success','Season added successfully!');
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
        $season = Season::find($id);

        return view('season.edit')->with(['season'=>$season]);
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
        $this->validate($request,[
            'season_name'=>'required|unique:seasons,name,'. $id,
            'season_start'=>'required|date',
            'season_end'=>'required|date',
        ]);
        $season = Season::find($id);
        $season->name = $request->input('season_name');
        $season->season_start = $request->input('season_start');
        $season->season_end = $request->input('season_end');
        
        $season->save();
        return redirect('/season')->with('success','Season updated successfully!');
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
        if(Season::find($id)){
            $examPeriod= Season::find($id);
            $examPeriod->delete();
            return redirect('/season')->with('success','Season deleted successfully');

        }
    }
}
