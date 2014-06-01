<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| View Storage Paths
	| 视图存储路径
	|--------------------------------------------------------------------------
	|
	| Most templating systems load templates from disk. Here you may specify
	| 大多数模板系统从磁盘加载模板。这里你可以指定
	| an array of paths that should be checked for your views. Of course
	| 一个路径的数组，用于检测你的视图。当然
	| the usual Laravel view path has already been registered for you.
	| 通常已经为你注册了 Laravel 视图路径。
	|
	*/

	'paths' => array(__DIR__.'/../views'),

	/*
	|--------------------------------------------------------------------------
	| Pagination View
	| 分页视图
	|--------------------------------------------------------------------------
	|
	| This view will be used to render the pagination link output, and can
	| 这个视图将被用于渲染分页链接的输出，并且能够
	| be easily customized here to show any view you like. A clean view
	| 轻松的在这里定制，来显示任何你喜欢的视图。一个
	| compatible with Twitter's Bootstrap is given to you by default.
	| 兼容 Twitter's Bootstrap 的干净视图，是给予你的默认配置。
	|
	*/

	'pagination' => 'pagination::slider-3',

);
