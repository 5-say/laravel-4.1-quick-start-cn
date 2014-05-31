<?php
/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylorotwell@gmail.com>
 */

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
| 注册自动加载
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader
| Composer 提供了一个便利，为我们的应用程序自动生成了一个类加载器。
| for our application. We just need to utilize it! We'll require it
| 我们只需要直接使用它！我们在脚本的这个位置引入它，
| into the script here so that we do not have to worry about the
| 因此我们就不需要为“手动”加载任何自己的类而担心。
| loading of any our classes "manually". Feels great to relax.
| 放松的感觉好极了。
|
*/

require __DIR__.'/../bootstrap/autoload.php';

/*
|--------------------------------------------------------------------------
| Turn On The Lights
| 打开灯光
|--------------------------------------------------------------------------
|
| We need to illuminate PHP development, so let's turn on the lights.
| 我们需要照亮 PHP 的开发，所以让我们打开灯光。
| This bootstraps the framework and gets it ready for use, then it
| 在这里引导这个框架并获取准备好的它来使用，
| will load up this application so that we can run it and send
| 然后它会加载这个应用程序，让我们可以运行它
| the responses back to the browser and delight these users.
| 并发送一个响应返回给浏览器和欣喜的用户。
|
*/

$app = require_once __DIR__.'/../bootstrap/start.php';

/*
|--------------------------------------------------------------------------
| Run The Application
| 运行这个应用程序
|--------------------------------------------------------------------------
|
| Once we have the application, we can simply call the run method,
| 一旦我们有了一个应用程序，我们可以简单的执行这个 run 方法，
| which will execute the request and send the response back to
| 这将执行这个请求，并发送一个响应返回客户端的浏览器，
| the client's browser allowing them to enjoy the creative
| 让他们享受这个富有创意并且精彩的应用，我们使之沸腾。
| and wonderful application we have whipped up for them.
|
*/

$app->run();
