<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.2
 */
namespace wemeet\openapi\service\records\api;

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


class RecordsApi
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
     * Operation V1AddressesGet
     *
     * 查询会议录制地址
     *
     */
     public function V1AddressesGet(ApiV1AddressesGetRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1AddressesGetResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/addresses';

         $pathParams = [];

         $queryParams = [];
         if (is_null($request->getMeetingRecordId())) {
            throw new InvalidArgumentException("meeting_record_id is required and must be specified");
         }
         if ($request->getMeetingRecordId() !== null) {
             $queryParams['meeting_record_id'] = $request->getMeetingRecordId();
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
         if ($request->getPageSize() !== null) {
             $queryParams['page_size'] = $request->getPageSize();
         }
         if ($request->getPage() !== null) {
             $queryParams['page'] = $request->getPage();
         }
         if ($request->getAddressType() !== null) {
             $queryParams['address_type'] = $request->getAddressType();
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
                 return new ApiV1AddressesGetResponse($response);
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
     * Operation V1AddressesRecordFileIdGet
     *
     * 查询单个录制详情（文件、转写、纪要）
     *
     */
     public function V1AddressesRecordFileIdGet(ApiV1AddressesRecordFileIdGetRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1AddressesRecordFileIdGetResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/addresses/{record_file_id}';

         $pathParams = [];
         if (empty($request->getRecordFileId())) {
            throw new InvalidArgumentException('record_file_id is required and must be specified');
         }
         if ($request->getRecordFileId() !== null) {
             $pathParams['record_file_id'] = $request->getRecordFileId();
         }

         $queryParams = [];
         if ($request->getOperatorId() !== null) {
             $queryParams['operator_id'] = $request->getOperatorId();
         }
         if ($request->getOperatorIdType() !== null) {
             $queryParams['operator_id_type'] = $request->getOperatorIdType();
         }
         if ($request->getUserid() !== null) {
             $queryParams['userid'] = $request->getUserid();
         }
         if ($request->getAddressType() !== null) {
             $queryParams['address_type'] = $request->getAddressType();
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
                 return new ApiV1AddressesRecordFileIdGetResponse($response);
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
     * Operation V1FilesRecordsUploadAllPost
     *
     * 上传录制文件
     *
     */
     public function V1FilesRecordsUploadAllPost(ApiV1FilesRecordsUploadAllPostRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1FilesRecordsUploadAllPostResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/files/records/upload-all';

         $pathParams = [];

         $queryParams = [];

         $requestBody = null;
         if (is_null($request->getOperatorId())) {
            throw new InvalidArgumentException("operator_id is required and must be specified");
         }
         if (is_null($request->getOperatorIdType())) {
            throw new InvalidArgumentException("operator_id_type is required and must be specified");
         }
         if (is_null($request->getFileName())) {
            throw new InvalidArgumentException("file_name is required and must be specified");
         }
         if (is_null($request->getFileType())) {
            throw new InvalidArgumentException("file_type is required and must be specified");
         }
         if (is_null($request->getFileSize())) {
            throw new InvalidArgumentException("file_size is required and must be specified");
         }
         if (is_null($request->getFileChecksum())) {
            throw new InvalidArgumentException("file_checksum is required and must be specified");
         }
         if (is_null($request->getFileContent())) {
            throw new InvalidArgumentException("file_content is required and must be specified");
         }
         if (is_null($request->getSpeakNumber())) {
            throw new InvalidArgumentException("speak_number is required and must be specified");
         }

         $formData = [
             [
                 'name' => 'operator_id',
                 'contents' => $request->getOperatorId(),
             ],
             [
                 'name' => 'operator_id_type',
                 'contents' => $request->getOperatorIdType(),
             ],
             [
                 'name' => 'file_name',
                 'contents' => $request->getFileName(),
             ],
             [
                 'name' => 'file_type',
                 'contents' => $request->getFileType(),
             ],
             [
                 'name' => 'file_size',
                 'contents' => $request->getFileSize(),
             ],
             [
                 'name' => 'file_checksum',
                 'contents' => $request->getFileChecksum(),
             ],
              [
                  'name' => 'file_content',
                  'contents' => $request->getFileContent(),
                  'filename' => $request->getFileName(),
              ],
             [
                 'name' => 'speak_number',
                 'contents' => $request->getSpeakNumber(),
             ],
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
             $response = $this->config->getClt()->post($apiRequest, $options);
             $statusCode = $response->getStatusCode();
             if ($statusCode >= 300) {
                 throw new ServiceException($response);
             } else {
                 return new ApiV1FilesRecordsUploadAllPostResponse($response);
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
     * Operation V1FilesRecordsUploadFinishPost
     *
     * 分块上传录制文件 - 上传完成
     *
     */
     public function V1FilesRecordsUploadFinishPost(ApiV1FilesRecordsUploadFinishPostRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1FilesRecordsUploadFinishPostResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/files/records/upload-finish';

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
                 return new ApiV1FilesRecordsUploadFinishPostResponse($response);
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
     * Operation V1FilesRecordsUploadPartPost
     *
     * 分块上传录制文件 - 上传
     *
     */
     public function V1FilesRecordsUploadPartPost(ApiV1FilesRecordsUploadPartPostRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1FilesRecordsUploadPartPostResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/files/records/upload-part';

         $pathParams = [];

         $queryParams = [];

         $requestBody = null;
         if (is_null($request->getOperatorId())) {
            throw new InvalidArgumentException("operator_id is required and must be specified");
         }
         if (is_null($request->getOperatorIdType())) {
            throw new InvalidArgumentException("operator_id_type is required and must be specified");
         }
         if (is_null($request->getUploadId())) {
            throw new InvalidArgumentException("upload_id is required and must be specified");
         }
         if (is_null($request->getFileSize())) {
            throw new InvalidArgumentException("file_size is required and must be specified");
         }
         if (is_null($request->getFileSeq())) {
            throw new InvalidArgumentException("file_seq is required and must be specified");
         }
         if (is_null($request->getFileChecksum())) {
            throw new InvalidArgumentException("file_checksum is required and must be specified");
         }
         if (is_null($request->getFileContent())) {
            throw new InvalidArgumentException("file_content is required and must be specified");
         }

         $formData = [
             [
                 'name' => 'operator_id',
                 'contents' => $request->getOperatorId(),
             ],
             [
                 'name' => 'operator_id_type',
                 'contents' => $request->getOperatorIdType(),
             ],
             [
                 'name' => 'upload_id',
                 'contents' => $request->getUploadId(),
             ],
             [
                 'name' => 'file_size',
                 'contents' => $request->getFileSize(),
             ],
             [
                 'name' => 'file_seq',
                 'contents' => $request->getFileSeq(),
             ],
             [
                 'name' => 'file_checksum',
                 'contents' => $request->getFileChecksum(),
             ],
              [
                  'name' => 'file_content',
                  'contents' => $request->getFileContent(),
                  'filename' => $request->getFileName(),
              ],
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
             $response = $this->config->getClt()->post($apiRequest, $options);
             $statusCode = $response->getStatusCode();
             if ($statusCode >= 300) {
                 throw new ServiceException($response);
             } else {
                 return new ApiV1FilesRecordsUploadPartPostResponse($response);
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
     * Operation V1FilesRecordsUploadPreparePost
     *
     * 分块上传录制文件 - 预上传
     *
     */
     public function V1FilesRecordsUploadPreparePost(ApiV1FilesRecordsUploadPreparePostRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1FilesRecordsUploadPreparePostResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/files/records/upload-prepare';

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
                 return new ApiV1FilesRecordsUploadPreparePostResponse($response);
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
     * Operation V1MetricsRecordsGet
     *
     * 查询录制文件访问数据
     *
     */
     public function V1MetricsRecordsGet(ApiV1MetricsRecordsGetRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1MetricsRecordsGetResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/metrics/records';

         $pathParams = [];

         $queryParams = [];
         if (is_null($request->getMeetingRecordId())) {
            throw new InvalidArgumentException("meeting_record_id is required and must be specified");
         }
         if ($request->getMeetingRecordId() !== null) {
             $queryParams['meeting_record_id'] = $request->getMeetingRecordId();
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
                 return new ApiV1MetricsRecordsGetResponse($response);
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
     * Operation V1RecordsAccessMeetingRecordIdDelete
     *
     * 移除录制访问成员
     *
     */
     public function V1RecordsAccessMeetingRecordIdDelete(ApiV1RecordsAccessMeetingRecordIdDeleteRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1RecordsAccessMeetingRecordIdDeleteResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/records/access/{meeting_record_id}';

         $pathParams = [];
         if (empty($request->getMeetingRecordId())) {
            throw new InvalidArgumentException('meeting_record_id is required and must be specified');
         }
         if ($request->getMeetingRecordId() !== null) {
             $pathParams['meeting_record_id'] = $request->getMeetingRecordId();
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
                 return new ApiV1RecordsAccessMeetingRecordIdDeleteResponse($response);
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
     * Operation V1RecordsAccessMeetingRecordIdPost
     *
     * 添加录制访问成员
     *
     */
     public function V1RecordsAccessMeetingRecordIdPost(ApiV1RecordsAccessMeetingRecordIdPostRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1RecordsAccessMeetingRecordIdPostResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/records/access/{meeting_record_id}';

         $pathParams = [];
         if (empty($request->getMeetingRecordId())) {
            throw new InvalidArgumentException('meeting_record_id is required and must be specified');
         }
         if ($request->getMeetingRecordId() !== null) {
             $pathParams['meeting_record_id'] = $request->getMeetingRecordId();
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
                 return new ApiV1RecordsAccessMeetingRecordIdPostResponse($response);
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
     * Operation V1RecordsApprovalsMeetingRecordIdPut
     *
     * 审批云录制权限
     *
     */
     public function V1RecordsApprovalsMeetingRecordIdPut(ApiV1RecordsApprovalsMeetingRecordIdPutRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1RecordsApprovalsMeetingRecordIdPutResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/records/approvals/{meeting_record_id}';

         $pathParams = [];
         if (empty($request->getMeetingRecordId())) {
            throw new InvalidArgumentException('meeting_record_id is required and must be specified');
         }
         if ($request->getMeetingRecordId() !== null) {
             $pathParams['meeting_record_id'] = $request->getMeetingRecordId();
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
                 return new ApiV1RecordsApprovalsMeetingRecordIdPutResponse($response);
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
     * Operation V1RecordsDelete
     *
     * 删除会议录制
     *
     */
     public function V1RecordsDelete(ApiV1RecordsDeleteRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1RecordsDeleteResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/records';

         $pathParams = [];

         $queryParams = [];
         if (is_null($request->getMeetingRecordId())) {
            throw new InvalidArgumentException("meeting_record_id is required and must be specified");
         }
         if ($request->getMeetingId() !== null) {
             $queryParams['meeting_id'] = $request->getMeetingId();
         }
         if ($request->getMeetingRecordId() !== null) {
             $queryParams['meeting_record_id'] = $request->getMeetingRecordId();
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
                 return new ApiV1RecordsDeleteResponse($response);
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
     * Operation V1RecordsEventsGet
     *
     * 获取会议录制操作（查看、下载）记录
     *
     */
     public function V1RecordsEventsGet(ApiV1RecordsEventsGetRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1RecordsEventsGetResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/records/events';

         $pathParams = [];

         $queryParams = [];
         if (is_null($request->getMeetingRecordId())) {
            throw new InvalidArgumentException("meeting_record_id is required and must be specified");
         }
         if (is_null($request->getEventType())) {
            throw new InvalidArgumentException("event_type is required and must be specified");
         }
         if ($request->getMeetingRecordId() !== null) {
             $queryParams['meeting_record_id'] = $request->getMeetingRecordId();
         }
         if ($request->getEventType() !== null) {
             $queryParams['event_type'] = $request->getEventType();
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
                 return new ApiV1RecordsEventsGetResponse($response);
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
     * Operation V1RecordsGet
     *
     * 查询会议录制列表
     *
     */
     public function V1RecordsGet(ApiV1RecordsGetRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1RecordsGetResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/records';

         $pathParams = [];

         $queryParams = [];
         if (is_null($request->getOperatorId())) {
            throw new InvalidArgumentException("operator_id is required and must be specified");
         }
         if (is_null($request->getOperatorIdType())) {
            throw new InvalidArgumentException("operator_id_type is required and must be specified");
         }
         if (is_null($request->getStartTime())) {
            throw new InvalidArgumentException("start_time is required and must be specified");
         }
         if (is_null($request->getEndTime())) {
            throw new InvalidArgumentException("end_time is required and must be specified");
         }
         if ($request->getOperatorId() !== null) {
             $queryParams['operator_id'] = $request->getOperatorId();
         }
         if ($request->getOperatorIdType() !== null) {
             $queryParams['operator_id_type'] = $request->getOperatorIdType();
         }
         if ($request->getMeetingId() !== null) {
             $queryParams['meeting_id'] = $request->getMeetingId();
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
         if ($request->getPageSize() !== null) {
             $queryParams['page_size'] = $request->getPageSize();
         }
         if ($request->getPage() !== null) {
             $queryParams['page'] = $request->getPage();
         }
         if ($request->getMediaSetType() !== null) {
             $queryParams['media_set_type'] = $request->getMediaSetType();
         }
         if ($request->getQueryRecordType() !== null) {
             $queryParams['query_record_type'] = $request->getQueryRecordType();
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
                 return new ApiV1RecordsGetResponse($response);
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
     * Operation V1RecordsRecordFileIdDelete
     *
     * 删除单个录制文件
     *
     */
     public function V1RecordsRecordFileIdDelete(ApiV1RecordsRecordFileIdDeleteRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1RecordsRecordFileIdDeleteResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/records/{record_file_id}';

         $pathParams = [];
         if (empty($request->getRecordFileId())) {
            throw new InvalidArgumentException('record_file_id is required and must be specified');
         }
         if ($request->getRecordFileId() !== null) {
             $pathParams['record_file_id'] = $request->getRecordFileId();
         }

         $queryParams = [];
         if ($request->getMeetingId() !== null) {
             $queryParams['meeting_id'] = $request->getMeetingId();
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
                 return new ApiV1RecordsRecordFileIdDeleteResponse($response);
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
     * Operation V1RecordsSettingsMeetingRecordIdGet
     *
     * 查询会议录制共享设置
     *
     */
     public function V1RecordsSettingsMeetingRecordIdGet(ApiV1RecordsSettingsMeetingRecordIdGetRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1RecordsSettingsMeetingRecordIdGetResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/records/settings/{meeting_record_id}';

         $pathParams = [];
         if (empty($request->getMeetingRecordId())) {
            throw new InvalidArgumentException('meeting_record_id is required and must be specified');
         }
         if ($request->getMeetingRecordId() !== null) {
             $pathParams['meeting_record_id'] = $request->getMeetingRecordId();
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
                 return new ApiV1RecordsSettingsMeetingRecordIdGetResponse($response);
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
     * Operation V1RecordsSettingsMeetingRecordIdPut
     *
     * 修改会议录制共享设置
     *
     */
     public function V1RecordsSettingsMeetingRecordIdPut(ApiV1RecordsSettingsMeetingRecordIdPutRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1RecordsSettingsMeetingRecordIdPutResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/records/settings/{meeting_record_id}';

         $pathParams = [];
         if (empty($request->getMeetingRecordId())) {
            throw new InvalidArgumentException('meeting_record_id is required and must be specified');
         }
         if ($request->getMeetingRecordId() !== null) {
             $pathParams['meeting_record_id'] = $request->getMeetingRecordId();
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
                 return new ApiV1RecordsSettingsMeetingRecordIdPutResponse($response);
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
     * Operation V1RecordsTranscriptsDetailsGet
     *
     * 查询录制转写详情
     *
     */
     public function V1RecordsTranscriptsDetailsGet(ApiV1RecordsTranscriptsDetailsGetRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1RecordsTranscriptsDetailsGetResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/records/transcripts/details';

         $pathParams = [];

         $queryParams = [];
         if (is_null($request->getRecordFileId())) {
            throw new InvalidArgumentException("record_file_id is required and must be specified");
         }
         if (is_null($request->getOperatorId())) {
            throw new InvalidArgumentException("operator_id is required and must be specified");
         }
         if (is_null($request->getOperatorIdType())) {
            throw new InvalidArgumentException("operator_id_type is required and must be specified");
         }
         if ($request->getMeetingId() !== null) {
             $queryParams['meeting_id'] = $request->getMeetingId();
         }
         if ($request->getRecordFileId() !== null) {
             $queryParams['record_file_id'] = $request->getRecordFileId();
         }
         if ($request->getPid() !== null) {
             $queryParams['pid'] = $request->getPid();
         }
         if ($request->getLimit() !== null) {
             $queryParams['limit'] = $request->getLimit();
         }
         if ($request->getOperatorId() !== null) {
             $queryParams['operator_id'] = $request->getOperatorId();
         }
         if ($request->getOperatorIdType() !== null) {
             $queryParams['operator_id_type'] = $request->getOperatorIdType();
         }
         if ($request->getTranscriptsType() !== null) {
             $queryParams['transcripts_type'] = $request->getTranscriptsType();
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
                 return new ApiV1RecordsTranscriptsDetailsGetResponse($response);
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
     * Operation V1RecordsTranscriptsParagraphsGet
     *
     * 查询录制转写段落信息
     *
     */
     public function V1RecordsTranscriptsParagraphsGet(ApiV1RecordsTranscriptsParagraphsGetRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1RecordsTranscriptsParagraphsGetResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/records/transcripts/paragraphs';

         $pathParams = [];

         $queryParams = [];
         if (is_null($request->getRecordFileId())) {
            throw new InvalidArgumentException("record_file_id is required and must be specified");
         }
         if (is_null($request->getOperatorIdType())) {
            throw new InvalidArgumentException("operator_id_type is required and must be specified");
         }
         if (is_null($request->getOperatorId())) {
            throw new InvalidArgumentException("operator_id is required and must be specified");
         }
         if ($request->getMeetingId() !== null) {
             $queryParams['meeting_id'] = $request->getMeetingId();
         }
         if ($request->getRecordFileId() !== null) {
             $queryParams['record_file_id'] = $request->getRecordFileId();
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
                 return new ApiV1RecordsTranscriptsParagraphsGetResponse($response);
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
     * Operation V1RecordsTranscriptsSearchGet
     *
     * 查询录制转写搜索结果
     *
     */
     public function V1RecordsTranscriptsSearchGet(ApiV1RecordsTranscriptsSearchGetRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1RecordsTranscriptsSearchGetResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/records/transcripts/search';

         $pathParams = [];

         $queryParams = [];
         if (is_null($request->getRecordFileId())) {
            throw new InvalidArgumentException("record_file_id is required and must be specified");
         }
         if (is_null($request->getOperatorId())) {
            throw new InvalidArgumentException("operator_id is required and must be specified");
         }
         if (is_null($request->getOperatorIdType())) {
            throw new InvalidArgumentException("operator_id_type is required and must be specified");
         }
         if (is_null($request->getText())) {
            throw new InvalidArgumentException("text is required and must be specified");
         }
         if ($request->getMeetingId() !== null) {
             $queryParams['meeting_id'] = $request->getMeetingId();
         }
         if ($request->getRecordFileId() !== null) {
             $queryParams['record_file_id'] = $request->getRecordFileId();
         }
         if ($request->getOperatorId() !== null) {
             $queryParams['operator_id'] = $request->getOperatorId();
         }
         if ($request->getOperatorIdType() !== null) {
             $queryParams['operator_id_type'] = $request->getOperatorIdType();
         }
         if ($request->getText() !== null) {
             $queryParams['text'] = $request->getText();
         }
         if ($request->getTranscriptsType() !== null) {
             $queryParams['transcripts_type'] = $request->getTranscriptsType();
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
                 return new ApiV1RecordsTranscriptsSearchGetResponse($response);
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
     * Operation V1RecordsTransferRecordingPut
     *
     * 设置专网会议转存
     *
     */
     public function V1RecordsTransferRecordingPut(ApiV1RecordsTransferRecordingPutRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1RecordsTransferRecordingPutResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/records/transfer-recording';

         $pathParams = [];

         $queryParams = [];
         if (is_null($request->getMeetingId())) {
            throw new InvalidArgumentException("meeting_id is required and must be specified");
         }
         if (is_null($request->getMeetingRecordId())) {
            throw new InvalidArgumentException("meeting_record_id is required and must be specified");
         }
         if ($request->getMeetingId() !== null) {
             $queryParams['meeting_id'] = $request->getMeetingId();
         }
         if ($request->getMeetingRecordId() !== null) {
             $queryParams['meeting_record_id'] = $request->getMeetingRecordId();
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
                 return new ApiV1RecordsTransferRecordingPutResponse($response);
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
     * Operation V1RecordsViewDetailsGet
     *
     * 查询录制文件观看流水记录
     *
     */
     public function V1RecordsViewDetailsGet(ApiV1RecordsViewDetailsGetRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1RecordsViewDetailsGetResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/records/view-details';

         $pathParams = [];

         $queryParams = [];
         if (is_null($request->getRecordFileId())) {
            throw new InvalidArgumentException("record_file_id is required and must be specified");
         }
         if (is_null($request->getOperatorIdType())) {
            throw new InvalidArgumentException("operator_id_type is required and must be specified");
         }
         if (is_null($request->getOperatorId())) {
            throw new InvalidArgumentException("operator_id is required and must be specified");
         }
         if ($request->getRecordFileId() !== null) {
             $queryParams['record_file_id'] = $request->getRecordFileId();
         }
         if ($request->getOperatorIdType() !== null) {
             $queryParams['operator_id_type'] = $request->getOperatorIdType();
         }
         if ($request->getOperatorId() !== null) {
             $queryParams['operator_id'] = $request->getOperatorId();
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
                 return new ApiV1RecordsViewDetailsGetResponse($response);
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

class ApiV1AddressesGetRequest {

    protected string|null $meeting_record_id = null;
    protected string|null $operator_id = null;
    protected string|null $operator_id_type = null;
    protected string|null $userid = null;
    protected string|null $page_size = null;
    protected string|null $page = null;
    protected string|null $address_type = null;
    protected object|null $body = null;

    public function getMeetingRecordId(): string|null  {
        return $this->meeting_record_id;
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
    public function getPageSize(): string|null  {
        return $this->page_size;
    }
    public function getPage(): string|null  {
        return $this->page;
    }
    public function getAddressType(): string|null  {
        return $this->address_type;
    }
    public function getBody(): object|null  {
        return $this->body;
    }


    public function withMeetingRecordId(string $meeting_record_id): ApiV1AddressesGetRequest  {
        $this->meeting_record_id = $meeting_record_id;
        return $this;
    }

    public function withOperatorId(string $operator_id): ApiV1AddressesGetRequest  {
        $this->operator_id = $operator_id;
        return $this;
    }

    public function withOperatorIdType(string $operator_id_type): ApiV1AddressesGetRequest  {
        $this->operator_id_type = $operator_id_type;
        return $this;
    }

    public function withUserid(string $userid): ApiV1AddressesGetRequest  {
        $this->userid = $userid;
        return $this;
    }

    public function withPageSize(string $page_size): ApiV1AddressesGetRequest  {
        $this->page_size = $page_size;
        return $this;
    }

    public function withPage(string $page): ApiV1AddressesGetRequest  {
        $this->page = $page;
        return $this;
    }

    public function withAddressType(string $address_type): ApiV1AddressesGetRequest  {
        $this->address_type = $address_type;
        return $this;
    }
    public function withBody(object $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1AddressesGetResponse extends ApiResponse {

    protected \wemeet\openapi\service\records\model\V1AddressesGet200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\records\model\V1AddressesGet200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1AddressesRecordFileIdGetRequest {

    protected string|null $record_file_id = null;
    protected string|null $operator_id = null;
    protected string|null $operator_id_type = null;
    protected string|null $userid = null;
    protected string|null $address_type = null;
    protected object|null $body = null;

    public function getRecordFileId(): string|null  {
        return $this->record_file_id;
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
    public function getAddressType(): string|null  {
        return $this->address_type;
    }
    public function getBody(): object|null  {
        return $this->body;
    }


    public function withRecordFileId(string $record_file_id): ApiV1AddressesRecordFileIdGetRequest  {
        $this->record_file_id = $record_file_id;
        return $this;
    }

    public function withOperatorId(string $operator_id): ApiV1AddressesRecordFileIdGetRequest  {
        $this->operator_id = $operator_id;
        return $this;
    }

    public function withOperatorIdType(string $operator_id_type): ApiV1AddressesRecordFileIdGetRequest  {
        $this->operator_id_type = $operator_id_type;
        return $this;
    }

    public function withUserid(string $userid): ApiV1AddressesRecordFileIdGetRequest  {
        $this->userid = $userid;
        return $this;
    }

    public function withAddressType(string $address_type): ApiV1AddressesRecordFileIdGetRequest  {
        $this->address_type = $address_type;
        return $this;
    }
    public function withBody(object $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1AddressesRecordFileIdGetResponse extends ApiResponse {

    protected \wemeet\openapi\service\records\model\V1AddressesRecordFileIdGet200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\records\model\V1AddressesRecordFileIdGet200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1FilesRecordsUploadAllPostRequest {

    protected string|null $operator_id = null;
    protected int|null $operator_id_type = null;
    protected string|null $file_name = null;
    protected string|null $file_type = null;
    protected int|null $file_size = null;
    protected string|null $file_checksum = null;
    protected \SplFileObject|null $file_content = null;
    protected int|null $speak_number = null;
    protected bool|null $ai_record = null;

    public function getOperatorId(): string|null  {
        return $this->operator_id;
    }
    public function getOperatorIdType(): int|null  {
        return $this->operator_id_type;
    }
    public function getFileName(): string|null  {
        return $this->file_name;
    }
    public function getFileType(): string|null  {
        return $this->file_type;
    }
    public function getFileSize(): int|null  {
        return $this->file_size;
    }
    public function getFileChecksum(): string|null  {
        return $this->file_checksum;
    }
    public function getFileContent(): \SplFileObject|null  {
        return $this->file_content;
    }
    public function getSpeakNumber(): int|null  {
        return $this->speak_number;
    }
    public function getAiRecord(): bool|null  {
        return $this->ai_record;
    }


    public function withOperatorId(string $operator_id): ApiV1FilesRecordsUploadAllPostRequest  {
        $this->operator_id = $operator_id;
        return $this;
    }

    public function withOperatorIdType(int $operator_id_type): ApiV1FilesRecordsUploadAllPostRequest  {
        $this->operator_id_type = $operator_id_type;
        return $this;
    }

    public function withFileName(string $file_name): ApiV1FilesRecordsUploadAllPostRequest  {
        $this->file_name = $file_name;
        return $this;
    }

    public function withFileType(string $file_type): ApiV1FilesRecordsUploadAllPostRequest  {
        $this->file_type = $file_type;
        return $this;
    }

    public function withFileSize(int $file_size): ApiV1FilesRecordsUploadAllPostRequest  {
        $this->file_size = $file_size;
        return $this;
    }

    public function withFileChecksum(string $file_checksum): ApiV1FilesRecordsUploadAllPostRequest  {
        $this->file_checksum = $file_checksum;
        return $this;
    }

    public function withFileContent(\SplFileObject $file_content): ApiV1FilesRecordsUploadAllPostRequest  {
        $this->file_content = $file_content;
        return $this;
    }

    public function withSpeakNumber(int $speak_number): ApiV1FilesRecordsUploadAllPostRequest  {
        $this->speak_number = $speak_number;
        return $this;
    }

    public function withAiRecord(bool $ai_record): ApiV1FilesRecordsUploadAllPostRequest  {
        $this->ai_record = $ai_record;
        return $this;
    }

}

class ApiV1FilesRecordsUploadAllPostResponse extends ApiResponse {

    protected \wemeet\openapi\service\records\model\V1FilesRecordsUploadAllPost200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\records\model\V1FilesRecordsUploadAllPost200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1FilesRecordsUploadFinishPostRequest {

    protected \wemeet\openapi\service\records\model\V1FilesRecordsUploadFinishPostRequest $body;

    public function getBody(): \wemeet\openapi\service\records\model\V1FilesRecordsUploadFinishPostRequest  {
        return $this->body;
    }

    public function withBody(\wemeet\openapi\service\records\model\V1FilesRecordsUploadFinishPostRequest $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1FilesRecordsUploadFinishPostResponse extends ApiResponse {

    protected \wemeet\openapi\service\records\model\V1FilesRecordsUploadAllPost200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\records\model\V1FilesRecordsUploadAllPost200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1FilesRecordsUploadPartPostRequest {

    protected string|null $operator_id = null;
    protected int|null $operator_id_type = null;
    protected string|null $upload_id = null;
    protected int|null $file_size = null;
    protected int|null $file_seq = null;
    protected string|null $file_checksum = null;
    protected \SplFileObject|null $file_content = null;

    public function getOperatorId(): string|null  {
        return $this->operator_id;
    }
    public function getOperatorIdType(): int|null  {
        return $this->operator_id_type;
    }
    public function getUploadId(): string|null  {
        return $this->upload_id;
    }
    public function getFileSize(): int|null  {
        return $this->file_size;
    }
    public function getFileSeq(): int|null  {
        return $this->file_seq;
    }
    public function getFileChecksum(): string|null  {
        return $this->file_checksum;
    }
    public function getFileContent(): \SplFileObject|null  {
        return $this->file_content;
    }


    public function withOperatorId(string $operator_id): ApiV1FilesRecordsUploadPartPostRequest  {
        $this->operator_id = $operator_id;
        return $this;
    }

    public function withOperatorIdType(int $operator_id_type): ApiV1FilesRecordsUploadPartPostRequest  {
        $this->operator_id_type = $operator_id_type;
        return $this;
    }

    public function withUploadId(string $upload_id): ApiV1FilesRecordsUploadPartPostRequest  {
        $this->upload_id = $upload_id;
        return $this;
    }

    public function withFileSize(int $file_size): ApiV1FilesRecordsUploadPartPostRequest  {
        $this->file_size = $file_size;
        return $this;
    }

    public function withFileSeq(int $file_seq): ApiV1FilesRecordsUploadPartPostRequest  {
        $this->file_seq = $file_seq;
        return $this;
    }

    public function withFileChecksum(string $file_checksum): ApiV1FilesRecordsUploadPartPostRequest  {
        $this->file_checksum = $file_checksum;
        return $this;
    }

    public function withFileContent(\SplFileObject $file_content): ApiV1FilesRecordsUploadPartPostRequest  {
        $this->file_content = $file_content;
        return $this;
    }

}

class ApiV1FilesRecordsUploadPartPostResponse extends ApiResponse {

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

class ApiV1FilesRecordsUploadPreparePostRequest {

    protected \wemeet\openapi\service\records\model\V1FilesRecordsUploadPreparePostRequest $body;

    public function getBody(): \wemeet\openapi\service\records\model\V1FilesRecordsUploadPreparePostRequest  {
        return $this->body;
    }

    public function withBody(\wemeet\openapi\service\records\model\V1FilesRecordsUploadPreparePostRequest $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1FilesRecordsUploadPreparePostResponse extends ApiResponse {

    protected \wemeet\openapi\service\records\model\V1FilesRecordsUploadPreparePost200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\records\model\V1FilesRecordsUploadPreparePost200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1MetricsRecordsGetRequest {

    protected string|null $meeting_record_id = null;
    protected string|null $start_time = null;
    protected string|null $end_time = null;
    protected object|null $body = null;

    public function getMeetingRecordId(): string|null  {
        return $this->meeting_record_id;
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


    public function withMeetingRecordId(string $meeting_record_id): ApiV1MetricsRecordsGetRequest  {
        $this->meeting_record_id = $meeting_record_id;
        return $this;
    }

    public function withStartTime(string $start_time): ApiV1MetricsRecordsGetRequest  {
        $this->start_time = $start_time;
        return $this;
    }

    public function withEndTime(string $end_time): ApiV1MetricsRecordsGetRequest  {
        $this->end_time = $end_time;
        return $this;
    }
    public function withBody(object $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1MetricsRecordsGetResponse extends ApiResponse {

    protected \wemeet\openapi\service\records\model\V1MetricsRecordsGet200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\records\model\V1MetricsRecordsGet200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1RecordsAccessMeetingRecordIdDeleteRequest {

    protected string|null $meeting_record_id = null;
    protected \wemeet\openapi\service\records\model\V1RecordsAccessMeetingRecordIdDeleteRequest $body;

    public function getMeetingRecordId(): string|null  {
        return $this->meeting_record_id;
    }
    public function getBody(): \wemeet\openapi\service\records\model\V1RecordsAccessMeetingRecordIdDeleteRequest  {
        return $this->body;
    }


    public function withMeetingRecordId(string $meeting_record_id): ApiV1RecordsAccessMeetingRecordIdDeleteRequest  {
        $this->meeting_record_id = $meeting_record_id;
        return $this;
    }
    public function withBody(\wemeet\openapi\service\records\model\V1RecordsAccessMeetingRecordIdDeleteRequest $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1RecordsAccessMeetingRecordIdDeleteResponse extends ApiResponse {

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

class ApiV1RecordsAccessMeetingRecordIdPostRequest {

    protected string|null $meeting_record_id = null;
    protected \wemeet\openapi\service\records\model\V1RecordsAccessMeetingRecordIdPostRequest $body;

    public function getMeetingRecordId(): string|null  {
        return $this->meeting_record_id;
    }
    public function getBody(): \wemeet\openapi\service\records\model\V1RecordsAccessMeetingRecordIdPostRequest  {
        return $this->body;
    }


    public function withMeetingRecordId(string $meeting_record_id): ApiV1RecordsAccessMeetingRecordIdPostRequest  {
        $this->meeting_record_id = $meeting_record_id;
        return $this;
    }
    public function withBody(\wemeet\openapi\service\records\model\V1RecordsAccessMeetingRecordIdPostRequest $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1RecordsAccessMeetingRecordIdPostResponse extends ApiResponse {

    protected \wemeet\openapi\service\records\model\V1RecordsAccessMeetingRecordIdPost200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\records\model\V1RecordsAccessMeetingRecordIdPost200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1RecordsApprovalsMeetingRecordIdPutRequest {

    protected string|null $meeting_record_id = null;
    protected \wemeet\openapi\service\records\model\V1RecordsApprovalsMeetingRecordIdPutRequest $body;

    public function getMeetingRecordId(): string|null  {
        return $this->meeting_record_id;
    }
    public function getBody(): \wemeet\openapi\service\records\model\V1RecordsApprovalsMeetingRecordIdPutRequest  {
        return $this->body;
    }


    public function withMeetingRecordId(string $meeting_record_id): ApiV1RecordsApprovalsMeetingRecordIdPutRequest  {
        $this->meeting_record_id = $meeting_record_id;
        return $this;
    }
    public function withBody(\wemeet\openapi\service\records\model\V1RecordsApprovalsMeetingRecordIdPutRequest $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1RecordsApprovalsMeetingRecordIdPutResponse extends ApiResponse {

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

class ApiV1RecordsDeleteRequest {

    protected string|null $meeting_record_id = null;
    protected string|null $meeting_id = null;
    protected string|null $operator_id = null;
    protected string|null $operator_id_type = null;
    protected string|null $userid = null;
    protected object|null $body = null;

    public function getMeetingRecordId(): string|null  {
        return $this->meeting_record_id;
    }
    public function getMeetingId(): string|null  {
        return $this->meeting_id;
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
    public function getBody(): object|null  {
        return $this->body;
    }


    public function withMeetingRecordId(string $meeting_record_id): ApiV1RecordsDeleteRequest  {
        $this->meeting_record_id = $meeting_record_id;
        return $this;
    }

    public function withMeetingId(string $meeting_id): ApiV1RecordsDeleteRequest  {
        $this->meeting_id = $meeting_id;
        return $this;
    }

    public function withOperatorId(string $operator_id): ApiV1RecordsDeleteRequest  {
        $this->operator_id = $operator_id;
        return $this;
    }

    public function withOperatorIdType(string $operator_id_type): ApiV1RecordsDeleteRequest  {
        $this->operator_id_type = $operator_id_type;
        return $this;
    }

    public function withUserid(string $userid): ApiV1RecordsDeleteRequest  {
        $this->userid = $userid;
        return $this;
    }
    public function withBody(object $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1RecordsDeleteResponse extends ApiResponse {

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

class ApiV1RecordsEventsGetRequest {

    protected string|null $meeting_record_id = null;
    protected string|null $event_type = null;
    protected string|null $page_size = null;
    protected string|null $page = null;
    protected string|null $start_time = null;
    protected string|null $end_time = null;

    public function getMeetingRecordId(): string|null  {
        return $this->meeting_record_id;
    }
    public function getEventType(): string|null  {
        return $this->event_type;
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
    public function getEndTime(): string|null  {
        return $this->end_time;
    }


    public function withMeetingRecordId(string $meeting_record_id): ApiV1RecordsEventsGetRequest  {
        $this->meeting_record_id = $meeting_record_id;
        return $this;
    }

    public function withEventType(string $event_type): ApiV1RecordsEventsGetRequest  {
        $this->event_type = $event_type;
        return $this;
    }

    public function withPageSize(string $page_size): ApiV1RecordsEventsGetRequest  {
        $this->page_size = $page_size;
        return $this;
    }

    public function withPage(string $page): ApiV1RecordsEventsGetRequest  {
        $this->page = $page;
        return $this;
    }

    public function withStartTime(string $start_time): ApiV1RecordsEventsGetRequest  {
        $this->start_time = $start_time;
        return $this;
    }

    public function withEndTime(string $end_time): ApiV1RecordsEventsGetRequest  {
        $this->end_time = $end_time;
        return $this;
    }

}

class ApiV1RecordsEventsGetResponse extends ApiResponse {

    protected \wemeet\openapi\service\records\model\V1RecordsEventsGet200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\records\model\V1RecordsEventsGet200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1RecordsGetRequest {

    protected string|null $operator_id = null;
    protected string|null $operator_id_type = null;
    protected string|null $start_time = null;
    protected string|null $end_time = null;
    protected string|null $meeting_id = null;
    protected string|null $meeting_code = null;
    protected string|null $page_size = null;
    protected string|null $page = null;
    protected string|null $media_set_type = null;
    protected string|null $query_record_type = null;
    protected object|null $body = null;

    public function getOperatorId(): string|null  {
        return $this->operator_id;
    }
    public function getOperatorIdType(): string|null  {
        return $this->operator_id_type;
    }
    public function getStartTime(): string|null  {
        return $this->start_time;
    }
    public function getEndTime(): string|null  {
        return $this->end_time;
    }
    public function getMeetingId(): string|null  {
        return $this->meeting_id;
    }
    public function getMeetingCode(): string|null  {
        return $this->meeting_code;
    }
    public function getPageSize(): string|null  {
        return $this->page_size;
    }
    public function getPage(): string|null  {
        return $this->page;
    }
    public function getMediaSetType(): string|null  {
        return $this->media_set_type;
    }
    public function getQueryRecordType(): string|null  {
        return $this->query_record_type;
    }
    public function getBody(): object|null  {
        return $this->body;
    }


    public function withOperatorId(string $operator_id): ApiV1RecordsGetRequest  {
        $this->operator_id = $operator_id;
        return $this;
    }

    public function withOperatorIdType(string $operator_id_type): ApiV1RecordsGetRequest  {
        $this->operator_id_type = $operator_id_type;
        return $this;
    }

    public function withStartTime(string $start_time): ApiV1RecordsGetRequest  {
        $this->start_time = $start_time;
        return $this;
    }

    public function withEndTime(string $end_time): ApiV1RecordsGetRequest  {
        $this->end_time = $end_time;
        return $this;
    }

    public function withMeetingId(string $meeting_id): ApiV1RecordsGetRequest  {
        $this->meeting_id = $meeting_id;
        return $this;
    }

    public function withMeetingCode(string $meeting_code): ApiV1RecordsGetRequest  {
        $this->meeting_code = $meeting_code;
        return $this;
    }

    public function withPageSize(string $page_size): ApiV1RecordsGetRequest  {
        $this->page_size = $page_size;
        return $this;
    }

    public function withPage(string $page): ApiV1RecordsGetRequest  {
        $this->page = $page;
        return $this;
    }

    public function withMediaSetType(string $media_set_type): ApiV1RecordsGetRequest  {
        $this->media_set_type = $media_set_type;
        return $this;
    }

    public function withQueryRecordType(string $query_record_type): ApiV1RecordsGetRequest  {
        $this->query_record_type = $query_record_type;
        return $this;
    }
    public function withBody(object $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1RecordsGetResponse extends ApiResponse {

    protected \wemeet\openapi\service\records\model\V1RecordsGet200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\records\model\V1RecordsGet200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1RecordsRecordFileIdDeleteRequest {

    protected string|null $record_file_id = null;
    protected string|null $meeting_id = null;
    protected string|null $operator_id = null;
    protected string|null $operator_id_type = null;
    protected string|null $userid = null;
    protected object|null $body = null;

    public function getRecordFileId(): string|null  {
        return $this->record_file_id;
    }
    public function getMeetingId(): string|null  {
        return $this->meeting_id;
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
    public function getBody(): object|null  {
        return $this->body;
    }


    public function withRecordFileId(string $record_file_id): ApiV1RecordsRecordFileIdDeleteRequest  {
        $this->record_file_id = $record_file_id;
        return $this;
    }

    public function withMeetingId(string $meeting_id): ApiV1RecordsRecordFileIdDeleteRequest  {
        $this->meeting_id = $meeting_id;
        return $this;
    }

    public function withOperatorId(string $operator_id): ApiV1RecordsRecordFileIdDeleteRequest  {
        $this->operator_id = $operator_id;
        return $this;
    }

    public function withOperatorIdType(string $operator_id_type): ApiV1RecordsRecordFileIdDeleteRequest  {
        $this->operator_id_type = $operator_id_type;
        return $this;
    }

    public function withUserid(string $userid): ApiV1RecordsRecordFileIdDeleteRequest  {
        $this->userid = $userid;
        return $this;
    }
    public function withBody(object $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1RecordsRecordFileIdDeleteResponse extends ApiResponse {

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

class ApiV1RecordsSettingsMeetingRecordIdGetRequest {

    protected string|null $meeting_record_id = null;
    protected string|null $operator_id = null;
    protected string|null $operator_id_type = null;
    protected object|null $body = null;

    public function getMeetingRecordId(): string|null  {
        return $this->meeting_record_id;
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


    public function withMeetingRecordId(string $meeting_record_id): ApiV1RecordsSettingsMeetingRecordIdGetRequest  {
        $this->meeting_record_id = $meeting_record_id;
        return $this;
    }

    public function withOperatorId(string $operator_id): ApiV1RecordsSettingsMeetingRecordIdGetRequest  {
        $this->operator_id = $operator_id;
        return $this;
    }

    public function withOperatorIdType(string $operator_id_type): ApiV1RecordsSettingsMeetingRecordIdGetRequest  {
        $this->operator_id_type = $operator_id_type;
        return $this;
    }
    public function withBody(object $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1RecordsSettingsMeetingRecordIdGetResponse extends ApiResponse {

    protected \wemeet\openapi\service\records\model\V1RecordsSettingsMeetingRecordIdGet200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\records\model\V1RecordsSettingsMeetingRecordIdGet200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1RecordsSettingsMeetingRecordIdPutRequest {

    protected string|null $meeting_record_id = null;
    protected \wemeet\openapi\service\records\model\V1RecordsSettingsMeetingRecordIdPutRequest $body;

    public function getMeetingRecordId(): string|null  {
        return $this->meeting_record_id;
    }
    public function getBody(): \wemeet\openapi\service\records\model\V1RecordsSettingsMeetingRecordIdPutRequest  {
        return $this->body;
    }


    public function withMeetingRecordId(string $meeting_record_id): ApiV1RecordsSettingsMeetingRecordIdPutRequest  {
        $this->meeting_record_id = $meeting_record_id;
        return $this;
    }
    public function withBody(\wemeet\openapi\service\records\model\V1RecordsSettingsMeetingRecordIdPutRequest $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1RecordsSettingsMeetingRecordIdPutResponse extends ApiResponse {

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

class ApiV1RecordsTranscriptsDetailsGetRequest {

    protected string|null $record_file_id = null;
    protected string|null $operator_id = null;
    protected string|null $operator_id_type = null;
    protected string|null $meeting_id = null;
    protected string|null $pid = null;
    protected string|null $limit = null;
    protected string|null $transcripts_type = null;
    protected object|null $body = null;

    public function getRecordFileId(): string|null  {
        return $this->record_file_id;
    }
    public function getOperatorId(): string|null  {
        return $this->operator_id;
    }
    public function getOperatorIdType(): string|null  {
        return $this->operator_id_type;
    }
    public function getMeetingId(): string|null  {
        return $this->meeting_id;
    }
    public function getPid(): string|null  {
        return $this->pid;
    }
    public function getLimit(): string|null  {
        return $this->limit;
    }
    public function getTranscriptsType(): string|null  {
        return $this->transcripts_type;
    }
    public function getBody(): object|null  {
        return $this->body;
    }


    public function withRecordFileId(string $record_file_id): ApiV1RecordsTranscriptsDetailsGetRequest  {
        $this->record_file_id = $record_file_id;
        return $this;
    }

    public function withOperatorId(string $operator_id): ApiV1RecordsTranscriptsDetailsGetRequest  {
        $this->operator_id = $operator_id;
        return $this;
    }

    public function withOperatorIdType(string $operator_id_type): ApiV1RecordsTranscriptsDetailsGetRequest  {
        $this->operator_id_type = $operator_id_type;
        return $this;
    }

    public function withMeetingId(string $meeting_id): ApiV1RecordsTranscriptsDetailsGetRequest  {
        $this->meeting_id = $meeting_id;
        return $this;
    }

    public function withPid(string $pid): ApiV1RecordsTranscriptsDetailsGetRequest  {
        $this->pid = $pid;
        return $this;
    }

    public function withLimit(string $limit): ApiV1RecordsTranscriptsDetailsGetRequest  {
        $this->limit = $limit;
        return $this;
    }

    public function withTranscriptsType(string $transcripts_type): ApiV1RecordsTranscriptsDetailsGetRequest  {
        $this->transcripts_type = $transcripts_type;
        return $this;
    }
    public function withBody(object $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1RecordsTranscriptsDetailsGetResponse extends ApiResponse {

    protected \wemeet\openapi\service\records\model\V1RecordsTranscriptsDetailsGet200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\records\model\V1RecordsTranscriptsDetailsGet200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1RecordsTranscriptsParagraphsGetRequest {

    protected string|null $record_file_id = null;
    protected string|null $operator_id_type = null;
    protected string|null $operator_id = null;
    protected string|null $meeting_id = null;
    protected object|null $body = null;

    public function getRecordFileId(): string|null  {
        return $this->record_file_id;
    }
    public function getOperatorIdType(): string|null  {
        return $this->operator_id_type;
    }
    public function getOperatorId(): string|null  {
        return $this->operator_id;
    }
    public function getMeetingId(): string|null  {
        return $this->meeting_id;
    }
    public function getBody(): object|null  {
        return $this->body;
    }


    public function withRecordFileId(string $record_file_id): ApiV1RecordsTranscriptsParagraphsGetRequest  {
        $this->record_file_id = $record_file_id;
        return $this;
    }

    public function withOperatorIdType(string $operator_id_type): ApiV1RecordsTranscriptsParagraphsGetRequest  {
        $this->operator_id_type = $operator_id_type;
        return $this;
    }

    public function withOperatorId(string $operator_id): ApiV1RecordsTranscriptsParagraphsGetRequest  {
        $this->operator_id = $operator_id;
        return $this;
    }

    public function withMeetingId(string $meeting_id): ApiV1RecordsTranscriptsParagraphsGetRequest  {
        $this->meeting_id = $meeting_id;
        return $this;
    }
    public function withBody(object $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1RecordsTranscriptsParagraphsGetResponse extends ApiResponse {

    protected \wemeet\openapi\service\records\model\V1RecordsTranscriptsParagraphsGet200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\records\model\V1RecordsTranscriptsParagraphsGet200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1RecordsTranscriptsSearchGetRequest {

    protected string|null $record_file_id = null;
    protected string|null $operator_id = null;
    protected string|null $operator_id_type = null;
    protected string|null $text = null;
    protected string|null $meeting_id = null;
    protected string|null $transcripts_type = null;
    protected object|null $body = null;

    public function getRecordFileId(): string|null  {
        return $this->record_file_id;
    }
    public function getOperatorId(): string|null  {
        return $this->operator_id;
    }
    public function getOperatorIdType(): string|null  {
        return $this->operator_id_type;
    }
    public function getText(): string|null  {
        return $this->text;
    }
    public function getMeetingId(): string|null  {
        return $this->meeting_id;
    }
    public function getTranscriptsType(): string|null  {
        return $this->transcripts_type;
    }
    public function getBody(): object|null  {
        return $this->body;
    }


    public function withRecordFileId(string $record_file_id): ApiV1RecordsTranscriptsSearchGetRequest  {
        $this->record_file_id = $record_file_id;
        return $this;
    }

    public function withOperatorId(string $operator_id): ApiV1RecordsTranscriptsSearchGetRequest  {
        $this->operator_id = $operator_id;
        return $this;
    }

    public function withOperatorIdType(string $operator_id_type): ApiV1RecordsTranscriptsSearchGetRequest  {
        $this->operator_id_type = $operator_id_type;
        return $this;
    }

    public function withText(string $text): ApiV1RecordsTranscriptsSearchGetRequest  {
        $this->text = $text;
        return $this;
    }

    public function withMeetingId(string $meeting_id): ApiV1RecordsTranscriptsSearchGetRequest  {
        $this->meeting_id = $meeting_id;
        return $this;
    }

    public function withTranscriptsType(string $transcripts_type): ApiV1RecordsTranscriptsSearchGetRequest  {
        $this->transcripts_type = $transcripts_type;
        return $this;
    }
    public function withBody(object $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1RecordsTranscriptsSearchGetResponse extends ApiResponse {

    protected \wemeet\openapi\service\records\model\V1RecordsTranscriptsSearchGet200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\records\model\V1RecordsTranscriptsSearchGet200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

class ApiV1RecordsTransferRecordingPutRequest {

    protected string|null $meeting_id = null;
    protected string|null $meeting_record_id = null;
    protected \wemeet\openapi\service\records\model\V1RecordsTransferRecordingPutRequest $body;

    public function getMeetingId(): string|null  {
        return $this->meeting_id;
    }
    public function getMeetingRecordId(): string|null  {
        return $this->meeting_record_id;
    }
    public function getBody(): \wemeet\openapi\service\records\model\V1RecordsTransferRecordingPutRequest  {
        return $this->body;
    }


    public function withMeetingId(string $meeting_id): ApiV1RecordsTransferRecordingPutRequest  {
        $this->meeting_id = $meeting_id;
        return $this;
    }

    public function withMeetingRecordId(string $meeting_record_id): ApiV1RecordsTransferRecordingPutRequest  {
        $this->meeting_record_id = $meeting_record_id;
        return $this;
    }
    public function withBody(\wemeet\openapi\service\records\model\V1RecordsTransferRecordingPutRequest $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1RecordsTransferRecordingPutResponse extends ApiResponse {

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

class ApiV1RecordsViewDetailsGetRequest {

    protected string|null $record_file_id = null;
    protected string|null $operator_id_type = null;
    protected string|null $operator_id = null;
    protected string|null $page_size = null;
    protected string|null $page = null;
    protected string|null $start_time = null;
    protected string|null $end_time = null;
    protected object|null $body = null;

    public function getRecordFileId(): string|null  {
        return $this->record_file_id;
    }
    public function getOperatorIdType(): string|null  {
        return $this->operator_id_type;
    }
    public function getOperatorId(): string|null  {
        return $this->operator_id;
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
    public function getEndTime(): string|null  {
        return $this->end_time;
    }
    public function getBody(): object|null  {
        return $this->body;
    }


    public function withRecordFileId(string $record_file_id): ApiV1RecordsViewDetailsGetRequest  {
        $this->record_file_id = $record_file_id;
        return $this;
    }

    public function withOperatorIdType(string $operator_id_type): ApiV1RecordsViewDetailsGetRequest  {
        $this->operator_id_type = $operator_id_type;
        return $this;
    }

    public function withOperatorId(string $operator_id): ApiV1RecordsViewDetailsGetRequest  {
        $this->operator_id = $operator_id;
        return $this;
    }

    public function withPageSize(string $page_size): ApiV1RecordsViewDetailsGetRequest  {
        $this->page_size = $page_size;
        return $this;
    }

    public function withPage(string $page): ApiV1RecordsViewDetailsGetRequest  {
        $this->page = $page;
        return $this;
    }

    public function withStartTime(string $start_time): ApiV1RecordsViewDetailsGetRequest  {
        $this->start_time = $start_time;
        return $this;
    }

    public function withEndTime(string $end_time): ApiV1RecordsViewDetailsGetRequest  {
        $this->end_time = $end_time;
        return $this;
    }
    public function withBody(object $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1RecordsViewDetailsGetResponse extends ApiResponse {

    protected \wemeet\openapi\service\records\model\V1RecordsViewDetailsGet200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\records\model\V1RecordsViewDetailsGet200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

