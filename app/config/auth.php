<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Default Authentication Driver
    |--------------------------------------------------------------------------
    |
    | This option controls the authentication driver that will be utilized.
    | This driver manages the retrieval and authentication of the users
    | attempting to get access to protected areas of your application.
    |
    | Supported: "database", "eloquent"
    |
    */
// 身份验证驱动，系统默认支持："database", "eloquent"
    'driver' => 'eloquent',

    /*
    |--------------------------------------------------------------------------
    | Authentication Model
    |--------------------------------------------------------------------------
    |
    | When using the "Eloquent" authentication driver, we need to know which
    | Eloquent model should be used to retrieve your users. Of course, it
    | is often just the "User" model but you may use whatever you like.
    |
    */
// 'eloquent'驱动下用于身份验证的模型名称
    'model' => 'User',

    /*
    |--------------------------------------------------------------------------
    | Authentication Table
    |--------------------------------------------------------------------------
    |
    | When using the "Database" authentication driver, we need to know which
    | table should be used to retrieve your users. We have chosen a basic
    | default value but you may easily change it to any table you like.
    |
    */
// 'database'驱动下用于身份验证的数据库表名称
    'table' => 'users',

    /*
    |--------------------------------------------------------------------------
    | Password Reminder Settings
    |--------------------------------------------------------------------------
    |
    | Here you may set the settings for password reminders, including a view
    | that should be used as your password reminder e-mail. You will also
    | be able to set the name of the table that holds the reset tokens.
    |
    | The "expire" time is the number of minutes that the reminder should be
    | considered valid. This security feature keeps tokens short-lived so
    | they have less time to be guessed. You may change this as needed.
    |
    */
// 密码提醒设置，用户忘记密码时通常通过邮箱重置
    'reminder' => array(

        'email' => 'emails.auth.reminder',

        'table' => 'password_reminders',

        'expire' => 60,

    ),

);
