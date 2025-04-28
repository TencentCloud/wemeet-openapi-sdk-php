<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.2
 */
namespace wemeet\openapi\core;

use wemeet\openapi\core\xhttp\DefaultHttpClient;


class Configuration {

    protected string $version = '';  // 应用 App 的版本号，建议设置，以便灰度和查找问题。通过设置该字段，API 会把该版本信息传递给会议后台，以控制一些和 App 版本有关的特性。
    /*
     * 腾讯会议分配给企业的企业 ID。
     *
     * 企业管理员可以登录 腾讯会议官网，单击右上角用户中心，在左侧菜单栏中的企业管理 > 账户管理 > 账户信息中进行查看。
     *
     * 开发者可以单击右上角用户中心，在左侧菜单栏中的企业管理 > 高级  > REST API 应用信息中查看。
     */
    protected string $appId = '';
    /*
    * 用户子账号或开发的应用 ID。
    *
    * 企业管理员可以登录 腾讯会议官网，单击右上角用户中心，在左侧菜单栏中的企业管理 > 高级 > REST API 中进行查看（如存在 SdkId 则必须填写，早期申请 API 且未分配 SdkId 的客户可不填写）。
    */
    protected string $sdkId = '';
    protected string $secretId = '';  // 应用生成的 Secret ID。JWT 鉴权用。
    protected string $secretKey = '';  // 应用生成的 Secret Key。JWT 鉴权用。
    protected DefaultHttpClient $clt;  // wemeet 封装的 http client

    public function __construct(
        $version = '',
        $appId = '',
        $sdkId = '',
        $secretId = '',
        $secretKey = '',
        $clt = null
    ) {
        $this->version = $version;
        $this->appId = $appId;
        $this->sdkId = $sdkId;
        $this->secretId = $secretId;
        $this->secretKey = $secretKey;
        $this->clt = $clt ?? new DefaultHttpClient(Constant::OPEN_API_DOMAIN);
    }

    // Getter and Setter for $clt
    public function getClt(): DefaultHttpClient {
        return $this->clt;
    }

    public function setClt(DefaultHttpClient $clt): self {
        $this->clt = $clt;
        return $this;
    }

    // Getter and Setter for $version
    public function getVersion(): string {
        return $this->version;
    }

    public function setVersion(string $version): self {
        $this->version = $version;
        return $this; // 支持链式调用
    }

    // Getter and Setter for $appId
    public function getAppId(): string {
        return $this->appId;
    }

    public function setAppId(string $appId): self {
        $this->appId = $appId;
        return $this; // 支持链式调用
    }

    // Getter and Setter for $sdkId
    public function getSdkId(): string {
        return $this->sdkId;
    }

    public function setSdkId(string $sdkId): self {
        $this->sdkId = $sdkId;
        return $this; // 支持链式调用
    }

    // Getter and Setter for $secretId
    public function getSecretId(): string {
        return $this->secretId;
    }

    public function setSecretId(string $secretId): self {
        $this->secretId = $secretId;
        return $this; // 支持链式调用
    }

    // Getter and Setter for $secretKey
    public function getSecretKey(): string {
        return $this->secretKey;
    }

    public function setSecretKey(string $secretKey): self {
        $this->secretKey = $secretKey;
        return $this; // 支持链式调用
    }
}
