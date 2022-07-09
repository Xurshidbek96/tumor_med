<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get('/route_cache', [PagesController::class, 'clearRoute']);


Route::get('/', function () {
    return view('admin.layouts.home');
});
Route::resource('humans', HumanController::class);


Route::group(['middleware' => 'auth'], function () {

});
