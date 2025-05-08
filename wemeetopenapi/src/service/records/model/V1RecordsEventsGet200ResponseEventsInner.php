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


class V1RecordsEventsGet200ResponseEventsInner implements ModelInterface, \JsonSerializable
{

    /**
     * 查询事件类型：1：下载，2：查看。
    * 类型：int
     */
    protected $eventType = null;

    /**
     * 操作时间，UNIX 时间戳（单位毫秒）。
    * 类型：int
     */
    protected $operateTime = null;

    /**
     * 录制文件名称。
    * 类型：string
     */
    protected $recordName = null;

    /**
     * 用户名称。
    * 类型：string
     */
    protected $userName = null;

    /**
     * 用户 ID。
    * 类型：string
     */
    protected $userid = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['event_type'])) {
            $this->eventType = $jsonArray['event_type'];
        }
        if (isset($jsonArray['operate_time'])) {
            $this->operateTime = $jsonArray['operate_time'];
        }
        if (isset($jsonArray['record_name'])) {
            $this->recordName = $jsonArray['record_name'];
        }
        if (isset($jsonArray['user_name'])) {
            $this->userName = $jsonArray['user_name'];
        }
        if (isset($jsonArray['userid'])) {
            $this->userid = $jsonArray['userid'];
        }
    }

    public function eventType(int $eventType): V1RecordsEventsGet200ResponseEventsInner {
        $this->eventType = $eventType;
        return $this;
    }

    public function getEventType() {
        return $this->eventType;
    }

    public function setEventType(int $eventType) {
        $this->eventType = $eventType;
    }
    public function operateTime(int $operateTime): V1RecordsEventsGet200ResponseEventsInner {
        $this->operateTime = $operateTime;
        return $this;
    }

    public function getOperateTime() {
        return $this->operateTime;
    }

    public function setOperateTime(int $operateTime) {
        $this->operateTime = $operateTime;
    }
    public function recordName(string $recordName): V1RecordsEventsGet200ResponseEventsInner {
        $this->recordName = $recordName;
        return $this;
    }

    public function getRecordName() {
        return $this->recordName;
    }

    public function setRecordName(string $recordName) {
        $this->recordName = $recordName;
    }
    public function userName(string $userName): V1RecordsEventsGet200ResponseEventsInner {
        $this->userName = $userName;
        return $this;
    }

    public function getUserName() {
        return $this->userName;
    }

    public function setUserName(string $userName) {
        $this->userName = $userName;
    }
    public function userid(string $userid): V1RecordsEventsGet200ResponseEventsInner {
        $this->userid = $userid;
        return $this;
    }

    public function getUserid() {
        return $this->userid;
    }

    public function setUserid(string $userid) {
        $this->userid = $userid;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'event_type' => 'int',
        'operate_time' => 'int',
        'record_name' => 'string',
        'user_name' => 'string',
        'userid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'event_type' => 'int64',
        'operate_time' => 'int64',
        'record_name' => null,
        'user_name' => null,
        'userid' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'event_type' => false,
        'operate_time' => false,
        'record_name' => false,
        'user_name' => false,
        'userid' => false
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
        'event_type' => 'event_type',
        'operate_time' => 'operate_time',
        'record_name' => 'record_name',
        'user_name' => 'user_name',
        'userid' => 'userid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'event_type' => 'setEventType',
        'operate_time' => 'setOperateTime',
        'record_name' => 'setRecordName',
        'user_name' => 'setUserName',
        'userid' => 'setUserid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'event_type' => 'getEventType',
        'operate_time' => 'getOperateTime',
        'record_name' => 'getRecordName',
        'user_name' => 'getUserName',
        'userid' => 'getUserid'
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
            'event_type' => $this->eventType,
            'operate_time' => $this->operateTime,
            'record_name' => $this->recordName,
            'user_name' => $this->userName,
            'userid' => $this->userid,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

