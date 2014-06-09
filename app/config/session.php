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
	| 当使用原生 session 驱动，我们需要一个位置来存储 session 文件。
	| files may be stored. A default has been set for you but a different
	| 这里已经为你设置了一个默认值，但一个不同的
	| location may be specified. This is only needed for file sessions.
	| 位置可以被指定。这仅仅是基于文件的 session 所需要的。
	|
	*/

	'files' => storage_path().'/sessions',

	/*
	|--------------------------------------------------------------------------
	| Session Database Connection
	| Session 数据库连接名称
	|--------------------------------------------------------------------------
	|
	| When using the "database" or "redis" session drivers, you may specify a
	| 当使用 "database" 或 "redis" session 驱动时，你需要指定一个
	| connection that should be used to manage these sessions. This should
	| 连接，它将被用于管理这些 session。这应该
	| correspond to a connection in your database configuration options.
	| 对应于你 database 配置文件 connections 选项中的一个连接。
	|
	*/

	'connection' => null,

	/*
	|--------------------------------------------------------------------------
	| Session Database Table
	| Session 数据库表名称
	|--------------------------------------------------------------------------
	|
	| When using the "database" session driver, you may specify the table we
	| 当使用 "database" session 驱动时，你需要指定一个表，我们
	| should use to manage the sessions. Of course, a sensible default is
	| 应该用它来管理 session。当然，一个合理的默认值
	| provided for you; however, you are free to change this as needed.
	| 已经提供给你；然而，你可以根据需要自由的改变这个值。
	|
	*/

	'table' => 'sessions',

	/*
	|--------------------------------------------------------------------------
	| Session Sweeping Lottery
	| Session 清理几率
	|--------------------------------------------------------------------------
	|
	| Some session drivers must manually sweep their storage location to get
	| 一些 session 驱动必须手动清理他们的存储位置，以摆脱
	| rid of old sessions from storage. Here are the chances that it will
	| 旧的 session 存储。这里有一个概率，它将
	| happen on a given request. By default, the odds are 2 out of 100.
	| 发生在一个给定的请求中。默认情况下，几率是2%。
	|
	*/

	'lottery' => array(2, 100),

	/*
	|--------------------------------------------------------------------------
	| Session Cookie Name
	| Session 对应的 Cookie 名称
	|--------------------------------------------------------------------------
	|
	| Here you may change the name of the cookie used to identify a session
	| 这里你需要修改这个 cookie 名称，用于通过 ID 识别 session 实例。
	| instance by ID. The name specified here will get used every time a
	| 这里指定的名称，将会用于任何时候
	| new session cookie is created by the framework for every driver.
	| 由框架任意驱动创建的，一个新 session 的 cookie。
	|
	*/

	'cookie' => 'laravel_session',

	/*
	|--------------------------------------------------------------------------
	| Session Cookie Path
	| Session 的 Cookie 路径
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
	| Session 的 Cookie 域名
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
