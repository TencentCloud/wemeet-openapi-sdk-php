<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.2
 */
namespace wemeet\openapi\service\meeting_guest\api;

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


class MeetingGuestApi
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
     * Operation V1GuestsMeetingIdGet
     *
     * 查询会议嘉宾列表（通过会议 ID 查询）
     *
     */
     public function V1GuestsMeetingIdGet(ApiV1GuestsMeetingIdGetRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1GuestsMeetingIdGetResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/guests/{meeting_id}';

         $pathParams = [];
         if (empty($request->getMeetingId())) {
            throw new InvalidArgumentException('meeting_id is required and must be specified');
         }
         if ($request->getMeetingId() !== null) {
             $pathParams['meeting_id'] = $request->getMeetingId();
         }

         $queryParams = [];
         if (is_null($request->getUserid())) {
            throw new InvalidArgumentException("userid is required and must be specified");
         }
         if (is_null($request->getInstanceid())) {
            throw new InvalidArgumentException("instanceid is required and must be specified");
         }
         if ($request->getUserid() !== null) {
             $queryParams['userid'] = $request->getUserid();
         }
         if ($request->getInstanceid() !== null) {
             $queryParams['instanceid'] = $request->getInstanceid();
         }

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
             $response = $this->config->getClt()->get($apiRequest, $options);
             $statusCode = $response->getStatusCode();
             if ($statusCode >= 300) {
                 throw new ServiceException($response);
             } else {
                 return new ApiV1GuestsMeetingIdGetResponse($response);
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
     * Operation V1GuestsMeetingIdPut
     *
     * 修改会议嘉宾列表（通过会议 ID 修改）
     *
     */
     public function V1GuestsMeetingIdPut(ApiV1GuestsMeetingIdPutRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1GuestsMeetingIdPutResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/guests/{meeting_id}';

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
                 return new ApiV1GuestsMeetingIdPutResponse($response);
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

class ApiV1GuestsMeetingIdGetRequest {

    protected string|null $meeting_id = null;
    protected string|null $userid = null;
    protected string|null $instanceid = null;
    protected object|null $body = null;

    public function getMeetingId(): string|null  {
        return $this->meeting_id;
    }
    public function getUserid(): string|null  {
        return $this->userid;
    }
    public function getInstanceid(): string|null  {
        return $this->instanceid;
    }
    public function getBody(): object|null  {
        return $this->body;
    }


    public function withMeetingId(string $meeting_id): ApiV1GuestsMeetingIdGetRequest  {
        $this->meeting_id = $meeting_id;
        return $this;
    }

    public function withUserid(string $userid): ApiV1GuestsMeetingIdGetRequest  {
        $this->userid = $userid;
        return $this;
    }

    public function withInstanceid(string $instanceid): ApiV1GuestsMeetingIdGetRequest  {
        $this->instanceid = $instanceid;
        return $this;
    }
    public function withBody(object $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1GuestsMeetingIdGetResponse extends ApiResponse {

    protected \wemeet\openapi\service\meeting_guest\model\V1GuestsMeetingIdGet200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\meeting_guest\model\V1GuestsMeetingIdGet200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1GuestsMeetingIdPutRequest {

    protected string|null $meeting_id = null;
    protected \wemeet\openapi\service\meeting_guest\model\V1GuestsMeetingIdPutRequest $body;

    public function getMeetingId(): string|null  {
        return $this->meeting_id;
    }
    public function getBody(): \wemeet\openapi\service\meeting_guest\model\V1GuestsMeetingIdPutRequest  {
        return $this->body;
    }


    public function withMeetingId(string $meeting_id): ApiV1GuestsMeetingIdPutRequest  {
        $this->meeting_id = $meeting_id;
        return $this;
    }
    public function withBody(\wemeet\openapi\service\meeting_guest\model\V1GuestsMeetingIdPutRequest $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1GuestsMeetingIdPutResponse extends ApiResponse {

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

