<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// Here's where you put or import the tables
use App\Models\Item;
use App\Models\User;
use App\Http\Controllers\ItemController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('items', 'ItemController@index');

Route::get('items/{item}', 'ItemController@show');

Route::post('items', 'ItemController@store');

Route::put('items/{item}', 'ItemController@update');

Route::delete('items/{item}', 'ItemController@delete');
       
	//The stuff below was here before I was

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
