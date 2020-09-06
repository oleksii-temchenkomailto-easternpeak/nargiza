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

Route::get('/', 'Controller@index');
Route::get('/admin', 'Controller@admin');
Route::post('/admin-ajax', 'Controller@adminAjax');
Route::post('contact-form', 'Controller@contactForm');
