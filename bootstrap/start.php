<?php

/*
|--------------------------------------------------------------------------
| Create The Application
| 创建应用程序
|--------------------------------------------------------------------------
|
| The first thing we will do is create a new Laravel application instance
| 首先，我们会创建一个新的Laravel应用程序实例，
| which serves as the "glue" for all the components of Laravel, and is
| 它作为所有Laravel组件的“粘合剂”，
| the IoC container for the system binding all of the various parts.
| 并且为系统的各个部分绑定了IoC容器。
|
*/

$app = new Illuminate\Foundation\Application;

/*
|--------------------------------------------------------------------------
| Detect The Application Environment
| 检测应用程序环境
|--------------------------------------------------------------------------
|
| Laravel takes a dead simple approach to your application environments
| Laravel采用一个极其简单的途径来确定你的应用程序环境，
| so you can just specify a machine name for the host that matches a
| 因此你可以直接指定一个主机的计算机名，让它匹配一个指定的环境，
| given environment, then we will automatically detect it for you.
| 我们将自动为你检测。
|
*/

$env = $app->detectEnvironment(array(

	'local' => array('your-machine-name'),

));

/*
|--------------------------------------------------------------------------
| Bind Paths
|--------------------------------------------------------------------------
|
| Here we are binding the paths configured in paths.php to the app. You
| should not be changing these here. If you need to change these you
| may do so within the paths.php file and they will be bound here.
|
*/

$app->bindInstallPaths(require __DIR__.'/paths.php');

/*
|--------------------------------------------------------------------------
| Load The Application
|--------------------------------------------------------------------------
|
| Here we will load this Illuminate application. We will keep this in a
| separate location so we can isolate the creation of an application
| from the actual running of the application with a given request.
|
*/

$framework = $app['path.base'].
                 '/vendor/laravel/framework/src';

require $framework.'/Illuminate/Foundation/start.php';

/*
|--------------------------------------------------------------------------
| Return The Application
|--------------------------------------------------------------------------
|
| This script returns the application instance. The instance is given to
| the calling script so we can separate the building of the instances
| from the actual running of the application and sending responses.
|
*/

return $app;
