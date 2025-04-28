<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.2
 */
namespace wemeet\openapi\core\xhttp;

use wemeet\openapi\core\exception\ClientException;
use wemeet\openapi\core\ObjectSerializer;


// ApiResponse 接口响应
class ApiResponse {
    private int $statusCode;
    private array $headers;
    private string $body;

    public function __construct(int $statusCode, array $headers, string $body) {
        $this->statusCode = $statusCode;
        $this->headers = $headers;
        $this->body = $body;
    }

    // 将响应体反序列化为指定的类
    public function translate(string $class) {
        try {
            if ($class == 'object') {
                return json_decode($this->getBody());
            }
            $data = ObjectSerializer::deserialize($this->getBody(), $class, []);
        } catch (\Exception $e) {
            throw new ClientException(
                sprintf("http status code: %d, response: %s, err: %s",
                    $this->getStatusCode(),
                    $this->getBody(),
                    $e->getMessage()),
                $this->getStatusCode(),
                $e->getPrevious()
            );
        }
        return $data;
    }

    public function getStatusCode(): int {
        return $this->statusCode;
    }

    public function getHeaders(): array {
        return $this->headers;
    }

    public function getBody(): string {
        return $this->body;
    }
}
