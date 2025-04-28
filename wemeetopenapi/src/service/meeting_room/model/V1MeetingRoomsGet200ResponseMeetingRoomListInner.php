<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.2
 */
namespace wemeet\openapi\service\meeting_room\model;

use wemeet\openapi\core\xhttp\ModelInterface;


class V1MeetingRoomsGet200ResponseMeetingRoomListInner implements ModelInterface, \JsonSerializable
{

    /**
     * 0:基础版账号 1:专业版账号
    * 类型：int
     */
    protected $accountNewType = null;

    /**
     * 账号类型0:普通，1:专款，2:试用
    * 类型：int
     */
    protected $accountType = null;

    /**
     * 激活码
    * 类型：string
     */
    protected $activeCode = null;

    /**
     * 是否允许被呼叫
    * 类型：bool
     */
    protected $isAllowCall = null;

    /**
     * 会议室ID
    * 类型：string
     */
    protected $meetingRoomId = null;

    /**
     * 会议室地址
    * 类型：string
     */
    protected $meetingRoomLocation = null;

    /**
     * 会议室名称
    * 类型：string
     */
    protected $meetingRoomName = null;

    /**
     * 会议室状态0:未激活，1:未绑定，2:空闲，3:试用中，4:离线，5:未登录
    * 类型：int
     */
    protected $meetingRoomStatus = null;

    /**
     * 容纳人数
    * 类型：int
     */
    protected $participantNumber = null;

    /**
     * 预定状态
    * 类型：int
     */
    protected $scheduledStatus = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['account_new_type'])) {
            $this->accountNewType = $jsonArray['account_new_type'];
        }
        if (isset($jsonArray['account_type'])) {
            $this->accountType = $jsonArray['account_type'];
        }
        if (isset($jsonArray['active_code'])) {
            $this->activeCode = $jsonArray['active_code'];
        }
        if (isset($jsonArray['is_allow_call'])) {
            $this->isAllowCall = $jsonArray['is_allow_call'];
        }
        if (isset($jsonArray['meeting_room_id'])) {
            $this->meetingRoomId = $jsonArray['meeting_room_id'];
        }
        if (isset($jsonArray['meeting_room_location'])) {
            $this->meetingRoomLocation = $jsonArray['meeting_room_location'];
        }
        if (isset($jsonArray['meeting_room_name'])) {
            $this->meetingRoomName = $jsonArray['meeting_room_name'];
        }
        if (isset($jsonArray['meeting_room_status'])) {
            $this->meetingRoomStatus = $jsonArray['meeting_room_status'];
        }
        if (isset($jsonArray['participant_number'])) {
            $this->participantNumber = $jsonArray['participant_number'];
        }
        if (isset($jsonArray['scheduled_status'])) {
            $this->scheduledStatus = $jsonArray['scheduled_status'];
        }
    }

    public function accountNewType(int $accountNewType): V1MeetingRoomsGet200ResponseMeetingRoomListInner {
        $this->accountNewType = $accountNewType;
        return $this;
    }

    public function getAccountNewType() {
        return $this->accountNewType;
    }

    public function setAccountNewType(int $accountNewType) {
        $this->accountNewType = $accountNewType;
    }
    public function accountType(int $accountType): V1MeetingRoomsGet200ResponseMeetingRoomListInner {
        $this->accountType = $accountType;
        return $this;
    }

    public function getAccountType() {
        return $this->accountType;
    }

    public function setAccountType(int $accountType) {
        $this->accountType = $accountType;
    }
    public function activeCode(string $activeCode): V1MeetingRoomsGet200ResponseMeetingRoomListInner {
        $this->activeCode = $activeCode;
        return $this;
    }

    public function getActiveCode() {
        return $this->activeCode;
    }

    public function setActiveCode(string $activeCode) {
        $this->activeCode = $activeCode;
    }
    public function isAllowCall(bool $isAllowCall): V1MeetingRoomsGet200ResponseMeetingRoomListInner {
        $this->isAllowCall = $isAllowCall;
        return $this;
    }

    public function getIsAllowCall() {
        return $this->isAllowCall;
    }

    public function setIsAllowCall(bool $isAllowCall) {
        $this->isAllowCall = $isAllowCall;
    }
    public function meetingRoomId(string $meetingRoomId): V1MeetingRoomsGet200ResponseMeetingRoomListInner {
        $this->meetingRoomId = $meetingRoomId;
        return $this;
    }

    public function getMeetingRoomId() {
        return $this->meetingRoomId;
    }

    public function setMeetingRoomId(string $meetingRoomId) {
        $this->meetingRoomId = $meetingRoomId;
    }
    public function meetingRoomLocation(string $meetingRoomLocation): V1MeetingRoomsGet200ResponseMeetingRoomListInner {
        $this->meetingRoomLocation = $meetingRoomLocation;
        return $this;
    }

    public function getMeetingRoomLocation() {
        return $this->meetingRoomLocation;
    }

    public function setMeetingRoomLocation(string $meetingRoomLocation) {
        $this->meetingRoomLocation = $meetingRoomLocation;
    }
    public function meetingRoomName(string $meetingRoomName): V1MeetingRoomsGet200ResponseMeetingRoomListInner {
        $this->meetingRoomName = $meetingRoomName;
        return $this;
    }

    public function getMeetingRoomName() {
        return $this->meetingRoomName;
    }

    public function setMeetingRoomName(string $meetingRoomName) {
        $this->meetingRoomName = $meetingRoomName;
    }
    public function meetingRoomStatus(int $meetingRoomStatus): V1MeetingRoomsGet200ResponseMeetingRoomListInner {
        $this->meetingRoomStatus = $meetingRoomStatus;
        return $this;
    }

    public function getMeetingRoomStatus() {
        return $this->meetingRoomStatus;
    }

    public function setMeetingRoomStatus(int $meetingRoomStatus) {
        $this->meetingRoomStatus = $meetingRoomStatus;
    }
    public function participantNumber(int $participantNumber): V1MeetingRoomsGet200ResponseMeetingRoomListInner {
        $this->participantNumber = $participantNumber;
        return $this;
    }

    public function getParticipantNumber() {
        return $this->participantNumber;
    }

    public function setParticipantNumber(int $participantNumber) {
        $this->participantNumber = $participantNumber;
    }
    public function scheduledStatus(int $scheduledStatus): V1MeetingRoomsGet200ResponseMeetingRoomListInner {
        $this->scheduledStatus = $scheduledStatus;
        return $this;
    }

    public function getScheduledStatus() {
        return $this->scheduledStatus;
    }

    public function setScheduledStatus(int $scheduledStatus) {
        $this->scheduledStatus = $scheduledStatus;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_new_type' => 'int',
        'account_type' => 'int',
        'active_code' => 'string',
        'is_allow_call' => 'bool',
        'meeting_room_id' => 'string',
        'meeting_room_location' => 'string',
        'meeting_room_name' => 'string',
        'meeting_room_status' => 'int',
        'participant_number' => 'int',
        'scheduled_status' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'account_new_type' => 'int64',
        'account_type' => 'int64',
        'active_code' => null,
        'is_allow_call' => null,
        'meeting_room_id' => null,
        'meeting_room_location' => null,
        'meeting_room_name' => null,
        'meeting_room_status' => 'int64',
        'participant_number' => 'int64',
        'scheduled_status' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'account_new_type' => false,
        'account_type' => false,
        'active_code' => false,
        'is_allow_call' => false,
        'meeting_room_id' => false,
        'meeting_room_location' => false,
        'meeting_room_name' => false,
        'meeting_room_status' => false,
        'participant_number' => false,
        'scheduled_status' => false
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
        'account_new_type' => 'account_new_type',
        'account_type' => 'account_type',
        'active_code' => 'active_code',
        'is_allow_call' => 'is_allow_call',
        'meeting_room_id' => 'meeting_room_id',
        'meeting_room_location' => 'meeting_room_location',
        'meeting_room_name' => 'meeting_room_name',
        'meeting_room_status' => 'meeting_room_status',
        'participant_number' => 'participant_number',
        'scheduled_status' => 'scheduled_status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_new_type' => 'setAccountNewType',
        'account_type' => 'setAccountType',
        'active_code' => 'setActiveCode',
        'is_allow_call' => 'setIsAllowCall',
        'meeting_room_id' => 'setMeetingRoomId',
        'meeting_room_location' => 'setMeetingRoomLocation',
        'meeting_room_name' => 'setMeetingRoomName',
        'meeting_room_status' => 'setMeetingRoomStatus',
        'participant_number' => 'setParticipantNumber',
        'scheduled_status' => 'setScheduledStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_new_type' => 'getAccountNewType',
        'account_type' => 'getAccountType',
        'active_code' => 'getActiveCode',
        'is_allow_call' => 'getIsAllowCall',
        'meeting_room_id' => 'getMeetingRoomId',
        'meeting_room_location' => 'getMeetingRoomLocation',
        'meeting_room_name' => 'getMeetingRoomName',
        'meeting_room_status' => 'getMeetingRoomStatus',
        'participant_number' => 'getParticipantNumber',
        'scheduled_status' => 'getScheduledStatus'
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
            'account_new_type' => $this->accountNewType,
            'account_type' => $this->accountType,
            'active_code' => $this->activeCode,
            'is_allow_call' => $this->isAllowCall,
            'meeting_room_id' => $this->meetingRoomId,
            'meeting_room_location' => $this->meetingRoomLocation,
            'meeting_room_name' => $this->meetingRoomName,
            'meeting_room_status' => $this->meetingRoomStatus,
            'participant_number' => $this->participantNumber,
            'scheduled_status' => $this->scheduledStatus,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

