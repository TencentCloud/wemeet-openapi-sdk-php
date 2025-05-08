<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.4
 */
namespace wemeet\openapi\service\layout\api;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Utils;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Psr7\MultipartStream;
use InvalidArgumentException;
use Exception;
use wemeet\openapi\core\Configuration;
use wemeet\openapi\core\xhttp\HeaderSelector;
use wemeet\openapi\core\ObjectSerializer;
use wemeet\openapi\core\authenticator\Authentication;
use wemeet\openapi\core\exception\ClientException;
use wemeet\openapi\core\exception\ServiceException;
use wemeet\openapi\core\xhttp\ApiRequest;
use wemeet\openapi\core\xhttp\ApiResponse;
use wemeet\openapi\core\xhttp\PathParams;
use wemeet\openapi\core\xhttp\QueryParams;


class LayoutApi
{
    /**
     * @var ClientInterface
     */
    protected ClientInterface $client;

    /**
     * @var Configuration
     */
    protected Configuration $config;

    /**
     * @var HeaderSelector
     */
    protected HeaderSelector $headerSelector;

    public function __construct(
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->config = $config;
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * Operation V1MeetingsMeetingIdAdvancedLayoutsPost
     *
     * 添加自定义布局
     *
     */
     public function V1MeetingsMeetingIdAdvancedLayoutsPost(ApiV1MeetingsMeetingIdAdvancedLayoutsPostRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1MeetingsMeetingIdAdvancedLayoutsPostResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/meetings/{meeting_id}/advanced-layouts';

         $pathParams = [];
         if (empty($request->getMeetingId())) {
            throw new InvalidArgumentException('meeting_id is required and must be specified');
         }
         if ($request->getMeetingId() !== null) {
             $pathParams['meeting_id'] = $request->getMeetingId();
         }

         $queryParams = [];

         $requestBody = null;

         $formData = [
         ];
         if (!empty($formData)) {
             $requestBody = new MultipartStream($formData);
             $headers['Content-Type'] = 'multipart/form-data; boundary=' . $requestBody->getBoundary();
         }

         $requestBody = Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($request->getBody()));

         foreach ($authentications as $auth) {
             if (!$auth instanceof Authentication) {
                 throw new InvalidArgumentException("All elements must implement the Authentication interface.");
             }
             $auth->withConfig($this->config);
         }

         $apiRequest = new ApiRequest($resourcePath, $requestBody, new PathParams($pathParams), new QueryParams($queryParams), $headers, $authentications);

         try {
             $response = $this->config->getClt()->post($apiRequest, $options);
             $statusCode = $response->getStatusCode();
             if ($statusCode >= 300) {
                 throw new ServiceException($response);
             } else {
                 return new ApiV1MeetingsMeetingIdAdvancedLayoutsPostResponse($response);
             }
         } catch(ServiceException $e) {
             throw $e;
         } catch (ConnectException $e) {
             throw new ClientException(
                 $e->getMessage(),
                 $e->getCode(),
                 $e->getPrevious(),
             );
         } catch (Exception $e) {
             throw new Exception("发生了一个未知错误: " . $e->getMessage(), $e->getCode(), $e);
         }
     }

    /**
     * Operation V1MeetingsMeetingIdApplyingLayoutPut
     *
     * 应用布局
     *
     */
     public function V1MeetingsMeetingIdApplyingLayoutPut(ApiV1MeetingsMeetingIdApplyingLayoutPutRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1MeetingsMeetingIdApplyingLayoutPutResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/meetings/{meeting_id}/applying-layout';

         $pathParams = [];
         if (empty($request->getMeetingId())) {
            throw new InvalidArgumentException('meeting_id is required and must be specified');
         }
         if ($request->getMeetingId() !== null) {
             $pathParams['meeting_id'] = $request->getMeetingId();
         }

         $queryParams = [];

         $requestBody = null;

         $formData = [
         ];
         if (!empty($formData)) {
             $requestBody = new MultipartStream($formData);
             $headers['Content-Type'] = 'multipart/form-data; boundary=' . $requestBody->getBoundary();
         }

         $requestBody = Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($request->getBody()));

         foreach ($authentications as $auth) {
             if (!$auth instanceof Authentication) {
                 throw new InvalidArgumentException("All elements must implement the Authentication interface.");
             }
             $auth->withConfig($this->config);
         }

         $apiRequest = new ApiRequest($resourcePath, $requestBody, new PathParams($pathParams), new QueryParams($queryParams), $headers, $authentications);

         try {
             $response = $this->config->getClt()->put($apiRequest, $options);
             $statusCode = $response->getStatusCode();
             if ($statusCode >= 300) {
                 throw new ServiceException($response);
             } else {
                 return new ApiV1MeetingsMeetingIdApplyingLayoutPutResponse($response);
             }
         } catch(ServiceException $e) {
             throw $e;
         } catch (ConnectException $e) {
             throw new ClientException(
                 $e->getMessage(),
                 $e->getCode(),
                 $e->getPrevious(),
             );
         } catch (Exception $e) {
             throw new Exception("发生了一个未知错误: " . $e->getMessage(), $e->getCode(), $e);
         }
     }

    /**
     * Operation V1MeetingsMeetingIdLayoutsPost
     *
     * 添加会议布局
     *
     */
     public function V1MeetingsMeetingIdLayoutsPost(ApiV1MeetingsMeetingIdLayoutsPostRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1MeetingsMeetingIdLayoutsPostResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/meetings/{meeting_id}/layouts';

         $pathParams = [];
         if (empty($request->getMeetingId())) {
            throw new InvalidArgumentException('meeting_id is required and must be specified');
         }
         if ($request->getMeetingId() !== null) {
             $pathParams['meeting_id'] = $request->getMeetingId();
         }

         $queryParams = [];

         $requestBody = null;

         $formData = [
         ];
         if (!empty($formData)) {
             $requestBody = new MultipartStream($formData);
             $headers['Content-Type'] = 'multipart/form-data; boundary=' . $requestBody->getBoundary();
         }

         $requestBody = Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($request->getBody()));

         foreach ($authentications as $auth) {
             if (!$auth instanceof Authentication) {
                 throw new InvalidArgumentException("All elements must implement the Authentication interface.");
             }
             $auth->withConfig($this->config);
         }

         $apiRequest = new ApiRequest($resourcePath, $requestBody, new PathParams($pathParams), new QueryParams($queryParams), $headers, $authentications);

         try {
             $response = $this->config->getClt()->post($apiRequest, $options);
             $statusCode = $response->getStatusCode();
             if ($statusCode >= 300) {
                 throw new ServiceException($response);
             } else {
                 return new ApiV1MeetingsMeetingIdLayoutsPostResponse($response);
             }
         } catch(ServiceException $e) {
             throw $e;
         } catch (ConnectException $e) {
             throw new ClientException(
                 $e->getMessage(),
                 $e->getCode(),
                 $e->getPrevious(),
             );
         } catch (Exception $e) {
             throw new Exception("发生了一个未知错误: " . $e->getMessage(), $e->getCode(), $e);
         }
     }

}

class ApiV1MeetingsMeetingIdAdvancedLayoutsPostRequest {

    protected string|null $meeting_id = null;
    protected \wemeet\openapi\service\layout\model\V1MeetingsMeetingIdAdvancedLayoutsPostRequest $body;

    public function getMeetingId(): string|null  {
        return $this->meeting_id;
    }
    public function getBody(): \wemeet\openapi\service\layout\model\V1MeetingsMeetingIdAdvancedLayoutsPostRequest  {
        return $this->body;
    }


    public function withMeetingId(string $meeting_id): ApiV1MeetingsMeetingIdAdvancedLayoutsPostRequest  {
        $this->meeting_id = $meeting_id;
        return $this;
    }
    public function withBody(\wemeet\openapi\service\layout\model\V1MeetingsMeetingIdAdvancedLayoutsPostRequest $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1MeetingsMeetingIdAdvancedLayoutsPostResponse extends ApiResponse {

    protected \wemeet\openapi\service\layout\model\V1MeetingsMeetingIdAdvancedLayoutsPost200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\layout\model\V1MeetingsMeetingIdAdvancedLayoutsPost200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1MeetingsMeetingIdApplyingLayoutPutRequest {

    protected string|null $meeting_id = null;
    protected \wemeet\openapi\service\layout\model\V1MeetingsMeetingIdApplyingLayoutPutRequest $body;

    public function getMeetingId(): string|null  {
        return $this->meeting_id;
    }
    public function getBody(): \wemeet\openapi\service\layout\model\V1MeetingsMeetingIdApplyingLayoutPutRequest  {
        return $this->body;
    }


    public function withMeetingId(string $meeting_id): ApiV1MeetingsMeetingIdApplyingLayoutPutRequest  {
        $this->meeting_id = $meeting_id;
        return $this;
    }
    public function withBody(\wemeet\openapi\service\layout\model\V1MeetingsMeetingIdApplyingLayoutPutRequest $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1MeetingsMeetingIdApplyingLayoutPutResponse extends ApiResponse {

    protected object $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('object');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1MeetingsMeetingIdLayoutsPostRequest {

    protected string|null $meeting_id = null;
    protected \wemeet\openapi\service\layout\model\V1MeetingsMeetingIdLayoutsPostRequest $body;

    public function getMeetingId(): string|null  {
        return $this->meeting_id;
    }
    public function getBody(): \wemeet\openapi\service\layout\model\V1MeetingsMeetingIdLayoutsPostRequest  {
        return $this->body;
    }


    public function withMeetingId(string $meeting_id): ApiV1MeetingsMeetingIdLayoutsPostRequest  {
        $this->meeting_id = $meeting_id;
        return $this;
    }
    public function withBody(\wemeet\openapi\service\layout\model\V1MeetingsMeetingIdLayoutsPostRequest $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1MeetingsMeetingIdLayoutsPostResponse extends ApiResponse {

    protected \wemeet\openapi\service\layout\model\V1MeetingsMeetingIdLayoutsPost200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\layout\model\V1MeetingsMeetingIdLayoutsPost200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

