<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.2
 */
namespace wemeet\openapi\core\exception;

use Exception;
use JsonSerializable;
use wemeet\openapi\core\xhttp\ApiResponse;


// ServiceException 接口服务异常
class ServiceException extends Exception
{
    private ?ErrorInfo $errorInfo;
    private ApiResponse $response;

    public function __construct(ApiResponse $response)
    {
        $this->response = $response;

        // 尝试从 API 响应中反序列化错误信息
        try {
            $this->errorInfo = ErrorInfo::fromJson($response->getBody());
        } catch (\Exception $e) {
            $this->errorInfo = null; // 如果发生异常，不设置错误信息
        }
        $message = '';
        if ($this->errorInfo !== null) {
            $message = $this->errorInfo->message;
        }
        parent::__construct($message, $response->getStatusCode(), null);
    }

    public function getErrorInfo(): ?ErrorInfo
    {
        return $this->errorInfo;
    }

    public function getResponse(): ApiResponse
    {
        return $this->response;
    }

    public function __toString(): string
    {
        $sb = sprintf("http status code: %d", $this->response->getStatusCode());
        if ($this->errorInfo !== null) {
            $sb .= sprintf(", error code: %d, new error code: %d, message: %s",
                $this->errorInfo->errorCode,
                $this->errorInfo->newErrorCode,
                $this->errorInfo->message);
        } else {
            $sb .= ", response body: " . (string) $this->response->getBody();
        }

        return sprintf("[wemeet service error] %s", $sb);
    }
}

class ErrorInfo implements JsonSerializable
{
    public int $errorCode;
    public int $newErrorCode;
    public string $message;

    public function __construct(int $errorCode, int $newErrorCode, string $message)
    {
        $this->errorCode = $errorCode;
        $this->newErrorCode = $newErrorCode;
        $this->message = $message;
    }

    public static function fromJson(string $json): ?ErrorInfo
    {
        $data = json_decode($json, true);
        if (isset($data['error_info'])) {
            $info = $data['error_info'];
            return new self(
                $info['error_code'],
                $info['new_error_code'],
                $info['message']
            );
        }
        return null;
    }

    public function jsonSerialize(): array
    {
        return [
            'error_code' => $this->errorCode,
            'new_error_code' => $this->newErrorCode,
            'message' => $this->message,
        ];
    }

    public function __toString(): string
    {
        return sprintf("ErrorInfo{errorCode=%d, newErrorCode=%d, message='%s'}",
            $this->errorCode,
            $this->newErrorCode,
            $this->message);
    }
}