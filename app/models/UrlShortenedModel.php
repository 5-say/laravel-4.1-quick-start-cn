<?php

class UrlShortenedModel extends \Eloquent {

    /**
     * 表名
     * @var string
     */
    protected $table = 'url_shortened';

    /**
     * 集体赋值黑名单
     * @var array
     */
    protected $guarded = array();

    /**
     * 是否已经存在 URL 地址
     * @param  string  $url URL 地址
     * @return object|null
     */
    public static function hasUrl($url)
    {
        return self::where('url', $url)->first();
    }

    /**
     * 获取随机短码
     * @param  string  $url    URL 地址
     * @return string|false
     */
    public static function getShortened($url)
    {
        // 生成随机短码
        $shortened = str_random(5);
        // 查询数据库是否已存在
        if (self::where('shortened', $shortened)->first())
        { // 存在
            $shortened = self::getShortened($url);
        } // 不存在
        // 插入数据库
        if (self::create(array('url'=>$url, 'shortened'=>$shortened)))
        { // 插入成功
            return $shortened;
        } // 插入失败
        return false;
    }

    /**
     * 根据缩短码获取完整 URL
     * @param  string $shortenedCode 缩短码
     * @return string|false          完整的 URL 地址
     */
    public static function getRealUrl($shortenedCode)
    {
        $record = self::where('shortened', $shortenedCode)->first();
        if ($record)
        {
            return $record->url;
        }
        return false;
    }

    





}