<?php

use App\task;
use GuzzleHttp\Middleware;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', 'Admin\DashboardController@index');
    Route::resource('/productcategories', 'Admin\ProductCategoriesController');
    Route::resource('/addproduct', 'Admin\AddProductController');
    Route::resource('/task', 'Admin\TaskController');
    Route::resource('/purchaselog', 'Admin\PurchaseLogController');
    Route::resource('/loanlog', 'Admin\LoanLogController');
    Route::resource('/returnlog', 'Admin\ReturnLogController');
});
