<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Default Cache Driver
    |--------------------------------------------------------------------------
    |
    | This option controls the default cache "driver" that will be used when
    | using the Caching library. Of course, you may use other drivers any
    | time you wish. This is the default when another is not specified.
    |
    | Supported: "file", "database", "apc", "memcached", "redis", "array"
    |
    */
// 缓存启动，系统默认支持："file", "database", "apc", "memcached", "redis", "array"
    'driver' => 'file',

    /*
    |--------------------------------------------------------------------------
    | File Cache Location
    |--------------------------------------------------------------------------
    |
    | When using the "file" cache driver, we need a location where the cache
    | files may be stored. A sensible default has been specified, but you
    | are free to change it to any other place on disk that you desire.
    |
    */
// 当使用 file 缓存驱动时，请在此配置缓存文件的位置
    'path' => storage_path().'/cache',

    /*
    |--------------------------------------------------------------------------
    | Database Cache Connection
    |--------------------------------------------------------------------------
    |
    | When using the "database" cache driver you may specify the connection
    | that should be used to store the cached items. When this option is
    | null the default database connection will be utilized for cache.
    |
    */
// 当使用 database 缓存驱动时，请在此配置数据库连接名称
// 连接名称请在 app\config\database.php 配置文件的 'connections' 参数中选取
// 当设置为 null 时则读取 app\config\database.php 配置文件的 'default' 参数
    'connection' => null,

    /*
    |--------------------------------------------------------------------------
    | Database Cache Table
    |--------------------------------------------------------------------------
    |
    | When using the "database" cache driver we need to know the table that
    | should be used to store the cached items. A default table name has
    | been provided but you're free to change it however you deem fit.
    |
    */
// 当使用 database 缓存驱动时，请在此配置用于缓存的数据库表名称
    'table' => 'cache',

    /*
    |--------------------------------------------------------------------------
    | Memcached Servers
    |--------------------------------------------------------------------------
    |
    | Now you may specify an array of your Memcached servers that should be
    | used when utilizing the Memcached cache driver. All of the servers
    | should contain a value for "host", "port", and "weight" options.
    |
    */
// memcached 缓存配置信息
    'memcached' => array(

        array('host' => '127.0.0.1', 'port' => 11211, 'weight' => 100),

    ),

    /*
    |--------------------------------------------------------------------------
    | Cache Key Prefix
    |--------------------------------------------------------------------------
    |
    | When utilizing a RAM based store such as APC or Memcached, there might
    | be other applications utilizing the same cache. So, we'll specify a
    | value to get prefixed to all our keys so we can avoid collisions.
    |
    */
// 缓存 Key 的前缀
    'prefix' => 'laravel',

);
