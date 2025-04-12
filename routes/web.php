<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ListingController;

// Route::get('/', function () {
//     //return view(view: 'app');
//     return inertia('Index/Index');
// });

Route::get('/',[IndexController::class,'index']);
Route::get('/show',[IndexController::class,'show']);
Route::get('/test',[IndexController::class,'test']);


Route::resource('listing', ListingController::class)->only('index', 'show');
