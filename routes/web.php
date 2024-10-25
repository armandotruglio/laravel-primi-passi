<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $title="Home Page";
    return view('pages.home', compact("title"));
});

Route::get('/about', function () {
    $list = [
        "first",
        "second",
        "third",
    ];
    return view('pages.about', compact("list"));
});