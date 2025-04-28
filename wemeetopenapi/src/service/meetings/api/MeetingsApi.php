<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.2
 */
namespace wemeet\openapi\service\meetings\api;

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


class MeetingsApi
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
     * Operation V1AsrConfigPut
     *
     * 设置语音识别热词
     *
     */
     public function V1AsrConfigPut(ApiV1AsrConfigPutRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1AsrConfigPutResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/asr/config';

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
                 return new ApiV1AsrConfigPutResponse($response);
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
     * Operation V1AsrDetailsGet
     *
     * 导出实时转写记录
     *
     */
     public function V1AsrDetailsGet(ApiV1AsrDetailsGetRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1AsrDetailsGetResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/asr/details';

         $pathParams = [];

         $queryParams = [];
         if (is_null($request->getOperatorIdType())) {
            throw new InvalidArgumentException("operator_id_type is required and must be specified");
         }
         if (is_null($request->getOperatorId())) {
            throw new InvalidArgumentException("operator_id is required and must be specified");
         }
         if (is_null($request->getMeetingId())) {
            throw new InvalidArgumentException("meeting_id is required and must be specified");
         }
         if ($request->getOperatorIdType() !== null) {
             $queryParams['operator_id_type'] = $request->getOperatorIdType();
         }
         if ($request->getOperatorId() !== null) {
             $queryParams['operator_id'] = $request->getOperatorId();
         }
         if ($request->getMeetingId() !== null) {
             $queryParams['meeting_id'] = $request->getMeetingId();
         }
         if ($request->getStartTime() !== null) {
             $queryParams['start_time'] = $request->getStartTime();
         }
         if ($request->getEndTime() !== null) {
             $queryParams['end_time'] = $request->getEndTime();
         }
         if ($request->getFileType() !== null) {
             $queryParams['file_type'] = $request->getFileType();
         }
         if ($request->getPage() !== null) {
             $queryParams['page'] = $request->getPage();
         }
         if ($request->getPageSize() !== null) {
             $queryParams['page_size'] = $request->getPageSize();
         }
         if ($request->getShowBilingual() !== null) {
             $queryParams['show_bilingual'] = $request->getShowBilingual();
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
                 return new ApiV1AsrDetailsGetResponse($response);
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
     * Operation V1AsrPushStatusPost
     *
     * 开启/关闭实时转写推送
     *
     */
     public function V1AsrPushStatusPost(ApiV1AsrPushStatusPostRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1AsrPushStatusPostResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/asr/push-status';

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
                 return new ApiV1AsrPushStatusPostResponse($response);
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
     * Operation V1HistoryMeetingsUseridGet
     *
     * 查询用户已结束会议列表
     *
     */
     public function V1HistoryMeetingsUseridGet(ApiV1HistoryMeetingsUseridGetRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1HistoryMeetingsUseridGetResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/history/meetings/{userid}';

         $pathParams = [];
         if (empty($request->getUserid())) {
            throw new InvalidArgumentException('userid is required and must be specified');
         }
         if ($request->getUserid() !== null) {
             $pathParams['userid'] = $request->getUserid();
         }

         $queryParams = [];
         if (is_null($request->getPageSize())) {
            throw new InvalidArgumentException("page_size is required and must be specified");
         }
         if (is_null($request->getPage())) {
            throw new InvalidArgumentException("page is required and must be specified");
         }
         if ($request->getPageSize() !== null) {
             $queryParams['page_size'] = $request->getPageSize();
         }
         if ($request->getPage() !== null) {
             $queryParams['page'] = $request->getPage();
         }
         if ($request->getMeetingCode() !== null) {
             $queryParams['meeting_code'] = $request->getMeetingCode();
         }
         if ($request->getStartTime() !== null) {
             $queryParams['start_time'] = $request->getStartTime();
         }
         if ($request->getEndTime() !== null) {
             $queryParams['end_time'] = $request->getEndTime();
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
                 return new ApiV1HistoryMeetingsUseridGetResponse($response);
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
     * Operation V1MeetingJobIdGet
     *
     * 获取导出 PSTN 通话详单任务结果
     *
     */
     public function V1MeetingJobIdGet(ApiV1MeetingJobIdGetRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1MeetingJobIdGetResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/meeting/{job_id}';

         $pathParams = [];
         if (empty($request->getJobId())) {
            throw new InvalidArgumentException('job_id is required and must be specified');
         }
         if ($request->getJobId() !== null) {
             $pathParams['job_id'] = $request->getJobId();
         }

         $queryParams = [];
         if (is_null($request->getOperatorIdType())) {
            throw new InvalidArgumentException("operator_id_type is required and must be specified");
         }
         if (is_null($request->getOperatorId())) {
            throw new InvalidArgumentException("operator_id is required and must be specified");
         }
         if ($request->getOperatorIdType() !== null) {
             $queryParams['operator_id_type'] = $request->getOperatorIdType();
         }
         if ($request->getOperatorId() !== null) {
             $queryParams['operator_id'] = $request->getOperatorId();
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
                 return new ApiV1MeetingJobIdGetResponse($response);
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
     * Operation V1MeetingMeetingIdWaitingRoomGet
     *
     * 查询等候室成员记录
     *
     */
     public function V1MeetingMeetingIdWaitingRoomGet(ApiV1MeetingMeetingIdWaitingRoomGetRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1MeetingMeetingIdWaitingRoomGetResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/meeting/{meeting_id}/waiting-room';

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
                 return new ApiV1MeetingMeetingIdWaitingRoomGetResponse($response);
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
     * Operation V1MeetingMeetingIdWaitingRoomWelcomeMessageGet
     *
     * 获取等候室欢迎语
     *
     */
     public function V1MeetingMeetingIdWaitingRoomWelcomeMessageGet(ApiV1MeetingMeetingIdWaitingRoomWelcomeMessageGetRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1MeetingMeetingIdWaitingRoomWelcomeMessageGetResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/meeting/{meeting_id}/waiting-room-welcome-message';

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
                 return new ApiV1MeetingMeetingIdWaitingRoomWelcomeMessageGetResponse($response);
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
     * Operation V1MeetingSetWaitingRoomWelcomeMessagePost
     *
     * 设置等候室欢迎语
     *
     */
     public function V1MeetingSetWaitingRoomWelcomeMessagePost(ApiV1MeetingSetWaitingRoomWelcomeMessagePostRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1MeetingSetWaitingRoomWelcomeMessagePostResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/meeting/set-waiting-room-welcome-message';

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
                 return new ApiV1MeetingSetWaitingRoomWelcomeMessagePostResponse($response);
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
     * Operation V1MeetingsCustomerShortUrlPost
     *
     * 创建用户专属参会链接
     *
     */
     public function V1MeetingsCustomerShortUrlPost(ApiV1MeetingsCustomerShortUrlPostRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1MeetingsCustomerShortUrlPostResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/meetings/customer-short-url';

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
                 return new ApiV1MeetingsCustomerShortUrlPostResponse($response);
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
     * Operation V1MeetingsGet
     *
     * 查询用户的会议列表
     *
     */
     public function V1MeetingsGet(ApiV1MeetingsGetRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1MeetingsGetResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/meetings';

         $pathParams = [];

         $queryParams = [];
         if (is_null($request->getInstanceid())) {
            throw new InvalidArgumentException("instanceid is required and must be specified");
         }
         if ($request->getOperatorId() !== null) {
             $queryParams['operator_id'] = $request->getOperatorId();
         }
         if ($request->getOperatorIdType() !== null) {
             $queryParams['operator_id_type'] = $request->getOperatorIdType();
         }
         if ($request->getUserid() !== null) {
             $queryParams['userid'] = $request->getUserid();
         }
         if ($request->getInstanceid() !== null) {
             $queryParams['instanceid'] = $request->getInstanceid();
         }
         if ($request->getMeetingCode() !== null) {
             $queryParams['meeting_code'] = $request->getMeetingCode();
         }
         if ($request->getCursory() !== null) {
             $queryParams['cursory'] = $request->getCursory();
         }
         if ($request->getPos() !== null) {
             $queryParams['pos'] = $request->getPos();
         }
         if ($request->getIsShowAllSubMeetings() !== null) {
             $queryParams['is_show_all_sub_meetings'] = $request->getIsShowAllSubMeetings();
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
                 return new ApiV1MeetingsGetResponse($response);
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
     * Operation V1MeetingsMeetingIdCancelPost
     *
     * 取消会议
     *
     */
     public function V1MeetingsMeetingIdCancelPost(ApiV1MeetingsMeetingIdCancelPostRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1MeetingsMeetingIdCancelPostResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/meetings/{meeting_id}/cancel';

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
                 return new ApiV1MeetingsMeetingIdCancelPostResponse($response);
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
     * Operation V1MeetingsMeetingIdCustomerShortUrlGet
     *
     * 获取用户专属参会链接
     *
     */
     public function V1MeetingsMeetingIdCustomerShortUrlGet(ApiV1MeetingsMeetingIdCustomerShortUrlGetRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1MeetingsMeetingIdCustomerShortUrlGetResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/meetings/{meeting_id}/customer-short-url';

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
             $response = $this->config->getClt()->get($apiRequest, $options);
             $statusCode = $response->getStatusCode();
             if ($statusCode >= 300) {
                 throw new ServiceException($response);
             } else {
                 return new ApiV1MeetingsMeetingIdCustomerShortUrlGetResponse($response);
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
     * Operation V1MeetingsMeetingIdEnrollApprovalsGet
     *
     * 查询会议报名信息
     *
     */
     public function V1MeetingsMeetingIdEnrollApprovalsGet(ApiV1MeetingsMeetingIdEnrollApprovalsGetRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1MeetingsMeetingIdEnrollApprovalsGetResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/meetings/{meeting_id}/enroll/approvals';

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
         if (is_null($request->getInstanceid())) {
            throw new InvalidArgumentException("instanceid is required and must be specified");
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
         if ($request->getInstanceid() !== null) {
             $queryParams['instanceid'] = $request->getInstanceid();
         }
         if ($request->getPage() !== null) {
             $queryParams['page'] = $request->getPage();
         }
         if ($request->getPageSize() !== null) {
             $queryParams['page_size'] = $request->getPageSize();
         }
         if ($request->getStatus() !== null) {
             $queryParams['status'] = $request->getStatus();
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
                 return new ApiV1MeetingsMeetingIdEnrollApprovalsGetResponse($response);
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
     * Operation V1MeetingsMeetingIdEnrollApprovalsPut
     *
     * 审批会议报名信息
     *
     */
     public function V1MeetingsMeetingIdEnrollApprovalsPut(ApiV1MeetingsMeetingIdEnrollApprovalsPutRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1MeetingsMeetingIdEnrollApprovalsPutResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/meetings/{meeting_id}/enroll/approvals';

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
                 return new ApiV1MeetingsMeetingIdEnrollApprovalsPutResponse($response);
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
     * Operation V1MeetingsMeetingIdEnrollConfigGet
     *
     * 查询会议报名配置
     *
     */
     public function V1MeetingsMeetingIdEnrollConfigGet(ApiV1MeetingsMeetingIdEnrollConfigGetRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1MeetingsMeetingIdEnrollConfigGetResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/meetings/{meeting_id}/enroll/config';

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
         if (is_null($request->getInstanceid())) {
            throw new InvalidArgumentException("instanceid is required and must be specified");
         }
         if ($request->getOperatorId() !== null) {
             $queryParams['operator_id'] = $request->getOperatorId();
         }
         if ($request->getOperatorIdType() !== null) {
             $queryParams['operator_id_type'] = $request->getOperatorIdType();
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
                 return new ApiV1MeetingsMeetingIdEnrollConfigGetResponse($response);
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
     * Operation V1MeetingsMeetingIdEnrollConfigPut
     *
     * 修改会议报名配置
     *
     */
     public function V1MeetingsMeetingIdEnrollConfigPut(ApiV1MeetingsMeetingIdEnrollConfigPutRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1MeetingsMeetingIdEnrollConfigPutResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/meetings/{meeting_id}/enroll/config';

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
                 return new ApiV1MeetingsMeetingIdEnrollConfigPutResponse($response);
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
     * Operation V1MeetingsMeetingIdEnrollIdsPost
     *
     * 查询会议成员报名 ID
     *
     */
     public function V1MeetingsMeetingIdEnrollIdsPost(ApiV1MeetingsMeetingIdEnrollIdsPostRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1MeetingsMeetingIdEnrollIdsPostResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/meetings/{meeting_id}/enroll/ids';

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
                 return new ApiV1MeetingsMeetingIdEnrollIdsPostResponse($response);
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
     * Operation V1MeetingsMeetingIdEnrollImportPost
     *
     * 导入会议报名信息
     *
     */
     public function V1MeetingsMeetingIdEnrollImportPost(ApiV1MeetingsMeetingIdEnrollImportPostRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1MeetingsMeetingIdEnrollImportPostResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/meetings/{meeting_id}/enroll/import';

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
                 return new ApiV1MeetingsMeetingIdEnrollImportPostResponse($response);
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
     * Operation V1MeetingsMeetingIdEnrollUnregistrationDelete
     *
     * 删除会议报名信息
     *
     */
     public function V1MeetingsMeetingIdEnrollUnregistrationDelete(ApiV1MeetingsMeetingIdEnrollUnregistrationDeleteRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1MeetingsMeetingIdEnrollUnregistrationDeleteResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/meetings/{meeting_id}/enroll/unregistration';

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
             $response = $this->config->getClt()->delete($apiRequest, $options);
             $statusCode = $response->getStatusCode();
             if ($statusCode >= 300) {
                 throw new ServiceException($response);
             } else {
                 return new ApiV1MeetingsMeetingIdEnrollUnregistrationDeleteResponse($response);
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
     * Operation V1MeetingsMeetingIdGet
     *
     * 查询会议
     *
     */
     public function V1MeetingsMeetingIdGet(ApiV1MeetingsMeetingIdGetRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1MeetingsMeetingIdGetResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/meetings/{meeting_id}';

         $pathParams = [];
         if (empty($request->getMeetingId())) {
            throw new InvalidArgumentException('meeting_id is required and must be specified');
         }
         if ($request->getMeetingId() !== null) {
             $pathParams['meeting_id'] = $request->getMeetingId();
         }

         $queryParams = [];
         if (is_null($request->getInstanceid())) {
            throw new InvalidArgumentException("instanceid is required and must be specified");
         }
         if ($request->getOperatorId() !== null) {
             $queryParams['operator_id'] = $request->getOperatorId();
         }
         if ($request->getOperatorIdType() !== null) {
             $queryParams['operator_id_type'] = $request->getOperatorIdType();
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
                 return new ApiV1MeetingsMeetingIdGetResponse($response);
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
     * Operation V1MeetingsMeetingIdInviteesGet
     *
     * 获取会议受邀成员列表
     *
     */
     public function V1MeetingsMeetingIdInviteesGet(ApiV1MeetingsMeetingIdInviteesGetRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1MeetingsMeetingIdInviteesGetResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/meetings/{meeting_id}/invitees';

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
         if ($request->getPos() !== null) {
             $queryParams['pos'] = $request->getPos();
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
                 return new ApiV1MeetingsMeetingIdInviteesGetResponse($response);
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
     * Operation V1MeetingsMeetingIdInviteesPut
     *
     * 设置会议邀请成员
     *
     */
     public function V1MeetingsMeetingIdInviteesPut(ApiV1MeetingsMeetingIdInviteesPutRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1MeetingsMeetingIdInviteesPutResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/meetings/{meeting_id}/invitees';

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
                 return new ApiV1MeetingsMeetingIdInviteesPutResponse($response);
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
     * Operation V1MeetingsMeetingIdParticipantsGet
     *
     * 获取参会成员列表
     *
     */
     public function V1MeetingsMeetingIdParticipantsGet(ApiV1MeetingsMeetingIdParticipantsGetRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1MeetingsMeetingIdParticipantsGetResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/meetings/{meetingId}/participants';

         $pathParams = [];
         if (empty($request->getMeetingId())) {
            throw new InvalidArgumentException('meeting_id is required and must be specified');
         }
         if ($request->getMeetingId() !== null) {
             $pathParams['meetingId'] = $request->getMeetingId();
         }

         $queryParams = [];
         if ($request->getSubMeetingId() !== null) {
             $queryParams['sub_meeting_id'] = $request->getSubMeetingId();
         }
         if ($request->getOperatorId() !== null) {
             $queryParams['operator_id'] = $request->getOperatorId();
         }
         if ($request->getOperatorIdType() !== null) {
             $queryParams['operator_id_type'] = $request->getOperatorIdType();
         }
         if ($request->getUserid() !== null) {
             $queryParams['userid'] = $request->getUserid();
         }
         if ($request->getPos() !== null) {
             $queryParams['pos'] = $request->getPos();
         }
         if ($request->getSize() !== null) {
             $queryParams['size'] = $request->getSize();
         }
         if ($request->getStartTime() !== null) {
             $queryParams['start_time'] = $request->getStartTime();
         }
         if ($request->getEndTime() !== null) {
             $queryParams['end_time'] = $request->getEndTime();
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
                 return new ApiV1MeetingsMeetingIdParticipantsGetResponse($response);
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
     * Operation V1MeetingsMeetingIdPut
     *
     * 修改会议
     *
     */
     public function V1MeetingsMeetingIdPut(ApiV1MeetingsMeetingIdPutRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1MeetingsMeetingIdPutResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/meetings/{meeting_id}';

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
                 return new ApiV1MeetingsMeetingIdPutResponse($response);
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
     * Operation V1MeetingsMeetingIdQosGet
     *
     * 获取会议实时质量检测数据
     *
     */
     public function V1MeetingsMeetingIdQosGet(ApiV1MeetingsMeetingIdQosGetRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1MeetingsMeetingIdQosGetResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/meetings/{meeting_id}/qos';

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
         if ($request->getPageSize() !== null) {
             $queryParams['page_size'] = $request->getPageSize();
         }
         if ($request->getPage() !== null) {
             $queryParams['page'] = $request->getPage();
         }
         if ($request->getToOperatorId() !== null) {
             $queryParams['to_operator_id'] = $request->getToOperatorId();
         }
         if ($request->getToOperatorIdType() !== null) {
             $queryParams['to_operator_id_type'] = $request->getToOperatorIdType();
         }
         if ($request->getKey() !== null) {
             $queryParams['key'] = $request->getKey();
         }
         if ($request->getMinValue() !== null) {
             $queryParams['min_value'] = $request->getMinValue();
         }
         if ($request->getMaxValue() !== null) {
             $queryParams['max_value'] = $request->getMaxValue();
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
                 return new ApiV1MeetingsMeetingIdQosGetResponse($response);
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
     * Operation V1MeetingsMeetingIdQualityGet
     *
     * 查询会议健康度
     *
     */
     public function V1MeetingsMeetingIdQualityGet(ApiV1MeetingsMeetingIdQualityGetRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1MeetingsMeetingIdQualityGetResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/meetings/{meeting_id}/quality';

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
         if (is_null($request->getPageSize())) {
            throw new InvalidArgumentException("page_size is required and must be specified");
         }
         if (is_null($request->getPage())) {
            throw new InvalidArgumentException("page is required and must be specified");
         }
         if (is_null($request->getStartTime())) {
            throw new InvalidArgumentException("start_time is required and must be specified");
         }
         if ($request->getOperatorId() !== null) {
             $queryParams['operator_id'] = $request->getOperatorId();
         }
         if ($request->getOperatorIdType() !== null) {
             $queryParams['operator_id_type'] = $request->getOperatorIdType();
         }
         if ($request->getInstanceid() !== null) {
             $queryParams['instanceid'] = $request->getInstanceid();
         }
         if ($request->getSubMeetingId() !== null) {
             $queryParams['sub_meeting_id'] = $request->getSubMeetingId();
         }
         if ($request->getPageSize() !== null) {
             $queryParams['page_size'] = $request->getPageSize();
         }
         if ($request->getPage() !== null) {
             $queryParams['page'] = $request->getPage();
         }
         if ($request->getStartTime() !== null) {
             $queryParams['start_time'] = $request->getStartTime();
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
                 return new ApiV1MeetingsMeetingIdQualityGetResponse($response);
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
     * Operation V1MeetingsMeetingIdRealTimeParticipantsGet
     *
     * 查询实时会中成员列表
     *
     */
     public function V1MeetingsMeetingIdRealTimeParticipantsGet(ApiV1MeetingsMeetingIdRealTimeParticipantsGetRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1MeetingsMeetingIdRealTimeParticipantsGetResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/meetings/{meeting_id}/real-time-participants';

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
         if (is_null($request->getPage())) {
            throw new InvalidArgumentException("page is required and must be specified");
         }
         if (is_null($request->getPageSize())) {
            throw new InvalidArgumentException("page_size is required and must be specified");
         }
         if ($request->getSubMeetingId() !== null) {
             $queryParams['sub_meeting_id'] = $request->getSubMeetingId();
         }
         if ($request->getOperatorId() !== null) {
             $queryParams['operator_id'] = $request->getOperatorId();
         }
         if ($request->getOperatorIdType() !== null) {
             $queryParams['operator_id_type'] = $request->getOperatorIdType();
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
                 return new ApiV1MeetingsMeetingIdRealTimeParticipantsGetResponse($response);
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
     * Operation V1MeetingsMeetingIdVirtualBackgroundPost
     *
     * 设置会议统一虚拟背景
     *
     */
     public function V1MeetingsMeetingIdVirtualBackgroundPost(ApiV1MeetingsMeetingIdVirtualBackgroundPostRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1MeetingsMeetingIdVirtualBackgroundPostResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/meetings/{meeting_id}/virtual-background';

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
                 return new ApiV1MeetingsMeetingIdVirtualBackgroundPostResponse($response);
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
     * Operation V1MeetingsMeetingIdWaitingRoomParticipantsGet
     *
     * 获取实时等候室成员列表
     *
     */
     public function V1MeetingsMeetingIdWaitingRoomParticipantsGet(ApiV1MeetingsMeetingIdWaitingRoomParticipantsGetRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1MeetingsMeetingIdWaitingRoomParticipantsGetResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/meetings/{meeting_id}/waiting-room-participants';

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
         if ($request->getUserid() !== null) {
             $queryParams['userid'] = $request->getUserid();
         }
         if ($request->getPageSize() !== null) {
             $queryParams['page_size'] = $request->getPageSize();
         }
         if ($request->getPage() !== null) {
             $queryParams['page'] = $request->getPage();
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
                 return new ApiV1MeetingsMeetingIdWaitingRoomParticipantsGetResponse($response);
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
     * Operation V1MeetingsPost
     *
     * 创建会议
     *
     */
     public function V1MeetingsPost(ApiV1MeetingsPostRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1MeetingsPostResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/meetings';

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
                 return new ApiV1MeetingsPostResponse($response);
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
     * Operation V1MeetingsQueryMeetingidForDevicePost
     *
     * 查询用户设备是否入会
     *
     */
     public function V1MeetingsQueryMeetingidForDevicePost(ApiV1MeetingsQueryMeetingidForDevicePostRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1MeetingsQueryMeetingidForDevicePostResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/meetings/query/meetingid-for-device';

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
                 return new ApiV1MeetingsQueryMeetingidForDevicePostResponse($response);
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
     * Operation V1PmiMeetingsGet
     *
     * 查询个人会议号会议列表
     *
     */
     public function V1PmiMeetingsGet(ApiV1PmiMeetingsGetRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1PmiMeetingsGetResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/pmi-meetings';

         $pathParams = [];

         $queryParams = [];
         if (is_null($request->getOperatorId())) {
            throw new InvalidArgumentException("operator_id is required and must be specified");
         }
         if (is_null($request->getOperatorIdType())) {
            throw new InvalidArgumentException("operator_id_type is required and must be specified");
         }
         if (is_null($request->getInstanceid())) {
            throw new InvalidArgumentException("instanceid is required and must be specified");
         }
         if ($request->getOperatorId() !== null) {
             $queryParams['operator_id'] = $request->getOperatorId();
         }
         if ($request->getOperatorIdType() !== null) {
             $queryParams['operator_id_type'] = $request->getOperatorIdType();
         }
         if ($request->getInstanceid() !== null) {
             $queryParams['instanceid'] = $request->getInstanceid();
         }
         if ($request->getStartTime() !== null) {
             $queryParams['start_time'] = $request->getStartTime();
         }
         if ($request->getEndTime() !== null) {
             $queryParams['end_time'] = $request->getEndTime();
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
                 return new ApiV1PmiMeetingsGetResponse($response);
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

class ApiV1AsrConfigPutRequest {

    protected \wemeet\openapi\service\meetings\model\V1AsrConfigPutRequest $body;

    public function getBody(): \wemeet\openapi\service\meetings\model\V1AsrConfigPutRequest  {
        return $this->body;
    }

    public function withBody(\wemeet\openapi\service\meetings\model\V1AsrConfigPutRequest $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1AsrConfigPutResponse extends ApiResponse {

    protected \wemeet\openapi\service\meetings\model\V1AsrConfigPut200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\meetings\model\V1AsrConfigPut200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1AsrDetailsGetRequest {

    protected string|null $operator_id_type = null;
    protected string|null $operator_id = null;
    protected string|null $meeting_id = null;
    protected string|null $start_time = null;
    protected string|null $end_time = null;
    protected string|null $file_type = null;
    protected string|null $page = null;
    protected string|null $page_size = null;
    protected string|null $show_bilingual = null;
    protected object|null $body = null;

    public function getOperatorIdType(): string|null  {
        return $this->operator_id_type;
    }
    public function getOperatorId(): string|null  {
        return $this->operator_id;
    }
    public function getMeetingId(): string|null  {
        return $this->meeting_id;
    }
    public function getStartTime(): string|null  {
        return $this->start_time;
    }
    public function getEndTime(): string|null  {
        return $this->end_time;
    }
    public function getFileType(): string|null  {
        return $this->file_type;
    }
    public function getPage(): string|null  {
        return $this->page;
    }
    public function getPageSize(): string|null  {
        return $this->page_size;
    }
    public function getShowBilingual(): string|null  {
        return $this->show_bilingual;
    }
    public function getBody(): object|null  {
        return $this->body;
    }


    public function withOperatorIdType(string $operator_id_type): ApiV1AsrDetailsGetRequest  {
        $this->operator_id_type = $operator_id_type;
        return $this;
    }

    public function withOperatorId(string $operator_id): ApiV1AsrDetailsGetRequest  {
        $this->operator_id = $operator_id;
        return $this;
    }

    public function withMeetingId(string $meeting_id): ApiV1AsrDetailsGetRequest  {
        $this->meeting_id = $meeting_id;
        return $this;
    }

    public function withStartTime(string $start_time): ApiV1AsrDetailsGetRequest  {
        $this->start_time = $start_time;
        return $this;
    }

    public function withEndTime(string $end_time): ApiV1AsrDetailsGetRequest  {
        $this->end_time = $end_time;
        return $this;
    }

    public function withFileType(string $file_type): ApiV1AsrDetailsGetRequest  {
        $this->file_type = $file_type;
        return $this;
    }

    public function withPage(string $page): ApiV1AsrDetailsGetRequest  {
        $this->page = $page;
        return $this;
    }

    public function withPageSize(string $page_size): ApiV1AsrDetailsGetRequest  {
        $this->page_size = $page_size;
        return $this;
    }

    public function withShowBilingual(string $show_bilingual): ApiV1AsrDetailsGetRequest  {
        $this->show_bilingual = $show_bilingual;
        return $this;
    }
    public function withBody(object $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1AsrDetailsGetResponse extends ApiResponse {

    protected \wemeet\openapi\service\meetings\model\V1AsrDetailsGet200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\meetings\model\V1AsrDetailsGet200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1AsrPushStatusPostRequest {

    protected \wemeet\openapi\service\meetings\model\V1AsrPushStatusPostRequest $body;

    public function getBody(): \wemeet\openapi\service\meetings\model\V1AsrPushStatusPostRequest  {
        return $this->body;
    }

    public function withBody(\wemeet\openapi\service\meetings\model\V1AsrPushStatusPostRequest $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1AsrPushStatusPostResponse extends ApiResponse {

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

class ApiV1HistoryMeetingsUseridGetRequest {

    protected string|null $userid = null;
    protected string|null $page_size = null;
    protected string|null $page = null;
    protected string|null $meeting_code = null;
    protected string|null $start_time = null;
    protected string|null $end_time = null;
    protected object|null $body = null;

    public function getUserid(): string|null  {
        return $this->userid;
    }
    public function getPageSize(): string|null  {
        return $this->page_size;
    }
    public function getPage(): string|null  {
        return $this->page;
    }
    public function getMeetingCode(): string|null  {
        return $this->meeting_code;
    }
    public function getStartTime(): string|null  {
        return $this->start_time;
    }
    public function getEndTime(): string|null  {
        return $this->end_time;
    }
    public function getBody(): object|null  {
        return $this->body;
    }


    public function withUserid(string $userid): ApiV1HistoryMeetingsUseridGetRequest  {
        $this->userid = $userid;
        return $this;
    }

    public function withPageSize(string $page_size): ApiV1HistoryMeetingsUseridGetRequest  {
        $this->page_size = $page_size;
        return $this;
    }

    public function withPage(string $page): ApiV1HistoryMeetingsUseridGetRequest  {
        $this->page = $page;
        return $this;
    }

    public function withMeetingCode(string $meeting_code): ApiV1HistoryMeetingsUseridGetRequest  {
        $this->meeting_code = $meeting_code;
        return $this;
    }

    public function withStartTime(string $start_time): ApiV1HistoryMeetingsUseridGetRequest  {
        $this->start_time = $start_time;
        return $this;
    }

    public function withEndTime(string $end_time): ApiV1HistoryMeetingsUseridGetRequest  {
        $this->end_time = $end_time;
        return $this;
    }
    public function withBody(object $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1HistoryMeetingsUseridGetResponse extends ApiResponse {

    protected \wemeet\openapi\service\meetings\model\V1HistoryMeetingsUseridGet200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\meetings\model\V1HistoryMeetingsUseridGet200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1MeetingJobIdGetRequest {

    protected string|null $job_id = null;
    protected string|null $operator_id_type = null;
    protected string|null $operator_id = null;
    protected object|null $body = null;

    public function getJobId(): string|null  {
        return $this->job_id;
    }
    public function getOperatorIdType(): string|null  {
        return $this->operator_id_type;
    }
    public function getOperatorId(): string|null  {
        return $this->operator_id;
    }
    public function getBody(): object|null  {
        return $this->body;
    }


    public function withJobId(string $job_id): ApiV1MeetingJobIdGetRequest  {
        $this->job_id = $job_id;
        return $this;
    }

    public function withOperatorIdType(string $operator_id_type): ApiV1MeetingJobIdGetRequest  {
        $this->operator_id_type = $operator_id_type;
        return $this;
    }

    public function withOperatorId(string $operator_id): ApiV1MeetingJobIdGetRequest  {
        $this->operator_id = $operator_id;
        return $this;
    }
    public function withBody(object $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1MeetingJobIdGetResponse extends ApiResponse {

    protected \wemeet\openapi\service\meetings\model\V1MeetingJobIdGet200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\meetings\model\V1MeetingJobIdGet200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1MeetingMeetingIdWaitingRoomGetRequest {

    protected string|null $meeting_id = null;
    protected string|null $operator_id = null;
    protected string|null $operator_id_type = null;
    protected string|null $page = null;
    protected string|null $page_size = null;
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
    public function getPage(): string|null  {
        return $this->page;
    }
    public function getPageSize(): string|null  {
        return $this->page_size;
    }
    public function getBody(): object|null  {
        return $this->body;
    }


    public function withMeetingId(string $meeting_id): ApiV1MeetingMeetingIdWaitingRoomGetRequest  {
        $this->meeting_id = $meeting_id;
        return $this;
    }

    public function withOperatorId(string $operator_id): ApiV1MeetingMeetingIdWaitingRoomGetRequest  {
        $this->operator_id = $operator_id;
        return $this;
    }

    public function withOperatorIdType(string $operator_id_type): ApiV1MeetingMeetingIdWaitingRoomGetRequest  {
        $this->operator_id_type = $operator_id_type;
        return $this;
    }

    public function withPage(string $page): ApiV1MeetingMeetingIdWaitingRoomGetRequest  {
        $this->page = $page;
        return $this;
    }

    public function withPageSize(string $page_size): ApiV1MeetingMeetingIdWaitingRoomGetRequest  {
        $this->page_size = $page_size;
        return $this;
    }
    public function withBody(object $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1MeetingMeetingIdWaitingRoomGetResponse extends ApiResponse {

    protected \wemeet\openapi\service\meetings\model\V1MeetingMeetingIdWaitingRoomGet200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\meetings\model\V1MeetingMeetingIdWaitingRoomGet200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1MeetingMeetingIdWaitingRoomWelcomeMessageGetRequest {

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


    public function withMeetingId(string $meeting_id): ApiV1MeetingMeetingIdWaitingRoomWelcomeMessageGetRequest  {
        $this->meeting_id = $meeting_id;
        return $this;
    }

    public function withOperatorId(string $operator_id): ApiV1MeetingMeetingIdWaitingRoomWelcomeMessageGetRequest  {
        $this->operator_id = $operator_id;
        return $this;
    }

    public function withOperatorIdType(string $operator_id_type): ApiV1MeetingMeetingIdWaitingRoomWelcomeMessageGetRequest  {
        $this->operator_id_type = $operator_id_type;
        return $this;
    }
    public function withBody(object $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1MeetingMeetingIdWaitingRoomWelcomeMessageGetResponse extends ApiResponse {

    protected \wemeet\openapi\service\meetings\model\V1MeetingSetWaitingRoomWelcomeMessagePost200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\meetings\model\V1MeetingSetWaitingRoomWelcomeMessagePost200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1MeetingSetWaitingRoomWelcomeMessagePostRequest {

    protected \wemeet\openapi\service\meetings\model\V1MeetingSetWaitingRoomWelcomeMessagePostRequest $body;

    public function getBody(): \wemeet\openapi\service\meetings\model\V1MeetingSetWaitingRoomWelcomeMessagePostRequest  {
        return $this->body;
    }

    public function withBody(\wemeet\openapi\service\meetings\model\V1MeetingSetWaitingRoomWelcomeMessagePostRequest $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1MeetingSetWaitingRoomWelcomeMessagePostResponse extends ApiResponse {

    protected \wemeet\openapi\service\meetings\model\V1MeetingSetWaitingRoomWelcomeMessagePost200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\meetings\model\V1MeetingSetWaitingRoomWelcomeMessagePost200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1MeetingsCustomerShortUrlPostRequest {

    protected \wemeet\openapi\service\meetings\model\V1MeetingsCustomerShortUrlPostRequest $body;

    public function getBody(): \wemeet\openapi\service\meetings\model\V1MeetingsCustomerShortUrlPostRequest  {
        return $this->body;
    }

    public function withBody(\wemeet\openapi\service\meetings\model\V1MeetingsCustomerShortUrlPostRequest $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1MeetingsCustomerShortUrlPostResponse extends ApiResponse {

    protected \wemeet\openapi\service\meetings\model\V1MeetingsCustomerShortUrlPost200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\meetings\model\V1MeetingsCustomerShortUrlPost200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1MeetingsGetRequest {

    protected string|null $instanceid = null;
    protected string|null $operator_id = null;
    protected string|null $operator_id_type = null;
    protected string|null $userid = null;
    protected string|null $meeting_code = null;
    protected string|null $cursory = null;
    protected string|null $pos = null;
    protected string|null $is_show_all_sub_meetings = null;
    protected object|null $body = null;

    public function getInstanceid(): string|null  {
        return $this->instanceid;
    }
    public function getOperatorId(): string|null  {
        return $this->operator_id;
    }
    public function getOperatorIdType(): string|null  {
        return $this->operator_id_type;
    }
    public function getUserid(): string|null  {
        return $this->userid;
    }
    public function getMeetingCode(): string|null  {
        return $this->meeting_code;
    }
    public function getCursory(): string|null  {
        return $this->cursory;
    }
    public function getPos(): string|null  {
        return $this->pos;
    }
    public function getIsShowAllSubMeetings(): string|null  {
        return $this->is_show_all_sub_meetings;
    }
    public function getBody(): object|null  {
        return $this->body;
    }


    public function withInstanceid(string $instanceid): ApiV1MeetingsGetRequest  {
        $this->instanceid = $instanceid;
        return $this;
    }

    public function withOperatorId(string $operator_id): ApiV1MeetingsGetRequest  {
        $this->operator_id = $operator_id;
        return $this;
    }

    public function withOperatorIdType(string $operator_id_type): ApiV1MeetingsGetRequest  {
        $this->operator_id_type = $operator_id_type;
        return $this;
    }

    public function withUserid(string $userid): ApiV1MeetingsGetRequest  {
        $this->userid = $userid;
        return $this;
    }

    public function withMeetingCode(string $meeting_code): ApiV1MeetingsGetRequest  {
        $this->meeting_code = $meeting_code;
        return $this;
    }

    public function withCursory(string $cursory): ApiV1MeetingsGetRequest  {
        $this->cursory = $cursory;
        return $this;
    }

    public function withPos(string $pos): ApiV1MeetingsGetRequest  {
        $this->pos = $pos;
        return $this;
    }

    public function withIsShowAllSubMeetings(string $is_show_all_sub_meetings): ApiV1MeetingsGetRequest  {
        $this->is_show_all_sub_meetings = $is_show_all_sub_meetings;
        return $this;
    }
    public function withBody(object $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1MeetingsGetResponse extends ApiResponse {

    protected \wemeet\openapi\service\meetings\model\V1MeetingsGet200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\meetings\model\V1MeetingsGet200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1MeetingsMeetingIdCancelPostRequest {

    protected string|null $meeting_id = null;
    protected \wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdCancelPostRequest $body;

    public function getMeetingId(): string|null  {
        return $this->meeting_id;
    }
    public function getBody(): \wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdCancelPostRequest  {
        return $this->body;
    }


    public function withMeetingId(string $meeting_id): ApiV1MeetingsMeetingIdCancelPostRequest  {
        $this->meeting_id = $meeting_id;
        return $this;
    }
    public function withBody(\wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdCancelPostRequest $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1MeetingsMeetingIdCancelPostResponse extends ApiResponse {

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

class ApiV1MeetingsMeetingIdCustomerShortUrlGetRequest {

    protected string|null $meeting_id = null;
    protected object|null $body = null;

    public function getMeetingId(): string|null  {
        return $this->meeting_id;
    }
    public function getBody(): object|null  {
        return $this->body;
    }


    public function withMeetingId(string $meeting_id): ApiV1MeetingsMeetingIdCustomerShortUrlGetRequest  {
        $this->meeting_id = $meeting_id;
        return $this;
    }
    public function withBody(object $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1MeetingsMeetingIdCustomerShortUrlGetResponse extends ApiResponse {

    protected \wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdCustomerShortUrlGet200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdCustomerShortUrlGet200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1MeetingsMeetingIdEnrollApprovalsGetRequest {

    protected string|null $meeting_id = null;
    protected string|null $operator_id = null;
    protected string|null $operator_id_type = null;
    protected string|null $instanceid = null;
    protected string|null $page = null;
    protected string|null $page_size = null;
    protected string|null $status = null;
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
    public function getInstanceid(): string|null  {
        return $this->instanceid;
    }
    public function getPage(): string|null  {
        return $this->page;
    }
    public function getPageSize(): string|null  {
        return $this->page_size;
    }
    public function getStatus(): string|null  {
        return $this->status;
    }
    public function getBody(): object|null  {
        return $this->body;
    }


    public function withMeetingId(string $meeting_id): ApiV1MeetingsMeetingIdEnrollApprovalsGetRequest  {
        $this->meeting_id = $meeting_id;
        return $this;
    }

    public function withOperatorId(string $operator_id): ApiV1MeetingsMeetingIdEnrollApprovalsGetRequest  {
        $this->operator_id = $operator_id;
        return $this;
    }

    public function withOperatorIdType(string $operator_id_type): ApiV1MeetingsMeetingIdEnrollApprovalsGetRequest  {
        $this->operator_id_type = $operator_id_type;
        return $this;
    }

    public function withInstanceid(string $instanceid): ApiV1MeetingsMeetingIdEnrollApprovalsGetRequest  {
        $this->instanceid = $instanceid;
        return $this;
    }

    public function withPage(string $page): ApiV1MeetingsMeetingIdEnrollApprovalsGetRequest  {
        $this->page = $page;
        return $this;
    }

    public function withPageSize(string $page_size): ApiV1MeetingsMeetingIdEnrollApprovalsGetRequest  {
        $this->page_size = $page_size;
        return $this;
    }

    public function withStatus(string $status): ApiV1MeetingsMeetingIdEnrollApprovalsGetRequest  {
        $this->status = $status;
        return $this;
    }
    public function withBody(object $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1MeetingsMeetingIdEnrollApprovalsGetResponse extends ApiResponse {

    protected \wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdEnrollApprovalsGet200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdEnrollApprovalsGet200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1MeetingsMeetingIdEnrollApprovalsPutRequest {

    protected string|null $meeting_id = null;
    protected \wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdEnrollApprovalsPutRequest $body;

    public function getMeetingId(): string|null  {
        return $this->meeting_id;
    }
    public function getBody(): \wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdEnrollApprovalsPutRequest  {
        return $this->body;
    }


    public function withMeetingId(string $meeting_id): ApiV1MeetingsMeetingIdEnrollApprovalsPutRequest  {
        $this->meeting_id = $meeting_id;
        return $this;
    }
    public function withBody(\wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdEnrollApprovalsPutRequest $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1MeetingsMeetingIdEnrollApprovalsPutResponse extends ApiResponse {

    protected \wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdEnrollApprovalsPut200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdEnrollApprovalsPut200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1MeetingsMeetingIdEnrollConfigGetRequest {

    protected string|null $meeting_id = null;
    protected string|null $operator_id = null;
    protected string|null $operator_id_type = null;
    protected string|null $instanceid = null;
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
    public function getInstanceid(): string|null  {
        return $this->instanceid;
    }
    public function getBody(): object|null  {
        return $this->body;
    }


    public function withMeetingId(string $meeting_id): ApiV1MeetingsMeetingIdEnrollConfigGetRequest  {
        $this->meeting_id = $meeting_id;
        return $this;
    }

    public function withOperatorId(string $operator_id): ApiV1MeetingsMeetingIdEnrollConfigGetRequest  {
        $this->operator_id = $operator_id;
        return $this;
    }

    public function withOperatorIdType(string $operator_id_type): ApiV1MeetingsMeetingIdEnrollConfigGetRequest  {
        $this->operator_id_type = $operator_id_type;
        return $this;
    }

    public function withInstanceid(string $instanceid): ApiV1MeetingsMeetingIdEnrollConfigGetRequest  {
        $this->instanceid = $instanceid;
        return $this;
    }
    public function withBody(object $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1MeetingsMeetingIdEnrollConfigGetResponse extends ApiResponse {

    protected \wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdEnrollConfigGet200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdEnrollConfigGet200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1MeetingsMeetingIdEnrollConfigPutRequest {

    protected string|null $meeting_id = null;
    protected \wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdEnrollConfigPutRequest $body;

    public function getMeetingId(): string|null  {
        return $this->meeting_id;
    }
    public function getBody(): \wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdEnrollConfigPutRequest  {
        return $this->body;
    }


    public function withMeetingId(string $meeting_id): ApiV1MeetingsMeetingIdEnrollConfigPutRequest  {
        $this->meeting_id = $meeting_id;
        return $this;
    }
    public function withBody(\wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdEnrollConfigPutRequest $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1MeetingsMeetingIdEnrollConfigPutResponse extends ApiResponse {

    protected \wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdEnrollConfigPut200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdEnrollConfigPut200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1MeetingsMeetingIdEnrollIdsPostRequest {

    protected string|null $meeting_id = null;
    protected \wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdEnrollIdsPostRequest $body;

    public function getMeetingId(): string|null  {
        return $this->meeting_id;
    }
    public function getBody(): \wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdEnrollIdsPostRequest  {
        return $this->body;
    }


    public function withMeetingId(string $meeting_id): ApiV1MeetingsMeetingIdEnrollIdsPostRequest  {
        $this->meeting_id = $meeting_id;
        return $this;
    }
    public function withBody(\wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdEnrollIdsPostRequest $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1MeetingsMeetingIdEnrollIdsPostResponse extends ApiResponse {

    protected \wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdEnrollIdsPost200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdEnrollIdsPost200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1MeetingsMeetingIdEnrollImportPostRequest {

    protected string|null $meeting_id = null;
    protected \wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdEnrollImportPostRequest $body;

    public function getMeetingId(): string|null  {
        return $this->meeting_id;
    }
    public function getBody(): \wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdEnrollImportPostRequest  {
        return $this->body;
    }


    public function withMeetingId(string $meeting_id): ApiV1MeetingsMeetingIdEnrollImportPostRequest  {
        $this->meeting_id = $meeting_id;
        return $this;
    }
    public function withBody(\wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdEnrollImportPostRequest $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1MeetingsMeetingIdEnrollImportPostResponse extends ApiResponse {

    protected \wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdEnrollImportPost200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdEnrollImportPost200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1MeetingsMeetingIdEnrollUnregistrationDeleteRequest {

    protected string|null $meeting_id = null;
    protected \wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdEnrollUnregistrationDeleteRequest $body;

    public function getMeetingId(): string|null  {
        return $this->meeting_id;
    }
    public function getBody(): \wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdEnrollUnregistrationDeleteRequest  {
        return $this->body;
    }


    public function withMeetingId(string $meeting_id): ApiV1MeetingsMeetingIdEnrollUnregistrationDeleteRequest  {
        $this->meeting_id = $meeting_id;
        return $this;
    }
    public function withBody(\wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdEnrollUnregistrationDeleteRequest $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1MeetingsMeetingIdEnrollUnregistrationDeleteResponse extends ApiResponse {

    protected \wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdEnrollUnregistrationDelete200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdEnrollUnregistrationDelete200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1MeetingsMeetingIdGetRequest {

    protected string|null $meeting_id = null;
    protected string|null $instanceid = null;
    protected string|null $operator_id = null;
    protected string|null $operator_id_type = null;
    protected object|null $body = null;

    public function getMeetingId(): string|null  {
        return $this->meeting_id;
    }
    public function getInstanceid(): string|null  {
        return $this->instanceid;
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


    public function withMeetingId(string $meeting_id): ApiV1MeetingsMeetingIdGetRequest  {
        $this->meeting_id = $meeting_id;
        return $this;
    }

    public function withInstanceid(string $instanceid): ApiV1MeetingsMeetingIdGetRequest  {
        $this->instanceid = $instanceid;
        return $this;
    }

    public function withOperatorId(string $operator_id): ApiV1MeetingsMeetingIdGetRequest  {
        $this->operator_id = $operator_id;
        return $this;
    }

    public function withOperatorIdType(string $operator_id_type): ApiV1MeetingsMeetingIdGetRequest  {
        $this->operator_id_type = $operator_id_type;
        return $this;
    }
    public function withBody(object $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1MeetingsMeetingIdGetResponse extends ApiResponse {

    protected \wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdGet200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdGet200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1MeetingsMeetingIdInviteesGetRequest {

    protected string|null $meeting_id = null;
    protected string|null $userid = null;
    protected string|null $instanceid = null;
    protected string|null $pos = null;
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
    public function getPos(): string|null  {
        return $this->pos;
    }
    public function getBody(): object|null  {
        return $this->body;
    }


    public function withMeetingId(string $meeting_id): ApiV1MeetingsMeetingIdInviteesGetRequest  {
        $this->meeting_id = $meeting_id;
        return $this;
    }

    public function withUserid(string $userid): ApiV1MeetingsMeetingIdInviteesGetRequest  {
        $this->userid = $userid;
        return $this;
    }

    public function withInstanceid(string $instanceid): ApiV1MeetingsMeetingIdInviteesGetRequest  {
        $this->instanceid = $instanceid;
        return $this;
    }

    public function withPos(string $pos): ApiV1MeetingsMeetingIdInviteesGetRequest  {
        $this->pos = $pos;
        return $this;
    }
    public function withBody(object $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1MeetingsMeetingIdInviteesGetResponse extends ApiResponse {

    protected \wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdInviteesGet200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdInviteesGet200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1MeetingsMeetingIdInviteesPutRequest {

    protected string|null $meeting_id = null;
    protected \wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdInviteesPutRequest $body;

    public function getMeetingId(): string|null  {
        return $this->meeting_id;
    }
    public function getBody(): \wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdInviteesPutRequest  {
        return $this->body;
    }


    public function withMeetingId(string $meeting_id): ApiV1MeetingsMeetingIdInviteesPutRequest  {
        $this->meeting_id = $meeting_id;
        return $this;
    }
    public function withBody(\wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdInviteesPutRequest $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1MeetingsMeetingIdInviteesPutResponse extends ApiResponse {

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

class ApiV1MeetingsMeetingIdParticipantsGetRequest {

    protected string|null $meeting_id = null;
    protected string|null $sub_meeting_id = null;
    protected string|null $operator_id = null;
    protected string|null $operator_id_type = null;
    protected string|null $userid = null;
    protected string|null $pos = null;
    protected string|null $size = null;
    protected string|null $start_time = null;
    protected string|null $end_time = null;
    protected object|null $body = null;

    public function getMeetingId(): string|null  {
        return $this->meeting_id;
    }
    public function getSubMeetingId(): string|null  {
        return $this->sub_meeting_id;
    }
    public function getOperatorId(): string|null  {
        return $this->operator_id;
    }
    public function getOperatorIdType(): string|null  {
        return $this->operator_id_type;
    }
    public function getUserid(): string|null  {
        return $this->userid;
    }
    public function getPos(): string|null  {
        return $this->pos;
    }
    public function getSize(): string|null  {
        return $this->size;
    }
    public function getStartTime(): string|null  {
        return $this->start_time;
    }
    public function getEndTime(): string|null  {
        return $this->end_time;
    }
    public function getBody(): object|null  {
        return $this->body;
    }


    public function withMeetingId(string $meeting_id): ApiV1MeetingsMeetingIdParticipantsGetRequest  {
        $this->meeting_id = $meeting_id;
        return $this;
    }

    public function withSubMeetingId(string $sub_meeting_id): ApiV1MeetingsMeetingIdParticipantsGetRequest  {
        $this->sub_meeting_id = $sub_meeting_id;
        return $this;
    }

    public function withOperatorId(string $operator_id): ApiV1MeetingsMeetingIdParticipantsGetRequest  {
        $this->operator_id = $operator_id;
        return $this;
    }

    public function withOperatorIdType(string $operator_id_type): ApiV1MeetingsMeetingIdParticipantsGetRequest  {
        $this->operator_id_type = $operator_id_type;
        return $this;
    }

    public function withUserid(string $userid): ApiV1MeetingsMeetingIdParticipantsGetRequest  {
        $this->userid = $userid;
        return $this;
    }

    public function withPos(string $pos): ApiV1MeetingsMeetingIdParticipantsGetRequest  {
        $this->pos = $pos;
        return $this;
    }

    public function withSize(string $size): ApiV1MeetingsMeetingIdParticipantsGetRequest  {
        $this->size = $size;
        return $this;
    }

    public function withStartTime(string $start_time): ApiV1MeetingsMeetingIdParticipantsGetRequest  {
        $this->start_time = $start_time;
        return $this;
    }

    public function withEndTime(string $end_time): ApiV1MeetingsMeetingIdParticipantsGetRequest  {
        $this->end_time = $end_time;
        return $this;
    }
    public function withBody(object $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1MeetingsMeetingIdParticipantsGetResponse extends ApiResponse {

    protected \wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdParticipantsGet200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdParticipantsGet200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1MeetingsMeetingIdPutRequest {

    protected string|null $meeting_id = null;
    protected \wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdPutRequest $body;

    public function getMeetingId(): string|null  {
        return $this->meeting_id;
    }
    public function getBody(): \wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdPutRequest  {
        return $this->body;
    }


    public function withMeetingId(string $meeting_id): ApiV1MeetingsMeetingIdPutRequest  {
        $this->meeting_id = $meeting_id;
        return $this;
    }
    public function withBody(\wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdPutRequest $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1MeetingsMeetingIdPutResponse extends ApiResponse {

    protected \wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdPut200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdPut200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1MeetingsMeetingIdQosGetRequest {

    protected string|null $meeting_id = null;
    protected string|null $operator_id = null;
    protected string|null $operator_id_type = null;
    protected string|null $page_size = null;
    protected string|null $page = null;
    protected string|null $to_operator_id = null;
    protected string|null $to_operator_id_type = null;
    protected string|null $key = null;
    protected string|null $min_value = null;
    protected string|null $max_value = null;
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
    public function getPageSize(): string|null  {
        return $this->page_size;
    }
    public function getPage(): string|null  {
        return $this->page;
    }
    public function getToOperatorId(): string|null  {
        return $this->to_operator_id;
    }
    public function getToOperatorIdType(): string|null  {
        return $this->to_operator_id_type;
    }
    public function getKey(): string|null  {
        return $this->key;
    }
    public function getMinValue(): string|null  {
        return $this->min_value;
    }
    public function getMaxValue(): string|null  {
        return $this->max_value;
    }
    public function getBody(): object|null  {
        return $this->body;
    }


    public function withMeetingId(string $meeting_id): ApiV1MeetingsMeetingIdQosGetRequest  {
        $this->meeting_id = $meeting_id;
        return $this;
    }

    public function withOperatorId(string $operator_id): ApiV1MeetingsMeetingIdQosGetRequest  {
        $this->operator_id = $operator_id;
        return $this;
    }

    public function withOperatorIdType(string $operator_id_type): ApiV1MeetingsMeetingIdQosGetRequest  {
        $this->operator_id_type = $operator_id_type;
        return $this;
    }

    public function withPageSize(string $page_size): ApiV1MeetingsMeetingIdQosGetRequest  {
        $this->page_size = $page_size;
        return $this;
    }

    public function withPage(string $page): ApiV1MeetingsMeetingIdQosGetRequest  {
        $this->page = $page;
        return $this;
    }

    public function withToOperatorId(string $to_operator_id): ApiV1MeetingsMeetingIdQosGetRequest  {
        $this->to_operator_id = $to_operator_id;
        return $this;
    }

    public function withToOperatorIdType(string $to_operator_id_type): ApiV1MeetingsMeetingIdQosGetRequest  {
        $this->to_operator_id_type = $to_operator_id_type;
        return $this;
    }

    public function withKey(string $key): ApiV1MeetingsMeetingIdQosGetRequest  {
        $this->key = $key;
        return $this;
    }

    public function withMinValue(string $min_value): ApiV1MeetingsMeetingIdQosGetRequest  {
        $this->min_value = $min_value;
        return $this;
    }

    public function withMaxValue(string $max_value): ApiV1MeetingsMeetingIdQosGetRequest  {
        $this->max_value = $max_value;
        return $this;
    }
    public function withBody(object $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1MeetingsMeetingIdQosGetResponse extends ApiResponse {

    protected \wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdQosGet200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdQosGet200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1MeetingsMeetingIdQualityGetRequest {

    protected string|null $meeting_id = null;
    protected string|null $operator_id = null;
    protected string|null $operator_id_type = null;
    protected string|null $page_size = null;
    protected string|null $page = null;
    protected string|null $start_time = null;
    protected string|null $instanceid = null;
    protected string|null $sub_meeting_id = null;
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
    public function getPageSize(): string|null  {
        return $this->page_size;
    }
    public function getPage(): string|null  {
        return $this->page;
    }
    public function getStartTime(): string|null  {
        return $this->start_time;
    }
    public function getInstanceid(): string|null  {
        return $this->instanceid;
    }
    public function getSubMeetingId(): string|null  {
        return $this->sub_meeting_id;
    }
    public function getBody(): object|null  {
        return $this->body;
    }


    public function withMeetingId(string $meeting_id): ApiV1MeetingsMeetingIdQualityGetRequest  {
        $this->meeting_id = $meeting_id;
        return $this;
    }

    public function withOperatorId(string $operator_id): ApiV1MeetingsMeetingIdQualityGetRequest  {
        $this->operator_id = $operator_id;
        return $this;
    }

    public function withOperatorIdType(string $operator_id_type): ApiV1MeetingsMeetingIdQualityGetRequest  {
        $this->operator_id_type = $operator_id_type;
        return $this;
    }

    public function withPageSize(string $page_size): ApiV1MeetingsMeetingIdQualityGetRequest  {
        $this->page_size = $page_size;
        return $this;
    }

    public function withPage(string $page): ApiV1MeetingsMeetingIdQualityGetRequest  {
        $this->page = $page;
        return $this;
    }

    public function withStartTime(string $start_time): ApiV1MeetingsMeetingIdQualityGetRequest  {
        $this->start_time = $start_time;
        return $this;
    }

    public function withInstanceid(string $instanceid): ApiV1MeetingsMeetingIdQualityGetRequest  {
        $this->instanceid = $instanceid;
        return $this;
    }

    public function withSubMeetingId(string $sub_meeting_id): ApiV1MeetingsMeetingIdQualityGetRequest  {
        $this->sub_meeting_id = $sub_meeting_id;
        return $this;
    }
    public function withBody(object $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1MeetingsMeetingIdQualityGetResponse extends ApiResponse {

    protected \wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdQualityGet200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdQualityGet200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1MeetingsMeetingIdRealTimeParticipantsGetRequest {

    protected string|null $meeting_id = null;
    protected string|null $operator_id = null;
    protected string|null $operator_id_type = null;
    protected string|null $page = null;
    protected string|null $page_size = null;
    protected string|null $sub_meeting_id = null;
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
    public function getPage(): string|null  {
        return $this->page;
    }
    public function getPageSize(): string|null  {
        return $this->page_size;
    }
    public function getSubMeetingId(): string|null  {
        return $this->sub_meeting_id;
    }
    public function getBody(): object|null  {
        return $this->body;
    }


    public function withMeetingId(string $meeting_id): ApiV1MeetingsMeetingIdRealTimeParticipantsGetRequest  {
        $this->meeting_id = $meeting_id;
        return $this;
    }

    public function withOperatorId(string $operator_id): ApiV1MeetingsMeetingIdRealTimeParticipantsGetRequest  {
        $this->operator_id = $operator_id;
        return $this;
    }

    public function withOperatorIdType(string $operator_id_type): ApiV1MeetingsMeetingIdRealTimeParticipantsGetRequest  {
        $this->operator_id_type = $operator_id_type;
        return $this;
    }

    public function withPage(string $page): ApiV1MeetingsMeetingIdRealTimeParticipantsGetRequest  {
        $this->page = $page;
        return $this;
    }

    public function withPageSize(string $page_size): ApiV1MeetingsMeetingIdRealTimeParticipantsGetRequest  {
        $this->page_size = $page_size;
        return $this;
    }

    public function withSubMeetingId(string $sub_meeting_id): ApiV1MeetingsMeetingIdRealTimeParticipantsGetRequest  {
        $this->sub_meeting_id = $sub_meeting_id;
        return $this;
    }
    public function withBody(object $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1MeetingsMeetingIdRealTimeParticipantsGetResponse extends ApiResponse {

    protected \wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdRealTimeParticipantsGet200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdRealTimeParticipantsGet200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1MeetingsMeetingIdVirtualBackgroundPostRequest {

    protected string|null $meeting_id = null;
    protected \wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdVirtualBackgroundPostRequest $body;

    public function getMeetingId(): string|null  {
        return $this->meeting_id;
    }
    public function getBody(): \wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdVirtualBackgroundPostRequest  {
        return $this->body;
    }


    public function withMeetingId(string $meeting_id): ApiV1MeetingsMeetingIdVirtualBackgroundPostRequest  {
        $this->meeting_id = $meeting_id;
        return $this;
    }
    public function withBody(\wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdVirtualBackgroundPostRequest $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1MeetingsMeetingIdVirtualBackgroundPostResponse extends ApiResponse {

    protected \wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdVirtualBackgroundPost200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdVirtualBackgroundPost200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1MeetingsMeetingIdWaitingRoomParticipantsGetRequest {

    protected string|null $meeting_id = null;
    protected string|null $userid = null;
    protected string|null $page_size = null;
    protected string|null $page = null;
    protected object|null $body = null;

    public function getMeetingId(): string|null  {
        return $this->meeting_id;
    }
    public function getUserid(): string|null  {
        return $this->userid;
    }
    public function getPageSize(): string|null  {
        return $this->page_size;
    }
    public function getPage(): string|null  {
        return $this->page;
    }
    public function getBody(): object|null  {
        return $this->body;
    }


    public function withMeetingId(string $meeting_id): ApiV1MeetingsMeetingIdWaitingRoomParticipantsGetRequest  {
        $this->meeting_id = $meeting_id;
        return $this;
    }

    public function withUserid(string $userid): ApiV1MeetingsMeetingIdWaitingRoomParticipantsGetRequest  {
        $this->userid = $userid;
        return $this;
    }

    public function withPageSize(string $page_size): ApiV1MeetingsMeetingIdWaitingRoomParticipantsGetRequest  {
        $this->page_size = $page_size;
        return $this;
    }

    public function withPage(string $page): ApiV1MeetingsMeetingIdWaitingRoomParticipantsGetRequest  {
        $this->page = $page;
        return $this;
    }
    public function withBody(object $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1MeetingsMeetingIdWaitingRoomParticipantsGetResponse extends ApiResponse {

    protected \wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdWaitingRoomParticipantsGet200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdWaitingRoomParticipantsGet200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1MeetingsPostRequest {

    protected \wemeet\openapi\service\meetings\model\V1MeetingsPostRequest $body;

    public function getBody(): \wemeet\openapi\service\meetings\model\V1MeetingsPostRequest  {
        return $this->body;
    }

    public function withBody(\wemeet\openapi\service\meetings\model\V1MeetingsPostRequest $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1MeetingsPostResponse extends ApiResponse {

    protected \wemeet\openapi\service\meetings\model\V1MeetingsPost200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\meetings\model\V1MeetingsPost200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1MeetingsQueryMeetingidForDevicePostRequest {

    protected \wemeet\openapi\service\meetings\model\V1MeetingsQueryMeetingidForDevicePostRequest $body;

    public function getBody(): \wemeet\openapi\service\meetings\model\V1MeetingsQueryMeetingidForDevicePostRequest  {
        return $this->body;
    }

    public function withBody(\wemeet\openapi\service\meetings\model\V1MeetingsQueryMeetingidForDevicePostRequest $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1MeetingsQueryMeetingidForDevicePostResponse extends ApiResponse {

    protected \wemeet\openapi\service\meetings\model\V1MeetingsQueryMeetingidForDevicePost200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\meetings\model\V1MeetingsQueryMeetingidForDevicePost200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1PmiMeetingsGetRequest {

    protected string|null $operator_id = null;
    protected string|null $operator_id_type = null;
    protected string|null $instanceid = null;
    protected string|null $start_time = null;
    protected string|null $end_time = null;
    protected string|null $page = null;
    protected string|null $page_size = null;
    protected object|null $body = null;

    public function getOperatorId(): string|null  {
        return $this->operator_id;
    }
    public function getOperatorIdType(): string|null  {
        return $this->operator_id_type;
    }
    public function getInstanceid(): string|null  {
        return $this->instanceid;
    }
    public function getStartTime(): string|null  {
        return $this->start_time;
    }
    public function getEndTime(): string|null  {
        return $this->end_time;
    }
    public function getPage(): string|null  {
        return $this->page;
    }
    public function getPageSize(): string|null  {
        return $this->page_size;
    }
    public function getBody(): object|null  {
        return $this->body;
    }


    public function withOperatorId(string $operator_id): ApiV1PmiMeetingsGetRequest  {
        $this->operator_id = $operator_id;
        return $this;
    }

    public function withOperatorIdType(string $operator_id_type): ApiV1PmiMeetingsGetRequest  {
        $this->operator_id_type = $operator_id_type;
        return $this;
    }

    public function withInstanceid(string $instanceid): ApiV1PmiMeetingsGetRequest  {
        $this->instanceid = $instanceid;
        return $this;
    }

    public function withStartTime(string $start_time): ApiV1PmiMeetingsGetRequest  {
        $this->start_time = $start_time;
        return $this;
    }

    public function withEndTime(string $end_time): ApiV1PmiMeetingsGetRequest  {
        $this->end_time = $end_time;
        return $this;
    }

    public function withPage(string $page): ApiV1PmiMeetingsGetRequest  {
        $this->page = $page;
        return $this;
    }

    public function withPageSize(string $page_size): ApiV1PmiMeetingsGetRequest  {
        $this->page_size = $page_size;
        return $this;
    }
    public function withBody(object $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1PmiMeetingsGetResponse extends ApiResponse {

    protected \wemeet\openapi\service\meetings\model\V1PmiMeetingsGet200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\meetings\model\V1PmiMeetingsGet200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

