<?php

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
/*-----------------------------------------
Home page Routes
--------------------------------------------*/
Auth::routes();
Route::get('/home', 'HomeController@index');

/*-----------------------------------------
Category Routes
--------------------------------------------*/
Route::get('/category/save','CategoryController@index');
Route::post('/category/save_category', 'CategoryController@save_category') ;
Route::get('/category','CategoryController@category') ;
Route::get('/category/allcategory', 'CategoryController@view_category') ;
Route::get('/category/delete_category/{id}', 'CategoryController@destroy') ;
Route::get('/category/edit_category/{id}','CategoryController@edit');
Route::post('/category/update/{id}','CategoryController@update');


/*-----------------------------------------
Blog Routes
--------------------------------------------*/

Route::get('/blog/save','BlogController@index');
Route::post('/blog/save_blog', 'BlogController@save_blog') ;
Route::get('/blog/delete_blog/{id}', 'BlogController@destroy') ;
Route::get('/blog/edit_blog/{id}','BlogController@edit');
Route::get('/blog/allblog', 'BlogController@view_blog') ;
Route::post('/blog/update/{id}','BlogController@update');


/*-----------------------------------------
Blog show in Frontpage in FrontController
--------------------------------------------*/
Route::get('/pet_club','BlogController@manage');
Route::get('/index', 'FrontController@index');
Route::get('/about', 'FrontController@about');
Route::get('/abouts', 'FrontController@fabout');
Route::get('/blog', 'FrontController@blog');
Route::get('/contact', 'FrontController@contact');
Route::get('/contacts', 'FrontController@fcontact');
Route::get('/', 'FrontController@front');

/*-----------------------------------------
Dashboard FrontController
--------------------------------------------*/
Route::get('/dashboard', 'FrontController@dashboard');
/*-----------------------------------------
load more  in Frontpage in FrontController
--------------------------------------------*/
Route::get('/more/{id}', 'PostController@more');
Route::get('/post/{id}', 'PostController@post');
