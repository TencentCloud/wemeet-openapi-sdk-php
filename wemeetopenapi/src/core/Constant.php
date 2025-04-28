<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.2
 */
namespace wemeet\openapi\core;


class Constant
{
    const CONTENT_TYPE = "Content-Type";
    const USER_AGENT = "User-Agent";
    const X_TC_NONCE = "X-TC-Nonce";  // 随机正整数。
    const X_TC_KEY = "X-TC-Key";  // 应用安全凭证密钥对中的 SecretId。
    const X_TC_ACTION = "X-TC-Action";  // 操作的接口名称。
    const X_TC_REGION = "X-TC-Region";  // 地域参数，用来标识希望操作哪个地域的数据。
    const X_TC_TIMESTAMP = "X-TC-Timestamp";  // 当前 UNIX 时间戳，可记录发起 API 请求的时间。例如1529223702，单位为秒。
    const X_TC_VERSION = "X-TC-Version";  // 应用 App 的版本号，建议设置，以便灰度和查找问题。
    const X_TC_SIGNATURE = "X-TC-Signature";  // 签名方法产生的签名。
    const X_TC_REGISTERED = "X-TC-Registered";  // 启用账户通讯录，传入值必须为1，创建的会议可出现在用户的会议列表中。
    const APP_ID = "AppId";  // 腾讯会议分配给企业的企业 ID。
    const SDK_ID = "SdkId";  // 用户子账号或开发的应用 ID。
    const ACCESS_TOKEN = "AccessToken";  // OAuth2.0 鉴权成功后返回的 token 信息。
    const OPEN_ID = "OpenId";  // OAuth2.0 鉴权成功后的用户信息。
    const OPEN_API_DOMAIN = "api.meeting.qq.com";  // OpenAPIDomain 域名
    const DEFAULT_PROTOCOL = "https";  // DefaultProtocol 默认协议
    const APPLICATION_JSON = "application/json";
    const DEFAULT_CONTENT_TYPE = "application/json; charset=utf-8";
}

