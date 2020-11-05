<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\RestaurantController;

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

//Route::get('/index','RestaurantController@index');
//Route::get('articles','ArticleController@articles');
//Route::get('index', 'App\Http\Controllers\RestaurantController@index');
Route::get('index', [RestaurantController::class, 'index']);
Route::get('create', [RestaurantController::class, 'create']);
Route::post('listing', [RestaurantController::class, 'store']);
Route::get('/edit/{id}', [RestaurantController::class, 'edit']);
Route::patch('/edit/{id}', [RestaurantController::class, 'update']);