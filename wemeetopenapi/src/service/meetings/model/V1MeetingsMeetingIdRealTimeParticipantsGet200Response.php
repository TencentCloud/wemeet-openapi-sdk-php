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


class V1MeetingsMeetingIdRealTimeParticipantsGet200Response implements ModelInterface, \JsonSerializable
{

    /**
     * 当前页。
    * 类型：int
     */
    protected $currentPage = null;

    /**
     * 当前页实际大小。
    * 类型：int
     */
    protected $currentSize = null;

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
     * 参会人员对象数组。
    * 类型：\wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdRealTimeParticipantsGet200ResponseParticipantsInner[]
     */
    protected $participants = null;

    /**
     * 预定会议结束时间戳（单位秒）。
    * 类型：string
     */
    protected $scheduleEndTime = null;

    /**
     * 预定会议开始时间戳（单位秒）。
    * 类型：string
     */
    protected $scheduleStartTime = null;

    /**
     * 当前会议状态： 1. MEETING_STATE_INVALID： 非法或未知的会议状态，错误状态。 2. MEETING_STATE_INIT： 会议待开始。会议预定到预定结束时间前，会议尚无人进会。 3. MEETING_STATE_CANCELLED： 会议已取消。主持人主动取消会议，待开始的会议才能取消，且取消的会议无法再进入。 4. MEETING_STATE_STARTED： 会议已开始。会议中有人则表示会议进行中。 5. MEETING_STATE_ENDED： 会议已删除。会议已过预定结束时间且尚无人进会时，主持人删除会议，已删除的会议无法再进入。 6. MEETING_STATE_NULL： 会议无状态。会议已过预定结束时间，会议尚无人进会。 7. MEETING_STATE_RECYCLED： 会议已回收。会议已过预定开始时间30天，则会议号将被后台回收，无法再进入。
    * 类型：string
     */
    protected $status = null;

    /**
     * 会议主题（base64）。
    * 类型：string
     */
    protected $subject = null;

    /**
     * 根据条件筛选后的总人数。
    * 类型：int
     */
    protected $totalCount = null;

    /**
     * 根据条件筛选后的总分页数
    * 类型：int
     */
    protected $totalPage = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['current_page'])) {
            $this->currentPage = $jsonArray['current_page'];
        }
        if (isset($jsonArray['current_size'])) {
            $this->currentSize = $jsonArray['current_size'];
        }
        if (isset($jsonArray['meeting_code'])) {
            $this->meetingCode = $jsonArray['meeting_code'];
        }
        if (isset($jsonArray['meeting_id'])) {
            $this->meetingId = $jsonArray['meeting_id'];
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
        if (isset($jsonArray['status'])) {
            $this->status = $jsonArray['status'];
        }
        if (isset($jsonArray['subject'])) {
            $this->subject = $jsonArray['subject'];
        }
        if (isset($jsonArray['total_count'])) {
            $this->totalCount = $jsonArray['total_count'];
        }
        if (isset($jsonArray['total_page'])) {
            $this->totalPage = $jsonArray['total_page'];
        }
    }

    public function currentPage(int $currentPage): V1MeetingsMeetingIdRealTimeParticipantsGet200Response {
        $this->currentPage = $currentPage;
        return $this;
    }

    public function getCurrentPage() {
        return $this->currentPage;
    }

    public function setCurrentPage(int $currentPage) {
        $this->currentPage = $currentPage;
    }
    public function currentSize(int $currentSize): V1MeetingsMeetingIdRealTimeParticipantsGet200Response {
        $this->currentSize = $currentSize;
        return $this;
    }

    public function getCurrentSize() {
        return $this->currentSize;
    }

    public function setCurrentSize(int $currentSize) {
        $this->currentSize = $currentSize;
    }
    public function meetingCode(string $meetingCode): V1MeetingsMeetingIdRealTimeParticipantsGet200Response {
        $this->meetingCode = $meetingCode;
        return $this;
    }

    public function getMeetingCode() {
        return $this->meetingCode;
    }

    public function setMeetingCode(string $meetingCode) {
        $this->meetingCode = $meetingCode;
    }
    public function meetingId(string $meetingId): V1MeetingsMeetingIdRealTimeParticipantsGet200Response {
        $this->meetingId = $meetingId;
        return $this;
    }

    public function getMeetingId() {
        return $this->meetingId;
    }

    public function setMeetingId(string $meetingId) {
        $this->meetingId = $meetingId;
    }
    public function participants(array $participants): V1MeetingsMeetingIdRealTimeParticipantsGet200Response {
        $this->participants = $participants;
        return $this;
    }

    public function getParticipants() {
        return $this->participants;
    }

    public function setParticipants(array $participants) {
        $this->participants = $participants;
    }
    public function scheduleEndTime(string $scheduleEndTime): V1MeetingsMeetingIdRealTimeParticipantsGet200Response {
        $this->scheduleEndTime = $scheduleEndTime;
        return $this;
    }

    public function getScheduleEndTime() {
        return $this->scheduleEndTime;
    }

    public function setScheduleEndTime(string $scheduleEndTime) {
        $this->scheduleEndTime = $scheduleEndTime;
    }
    public function scheduleStartTime(string $scheduleStartTime): V1MeetingsMeetingIdRealTimeParticipantsGet200Response {
        $this->scheduleStartTime = $scheduleStartTime;
        return $this;
    }

    public function getScheduleStartTime() {
        return $this->scheduleStartTime;
    }

    public function setScheduleStartTime(string $scheduleStartTime) {
        $this->scheduleStartTime = $scheduleStartTime;
    }
    public function status(string $status): V1MeetingsMeetingIdRealTimeParticipantsGet200Response {
        $this->status = $status;
        return $this;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus(string $status) {
        $this->status = $status;
    }
    public function subject(string $subject): V1MeetingsMeetingIdRealTimeParticipantsGet200Response {
        $this->subject = $subject;
        return $this;
    }

    public function getSubject() {
        return $this->subject;
    }

    public function setSubject(string $subject) {
        $this->subject = $subject;
    }
    public function totalCount(int $totalCount): V1MeetingsMeetingIdRealTimeParticipantsGet200Response {
        $this->totalCount = $totalCount;
        return $this;
    }

    public function getTotalCount() {
        return $this->totalCount;
    }

    public function setTotalCount(int $totalCount) {
        $this->totalCount = $totalCount;
    }
    public function totalPage(int $totalPage): V1MeetingsMeetingIdRealTimeParticipantsGet200Response {
        $this->totalPage = $totalPage;
        return $this;
    }

    public function getTotalPage() {
        return $this->totalPage;
    }

    public function setTotalPage(int $totalPage) {
        $this->totalPage = $totalPage;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'current_page' => 'int',
        'current_size' => 'int',
        'meeting_code' => 'string',
        'meeting_id' => 'string',
        'participants' => '\wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdRealTimeParticipantsGet200ResponseParticipantsInner[]',
        'schedule_end_time' => 'string',
        'schedule_start_time' => 'string',
        'status' => 'string',
        'subject' => 'string',
        'total_count' => 'int',
        'total_page' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'current_page' => 'int64',
        'current_size' => 'int64',
        'meeting_code' => null,
        'meeting_id' => null,
        'participants' => null,
        'schedule_end_time' => null,
        'schedule_start_time' => null,
        'status' => null,
        'subject' => null,
        'total_count' => 'int64',
        'total_page' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'current_page' => false,
        'current_size' => false,
        'meeting_code' => false,
        'meeting_id' => false,
        'participants' => false,
        'schedule_end_time' => false,
        'schedule_start_time' => false,
        'status' => false,
        'subject' => false,
        'total_count' => false,
        'total_page' => false
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
        'current_page' => 'current_page',
        'current_size' => 'current_size',
        'meeting_code' => 'meeting_code',
        'meeting_id' => 'meeting_id',
        'participants' => 'participants',
        'schedule_end_time' => 'schedule_end_time',
        'schedule_start_time' => 'schedule_start_time',
        'status' => 'status',
        'subject' => 'subject',
        'total_count' => 'total_count',
        'total_page' => 'total_page'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'current_page' => 'setCurrentPage',
        'current_size' => 'setCurrentSize',
        'meeting_code' => 'setMeetingCode',
        'meeting_id' => 'setMeetingId',
        'participants' => 'setParticipants',
        'schedule_end_time' => 'setScheduleEndTime',
        'schedule_start_time' => 'setScheduleStartTime',
        'status' => 'setStatus',
        'subject' => 'setSubject',
        'total_count' => 'setTotalCount',
        'total_page' => 'setTotalPage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'current_page' => 'getCurrentPage',
        'current_size' => 'getCurrentSize',
        'meeting_code' => 'getMeetingCode',
        'meeting_id' => 'getMeetingId',
        'participants' => 'getParticipants',
        'schedule_end_time' => 'getScheduleEndTime',
        'schedule_start_time' => 'getScheduleStartTime',
        'status' => 'getStatus',
        'subject' => 'getSubject',
        'total_count' => 'getTotalCount',
        'total_page' => 'getTotalPage'
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
            'current_page' => $this->currentPage,
            'current_size' => $this->currentSize,
            'meeting_code' => $this->meetingCode,
            'meeting_id' => $this->meetingId,
            'participants' => $this->participants,
            'schedule_end_time' => $this->scheduleEndTime,
            'schedule_start_time' => $this->scheduleStartTime,
            'status' => $this->status,
            'subject' => $this->subject,
            'total_count' => $this->totalCount,
            'total_page' => $this->totalPage,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

