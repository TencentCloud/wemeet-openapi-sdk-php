<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.2
 */
namespace wemeet\openapi\core\authenticator;

use wemeet\openapi\core\Configuration;
use wemeet\openapi\core\Constant;
use wemeet\openapi\core\xhttp\ApiRequest;
use wemeet\openapi\core\ObjectSerializer;


// JWTAuthenticator JWT 鉴权器
class JWTAuthenticator implements Authentication
{

    protected Configuration $config;
    protected int $nonce;  // 此参数参与签名计算。随机正整数。SDK 默认自动随机生成。
    protected string $timestamp;  // 此参数参与签名计算。当前 UNIX 时间戳，可记录发起 API 请求的时间。SDK 默认当前时间戳。例如1529223702，单位为秒。注意：如果与服务器时间相差超过5分钟，会引起签名过期错误。
    protected string $action;  // 操作的接口名称。注意：某些接口不需要传递该参数，接口文档中会对此特别说明，此时即使传递该参数也不会生效。
    protected string $region;  // 地域参数，用来标识希望操作哪个地域的数据。注意：某些接口不需要传递该参数，接口文档中会对此特别说明，此时即使传递该参数也不会生效。
    protected string $signature;  // 放置由官网的签名方法产生的签名。SDK 默认自动生成，也可替换为自己生成符合标准的签名。
    /*
    * 启用账户通讯录，传入值必须为1，创建的会议可出现在用户的会议列表中。
    * 启用账户通讯录说明：
    *     1.通过 SSO 接入腾讯会议账号体系。
    *     2.通过调用接口创建企业用户。
    *     3.通过企业管理后台添加或批量导入企业用户。
    */
    protected string $registered;
    protected $headers;

    public function __construct(Configuration $config = null, int $nonce = 0, string $timestamp = "", string $action = "", string $region = "", string $signature = "", string $registered = "")
    {
        $this->config = $config ?? new Configuration();
        $this->nonce = $nonce;
        $this->timestamp = $timestamp;
        $this->action = $action;
        $this->region = $region;
        $this->signature = $signature;
        $this->registered = $registered;
        $this->headers = [];
    }

    public function withConfig(Configuration $config) {
        $this->config = $config;
        return $this;
    }

    public function AuthHeader(ApiRequest $apiRequest, string $method)
    {
        $headers = $apiRequest->getHeaders();
        if (!array_key_exists(Constant::CONTENT_TYPE, $headers))
            $this->setHeaders(Constant::CONTENT_TYPE, Constant::DEFAULT_CONTENT_TYPE);

        if ($this->config->getSecretId() == "") {
            throw new \InvalidArgumentException("JWT authenticator SecretId can't be empty");
        }
        $this->setHeaders(Constant::X_TC_KEY, $this->config->getSecretId());

        if ($this->config->getAppId() == "") {
            throw new \InvalidArgumentException("JWT authenticator AppId can't be empty");
        }
        $this->setHeaders(Constant::APP_ID, $this->config->getAppId());
        $this->setHeaders(Constant::SDK_ID, $this->config->getSdkId());

        if ($this->nonce == 0) {
            $tt = round(microtime(true) * 1000);
            // 生成一个范围在0到999999之间的随机数
            $randomNumber = rand(0, 999999);
            // 使用 sprintf 格式化为六位数
            $formattedRandomNumber = sprintf('%06d', $randomNumber);
            // 组合时间戳和随机数
            $this->nonce = $tt . $formattedRandomNumber;
        }
        $this->setHeaders(Constant::X_TC_NONCE, $this->nonce);

        if ($this->config->getVersion() != "") {
            $this->setHeaders(Constant::X_TC_VERSION, $this->config->getVersion());
        }

        if ($this->action != "") {
            $this->setHeaders(Constant::X_TC_ACTION, $this->action);
        }

        if ($this->region != "") {
            $this->setHeaders(Constant::X_TC_REGION, $this->region);
        }

        if ($this->registered == "") {
            $this->registered = "1";
        }
        $this->setHeaders(Constant::X_TC_REGISTERED, $this->registered);

        if ($this->timestamp == "") {
            $this->timestamp = (string)time();
        }
        $this->setHeaders(Constant::X_TC_TIMESTAMP, $this->timestamp);

        if ($this->signature == "") {
            $this->signature = $this->signature($apiRequest, $method);
        }
        $this->setHeaders(Constant::X_TC_SIGNATURE, $this->signature);

        $apiRequest->setHeader(array_merge($headers, $this->headers));
    }

    protected function setHeaders(string $key, string $value)
    {
        if (!array_key_exists($key, $this->headers)) {
            $this->headers[$key] = $value;
        }
    }

    // 生成签名
    protected function signature(ApiRequest $apiRequest, string $method)
    {
        if (str_contains($apiRequest->getHeaders()[Constant::CONTENT_TYPE], 'multipart/form-data')) {
            $requestBody = "";
        } else {
            $requestBody = (string)$apiRequest->getBody();
        }
        $signStr = sprintf(
            "%s\nX-TC-Key=%s&X-TC-Nonce=%s&X-TC-Timestamp=%s\n%s\n%s",
            $method,
            $this->config->getSecretId(),
            $this->nonce,
            $this->timestamp,
            $this->getUriPath($apiRequest),
            $requestBody,
        );

        $secretKey = $this->config->getSecretKey();

        // 使用 HMAC-SHA256
        $hash = hash_hmac('sha256', $signStr, $secretKey, true);

        // 将字节转换为十六进制字符串
        $hexHash = bin2hex($hash);

        // 进行 Base64 编码
        return base64_encode($hexHash);
    }

    public function getUriPath(ApiRequest $apiRequest)
    {
        $rawUrl = $apiRequest->getApiPath();
        if (!empty($apiRequest->getPathParams()->getParams())) {
            $rawUrl = ObjectSerializer::buildPathParam($apiRequest->getApiPath(), $apiRequest->getPathParams()->getParams());
        }
        $queryPath = $apiRequest->getQueryParams()->encode();
        if ($queryPath != "") {
            $rawUrl = sprintf("%s?%s", $rawUrl, $queryPath);
        }
        return $rawUrl;
    }
}