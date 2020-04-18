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

// List All todos
Route::get('todos', 'TodoController@index');

// List Single todo
Route::get('todo/{id}', 'TodoController@show');

// Create new Todo
Route::post('todo', 'TodoController@store');

// Update Todo
Route::put('todo/', 'TodoController@store');

// Delete Todo
Route::delete('todo/{id}', 'TodoController@destroy');
