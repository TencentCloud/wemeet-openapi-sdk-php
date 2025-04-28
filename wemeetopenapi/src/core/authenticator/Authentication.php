<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.2
 */
namespace wemeet\openapi\core\authenticator;

use wemeet\openapi\core\xhttp\ApiRequest;


interface Authentication
{
    public function AuthHeader(ApiRequest $apiRequest, string $method);
}