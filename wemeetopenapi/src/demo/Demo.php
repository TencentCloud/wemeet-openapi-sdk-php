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
        "userid" => "arvinzcai"
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