<?php

use Illuminate\Support\Facades\Route;

Route::get('home', function () {
    return view('home');
});

Route::get('products', function(){
    return view('products');
});

Route::get('policy', function(){
    return view('policy');
});

Route::get('dashadmin', function(){
    return view('dashadmin');
});

Route::get('contact', function(){
    return view('contact');
});

Route::get('inicial', function(){
    return view('inicial');
});