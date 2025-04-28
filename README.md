# 简介
欢迎使用腾讯会议开发者工具套件（SDK），为方便 PHP 开发者调试和接入腾讯云会议 API，这里向您介绍适用于 PHP 的腾讯会议开发工具包，并提供首次使用开发工具包的简单示例。让您快速获取腾讯会议 PHP SDK 并开始调用。

# 依赖环境
1. 依赖环境：PHP 8.0 版本及以上。
2. 购买腾讯会议企业版获取 SecretID、SecretKey。SecretID 是用于标识 API 调用者的身份，SecretKey 是用于加密签名字符串和服务器端验证签名字符串的密钥 SecretKey 必须严格保管，避免泄露。

# 获取安装
有以下两种方式获取安装。
## 通过composer安装（推荐）
您可以通过 composer 安装方式将腾讯会议 OpenAPI PHP SDK 安装到您的项目中。
请首先在composer.json文件所在目录执行:
``` bash
composer require wemeet/openapi
```
安装完成后继续执行如下命令：
```bash
composer dump-autoload -o
```
即可完成安装

## 通过源码包安装
1. 前往 [Github 代码托管地址](https://github.com/TencentCloud/wemeet-openapi-sdk-php) 下载源码压缩包；
2. 解压源码包到您项目合适的位置；
3. 使用如下命令安装：
```bash
cd wemeet-openapi-sdk-php/wemeetopenapi
composer install
```

安装完成后继续执行如下命令：
```bash
composer dump-autoload -o
```
即可完成安装

# 示例
有以下两种方式获取示例。
## 将这里的示例代码拷贝到您的对应文件中：
```
<?php

require_once 'vendor/autoload.php';

use wemeet\openapi\Client;
use wemeet\openapi\core\Exception\ServiceException;
use wemeet\openapi\core\Authenticator\JWTAuthenticator;
use wemeet\openapi\service\meetings\api\ApiV1MeetingsPostRequest;
use wemeet\openapi\service\meetings\model\V1MeetingsPostRequest;

function main() {
    // 1.构造 client 客户端(jwt 鉴权需要配置 appId sdkId secretID 和 secretKey)
    $client = new Client();
    $client = $client->build()
        ->withAppId("20****8")
        ->withSdkId("26****2")
        ->withSecret("Fb****E", "Df****D");

    // 2.构造请求体
    $request = new ApiV1MeetingsPostRequest();
    $jsonArray = [
        "end_time" => (string)(time()+3600),
        "instanceid" => 1,
        "start_time" => (string)time(),
        "subject" => "测试会议",
        "type" => 1,
        "userid" => "userid"
    ];

    // 3.构造 JWT 鉴权器
    $tt = round(microtime(true) * 1000);
    // 生成一个范围在0到999999之间的随机数
    $randomNumber = rand(0, 999999);
    // 使用 sprintf 格式化为六位数
    $formattedRandomNumber = sprintf('%06d', $randomNumber);
    $nonce = $tt . $formattedRandomNumber;
    $JWTAuthenticator = new JWTAuthenticator(null, $nonce, (string)time());

    // 4.发送对应的请求
    $body = new V1MeetingsPostRequest($jsonArray);
    $request = $request->withBody($body);

    try {
        $response = $client->meetings()->V1MeetingsPost($request, [new JWTAuthenticator()]);
        var_dump($response->getData());
    } catch (ServiceException $e) {
        var_dump($e->getErrorInfo());
    }
}

main();
```

## wemeetopenapi/src/demo目录下有提供Demo.php，您可以将该文件移动到项目目录直接运行即可
如您下载了wemeet-openapi-sdk-php源码包，可以将Demo.php移动到wemeetopenapi目录下即可直接运行

注意使用前需要执行
```bash
composer install
```
安装必要的依赖包

```bash
cp wemeetopenapi/src/demo/Demo.php wemeetopenapi/
```