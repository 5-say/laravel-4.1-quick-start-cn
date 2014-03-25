<?php

/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| The first thing we will do is create a new Laravel application instance
| which serves as the "glue" for all the components of Laravel, and is
| the IoC container for the system binding all of the various parts.
|
*/
// 实例化应用程序
$app = new Illuminate\Foundation\Application;

/*
|--------------------------------------------------------------------------
| Detect The Application Environment
|--------------------------------------------------------------------------
|
| Laravel takes a dead simple approach to your application environments
| so you can just specify a machine name for the host that matches a
| given environment, then we will automatically detect it for you.
|
*/
// 检测应用程序运行环境
// 实际部署时，建议直接 $env = 'production'; 以确保应用程序安全
$env = $app->detectEnvironment(array(

    'local' => array('your-machine-name'),

));
// $env = 'production';
// 另一种处理方法，部署时在 Apache or Nginx 设置 ‘APP_ENV’
// $env = $app->detectEnvironment(function()
// {
//     return getenv('APP_ENV') ?: 'local';
// });

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
// 绑定应用程序相关文件路径
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
// 定义框架目录
$framework = $app['path.base'].'/vendor/laravel/framework/src';
/**
 * 载入框架启动文件：
 *     01.关闭原生 PHP 错误报告，防止系统信息泄露
 *     02.检测 PHP 是否开启 mcrypt 拓展
 *     03.检测是否处于测试环境中
 *     04.设置应用程序 Facade 实例
 *     05.注册了配置文件目录 app_path('config')
 *        注意：配置文件是按需加载的，仅在首次使用某配置时才载入相应配置文件
 *     06.注册应用程序异常处理
 *     07.设置默认时区 [ app/config/app.php -> timezone ]
 *     08.注册别名导入 [ app/config/app.php -> aliases ]
 *     09.启用 HTTP 方法覆盖，以支持 PUT 和 DELETE 表单请求
 *     10.注册核心服务提供商 [ app/config/app.php -> providers ]
 *     11.注册所有 provider 的 boot 方法
 *     12.载入全局启动文件 app/start/global.php
 *     13.载入运行环境启动文件 app/start/{$env}.php
 *     14.载入路由文件 app/routes.php
 */
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
