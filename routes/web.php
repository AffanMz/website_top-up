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
    return view('landingPage', ['title' => 'Welcome To Top Up', 'games' =>  Game::all()]);
})->name('landingPage');

// auth login & logout
Route::get('/login' , [UsersController::class,'login'])->name('login')->middleware('guest');
Route::get('/register' , [UsersController::class,'register'])->name('register')->middleware('guest');
Route::post('/regis' , [UsersController::class,'regis'])->name('regis');
Route::post('/logout' , [UsersController::class,'logout'])->name('logout');
Route::post('/authlogin' , [UsersController::class,'authlogin'])->name('authlogin');


Route::get('/order', function () {
    $data['items'] = Item::all();
    return view('order');
})->middleware('auth');

Route::get('/order/show/{id}' , [OrdersController::class,'show'])->name('order.show')->middleware('auth');

Route::get('/order-ent', function () {
    return view('order-ent');
})->middleware('auth');

Route::get('/membership', function () {
    return view('membership');
})->name('membership')->middleware('auth');

Route::post('/member' , [OrdersController::class,'membership'])->name('member');

// Routes CRUD User

Route::get('/users/createadmin' , [UsersController::class,'create'])->name('users.createadmin')->middleware('auth');

Route::post('/users/store' , [UsersController::class,'store'])->name('users.store');

// Route::get('/users/create/{id}' , [UsersController::class,'create'])->name('users.create')->middleware('auth');

Route::put('/users/update/{id}' , [UsersController::class,'update'])->name('users.update')->middleware('auth');

Route::get('/users/edit/{id}' , [UsersController::class,'edit'])->name('users.edit')->middleware('auth');

Route::delete('/users/destroy/{id}' , [UsersController::class,'destroy'])->name('users.destroy')->middleware('auth');

// Routes CRUD Item

Route::get('/items' , [ItemsController::class,'index'])->name('itemspage')->middleware('auth');

Route::post('/items/store' , [ItemsController::class,'store'])->name('items.store')->middleware('auth');

Route::get('/items/create/{id}' , [ItemsController::class,'create'])->name('items.create')->middleware('auth');

Route::put('/items/update/{id}' , [ItemsController::class,'update'])->name('items.update')->middleware('auth');

Route::get('/items/edit/{id}' , [ItemsController::class,'edit'])->name('items.edit')->middleware('auth');

Route::delete('/items/destroy/{id}' , [ItemsController::class,'destroy'])->name('items.destroy')->middleware('auth');

// Routes CRUD Game

Route::get('/games' , [GamesController::class,'index'])->name('gamespage')->middleware('auth');

Route::post('/games' , [GamesController::class,'store'])->name('games.store')->middleware('auth');

Route::get('/games/create' , [GamesController::class,'create'])->name('games.create')->middleware('auth');

Route::put('/games/update/{id}' , [GamesController::class,'update'])->name('games.update')->middleware('auth');

Route::get('/games/edit/{id}' , [GamesController::class,'edit'])->name('games.edit')->middleware('auth');

Route::delete('/games/destroy/{id}' , [GamesController::class,'destroy'])->name('games.destroy')->middleware('auth');

// Routes CRUD Order

Route::get('/orders' , [OrdersController::class,'index'])->name('orderspage')->middleware('auth');

Route::post('/orders/store' , [OrdersController::class,'store'])->name('orders.store')->middleware('auth');

Route::get('/orders/create' , [OrdersController::class,'create'])->name('orders.create')->middleware('auth');

Route::put('/orders/update/{id}' , [OrdersController::class,'update'])->name('orders.update')->middleware('auth');

Route::get('/orders/edit/{id}' , [OrdersController::class,'edit'])->name('orders.edit')->middleware('auth');

Route::delete('/orders/destroy/{id}' , [OrdersController::class,'destroy'])->name('orders.destroy')->middleware('auth');











