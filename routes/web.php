<?php

use App\Http\Controllers\NewaccountsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('home', [App\Http\Controllers\AppController::class, 'index']);
Route::get('ajouter', [App\Http\Controllers\AppController::class, 'index']);
Route::get('enregistrer', [App\Http\Controllers\AppController::class, 'index']);
//getUser
Route::get('getuser',[UserController::class,'getUser']);

Route::post('addNewComptes',[App\Http\Controllers\NewaccountsController::class,'addNewComptes']);

