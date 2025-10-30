<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
Route::get('/admin', [PageController::class, 'Admin']);
Route::get('/user', [PageController::class, 'user']);

use App\Http\Controllers\DasarBladeController;
Route::get('/dasar', [DasarBladeController::class, 'showData']);

use App\Http\Controllers\LogicController;
Route::get('/logic', [LogicController::class, 'show']);
