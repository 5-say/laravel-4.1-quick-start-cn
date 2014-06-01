<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Default Remote Connection Name
	| 默认远程连接名称
	|--------------------------------------------------------------------------
	|
	| Here you may specify the default connection that will be used for SSH
	| 在这里你可以指定将用于 SSH 操作的默认连接。 
	| operations. This name should correspond to a connection name below
	| 这个名称应该与下面的服务器连接列表相对应。
	| in the server list. Each connection will be manually accessible.
	| 每个连接都将被手动访问。
	|
	*/

	'default' => 'production',

	/*
	|--------------------------------------------------------------------------
	| Remote Server Connections
	| 远程服务器连接
	|--------------------------------------------------------------------------
	|
	| These are the servers that will be accessible via the SSH task runner
	| 这些服务器将通过 SSH 任务运行设备进行访问。
	| facilities of Laravel. This feature radically simplifies executing
	| 这个特性彻底简化了在你的服务器上执行任务的工作，
	| tasks on your servers, such as deploying out these applications.
	| 例如部署这些应用程序。
	|
	*/

	'connections' => array(

		'production' => array(
			'host'      => '',
			'username'  => '',
			'password'  => '',
			'key'       => '',
			'keyphrase' => '',
			'root'      => '/var/www',
		),

	),

	/*
	|--------------------------------------------------------------------------
	| Remote Server Groups
	| 远程服务器分组
	|--------------------------------------------------------------------------
	|
	| Here you may list connections under a single group name, which allows
	| 在这里你可以在一个单一组名下列出一些连接，它允许
	| you to easily access all of the servers at once using a short name
	| 你轻松的仅使用一个简短的名称，一次性访问所有服务器，
	| that is extremely easy to remember, such as "web" or "database".
	| 这是非常便于记忆的，例如 "web" 或 "database"。
	|
	*/

	'groups' => array(

		'web' => array('production')

	),

);
