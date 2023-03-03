<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TelegraphController;

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
Route::resource('telegraph', TelegraphController::class);

Route::get('/', [\App\Http\Controllers\TextController::class, 'read']);
Route::get('/create', function(){
    return view('create_text');
})->name('create_text');
Route::get('/{telegraphtext}/edit', [\App\Http\Controllers\TextController::class, 'edit'])->name('edit_text');

Route::post('/store', [\App\Http\Controllers\TextController::class, 'create'])->name('store');
Route::patch('/{telegraphtext}', [\App\Http\Controllers\TextController::class, 'update'])->name('update');
Route::delete('/{id}', [\App\Http\Controllers\TextController::class, 'delete'])->name('delete');
