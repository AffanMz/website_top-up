<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingPage');
});


Route::get('/login', function () {
    return view('login');
});

Route::get('/order', function () {
    return view('order');
});

Route::get('/order-ent', function () {
    return view('order-ent');
});

Route::get('/membership', function () {
    return view('membership');
});