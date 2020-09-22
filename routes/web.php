<?php

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

Route::get('/home', 'HomeController@index');
Route::get('/ecommerce-dashboard', 'HomeController@ecommerce');
Route::get('/order', 'OrderController@index');
Route::get('/order-detail', 'OrderController@orders');
Route::get('/product-list', 'ProductController@index');
Route::get('/product-edit', 'ProductController@productEdit');
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
Route::get('/all-page','PagesController@index');
Route::POST('/all-page-store','PagesController@store');
Route::Get('/add-page','PagesController@addpage');
Route::get('/edit-page/{id}','PagesController@edit');
Route::PUT('/update-page/{id}','PagesController@update');
Route::get('/page_trash/{id}','PagesController@destroy');
Route::get('/all-post','PostController@index');
Route::get('/add-post','PostController@addpost');
Route::get('/edit-post','PostController@editpost');



