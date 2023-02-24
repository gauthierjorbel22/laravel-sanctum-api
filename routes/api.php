<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// group of resources -- instead of creating separate route req
Route::resource('products', ProductController::class);
Route::get('/products/search/{name}', [ProductController::class, 'search']);  //custom made search controller
// Get all products
// Route::get('/products', [ProductController::class, 'index']);

// // Insert products
// Route::post('/products', [ProductController::class, 'store']);

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
