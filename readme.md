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

> laravel 更新至 v4.1.29

---

## 跟着源码学框架

> laravel 框架本身对源码做了非常详细的注释，跟着源码学习可以更好的理解框架的运行流程。
> 大家可以配合下面的载入流程，查看源文件及其注释，加深对框架的理解。

- [/public/index.php](/public/index.php)
  - [/bootstrap/autoload.php](/bootstrap/autoload.php)
    - [/vendor/composer/autoload_real.php](/vendor/composer/autoload_real.php)

> 通过 `getLoader` 依次载入并处理了 /vendor/composer 目录下的5个索引文件：
  > include_paths.php
  > autoload_namespaces.php
  > autoload_psr4.php
  > autoload_classmap.php
  > autoload_files.php
> 分别对应着各资源包 composer.json 文件中的：
  > [include-path](https://github.com/5-say/composer-doc-cn/blob/master/cn-introduction/04-schema.md#include-path)

  - [/bootstrap/start.php](/bootstrap/start.php)
    - [/vendor/laravel/framework/src/Illuminate/Foundation/start.php](/vendor/laravel/framework/src/Illuminate/Foundation/start.php)
      - [/app/start/global.php](/app/start/global.php)
        - [/app/filters.php](/app/filters.php)
      - [/app/start/{$env}.php](/app/start/local.php)
      - [/app/routes.php](/app/routes.php)













