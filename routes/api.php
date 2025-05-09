<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiCategoriaController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/categorias', [ApiCategoriaController::class, 'index']);
Route::post('/categorias', [ApiCategoriaController::class, 'store']);
Route::get('/categorias/{id}', [ApiCategoriaController::class, 'show']);
Route::put('/categorias/{id}', [ApiCategoriaController::class, 'update']);
Route::delete('/categorias/{id}', [ApiCategoriaController::class, 'destroy']);