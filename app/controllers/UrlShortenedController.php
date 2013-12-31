<?php

use UrlShortenedModel as mUrl;

class UrlShortenedController extends \BaseController {
    
    /**
     * get - 创建短链
     * @return Response
     */
    public function create()
    {
        return View::make('UrlShortened.create')
            ->with('storeURL', action(get_class().'@store'));
    }

    /**
     * post - 创建短链
     * @return Response
     */
    public function store()
    {
        // 数据验证
        $validator = Validator::make(
            Input::all(),
            array('url'=>'required|url'),
            array('url.required'=>'请填写链接地址。', 'url.url'=>'链接地址的格式不正确。')
        );
        if ($validator->fails())
        { // 验证失败
            return Redirect::action(get_class().'@create')
                ->withErrors($validator)
                ->withInput();
        } // 验证成功
        // 查询数据库是否已存在
        $record = mUrl::hasUrl(Input::get('url'));
        if ($record)
        { // 存在
            return Redirect::action(get_class().'@create')
                ->with('shortened', $record->shortened);
        } // 不存在
        // 生成随机短码
        $shortened = mUrl::getShortened(Input::get('url'));
        if ($shortened)
        { // 成功
            return Redirect::action(get_class().'@create')
                ->with('shortened', $shortened);
        } // 失败
        return Redirect::action(get_class().'@create')
            ->with('dbError', '系统错误请稍后再试。')
            ->withInput();
    }


}