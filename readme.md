laravel-4.1-quick-start-cn
=================

这是一个 laravel-4.1 的完整包（包含了 vendor 目录），常用的源码已经补充中文注释，方便大家快速的开始学习和体验 laravel 框架。

- **注意：** 此项目在原始的 laravel 基础上引入了两个开发中常用的依赖包。
  - [barryvdh/laravel-debugbar](https://github.com/barryvdh/laravel-debugbar)：laravel 调试工具栏。
  - [raveren/kint](https://github.com/raveren/kint)：PHP输出调试工具。
- 整合了 laravel 基础语言包的中文部分。
  - [caouecs/Laravel4-lang](https://github.com/caouecs/Laravel4-lang)



加入了一些辅助元素，本质上并没有对框架核心做任何变动。如果你需要原始的“完整包”，这里推荐 **痛在远方** 为大家打包的项目 [github.com/maliang/complete-laravel4](https://github.com/maliang/complete-laravel4)。

---

- [本项目加入的辅助元素](#difference)
- [Demo](#demo)
- [重要知识点](#important-points)
- [学习资料推荐](#learn)
- [相关开源项目推荐](#open)
- [相关站点推荐](#related-sites)

---


<a name="difference"></a>
## 本项目加入的辅助元素

- 约定了自定义函数库引入的位置。
- 约定了视图别名定义的位置。
- 对项目的静态资源路径做统一管理。
- 增加 migrate 数据库迁移的 MySQL 注释支持。
  - 详细内容请参阅这篇博文：[让 Laravel 4.1 的“数据库迁移”支持 MySQL 字段注释](http://my.oschina.net/5say/blog/186017)。
- 引入 laravel-debugbar 调试工具栏。
- 更多详细信息请点击 [different.md](mdDoc/different.md) 查看。
- 2014-03-07 引入 [VendorCleaner](https://github.com/5-say/VendorCleaner) 来改善 vendor 目录臃肿的问题。

## Demo

- 短链生成 - [点击查看说明](mdDoc/demoUrlShortened.md)
  - 源于 **袁维隆** 的 *[Laravel4快速上手教程](http://beta.zexeo.com/course/3) 19-22 讲* 稍做改动，建议配合视频学习。
  - 最近 **袁先生** 的网站已经打不开了，原因不明，而他曾经提到过希望以 **责修网** 为起点完成自己的创业，衷心的祝福他能够成功。
  - 这里为了让大家可以继续学习，已将视频转移到 [网盘](http://pan.baidu.com/s/1dDd4mnn)，希望 **袁先生** 不要介意。

<a name="important-points"></a>
## 重要知识点

- **Composer**
  - 作为一个被大量优秀框架所使用的依赖管理工具，有必要对其进行更加深入的了解，这有助于你更好的使用你的框架，而不必为一个 `update` 命令造成的怪异 bug 而困扰。
  - 这里为大家提供了官方文档的翻译，建议至少看完前3章的内容，如此便会有不小的收获。-- [Composer 中文文档](https://github.com/5-say/composer-doc-cn/blob/master/README.md)
- **PHP 依赖注入**
  - 如果你对 Laravel 的 IOC 云里雾里，建议阅读这篇文章，它足够详细并且简单易懂。-- [PHP 依赖注入](https://github.com/5-say/laravel-4.1-note/blob/master/04.知识拓展/PHP/PHP-依赖注入.md)
- **用 Laravel+Grunt+Bower 管理你的应用**
  - 非常值得一看，这篇文章将会帮助你从过去繁复的开发中解脱出来，借助开源的力量，更好的组织和维护你的应用。-- [grunt-bower-and-laravel](http://yansu.org/2014/03/10/grunt-bower-and-laravel.html)

<a name="learn"></a>
## 学习资料推荐

- **则修 上的 Laravel4快速上手教程** [http://beta.zexeo.com/course/3](http://beta.zexeo.com/course/3)
  - 中文视频，入门推荐，请注册后直接在线购买教程。
  - **注意：充值是免费的，请不要误解**  —— 感谢视频作者： **袁维隆**
- **Laravel 4 入门三讲**
  - [laravel 在启动的时候到底做了什么？](http://my.oschina.net/5say/blog/179199)
  - [laravel 的路由是如何完成注册的？](http://my.oschina.net/5say/blog/181104)
  - [laravel 在注册路由后还执行了哪些操作？](http://my.oschina.net/5say/blog/181178)
- **大量外语视频收录** [百度网盘共享](http://pan.baidu.com/share/home?uk=2348859066#category/type=0)
  - 建议有一定外语基础的朋友跟进，视频质量很高 —— 感谢资源分享者： **千万分之一**
- **CSDN 上的 Laravel 专栏** [http://blog.csdn.net/column/details/laravel.html](http://blog.csdn.net/column/details/laravel.html)

<a name="open"></a>
## 相关开源项目推荐

- **中文 Laravel4 教程** [github.com/maliang/LikeLaravel](https://github.com/maliang/LikeLaravel)
  - 是对官方文档的一份很好的补充，入门推荐 —— 主要维护者： **痛在远方**
- **Soul** [github.com/Menglr/Soul](https://github.com/Menglr/Soul)
  - 基于 Laravel 4.1 的微型论坛
- **Laravel Cheat Sheet（Laravel 速查表）** [github.com/JesseObrien/laravel-cheatsheet](https://github.com/JesseObrien/laravel-cheatsheet)
  - 已部署 [cheats.jesse-obrien.ca](http://cheats.jesse-obrien.ca/)
- **Laravel4-lang** [caouecs/Laravel4-lang](https://github.com/caouecs/Laravel4-lang)
  - 基础语言包，含中文。
- **基于 laravel 的本地文档项目** [5-say/laravel-local-website](https://github.com/5-say/laravel-local-website)
  - 本地化 laravel 文档 / API（方便查阅与更新）
  - 整合 golaravel.com 中文文档，源自**王赛**先生的开源项目 [golaravel/laravel4.1docs](https://github.com/golaravel/laravel4.1docs) 和 [golaravel/laravel4docs](https://github.com/golaravel/laravel4docs)。
  - 整合 Composer 中文文档 [5-say/composer-doc-cn](https://github.com/5-say/composer-doc-cn)
  - 整合 laravel-4.1 速查笔记 [5-say/laravel-4.1-note](https://github.com/5-say/laravel-4.1-note)
  - 整合 PHP-PSR-代码标准中文版 [hfcorriez/fig-standards](https://github.com/hfcorriez/fig-standards)
  - ...
- **基于 laravel 4.1 的简易博客实例** [5-say/laravel-4.1-simple-blog](https://github.com/5-say/laravel-4.1-simple-blog)
- **vendor 目录清理程序** [5-say/VendorCleaner](https://github.com/5-say/VendorCleaner)

<a name="related-sites"></a>
## 相关站点推荐

- [packagist.org](https://packagist.org/)
  - composer 资源包 
- [packalyst.com](http://packalyst.com/)
  - 针对性的搜集了 laravel 相关的资源包





