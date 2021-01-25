<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Article\ArticleController;

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

Route::get('article', [ArticleController::class, 'index']);
Route::get('article/{id}', [ArticleController::class, 'show']);
Route::post('article', [ArticleController::class, 'store']);
Route::put('article/{id}', [ArticleController::class, 'update']);
