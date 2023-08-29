<?php

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
    return view('index');

});

Route::get('/receitas', [App\Http\Controllers\controllerJulia::class, 'index']) ->name('index');
Route::post('/despesas',[App\Http\Controllers\controllerJulia::class, 'receitas']) ->name('receitas');
Route::post('/resultado',[App\Http\Controllers\controllerJulia::class, 'despesas']) ->name('despesas');


