<?php

use Illuminate\Support\Facades\Route;

# Route Examples
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

# Route Parameters
Route::get('/portfolio/{firstName}/{lastName}', function ($firstName, $lastName) {
    return $firstName . " " . $lastName;
});

# Named routes
Route::get('/test', function () {
    return "This is a test";
})->name('test');

#Grouped routes
Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::prefix("portfolio")->group(function () {
    Route::get('/company', function () {
        return view('company');
    });

    Route::get('/organization', function () {
        return view('organization');
    });
});