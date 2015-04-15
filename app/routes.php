<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'BlogController@index');

//博客列表
Route::get('blog', 'BlogController@index');

//博客创建路由、
Route::get('blog/create', 'BlogController@create');
Route::post('blog/create', 'BlogController@create');

//博客入库
Route::get ('blog/show','BlogController@show');
Route::post('blog/show', 'BlogController@show');

//博客管理
Route::get("blog/manage",'BlogController@manage');
Route::post("blog/manage",'BlogController@manage');

//博客编辑视图
Route::get("blog/edit/{id}",'BlogController@edit');
Route::post("blog/edit/{id}",'BlogController@edit');

//删除博客
Route::get("blog/destroy/{id}",'BlogController@destroy');
Route::post("blog/destroy/{id}",'BlogController@destroy');

//博客详情
Route::get("blog/detail/{id}",'BlogController@detail');
Route::post("blog/detail/{id}",'BlogController@detail');



//后台登录注册路由
Route::controller('user', 'UserController');
Route::get('admin/logout', array('as' => 'admin.logout', 'uses' => 'App\Controllers\Admin\AuthController@getLogout'));  
Route::get('admin/login', array('as' => 'admin.login', 'uses' => 'App\Controllers\Admin\AuthController@getLogin'));  
Route::post('admin/login', array('as' => 'admin.login.post', 'uses' => 'App\Controllers\Admin\AuthController@postLogin'));



Route::group(array('prefix' => 'admin', 'before' => 'auth.admin'), function()  
{
    Route::any('/', 'App\Controllers\Admin\PagesController@index');
    Route::resource('articles', 'App\Controllers\Admin\ArticlesController');
    Route::resource('pages', 'App\Controllers\Admin\PagesController');
    
    
});

Route::get('ext/captcha', 'ExtController@captcha');