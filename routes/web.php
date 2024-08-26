<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[homeController::class, 'homePageView']);
Route::post('/data/create',[homeController::class, 'homePageCreate']);
Route::get('/data/edit/view/{id}',[homeController::class, 'homePageEdit']);
Route::post('/data/edit/update/{id}',[homeController::class, 'homePageUpdate']);
Route::get('/data/delete/{id}',[homeController::class, 'homePageDelete']);