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
    return view('welcome');
});

Auth::routes();

// ! E' possibile usare l'auth anche dalle rotte in questo modo, vedi anche in HomeController!
//  * Route::middleware('auth')->get('/home', 'Admin\HomeController@index')->name('home');

// ? è possibile anche unire le rotte in questo modo: 

Route::middleware('auth')
    ->namespace('Admin')
    ->name('admin.')
    ->prefix('admin')
    ->group(function(){
        Route::get('/', 'HomeController@index')->name('home');
    });


