<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Default Queue Driver
    |--------------------------------------------------------------------------
    |
    | The Laravel queue API supports a variety of back-ends via an unified
    | API, giving you convenient access to each back-end using the same
    | syntax for each one. Here you may set the default queue driver.
    |
    | Supported: "sync", "beanstalkd", "sqs", "iron"
    |
    */
// 默认队列驱动，系统默认支持以下驱动: "sync", "beanstalkd", "sqs", "iron"
    'default' => 'sync',

    /*
    |--------------------------------------------------------------------------
    | Queue Connections
    |--------------------------------------------------------------------------
    |
    | Here you may configure the connection information for each server that
    | is used by your application. A default configuration has been added
    | for each back-end shipped with Laravel. You are free to add more.
    |
    */
// 各个队列驱动的连接参数、认证信息
    'connections' => array(

        'sync' => array(
            'driver' => 'sync',
        ),

        'beanstalkd' => array(
            'driver' => 'beanstalkd',
            'host'   => 'localhost',
            'queue'  => 'default',
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
            'project' => 'your-project-id',
            'token'   => 'your-token',
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
    |--------------------------------------------------------------------------
    |
    | These options configure the behavior of failed queue job logging so you
    | can control which database and table are used to store the jobs that
    | have failed. You may change them to any database / table you wish.
    |
    */
// 失败的队列任务将被存储至，下面指定的数据库表中
    'failed' => array(

        'database' => 'mysql', 'table' => 'failed_jobs',

    ),

);
