<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BankrekeningController;

Route::get('/', [BankrekeningController::class, 'index']);
Route::post('bevroren', [BankrekeningController::class, 'bevroren']);
Route::post('opnemen',  [BankrekeningController::class, 'opnemen']);
Route::post('storten', [BankrekeningController::class, 'storten']);

