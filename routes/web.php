<?php

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


Route::get('/home', function () {
    return view('home');
});


/* Route::prefix('admin')->group(function () {
    Route::get('dog_all', function () {
        return view('dog_all');
    })->name('dog_all');
}); */

/*เรียกใช้ all_function และ  ฟังชั้น index ใน  class DogController*/





Route::get('dog_all','DogController@index')->middleware(['all_use']) ->name('dog_all');

Route::get('dog_all/{id}','DogController@show')->name('showtakeup');





/*Route::get('dog_all','DogController@show_all') ->name('dog_show');*/
/*save dog*/
Route::post('dog_all','DogController@store') ->name('dog_add');






Auth::routes();

Route::get('/home', 'HomeController@index')->middleware(['all_use']) ->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
