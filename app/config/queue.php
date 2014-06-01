<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Default Queue Driver
	| 默认队列驱动
	|--------------------------------------------------------------------------
	|
	| The Laravel queue API supports a variety of back-ends via an unified
	| Laravel 队列 API 支持多种后端通过一个统一的 API 进行调用，
	| API, giving you convenient access to each back-end using the same
	| 给予你相同的语法来方便的访问每一个后端。
	| syntax for each one. Here you may set the default queue driver.
	| 这里你可以设置默认的队列驱动。
	|
	| Supported: "sync", "beanstalkd", "sqs", "iron"
	| 支持: "sync", "beanstalkd", "sqs", "iron"
	|
	*/

	'default' => 'sync',

	/*
	|--------------------------------------------------------------------------
	| Queue Connections
	| 队列连接
	|--------------------------------------------------------------------------
	|
	| Here you may configure the connection information for each server that
	| 在这里，你可以为每一个，你应用程序所使用的服务器，配置连接信息。
	| is used by your application. A default configuration has been added
	| 一个默认的配置已经添加，
	| for each back-end shipped with Laravel. You are free to add more.
	| 为每一个 Laravel 所支持的后端。你可以自由的追加更多的配置。
	|
	*/

	'connections' => array(

		'sync' => array(
			'driver' => 'sync',
		),

		'beanstalkd' => array(
			'driver' => 'beanstalkd',
			'host'   => 'localhost',
			'queue'  => 'default',
			'ttr'    => 60,
		),

		'sqs' => array(
			'driver' => 'sqs',
			'key'    => 'your-public-key',
			'secret' => 'your-secret-key',
			'queue'  => 'your-queue-url',
			'region' => 'us-east-1',
		),

		'iron' => array(
			'driver'  => 'iron',
			'host'    => 'mq-aws-us-east-1.iron.io',
			'token'   => 'your-token',
			'project' => 'your-project-id',
			'queue'   => 'your-queue-name',
		),

		'redis' => array(
			'driver' => 'redis',
			'queue'  => 'default',
		),

	),

	/*
	|--------------------------------------------------------------------------
	| Failed Queue Jobs
	| 失败队列作业
	|--------------------------------------------------------------------------
	|
	| These options configure the behavior of failed queue job logging so you
	| 这些选项配置了失败队列作业的日志记录行为，因此你
	| can control which database and table are used to store the jobs that
	| 可以控制使用哪个数据库和表来存储这些失败的作业。
	| have failed. You may change them to any database / table you wish.
	| 你可以改变他们为任何你想要的数据库与表。
	|
	*/

	'failed' => array(

		'database' => 'mysql', 'table' => 'failed_jobs',

	),

);
