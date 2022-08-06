<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NumController;

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

Route::get('algorithm', function () {
    return view('numb');
});

Route::any('number', [NumController::class, 'twosums']);
Route::any('num', [NumController::class, 'twosums']);