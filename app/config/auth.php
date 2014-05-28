<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Default Authentication Driver
	| 默认身份验证驱动
	|--------------------------------------------------------------------------
	|
	| This option controls the authentication driver that will be utilized.
	| 该选项控制身份验证将要使用的驱动。
	| This driver manages the retrieval and authentication of the users
	| 这个驱动管理提取和验证身份，在用户试图
	| attempting to get access to protected areas of your application.
	| 获取权限来访问你应用程序的保护区域时。
	|
	| Supported: "database", "eloquent"
	| 支持: "database", "eloquent"
	|
	*/

	'driver' => 'eloquent',

	/*
	|--------------------------------------------------------------------------
	| Authentication Model
	| 身份验证模型
	|--------------------------------------------------------------------------
	|
	| When using the "Eloquent" authentication driver, we need to know which
	| 当使用 "Eloquent" 身份验证驱动时，我们需要知道是哪个
	| Eloquent model should be used to retrieve your users. Of course, it
	| Eloquent模型应该被用于提取你的用户信息。当然，它
	| is often just the "User" model but you may use whatever you like.
	| 通常使用 "User" 模型，但你可以使用任何你喜欢的模型。
	|
	*/

	'model' => 'User',

	/*
	|--------------------------------------------------------------------------
	| Authentication Table
	| 身份验证数据库表
	|--------------------------------------------------------------------------
	|
	| When using the "Database" authentication driver, we need to know which
	| 当使用 "Database" 身份验证驱动时，我们需要知道是哪个
	| table should be used to retrieve your users. We have chosen a basic
	| 数据库表应该被用于提取你的用户信息。我们选择了一个基本的
	| default value but you may easily change it to any table you like.
	| 默认值，但你可以很容易的将它更改为任何你喜欢的表。
	|
	*/

	'table' => 'users',

	/*
	|--------------------------------------------------------------------------
	| Password Reminder Settings
	| 密码提示设置
	|--------------------------------------------------------------------------
	|
	| Here you may set the settings for password reminders, including a view
	| 这里你可以进行密码提示的设置，包括一个视图，
	| that should be used as your password reminder e-mail. You will also
	| 它应该被用于你的密码提示邮件。你还可以
	| be able to set the name of the table that holds the reset tokens.
	| 设置一个用于存放复位令牌的数据库表的名称。
	|
	| The "expire" time is the number of minutes that the reminder should be
	| "expire" 时间是一个表示分钟的数字，在这个时间内该提醒应该被视为是有效的。
	| considered valid. This security feature keeps tokens short-lived so
	| 这个安全保护功能保持令牌在一个较短的生命周期，
	| they have less time to be guessed. You may change this as needed.
	| 因此他们将有更少的时间进行猜测。你可以根据需要进行修改。
	|
	*/

	'reminder' => array(

		'email' => 'emails.auth.reminder',

		'table' => 'password_reminders',

		'expire' => 60,

	),

);
