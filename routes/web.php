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

//登录
Route::get('/login','Admin\CmsController@Login');
Route::post('create','Admin\CmsController@LoginDo');
//cms的管理员增删该查
Route::prefix('admin')->group(function () {
    Route::get('/','Admin\AdminController@index');  //列表展示
    Route::get('create','Admin\AdminController@create'); //添加视图
    Route::post('store','Admin\AdminController@store');  //执行添加
    Route::get('edit/{id}','Admin\AdminController@edit');   //编辑视图
    Route::post('update/{id}','Admin\AdminController@update');   //编辑方法
    Route::get('show/{id}','Admin\AdminController@show');   //访问量方法
    Route::get('destroy/{id}','Admin\AdminController@destroy');  //删除方法
});

//cms的分类增删该查
Route::prefix('category')->group(function () {
    Route::get('/','Admin\CategoryController@index');  //列表展示
    Route::get('create','Admin\CategoryController@create'); //添加视图
    Route::post('store','Admin\CategoryController@store');  //执行添加
    Route::get('edit/{id}','Admin\CategoryController@edit');   //编辑视图
    Route::post('update/{id}','Admin\CategoryController@update');   // 编辑方法
    Route::get('destroy/{id}','Admin\CategoryController@destroy');  //删除方法
});

//cms的新闻增删该查
Route::prefix('news')->group(function () {
    Route::get('/','Admin\NewsController@index');  //列表展示
    Route::get('create','Admin\NewsController@create'); //添加视图
    Route::post('store','Admin\NewsController@store');  //执行添加
    Route::get('edit/{id}','Admin\NewsController@edit');   //编辑视图
    Route::post('update/{id}','Admin\NewsController@update');   //编辑方法
    Route::get('destroy/{id}','Admin\NewsController@destroy');  //删除方法
});
//友情链接增删改查
Route::prefix('news')->group(function () {
    Route::get('/','Admin\NewsController@index');  //列表展示
    Route::get('create','Admin\NewsController@create'); //添加视图
    Route::post('store','Admin\NewsController@store');  //执行添加
    Route::get('edit/{id}','Admin\NewsController@edit');   //编辑视图
    Route::post('update/{id}','Admin\NewsController@update');   //编辑方法
    Route::get('destroy/{id}','Admin\NewsController@destroy');  //删除方法
});
Route::get('/','Admin\IndexController@index');
