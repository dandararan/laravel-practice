<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/home', function () {
    return view('home');
});

//POST route example
Route::post("/formsubmitted", function (Request $request) {

    $request->validate([
        'fullname' => 'required|min:1|max:30',
        'email' => 'required|email|min:1|max:30'
    ]);

    $fullname = $request->input("fullname");
    $email = $request->input("email");

    return "Your full name is " . $fullname . " and your email is " . $email;
})->name("formsubmitted");