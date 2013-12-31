<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
    return Redirect::to('url/shortened');
});


// 短链的跳转
Route::get('{shortenedCode}', array('as' => 'urlShortenedRedirect', function($shortenedCode)
{
    // 根据缩短码获取完整 URL
    $realUrl = UrlShortenedModel::getRealUrl($shortenedCode);
    // 重定向
    if ($realUrl)
    {
        return Redirect::to($realUrl);
    }
    App::abort(404);
}));

// 短链的生成
Route::group(array('prefix' => 'url/shortened'), function()
{
    Route::get('/', 'UrlShortenedController@create');
    Route::post('/', 'UrlShortenedController@store')->before('csrf|flash');
});