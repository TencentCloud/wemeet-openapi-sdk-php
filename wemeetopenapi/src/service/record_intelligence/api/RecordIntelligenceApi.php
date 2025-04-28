<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.2
 */
namespace wemeet\openapi\service\record_intelligence\api;

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


class RecordIntelligenceApi
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
     * Operation V1SmartChaptersGet
     *
     * 智能章节
     *
     */
     public function V1SmartChaptersGet(ApiV1SmartChaptersGetRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1SmartChaptersGetResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/smart/chapters';

         $pathParams = [];

         $queryParams = [];
         if (is_null($request->getOperatorId())) {
            throw new InvalidArgumentException("operator_id is required and must be specified");
         }
         if (is_null($request->getOperatorIdType())) {
            throw new InvalidArgumentException("operator_id_type is required and must be specified");
         }
         if (is_null($request->getRecordFileId())) {
            throw new InvalidArgumentException("record_file_id is required and must be specified");
         }
         if ($request->getOperatorId() !== null) {
             $queryParams['operator_id'] = $request->getOperatorId();
         }
         if ($request->getOperatorIdType() !== null) {
             $queryParams['operator_id_type'] = $request->getOperatorIdType();
         }
         if ($request->getRecordFileId() !== null) {
             $queryParams['record_file_id'] = $request->getRecordFileId();
         }
         if ($request->getLang() !== null) {
             $queryParams['lang'] = $request->getLang();
         }
         if ($request->getPwd() !== null) {
             $queryParams['pwd'] = $request->getPwd();
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
                 return new ApiV1SmartChaptersGetResponse($response);
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
     * Operation V1SmartFullsummaryGet
     *
     * 智能总结
     *
     */
     public function V1SmartFullsummaryGet(ApiV1SmartFullsummaryGetRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1SmartFullsummaryGetResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/smart/fullsummary';

         $pathParams = [];

         $queryParams = [];
         if (is_null($request->getOperatorId())) {
            throw new InvalidArgumentException("operator_id is required and must be specified");
         }
         if (is_null($request->getOperatorIdType())) {
            throw new InvalidArgumentException("operator_id_type is required and must be specified");
         }
         if (is_null($request->getRecordFileId())) {
            throw new InvalidArgumentException("record_file_id is required and must be specified");
         }
         if ($request->getOperatorId() !== null) {
             $queryParams['operator_id'] = $request->getOperatorId();
         }
         if ($request->getOperatorIdType() !== null) {
             $queryParams['operator_id_type'] = $request->getOperatorIdType();
         }
         if ($request->getRecordFileId() !== null) {
             $queryParams['record_file_id'] = $request->getRecordFileId();
         }
         if ($request->getLang() !== null) {
             $queryParams['lang'] = $request->getLang();
         }
         if ($request->getPwd() !== null) {
             $queryParams['pwd'] = $request->getPwd();
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
                 return new ApiV1SmartFullsummaryGetResponse($response);
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
     * Operation V1SmartSpeakersGet
     *
     * 智能发言人
     *
     */
     public function V1SmartSpeakersGet(ApiV1SmartSpeakersGetRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1SmartSpeakersGetResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/smart/speakers';

         $pathParams = [];

         $queryParams = [];
         if (is_null($request->getOperatorId())) {
            throw new InvalidArgumentException("operator_id is required and must be specified");
         }
         if (is_null($request->getOperatorIdType())) {
            throw new InvalidArgumentException("operator_id_type is required and must be specified");
         }
         if (is_null($request->getRecordFileId())) {
            throw new InvalidArgumentException("record_file_id is required and must be specified");
         }
         if (is_null($request->getPage())) {
            throw new InvalidArgumentException("page is required and must be specified");
         }
         if (is_null($request->getPageSize())) {
            throw new InvalidArgumentException("page_size is required and must be specified");
         }
         if ($request->getOperatorId() !== null) {
             $queryParams['operator_id'] = $request->getOperatorId();
         }
         if ($request->getOperatorIdType() !== null) {
             $queryParams['operator_id_type'] = $request->getOperatorIdType();
         }
         if ($request->getRecordFileId() !== null) {
             $queryParams['record_file_id'] = $request->getRecordFileId();
         }
         if ($request->getPwd() !== null) {
             $queryParams['pwd'] = $request->getPwd();
         }
         if ($request->getPage() !== null) {
             $queryParams['page'] = $request->getPage();
         }
         if ($request->getPageSize() !== null) {
             $queryParams['page_size'] = $request->getPageSize();
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
                 return new ApiV1SmartSpeakersGetResponse($response);
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
     * Operation V1SmartTopicsGet
     *
     * 智能话题
     *
     */
     public function V1SmartTopicsGet(ApiV1SmartTopicsGetRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1SmartTopicsGetResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/smart/topics';

         $pathParams = [];

         $queryParams = [];
         if (is_null($request->getOperatorId())) {
            throw new InvalidArgumentException("operator_id is required and must be specified");
         }
         if (is_null($request->getOperatorIdType())) {
            throw new InvalidArgumentException("operator_id_type is required and must be specified");
         }
         if (is_null($request->getRecordFileId())) {
            throw new InvalidArgumentException("record_file_id is required and must be specified");
         }
         if ($request->getOperatorId() !== null) {
             $queryParams['operator_id'] = $request->getOperatorId();
         }
         if ($request->getOperatorIdType() !== null) {
             $queryParams['operator_id_type'] = $request->getOperatorIdType();
         }
         if ($request->getRecordFileId() !== null) {
             $queryParams['record_file_id'] = $request->getRecordFileId();
         }
         if ($request->getLang() !== null) {
             $queryParams['lang'] = $request->getLang();
         }
         if ($request->getPwd() !== null) {
             $queryParams['pwd'] = $request->getPwd();
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
                 return new ApiV1SmartTopicsGetResponse($response);
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

class ApiV1SmartChaptersGetRequest {

    protected string|null $operator_id = null;
    protected string|null $operator_id_type = null;
    protected string|null $record_file_id = null;
    protected string|null $lang = null;
    protected string|null $pwd = null;
    protected object|null $body = null;

    public function getOperatorId(): string|null  {
        return $this->operator_id;
    }
    public function getOperatorIdType(): string|null  {
        return $this->operator_id_type;
    }
    public function getRecordFileId(): string|null  {
        return $this->record_file_id;
    }
    public function getLang(): string|null  {
        return $this->lang;
    }
    public function getPwd(): string|null  {
        return $this->pwd;
    }
    public function getBody(): object|null  {
        return $this->body;
    }


    public function withOperatorId(string $operator_id): ApiV1SmartChaptersGetRequest  {
        $this->operator_id = $operator_id;
        return $this;
    }

    public function withOperatorIdType(string $operator_id_type): ApiV1SmartChaptersGetRequest  {
        $this->operator_id_type = $operator_id_type;
        return $this;
    }

    public function withRecordFileId(string $record_file_id): ApiV1SmartChaptersGetRequest  {
        $this->record_file_id = $record_file_id;
        return $this;
    }

    public function withLang(string $lang): ApiV1SmartChaptersGetRequest  {
        $this->lang = $lang;
        return $this;
    }

    public function withPwd(string $pwd): ApiV1SmartChaptersGetRequest  {
        $this->pwd = $pwd;
        return $this;
    }
    public function withBody(object $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1SmartChaptersGetResponse extends ApiResponse {

    protected \wemeet\openapi\service\record_intelligence\model\V1SmartChaptersGet200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\record_intelligence\model\V1SmartChaptersGet200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1SmartFullsummaryGetRequest {

    protected string|null $operator_id = null;
    protected string|null $operator_id_type = null;
    protected string|null $record_file_id = null;
    protected string|null $lang = null;
    protected string|null $pwd = null;
    protected object|null $body = null;

    public function getOperatorId(): string|null  {
        return $this->operator_id;
    }
    public function getOperatorIdType(): string|null  {
        return $this->operator_id_type;
    }
    public function getRecordFileId(): string|null  {
        return $this->record_file_id;
    }
    public function getLang(): string|null  {
        return $this->lang;
    }
    public function getPwd(): string|null  {
        return $this->pwd;
    }
    public function getBody(): object|null  {
        return $this->body;
    }


    public function withOperatorId(string $operator_id): ApiV1SmartFullsummaryGetRequest  {
        $this->operator_id = $operator_id;
        return $this;
    }

    public function withOperatorIdType(string $operator_id_type): ApiV1SmartFullsummaryGetRequest  {
        $this->operator_id_type = $operator_id_type;
        return $this;
    }

    public function withRecordFileId(string $record_file_id): ApiV1SmartFullsummaryGetRequest  {
        $this->record_file_id = $record_file_id;
        return $this;
    }

    public function withLang(string $lang): ApiV1SmartFullsummaryGetRequest  {
        $this->lang = $lang;
        return $this;
    }

    public function withPwd(string $pwd): ApiV1SmartFullsummaryGetRequest  {
        $this->pwd = $pwd;
        return $this;
    }
    public function withBody(object $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1SmartFullsummaryGetResponse extends ApiResponse {

    protected \wemeet\openapi\service\record_intelligence\model\V1SmartFullsummaryGet200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\record_intelligence\model\V1SmartFullsummaryGet200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1SmartSpeakersGetRequest {

    protected string|null $operator_id = null;
    protected string|null $operator_id_type = null;
    protected string|null $record_file_id = null;
    protected string|null $page = null;
    protected string|null $page_size = null;
    protected string|null $pwd = null;
    protected object|null $body = null;

    public function getOperatorId(): string|null  {
        return $this->operator_id;
    }
    public function getOperatorIdType(): string|null  {
        return $this->operator_id_type;
    }
    public function getRecordFileId(): string|null  {
        return $this->record_file_id;
    }
    public function getPage(): string|null  {
        return $this->page;
    }
    public function getPageSize(): string|null  {
        return $this->page_size;
    }
    public function getPwd(): string|null  {
        return $this->pwd;
    }
    public function getBody(): object|null  {
        return $this->body;
    }


    public function withOperatorId(string $operator_id): ApiV1SmartSpeakersGetRequest  {
        $this->operator_id = $operator_id;
        return $this;
    }

    public function withOperatorIdType(string $operator_id_type): ApiV1SmartSpeakersGetRequest  {
        $this->operator_id_type = $operator_id_type;
        return $this;
    }

    public function withRecordFileId(string $record_file_id): ApiV1SmartSpeakersGetRequest  {
        $this->record_file_id = $record_file_id;
        return $this;
    }

    public function withPage(string $page): ApiV1SmartSpeakersGetRequest  {
        $this->page = $page;
        return $this;
    }

    public function withPageSize(string $page_size): ApiV1SmartSpeakersGetRequest  {
        $this->page_size = $page_size;
        return $this;
    }

    public function withPwd(string $pwd): ApiV1SmartSpeakersGetRequest  {
        $this->pwd = $pwd;
        return $this;
    }
    public function withBody(object $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1SmartSpeakersGetResponse extends ApiResponse {

    protected \wemeet\openapi\service\record_intelligence\model\V1SmartSpeakersGet200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\record_intelligence\model\V1SmartSpeakersGet200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1SmartTopicsGetRequest {

    protected string|null $operator_id = null;
    protected string|null $operator_id_type = null;
    protected string|null $record_file_id = null;
    protected string|null $lang = null;
    protected string|null $pwd = null;
    protected object|null $body = null;

    public function getOperatorId(): string|null  {
        return $this->operator_id;
    }
    public function getOperatorIdType(): string|null  {
        return $this->operator_id_type;
    }
    public function getRecordFileId(): string|null  {
        return $this->record_file_id;
    }
    public function getLang(): string|null  {
        return $this->lang;
    }
    public function getPwd(): string|null  {
        return $this->pwd;
    }
    public function getBody(): object|null  {
        return $this->body;
    }


    public function withOperatorId(string $operator_id): ApiV1SmartTopicsGetRequest  {
        $this->operator_id = $operator_id;
        return $this;
    }

    public function withOperatorIdType(string $operator_id_type): ApiV1SmartTopicsGetRequest  {
        $this->operator_id_type = $operator_id_type;
        return $this;
    }

    public function withRecordFileId(string $record_file_id): ApiV1SmartTopicsGetRequest  {
        $this->record_file_id = $record_file_id;
        return $this;
    }

    public function withLang(string $lang): ApiV1SmartTopicsGetRequest  {
        $this->lang = $lang;
        return $this;
    }

    public function withPwd(string $pwd): ApiV1SmartTopicsGetRequest  {
        $this->pwd = $pwd;
        return $this;
    }
    public function withBody(object $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1SmartTopicsGetResponse extends ApiResponse {

    protected \wemeet\openapi\service\record_intelligence\model\V1SmartTopicsGet200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\record_intelligence\model\V1SmartTopicsGet200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

