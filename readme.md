laravel-4.1-quick-start-cn
=================

这是一个 laravel-4.1 的完整包（包含了 vendor 目录），常用的源码已经补充中文注释，方便大家快速的开始学习和体验 laravel 框架。

> 考虑到大部分的朋友有“下载完整包直接用于开发”的需求，项目做出了比较大的调整：  
> 1.取消先前加入的辅助元素、demo，最大程度的保持项目的纯净度。  
> 2.仅针对重要的注释做出对应式的翻译，也方便大家在项目之余学习一点英文。  
> 3.引入每个项目开发中必要的辅助工具。  

- **注意：**
  - 项目在原始的 laravel 基础上引入了两个开发中常用的依赖包。
    - [barryvdh/laravel-debugbar](https://github.com/barryvdh/laravel-debugbar)：laravel 调试工具栏。
    - [raveren/kint](https://github.com/raveren/kint)：PHP输出调试工具。
  - 整合了 laravel 基础语言包的中文部分。
    - [caouecs/Laravel4-lang](https://github.com/caouecs/Laravel4-lang)：laravel 基础语言包。

---

- [重要知识点](/mdDoc/important-points.md)
- [学习资料推荐](/mdDoc/learning-materials.md)
- [相关开源项目推荐](/mdDoc/open-source.md)
- [相关站点推荐](/mdDoc/related-sites.md)

---

> laravel 更新至 v4.1.31

---

## 跟着源码学框架

> laravel 框架本身对源码做了非常详细的注释，跟着源码学习可以更好的理解框架的运行流程。
> 大家可以配合下面的载入流程，查看源文件及其注释，加深对框架的理解。

- [/public/index.php](/public/index.php)
  - [/bootstrap/autoload.php](/bootstrap/autoload.php)
    - [/vendor/composer/autoload_real.php](/vendor/composer/autoload_real.php)
      - [深入解析](/mdDoc/depth-analysis/autoload_real.md)
  - [/bootstrap/start.php](/bootstrap/start.php)
    - [/vendor/laravel/framework/src/Illuminate/Foundation/start.php](/vendor/laravel/framework/src/Illuminate/Foundation/start.php)
      - 关闭原生 PHP 错误报告，防止系统信息泄露
      - 检测 PHP 是否开启 mcrypt 拓展
      - 检测是否处于测试环境中
      - 设置应用程序 Facade 实例
      - 注册了配置文件目录 app_path('config')
        - 注意：配置文件是按需加载的，仅在首次使用某配置时才载入相应配置文件
      - 注册应用程序异常处理
      - 设置默认时区 [ app/config/app.php -> timezone ]
      - 注册别名导入 [ app/config/app.php -> aliases ]
      - 启用 HTTP 方法覆盖，以支持 PUT 和 DELETE 表单请求
      - 注册核心服务提供商 [ app/config/app.php -> providers ]
      - 注册所有 provider 的 boot 方法
      - 载入全局启动文件 [/app/start/global.php](/app/start/global.php)
        - 载入过滤器文件[/app/filters.php](/app/filters.php)
      - 载入运行环境启动文件[/app/start/{$env}.php](/app/start/local.php)
      - 载入路由文件[/app/routes.php](/app/routes.php)













