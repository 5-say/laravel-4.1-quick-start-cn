<?php

/*
|--------------------------------------------------------------------------
| Application & Route Filters
|--------------------------------------------------------------------------
|
| Below you will find the "before" and "after" events for the application
| which may be used to do any work before or after a request into your
| application. Here you may also register your custom route filters.
|
*/
/**
 * 注册应用程序事件，执行顺序如下：
 *     1.执行应用程序事件 App::before($request)
 *     2.执行 Route::filter($route, $request) 前置操作
 *     3.执行了之前注册进路由的回调函数，并获取响应实例
 *     4.执行 Route::filter($route, $request, $response) 后置操作
 *     5.执行应用程序事件 App::after($request, $response)
 *     6.发送 3 中获取的响应实例
 *     7.执行应用程序事件 App::finish($request, $response)
 *     8.执行应用程序事件 App::shutdown($application)
 */

// App::before(function($request)
// {
    
// });

// App::after(function($request, $response)
// {
    
// });


// App::finish(function($request, $response)
// {
    
// });

// App::shutdown(function($application)
// {
    
// });

/*
|--------------------------------------------------------------------------
| Authentication Filters
|--------------------------------------------------------------------------
|
| The following filters are used to verify that the user of the current
| session is logged into this application. The "basic" filter easily
| integrates HTTP Basic authentication for quick, simple checking.
|
*/
// 身份验证过滤器
Route::filter('auth', function()
{
    if (Auth::guest()) return Redirect::guest('login');
});

// HTTP 基础身份验证过滤器
Route::filter('auth.basic', function()
{
    return Auth::basic();
});

/*
|--------------------------------------------------------------------------
| Guest Filter
|--------------------------------------------------------------------------
|
| The "guest" filter is the counterpart of the authentication filters as
| it simply checks that the current user is not logged in. A redirect
| response will be issued if they are, which you may freely change.
|
*/
// 游客身份过滤器
Route::filter('guest', function()
{
    if (Auth::check()) return Redirect::to('/');
});

/*
|--------------------------------------------------------------------------
| CSRF Protection Filter
|--------------------------------------------------------------------------
|
| The CSRF filter is responsible for protecting your application against
| cross-site request forgery attacks. If this special token in a user
| session does not match the one given in this request, we'll bail.
|
*/
// CSRF保护过滤器，防止跨站点请求伪造攻击
Route::filter('csrf', function()
{
    if (Session::token() != Input::get('_token'))
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