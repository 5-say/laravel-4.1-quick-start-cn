<!DOCTYPE html>
<html lang="zh">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>密码重置</h2>

        <div>
            重置您的密码, 请点击链接并填写表单: {{ URL::to('password/reset', array($token)) }}.
        </div>
    </body>
</html>