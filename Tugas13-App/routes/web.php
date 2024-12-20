<?php

use App\Http\Controllers\CastController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/table', function () {
    return view('table');
})->name('table');
Route::get('/data-table', function () {
    return view('data_table');
})->name('data_table');

//router Crud  Cast
Route::get('/cast', [CastController::class, 'index'])->name('cast');
Route::get('/cast/create', [CastController::class, 'create'])->name('cast.create');
route::post('/cast', [CastController::class, 'store'])->name('cast.store');
route::get('/cast/{cast_id}', [CastController::class, 'show'])->name('cast.show');
Route::get('/cast/{cast_id}/edit', [CastController::class, 'edit'])->name('cast.edit');
Route::put('/cast/{cast_id}', [CastController::class, 'update'])->name('cast.update');
Route::delete('/cast/{cast_id}', [CastController::class, 'destroy'])->name('cast.destroy');