<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/learn-api', function (Request $request) {
    return "Dati richiesti con GET";
});

Route::post('/learn-api', function (Request $request) {
    return "Dati inviati con POST";
});

Route::put('/learn-api', function (Request $request) {
    return "Dati aggiornati con PUT";
});

Route::patch('/learn-api', function (Request $request) {
    return "Dati aggiornati parzialmente con PATCH";
});

Route::delete('/learn-api', function (Request $request) {
    return "Dati eliminati con DELETE";
});

