<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.2
 */
namespace wemeet\openapi\core\xhttp;


// DefaultHttpClient 封装 REST 标准客户端接口
interface HttpClient
{
    public function get(ApiRequest $request, array $options): ApiResponse;

    public function post(ApiRequest $request, array $options): ApiResponse;

    public function put(ApiRequest $request, array $options): ApiResponse;

    public function delete(ApiRequest $request, array $options): ApiResponse;
}