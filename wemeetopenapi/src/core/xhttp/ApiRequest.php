<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.2
 */
namespace wemeet\openapi\core\xhttp;

use wemeet\openapi\core\ObjectSerializer;


// ApiRequest 请求对象
class ApiRequest {
    private string $apiPath;
    private mixed $body;
    private PathParams $pathParams;
    private QueryParams $queryParams;
    private array $headers;
    private array $authenticators;

    public function __construct(string $apiPath, mixed $body, PathParams $pathParams, QueryParams $queryParams, Array $headers, Array $authenticators)
    {
        $this->apiPath = $apiPath;
        $this->body = $body;
        $this->pathParams = $pathParams;
        $this->queryParams = $queryParams;
        $this->headers = $headers;
        $this->authenticators = $authenticators;
    }

    // 生成url
    public function generateUrl(string $baseUrl) {
        $rawUrl = $this->apiPath;
        if (!str_starts_with($rawUrl, 'http')) {
            $rawUrl = $baseUrl . $rawUrl;
        }
        // 构造路径参数
        $rawUrl = ObjectSerializer::buildPathParam($rawUrl, $this->pathParams->getParams());
        // 构造查询字符串
        $queryPath = $this->queryParams->encode();
        if ($queryPath != "") {
            $rawUrl = sprintf("%s?%s", $rawUrl, $queryPath);
        }
        return $rawUrl;
    }

    public function getApiPath(): string
    {
        return $this->apiPath;
    }

    public function getBody(): mixed
    {
        return $this->body;
    }

    public function getPathParams(): PathParams
    {
        return $this->pathParams;
    }

    public function getQueryParams(): QueryParams
    {
        return $this->queryParams;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function getAuthenticators(): array
    {
        return $this->authenticators;
    }

    public function setHeader(array $headers)
    {
        $this->headers = $headers;
    }
}

// PathParams 路径参数
class PathParams {
    protected array $params;

    function __construct(array $params)
    {
        $this->params = $params;
    }

    public function set(string $name, string $value)
    {
        $this->params[$name] = $value;
    }

    public function get(string $name)
    {
        return $this->params[$name];
    }

    public function getParams() {
        return $this->params;
    }
}


// QueryParams 查询参数
class QueryParams {
    protected array $params;

    function __construct(array $params)
    {
        $this->params = $params;
    }

    public function set(string $name, string $value)
    {
        $this->params[$name] = [$value];
    }

    public function get(string $name)
    {
        return $this->params[$name];
    }

    public function add(string $name, string $value)
    {
        $list = $this->params[$name];
        if (is_null($list)) {
            $this->set($name, $value);
        } else {
            $list[$name] = $value;
        }
    }

    public function encode()
    {
        if (empty($this->params)) {
            return '';
        } else {
            return ObjectSerializer::BuildQuery($this->params);
        }
    }

}
