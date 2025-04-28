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


class V1PmiMeetingsGet200ResponseMeetingInfoListInner implements ModelInterface, \JsonSerializable
{

    /**
     * 会议预订结束时间（UTC 秒）（UTC 秒）
    * 类型：int
     */
    protected $endTime = null;

    /**
     * 有效会议Code
    * 类型：string
     */
    protected $meetingCode = null;

    /**
     * 会议 ID
    * 类型：string
     */
    protected $meetingId = null;

    /**
     * 会议预订开始时间（UTC 秒）（UTC 秒）
    * 类型：int
     */
    protected $startTime = null;

    /**
     * 会议状态
    * 类型：int
     */
    protected $status = null;

    /**
     * 会议主题
    * 类型：string
     */
    protected $subject = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['end_time'])) {
            $this->endTime = $jsonArray['end_time'];
        }
        if (isset($jsonArray['meeting_code'])) {
            $this->meetingCode = $jsonArray['meeting_code'];
        }
        if (isset($jsonArray['meeting_id'])) {
            $this->meetingId = $jsonArray['meeting_id'];
        }
        if (isset($jsonArray['start_time'])) {
            $this->startTime = $jsonArray['start_time'];
        }
        if (isset($jsonArray['status'])) {
            $this->status = $jsonArray['status'];
        }
        if (isset($jsonArray['subject'])) {
            $this->subject = $jsonArray['subject'];
        }
    }

    public function endTime(int $endTime): V1PmiMeetingsGet200ResponseMeetingInfoListInner {
        $this->endTime = $endTime;
        return $this;
    }

    public function getEndTime() {
        return $this->endTime;
    }

    public function setEndTime(int $endTime) {
        $this->endTime = $endTime;
    }
    public function meetingCode(string $meetingCode): V1PmiMeetingsGet200ResponseMeetingInfoListInner {
        $this->meetingCode = $meetingCode;
        return $this;
    }

    public function getMeetingCode() {
        return $this->meetingCode;
    }

    public function setMeetingCode(string $meetingCode) {
        $this->meetingCode = $meetingCode;
    }
    public function meetingId(string $meetingId): V1PmiMeetingsGet200ResponseMeetingInfoListInner {
        $this->meetingId = $meetingId;
        return $this;
    }

    public function getMeetingId() {
        return $this->meetingId;
    }

    public function setMeetingId(string $meetingId) {
        $this->meetingId = $meetingId;
    }
    public function startTime(int $startTime): V1PmiMeetingsGet200ResponseMeetingInfoListInner {
        $this->startTime = $startTime;
        return $this;
    }

    public function getStartTime() {
        return $this->startTime;
    }

    public function setStartTime(int $startTime) {
        $this->startTime = $startTime;
    }
    public function status(int $status): V1PmiMeetingsGet200ResponseMeetingInfoListInner {
        $this->status = $status;
        return $this;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus(int $status) {
        $this->status = $status;
    }
    public function subject(string $subject): V1PmiMeetingsGet200ResponseMeetingInfoListInner {
        $this->subject = $subject;
        return $this;
    }

    public function getSubject() {
        return $this->subject;
    }

    public function setSubject(string $subject) {
        $this->subject = $subject;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'end_time' => 'int',
        'meeting_code' => 'string',
        'meeting_id' => 'string',
        'start_time' => 'int',
        'status' => 'int',
        'subject' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'end_time' => 'int64',
        'meeting_code' => null,
        'meeting_id' => null,
        'start_time' => 'int64',
        'status' => 'int64',
        'subject' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'end_time' => false,
        'meeting_code' => false,
        'meeting_id' => false,
        'start_time' => false,
        'status' => false,
        'subject' => false
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
        'meeting_code' => 'meeting_code',
        'meeting_id' => 'meeting_id',
        'start_time' => 'start_time',
        'status' => 'status',
        'subject' => 'subject'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'end_time' => 'setEndTime',
        'meeting_code' => 'setMeetingCode',
        'meeting_id' => 'setMeetingId',
        'start_time' => 'setStartTime',
        'status' => 'setStatus',
        'subject' => 'setSubject'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'end_time' => 'getEndTime',
        'meeting_code' => 'getMeetingCode',
        'meeting_id' => 'getMeetingId',
        'start_time' => 'getStartTime',
        'status' => 'getStatus',
        'subject' => 'getSubject'
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
            'meeting_code' => $this->meetingCode,
            'meeting_id' => $this->meetingId,
            'start_time' => $this->startTime,
            'status' => $this->status,
            'subject' => $this->subject,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

