<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.4
 */
namespace wemeet\openapi\service\records\model;

use wemeet\openapi\core\xhttp\ModelInterface;


class V1RecordsViewDetailsGet200ResponseViewDetailsInner implements ModelInterface, \JsonSerializable
{

    /**
     * 录制文件名称。
    * 类型：string
     */
    protected $recordFileName = null;

    /**
     * 观看完成度（百分比），该用户累计观看该视频的完成度。
    * 类型：string
     */
    protected $totalViewProgress = null;

    /**
     * 用户名称。匿名用户给出匿名用户标识。
    * 类型：string
     */
    protected $userName = null;

    /**
     * 所在同一企业下的用户 ID。
    * 类型：string
     */
    protected $userid = null;

    /**
     * 观看结束时间，UNIX时间戳（单位毫秒）。
    * 类型：int
     */
    protected $viewEndTime = null;

    /**
     * Integer 观看开始时间，UNIX 时间戳（单位毫秒）。
    * 类型：int
     */
    protected $viewStartTime = null;

    /**
     * 实际观看时长（单位毫秒）。
    * 类型：int
     */
    protected $viewTime = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['record_file_name'])) {
            $this->recordFileName = $jsonArray['record_file_name'];
        }
        if (isset($jsonArray['total_view_progress'])) {
            $this->totalViewProgress = $jsonArray['total_view_progress'];
        }
        if (isset($jsonArray['user_name'])) {
            $this->userName = $jsonArray['user_name'];
        }
        if (isset($jsonArray['userid'])) {
            $this->userid = $jsonArray['userid'];
        }
        if (isset($jsonArray['view_end_time'])) {
            $this->viewEndTime = $jsonArray['view_end_time'];
        }
        if (isset($jsonArray['view_start_time'])) {
            $this->viewStartTime = $jsonArray['view_start_time'];
        }
        if (isset($jsonArray['view_time'])) {
            $this->viewTime = $jsonArray['view_time'];
        }
    }

    public function recordFileName(string $recordFileName): V1RecordsViewDetailsGet200ResponseViewDetailsInner {
        $this->recordFileName = $recordFileName;
        return $this;
    }

    public function getRecordFileName() {
        return $this->recordFileName;
    }

    public function setRecordFileName(string $recordFileName) {
        $this->recordFileName = $recordFileName;
    }
    public function totalViewProgress(string $totalViewProgress): V1RecordsViewDetailsGet200ResponseViewDetailsInner {
        $this->totalViewProgress = $totalViewProgress;
        return $this;
    }

    public function getTotalViewProgress() {
        return $this->totalViewProgress;
    }

    public function setTotalViewProgress(string $totalViewProgress) {
        $this->totalViewProgress = $totalViewProgress;
    }
    public function userName(string $userName): V1RecordsViewDetailsGet200ResponseViewDetailsInner {
        $this->userName = $userName;
        return $this;
    }

    public function getUserName() {
        return $this->userName;
    }

    public function setUserName(string $userName) {
        $this->userName = $userName;
    }
    public function userid(string $userid): V1RecordsViewDetailsGet200ResponseViewDetailsInner {
        $this->userid = $userid;
        return $this;
    }

    public function getUserid() {
        return $this->userid;
    }

    public function setUserid(string $userid) {
        $this->userid = $userid;
    }
    public function viewEndTime(int $viewEndTime): V1RecordsViewDetailsGet200ResponseViewDetailsInner {
        $this->viewEndTime = $viewEndTime;
        return $this;
    }

    public function getViewEndTime() {
        return $this->viewEndTime;
    }

    public function setViewEndTime(int $viewEndTime) {
        $this->viewEndTime = $viewEndTime;
    }
    public function viewStartTime(int $viewStartTime): V1RecordsViewDetailsGet200ResponseViewDetailsInner {
        $this->viewStartTime = $viewStartTime;
        return $this;
    }

    public function getViewStartTime() {
        return $this->viewStartTime;
    }

    public function setViewStartTime(int $viewStartTime) {
        $this->viewStartTime = $viewStartTime;
    }
    public function viewTime(int $viewTime): V1RecordsViewDetailsGet200ResponseViewDetailsInner {
        $this->viewTime = $viewTime;
        return $this;
    }

    public function getViewTime() {
        return $this->viewTime;
    }

    public function setViewTime(int $viewTime) {
        $this->viewTime = $viewTime;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'record_file_name' => 'string',
        'total_view_progress' => 'string',
        'user_name' => 'string',
        'userid' => 'string',
        'view_end_time' => 'int',
        'view_start_time' => 'int',
        'view_time' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'record_file_name' => null,
        'total_view_progress' => null,
        'user_name' => null,
        'userid' => null,
        'view_end_time' => 'int64',
        'view_start_time' => 'int64',
        'view_time' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'record_file_name' => false,
        'total_view_progress' => false,
        'user_name' => false,
        'userid' => false,
        'view_end_time' => false,
        'view_start_time' => false,
        'view_time' => false
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
        'record_file_name' => 'record_file_name',
        'total_view_progress' => 'total_view_progress',
        'user_name' => 'user_name',
        'userid' => 'userid',
        'view_end_time' => 'view_end_time',
        'view_start_time' => 'view_start_time',
        'view_time' => 'view_time'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'record_file_name' => 'setRecordFileName',
        'total_view_progress' => 'setTotalViewProgress',
        'user_name' => 'setUserName',
        'userid' => 'setUserid',
        'view_end_time' => 'setViewEndTime',
        'view_start_time' => 'setViewStartTime',
        'view_time' => 'setViewTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'record_file_name' => 'getRecordFileName',
        'total_view_progress' => 'getTotalViewProgress',
        'user_name' => 'getUserName',
        'userid' => 'getUserid',
        'view_end_time' => 'getViewEndTime',
        'view_start_time' => 'getViewStartTime',
        'view_time' => 'getViewTime'
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
            'record_file_name' => $this->recordFileName,
            'total_view_progress' => $this->totalViewProgress,
            'user_name' => $this->userName,
            'userid' => $this->userid,
            'view_end_time' => $this->viewEndTime,
            'view_start_time' => $this->viewStartTime,
            'view_time' => $this->viewTime,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

