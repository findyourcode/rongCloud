# server-sdk-php-composer
Rong Cloud Server SDK in PHP for Composer.

## 安装

* 推荐通过 composer 安装，使用 composer.json 声明依赖，或者运行下面的命令：

```bash
$ composer require findyourcode/rongcloud
```

* 直接下载安装，SDK 没有依赖其他第三方库，可直接下载引入使用。
* 直接抛出异常,SDK不再自行打印异常

## 使用方法
```php
include 'RongCloud.php';
$appKey = 'appKey';
$appSecret = 'appSecret';
$jsonPath = "jsonsource/";
...
    $rongCloud = new \RongCloud\RongCloud($appKey,$appSecret);
    $token = $rongCloud->user()->getToken('userId1', 'username', 'http://www.rongcloud.cn/images/logo.png');;
...
```

## 联系我们
- 如果希望帮助，请提交[工单](http://developer.rongcloud.cn/ticket), 或者 mailto:support.rongcloud.cn
- 如果发现了bug， 欢迎提交 [issue](https://github.com/findyourcode/rongCloud/issues)
- 如果要提交代码，欢迎提交 pull request

## 代码许可

The MIT License (MIT).
