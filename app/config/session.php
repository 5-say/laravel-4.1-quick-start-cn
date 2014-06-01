<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Default Session Driver
	| 默认 Session 驱动
	|--------------------------------------------------------------------------
	|
	| This option controls the default session "driver" that will be used on
	| 这个选项控制默认的 session 驱动，这将被用于用户请求。
	| requests. By default, we will use the lightweight native driver but
	| 默认情况下，我们将使用轻量级的原生驱动，
	| you may specify any of the other wonderful drivers provided here.
	| 但你可以指定任何这里提供的其他优秀驱动。
	|
	| Supported: "file", "cookie", "database", "apc",
	|            "memcached", "redis", "array"
	| 支持: "file", "cookie", "database", "apc", "memcached", "redis", "array"
	|
	*/

	'driver' => 'file',

	/*
	|--------------------------------------------------------------------------
	| Session Lifetime
	| Session 生命周期
	|--------------------------------------------------------------------------
	|
	| Here you may specify the number of minutes that you wish the session
	| 这里你可以指定一个代表分钟的数字，
	| to be allowed to remain idle before it expires. If you want them
	| 以允许 session 在过期之前保持空闲。如果你希望它们
	| to immediately expire on the browser closing, set that option.
	| 在浏览器关闭时立即过期，请设置 'expire_on_close' 这个选项。
	|
	*/

	'lifetime' => 120,

	'expire_on_close' => false,

	/*
	|--------------------------------------------------------------------------
	| Session File Location
	| Session 文件位置
	|--------------------------------------------------------------------------
	|
	| When using the native session driver, we need a location where session
	| files may be stored. A default has been set for you but a different
	| location may be specified. This is only needed for file sessions.
	|
	*/

	'files' => storage_path().'/sessions',

	/*
	|--------------------------------------------------------------------------
	| Session Database Connection
	|--------------------------------------------------------------------------
	|
	| When using the "database" or "redis" session drivers, you may specify a
	| connection that should be used to manage these sessions. This should
	| correspond to a connection in your database configuration options.
	|
	*/

	'connection' => null,

	/*
	|--------------------------------------------------------------------------
	| Session Database Table
	|--------------------------------------------------------------------------
	|
	| When using the "database" session driver, you may specify the table we
	| should use to manage the sessions. Of course, a sensible default is
	| provided for you; however, you are free to change this as needed.
	|
	*/

	'table' => 'sessions',

	/*
	|--------------------------------------------------------------------------
	| Session Sweeping Lottery
	|--------------------------------------------------------------------------
	|
	| Some session drivers must manually sweep their storage location to get
	| rid of old sessions from storage. Here are the chances that it will
	| happen on a given request. By default, the odds are 2 out of 100.
	|
	*/

	'lottery' => array(2, 100),

	/*
	|--------------------------------------------------------------------------
	| Session Cookie Name
	|--------------------------------------------------------------------------
	|
	| Here you may change the name of the cookie used to identify a session
	| instance by ID. The name specified here will get used every time a
	| new session cookie is created by the framework for every driver.
	|
	*/

	'cookie' => 'laravel_session',

	/*
	|--------------------------------------------------------------------------
	| Session Cookie Path
	|--------------------------------------------------------------------------
	|
	| The session cookie path determines the path for which the cookie will
	| be regarded as available. Typically, this will be the root path of
	| your application but you are free to change this when necessary.
	|
	*/

	'path' => '/',

	/*
	|--------------------------------------------------------------------------
	| Session Cookie Domain
	|--------------------------------------------------------------------------
	|
	| Here you may change the domain of the cookie used to identify a session
	| in your application. This will determine which domains the cookie is
	| available to in your application. A sensible default has been set.
	|
	*/

	'domain' => null,

	/*
	|--------------------------------------------------------------------------
	| HTTPS Only Cookies
	|--------------------------------------------------------------------------
	|
	| By setting this option to true, session cookies will only be sent back
	| to the server if the browser has a HTTPS connection. This will keep
	| the cookie from being sent to you if it can not be done securely.
	|
	*/

	'secure' => false,

);
