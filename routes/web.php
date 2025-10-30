<?php

 use Illuminate\Support\Facades\Route;
 use app\Models\Users;
 use app\Models\Comment;
 use App\Http\Controllers\UserController;

 // Route::get('/', function () {
 //     return view('welcome');
 // });
 // Route::get('/greeting', function () {
 //     return 'Hello World';
 // });

 //practice1

 // Route::get('/users/create', function () {
 //     return view(view:"create");
 // });
 // Route::post('/users', function () {
 //     dd("fff");
 // })->name("users.create");

 //practice1
 // Route::resource('users', \App\Http\Controllers\UserController::class);
//  Route::get('/', function () {
//     return 'Laravel is working!';
// });
 

Route::get('/', function () {
    return redirect('/users');
});


Route::resource('users', UserController::class);
