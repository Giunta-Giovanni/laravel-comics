<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $comics = config('comics');
    $hub_links = config('hublinks');
    return view('comics', compact('comics', 'hub_links'));
})->name('comics');
