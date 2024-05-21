<?php

use App\Models\Game;
use App\Models\Item;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GamesController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\OrdersController;

Route::get('/', function () {
    $data['games'] = Game::all();
    return view('landingPage', $data);
});


Route::get('/login', function () {
    return view('login');
});

Route::get('/order', function () {
    $data['items'] = Item::all();
    return view('order');
});

Route::get('/order-ent', function () {
    return view('order-ent');
});

Route::get('/membership', function () {
    return view('membership');
});

// Routes CRUD User

Route::get('/users' , [UsersController::class,'index'])->name('userspage');

Route::post('/users' , [UsersController::class,'store'])->name('users.store');

Route::get('/users/create' , [UsersController::class,'create'])->name('users.create');

Route::put('/users/update/{id}' , [UsersController::class,'update'])->name('users.update');

Route::get('/users/edit/{id}' , [UsersController::class,'edit'])->name('users.edit');

Route::delete('/users/destroy/{id}' , [UsersController::class,'destroy'])->name('users.destroy');

// Routes CRUD Item

Route::get('/items' , [ItemsController::class,'index'])->name('itemspage');

Route::post('/items' , [ItemsController::class,'store'])->name('items.store');

Route::get('/items/create' , [ItemsController::class,'create'])->name('items.create');

Route::put('/items/update/{id}' , [ItemsController::class,'update'])->name('items.update');

Route::get('/items/edit/{id}' , [ItemsController::class,'edit'])->name('items.edit');

Route::delete('/items/destroy/{id}' , [ItemsController::class,'destroy'])->name('items.destroy');

// Routes CRUD Game

Route::get('/games' , [GamesController::class,'index'])->name('gamespage');

Route::post('/games' , [GamesController::class,'store'])->name('games.store');

Route::get('/games/create' , [GamesController::class,'create'])->name('games.create');

Route::put('/games/update/{id}' , [GamesController::class,'update'])->name('games.update');

Route::get('/games/edit/{id}' , [GamesController::class,'edit'])->name('games.edit');

Route::delete('/games/destroy/{id}' , [GamesController::class,'destroy'])->name('games.destroy');

// Routes CRUD Order

Route::get('/orders' , [OrdersController::class,'index'])->name('orderspage');

Route::post('/orders' , [OrdersController::class,'store'])->name('orders.store');

Route::get('/orders/create' , [OrdersController::class,'create'])->name('orders.create');

Route::put('/orders/update/{id}' , [OrdersController::class,'update'])->name('orders.update');

Route::get('/orders/edit/{id}' , [OrdersController::class,'edit'])->name('orders.edit');

Route::delete('/orders/destroy/{id}' , [OrdersController::class,'destroy'])->name('orders.destroy');











