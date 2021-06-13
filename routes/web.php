<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyCRUDController;
use App\Http\Controllers\PController;
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
    return view('ALIVE');
});

Route::get('/kahitano', function () {
    return view('Home');
    
});  
Route::get('/Homepage', function () {
    return view('ALIVE-HOME');
});
Route::get('/Home', function () {
    return view('welcome');
});
Route::get('/new', function () {
    return view('live');
});
Route::resource('companies', CompanyCRUDController::class);
Route::resource('profile', PController::class);
