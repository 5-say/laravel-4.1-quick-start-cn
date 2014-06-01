<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| PDO Fetch Style
	| PDO 获取类型
	|--------------------------------------------------------------------------
	|
	| By default, database results will be returned as instances of the PHP
	| 默认情况下，数据库查询结果将返回为 PHP stdClass 对象的示例；
	| stdClass object; however, you may desire to retrieve records in an
	| 但是，为简单起见你可能希望获取数组格式的记录。
	| array format for simplicity. Here you can tweak the fetch style.
	| 在这里你可以调整获取的类型。
	|
	*/

	'fetch' => PDO::FETCH_CLASS,

	/*
	|--------------------------------------------------------------------------
	| Default Database Connection Name
	| 默认数据库连接名称
	|--------------------------------------------------------------------------
	|
	| Here you may specify which of the database connections below you wish
	| 这里你可以指定一个数据库连接，
	| to use as your default connection for all database work. Of course
	| 作为你所有数据库工作的默认连接。当然
	| you may use many connections at once using the Database library.
	| 你可以在一个数据库类库的使用中采用多个连接。
	|
	*/

	'default' => 'mysql',

	/*
	|--------------------------------------------------------------------------
	| Database Connections
	| 数据库连接
	|--------------------------------------------------------------------------
	|
	| Here are each of the database connections setup for your application.
	| 这里是为你的应用程序设置的每个数据库连接。
	| Of course, examples of configuring each database platform that is
	| 当然，下面展示了 Laravel 所支持的每个数据库平台的配置实例
	| supported by Laravel is shown below to make development simple.
	| 以使开发更加的简单。
	|
	|
	| All database work in Laravel is done through the PHP PDO facilities
	| 在 Laravel 中所有的数据库工作都是通过 PHP PDO 设备完成的，
	| so make sure you have the driver for your particular database of
	| 因此在你开发之前请确保，已经选择了
	| choice installed on your machine before you begin development.
	| 安装在你的机器上的，特定数据库的驱动。
	|
	*/

	'connections' => array(

		'sqlite' => array(
			'driver'   => 'sqlite',
			'database' => __DIR__.'/../database/production.sqlite',
			'prefix'   => '',
		),

		'mysql' => array(
			'driver'    => 'mysql',
			'host'      => 'localhost',
			'database'  => 'database',
			'username'  => 'root',
			'password'  => '',
			'charset'   => 'utf8',
			'collation' => 'utf8_unicode_ci',
			'prefix'    => '',
		),

		'pgsql' => array(
			'driver'   => 'pgsql',
			'host'     => 'localhost',
			'database' => 'database',
			'username' => 'root',
			'password' => '',
			'charset'  => 'utf8',
			'prefix'   => '',
			'schema'   => 'public',
		),

		'sqlsrv' => array(
			'driver'   => 'sqlsrv',
			'host'     => 'localhost',
			'database' => 'database',
			'username' => 'root',
			'password' => '',
			'prefix'   => '',
		),

	),

	/*
	|--------------------------------------------------------------------------
	| Migration Repository Table
	| 迁移信息库表
	|--------------------------------------------------------------------------
	|
	| This table keeps track of all the migrations that have already run for
	| 这个表为你的应用程序保存了所有的迁移轨迹。
	| your application. Using this information, we can determine which of
	| 利用这些信息，我们可以判断
	| the migrations on disk haven't actually been run in the database.
	| 磁盘上的哪些迁移还没有运行于数据库中。
	|
	*/

	'migrations' => 'migrations',

	/*
	|--------------------------------------------------------------------------
	| Redis Databases
	| Redis 数据库
	|--------------------------------------------------------------------------
	|
	| Redis is an open source, fast, and advanced key-value store that also
	| Redis 是一个开源，快速，并且先进的键值对存储
	| provides a richer set of commands than a typical key-value systems
	| 它也提供了一组比典型键值对系统
	| such as APC or Memcached. Laravel makes it easy to dig right in.
	| 如 APC 或 Memcached 更丰富的命令。Laravel 使得它更容易的被使用。
	|
	*/

	'redis' => array(

		'cluster' => false,

		'default' => array(
			'host'     => '127.0.0.1',
			'port'     => 6379,
			'database' => 0,
		),

	),

);
