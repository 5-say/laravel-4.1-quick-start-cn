<?php

/*
|--------------------------------------------------------------------------
| 批量注册视图别名 -- [非原生，建议添加]
|--------------------------------------------------------------------------
|
| 需要结合 app\config\view.php 中的 aliases 使用
| 
*/
foreach (Config::get('view.aliases') as $aliases => $path)
{
    $aliases AND $path AND View::addNamespace($aliases, $path);
}
unset($aliases, $path);

/*
|--------------------------------------------------------------------------
| Register The Laravel Class Loader
|--------------------------------------------------------------------------
|
| In addition to using Composer, you may use the Laravel class loader to
| load your controllers and models. This is useful for keeping all of
| your classes in the "global" namespace without Composer updating.
|
*/
// 注册 laravel 的类加载目录
ClassLoader::addDirectories(array(

    app_path().'/commands',        //  artisan 命令类
    app_path().'/controllers',     //  控制器类
    app_path().'/models',          //  模型类
    app_path().'/database/seeds',  //  数据填充类
    
    app_path().'/library',         //  非 Composer 第三方类库 -- [非原生，建议添加]

));

/*
|--------------------------------------------------------------------------
| Application Error Logger
|--------------------------------------------------------------------------
|
| Here we will configure the error logger setup for the application which
| is built on top of the wonderful Monolog library. By default we will
| build a basic log file setup which creates a single file for logs.
|
*/
// 注册需要使用的日志文件路径
Log::useFiles(storage_path().'/logs/laravel.log');

/*
|--------------------------------------------------------------------------
| Application Error Handler
|--------------------------------------------------------------------------
|
| Here you may handle any errors that occur in your application, including
| logging them or displaying custom views for specific errors. You may
| even register several error handlers to handle different types of
| exceptions. If nothing is returned, the default error view is
| shown, which includes a detailed stack trace during debug.
|
*/
// 应用程序错误处理程序 HTTP 状态码500
App::error(function(Exception $exception, $code)
{
    Log::error($exception);
    // 非调试模式显示自定义500系统异常页面
    if ( ! Config::get('app.debug') )
    {
        ob_end_clean();  //  放弃之前所有输出内容，防止程序错误时意外的信息泄露
        return Response::view('sys::error', array(), 500);
    }
});

/*
|--------------------------------------------------------------------------
| Maintenance Mode Handler
|--------------------------------------------------------------------------
|
| The "down" Artisan command gives you the ability to put an application
| into maintenance mode. Here, you will define what is displayed back
| to the user if maintenance mode is in effect for the application.
|
*/
// 维护模式处理程序 HTTP 状态码503（网站维护中）
// 开启维护模式的方法：（任意一种即可）
//     1.php artisan down 命令
//     2.手动在 app\storage\meta 文件夹下新建 down 文件（注意：没有后缀名）
// 关闭维护模式的方法：（任意一种即可）
//     1.php artisan up 命令
//     2.手动删除在 app\storage\meta 文件夹下的 down 文件
App::down(function()
{
    // return Response::make("Be right back!", 503);
    return Response::view('sys::down', array(), 503); 
});

/*
|--------------------------------------------------------------------------
| 自定义404错误处理 -- [非原生，建议添加]
|--------------------------------------------------------------------------
|
| 若不作此设置，Debug 模式下系统将默认抛出500异常
|
*/

App::missing(function()
{
    return Response::view('sys::missing', array(), 404);
});

/*
|--------------------------------------------------------------------------
| Require The Filters File
|--------------------------------------------------------------------------
|
| Next we will load the filters file for the application. This gives us
| a nice separate location to store our route and application filter
| definitions instead of putting them all in the main routes file.
|
*/
// 载入过滤器
require app_path().'/filters.php';
