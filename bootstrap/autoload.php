<?php

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Register The Composer Auto Loader
| 注册Composer自动加载程序
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader
| Composer提供了一个便利，为我们的应用程序自动生成了一个类加载器。
| for our application. We just need to utilize it! We'll require it
| 我们只需要直接使用它！我们在脚本的这个位置引入它，
| into the script here so that we do not have to worry about the
| 因此我们就不需要为“手动”加载任何自己的类而担心。
| loading of any our classes "manually". Feels great to relax.
| 放松的感觉好极了。
|
*/

require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Include The Compiled Class File
| 加载预编译的类文件
|--------------------------------------------------------------------------
|
| To dramatically increase your application's performance, you may use a
| 要显著提高应用程序的性能，
| compiled class file which contains all of the classes commonly used
| 你可以在一个请求中，使用其中包含了所有常用类的编译后的类文件。
| by a request. The Artisan "optimize" is used to create this file.
| Artisan的“optimize”命令可以用于创建这个文件。
|
*/

if (file_exists($compiled = __DIR__.'/compiled.php'))
{
	require $compiled;
}

/*
|--------------------------------------------------------------------------
| Setup Patchwork UTF-8 Handling
| 安装 Patchwork UTF-8 处理器
|--------------------------------------------------------------------------
|
| The Patchwork library provides solid handling of UTF-8 strings as well
| 这个Patchwork库为UTF-8字符串提供了坚实的处理器，
| as provides replacements for all mb_* and iconv type functions that
| 以及提供替代所有mb_*和iconv类型函数的方法，
| are not available by default in PHP. We'll setup this stuff here.
| 这并不是默认存在于PHP中的。我们会在这里安装这个东西。
|
*/

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

if (is_dir($workbench = __DIR__.'/../workbench'))
{
	Illuminate\Workbench\Starter::start($workbench);
}
