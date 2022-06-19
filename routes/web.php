<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('auth.login');
});
//pc 8 / min : 300
Auth::routes();

Route::get('/logout', 'HomeController@logout');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('invoices', 'InvoicesController');
Route::resource('sections', 'SectionsController');
Route::resource('products', 'ProductsController');

Route::get('/{page}', 'AdminController@index');
