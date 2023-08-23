<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\HeadofficeController;
use App\Http\Controllers\RegioanlofficeController;
use App\Http\Controllers\ZonalofficeController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\ClaimController;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ModelController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [LoginController::class, 'index']);
Route::post('/loginform', [LoginController::class, 'loginform']);
Route::get('/register', [LoginController::class, 'register']);
Route::post('/registerform', [LoginController::class, 'registerform']);

Route::get('/dashboard', [IndexController::class, 'index']);
Route::get('/reports', [IndexController::class, 'reports']);

Route::group(['middleware' => 'auth'], function () {

    Route::group(['prefix' => '/staff'], function () {

        Route::group(['prefix' => '/admin'], function () {
            Route::get('', [AdminController::class, 'index']);
            Route::post('/store', [AdminController::class, 'store']);
            Route::post('/edit', [AdminController::class, 'edit']);
            Route::post('/update', [AdminController::class, 'update']);
        });

        Route::group(['prefix' => '/company'], function () {
            Route::get('', [CompanyController::class, 'index']);
            Route::post('/store', [CompanyController::class, 'store']);
            Route::post('/edit', [CompanyController::class, 'edit']);
            Route::post('/update', [CompanyController::class, 'update']);
        });
        Route::group(['prefix' => '/headoffice'], function () {
            Route::get('', [HeadofficeController::class, 'index']);
            Route::post('/store', [HeadofficeController::class, 'store']);
            Route::post('/edit', [HeadofficeController::class, 'edit']);
            Route::post('/update', [HeadofficeController::class, 'update']);
        });
        Route::group(['prefix' => '/regionaloffice'], function () {
            Route::get('', [RegioanlofficeController::class, 'index']);
            Route::post('/store', [RegioanlofficeController::class, 'store']);
            Route::post('/edit', [RegioanlofficeController::class, 'edit']);
            Route::post('/update', [RegioanlofficeController::class, 'update']);
        });
        Route::group(['prefix' => '/zonaloffice'], function () {
            Route::get('', [ZonalofficeController::class, 'index']);
            Route::post('/store', [ZonalofficeController::class, 'store']);
            Route::post('/edit', [ZonalofficeController::class, 'edit']);
            Route::post('/update', [ZonalofficeController::class, 'update']);
        });
        Route::group(['prefix' => '/store'], function () {
            Route::get('', [StoreController::class, 'index']);
            Route::post('/store', [StoreController::class, 'store']);
            Route::post('/edit', [StoreController::class, 'edit']);
            Route::post('/update', [StoreController::class, 'update']);
        });
        Route::group(['prefix' => '/claim'], function () {
            Route::get('', [ClaimController::class, 'index']);
            Route::post('/store', [ClaimController::class, 'store']);
            Route::post('/edit', [ClaimController::class, 'edit']);
            Route::post('/update', [ClaimController::class, 'update']);
        });

    });

    Route::group(['prefix' => '/master'], function () {
        Route::group(['prefix' => '/brands'], function () {
            Route::get('', [BrandsController::class, 'index']);
            Route::post('/store', [BrandsController::class, 'store']);
            Route::post('/edit', [BrandsController::class, 'edit']);
            Route::post('/update', [BrandsController::class, 'update']);
        });
        Route::group(['prefix' => '/category'], function () {
            Route::get('', [CategoryController::class, 'index']);
            Route::post('/store', [CategoryController::class, 'store']);
            Route::post('/edit', [CategoryController::class, 'edit']);
            Route::post('/update', [CategoryController::class, 'update']);
        });
        Route::group(['prefix' => '/model'], function () {
            Route::get('', [ModelController::class, 'index']);
            Route::post('/store', [ModelController::class, 'store']);
            Route::post('/edit', [ModelController::class, 'edit']);
            Route::post('/update', [ModelController::class, 'update']);
        });
        
    });

    

    

    // Route::post('/addadmin', [IndexController::class, 'addadmin']);
    // Route::get('exportadmin', [IndexController::class, 'exportadmin']);

    // Route::get('/customer', [IndexController::class, 'customer']);
    // Route::post('/addcustomer', [IndexController::class, 'addcustomer']);

    // Route::get('/headoffice', [IndexController::class, 'headoffice']);
    // Route::post('/addheadoffice', [IndexController::class, 'addheadoffice']);

    // Route::get('/regionaloffice', [IndexController::class, 'regionaloffice']);
    // Route::post('/addregionaloffice', [IndexController::class, 'addregionaloffice']);

    // Route::get('/zonaloffice', [IndexController::class, 'zonaloffice']);
    // Route::post('/addzonaloffice', [IndexController::class, 'addzonaloffice']);

    // Route::get('/store', [IndexController::class, 'store']);
    // Route::post('/addstore', [IndexController::class, 'addstore']);

    // Route::get('/claim', [IndexController::class, 'claim']);
    // Route::post('/addclaim', [IndexController::class, 'addclaim']);
});

Route::get('/logout', function () {
    Cookie::queue('login_email', '', time() + 60 * 60 * 24 * 100);
    Cookie::queue('login_pass', '', time() + 60 * 60 * 24 * 100);
    session()->flush();
    return redirect('/');
});

