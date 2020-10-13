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
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'Admin\HomeController@index')->name('home');
Route::get('/ecommerce', 'Admin\PagesController@ecommerce');
Route::get('/store', 'Admin\PagesController@mystore');
Route::get('/histroy', 'Admin\PagesController@histroy');
Route::get('/customer-detail', 'Admin\PagesController@customer');
Route::get('/edit-customer', 'Admin\PagesController@editcustormer');
Route::get('/notification', 'Admin\PagesController@notification');

Route::get('/order', 'OrderController@index');
Route::get('/order-detail', 'OrderController@orders');
//Route::get('/product-list', 'ProductController@index');
//Route::get('/product-add', 'ProductController@productAdd');
//Route::get('/product-editStore', 'ProductController@store');
Route::resource('/product', 'Admin\ProductController');
//Route::Post('/store','Admin\ProductController@store');
//Route::Put('/update','Admin\ProductController@update');
//Route::resource('/create', 'ProductController');
Route::get('/category-list', 'CategoryController@index');
Route::get('/category-edit', 'CategoryController@categoryadd');
Route::get('/subcategory-list', 'CategoryController@subcategory');
Route::get('/subcategory-edit', 'CategoryController@subcategoryadd');
Route::get('/all-user','UsersController@index');
Route::get('/add-new','UsersController@addNew');
Route::post('/add-new', 'UsersController@store');

//Route::post('/add-new/create', 'UsersController@create');
Route::get('/profile','UsersController@userProfile');
Route::get('/tests','UsersController@userProfile');
//    page-controller
Route::resource('page','Admin\PagesController');
//    post-controller
Route::resource('post','PostController');

Route::get('public','Frontend\ViewController@index');
Route::get('product-show','Frontend\ViewController@product');
Route::get('single-product','Frontend\ViewController@single');
Route::get('checkout','Frontend\ViewController@checkout');
Route::get('cart','Frontend\ViewController@cart');
