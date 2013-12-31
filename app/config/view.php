<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | View Storage Paths
    |--------------------------------------------------------------------------
    |
    | Most templating systems load templates from disk. Here you may specify
    | an array of paths that should be checked for your views. Of course
    | the usual Laravel view path has already been registered for you.
    |
    */
// 视图文件夹路径
    'paths' => array(__DIR__.'/../views'),

    /*
    |--------------------------------------------------------------------------
    | 视图别名设置（视图的命名空间） -- [非原生，建议添加]
    |--------------------------------------------------------------------------
    | 
    */
    'aliases' => array(

        'l'    => app_path('views/_layout'), // 基础模板
        'w'    => app_path('views/_widget'), // 小部件
        'sys'  => app_path('views/_system'), // 系统信息页面
        'mail' => app_path('views/_emails'), // 电子邮件模板

    ),

    /*
    |--------------------------------------------------------------------------
    | Pagination View
    |--------------------------------------------------------------------------
    |
    | This view will be used to render the pagination link output, and can
    | be easily customized here to show any view you like. A clean view
    | compatible with Twitter's Bootstrap is given to you by default.
    |
    */
/**
 * 默认分页视图
 * 
 * 视图别名 'pagination::'
 * 
 * 注册于：
 *  Illuminate\Pagination\Environment.php 中第90行
 *  $this->view->addNamespace('pagination', __DIR__.'/views');
 * 调用于：
 *  Illuminate\Pagination\PaginationServiceProvider.php 中第25行
 *  $paginator->setViewName($app['config']['view.pagination']);
 */
    'pagination' => 'pagination::slider-3',

);
