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
Route::get('/ecommerce-dashboard', 'HomeController@ecommerce');
Route::get('/order', 'OrderController@index');
Route::get('/order-detail', 'OrderController@orders');
//Route::get('/product-list', 'ProductController@index');
//Route::get('/product-add', 'ProductController@productAdd');
//Route::get('/product-editStore', 'ProductController@store');
Route::resource('/product', 'ProductController');
Route::Post('/store','ProductController@store');
Route::Put('/update','ProductController@update');
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
Route::resource('post','Admin\PostController');

Route::get('home','Frontend\ViewController@index');
Route::get('product','Frontend\ViewController@product');
Route::get('single-product','Frontend\ViewController@single');
Route::get('checkout','Frontend\ViewController@checkout');
Route::get('cart','Frontend\ViewController@cart');
