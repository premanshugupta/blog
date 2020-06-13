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

Route::get('/', function () {
    return view('frontend.home');
});
Route::get('/','AboutController@master');
Route::get('home','AboutController@home');
Route::get('blogpost','AboutController@blogpost');
Route::get('about','AboutController@about');
Route::get('bloglist','AboutController@bloglist');

Route::get('admindash','AboutController@admindash');

Route::get('changesidebar','AdminController@sidebar');
Route::post('/save','AdminController@save');
Route::get('home','AboutController@display');

Route::get('/curd/edit/{id}','AdminController@edit');
Route::post('/curd/update','AdminController@update');
Route::get('showsidebar','AdminController@shows');
Route::get('/curd/edit/{id}','AdminController@edit');
Route::post('/curd/update','AdminController@update');
Route::get('/curd/delete/{id}','AdminController@delete');


Route::get('editaboutme','AblogController@form');
Route::post('/save','AblogController@save');
Route::get('showaboutme','AblogController@show');
Route::get('/das/edit/{id}','AblogController@edit');
Route::post('/das/update','AblogController@update');
Route::get('/das/delete/{id}','AblogController@delete');



Route::get('editblogpost','BlogpostController@add');
Route::post('/save','BlogpostController@save');
Route::get('showblogpost','BlogpostController@show');
Route::get('/dar/edits/{id}','BlogpostController@edits');
Route::post('/dar/update','AdminController@update');
Route::get('/dar/delete/{id}','BlogpostController@delete');
