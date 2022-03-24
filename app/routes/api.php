<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\GenericStatusController;
use App\Http\Controllers\Admin\AccessController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\UnitController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\CurrencyController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\Fabric_typeController;
use App\Http\Controllers\Admin\Fabric_type_detailsController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\GroupController;
use App\Http\Middleware\AdminGuard;
use App\Models\Fabric_type;

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
        'middleware' => 'admin',
        'namespace'  => 'App\Http\Controllers\Admin',
        'prefix'     => 'auth',
    ],
    function () {
        Route::post('/admin/login', 'AdminController@login');
        Route::post('/admin/register', 'AdminController@register');
        Route::post('/admin/logout', 'AdminController@logout');
        Route::get('/admin/profile', 'AdminController@profile');
        Route::post('/admin/refresh', 'AdminController@refresh');
    }
);
// Route::namespace('App\Http\Controllers\Admin')->middleware( ['api'])->group(function () {
//     Route::prefix('auth')->group(function () {
//         Route::post('/admin/login', 'AdminController@login');
//         Route::post('/admin/register', 'AdminController@register');
//         Route::post('/admin/logout', 'AdminController@logout');
//         Route::get('/admin/profile', 'AdminController@profile');
//         Route::post('/admin/refresh', 'AdminController@refresh');
//     });
// });


// Admin part ///
Route::resource('/admin/generic_status', GenericStatusController::class);
Route::resource('/admin/categories', CategoryController::class);
Route::resource('/admin/subcategories', SubCategoryController::class);
Route::resource('/admin/countries', CountryController::class);
Route::resource('/admin/brands', BrandController::class);
Route::resource('/admin/currencies', CurrencyController::class);
Route::resource('/admin/units', UnitController::class);
Route::resource('/admin/products', ProductController::class);
Route::resource('/admin/groups', GroupController::class);
Route::resource('/admin/groupAccess', AccessController::class);
Route::resource('/admin/colors', ColorController::class);
Route::resource('/admin/coupons', CouponController::class);
Route::resource('/admin/fabric_types', Fabric_typeController::class);
Route::resource('/admin/fabric_types_details', Fabric_type_detailsController::class);
Route::resource('/admin/orders', OrderController::class);

//Merchant
Route::group(
    [
        'middleware' => 'merchant',
        'namespace'  => 'App\Http\Controllers\Admin',
        'prefix'     => 'auth',
    ],
    function () {
        Route::post('/merchant/login', 'MerchantController@login');
        Route::post('/merchant/register', 'MerchantController@register');
        Route::post('/merchant/logout', 'MerchantController@logout');
        Route::get('/merchant/profile', 'MerchantController@profile');
        Route::post('/merchant/refresh', 'MerchantController@refresh');
    }
);

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
