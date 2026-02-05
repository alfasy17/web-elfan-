<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('components/layout-utama');
});

Route::get('/header', function () {
    return view('header');
});