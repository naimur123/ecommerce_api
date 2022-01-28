<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\GenericStatusController;
use App\Http\Controllers\Admin\AccessController;
use App\Http\Controllers\Admin\UnitController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\CurrencyController;
use App\Http\Middleware\AdminGuard;


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
//Admin
Route::group(
    [
        'middleware' => 'api',
        'namespace'  => 'App\Http\Controllers\Admin',
        'prefix'     => 'admin',
    ],
    function ($router) {
        Route::post('login', 'AdminController@login');
        Route::post('register', 'AdminController@register');
        Route::post('logout', 'AdminController@logout');
        Route::get('profile', 'AdminController@profile');
        Route::post('refresh', 'AdminController@refresh');
    }
);


// Admin part ///
Route::resource('/admin/generic_status', GenericStatusController::class);
Route::resource('/admin/categories', CategoryController::class);
Route::resource('/admin/subcategories', SubCategoryController::class);
Route::resource('/admin/countries', CountryController::class);
Route::resource('/admin/brands', BrandController::class);
Route::resource('/admin/currencies', CurrencyController::class);
Route::resource('/admin/units', UnitController::class);
Route::resource('/admin/products', ProductController::class);
Route::resource('/admin/groups', AccessController::class);

//UserPart
Route::group(
    [
        'middleware' => 'api',
        'namespace'  => 'App\Http\Controllers',
        'prefix'     => 'auth',
    ],
    function ($router) {
        Route::post('login', 'UserController@login');
        Route::post('register', 'UserController@register');
        Route::post('logout', 'UserController@logout');
        Route::get('profile', 'UserController@profile');
        Route::post('refresh', 'UserController@refresh');
    }
);


/*Route::get('/categories', [CategoryController::class, 'index']);
Route::post('/categories/post', [CategoryController::class, 'store']);*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
