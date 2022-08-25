<?php

use App\Http\Controllers\ArrayController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ConditionController;
use App\Http\Controllers\ItemController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('item', ItemController::class);
Route::resource('book', BookController::class);

Route::get('/conditions/first', [ConditionController::class, 'first']);
Route::get('/conditions/second', [ConditionController::class, 'second']);
Route::get('/conditions/third', [ConditionController::class, 'third']);
Route::get('/conditions/fourth', [ConditionController::class, 'fourth']);
Route::get('/conditions/fifth', [ConditionController::class, 'fifth']);

Route::get('/array/first', [ArrayController::class, 'first']);
Route::get('/array/second', [ArrayController::class, 'second']);
Route::get('/array/third', [ArrayController::class, 'third']);
Route::get('/array/fourth', [ArrayController::class, 'fourth']);
