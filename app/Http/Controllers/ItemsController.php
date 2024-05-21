<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['items'] = Item::all();
        return view('itemspage', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Item::create([
            'title' => $request->title,
            'value' => $request->value,
            'value_up' => $request->value_up,
            'info' => $request->info,
            'price' => $request->price,
            'id_game' => $request->game
        ]);

        return redirect()->route('itemspage');
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
        $data['cari'] = Item::find($id);
        return view('items.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Item::find($id);

        $data->update([
            'title' => $request->title,
            'value' => $request->value,
            'value_up' => $request->value_up,
            'info' => $request->info,
            'price' => $request->price,
            'id_game' => $request->game
        ]);

        return redirect()->route('itemspage');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Item::find($id);

        $data->delete();

        return redirect()->route('itemspage');
    }
}
