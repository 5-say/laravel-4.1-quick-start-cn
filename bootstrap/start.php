<?php

/*
|--------------------------------------------------------------------------
| Create The Application
| 创建应用程序
|--------------------------------------------------------------------------
|
| The first thing we will do is create a new Laravel application instance
| 首先，我们会创建一个新的 Laravel 应用程序实例，
| which serves as the "glue" for all the components of Laravel, and is
| 它作为所有 Laravel 组件的“粘合剂”，
| the IoC container for the system binding all of the various parts.
| 并且为系统的各个部分绑定了 IoC 容器。
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
| Laravel 采用一个极其简单的途径来确定你的应用程序环境，
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
| 绑定路径
|--------------------------------------------------------------------------
|
| Here we are binding the paths configured in paths.php to the app. You
| 这里我们绑定 paths.php 中的路径到应用程序。
| should not be changing these here. If you need to change these you
| 你不应该在这里进行修改。如果你需要变更这些路径，
| may do so within the paths.php file and they will be bound here.
| 你可以这样做，在 paths.php 文件中修改并在这一步完成绑定。
|
*/

$app->bindInstallPaths(require __DIR__.'/paths.php');

/*
|--------------------------------------------------------------------------
| Load The Application
| 载入应用程序
|--------------------------------------------------------------------------
|
| Here we will load this Illuminate application. We will keep this in a
| 这里我们将载入这个 Illuminate 应用程序。我们将在一个独立的位置保持它，
| separate location so we can isolate the creation of an application
| 因此我们可以，隔离这个负责创造的应用程序，
| from the actual running of the application with a given request.
| 从实际运行的应用程序与给定的请求中。
|
*/

$framework = $app['path.base'].
                 '/vendor/laravel/framework/src';

require $framework.'/Illuminate/Foundation/start.php';

/*
|--------------------------------------------------------------------------
| Return The Application
| 运行应用程序
|--------------------------------------------------------------------------
|
| This script returns the application instance. The instance is given to
| 此脚本返回一个应用程序实例。该实例提供给脚本调用，
| the calling script so we can separate the building of the instances
| 因此我们可以独立构建这个实例，
| from the actual running of the application and sending responses.
| 为实际运行的应用程序和发送的响应。
|
*/

return $app;
