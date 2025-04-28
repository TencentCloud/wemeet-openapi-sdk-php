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


class V1MeetingRoomsModifyRoomConfigInfoPostRequest implements ModelInterface, \JsonSerializable
{
    /**
    * 类型：
     */
    protected $instanceId;
    /**
     * 要配置的会议室 ID。
    * 类型：
     */
    protected $meetingRoomId;
    /**
    * 类型：
     */
    protected $operatorId;
    /**
    * 类型：
     */
    protected $operatorIdType;

    /**
    * 类型：\wemeet\openapi\service\meeting_room\model\V1MeetingRoomsModifyRoomConfigInfoPostRequestMeetingSettings
     */
    protected $meetingSettings = null;

    /**
    * 类型：\wemeet\openapi\service\meeting_room\model\V1MeetingRoomsModifyRoomConfigInfoPostRequestRecordSettings
     */
    protected $recordSettings = null;

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
        if (isset($jsonArray['meeting_settings'])) {
            $this->meetingSettings = new V1MeetingRoomsModifyRoomConfigInfoPostRequestMeetingSettings($jsonArray['meeting_settings']);
        }
        if (isset($jsonArray['record_settings'])) {
            $this->recordSettings = new V1MeetingRoomsModifyRoomConfigInfoPostRequestRecordSettings($jsonArray['record_settings']);
        }
    }

    public function instanceId(int $instanceId): V1MeetingRoomsModifyRoomConfigInfoPostRequest {
        $this->instanceId = $instanceId;
        return $this;
    }

    public function getInstanceId() {
        return $this->instanceId;
    }

    public function setInstanceId(int $instanceId) {
        $this->instanceId = $instanceId;
    }
    public function meetingRoomId(string $meetingRoomId): V1MeetingRoomsModifyRoomConfigInfoPostRequest {
        $this->meetingRoomId = $meetingRoomId;
        return $this;
    }

    public function getMeetingRoomId() {
        return $this->meetingRoomId;
    }

    public function setMeetingRoomId(string $meetingRoomId) {
        $this->meetingRoomId = $meetingRoomId;
    }
    public function meetingSettings(V1MeetingRoomsModifyRoomConfigInfoPostRequestMeetingSettings $meetingSettings): V1MeetingRoomsModifyRoomConfigInfoPostRequest {
        $this->meetingSettings = $meetingSettings;
        return $this;
    }

    public function getMeetingSettings() {
        return $this->meetingSettings;
    }

    public function setMeetingSettings(V1MeetingRoomsModifyRoomConfigInfoPostRequestMeetingSettings $meetingSettings) {
        $this->meetingSettings = $meetingSettings;
    }
    public function operatorId(string $operatorId): V1MeetingRoomsModifyRoomConfigInfoPostRequest {
        $this->operatorId = $operatorId;
        return $this;
    }

    public function getOperatorId() {
        return $this->operatorId;
    }

    public function setOperatorId(string $operatorId) {
        $this->operatorId = $operatorId;
    }
    public function operatorIdType(int $operatorIdType): V1MeetingRoomsModifyRoomConfigInfoPostRequest {
        $this->operatorIdType = $operatorIdType;
        return $this;
    }

    public function getOperatorIdType() {
        return $this->operatorIdType;
    }

    public function setOperatorIdType(int $operatorIdType) {
        $this->operatorIdType = $operatorIdType;
    }
    public function recordSettings(V1MeetingRoomsModifyRoomConfigInfoPostRequestRecordSettings $recordSettings): V1MeetingRoomsModifyRoomConfigInfoPostRequest {
        $this->recordSettings = $recordSettings;
        return $this;
    }

    public function getRecordSettings() {
        return $this->recordSettings;
    }

    public function setRecordSettings(V1MeetingRoomsModifyRoomConfigInfoPostRequestRecordSettings $recordSettings) {
        $this->recordSettings = $recordSettings;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'instance_id' => 'int',
        'meeting_room_id' => 'string',
        'meeting_settings' => '\wemeet\openapi\service\meeting_room\model\V1MeetingRoomsModifyRoomConfigInfoPostRequestMeetingSettings',
        'operator_id' => 'string',
        'operator_id_type' => 'int',
        'record_settings' => '\wemeet\openapi\service\meeting_room\model\V1MeetingRoomsModifyRoomConfigInfoPostRequestRecordSettings'
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
        'meeting_room_id' => null,
        'meeting_settings' => null,
        'operator_id' => null,
        'operator_id_type' => 'int64',
        'record_settings' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'instance_id' => false,
        'meeting_room_id' => false,
        'meeting_settings' => false,
        'operator_id' => false,
        'operator_id_type' => false,
        'record_settings' => false
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
        'meeting_room_id' => 'meeting_room_id',
        'meeting_settings' => 'meeting_settings',
        'operator_id' => 'operator_id',
        'operator_id_type' => 'operator_id_type',
        'record_settings' => 'record_settings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'instance_id' => 'setInstanceId',
        'meeting_room_id' => 'setMeetingRoomId',
        'meeting_settings' => 'setMeetingSettings',
        'operator_id' => 'setOperatorId',
        'operator_id_type' => 'setOperatorIdType',
        'record_settings' => 'setRecordSettings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'instance_id' => 'getInstanceId',
        'meeting_room_id' => 'getMeetingRoomId',
        'meeting_settings' => 'getMeetingSettings',
        'operator_id' => 'getOperatorId',
        'operator_id_type' => 'getOperatorIdType',
        'record_settings' => 'getRecordSettings'
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
            'meeting_room_id' => $this->meetingRoomId,
            'meeting_settings' => $this->meetingSettings,
            'operator_id' => $this->operatorId,
            'operator_id_type' => $this->operatorIdType,
            'record_settings' => $this->recordSettings,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

