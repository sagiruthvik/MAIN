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

Route::get('/', function () {
    // $user = new App\Models\form();
    // $user->save();
    return view('welcome');
});

Route::any('/submit','App\Http\Controllers\test@save');
Route::get('/test_route','App\Http\Controllers\test@show_route');

Route::resource('test_route', TestController::class);
