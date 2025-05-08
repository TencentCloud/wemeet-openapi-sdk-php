<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.4
 */
namespace wemeet\openapi\service\meetings\model;

use wemeet\openapi\core\xhttp\ModelInterface;


class V1MeetingJobIdGet200Response implements ModelInterface, \JsonSerializable
{

    /**
     * 任务错误信息
    * 类型：string
     */
    protected $errorMsg = null;

    /**
     * 任务下载链接，有效期2小时。
    * 类型：string
     */
    protected $jobUrl = null;

    /**
     * 任务状态。 0：未完成 1：已完成
    * 类型：int
     */
    protected $status = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['error_msg'])) {
            $this->errorMsg = $jsonArray['error_msg'];
        }
        if (isset($jsonArray['job_url'])) {
            $this->jobUrl = $jsonArray['job_url'];
        }
        if (isset($jsonArray['status'])) {
            $this->status = $jsonArray['status'];
        }
    }

    public function errorMsg(string $errorMsg): V1MeetingJobIdGet200Response {
        $this->errorMsg = $errorMsg;
        return $this;
    }

    public function getErrorMsg() {
        return $this->errorMsg;
    }

    public function setErrorMsg(string $errorMsg) {
        $this->errorMsg = $errorMsg;
    }
    public function jobUrl(string $jobUrl): V1MeetingJobIdGet200Response {
        $this->jobUrl = $jobUrl;
        return $this;
    }

    public function getJobUrl() {
        return $this->jobUrl;
    }

    public function setJobUrl(string $jobUrl) {
        $this->jobUrl = $jobUrl;
    }
    public function status(int $status): V1MeetingJobIdGet200Response {
        $this->status = $status;
        return $this;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus(int $status) {
        $this->status = $status;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'error_msg' => 'string',
        'job_url' => 'string',
        'status' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'error_msg' => null,
        'job_url' => null,
        'status' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'error_msg' => false,
        'job_url' => false,
        'status' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'error_msg' => 'error_msg',
        'job_url' => 'job_url',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'error_msg' => 'setErrorMsg',
        'job_url' => 'setJobUrl',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'error_msg' => 'getErrorMsg',
        'job_url' => 'getJobUrl',
        'status' => 'getStatus'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    public function jsonSerialize(): mixed {
        $data = [
            'error_msg' => $this->errorMsg,
            'job_url' => $this->jobUrl,
            'status' => $this->status,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

