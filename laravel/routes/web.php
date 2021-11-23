<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'admin\AdminController@index')->name('admin');
    Route::resources([
        'category' => 'admin\CategoryController',
        'custumer' => 'admin\CustumerController',
        'product' => 'admin\ProductController',
        'user' => 'admin\UserController'
    ]);
});
Route::group(['prefix' => 'custumer'], function () {
    Route::get('/', 'custumer\CustumerController@index')->name('custumer');
    Route::resources([
        'custumer_ct' => 'custumer\CustumerController',
        'product_ct' => 'custumer\ProductController',
        'individual_ct' => 'custumer\IndividualController',

    ]);
});
