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
	| 公开路径
	|--------------------------------------------------------------------------
	|
	| The public path contains the assets for your web application, such as
	| 这个公开路径内包含了你web应用程序的静态资源，
	| your JavaScript and CSS files, and also contains the primary entry
	| 例如你的JavaScript和CSS文件，
	| point for web requests into these applications from the outside.
	| 并且还包含了从外部web请求到这个应用程序的主入口点。
	|
	*/

	'public' => __DIR__.'/../public',

	/*
	|--------------------------------------------------------------------------
	| Base Path
	| 基础路径
	|--------------------------------------------------------------------------
	|
	| The base path is the root of the Laravel installation. Most likely you
	| 基础路径是安装Laravel的根目录。
	| will not need to change this value. But, if for some wild reason it
	| 大多数情况下你不需要改变这个值。但是，如果由于某种特殊原因它是必须被修改的，
	| is necessary you will do so here, just proceed with some caution.
	| 你可以在这里完成它，只是需要谨慎的进行修改。
	|
	*/

	'base' => __DIR__.'/..',

	/*
	|--------------------------------------------------------------------------
	| Storage Path
	| 存储路径
	|--------------------------------------------------------------------------
	|
	| The storage path is used by Laravel to store cached Blade views, logs
	| 存储路径被Laravel用于存储缓存的Blade视图，日志和其它信息。
	| and other pieces of information. You may modify the path here when
	| 你可以在这里修改这个路径，
	| you want to change the location of this directory for your apps.
	| 当你想要改变这个目录在你应用程序中的位置时。
	|
	*/

	'storage' => __DIR__.'/../app/storage',

);
