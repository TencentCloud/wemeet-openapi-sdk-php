<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.2
 */
namespace wemeet\openapi\service\user_manager\api;

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


class UserManagerApi
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
     * Operation V1AuthUsersCancelAuthPut
     *
     * 取消用户授权
     *
     */
     public function V1AuthUsersCancelAuthPut(ApiV1AuthUsersCancelAuthPutRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1AuthUsersCancelAuthPutResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/auth-users/cancel-auth';

         $pathParams = [];

         $queryParams = [];
         if (is_null($request->getOperatorId())) {
            throw new InvalidArgumentException("operator_id is required and must be specified");
         }
         if (is_null($request->getOperatorIdType())) {
            throw new InvalidArgumentException("operator_id_type is required and must be specified");
         }
         if ($request->getOperatorId() !== null) {
             $queryParams['operator_id'] = $request->getOperatorId();
         }
         if ($request->getOperatorIdType() !== null) {
             $queryParams['operator_id_type'] = $request->getOperatorIdType();
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
             $response = $this->config->getClt()->put($apiRequest, $options);
             $statusCode = $response->getStatusCode();
             if ($statusCode >= 300) {
                 throw new ServiceException($response);
             } else {
                 return new ApiV1AuthUsersCancelAuthPutResponse($response);
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
     * Operation V1MeetingsMeetingIdMsOpenIdGet
     *
     * 查询 ms_open_id
     *
     */
     public function V1MeetingsMeetingIdMsOpenIdGet(ApiV1MeetingsMeetingIdMsOpenIdGetRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1MeetingsMeetingIdMsOpenIdGetResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/meetings/{meeting_id}/ms-open-id';

         $pathParams = [];
         if (empty($request->getMeetingId())) {
            throw new InvalidArgumentException('meeting_id is required and must be specified');
         }
         if ($request->getMeetingId() !== null) {
             $pathParams['meeting_id'] = $request->getMeetingId();
         }

         $queryParams = [];
         if (is_null($request->getOperatorId())) {
            throw new InvalidArgumentException("operator_id is required and must be specified");
         }
         if (is_null($request->getOperatorIdType())) {
            throw new InvalidArgumentException("operator_id_type is required and must be specified");
         }
         if ($request->getOperatorId() !== null) {
             $queryParams['operator_id'] = $request->getOperatorId();
         }
         if ($request->getOperatorIdType() !== null) {
             $queryParams['operator_id_type'] = $request->getOperatorIdType();
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
                 return new ApiV1MeetingsMeetingIdMsOpenIdGetResponse($response);
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
     * Operation V1PmiMeetingsPmiConfigGet
     *
     * 查询个人会议号配置信息
     *
     */
     public function V1PmiMeetingsPmiConfigGet(ApiV1PmiMeetingsPmiConfigGetRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1PmiMeetingsPmiConfigGetResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/pmi-meetings/pmi-config';

         $pathParams = [];

         $queryParams = [];
         if (is_null($request->getUserid())) {
            throw new InvalidArgumentException("userid is required and must be specified");
         }
         if ($request->getInstanceid() !== null) {
             $queryParams['instanceid'] = $request->getInstanceid();
         }
         if ($request->getUserid() !== null) {
             $queryParams['userid'] = $request->getUserid();
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
                 return new ApiV1PmiMeetingsPmiConfigGetResponse($response);
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
     * Operation V1PmiMeetingsPmiConfigPut
     *
     * 修改个人会议号配置信息
     *
     */
     public function V1PmiMeetingsPmiConfigPut(ApiV1PmiMeetingsPmiConfigPutRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1PmiMeetingsPmiConfigPutResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/pmi-meetings/pmi-config';

         $pathParams = [];

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
                 return new ApiV1PmiMeetingsPmiConfigPutResponse($response);
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
     * Operation V1UsersAccountAiAccountDelete
     *
     * 移除AI账号能力
     *
     */
     public function V1UsersAccountAiAccountDelete(ApiV1UsersAccountAiAccountDeleteRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1UsersAccountAiAccountDeleteResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/users/account/ai-account';

         $pathParams = [];

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
             $response = $this->config->getClt()->delete($apiRequest, $options);
             $statusCode = $response->getStatusCode();
             if ($statusCode >= 300) {
                 throw new ServiceException($response);
             } else {
                 return new ApiV1UsersAccountAiAccountDeleteResponse($response);
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
     * Operation V1UsersAccountAiAccountPost
     *
     * 添加AI账号能力
     *
     */
     public function V1UsersAccountAiAccountPost(ApiV1UsersAccountAiAccountPostRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1UsersAccountAiAccountPostResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/users/account/ai-account';

         $pathParams = [];

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
                 return new ApiV1UsersAccountAiAccountPostResponse($response);
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
     * Operation V1UsersAccountStatisticsGet
     *
     * 获取账号资源统计
     *
     */
     public function V1UsersAccountStatisticsGet(ApiV1UsersAccountStatisticsGetRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1UsersAccountStatisticsGetResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/users/account/statistics';

         $pathParams = [];

         $queryParams = [];
         if (is_null($request->getOperatorId())) {
            throw new InvalidArgumentException("operator_id is required and must be specified");
         }
         if (is_null($request->getOperatorIdType())) {
            throw new InvalidArgumentException("operator_id_type is required and must be specified");
         }
         if ($request->getOperatorId() !== null) {
             $queryParams['operator_id'] = $request->getOperatorId();
         }
         if ($request->getOperatorIdType() !== null) {
             $queryParams['operator_id_type'] = $request->getOperatorIdType();
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
                 return new ApiV1UsersAccountStatisticsGetResponse($response);
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
     * Operation V1UsersAdvanceListGet
     *
     * 获取用户列表（新）
     *
     */
     public function V1UsersAdvanceListGet(ApiV1UsersAdvanceListGetRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1UsersAdvanceListGetResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/users/advance/list';

         $pathParams = [];

         $queryParams = [];
         if (is_null($request->getOperatorId())) {
            throw new InvalidArgumentException("operator_id is required and must be specified");
         }
         if (is_null($request->getOperatorIdType())) {
            throw new InvalidArgumentException("operator_id_type is required and must be specified");
         }
         if ($request->getOperatorId() !== null) {
             $queryParams['operator_id'] = $request->getOperatorId();
         }
         if ($request->getOperatorIdType() !== null) {
             $queryParams['operator_id_type'] = $request->getOperatorIdType();
         }
         if ($request->getPos() !== null) {
             $queryParams['pos'] = $request->getPos();
         }
         if ($request->getSize() !== null) {
             $queryParams['size'] = $request->getSize();
         }
         if ($request->getStatus() !== null) {
             $queryParams['status'] = $request->getStatus();
         }
         if ($request->getUserAccountType() !== null) {
             $queryParams['user_account_type'] = $request->getUserAccountType();
         }
         if ($request->getEnableAiAccount() !== null) {
             $queryParams['enable_ai_account'] = $request->getEnableAiAccount();
         }
         if ($request->getDepartmentId() !== null) {
             $queryParams['department_id'] = $request->getDepartmentId();
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
                 return new ApiV1UsersAdvanceListGetResponse($response);
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
     * Operation V1UsersDelete
     *
     * 删除用户（通过 uuid 删除用户）
     *
     */
     public function V1UsersDelete(ApiV1UsersDeleteRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1UsersDeleteResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/users';

         $pathParams = [];

         $queryParams = [];
         if (is_null($request->getUuid())) {
            throw new InvalidArgumentException("uuid is required and must be specified");
         }
         if (is_null($request->getOperatorId())) {
            throw new InvalidArgumentException("operator_id is required and must be specified");
         }
         if (is_null($request->getOperatorIdType())) {
            throw new InvalidArgumentException("operator_id_type is required and must be specified");
         }
         if ($request->getUuid() !== null) {
             $queryParams['uuid'] = $request->getUuid();
         }
         if ($request->getOperatorId() !== null) {
             $queryParams['operator_id'] = $request->getOperatorId();
         }
         if ($request->getOperatorIdType() !== null) {
             $queryParams['operator_id_type'] = $request->getOperatorIdType();
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
             $response = $this->config->getClt()->delete($apiRequest, $options);
             $statusCode = $response->getStatusCode();
             if ($statusCode >= 300) {
                 throw new ServiceException($response);
             } else {
                 return new ApiV1UsersDeleteResponse($response);
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
     * Operation V1UsersDeleteTransferPost
     *
     * 用户资产转移
     *
     */
     public function V1UsersDeleteTransferPost(ApiV1UsersDeleteTransferPostRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1UsersDeleteTransferPostResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/users/delete-transfer';

         $pathParams = [];

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
                 return new ApiV1UsersDeleteTransferPostResponse($response);
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
     * Operation V1UsersGet
     *
     * 获取用户详情（通过 uuid 获取用户详情）
     *
     */
     public function V1UsersGet(ApiV1UsersGetRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1UsersGetResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/users';

         $pathParams = [];

         $queryParams = [];
         if (is_null($request->getUuid())) {
            throw new InvalidArgumentException("uuid is required and must be specified");
         }
         if (is_null($request->getOperatorId())) {
            throw new InvalidArgumentException("operator_id is required and must be specified");
         }
         if (is_null($request->getOperatorIdType())) {
            throw new InvalidArgumentException("operator_id_type is required and must be specified");
         }
         if ($request->getUuid() !== null) {
             $queryParams['uuid'] = $request->getUuid();
         }
         if ($request->getOperatorId() !== null) {
             $queryParams['operator_id'] = $request->getOperatorId();
         }
         if ($request->getOperatorIdType() !== null) {
             $queryParams['operator_id_type'] = $request->getOperatorIdType();
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
                 return new ApiV1UsersGetResponse($response);
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
     * Operation V1UsersInfoBasicGet
     *
     * 获取用户基本信息
     *
     */
     public function V1UsersInfoBasicGet(ApiV1UsersInfoBasicGetRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1UsersInfoBasicGetResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/users/info/basic';

         $pathParams = [];

         $queryParams = [];
         if (is_null($request->getOperatorId())) {
            throw new InvalidArgumentException("operator_id is required and must be specified");
         }
         if (is_null($request->getOperatorIdType())) {
            throw new InvalidArgumentException("operator_id_type is required and must be specified");
         }
         if ($request->getOperatorId() !== null) {
             $queryParams['operator_id'] = $request->getOperatorId();
         }
         if ($request->getOperatorIdType() !== null) {
             $queryParams['operator_id_type'] = $request->getOperatorIdType();
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
                 return new ApiV1UsersInfoBasicGetResponse($response);
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
     * Operation V1UsersInviteActivatePost
     *
     * 获取账号激活链接
     *
     */
     public function V1UsersInviteActivatePost(ApiV1UsersInviteActivatePostRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1UsersInviteActivatePostResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/users/invite-activate';

         $pathParams = [];

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
                 return new ApiV1UsersInviteActivatePostResponse($response);
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
     * Operation V1UsersInviteAuthPost
     *
     * 获取安全验证链接
     *
     */
     public function V1UsersInviteAuthPost(ApiV1UsersInviteAuthPostRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1UsersInviteAuthPostResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/users/invite-auth';

         $pathParams = [];

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
                 return new ApiV1UsersInviteAuthPostResponse($response);
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
     * Operation V1UsersListGet
     *
     * 获取用户列表
     *
     */
     public function V1UsersListGet(ApiV1UsersListGetRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1UsersListGetResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/users/list';

         $pathParams = [];

         $queryParams = [];
         if (is_null($request->getPage())) {
            throw new InvalidArgumentException("page is required and must be specified");
         }
         if (is_null($request->getPageSize())) {
            throw new InvalidArgumentException("page_size is required and must be specified");
         }
         if (is_null($request->getOperatorId())) {
            throw new InvalidArgumentException("operator_id is required and must be specified");
         }
         if (is_null($request->getOperatorIdType())) {
            throw new InvalidArgumentException("operator_id_type is required and must be specified");
         }
         if ($request->getPage() !== null) {
             $queryParams['page'] = $request->getPage();
         }
         if ($request->getPageSize() !== null) {
             $queryParams['page_size'] = $request->getPageSize();
         }
         if ($request->getOperatorId() !== null) {
             $queryParams['operator_id'] = $request->getOperatorId();
         }
         if ($request->getOperatorIdType() !== null) {
             $queryParams['operator_id_type'] = $request->getOperatorIdType();
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
                 return new ApiV1UsersListGetResponse($response);
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
     * Operation V1UsersOpenIdToUseridPost
     *
     * 自建应用与三方应用 ID 转换接口
     *
     */
     public function V1UsersOpenIdToUseridPost(ApiV1UsersOpenIdToUseridPostRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1UsersOpenIdToUseridPostResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/users/open-id-to-userid';

         $pathParams = [];

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
                 return new ApiV1UsersOpenIdToUseridPostResponse($response);
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
     * Operation V1UsersPost
     *
     * 创建用户
     *
     */
     public function V1UsersPost(ApiV1UsersPostRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1UsersPostResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/users';

         $pathParams = [];

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
                 return new ApiV1UsersPostResponse($response);
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
     * Operation V1UsersPut
     *
     * 更新用户（通过 uuid 更新用户）
     *
     */
     public function V1UsersPut(ApiV1UsersPutRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1UsersPutResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/users';

         $pathParams = [];

         $queryParams = [];
         if (is_null($request->getUuid())) {
            throw new InvalidArgumentException("uuid is required and must be specified");
         }
         if ($request->getUuid() !== null) {
             $queryParams['uuid'] = $request->getUuid();
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
             $response = $this->config->getClt()->put($apiRequest, $options);
             $statusCode = $response->getStatusCode();
             if ($statusCode >= 300) {
                 throw new ServiceException($response);
             } else {
                 return new ApiV1UsersPutResponse($response);
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
     * Operation V1UsersUseridDelete
     *
     * 删除用户（通过 userid 删除用户）
     *
     */
     public function V1UsersUseridDelete(ApiV1UsersUseridDeleteRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1UsersUseridDeleteResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/users/{userid}';

         $pathParams = [];
         if (empty($request->getUserid())) {
            throw new InvalidArgumentException('userid is required and must be specified');
         }
         if ($request->getUserid() !== null) {
             $pathParams['userid'] = $request->getUserid();
         }

         $queryParams = [];
         if (is_null($request->getOperatorId())) {
            throw new InvalidArgumentException("operator_id is required and must be specified");
         }
         if (is_null($request->getOperatorIdType())) {
            throw new InvalidArgumentException("operator_id_type is required and must be specified");
         }
         if ($request->getOperatorId() !== null) {
             $queryParams['operator_id'] = $request->getOperatorId();
         }
         if ($request->getOperatorIdType() !== null) {
             $queryParams['operator_id_type'] = $request->getOperatorIdType();
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
             $response = $this->config->getClt()->delete($apiRequest, $options);
             $statusCode = $response->getStatusCode();
             if ($statusCode >= 300) {
                 throw new ServiceException($response);
             } else {
                 return new ApiV1UsersUseridDeleteResponse($response);
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
     * Operation V1UsersUseridEnablePut
     *
     * 启用与禁用用户
     *
     */
     public function V1UsersUseridEnablePut(ApiV1UsersUseridEnablePutRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1UsersUseridEnablePutResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/users/{userid}/enable';

         $pathParams = [];
         if (empty($request->getUserid())) {
            throw new InvalidArgumentException('userid is required and must be specified');
         }
         if ($request->getUserid() !== null) {
             $pathParams['userid'] = $request->getUserid();
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
                 return new ApiV1UsersUseridEnablePutResponse($response);
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
     * Operation V1UsersUseridGet
     *
     * 获取用户详情（通过 userid 获取用户详情）
     *
     */
     public function V1UsersUseridGet(ApiV1UsersUseridGetRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1UsersUseridGetResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/users/{userid}';

         $pathParams = [];
         if (empty($request->getUserid())) {
            throw new InvalidArgumentException('userid is required and must be specified');
         }
         if ($request->getUserid() !== null) {
             $pathParams['userid'] = $request->getUserid();
         }

         $queryParams = [];
         if (is_null($request->getOperatorId())) {
            throw new InvalidArgumentException("operator_id is required and must be specified");
         }
         if (is_null($request->getOperatorIdType())) {
            throw new InvalidArgumentException("operator_id_type is required and must be specified");
         }
         if ($request->getOperatorId() !== null) {
             $queryParams['operator_id'] = $request->getOperatorId();
         }
         if ($request->getOperatorIdType() !== null) {
             $queryParams['operator_id_type'] = $request->getOperatorIdType();
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
                 return new ApiV1UsersUseridGetResponse($response);
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
     * Operation V1UsersUseridInviteActivatePut
     *
     * 发送用户激活邀请
     *
     */
     public function V1UsersUseridInviteActivatePut(ApiV1UsersUseridInviteActivatePutRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1UsersUseridInviteActivatePutResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/users/{userid}/invite-activate';

         $pathParams = [];
         if (empty($request->getUserid())) {
            throw new InvalidArgumentException('userid is required and must be specified');
         }
         if ($request->getUserid() !== null) {
             $pathParams['userid'] = $request->getUserid();
         }

         $queryParams = [];
         if (is_null($request->getOperatorId())) {
            throw new InvalidArgumentException("operator_id is required and must be specified");
         }
         if (is_null($request->getOperatorIdType())) {
            throw new InvalidArgumentException("operator_id_type is required and must be specified");
         }
         if ($request->getOperatorId() !== null) {
             $queryParams['operator_id'] = $request->getOperatorId();
         }
         if ($request->getOperatorIdType() !== null) {
             $queryParams['operator_id_type'] = $request->getOperatorIdType();
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
             $response = $this->config->getClt()->put($apiRequest, $options);
             $statusCode = $response->getStatusCode();
             if ($statusCode >= 300) {
                 throw new ServiceException($response);
             } else {
                 return new ApiV1UsersUseridInviteActivatePutResponse($response);
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
     * Operation V1UsersUseridInviteAuthPut
     *
     * 用户安全验证
     *
     */
     public function V1UsersUseridInviteAuthPut(ApiV1UsersUseridInviteAuthPutRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1UsersUseridInviteAuthPutResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/users/{userid}/invite-auth';

         $pathParams = [];
         if (empty($request->getUserid())) {
            throw new InvalidArgumentException('userid is required and must be specified');
         }
         if ($request->getUserid() !== null) {
             $pathParams['userid'] = $request->getUserid();
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
                 return new ApiV1UsersUseridInviteAuthPutResponse($response);
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
     * Operation V1UsersUseridPut
     *
     * 更新用户（通过 userid 更新用户）
     *
     */
     public function V1UsersUseridPut(ApiV1UsersUseridPutRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1UsersUseridPutResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/users/{userid}';

         $pathParams = [];
         if (empty($request->getUserid())) {
            throw new InvalidArgumentException('userid is required and must be specified');
         }
         if ($request->getUserid() !== null) {
             $pathParams['userid'] = $request->getUserid();
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
                 return new ApiV1UsersUseridPutResponse($response);
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

class ApiV1AuthUsersCancelAuthPutRequest {

    protected string|null $operator_id = null;
    protected string|null $operator_id_type = null;
    protected object|null $body = null;

    public function getOperatorId(): string|null  {
        return $this->operator_id;
    }
    public function getOperatorIdType(): string|null  {
        return $this->operator_id_type;
    }
    public function getBody(): object|null  {
        return $this->body;
    }


    public function withOperatorId(string $operator_id): ApiV1AuthUsersCancelAuthPutRequest  {
        $this->operator_id = $operator_id;
        return $this;
    }

    public function withOperatorIdType(string $operator_id_type): ApiV1AuthUsersCancelAuthPutRequest  {
        $this->operator_id_type = $operator_id_type;
        return $this;
    }
    public function withBody(object $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1AuthUsersCancelAuthPutResponse extends ApiResponse {

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

class ApiV1MeetingsMeetingIdMsOpenIdGetRequest {

    protected string|null $meeting_id = null;
    protected string|null $operator_id = null;
    protected string|null $operator_id_type = null;
    protected object|null $body = null;

    public function getMeetingId(): string|null  {
        return $this->meeting_id;
    }
    public function getOperatorId(): string|null  {
        return $this->operator_id;
    }
    public function getOperatorIdType(): string|null  {
        return $this->operator_id_type;
    }
    public function getBody(): object|null  {
        return $this->body;
    }


    public function withMeetingId(string $meeting_id): ApiV1MeetingsMeetingIdMsOpenIdGetRequest  {
        $this->meeting_id = $meeting_id;
        return $this;
    }

    public function withOperatorId(string $operator_id): ApiV1MeetingsMeetingIdMsOpenIdGetRequest  {
        $this->operator_id = $operator_id;
        return $this;
    }

    public function withOperatorIdType(string $operator_id_type): ApiV1MeetingsMeetingIdMsOpenIdGetRequest  {
        $this->operator_id_type = $operator_id_type;
        return $this;
    }
    public function withBody(object $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1MeetingsMeetingIdMsOpenIdGetResponse extends ApiResponse {

    protected \wemeet\openapi\service\user_manager\model\V1MeetingsMeetingIdMsOpenIdGet200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\user_manager\model\V1MeetingsMeetingIdMsOpenIdGet200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1PmiMeetingsPmiConfigGetRequest {

    protected string|null $userid = null;
    protected string|null $instanceid = null;
    protected object|null $body = null;

    public function getUserid(): string|null  {
        return $this->userid;
    }
    public function getInstanceid(): string|null  {
        return $this->instanceid;
    }
    public function getBody(): object|null  {
        return $this->body;
    }


    public function withUserid(string $userid): ApiV1PmiMeetingsPmiConfigGetRequest  {
        $this->userid = $userid;
        return $this;
    }

    public function withInstanceid(string $instanceid): ApiV1PmiMeetingsPmiConfigGetRequest  {
        $this->instanceid = $instanceid;
        return $this;
    }
    public function withBody(object $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1PmiMeetingsPmiConfigGetResponse extends ApiResponse {

    protected \wemeet\openapi\service\user_manager\model\V1PmiMeetingsPmiConfigGet200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\user_manager\model\V1PmiMeetingsPmiConfigGet200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1PmiMeetingsPmiConfigPutRequest {

    protected \wemeet\openapi\service\user_manager\model\V1PmiMeetingsPmiConfigPutRequest $body;

    public function getBody(): \wemeet\openapi\service\user_manager\model\V1PmiMeetingsPmiConfigPutRequest  {
        return $this->body;
    }

    public function withBody(\wemeet\openapi\service\user_manager\model\V1PmiMeetingsPmiConfigPutRequest $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1PmiMeetingsPmiConfigPutResponse extends ApiResponse {

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

class ApiV1UsersAccountAiAccountDeleteRequest {

    protected \wemeet\openapi\service\user_manager\model\V1UsersAccountAiAccountDeleteRequest $body;

    public function getBody(): \wemeet\openapi\service\user_manager\model\V1UsersAccountAiAccountDeleteRequest  {
        return $this->body;
    }

    public function withBody(\wemeet\openapi\service\user_manager\model\V1UsersAccountAiAccountDeleteRequest $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1UsersAccountAiAccountDeleteResponse extends ApiResponse {

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

class ApiV1UsersAccountAiAccountPostRequest {

    protected \wemeet\openapi\service\user_manager\model\V1UsersAccountAiAccountPostRequest $body;

    public function getBody(): \wemeet\openapi\service\user_manager\model\V1UsersAccountAiAccountPostRequest  {
        return $this->body;
    }

    public function withBody(\wemeet\openapi\service\user_manager\model\V1UsersAccountAiAccountPostRequest $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1UsersAccountAiAccountPostResponse extends ApiResponse {

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

class ApiV1UsersAccountStatisticsGetRequest {

    protected string|null $operator_id = null;
    protected string|null $operator_id_type = null;
    protected object|null $body = null;

    public function getOperatorId(): string|null  {
        return $this->operator_id;
    }
    public function getOperatorIdType(): string|null  {
        return $this->operator_id_type;
    }
    public function getBody(): object|null  {
        return $this->body;
    }


    public function withOperatorId(string $operator_id): ApiV1UsersAccountStatisticsGetRequest  {
        $this->operator_id = $operator_id;
        return $this;
    }

    public function withOperatorIdType(string $operator_id_type): ApiV1UsersAccountStatisticsGetRequest  {
        $this->operator_id_type = $operator_id_type;
        return $this;
    }
    public function withBody(object $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1UsersAccountStatisticsGetResponse extends ApiResponse {

    protected \wemeet\openapi\service\user_manager\model\V1UsersAccountStatisticsGet200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\user_manager\model\V1UsersAccountStatisticsGet200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1UsersAdvanceListGetRequest {

    protected string|null $operator_id = null;
    protected string|null $operator_id_type = null;
    protected string|null $pos = null;
    protected string|null $size = null;
    protected string|null $status = null;
    protected string|null $user_account_type = null;
    protected string|null $enable_ai_account = null;
    protected string|null $department_id = null;
    protected object|null $body = null;

    public function getOperatorId(): string|null  {
        return $this->operator_id;
    }
    public function getOperatorIdType(): string|null  {
        return $this->operator_id_type;
    }
    public function getPos(): string|null  {
        return $this->pos;
    }
    public function getSize(): string|null  {
        return $this->size;
    }
    public function getStatus(): string|null  {
        return $this->status;
    }
    public function getUserAccountType(): string|null  {
        return $this->user_account_type;
    }
    public function getEnableAiAccount(): string|null  {
        return $this->enable_ai_account;
    }
    public function getDepartmentId(): string|null  {
        return $this->department_id;
    }
    public function getBody(): object|null  {
        return $this->body;
    }


    public function withOperatorId(string $operator_id): ApiV1UsersAdvanceListGetRequest  {
        $this->operator_id = $operator_id;
        return $this;
    }

    public function withOperatorIdType(string $operator_id_type): ApiV1UsersAdvanceListGetRequest  {
        $this->operator_id_type = $operator_id_type;
        return $this;
    }

    public function withPos(string $pos): ApiV1UsersAdvanceListGetRequest  {
        $this->pos = $pos;
        return $this;
    }

    public function withSize(string $size): ApiV1UsersAdvanceListGetRequest  {
        $this->size = $size;
        return $this;
    }

    public function withStatus(string $status): ApiV1UsersAdvanceListGetRequest  {
        $this->status = $status;
        return $this;
    }

    public function withUserAccountType(string $user_account_type): ApiV1UsersAdvanceListGetRequest  {
        $this->user_account_type = $user_account_type;
        return $this;
    }

    public function withEnableAiAccount(string $enable_ai_account): ApiV1UsersAdvanceListGetRequest  {
        $this->enable_ai_account = $enable_ai_account;
        return $this;
    }

    public function withDepartmentId(string $department_id): ApiV1UsersAdvanceListGetRequest  {
        $this->department_id = $department_id;
        return $this;
    }
    public function withBody(object $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1UsersAdvanceListGetResponse extends ApiResponse {

    protected \wemeet\openapi\service\user_manager\model\V1UsersAdvanceListGet200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\user_manager\model\V1UsersAdvanceListGet200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1UsersDeleteRequest {

    protected string|null $uuid = null;
    protected string|null $operator_id = null;
    protected string|null $operator_id_type = null;
    protected object|null $body = null;

    public function getUuid(): string|null  {
        return $this->uuid;
    }
    public function getOperatorId(): string|null  {
        return $this->operator_id;
    }
    public function getOperatorIdType(): string|null  {
        return $this->operator_id_type;
    }
    public function getBody(): object|null  {
        return $this->body;
    }


    public function withUuid(string $uuid): ApiV1UsersDeleteRequest  {
        $this->uuid = $uuid;
        return $this;
    }

    public function withOperatorId(string $operator_id): ApiV1UsersDeleteRequest  {
        $this->operator_id = $operator_id;
        return $this;
    }

    public function withOperatorIdType(string $operator_id_type): ApiV1UsersDeleteRequest  {
        $this->operator_id_type = $operator_id_type;
        return $this;
    }
    public function withBody(object $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1UsersDeleteResponse extends ApiResponse {

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

class ApiV1UsersDeleteTransferPostRequest {

    protected \wemeet\openapi\service\user_manager\model\V1UsersDeleteTransferPostRequest $body;

    public function getBody(): \wemeet\openapi\service\user_manager\model\V1UsersDeleteTransferPostRequest  {
        return $this->body;
    }

    public function withBody(\wemeet\openapi\service\user_manager\model\V1UsersDeleteTransferPostRequest $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1UsersDeleteTransferPostResponse extends ApiResponse {

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

class ApiV1UsersGetRequest {

    protected string|null $uuid = null;
    protected string|null $operator_id = null;
    protected string|null $operator_id_type = null;
    protected object|null $body = null;

    public function getUuid(): string|null  {
        return $this->uuid;
    }
    public function getOperatorId(): string|null  {
        return $this->operator_id;
    }
    public function getOperatorIdType(): string|null  {
        return $this->operator_id_type;
    }
    public function getBody(): object|null  {
        return $this->body;
    }


    public function withUuid(string $uuid): ApiV1UsersGetRequest  {
        $this->uuid = $uuid;
        return $this;
    }

    public function withOperatorId(string $operator_id): ApiV1UsersGetRequest  {
        $this->operator_id = $operator_id;
        return $this;
    }

    public function withOperatorIdType(string $operator_id_type): ApiV1UsersGetRequest  {
        $this->operator_id_type = $operator_id_type;
        return $this;
    }
    public function withBody(object $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1UsersGetResponse extends ApiResponse {

    protected \wemeet\openapi\service\user_manager\model\V1UsersGet200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\user_manager\model\V1UsersGet200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1UsersInfoBasicGetRequest {

    protected string|null $operator_id = null;
    protected string|null $operator_id_type = null;
    protected object|null $body = null;

    public function getOperatorId(): string|null  {
        return $this->operator_id;
    }
    public function getOperatorIdType(): string|null  {
        return $this->operator_id_type;
    }
    public function getBody(): object|null  {
        return $this->body;
    }


    public function withOperatorId(string $operator_id): ApiV1UsersInfoBasicGetRequest  {
        $this->operator_id = $operator_id;
        return $this;
    }

    public function withOperatorIdType(string $operator_id_type): ApiV1UsersInfoBasicGetRequest  {
        $this->operator_id_type = $operator_id_type;
        return $this;
    }
    public function withBody(object $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1UsersInfoBasicGetResponse extends ApiResponse {

    protected \wemeet\openapi\service\user_manager\model\V1UsersInfoBasicGet200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\user_manager\model\V1UsersInfoBasicGet200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1UsersInviteActivatePostRequest {

    protected \wemeet\openapi\service\user_manager\model\V1UsersInviteActivatePostRequest $body;

    public function getBody(): \wemeet\openapi\service\user_manager\model\V1UsersInviteActivatePostRequest  {
        return $this->body;
    }

    public function withBody(\wemeet\openapi\service\user_manager\model\V1UsersInviteActivatePostRequest $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1UsersInviteActivatePostResponse extends ApiResponse {

    protected \wemeet\openapi\service\user_manager\model\V1UsersInviteActivatePost200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\user_manager\model\V1UsersInviteActivatePost200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1UsersInviteAuthPostRequest {

    protected \wemeet\openapi\service\user_manager\model\V1UsersInviteAuthPostRequest $body;

    public function getBody(): \wemeet\openapi\service\user_manager\model\V1UsersInviteAuthPostRequest  {
        return $this->body;
    }

    public function withBody(\wemeet\openapi\service\user_manager\model\V1UsersInviteAuthPostRequest $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1UsersInviteAuthPostResponse extends ApiResponse {

    protected \wemeet\openapi\service\user_manager\model\V1UsersInviteAuthPost200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\user_manager\model\V1UsersInviteAuthPost200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1UsersListGetRequest {

    protected string|null $page = null;
    protected string|null $page_size = null;
    protected string|null $operator_id = null;
    protected string|null $operator_id_type = null;
    protected object|null $body = null;

    public function getPage(): string|null  {
        return $this->page;
    }
    public function getPageSize(): string|null  {
        return $this->page_size;
    }
    public function getOperatorId(): string|null  {
        return $this->operator_id;
    }
    public function getOperatorIdType(): string|null  {
        return $this->operator_id_type;
    }
    public function getBody(): object|null  {
        return $this->body;
    }


    public function withPage(string $page): ApiV1UsersListGetRequest  {
        $this->page = $page;
        return $this;
    }

    public function withPageSize(string $page_size): ApiV1UsersListGetRequest  {
        $this->page_size = $page_size;
        return $this;
    }

    public function withOperatorId(string $operator_id): ApiV1UsersListGetRequest  {
        $this->operator_id = $operator_id;
        return $this;
    }

    public function withOperatorIdType(string $operator_id_type): ApiV1UsersListGetRequest  {
        $this->operator_id_type = $operator_id_type;
        return $this;
    }
    public function withBody(object $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1UsersListGetResponse extends ApiResponse {

    protected \wemeet\openapi\service\user_manager\model\V1UsersListGet200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\user_manager\model\V1UsersListGet200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1UsersOpenIdToUseridPostRequest {

    protected \wemeet\openapi\service\user_manager\model\V1UsersOpenIdToUseridPostRequest $body;

    public function getBody(): \wemeet\openapi\service\user_manager\model\V1UsersOpenIdToUseridPostRequest  {
        return $this->body;
    }

    public function withBody(\wemeet\openapi\service\user_manager\model\V1UsersOpenIdToUseridPostRequest $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1UsersOpenIdToUseridPostResponse extends ApiResponse {

    protected \wemeet\openapi\service\user_manager\model\V1UsersOpenIdToUseridPost200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\user_manager\model\V1UsersOpenIdToUseridPost200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1UsersPostRequest {

    protected \wemeet\openapi\service\user_manager\model\V1UsersPostRequest $body;

    public function getBody(): \wemeet\openapi\service\user_manager\model\V1UsersPostRequest  {
        return $this->body;
    }

    public function withBody(\wemeet\openapi\service\user_manager\model\V1UsersPostRequest $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1UsersPostResponse extends ApiResponse {

    protected \wemeet\openapi\service\user_manager\model\V1UsersPost200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\user_manager\model\V1UsersPost200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1UsersPutRequest {

    protected string|null $uuid = null;
    protected \wemeet\openapi\service\user_manager\model\V1UsersPutRequest $body;

    public function getUuid(): string|null  {
        return $this->uuid;
    }
    public function getBody(): \wemeet\openapi\service\user_manager\model\V1UsersPutRequest  {
        return $this->body;
    }


    public function withUuid(string $uuid): ApiV1UsersPutRequest  {
        $this->uuid = $uuid;
        return $this;
    }
    public function withBody(\wemeet\openapi\service\user_manager\model\V1UsersPutRequest $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1UsersPutResponse extends ApiResponse {

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

class ApiV1UsersUseridDeleteRequest {

    protected string|null $userid = null;
    protected string|null $operator_id = null;
    protected string|null $operator_id_type = null;
    protected object|null $body = null;

    public function getUserid(): string|null  {
        return $this->userid;
    }
    public function getOperatorId(): string|null  {
        return $this->operator_id;
    }
    public function getOperatorIdType(): string|null  {
        return $this->operator_id_type;
    }
    public function getBody(): object|null  {
        return $this->body;
    }


    public function withUserid(string $userid): ApiV1UsersUseridDeleteRequest  {
        $this->userid = $userid;
        return $this;
    }

    public function withOperatorId(string $operator_id): ApiV1UsersUseridDeleteRequest  {
        $this->operator_id = $operator_id;
        return $this;
    }

    public function withOperatorIdType(string $operator_id_type): ApiV1UsersUseridDeleteRequest  {
        $this->operator_id_type = $operator_id_type;
        return $this;
    }
    public function withBody(object $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1UsersUseridDeleteResponse extends ApiResponse {

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

class ApiV1UsersUseridEnablePutRequest {

    protected string|null $userid = null;
    protected \wemeet\openapi\service\user_manager\model\V1UsersUseridEnablePutRequest $body;

    public function getUserid(): string|null  {
        return $this->userid;
    }
    public function getBody(): \wemeet\openapi\service\user_manager\model\V1UsersUseridEnablePutRequest  {
        return $this->body;
    }


    public function withUserid(string $userid): ApiV1UsersUseridEnablePutRequest  {
        $this->userid = $userid;
        return $this;
    }
    public function withBody(\wemeet\openapi\service\user_manager\model\V1UsersUseridEnablePutRequest $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1UsersUseridEnablePutResponse extends ApiResponse {

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

class ApiV1UsersUseridGetRequest {

    protected string|null $userid = null;
    protected string|null $operator_id = null;
    protected string|null $operator_id_type = null;
    protected object|null $body = null;

    public function getUserid(): string|null  {
        return $this->userid;
    }
    public function getOperatorId(): string|null  {
        return $this->operator_id;
    }
    public function getOperatorIdType(): string|null  {
        return $this->operator_id_type;
    }
    public function getBody(): object|null  {
        return $this->body;
    }


    public function withUserid(string $userid): ApiV1UsersUseridGetRequest  {
        $this->userid = $userid;
        return $this;
    }

    public function withOperatorId(string $operator_id): ApiV1UsersUseridGetRequest  {
        $this->operator_id = $operator_id;
        return $this;
    }

    public function withOperatorIdType(string $operator_id_type): ApiV1UsersUseridGetRequest  {
        $this->operator_id_type = $operator_id_type;
        return $this;
    }
    public function withBody(object $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1UsersUseridGetResponse extends ApiResponse {

    protected \wemeet\openapi\service\user_manager\model\V1UsersUseridGet200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\user_manager\model\V1UsersUseridGet200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1UsersUseridInviteActivatePutRequest {

    protected string|null $userid = null;
    protected string|null $operator_id = null;
    protected string|null $operator_id_type = null;
    protected object|null $body = null;

    public function getUserid(): string|null  {
        return $this->userid;
    }
    public function getOperatorId(): string|null  {
        return $this->operator_id;
    }
    public function getOperatorIdType(): string|null  {
        return $this->operator_id_type;
    }
    public function getBody(): object|null  {
        return $this->body;
    }


    public function withUserid(string $userid): ApiV1UsersUseridInviteActivatePutRequest  {
        $this->userid = $userid;
        return $this;
    }

    public function withOperatorId(string $operator_id): ApiV1UsersUseridInviteActivatePutRequest  {
        $this->operator_id = $operator_id;
        return $this;
    }

    public function withOperatorIdType(string $operator_id_type): ApiV1UsersUseridInviteActivatePutRequest  {
        $this->operator_id_type = $operator_id_type;
        return $this;
    }
    public function withBody(object $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1UsersUseridInviteActivatePutResponse extends ApiResponse {

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

class ApiV1UsersUseridInviteAuthPutRequest {

    protected string|null $userid = null;
    protected \wemeet\openapi\service\user_manager\model\V1UsersUseridInviteAuthPutRequest $body;

    public function getUserid(): string|null  {
        return $this->userid;
    }
    public function getBody(): \wemeet\openapi\service\user_manager\model\V1UsersUseridInviteAuthPutRequest  {
        return $this->body;
    }


    public function withUserid(string $userid): ApiV1UsersUseridInviteAuthPutRequest  {
        $this->userid = $userid;
        return $this;
    }
    public function withBody(\wemeet\openapi\service\user_manager\model\V1UsersUseridInviteAuthPutRequest $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1UsersUseridInviteAuthPutResponse extends ApiResponse {

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

class ApiV1UsersUseridPutRequest {

    protected string|null $userid = null;
    protected \wemeet\openapi\service\user_manager\model\V1UsersUseridPutRequest $body;

    public function getUserid(): string|null  {
        return $this->userid;
    }
    public function getBody(): \wemeet\openapi\service\user_manager\model\V1UsersUseridPutRequest  {
        return $this->body;
    }


    public function withUserid(string $userid): ApiV1UsersUseridPutRequest  {
        $this->userid = $userid;
        return $this;
    }
    public function withBody(\wemeet\openapi\service\user_manager\model\V1UsersUseridPutRequest $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1UsersUseridPutResponse extends ApiResponse {

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

