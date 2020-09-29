<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Console\Input\Input;


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

// Route::get('/', function () {
//     $user = new App\Models\form();
//     $user->first_name = "Sagi";
//     $user->last_name = "Ruthvik";
//     $user->age = 19;
//      $user->save();
// });

Route::any('/', 'App\Http\Controllers\TestController@index');
Route::any('/create', 'App\Http\Controllers\TestController@create');
Route::any('/store', 'App\Http\Controllers\TestController@store');
Route::any('/show_record', function(){
    return view("show");
});
Route::any('/show','App\Http\Controllers\TestController@show');
Route::any('/edit/{id}','App\Http\Controllers\TestController@edit');
Route::any('/update/{id}','App\Http\Controllers\TestController@update');
Route::any('/delete/{id}', 'App\Http\Controllers\TestController@destroy');
// Route::any('/create', 'App\Http\Controllers\TestController@create')

// Route::any('/submit','App\Http\Controllers\test@save');
// Route::any('/index', 'App\Http\Controllers\TestController@index');
// Route::any('/test_route','App\Http\Controllers\test@show_view');

// Route::resource('test_route', TestController::class);
