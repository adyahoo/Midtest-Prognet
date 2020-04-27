<?php

namespace App\Http\Controllers;

use App\game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_games = game::all();
        return view('game',compact('all_games'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambahgame');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new game();
        $store->name = $request->name;
        $store->developer = $request->developer;
        $store->release_year = $request->release_year;
        $store->save();
        return redirect('/')->with('success','data stored');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\game  $game
     * @return \Illuminate\Http\Response
     */
    public function show(game $game)
    {
        return view('tampilgame',compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\game  $game
     * @return \Illuminate\Http\Response
     */
    public function edit(game $game)
    {
        // $game_id = $game->id;
        // echo $game->id;
        return view('editgame',compact('game'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\game  $game
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // echo $game->id;
        $update=$request->validate([
            'name'=>'required',
            'developer'=>'required',
            'release_year'=>'required',
        ]);
        // $game->update($request->all());
        game::whereId($id)->update($update);

        return redirect('/')->with('success','data updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy(game $game)
    {
        $game->delete();
        // echo $game->id;
        return redirect('/')->with('success','data deleted');
    }
}
