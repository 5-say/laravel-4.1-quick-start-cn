<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Application Path
	| 应用程序路径
	|--------------------------------------------------------------------------
	|
	| Here we just defined the path to the application directory. Most likely
	| 这里我们刚刚定义了到应用程序目录的路径。
	| you will never need to change this value as the default setup should
	| 很有可能你永远不需要改变这个值，将它做为默认的设置，
	| work perfectly fine for the vast majority of all our applications.
	| 应该可以为我们绝大部分的应用程序工作的很好。
	|
	*/

	'app' => __DIR__.'/../app',

	/*
	|--------------------------------------------------------------------------
	| Public Path
	|--------------------------------------------------------------------------
	|
	| The public path contains the assets for your web application, such as
	| your JavaScript and CSS files, and also contains the primary entry
	| point for web requests into these applications from the outside.
	|
	*/

	'public' => __DIR__.'/../public',

	/*
	|--------------------------------------------------------------------------
	| Base Path
	|--------------------------------------------------------------------------
	|
	| The base path is the root of the Laravel installation. Most likely you
	| will not need to change this value. But, if for some wild reason it
	| is necessary you will do so here, just proceed with some caution.
	|
	*/

	'base' => __DIR__.'/..',

	/*
	|--------------------------------------------------------------------------
	| Storage Path
	|--------------------------------------------------------------------------
	|
	| The storage path is used by Laravel to store cached Blade views, logs
	| and other pieces of information. You may modify the path here when
	| you want to change the location of this directory for your apps.
	|
	*/

	'storage' => __DIR__.'/../app/storage',

);
