<?php

 use Illuminate\Support\Facades\Route;
 use app\Models\Users;
 use app\Models\Comment;
 use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
 use App\Http\Controllers\ReportController;

 // Route::get('/', function () {
 //     return view('welcome');
 // });
 // Route::get('/greeting', function () {
 //     return 'Hello World';
 // });


//  Route::resource('users', UserController::class);
//  Route::resource('posts', PostController::class);
//  Route::resource('comments', CommentController::class);



Route::get('/reports/high-spenders', [ReportController::class, 'highSpenders']);


