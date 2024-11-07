<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about' , function(){
    return view('about' , [
        "page" => "About"
    ]);
});

Route::get('/shop', function(){
    return view('shop' , [
        "page" => "Shop"
    ]);
});

Route::get('/contact', function(){
    return view('contact' , [
        "page" => "Contact"
    ]);
});
