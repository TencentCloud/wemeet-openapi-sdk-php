<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.2
 */
namespace wemeet\openapi\service\meetings\model;

use wemeet\openapi\core\xhttp\ModelInterface;


class V1MeetingsMeetingIdGet200ResponseMeetingInfoListInnerSubMeetingsInner implements ModelInterface, \JsonSerializable
{

    /**
    * 类型：string
     */
    protected $endTime = null;

    /**
    * 类型：string
     */
    protected $startTime = null;

    /**
    * 类型：int
     */
    protected $status = null;

    /**
    * 类型：string
     */
    protected $subMeetingId = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['end_time'])) {
            $this->endTime = $jsonArray['end_time'];
        }
        if (isset($jsonArray['start_time'])) {
            $this->startTime = $jsonArray['start_time'];
        }
        if (isset($jsonArray['status'])) {
            $this->status = $jsonArray['status'];
        }
        if (isset($jsonArray['sub_meeting_id'])) {
            $this->subMeetingId = $jsonArray['sub_meeting_id'];
        }
    }

    public function endTime(string $endTime): V1MeetingsMeetingIdGet200ResponseMeetingInfoListInnerSubMeetingsInner {
        $this->endTime = $endTime;
        return $this;
    }

    public function getEndTime() {
        return $this->endTime;
    }

    public function setEndTime(string $endTime) {
        $this->endTime = $endTime;
    }
    public function startTime(string $startTime): V1MeetingsMeetingIdGet200ResponseMeetingInfoListInnerSubMeetingsInner {
        $this->startTime = $startTime;
        return $this;
    }

    public function getStartTime() {
        return $this->startTime;
    }

    public function setStartTime(string $startTime) {
        $this->startTime = $startTime;
    }
    public function status(int $status): V1MeetingsMeetingIdGet200ResponseMeetingInfoListInnerSubMeetingsInner {
        $this->status = $status;
        return $this;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus(int $status) {
        $this->status = $status;
    }
    public function subMeetingId(string $subMeetingId): V1MeetingsMeetingIdGet200ResponseMeetingInfoListInnerSubMeetingsInner {
        $this->subMeetingId = $subMeetingId;
        return $this;
    }

    public function getSubMeetingId() {
        return $this->subMeetingId;
    }

    public function setSubMeetingId(string $subMeetingId) {
        $this->subMeetingId = $subMeetingId;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'end_time' => 'string',
        'start_time' => 'string',
        'status' => 'int',
        'sub_meeting_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'end_time' => null,
        'start_time' => null,
        'status' => 'int64',
        'sub_meeting_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'end_time' => false,
        'start_time' => false,
        'status' => false,
        'sub_meeting_id' => false
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
        'end_time' => 'end_time',
        'start_time' => 'start_time',
        'status' => 'status',
        'sub_meeting_id' => 'sub_meeting_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'end_time' => 'setEndTime',
        'start_time' => 'setStartTime',
        'status' => 'setStatus',
        'sub_meeting_id' => 'setSubMeetingId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'end_time' => 'getEndTime',
        'start_time' => 'getStartTime',
        'status' => 'getStatus',
        'sub_meeting_id' => 'getSubMeetingId'
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
            'end_time' => $this->endTime,
            'start_time' => $this->startTime,
            'status' => $this->status,
            'sub_meeting_id' => $this->subMeetingId,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

