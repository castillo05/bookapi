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

Route::get('book','bookController@getBooks');
Route::post('book','bookController@crearLibro');
Route::put('book/{id}','bookController@editarLibro');
Route::delete('book/{id}','bookController@eliminarLibro');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
