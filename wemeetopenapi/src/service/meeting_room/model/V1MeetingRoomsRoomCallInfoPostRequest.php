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


class V1MeetingRoomsRoomCallInfoPostRequest implements ModelInterface, \JsonSerializable
{
    /**
    * 类型：
     */
    protected $instanceId;
    /**
     * 会议ID
    * 类型：
     */
    protected $meetingId;
    /**
    * 类型：
     */
    protected $operatorId;
    /**
     * 操作者 ID 的类型： 1：userid
    * 类型：
     */
    protected $operatorIdType;

    /**
     * 会议室 ID，与 mra_address 二选一。
    * 类型：string
     */
    protected $meetingRoomId = null;

    /**
    * 类型：\wemeet\openapi\service\meeting_room\model\V1MeetingRoomsCancelRoomCallPutRequestMraAddress
     */
    protected $mraAddress = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['instance_id'])) {
            $this->instanceId = $jsonArray['instance_id'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter instance_id');
        }
        if (isset($jsonArray['meeting_id'])) {
            $this->meetingId = $jsonArray['meeting_id'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter meeting_id');
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
        if (isset($jsonArray['meeting_room_id'])) {
            $this->meetingRoomId = $jsonArray['meeting_room_id'];
        }
        if (isset($jsonArray['mra_address'])) {
            $this->mraAddress = new V1MeetingRoomsCancelRoomCallPutRequestMraAddress($jsonArray['mra_address']);
        }
    }

    public function instanceId(int $instanceId): V1MeetingRoomsRoomCallInfoPostRequest {
        $this->instanceId = $instanceId;
        return $this;
    }

    public function getInstanceId() {
        return $this->instanceId;
    }

    public function setInstanceId(int $instanceId) {
        $this->instanceId = $instanceId;
    }
    public function meetingId(string $meetingId): V1MeetingRoomsRoomCallInfoPostRequest {
        $this->meetingId = $meetingId;
        return $this;
    }

    public function getMeetingId() {
        return $this->meetingId;
    }

    public function setMeetingId(string $meetingId) {
        $this->meetingId = $meetingId;
    }
    public function meetingRoomId(string $meetingRoomId): V1MeetingRoomsRoomCallInfoPostRequest {
        $this->meetingRoomId = $meetingRoomId;
        return $this;
    }

    public function getMeetingRoomId() {
        return $this->meetingRoomId;
    }

    public function setMeetingRoomId(string $meetingRoomId) {
        $this->meetingRoomId = $meetingRoomId;
    }
    public function mraAddress(V1MeetingRoomsCancelRoomCallPutRequestMraAddress $mraAddress): V1MeetingRoomsRoomCallInfoPostRequest {
        $this->mraAddress = $mraAddress;
        return $this;
    }

    public function getMraAddress() {
        return $this->mraAddress;
    }

    public function setMraAddress(V1MeetingRoomsCancelRoomCallPutRequestMraAddress $mraAddress) {
        $this->mraAddress = $mraAddress;
    }
    public function operatorId(string $operatorId): V1MeetingRoomsRoomCallInfoPostRequest {
        $this->operatorId = $operatorId;
        return $this;
    }

    public function getOperatorId() {
        return $this->operatorId;
    }

    public function setOperatorId(string $operatorId) {
        $this->operatorId = $operatorId;
    }
    public function operatorIdType(int $operatorIdType): V1MeetingRoomsRoomCallInfoPostRequest {
        $this->operatorIdType = $operatorIdType;
        return $this;
    }

    public function getOperatorIdType() {
        return $this->operatorIdType;
    }

    public function setOperatorIdType(int $operatorIdType) {
        $this->operatorIdType = $operatorIdType;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'instance_id' => 'int',
        'meeting_id' => 'string',
        'meeting_room_id' => 'string',
        'mra_address' => '\wemeet\openapi\service\meeting_room\model\V1MeetingRoomsCancelRoomCallPutRequestMraAddress',
        'operator_id' => 'string',
        'operator_id_type' => 'int'
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
        'meeting_id' => null,
        'meeting_room_id' => null,
        'mra_address' => null,
        'operator_id' => null,
        'operator_id_type' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'instance_id' => false,
        'meeting_id' => false,
        'meeting_room_id' => false,
        'mra_address' => false,
        'operator_id' => false,
        'operator_id_type' => false
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
        'meeting_id' => 'meeting_id',
        'meeting_room_id' => 'meeting_room_id',
        'mra_address' => 'mra_address',
        'operator_id' => 'operator_id',
        'operator_id_type' => 'operator_id_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'instance_id' => 'setInstanceId',
        'meeting_id' => 'setMeetingId',
        'meeting_room_id' => 'setMeetingRoomId',
        'mra_address' => 'setMraAddress',
        'operator_id' => 'setOperatorId',
        'operator_id_type' => 'setOperatorIdType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'instance_id' => 'getInstanceId',
        'meeting_id' => 'getMeetingId',
        'meeting_room_id' => 'getMeetingRoomId',
        'mra_address' => 'getMraAddress',
        'operator_id' => 'getOperatorId',
        'operator_id_type' => 'getOperatorIdType'
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
            'meeting_id' => $this->meetingId,
            'meeting_room_id' => $this->meetingRoomId,
            'mra_address' => $this->mraAddress,
            'operator_id' => $this->operatorId,
            'operator_id_type' => $this->operatorIdType,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

