## Demo 短链生成 说明

### 相关文件

- `/app/controllers/UrlShortenedController.php`
- `/app/database/migrations/2013_12_18_000715_UrlShortened.php`
- `/app/models/UrlShortenedModel.php`
- `/app/views/_layout/base.blade.php`
- `/app/views/UrlShortened/create.blade.php`
- `/app/routes.php`

### 使用方法

1. 修改 `/app/config/database.php` 文件中的数据库配置，或建立对应数据库。
2. 执行 `php artisan migrate` 命令完成数据库迁移。
3. 打开网站首页。