<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Default Cache Driver
	| 默认缓存驱动
	|--------------------------------------------------------------------------
	|
	| This option controls the default cache "driver" that will be used when
	| 该选项控制默认缓存“驱动”，这将被使用，当运用缓存类库时。
	| using the Caching library. Of course, you may use other drivers any
	| 当然，你可以使用任何其他驱动，在你希望的任何时间。
	| time you wish. This is the default when another is not specified.
	| 这是一个当其它驱动没有被指定时的默认值。
	|
	| Supported: "file", "database", "apc", "memcached", "redis", "array"
	| 支持: "file", "database", "apc", "memcached", "redis", "array"
	|
	*/

	'driver' => 'file',

	/*
	|--------------------------------------------------------------------------
	| File Cache Location
	| 文件缓存的位置
	|--------------------------------------------------------------------------
	|
	| When using the "file" cache driver, we need a location where the cache
	| 当使用 "file" 缓存驱动时，我们需要一个位置来存储
	| files may be stored. A sensible default has been specified, but you
	| 缓存文件。一个明智的默认值已经被指定，但你
	| are free to change it to any other place on disk that you desire.
	| 可以自由的改变它为你磁盘上的，想要的任何其它位置。
	|
	*/

	'path' => storage_path().'/cache',

	/*
	|--------------------------------------------------------------------------
	| Database Cache Connection
	| 数据库缓存连接
	|--------------------------------------------------------------------------
	|
	| When using the "database" cache driver you may specify the connection
	| 当使用 "database" 缓存驱动时，我们需要指定一个连接，
	| that should be used to store the cached items. When this option is
	| 用来存储缓存项。当这个选项为
	| null the default database connection will be utilized for cache.
	| null 时，默认的数据库连接将被用于缓存。
	|
	*/

	'connection' => null,

	/*
	|--------------------------------------------------------------------------
	| Database Cache Table
	| 数据库缓存表
	|--------------------------------------------------------------------------
	|
	| When using the "database" cache driver we need to know the table that
	| 当使用 "database" 缓存驱动时，我们需要知道是哪个表
	| should be used to store the cached items. A default table name has
	| 用来存储缓存项。一个默认的表名已经被提供，
	| been provided but you're free to change it however you deem fit.
	| 但你可以自由的改变它为你觉得合适的值。
	|
	*/

	'table' => 'cache',

	/*
	|--------------------------------------------------------------------------
	| Memcached Servers
	| Memcached 服务器
	|--------------------------------------------------------------------------
	|
	| Now you may specify an array of your Memcached servers that should be
	| 现在你可以为你的 Memcached 服务器指定一个数组，当使用 Memcached 缓存驱动时
	| used when utilizing the Memcached cache driver. All of the servers
	| 它将被使用。所有的服务器
	| should contain a value for "host", "port", and "weight" options.
	| 都应包含 "host", "port", 和 "weight" 选项和对应的值。
	|
	*/

	'memcached' => array(

		array('host' => '127.0.0.1', 'port' => 11211, 'weight' => 100),

	),

	/*
	|--------------------------------------------------------------------------
	| Cache Key Prefix
	| 缓存键前缀
	|--------------------------------------------------------------------------
	|
	| When utilizing a RAM based store such as APC or Memcached, there might
	| 当使用一个基于 RAM 的存储，如 APC 或 Memcached，
	| be other applications utilizing the same cache. So, we'll specify a
	| 有可能其他应用程序使用了相同的缓存。因此，我们将指定一个
	| value to get prefixed to all our keys so we can avoid collisions.
	| 值给我们所有的键添加前缀，以便我们可以避免冲突。
	|
	*/

	'prefix' => 'laravel',

);
