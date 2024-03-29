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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['administrator']], function ()
{
    Route::get('admin/', function ()
    {
        return view('admin.index');
    });

    Route::resource('admin/category', 'admin\CategoryController');

    Route::resource('admin/books', 'admin\BookController');

    Route::resource('admin/rental', 'admin\RentalController');
});

Route::group(['middleware' => ['web']], function ()
{
    Route::get('/', 'guest\BerandaController@index');
    Route::get('/allbook', 'guest\AllController@index');
});
