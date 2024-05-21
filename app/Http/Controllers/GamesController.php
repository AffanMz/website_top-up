<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['games'] = Game::all();
        return view('gamespage',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('games.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Game::create([
            'title' => $request->title,
            'picture' => $request->picture
        ]);

        return redirect()->route('gamespage');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['cari'] = Game::find($id);
        return view('games.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Game::find($id);

        $data->update([
            'title' => $request->title,
            'picture' => $request->picture
        ]);

        return redirect()->route('gamespage');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Game::find($id);

        $data->delete();

        return redirect()->route('gamespage');
    }
}
