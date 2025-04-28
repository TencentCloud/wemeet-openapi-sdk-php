<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.2
 */
namespace wemeet\openapi\core\authenticator;

use InvalidArgumentException;
use wemeet\openapi\core\Configuration;
use wemeet\openapi\core\Constant;
use wemeet\openapi\core\xhttp\ApiRequest;


// OAuth2Authenticator OAuth2.0 鉴权器
class OAuth2Authenticator implements Authentication {

    protected Configuration $config;
    protected int $nonce;  // 此参数参与签名计算。随机正整数。SDK 默认自动随机生成。
    protected string $timestamp;  // 此参数参与签名计算。当前 UNIX 时间戳，可记录发起 API 请求的时间。SDK 默认当前时间戳。例如1529223702，单位为秒。如果与服务器时间相差超过5分钟，会引起签名过期错误。
    protected string $action;  // 操作的接口名称。注意：某些接口不需要传递该参数，接口文档中会对此特别说明，此时即使传递该参数也不会生效。
    protected string $region;  // 地域参数，用来标识希望操作哪个地域的数据。注意：某些接口不需要传递该参数，接口文档中会对此特别说明，此时即使传递该参数也不会生效。
    protected string $accessToken;  // OAuth2.0 鉴权成功后返回的 token 信息。
    protected string $openId;  // OAuth2.0 鉴权成功后的用户信息。
    protected $headers;

    public function __construct(Configuration $config = null, int $nonce = 0, string $timestamp = '', string $action = '', string $region = '', string $accessToken = '', string $openId = '')
    {
        $this->config = $config ?? new Configuration();
        $this->nonce = $nonce;
        $this->timestamp = $timestamp;
        $this->action = $action;
        $this->region = $region;
        $this->accessToken = $accessToken;
        $this->openId = $openId;
        $this->headers = [];
    }

    public function withConfig(Configuration $config) {
        $this->config = $config;
        return $this;
    }

    public function AuthHeader(ApiRequest $apiRequest, string $method)
    {
        $headers = $apiRequest->getHeaders();
        if (array_key_exists(Constant::CONTENT_TYPE, $headers))
            $this->setHeaders(Constant::CONTENT_TYPE, Constant::DEFAULT_CONTENT_TYPE);
        if (!empty($this->accessToken)) {
            $this->setHeaders(Constant::ACCESS_TOKEN, $this->accessToken);
            if (!empty($this->openId)) {
                $this->setHeaders(Constant::OPEN_ID, $this->openId);
                if ($this->nonce = 0) {
                    $tt = round(microtime(true) * 1000);
                    // 生成一个范围在0到999999之间的随机数
                    $randomNumber = rand(0, 999999);
                    // 使用 sprintf 格式化为六位数
                    $formattedRandomNumber = sprintf('%06d', $randomNumber);
                    // 组合时间戳和随机数
                    $this->nonce = $tt . $formattedRandomNumber;
                }
                $this->setHeaders(Constant::X_TC_NONCE, $this->nonce);

                if (empty($this->timestamp)) {
                    $this->timestamp = (string)time();
                }
                $this->setHeaders(Constant::X_TC_TIMESTAMP, $this->timestamp);

                if (!empty($this->action)) {
                    $this->setHeaders(Constant::X_TC_ACTION, $this->action);
                }

                if (!empty($this->region)) {
                    $this->setHeaders(Constant::X_TC_REGION, $this->region);
                }

                if (!empty($this->config->getVersion())) {
                    $this->setHeaders(Constant::X_TC_VERSION, $this->config->getVersion());
                }
                $apiRequest->setHeader(array_merge($headers, $this->headers));
            } else {
                throw new InvalidArgumentException("OAuth2 authenticator OpenId can't be empty");
            }
        } else {
            throw new InvalidArgumentException("OAuth2 authenticator AccessToken can't be empty");
        }
    }

    protected function setHeaders(string $key, string $value)
    {
        if (!array_key_exists($key, $this->headers)) {
            $this->headers[$key] = $value;
        }
    }
}