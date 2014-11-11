<?php

/*
|--------------------------------------------------------------------------
| Application & Route Filters
| 应用程序 & 路由 过滤器
|--------------------------------------------------------------------------
|
| Below you will find the "before" and "after" events for the application
| 下面你将会找到应用程序的 "before" 和 "after" 事件，
| which may be used to do any work before or after a request into your
| 它可用于执行任何工作，在请求到达应用程序之前或之后。
| application. Here you may also register your custom route filters.
| 这里你也可以注册自定义的路由过滤器。
|
*/

App::before(function($request)
{
	//
});


App::after(function($request, $response)
{
	//
});

/**
 * 应用程序事件执行顺序如下：
 *     1.执行应用程序事件          App::before($request)
 *     2.执行前置操作                 Route::filter($route, $request)
 *     3.执行了之前注册进路由的回调函数，并获取响应实例
 *     4.执行后置操作                 Route::filter($route, $request, $response)
 *     5.执行应用程序事件          App::after($request, $response)
 *     6.发送 3 中获取的响应实例
 *     7.执行应用程序事件          App::finish($request, $response)
 *     8.执行应用程序事件          App::shutdown($application)
 */

// App::finish(function($request, $response)
// {
        
// });

// App::shutdown(function($application)
// {
        
// });

/*
|--------------------------------------------------------------------------
| Authentication Filters
| 验证过滤器
|--------------------------------------------------------------------------
|
| The following filters are used to verify that the user of the current
| 下面的过滤器是用于验证当前会话的用户，
| session is logged into this application. The "basic" filter easily
| 是否已经登录到应用程序。"basic" 过滤器
| integrates HTTP Basic authentication for quick, simple checking.
| 轻松集成了 HTTP 基础身份验证，来进行快速简单的检查。
|
*/

Route::filter('auth', function()
{
	if (Auth::guest()) return Redirect::guest('login');
});


Route::filter('auth.basic', function()
{
	return Auth::basic();
});

/*
|--------------------------------------------------------------------------
| Guest Filter
| 游客过滤器
|--------------------------------------------------------------------------
|
| The "guest" filter is the counterpart of the authentication filters as
| "guest" 过滤器与上面的验证过滤器对应，
| it simply checks that the current user is not logged in. A redirect
| 它只是简单的检查当前用户是未登录的。
| response will be issued if they are, which you may freely change.
| 如果他已经登录，那么一个重定向响应将会被发出，你可以自由的修改。
|
*/

Route::filter('guest', function()
{
	if (Auth::check()) return Redirect::to('/');
});

/*
|--------------------------------------------------------------------------
| CSRF Protection Filter
| CSRF保护 过滤器
|--------------------------------------------------------------------------
|
| The CSRF filter is responsible for protecting your application against
| 该 CSRF 过滤器是负责保护您的应用程序，
| cross-site request forgery attacks. If this special token in a user
| 针对跨站点请求伪造攻击。如果这个用户会话中的特殊令牌
| session does not match the one given in this request, we'll bail.
| 在这个请求中无法匹配一个给定的值，我们将给予保护。
|
*/

Route::filter('csrf', function()
{
	if (Session::token() !== Input::get('_token'))
	{
		throw new Illuminate\Session\TokenMismatchException;
	}
});

/*
|--------------------------------------------------------------------------
| 自定义 [前置] 过滤器
|--------------------------------------------------------------------------
|
*/

// Route::filter('beforeFilter', function($route, $request)
// {
        
// });

/*
|--------------------------------------------------------------------------
| 自定义 [后置] 过滤器
|--------------------------------------------------------------------------
|
*/

// Route::filter('afterFilter', function($route, $request, $response)
// {
        
// });
