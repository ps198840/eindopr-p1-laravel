<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/cars/', [CarController::class, 'index'])->Name('index');
Route::get('/cars/create', [CarController::class, 'create'])->Name('songs.create');
Route::post('/cars/', [CarController::class, 'store'])->Name('cars.store');
Route::get('/cars/{autonummer}', [CarController::class, 'show'])->Name('show');
Route::get('/cars/{autonummer}/edit', [CarController::class, 'edit'])->Name('edit');
