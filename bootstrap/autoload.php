<?php
// 记录开始时间
define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| 载入自定义函数库 -- [非原生，需要自定义函数的建议在此添加]
|--------------------------------------------------------------------------
|
| 此处定义的函数优先级高于 Laravel 助手函数库，可进行函数功能覆盖
| 
*/

if (file_exists($function = __DIR__.'/../app/functions.php'))
{
    require $function;
}

/*
|--------------------------------------------------------------------------
| Register The Composer Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader
| for our application. We just need to utilize it! We'll require it
| into the script here so that we do not have to worry about the
| loading of any our classes "manually". Feels great to relax.
|
*/
/**
 * 注册自动载入，并引入了4个文件：
 * 
 *     1.swiftmailer/swiftmailer/lib/swift_required.php
 *         Swift Mailer 是一个面向对象的PHP邮件发送包，
 *         不依赖于 PHP 自带的mail() 函数，
 *         因为该函数在发送多个邮件时占用的系统资源很高。
 *         Swift 直接与 SMTP 服务器通讯，具有非常高的发送速度和效率。
 * 
 *     2.phpseclib/phpseclib/phpseclib/Crypt/Random.php
 *         [ laravel 4.1 新增 ]
 *         随机字符串生成函数
 *         crypt_random_string($length)
 * 
 *     3.ircmaxell/password-compat/lib/password.php
 *         PHP5.5 简化密码散列 API 兼容库
 * 
 *     4.laravel/framework/src/Illuminate/Support/helpers.php
 *         Laravel 助手函数库
 *         此处提供的函数均是可以被覆盖的，用于复写的函数必须定义在此文件载入之前
 */
require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Include The Compiled Class File
|--------------------------------------------------------------------------
|
| To dramatically increase your application's performance, you may use a
| compiled class file which contains all of the classes commonly used
| by a request. The Artisan "optimize" is used to create this file.
|
*/
// 载入预编译文件
// 此文件可通过 php artisan optimize 命令移除
// 此文件可通过 php artisan optimize --force 命令重新生成
if (file_exists($compiled = __DIR__.'/compiled.php'))
{
    require $compiled;
}

/*
|--------------------------------------------------------------------------
| Setup Patchwork UTF-8 Handling
|--------------------------------------------------------------------------
|
| The Patchwork library provides solid handling of UTF-8 strings as well
| as provides replacements for all mb_* and iconv type functions that
| are not available by default in PHP. We'll setup this stuff here.
|
*/
// 在 php 未安装 或 未启用 php_mbstring 拓展时，
// 注册 Patchwork 多字节处理函数拓展支持
Patchwork\Utf8\Bootup::initMbstring();

/*
|--------------------------------------------------------------------------
| Register The Laravel Auto Loader
|--------------------------------------------------------------------------
|
| We register an auto-loader "behind" the Composer loader that can load
| model classes on the fly, even if the autoload files have not been
| regenerated for the application. We'll add it to the stack here.
|
*/
// 注册 Laravel 自身加载机制
Illuminate\Support\ClassLoader::register();

/*
|--------------------------------------------------------------------------
| Register The Workbench Loaders
|--------------------------------------------------------------------------
|
| The Laravel workbench provides a convenient place to develop packages
| when working locally. However we will need to load in the Composer
| auto-load files for the packages so that these can be used here.
|
*/
// 若存在 workbench 文件夹，则注册 Workbench 加载机制
if (is_dir($workbench = __DIR__.'/../workbench'))
{
    Illuminate\Workbench\Starter::start($workbench);
}
