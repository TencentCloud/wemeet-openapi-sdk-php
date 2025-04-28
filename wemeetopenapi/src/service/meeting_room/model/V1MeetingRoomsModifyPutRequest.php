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


class V1MeetingRoomsModifyPutRequest implements ModelInterface, \JsonSerializable
{
    /**
    * 类型：
     */
    protected $instanceId;
    /**
     * 要设置的会议室 ID。
    * 类型：
     */
    protected $meetingRoomId;
    /**
     * 操作者 ID。operator_id 必须与 operator_id_type 配合使用。根据 operator_id_type 的值，operator_id 代表不同类型。
    * 类型：
     */
    protected $operatorId;
    /**
     * 操作者 ID 的类型： 1：userid
    * 类型：
     */
    protected $operatorIdType;

    /**
     * 是否允许被呼叫
    * 类型：bool
     */
    protected $isAllowCall = null;

    /**
    * 类型：\wemeet\openapi\service\meeting_room\model\V1MeetingRoomsModifyPutRequestMeetingRoomInfo
     */
    protected $meetingRoomInfo = null;

    /**
     * 是否开放预定初始值false
    * 类型：bool
     */
    protected $scheduledStatus = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['instance_id'])) {
            $this->instanceId = $jsonArray['instance_id'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter instance_id');
        }
        if (isset($jsonArray['meeting_room_id'])) {
            $this->meetingRoomId = $jsonArray['meeting_room_id'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter meeting_room_id');
        }
        if (isset($jsonArray['operator_id'])) {
            $this->operatorId = $jsonArray['operator_id'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter operator_id');
        }
        if (isset($jsonArray['operator_id_type'])) {
            $this->operatorIdType = $jsonArray['operator_id_type'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter operator_id_type');
        }
        if (isset($jsonArray['is_allow_call'])) {
            $this->isAllowCall = $jsonArray['is_allow_call'];
        }
        if (isset($jsonArray['meeting_room_info'])) {
            $this->meetingRoomInfo = new V1MeetingRoomsModifyPutRequestMeetingRoomInfo($jsonArray['meeting_room_info']);
        }
        if (isset($jsonArray['scheduled_status'])) {
            $this->scheduledStatus = $jsonArray['scheduled_status'];
        }
    }

    public function instanceId(int $instanceId): V1MeetingRoomsModifyPutRequest {
        $this->instanceId = $instanceId;
        return $this;
    }

    public function getInstanceId() {
        return $this->instanceId;
    }

    public function setInstanceId(int $instanceId) {
        $this->instanceId = $instanceId;
    }
    public function isAllowCall(bool $isAllowCall): V1MeetingRoomsModifyPutRequest {
        $this->isAllowCall = $isAllowCall;
        return $this;
    }

    public function getIsAllowCall() {
        return $this->isAllowCall;
    }

    public function setIsAllowCall(bool $isAllowCall) {
        $this->isAllowCall = $isAllowCall;
    }
    public function meetingRoomId(string $meetingRoomId): V1MeetingRoomsModifyPutRequest {
        $this->meetingRoomId = $meetingRoomId;
        return $this;
    }

    public function getMeetingRoomId() {
        return $this->meetingRoomId;
    }

    public function setMeetingRoomId(string $meetingRoomId) {
        $this->meetingRoomId = $meetingRoomId;
    }
    public function meetingRoomInfo(V1MeetingRoomsModifyPutRequestMeetingRoomInfo $meetingRoomInfo): V1MeetingRoomsModifyPutRequest {
        $this->meetingRoomInfo = $meetingRoomInfo;
        return $this;
    }

    public function getMeetingRoomInfo() {
        return $this->meetingRoomInfo;
    }

    public function setMeetingRoomInfo(V1MeetingRoomsModifyPutRequestMeetingRoomInfo $meetingRoomInfo) {
        $this->meetingRoomInfo = $meetingRoomInfo;
    }
    public function operatorId(string $operatorId): V1MeetingRoomsModifyPutRequest {
        $this->operatorId = $operatorId;
        return $this;
    }

    public function getOperatorId() {
        return $this->operatorId;
    }

    public function setOperatorId(string $operatorId) {
        $this->operatorId = $operatorId;
    }
    public function operatorIdType(int $operatorIdType): V1MeetingRoomsModifyPutRequest {
        $this->operatorIdType = $operatorIdType;
        return $this;
    }

    public function getOperatorIdType() {
        return $this->operatorIdType;
    }

    public function setOperatorIdType(int $operatorIdType) {
        $this->operatorIdType = $operatorIdType;
    }
    public function scheduledStatus(bool $scheduledStatus): V1MeetingRoomsModifyPutRequest {
        $this->scheduledStatus = $scheduledStatus;
        return $this;
    }

    public function getScheduledStatus() {
        return $this->scheduledStatus;
    }

    public function setScheduledStatus(bool $scheduledStatus) {
        $this->scheduledStatus = $scheduledStatus;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'instance_id' => 'int',
        'is_allow_call' => 'bool',
        'meeting_room_id' => 'string',
        'meeting_room_info' => '\wemeet\openapi\service\meeting_room\model\V1MeetingRoomsModifyPutRequestMeetingRoomInfo',
        'operator_id' => 'string',
        'operator_id_type' => 'int',
        'scheduled_status' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'instance_id' => 'int64',
        'is_allow_call' => null,
        'meeting_room_id' => null,
        'meeting_room_info' => null,
        'operator_id' => null,
        'operator_id_type' => 'int64',
        'scheduled_status' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'instance_id' => false,
        'is_allow_call' => false,
        'meeting_room_id' => false,
        'meeting_room_info' => false,
        'operator_id' => false,
        'operator_id_type' => false,
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
        'instance_id' => 'instance_id',
        'is_allow_call' => 'is_allow_call',
        'meeting_room_id' => 'meeting_room_id',
        'meeting_room_info' => 'meeting_room_info',
        'operator_id' => 'operator_id',
        'operator_id_type' => 'operator_id_type',
        'scheduled_status' => 'scheduled_status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'instance_id' => 'setInstanceId',
        'is_allow_call' => 'setIsAllowCall',
        'meeting_room_id' => 'setMeetingRoomId',
        'meeting_room_info' => 'setMeetingRoomInfo',
        'operator_id' => 'setOperatorId',
        'operator_id_type' => 'setOperatorIdType',
        'scheduled_status' => 'setScheduledStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'instance_id' => 'getInstanceId',
        'is_allow_call' => 'getIsAllowCall',
        'meeting_room_id' => 'getMeetingRoomId',
        'meeting_room_info' => 'getMeetingRoomInfo',
        'operator_id' => 'getOperatorId',
        'operator_id_type' => 'getOperatorIdType',
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
            'instance_id' => $this->instanceId,
            'is_allow_call' => $this->isAllowCall,
            'meeting_room_id' => $this->meetingRoomId,
            'meeting_room_info' => $this->meetingRoomInfo,
            'operator_id' => $this->operatorId,
            'operator_id_type' => $this->operatorIdType,
            'scheduled_status' => $this->scheduledStatus,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

