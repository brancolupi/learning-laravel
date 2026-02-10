<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about', [
        'name' => 'Lucio Asciolla',
        'age' => 41,
    ]);
});

Route::get('/text', function () {
    return "risposta in testo semplice";
});

Route::get('/test-webapi', function () {
    return view('test-webapi');
});
