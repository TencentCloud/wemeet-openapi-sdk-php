<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.4
 */
namespace wemeet\openapi\service\meeting_room\api;

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


class MeetingRoomApi
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
     * Operation V1DevicesGet
     *
     * 查询设备列表
     *
     */
     public function V1DevicesGet(ApiV1DevicesGetRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1DevicesGetResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/devices';

         $pathParams = [];

         $queryParams = [];
         if ($request->getPage() !== null) {
             $queryParams['page'] = $request->getPage();
         }
         if ($request->getPageSize() !== null) {
             $queryParams['page_size'] = $request->getPageSize();
         }
         if ($request->getMeetingRoomName() !== null) {
             $queryParams['meeting_room_name'] = $request->getMeetingRoomName();
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
                 return new ApiV1DevicesGetResponse($response);
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
     * Operation V1MeetingRoomsCancelRoomCallPut
     *
     * 取消呼叫会议室
     *
     */
     public function V1MeetingRoomsCancelRoomCallPut(ApiV1MeetingRoomsCancelRoomCallPutRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1MeetingRoomsCancelRoomCallPutResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/meeting-rooms/cancel-room-call';

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
                 return new ApiV1MeetingRoomsCancelRoomCallPutResponse($response);
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
     * Operation V1MeetingRoomsGet
     *
     * 查询会议室（Rooms）列表
     *
     */
     public function V1MeetingRoomsGet(ApiV1MeetingRoomsGetRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1MeetingRoomsGetResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/meeting-rooms';

         $pathParams = [];

         $queryParams = [];
         if ($request->getPage() !== null) {
             $queryParams['page'] = $request->getPage();
         }
         if ($request->getPageSize() !== null) {
             $queryParams['page_size'] = $request->getPageSize();
         }
         if ($request->getMeetingRoomName() !== null) {
             $queryParams['meeting_room_name'] = $request->getMeetingRoomName();
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
                 return new ApiV1MeetingRoomsGetResponse($response);
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
     * Operation V1MeetingRoomsMeetingRoomIdActiveCodePost
     *
     * 生成设备激活码
     *
     */
     public function V1MeetingRoomsMeetingRoomIdActiveCodePost(ApiV1MeetingRoomsMeetingRoomIdActiveCodePostRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1MeetingRoomsMeetingRoomIdActiveCodePostResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/meeting-rooms/{meeting_room_id}/active-code';

         $pathParams = [];
         if (empty($request->getMeetingRoomId())) {
            throw new InvalidArgumentException('meeting_room_id is required and must be specified');
         }
         if ($request->getMeetingRoomId() !== null) {
             $pathParams['meeting_room_id'] = $request->getMeetingRoomId();
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
                 return new ApiV1MeetingRoomsMeetingRoomIdActiveCodePostResponse($response);
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
     * Operation V1MeetingRoomsMeetingRoomIdBackgroundGet
     *
     * 查询会议室背景
     *
     */
     public function V1MeetingRoomsMeetingRoomIdBackgroundGet(ApiV1MeetingRoomsMeetingRoomIdBackgroundGetRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1MeetingRoomsMeetingRoomIdBackgroundGetResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/meeting-rooms/{meeting_room_id}/background';

         $pathParams = [];
         if (empty($request->getMeetingRoomId())) {
            throw new InvalidArgumentException('meeting_room_id is required and must be specified');
         }
         if ($request->getMeetingRoomId() !== null) {
             $pathParams['meeting_room_id'] = $request->getMeetingRoomId();
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
                 return new ApiV1MeetingRoomsMeetingRoomIdBackgroundGetResponse($response);
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
     * Operation V1MeetingRoomsMeetingRoomIdBackgroundPost
     *
     * 设置会议室背景
     *
     */
     public function V1MeetingRoomsMeetingRoomIdBackgroundPost(ApiV1MeetingRoomsMeetingRoomIdBackgroundPostRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1MeetingRoomsMeetingRoomIdBackgroundPostResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/meeting-rooms/{meeting_room_id}/background';

         $pathParams = [];
         if (empty($request->getMeetingRoomId())) {
            throw new InvalidArgumentException('meeting_room_id is required and must be specified');
         }
         if ($request->getMeetingRoomId() !== null) {
             $pathParams['meeting_room_id'] = $request->getMeetingRoomId();
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
                 return new ApiV1MeetingRoomsMeetingRoomIdBackgroundPostResponse($response);
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
     * Operation V1MeetingRoomsMeetingRoomIdGet
     *
     * 查询会议室（Rooms）详情
     *
     */
     public function V1MeetingRoomsMeetingRoomIdGet(ApiV1MeetingRoomsMeetingRoomIdGetRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1MeetingRoomsMeetingRoomIdGetResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/meeting-rooms/{meeting_room_id}';

         $pathParams = [];
         if (empty($request->getMeetingRoomId())) {
            throw new InvalidArgumentException('meeting_room_id is required and must be specified');
         }
         if ($request->getMeetingRoomId() !== null) {
             $pathParams['meeting_room_id'] = $request->getMeetingRoomId();
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
                 return new ApiV1MeetingRoomsMeetingRoomIdGetResponse($response);
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
     * Operation V1MeetingRoomsModifyPut
     *
     * 修改会议室信息
     *
     */
     public function V1MeetingRoomsModifyPut(ApiV1MeetingRoomsModifyPutRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1MeetingRoomsModifyPutResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/meeting-rooms/modify';

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
                 return new ApiV1MeetingRoomsModifyPutResponse($response);
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
     * Operation V1MeetingRoomsModifyRoomConfigInfoPost
     *
     * 修改会议室配置项
     *
     */
     public function V1MeetingRoomsModifyRoomConfigInfoPost(ApiV1MeetingRoomsModifyRoomConfigInfoPostRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1MeetingRoomsModifyRoomConfigInfoPostResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/meeting-rooms/modify-room-config-info';

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
                 return new ApiV1MeetingRoomsModifyRoomConfigInfoPostResponse($response);
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
     * Operation V1MeetingRoomsMonitorDeviceControllerInfoGet
     *
     * 查询控制器列表
     *
     */
     public function V1MeetingRoomsMonitorDeviceControllerInfoGet(ApiV1MeetingRoomsMonitorDeviceControllerInfoGetRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1MeetingRoomsMonitorDeviceControllerInfoGetResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/meeting-rooms-monitor/device-controller-info';

         $pathParams = [];

         $queryParams = [];
         if ($request->getControllerName() !== null) {
             $queryParams['controller_name'] = $request->getControllerName();
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
                 return new ApiV1MeetingRoomsMonitorDeviceControllerInfoGetResponse($response);
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
     * Operation V1MeetingRoomsOperatorIdMeetingsGet
     *
     * 查询会议室（Rooms）下的会议列表
     *
     */
     public function V1MeetingRoomsOperatorIdMeetingsGet(ApiV1MeetingRoomsOperatorIdMeetingsGetRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1MeetingRoomsOperatorIdMeetingsGetResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/meeting-rooms/{operator_id}/meetings';

         $pathParams = [];
         if (empty($request->getOperatorId())) {
            throw new InvalidArgumentException('operator_id is required and must be specified');
         }
         if ($request->getOperatorId() !== null) {
             $pathParams['operator_id'] = $request->getOperatorId();
         }

         $queryParams = [];
         if (is_null($request->getOperatorIdType())) {
            throw new InvalidArgumentException("operator_id_type is required and must be specified");
         }
         if (is_null($request->getInstanceid())) {
            throw new InvalidArgumentException("instanceid is required and must be specified");
         }
         if (is_null($request->getTargetRoomsId())) {
            throw new InvalidArgumentException("target_rooms_id is required and must be specified");
         }
         if (is_null($request->getTargetRoomsIdType())) {
            throw new InvalidArgumentException("target_rooms_id_type is required and must be specified");
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
         if ($request->getTargetRoomsId() !== null) {
             $queryParams['target_rooms_id'] = $request->getTargetRoomsId();
         }
         if ($request->getTargetRoomsIdType() !== null) {
             $queryParams['target_rooms_id_type'] = $request->getTargetRoomsIdType();
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
                 return new ApiV1MeetingRoomsOperatorIdMeetingsGetResponse($response);
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
     * Operation V1MeetingRoomsRoomCallInfoPost
     *
     * 查询会议室应答状态
     *
     */
     public function V1MeetingRoomsRoomCallInfoPost(ApiV1MeetingRoomsRoomCallInfoPostRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1MeetingRoomsRoomCallInfoPostResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/meeting-rooms/room-call-info';

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
                 return new ApiV1MeetingRoomsRoomCallInfoPostResponse($response);
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
     * Operation V1MeetingRoomsRoomCallPut
     *
     * 呼叫会议室
     *
     */
     public function V1MeetingRoomsRoomCallPut(ApiV1MeetingRoomsRoomCallPutRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1MeetingRoomsRoomCallPutResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/meeting-rooms/room-call';

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
                 return new ApiV1MeetingRoomsRoomCallPutResponse($response);
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
     * Operation V1MeetingRoomsRoomConfigInfoPost
     *
     * 查询会议室配置项
     *
     */
     public function V1MeetingRoomsRoomConfigInfoPost(ApiV1MeetingRoomsRoomConfigInfoPostRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1MeetingRoomsRoomConfigInfoPostResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/meeting-rooms/room-config-info';

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
                 return new ApiV1MeetingRoomsRoomConfigInfoPostResponse($response);
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
     * Operation V1MeetingRoomsScreencastCodeRoomsInfoGet
     *
     * 通过投屏码查询会议室信息
     *
     */
     public function V1MeetingRoomsScreencastCodeRoomsInfoGet(ApiV1MeetingRoomsScreencastCodeRoomsInfoGetRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1MeetingRoomsScreencastCodeRoomsInfoGetResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/meeting-rooms/{screencast_code}/rooms-info';

         $pathParams = [];
         if (empty($request->getScreencastCode())) {
            throw new InvalidArgumentException('screencast_code is required and must be specified');
         }
         if ($request->getScreencastCode() !== null) {
             $pathParams['screencast_code'] = $request->getScreencastCode();
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
                 return new ApiV1MeetingRoomsScreencastCodeRoomsInfoGetResponse($response);
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
     * Operation V1MeetingsMeetingIdBookRoomsPost
     *
     * 预定会议室（Rooms）
     *
     */
     public function V1MeetingsMeetingIdBookRoomsPost(ApiV1MeetingsMeetingIdBookRoomsPostRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1MeetingsMeetingIdBookRoomsPostResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/meetings/{meeting_id}/book-rooms';

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
                 return new ApiV1MeetingsMeetingIdBookRoomsPostResponse($response);
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
     * Operation V1MeetingsMeetingIdReleaseRoomsPost
     *
     * 释放会议室（Rooms）
     *
     */
     public function V1MeetingsMeetingIdReleaseRoomsPost(ApiV1MeetingsMeetingIdReleaseRoomsPostRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1MeetingsMeetingIdReleaseRoomsPostResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/meetings/{meeting_id}/release-rooms';

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
                 return new ApiV1MeetingsMeetingIdReleaseRoomsPostResponse($response);
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
     * Operation V1RoomsInventoryAccountStatisticsGet
     *
     * 查询账号类型资源使用统计
     *
     */
     public function V1RoomsInventoryAccountStatisticsGet(ApiV1RoomsInventoryAccountStatisticsGetRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1RoomsInventoryAccountStatisticsGetResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/rooms-inventory/account-statistics';

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
             $response = $this->config->getClt()->get($apiRequest, $options);
             $statusCode = $response->getStatusCode();
             if ($statusCode >= 300) {
                 throw new ServiceException($response);
             } else {
                 return new ApiV1RoomsInventoryAccountStatisticsGetResponse($response);
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
     * Operation V1RoomsInventoryGet
     *
     * 查询账户下 Rooms 资源
     *
     */
     public function V1RoomsInventoryGet(ApiV1RoomsInventoryGetRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1RoomsInventoryGetResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/rooms-inventory';

         $pathParams = [];

         $queryParams = [];

         $requestBody = null;

         $formData = [
         ];
         if (!empty($formData)) {
             $requestBody = new MultipartStream($formData);
             $headers['Content-Type'] = 'multipart/form-data; boundary=' . $requestBody->getBoundary();
         }


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
                 return new ApiV1RoomsInventoryGetResponse($response);
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

class ApiV1DevicesGetRequest {

    protected string|null $page = null;
    protected string|null $page_size = null;
    protected string|null $meeting_room_name = null;
    protected object|null $body = null;

    public function getPage(): string|null  {
        return $this->page;
    }
    public function getPageSize(): string|null  {
        return $this->page_size;
    }
    public function getMeetingRoomName(): string|null  {
        return $this->meeting_room_name;
    }
    public function getBody(): object|null  {
        return $this->body;
    }


    public function withPage(string $page): ApiV1DevicesGetRequest  {
        $this->page = $page;
        return $this;
    }

    public function withPageSize(string $page_size): ApiV1DevicesGetRequest  {
        $this->page_size = $page_size;
        return $this;
    }

    public function withMeetingRoomName(string $meeting_room_name): ApiV1DevicesGetRequest  {
        $this->meeting_room_name = $meeting_room_name;
        return $this;
    }
    public function withBody(object $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1DevicesGetResponse extends ApiResponse {

    protected \wemeet\openapi\service\meeting_room\model\V1DevicesGet200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\meeting_room\model\V1DevicesGet200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1MeetingRoomsCancelRoomCallPutRequest {

    protected \wemeet\openapi\service\meeting_room\model\V1MeetingRoomsCancelRoomCallPutRequest $body;

    public function getBody(): \wemeet\openapi\service\meeting_room\model\V1MeetingRoomsCancelRoomCallPutRequest  {
        return $this->body;
    }

    public function withBody(\wemeet\openapi\service\meeting_room\model\V1MeetingRoomsCancelRoomCallPutRequest $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1MeetingRoomsCancelRoomCallPutResponse extends ApiResponse {

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

class ApiV1MeetingRoomsGetRequest {

    protected string|null $page = null;
    protected string|null $page_size = null;
    protected string|null $meeting_room_name = null;
    protected object|null $body = null;

    public function getPage(): string|null  {
        return $this->page;
    }
    public function getPageSize(): string|null  {
        return $this->page_size;
    }
    public function getMeetingRoomName(): string|null  {
        return $this->meeting_room_name;
    }
    public function getBody(): object|null  {
        return $this->body;
    }


    public function withPage(string $page): ApiV1MeetingRoomsGetRequest  {
        $this->page = $page;
        return $this;
    }

    public function withPageSize(string $page_size): ApiV1MeetingRoomsGetRequest  {
        $this->page_size = $page_size;
        return $this;
    }

    public function withMeetingRoomName(string $meeting_room_name): ApiV1MeetingRoomsGetRequest  {
        $this->meeting_room_name = $meeting_room_name;
        return $this;
    }
    public function withBody(object $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1MeetingRoomsGetResponse extends ApiResponse {

    protected \wemeet\openapi\service\meeting_room\model\V1MeetingRoomsGet200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\meeting_room\model\V1MeetingRoomsGet200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1MeetingRoomsMeetingRoomIdActiveCodePostRequest {

    protected string|null $meeting_room_id = null;
    protected object|null $body = null;

    public function getMeetingRoomId(): string|null  {
        return $this->meeting_room_id;
    }
    public function getBody(): object|null  {
        return $this->body;
    }


    public function withMeetingRoomId(string $meeting_room_id): ApiV1MeetingRoomsMeetingRoomIdActiveCodePostRequest  {
        $this->meeting_room_id = $meeting_room_id;
        return $this;
    }
    public function withBody(object $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1MeetingRoomsMeetingRoomIdActiveCodePostResponse extends ApiResponse {

    protected \wemeet\openapi\service\meeting_room\model\V1MeetingRoomsMeetingRoomIdActiveCodePost200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\meeting_room\model\V1MeetingRoomsMeetingRoomIdActiveCodePost200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1MeetingRoomsMeetingRoomIdBackgroundGetRequest {

    protected string|null $meeting_room_id = null;
    protected string|null $operator_id = null;
    protected string|null $operator_id_type = null;

    public function getMeetingRoomId(): string|null  {
        return $this->meeting_room_id;
    }
    public function getOperatorId(): string|null  {
        return $this->operator_id;
    }
    public function getOperatorIdType(): string|null  {
        return $this->operator_id_type;
    }


    public function withMeetingRoomId(string $meeting_room_id): ApiV1MeetingRoomsMeetingRoomIdBackgroundGetRequest  {
        $this->meeting_room_id = $meeting_room_id;
        return $this;
    }

    public function withOperatorId(string $operator_id): ApiV1MeetingRoomsMeetingRoomIdBackgroundGetRequest  {
        $this->operator_id = $operator_id;
        return $this;
    }

    public function withOperatorIdType(string $operator_id_type): ApiV1MeetingRoomsMeetingRoomIdBackgroundGetRequest  {
        $this->operator_id_type = $operator_id_type;
        return $this;
    }

}

class ApiV1MeetingRoomsMeetingRoomIdBackgroundGetResponse extends ApiResponse {

    protected \wemeet\openapi\service\meeting_room\model\V1MeetingRoomsMeetingRoomIdBackgroundGet200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\meeting_room\model\V1MeetingRoomsMeetingRoomIdBackgroundGet200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1MeetingRoomsMeetingRoomIdBackgroundPostRequest {

    protected string|null $meeting_room_id = null;
    protected \wemeet\openapi\service\meeting_room\model\V1MeetingRoomsMeetingRoomIdBackgroundPostRequest $body;

    public function getMeetingRoomId(): string|null  {
        return $this->meeting_room_id;
    }
    public function getBody(): \wemeet\openapi\service\meeting_room\model\V1MeetingRoomsMeetingRoomIdBackgroundPostRequest  {
        return $this->body;
    }


    public function withMeetingRoomId(string $meeting_room_id): ApiV1MeetingRoomsMeetingRoomIdBackgroundPostRequest  {
        $this->meeting_room_id = $meeting_room_id;
        return $this;
    }
    public function withBody(\wemeet\openapi\service\meeting_room\model\V1MeetingRoomsMeetingRoomIdBackgroundPostRequest $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1MeetingRoomsMeetingRoomIdBackgroundPostResponse extends ApiResponse {

    protected \wemeet\openapi\service\meeting_room\model\V1MeetingRoomsMeetingRoomIdBackgroundPost200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\meeting_room\model\V1MeetingRoomsMeetingRoomIdBackgroundPost200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1MeetingRoomsMeetingRoomIdGetRequest {

    protected string|null $meeting_room_id = null;
    protected object|null $body = null;

    public function getMeetingRoomId(): string|null  {
        return $this->meeting_room_id;
    }
    public function getBody(): object|null  {
        return $this->body;
    }


    public function withMeetingRoomId(string $meeting_room_id): ApiV1MeetingRoomsMeetingRoomIdGetRequest  {
        $this->meeting_room_id = $meeting_room_id;
        return $this;
    }
    public function withBody(object $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1MeetingRoomsMeetingRoomIdGetResponse extends ApiResponse {

    protected \wemeet\openapi\service\meeting_room\model\V1MeetingRoomsMeetingRoomIdGet200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\meeting_room\model\V1MeetingRoomsMeetingRoomIdGet200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1MeetingRoomsModifyPutRequest {

    protected \wemeet\openapi\service\meeting_room\model\V1MeetingRoomsModifyPutRequest $body;

    public function getBody(): \wemeet\openapi\service\meeting_room\model\V1MeetingRoomsModifyPutRequest  {
        return $this->body;
    }

    public function withBody(\wemeet\openapi\service\meeting_room\model\V1MeetingRoomsModifyPutRequest $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1MeetingRoomsModifyPutResponse extends ApiResponse {

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

class ApiV1MeetingRoomsModifyRoomConfigInfoPostRequest {

    protected \wemeet\openapi\service\meeting_room\model\V1MeetingRoomsModifyRoomConfigInfoPostRequest $body;

    public function getBody(): \wemeet\openapi\service\meeting_room\model\V1MeetingRoomsModifyRoomConfigInfoPostRequest  {
        return $this->body;
    }

    public function withBody(\wemeet\openapi\service\meeting_room\model\V1MeetingRoomsModifyRoomConfigInfoPostRequest $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1MeetingRoomsModifyRoomConfigInfoPostResponse extends ApiResponse {

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

class ApiV1MeetingRoomsMonitorDeviceControllerInfoGetRequest {

    protected string|null $controller_name = null;
    protected string|null $page = null;
    protected string|null $page_size = null;

    public function getControllerName(): string|null  {
        return $this->controller_name;
    }
    public function getPage(): string|null  {
        return $this->page;
    }
    public function getPageSize(): string|null  {
        return $this->page_size;
    }


    public function withControllerName(string $controller_name): ApiV1MeetingRoomsMonitorDeviceControllerInfoGetRequest  {
        $this->controller_name = $controller_name;
        return $this;
    }

    public function withPage(string $page): ApiV1MeetingRoomsMonitorDeviceControllerInfoGetRequest  {
        $this->page = $page;
        return $this;
    }

    public function withPageSize(string $page_size): ApiV1MeetingRoomsMonitorDeviceControllerInfoGetRequest  {
        $this->page_size = $page_size;
        return $this;
    }

}

class ApiV1MeetingRoomsMonitorDeviceControllerInfoGetResponse extends ApiResponse {

    protected \wemeet\openapi\service\meeting_room\model\V1MeetingRoomsMonitorDeviceControllerInfoGet200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\meeting_room\model\V1MeetingRoomsMonitorDeviceControllerInfoGet200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1MeetingRoomsOperatorIdMeetingsGetRequest {

    protected string|null $operator_id = null;
    protected string|null $operator_id_type = null;
    protected string|null $instanceid = null;
    protected string|null $target_rooms_id = null;
    protected string|null $target_rooms_id_type = null;
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
    public function getTargetRoomsId(): string|null  {
        return $this->target_rooms_id;
    }
    public function getTargetRoomsIdType(): string|null  {
        return $this->target_rooms_id_type;
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


    public function withOperatorId(string $operator_id): ApiV1MeetingRoomsOperatorIdMeetingsGetRequest  {
        $this->operator_id = $operator_id;
        return $this;
    }

    public function withOperatorIdType(string $operator_id_type): ApiV1MeetingRoomsOperatorIdMeetingsGetRequest  {
        $this->operator_id_type = $operator_id_type;
        return $this;
    }

    public function withInstanceid(string $instanceid): ApiV1MeetingRoomsOperatorIdMeetingsGetRequest  {
        $this->instanceid = $instanceid;
        return $this;
    }

    public function withTargetRoomsId(string $target_rooms_id): ApiV1MeetingRoomsOperatorIdMeetingsGetRequest  {
        $this->target_rooms_id = $target_rooms_id;
        return $this;
    }

    public function withTargetRoomsIdType(string $target_rooms_id_type): ApiV1MeetingRoomsOperatorIdMeetingsGetRequest  {
        $this->target_rooms_id_type = $target_rooms_id_type;
        return $this;
    }

    public function withStartTime(string $start_time): ApiV1MeetingRoomsOperatorIdMeetingsGetRequest  {
        $this->start_time = $start_time;
        return $this;
    }

    public function withEndTime(string $end_time): ApiV1MeetingRoomsOperatorIdMeetingsGetRequest  {
        $this->end_time = $end_time;
        return $this;
    }

    public function withPage(string $page): ApiV1MeetingRoomsOperatorIdMeetingsGetRequest  {
        $this->page = $page;
        return $this;
    }

    public function withPageSize(string $page_size): ApiV1MeetingRoomsOperatorIdMeetingsGetRequest  {
        $this->page_size = $page_size;
        return $this;
    }
    public function withBody(object $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1MeetingRoomsOperatorIdMeetingsGetResponse extends ApiResponse {

    protected \wemeet\openapi\service\meeting_room\model\V1MeetingRoomsOperatorIdMeetingsGet200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\meeting_room\model\V1MeetingRoomsOperatorIdMeetingsGet200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1MeetingRoomsRoomCallInfoPostRequest {

    protected \wemeet\openapi\service\meeting_room\model\V1MeetingRoomsRoomCallInfoPostRequest $body;

    public function getBody(): \wemeet\openapi\service\meeting_room\model\V1MeetingRoomsRoomCallInfoPostRequest  {
        return $this->body;
    }

    public function withBody(\wemeet\openapi\service\meeting_room\model\V1MeetingRoomsRoomCallInfoPostRequest $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1MeetingRoomsRoomCallInfoPostResponse extends ApiResponse {

    protected \wemeet\openapi\service\meeting_room\model\V1MeetingRoomsRoomCallInfoPost200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\meeting_room\model\V1MeetingRoomsRoomCallInfoPost200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1MeetingRoomsRoomCallPutRequest {

    protected \wemeet\openapi\service\meeting_room\model\V1MeetingRoomsRoomCallPutRequest $body;

    public function getBody(): \wemeet\openapi\service\meeting_room\model\V1MeetingRoomsRoomCallPutRequest  {
        return $this->body;
    }

    public function withBody(\wemeet\openapi\service\meeting_room\model\V1MeetingRoomsRoomCallPutRequest $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1MeetingRoomsRoomCallPutResponse extends ApiResponse {

    protected \wemeet\openapi\service\meeting_room\model\V1MeetingRoomsRoomCallPut200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\meeting_room\model\V1MeetingRoomsRoomCallPut200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1MeetingRoomsRoomConfigInfoPostRequest {

    protected \wemeet\openapi\service\meeting_room\model\V1MeetingRoomsRoomConfigInfoPostRequest $body;

    public function getBody(): \wemeet\openapi\service\meeting_room\model\V1MeetingRoomsRoomConfigInfoPostRequest  {
        return $this->body;
    }

    public function withBody(\wemeet\openapi\service\meeting_room\model\V1MeetingRoomsRoomConfigInfoPostRequest $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1MeetingRoomsRoomConfigInfoPostResponse extends ApiResponse {

    protected \wemeet\openapi\service\meeting_room\model\V1MeetingRoomsRoomConfigInfoPost200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\meeting_room\model\V1MeetingRoomsRoomConfigInfoPost200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1MeetingRoomsScreencastCodeRoomsInfoGetRequest {

    protected string|null $screencast_code = null;
    protected object|null $body = null;

    public function getScreencastCode(): string|null  {
        return $this->screencast_code;
    }
    public function getBody(): object|null  {
        return $this->body;
    }


    public function withScreencastCode(string $screencast_code): ApiV1MeetingRoomsScreencastCodeRoomsInfoGetRequest  {
        $this->screencast_code = $screencast_code;
        return $this;
    }
    public function withBody(object $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1MeetingRoomsScreencastCodeRoomsInfoGetResponse extends ApiResponse {

    protected \wemeet\openapi\service\meeting_room\model\V1MeetingRoomsScreencastCodeRoomsInfoGet200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\meeting_room\model\V1MeetingRoomsScreencastCodeRoomsInfoGet200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1MeetingsMeetingIdBookRoomsPostRequest {

    protected string|null $meeting_id = null;
    protected \wemeet\openapi\service\meeting_room\model\V1MeetingsMeetingIdBookRoomsPostRequest $body;

    public function getMeetingId(): string|null  {
        return $this->meeting_id;
    }
    public function getBody(): \wemeet\openapi\service\meeting_room\model\V1MeetingsMeetingIdBookRoomsPostRequest  {
        return $this->body;
    }


    public function withMeetingId(string $meeting_id): ApiV1MeetingsMeetingIdBookRoomsPostRequest  {
        $this->meeting_id = $meeting_id;
        return $this;
    }
    public function withBody(\wemeet\openapi\service\meeting_room\model\V1MeetingsMeetingIdBookRoomsPostRequest $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1MeetingsMeetingIdBookRoomsPostResponse extends ApiResponse {

    protected \wemeet\openapi\service\meeting_room\model\V1MeetingsMeetingIdBookRoomsPost200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\meeting_room\model\V1MeetingsMeetingIdBookRoomsPost200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1MeetingsMeetingIdReleaseRoomsPostRequest {

    protected string|null $meeting_id = null;
    protected object|null $body = null;

    public function getMeetingId(): string|null  {
        return $this->meeting_id;
    }
    public function getBody(): object|null  {
        return $this->body;
    }


    public function withMeetingId(string $meeting_id): ApiV1MeetingsMeetingIdReleaseRoomsPostRequest  {
        $this->meeting_id = $meeting_id;
        return $this;
    }
    public function withBody(object $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1MeetingsMeetingIdReleaseRoomsPostResponse extends ApiResponse {

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

class ApiV1RoomsInventoryAccountStatisticsGetRequest {

    protected object|null $body = null;

    public function getBody(): object|null  {
        return $this->body;
    }

    public function withBody(object $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1RoomsInventoryAccountStatisticsGetResponse extends ApiResponse {

    protected \wemeet\openapi\service\meeting_room\model\V1RoomsInventoryAccountStatisticsGet200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\meeting_room\model\V1RoomsInventoryAccountStatisticsGet200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1RoomsInventoryGetRequest {




}

class ApiV1RoomsInventoryGetResponse extends ApiResponse {

    protected \wemeet\openapi\service\meeting_room\model\V1RoomsInventoryGet200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\meeting_room\model\V1RoomsInventoryGet200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

