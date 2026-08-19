<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/tarifs', function () {
    return view('tarifs');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/equipe', function () {
    return view('equipe');
});
