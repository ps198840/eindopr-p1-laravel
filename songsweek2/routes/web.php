<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/songs', function () {
    return view('welcome');
});
Route::get('/songs/{index}', [SongController::class, 'show'])->Name('show');
Route::get('/songs/create', [SongController::class, 'create'])->Name('create');
Route::get('/songs/{index}/edit', [SongController::class, 'edit'])->Name('edit');
