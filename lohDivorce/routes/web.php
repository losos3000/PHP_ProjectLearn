<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/about/{name}/{count}', function ($name, $count) {
    return '<h3>'. $name . ' лох ' . $count . ' раз</h3>';
});