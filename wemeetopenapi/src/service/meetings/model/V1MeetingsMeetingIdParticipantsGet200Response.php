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


class V1MeetingsMeetingIdParticipantsGet200Response implements ModelInterface, \JsonSerializable
{

    /**
     * 是否还有未拉取的数据，该接口可多次拉取到的数据总量上限为5w条。
    * 类型：bool
     */
    protected $hasRemaining = null;

    /**
     * 会议号码。
    * 类型：string
     */
    protected $meetingCode = null;

    /**
     * 会议的唯一 ID。
    * 类型：string
     */
    protected $meetingId = null;

    /**
     * 和“has_remaining”一起，数据量比较大的情况下支持参会成员列表的多次获取。
    * 类型：int
     */
    protected $nextPos = null;

    /**
     * 参会人员对象数组。
    * 类型：\wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdParticipantsGet200ResponseParticipantsInner[]
     */
    protected $participants = null;

    /**
     * 预定会议开始时间戳（单位秒）。
    * 类型：string
     */
    protected $scheduleEndTime = null;

    /**
     * 预定会议结束时间戳（单位秒）。
    * 类型：string
     */
    protected $scheduleStartTime = null;

    /**
     * 会议主题。
    * 类型：string
     */
    protected $subject = null;

    /**
     * 当前参会总人次。
    * 类型：int
     */
    protected $totalCount = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['has_remaining'])) {
            $this->hasRemaining = $jsonArray['has_remaining'];
        }
        if (isset($jsonArray['meeting_code'])) {
            $this->meetingCode = $jsonArray['meeting_code'];
        }
        if (isset($jsonArray['meeting_id'])) {
            $this->meetingId = $jsonArray['meeting_id'];
        }
        if (isset($jsonArray['next_pos'])) {
            $this->nextPos = $jsonArray['next_pos'];
        }
        if (isset($jsonArray['participants'])) {
            $this->participants = $jsonArray['participants'];
        }
        if (isset($jsonArray['schedule_end_time'])) {
            $this->scheduleEndTime = $jsonArray['schedule_end_time'];
        }
        if (isset($jsonArray['schedule_start_time'])) {
            $this->scheduleStartTime = $jsonArray['schedule_start_time'];
        }
        if (isset($jsonArray['subject'])) {
            $this->subject = $jsonArray['subject'];
        }
        if (isset($jsonArray['total_count'])) {
            $this->totalCount = $jsonArray['total_count'];
        }
    }

    public function hasRemaining(bool $hasRemaining): V1MeetingsMeetingIdParticipantsGet200Response {
        $this->hasRemaining = $hasRemaining;
        return $this;
    }

    public function getHasRemaining() {
        return $this->hasRemaining;
    }

    public function setHasRemaining(bool $hasRemaining) {
        $this->hasRemaining = $hasRemaining;
    }
    public function meetingCode(string $meetingCode): V1MeetingsMeetingIdParticipantsGet200Response {
        $this->meetingCode = $meetingCode;
        return $this;
    }

    public function getMeetingCode() {
        return $this->meetingCode;
    }

    public function setMeetingCode(string $meetingCode) {
        $this->meetingCode = $meetingCode;
    }
    public function meetingId(string $meetingId): V1MeetingsMeetingIdParticipantsGet200Response {
        $this->meetingId = $meetingId;
        return $this;
    }

    public function getMeetingId() {
        return $this->meetingId;
    }

    public function setMeetingId(string $meetingId) {
        $this->meetingId = $meetingId;
    }
    public function nextPos(int $nextPos): V1MeetingsMeetingIdParticipantsGet200Response {
        $this->nextPos = $nextPos;
        return $this;
    }

    public function getNextPos() {
        return $this->nextPos;
    }

    public function setNextPos(int $nextPos) {
        $this->nextPos = $nextPos;
    }
    public function participants(array $participants): V1MeetingsMeetingIdParticipantsGet200Response {
        $this->participants = $participants;
        return $this;
    }

    public function getParticipants() {
        return $this->participants;
    }

    public function setParticipants(array $participants) {
        $this->participants = $participants;
    }
    public function scheduleEndTime(string $scheduleEndTime): V1MeetingsMeetingIdParticipantsGet200Response {
        $this->scheduleEndTime = $scheduleEndTime;
        return $this;
    }

    public function getScheduleEndTime() {
        return $this->scheduleEndTime;
    }

    public function setScheduleEndTime(string $scheduleEndTime) {
        $this->scheduleEndTime = $scheduleEndTime;
    }
    public function scheduleStartTime(string $scheduleStartTime): V1MeetingsMeetingIdParticipantsGet200Response {
        $this->scheduleStartTime = $scheduleStartTime;
        return $this;
    }

    public function getScheduleStartTime() {
        return $this->scheduleStartTime;
    }

    public function setScheduleStartTime(string $scheduleStartTime) {
        $this->scheduleStartTime = $scheduleStartTime;
    }
    public function subject(string $subject): V1MeetingsMeetingIdParticipantsGet200Response {
        $this->subject = $subject;
        return $this;
    }

    public function getSubject() {
        return $this->subject;
    }

    public function setSubject(string $subject) {
        $this->subject = $subject;
    }
    public function totalCount(int $totalCount): V1MeetingsMeetingIdParticipantsGet200Response {
        $this->totalCount = $totalCount;
        return $this;
    }

    public function getTotalCount() {
        return $this->totalCount;
    }

    public function setTotalCount(int $totalCount) {
        $this->totalCount = $totalCount;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'has_remaining' => 'bool',
        'meeting_code' => 'string',
        'meeting_id' => 'string',
        'next_pos' => 'int',
        'participants' => '\wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdParticipantsGet200ResponseParticipantsInner[]',
        'schedule_end_time' => 'string',
        'schedule_start_time' => 'string',
        'subject' => 'string',
        'total_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'has_remaining' => null,
        'meeting_code' => null,
        'meeting_id' => null,
        'next_pos' => 'int64',
        'participants' => null,
        'schedule_end_time' => null,
        'schedule_start_time' => null,
        'subject' => null,
        'total_count' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'has_remaining' => false,
        'meeting_code' => false,
        'meeting_id' => false,
        'next_pos' => false,
        'participants' => false,
        'schedule_end_time' => false,
        'schedule_start_time' => false,
        'subject' => false,
        'total_count' => false
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
        'has_remaining' => 'has_remaining',
        'meeting_code' => 'meeting_code',
        'meeting_id' => 'meeting_id',
        'next_pos' => 'next_pos',
        'participants' => 'participants',
        'schedule_end_time' => 'schedule_end_time',
        'schedule_start_time' => 'schedule_start_time',
        'subject' => 'subject',
        'total_count' => 'total_count'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'has_remaining' => 'setHasRemaining',
        'meeting_code' => 'setMeetingCode',
        'meeting_id' => 'setMeetingId',
        'next_pos' => 'setNextPos',
        'participants' => 'setParticipants',
        'schedule_end_time' => 'setScheduleEndTime',
        'schedule_start_time' => 'setScheduleStartTime',
        'subject' => 'setSubject',
        'total_count' => 'setTotalCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'has_remaining' => 'getHasRemaining',
        'meeting_code' => 'getMeetingCode',
        'meeting_id' => 'getMeetingId',
        'next_pos' => 'getNextPos',
        'participants' => 'getParticipants',
        'schedule_end_time' => 'getScheduleEndTime',
        'schedule_start_time' => 'getScheduleStartTime',
        'subject' => 'getSubject',
        'total_count' => 'getTotalCount'
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
            'has_remaining' => $this->hasRemaining,
            'meeting_code' => $this->meetingCode,
            'meeting_id' => $this->meetingId,
            'next_pos' => $this->nextPos,
            'participants' => $this->participants,
            'schedule_end_time' => $this->scheduleEndTime,
            'schedule_start_time' => $this->scheduleStartTime,
            'subject' => $this->subject,
            'total_count' => $this->totalCount,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

