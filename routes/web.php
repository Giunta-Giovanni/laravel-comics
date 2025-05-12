<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $comics = config('comics');
    $hub_links = config('hublinks');
    $categoryLinksConfig = config('categoryLinks');
    $categoryLinks1 = $categoryLinksConfig['category1'];
    $categoryLinks2 = $categoryLinksConfig['category2'];
    $categoryLinks3 = $categoryLinksConfig['category3'];
    $categoryLinks4 = $categoryLinksConfig['category4'];
    return view('comics', compact('comics', 'hub_links', 'categoryLinks1', 'categoryLinks2', 'categoryLinks3', 'categoryLinks4'));
})->name('comics');
