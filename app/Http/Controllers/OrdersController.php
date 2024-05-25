<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\User;
use App\Models\Order;
use Twilio\Rest\Client;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['orders'] = Order::all();
        return view('orderspage', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['users'] = Order::all();
        return view('orders.create', $data);
    }

    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Order::create([
            'id_acc' => $request->id_acc,
            'id_server' => $request->id_server,
            'id_user' => $request->id_user,
            'id_item' => $request->id_item            
        ]);

        $id =  $request->id_item;

        $items = Item::find($id);

        $game = Item::all($items->id_game);
        $phone = User::find(auth()->id());

        $item = $request->id_acc;
        $quantity = $request->id_server;
        $info = $items->info;
        $price = $items->price;

        $message = "Id Accont: $item | ";
        $message .= "Id Sever: $quantity | ";
        $message .= "Jenis: Rp $info | ";
        $message .= "Total: Rp $price | ";
        $message .= "Payment: $request->pay | ";
        $message .= "WA: Rp $phone->phone ";

        // $this->sendWhatsAppMessage('+6287762752768', $message);

        $whatsappUrl = "https://wa.me/6287762752768?text=" . urlencode($message);

        return view('order', ['nomer' => $items->id_game, 'url' => $whatsappUrl, 'game' => $game]);

        // return redirect($whatsappUrl);

        // return redirect()->route('orderspage');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data['game'] = Item::where('id_game', $id)->get();
        $data['nomer'] = $id;
        return view('order', $data);
    }

    public function membership(Request $request)
    {
        $phone = User::find(auth()->id());
        $message = "Membership: $request->membership | ";
        $message .= "payment: $request->pay | ";
        $message .= "WA: Rp $phone->phone ";


        $whatsappUrl = "https://wa.me/6287762752768?text=" . urlencode($message);

        return view('membership', ['url' => $whatsappUrl]);
        
        // $data['game'] = Item::where('id_game', $id)->get();
        // $data['nomer'] = $id;
        // return view('order', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['cari'] = Order::find($id);
        
        return view('orders.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Order::find($id);

        $data->update([
            'id_acc' => $request->id_acc,
            'id_server' => $request->id_server,
            'id_user' => $request->id_user,
            'id_item' => $request->id_item   
        ]);

        return redirect()->route('orderspage');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Order::find($id);

        $data->delete();

        return redirect()->route('orders.create');
    }
}
