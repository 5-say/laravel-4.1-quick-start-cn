## 本项目加入的辅助元素（与原版的区别）

### `/bootstrap/autoload.php` 文件增加外部函数引入 *line [ 14-17 ]*
**由于官方对于外部函数的引入没有做明确的约定，经常造成新手的不解，特此补充。**

    if (file_exists($function = __DIR__.'/../app/functions.php'))
    {
        require $function;
    }

**相应的，增加了 `/app/functions.php` 文件。**

- 此文件中预定义的函数皆非必须，请自行酌情删改。
- 建议保留的函数：
 - `style($aliases, $attributes=array(), $interim='')`
 - `script($aliases, $attributes=array(), $interim='')`
 - `or_script($aliases, $attributes=array())`
 - *以上3个函数用于辅助模板开发。*

### 增加了 `/app/config/extend.php` 拓展配置文件

- 为配合上文提到的3个函数 `style()` `script()` `or_script()` 在这里定义了 “网站静态资源文件别名配置” 若不使用以上3个函数，那么这个文件也可以删除。

    'webAssets' => array(

        'cssAliases' => array(  //  样式文件别名配置

            'bootstrap-2.3.2'            => 'assets/bootstrap-2.3.2/css/bootstrap.min.css',
            'bootstrap-2.3.2-responsive' => 'assets/bootstrap-2.3.2/css/bootstrap-responsive.min.css',
            'bootstrap-3.0.3'            => 'assets/bootstrap-3.0.3/css/bootstrap.min.css',

        ),

        'jsAliases'  => array(  //  脚本文件别名配置

            'jquery-1.10.2'         => 'assets/js/jquery-1.10.2.min.js',
            'google::jquery-1.10.2' => 'http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js',
            'bootstrap-2.3.2'       => 'assets/bootstrap-2.3.2/js/bootstrap.min.js',
            'bootstrap-3.0.3'       => 'assets/bootstrap-3.0.3/js/bootstrap.min.js',

        ),

    ),

**模板中调用方法如下：**

    {{ style('bootstrap-3.0.3') }}
    {{ script(array('jquery-1.10.2', 'bootstrap-3.0.3')) }}

**若需引入网络公共资源，可以像下面这样做：**

    {{ script('google::jquery-1.10.2') }}
    <script>
        window.jQuery || document.write({{ or_script('jquery-1.10.2') }})
    </script>
    {{ script('bootstrap-3.0.3') }}

### `/app/config/view.php` 文件增加 “视图别名设置” 配置 *line [ 24-31 ]*
**由于官方对于“视图别名”的注册位置没有做明确的约定，容易照成团队开发中随处定义，造成他人维护的困难，为方便项目统一管理，特此补充。**

    'aliases' => array(

        'l'    => app_path('views/_layout'), // 基础模板
        'w'    => app_path('views/_widget'), // 小部件
        'sys'  => app_path('views/_system'), // 系统信息页面
        'mail' => app_path('views/_emails'), // 电子邮件模板

    ),

**相应的， `/app/start/global.php` 文件增加了视图别名的批量注册。** *line [ 11-15 ]*

    foreach (Config::get('view.aliases') as $aliases => $path)
    {
        $aliases AND $path AND View::addNamespace($aliases, $path);
    }
    unset($aliases, $path);

### 需要使用非 composer 第三方类库的，可以参考 `/app/start/global.php` 文件 *line [ 35 ]*

    app_path().'/library',         //  非 Composer 第三方类库 -- [非原生，建议添加]
