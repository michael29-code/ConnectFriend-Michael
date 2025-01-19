<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $number = rand(10001,20001);
    return view('register', compact('number'));
});
