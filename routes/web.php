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


Route::get('/about','App\Http\Controllers\AboutController@About');
Route::get('all-contracts','App\Http\Controllers\AboutController@AllContracts')->name('all.contracts');
Route::get('/newdata','App\Http\Controllers\AboutController@InsertData');
Route::post('/DataInsert','App\Http\Controllers\AboutController@DataAdded');
Route::get('/delete-contracts/{id}','App\Http\Controllers\AboutController@Delete');
Route::get('/edit-contracts/{id}','App\Http\Controllers\AboutController@Edit');
Route::post('/update-contract/{id}','App\Http\Controllers\AboutController@Update');
Route::get('/view-contracts/{id}','App\Http\Controllers\AboutController@View');


