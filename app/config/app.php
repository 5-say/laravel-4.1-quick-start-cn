<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Application Debug Mode
	| 应用程序调试模式
	|--------------------------------------------------------------------------
	|
	| When your application is in debug mode, detailed error messages with
	| 当你的应用程序处于debug模式下时，
	| stack traces will be shown on every error that occurs within your
	| 所有发生在你应用程序中的错误，都将显示详细的错误信息和堆栈跟踪。
	| application. If disabled, a simple generic error page is shown.
	| 如果禁用，一个简单的普通错误页面将被显示。
	|
	*/

	'debug' => false,

	/*
	|--------------------------------------------------------------------------
	| Application URL
	| 应用程序URL
	|--------------------------------------------------------------------------
	|
	| This URL is used by the console to properly generate URLs when using
	| 这个URL用于控制台正确生成URL地址，当使用Artisan命令行工具时。
	| the Artisan command line tool. You should set this to the root of
	| 你应该设置它为你应用程序的根目录，
	| your application so that it is used when running Artisan tasks.
	| 这样当运行Artisan任务时就可以使用它。
	|
	*/

	'url' => 'http://localhost',

	/*
	|--------------------------------------------------------------------------
	| Application Timezone
	| 应用程序时区
	|--------------------------------------------------------------------------
	|
	| Here you may specify the default timezone for your application, which
	| 在这里你可以为你的应用程序指定默认时区，
	| will be used by the PHP date and date-time functions. We have gone
	| 这将被用于PHP的date和date-time系列函数。
	| ahead and set this to a sensible default for you out of the box.
	| 我们已经提前设置了一个合理的默认值，让你可以直接使用。
	|
	*/

	// 'timezone' => 'UTC',
    'timezone' => 'PRC',

	/*
	|--------------------------------------------------------------------------
	| Application Locale Configuration
	| 应用程序本地化配置
	|--------------------------------------------------------------------------
	|
	| The application locale determines the default locale that will be used
	| 该应用程序locale值决定了默认语言环境，他将被用于
	| by the translation service provider. You are free to set this value
	| 翻译程序的服务提供者，你可以自由的设置这个值
	| to any of the locales which will be supported by the application.
	| 为任何应用程序所支持的语言环境。
	|
	*/

	// 'locale' => 'en',
    'locale' => 'zh-CN',

	/*
	|--------------------------------------------------------------------------
	| Application Fallback Locale
	| 应用程序备用语言环境
	|--------------------------------------------------------------------------
	|
	| The fallback locale determines the locale to use when the current one
	| 这个fallback locale值决定了当前没有可用的语言包时要采用的备用语言环境。
	| is not available. You may change the value to correspond to any of
	| 你可以更改该值为对应的任意
	| the language folders that are provided through your application.
	| 通过你应用程序提供的语言包文件夹。
	|
	*/

	'fallback_locale' => 'en',

	/*
	|--------------------------------------------------------------------------
	| Encryption Key
	| 秘钥
	|--------------------------------------------------------------------------
	|
	| This key is used by the Illuminate encrypter service and should be set
	| 这个秘钥是用于Illuinate encrypter服务的，并且必须设置为一个随机的
	| to a random, 32 character string, otherwise these encrypted strings
	| 32位字符串，否则这些加密字符串将是不安全的。
	| will not be safe. Please do this before deploying an application!
	| 请在应用程序部署前设置好它。
	|
	| 在首次执行安装命令 composer install 时将自动生成，
	| 也可以通过 php artisan key:generate 命令重新生成。
	|
	*/

	'key' => 'YourSecretKey!!!',

	/*
	|--------------------------------------------------------------------------
	| Autoloaded Service Providers
	| 自动载入的服务提供者
	|--------------------------------------------------------------------------
	|
	| The service providers listed here will be automatically loaded on the
	| 这个服务提供者列表将被自动加载，在请求你的应用程序时。
	| request to your application. Feel free to add your own services to
	| 随意的添加你自己的服务到这个数组，
	| this array to grant expanded functionality to your applications.
	| 它授予你拓展你应用程序功能的权利。
	|
	*/

	'providers' => array(

		'Illuminate\Foundation\Providers\ArtisanServiceProvider',
		'Illuminate\Auth\AuthServiceProvider',
		'Illuminate\Cache\CacheServiceProvider',
		'Illuminate\Session\CommandsServiceProvider',
		'Illuminate\Foundation\Providers\ConsoleSupportServiceProvider',
		'Illuminate\Routing\ControllerServiceProvider',
		'Illuminate\Cookie\CookieServiceProvider',
		'Illuminate\Database\DatabaseServiceProvider',
		'Illuminate\Encryption\EncryptionServiceProvider',
		'Illuminate\Filesystem\FilesystemServiceProvider',
		'Illuminate\Hashing\HashServiceProvider',
		'Illuminate\Html\HtmlServiceProvider',
		'Illuminate\Log\LogServiceProvider',
		'Illuminate\Mail\MailServiceProvider',
		'Illuminate\Database\MigrationServiceProvider',
		'Illuminate\Pagination\PaginationServiceProvider',
		'Illuminate\Queue\QueueServiceProvider',
		'Illuminate\Redis\RedisServiceProvider',
		'Illuminate\Remote\RemoteServiceProvider',
		'Illuminate\Auth\Reminders\ReminderServiceProvider',
		'Illuminate\Database\SeedServiceProvider',
		'Illuminate\Session\SessionServiceProvider',
		'Illuminate\Translation\TranslationServiceProvider',
		'Illuminate\Validation\ValidationServiceProvider',
		'Illuminate\View\ViewServiceProvider',
		'Illuminate\Workbench\WorkbenchServiceProvider',

		'Barryvdh\Debugbar\ServiceProvider', // laravel调试工具栏

	),

	/*
	|--------------------------------------------------------------------------
	| Service Provider Manifest
	| 服务提供者清单
	|--------------------------------------------------------------------------
	|
	| The service provider manifest is used by Laravel to lazy load service
	| 这个服务提供者清单是用于Laravel延迟加载服务提供者的，
	| providers which are not needed for each request, as well to keep a
	| 这样就不需要每一次都遍历执行request，只要保持一个包含所有服务的列表。
	| list of all of the services. Here, you may set its storage spot.
	| 这里，你可以设置它的缓存目录。
	|
	*/

	'manifest' => storage_path().'/meta',

	/*
	|--------------------------------------------------------------------------
	| Class Aliases
	| 类别名
	|--------------------------------------------------------------------------
	|
	| This array of class aliases will be registered when this application
	| 这个类别名数组将在这个应用程序启动时注册。
	| is started. However, feel free to register as many as you wish as
	| 然而，你可以随意的注册更多你需要的别名，它们将被延迟加载，
	| the aliases are "lazy" loaded so they don't hinder performance.
	| 因此它们不妨碍性能。
	|
	*/

	'aliases' => array(

		'App'             => 'Illuminate\Support\Facades\App',
		'Artisan'         => 'Illuminate\Support\Facades\Artisan',
		'Auth'            => 'Illuminate\Support\Facades\Auth',
		'Blade'           => 'Illuminate\Support\Facades\Blade',
		'Cache'           => 'Illuminate\Support\Facades\Cache',
		'ClassLoader'     => 'Illuminate\Support\ClassLoader',
		'Config'          => 'Illuminate\Support\Facades\Config',
		'Controller'      => 'Illuminate\Routing\Controller',
		'Cookie'          => 'Illuminate\Support\Facades\Cookie',
		'Crypt'           => 'Illuminate\Support\Facades\Crypt',
		'DB'              => 'Illuminate\Support\Facades\DB',
		'Eloquent'        => 'Illuminate\Database\Eloquent\Model',
		'Event'           => 'Illuminate\Support\Facades\Event',
		'File'            => 'Illuminate\Support\Facades\File',
		'Form'            => 'Illuminate\Support\Facades\Form',
		'Hash'            => 'Illuminate\Support\Facades\Hash',
		'HTML'            => 'Illuminate\Support\Facades\HTML',
		'Input'           => 'Illuminate\Support\Facades\Input',
		'Lang'            => 'Illuminate\Support\Facades\Lang',
		'Log'             => 'Illuminate\Support\Facades\Log',
		'Mail'            => 'Illuminate\Support\Facades\Mail',
		'Paginator'       => 'Illuminate\Support\Facades\Paginator',
		'Password'        => 'Illuminate\Support\Facades\Password',
		'Queue'           => 'Illuminate\Support\Facades\Queue',
		'Redirect'        => 'Illuminate\Support\Facades\Redirect',
		'Redis'           => 'Illuminate\Support\Facades\Redis',
		'Request'         => 'Illuminate\Support\Facades\Request',
		'Response'        => 'Illuminate\Support\Facades\Response',
		'Route'           => 'Illuminate\Support\Facades\Route',
		'Schema'          => 'Illuminate\Support\Facades\Schema',
		'Seeder'          => 'Illuminate\Database\Seeder',
		'Session'         => 'Illuminate\Support\Facades\Session',
		'SSH'             => 'Illuminate\Support\Facades\SSH',
		'Str'             => 'Illuminate\Support\Str',
		'URL'             => 'Illuminate\Support\Facades\URL',
		'Validator'       => 'Illuminate\Support\Facades\Validator',
		'View'            => 'Illuminate\Support\Facades\View',

	),

);
