<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['games'] = Game::all();
        return view('games.create',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['games'] = Game::all();
        return view('games.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $image = $request->file('picture');
        $imageName = time().'.'.$image->extension();

        // Save the image to storage/app/public/images
        $image->storeAs('public/images', $imageName);

        Game::create([
            'title' => $request->title,
            'picture' => $imageName
        ]);

        return redirect()->route('games.create');
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
        
        if (empty($request->picture)) {
            $data->update([
                'title' => $request->title
            ]);
        } else {
            $request->validate([
                'picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);
    
            $image = $request->file('picture');
            $imageName = time().'.'.$image->extension();
    
            // Save the image to storage/app/public/images
            $image->storeAs('public/images', $imageName);

            $data->update([
                'title' => $request->title,
                'picture' => $imageName
            ]);

        }

        return redirect()->route('games.create');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Game::find($id);

        Storage::delete(asset('storage/images'. $data->picture));
    
        $data->delete();

        return redirect()->route('games.create');
    }
}
