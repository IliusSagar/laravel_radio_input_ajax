<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RadioController;

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

// Route::post('/save-radio-value', 'RadioController@saveValue');

// Route::post('/save-radio-value', [RadioController::class, 'saveValue']);
// Route::post('/radio-option', 'RadioController@handleOption')->name('radio.option');
Route::post('/radio-option', [RadioController::class, 'handleOption'])->name('radio.option');
