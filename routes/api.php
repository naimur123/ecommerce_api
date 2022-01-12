<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController\CategoryController;
use App\Http\Controllers\AdminController\BrandController;
use App\Http\Controllers\AdminController\ProductController;

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
Route::resource('/admin/categories', CategoryController::class);
Route::resource('/admin/brands', BrandController::class);
Route::resource('/admin/products', ProductController::class);
/*Route::get('/categories', [CategoryController::class, 'index']);
Route::post('/categories/post', [CategoryController::class, 'store']);*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
