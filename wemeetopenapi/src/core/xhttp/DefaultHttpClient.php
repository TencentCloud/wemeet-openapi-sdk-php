<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.2
 */
namespace wemeet\openapi\core\xhttp;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use InvalidArgumentException;
use Exception;
use wemeet\openapi\core\authenticator\Authentication;


class DefaultHttpClient implements HttpClient {

    protected Client $client;
    protected string $host;
    protected string $protocol;

    public function __construct(string $host)
    {
        $this->host = $host;
    }

    public function withHttpClient(Client $client)
    {
        $this->client = $client;
        return $this;
    }

    public function withProtocol(string $protocol)
    {
        $this->protocol = $protocol;
        return $this;
    }

    public function doRequest(ApiRequest $request, string $method, array $options): ApiResponse
    {
        // 生成 url
        $uri = $request->generateUrl( sprintf("%s://%s", $this->protocol, $this->host));
        // 增加鉴权头
        foreach ($request->getAuthenticators() as $authenticator) {
            if (!$authenticator instanceof Authentication) {
                throw new InvalidArgumentException("All elements must implement the Authentication interface.");
            }
            $authenticator->AuthHeader($request, $method);
        }
        // 设置请求头
        $headers = array_merge($request->getHeaders(), ['http_errors' => false]);
        // 构造 requests http 请求
        $httpRequest = new Request($method, $uri, $headers, $request->getBody());
        // 执行发送请求
        try {
            $response = $this->client->send($httpRequest, $options);
        } catch (Exception $e) {
            throw new Exception("请求失败: " . $e->getMessage(), $e->getCode(), $e);
        }
        // 封装响应返回
        return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $response->getBody()->getContents());
    }

    public function get(ApiRequest $request, array $options): ApiResponse
    {
        return $this->doRequest($request, 'GET', $options);
    }

    public function post(ApiRequest $request, array $options): ApiResponse
    {
        return $this->doRequest($request, 'POST', $options);
    }

    public function put(ApiRequest $request, array $options): ApiResponse
    {
        return $this->doRequest($request, 'PUT', $options);
    }

    public function delete(ApiRequest $request, array $options): ApiResponse
    {
        return $this->doRequest($request, 'DELETE', $options);
    }
}