<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

 
 
Route::get('clients', 'ClientController@index');
Route::group(['prefix' => 'client'], function () {
    Route::post('add', 'ClientController@store');
    Route::get('edit/{id}', 'ClientController@edit');
    Route::post('update/{id}', 'ClientController@update');
    Route::delete('delete/{id}', 'ClientController@delete');
});


Route::get('transactions', 'TransactionController@index');
Route::group(['prefix' => 'transaction'], function () {
    Route::post('add', 'TransactionController@store');
    Route::get('edit/{id}', 'TransactionController@edit');
    Route::post('update/{id}', 'TransactionController@update');
    Route::delete('delete/{id}', 'TransactionController@delete');
});

