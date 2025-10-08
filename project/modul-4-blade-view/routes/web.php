<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DasarBladeController;
use App\Http\Controllers\LogicController;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/dasar', [DasarBladeController::class, 'showData']);
Route::get('/logic', [LogicController::class, 'show']);
Route::get('/admin', [PageController::class, 'Admin']);
Route::get('/user', [PageController::class, 'user']);
