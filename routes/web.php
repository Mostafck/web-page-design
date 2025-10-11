<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/greeting', function () {
//     return 'Hello World';
// });
Route::get('/users/create', function () {
    return view(view:"create");
});
Route::post('/users', function () {
    dd("fff");
})->name("users.create");
