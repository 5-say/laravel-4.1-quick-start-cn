<?php

/*
|--------------------------------------------------------------------------
| Register The Laravel Class Loader
| 注册 Laravel 类加载器
|--------------------------------------------------------------------------
|
| In addition to using Composer, you may use the Laravel class loader to
| 除了使用 Composer，你可以使用 Laravel 类加载器
| load your controllers and models. This is useful for keeping all of
| 来载入你的控制器和模型。这是非常有用的，它将保持
| your classes in the "global" namespace without Composer updating.
| 你所有的类在“全局”命名空间，在没有 Composer 更新时。
|
*/

ClassLoader::addDirectories(array(

	app_path().'/commands',
	app_path().'/controllers',
	app_path().'/models',
	app_path().'/database/seeds',

));

/*
|--------------------------------------------------------------------------
| Application Error Logger
| 应用程序错误日志
|--------------------------------------------------------------------------
|
| Here we will configure the error logger setup for the application which
| 这里我们将为应用程序配置错误日志，
| is built on top of the wonderful Monolog library. By default we will
| 它是建立在美妙的 Monolog 库的基础上的。默认情况下我们将
| build a basic log file setup which creates a single file for logs.
| 建立一个基础日志文件设置，这将创建一个单文件日志。
|
*/

Log::useFiles(storage_path().'/logs/laravel.log');

/*
|--------------------------------------------------------------------------
| Application Error Handler
| 应用程序的错误处理程序
|--------------------------------------------------------------------------
|
| Here you may handle any errors that occur in your application, including
| 这里你可以处理发生在应用程序中的任何错误，
| logging them or displaying custom views for specific errors. You may
| 包括记录他们或显示特定错误的自定义视图。
| even register several error handlers to handle different types of
| 你甚至可以注册不同的错误处理程序来处理不同类型的异常。
| exceptions. If nothing is returned, the default error view is
| 如果什么都没有返回，默认的错误视图将会显示，
| shown, which includes a detailed stack trace during debug.
| 其中包括在 debug 过程中详细的堆栈跟踪。
|
*/

App::error(function(Exception $exception, $code)
{
	Log::error($exception);
});

/*
|--------------------------------------------------------------------------
| Maintenance Mode Handler
| 维护模式处理程序
|--------------------------------------------------------------------------
|
| The "down" Artisan command gives you the ability to put an application
| Artisan 的 "down" 命令给予你将一个应用程序置于维护模式的能力。
| into maintenance mode. Here, you will define what is displayed back
| 这里，你将定义显示什么返回给用户，
| to the user if maintenance mode is in effect for the application.
| 如果应用程序的维护模式生效。
|
| 开启维护模式的方法：（以下任意一种即可）
|     1、php artisan down 命令
|     2、手动在 app\storage\meta 文件夹下新建 down 文件（注意：没有后缀名）
| 关闭维护模式的方法：（以下任意一种即可）
|     1、php artisan up 命令
|     2、手动删除在 app\storage\meta 文件夹下的 down 文件
|
*/

App::down(function()
{
	return Response::make("Be right back!", 503);
});

/*
|--------------------------------------------------------------------------
| Require The Filters File
| 载入过滤器文件
|--------------------------------------------------------------------------
|
| Next we will load the filters file for the application. This gives us
| 接下来我们将载入应用程序的过滤器文件。
| a nice separate location to store our route and application filter
| 这给了我们一个不错的独立位置，来存储我们路由和应用程序的过滤器定义，
| definitions instead of putting them all in the main routes file.
| 而不是将它们都放置在主路由文件中。
|
*/

require app_path().'/filters.php';
