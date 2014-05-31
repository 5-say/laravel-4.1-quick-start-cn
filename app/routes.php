<?php

/*
|--------------------------------------------------------------------------
| Application Routes
| 应用程序路由
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| 在这里你可以为应用程序注册所有的路由。
| It's a breeze. Simply tell Laravel the URIs it should respond to
| 这非常的容易。简单的告诉 Laravel 这些 URI 应该响应，
| and give it the Closure to execute when that URI is requested.
| 并且给它一个闭包，当那个URI发起请求后执行它。
|
*/

Route::get('/', function()
{
	return View::make('hello');
});
