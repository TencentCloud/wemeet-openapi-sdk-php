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


class V1MeetingRoomsMeetingRoomIdGet200ResponseBasicInfo implements ModelInterface, \JsonSerializable
{

    /**
     * 建筑
    * 类型：string
     */
    protected $building = null;

    /**
     * 城市
    * 类型：string
     */
    protected $city = null;

    /**
     * 描述（base64）
    * 类型：string
     */
    protected $desc = null;

    /**
     * 会议室设备
    * 类型：string
     */
    protected $device = null;

    /**
     * 楼层
    * 类型：string
     */
    protected $floor = null;

    /**
     * 会议室名称
    * 类型：string
     */
    protected $meetingRoomName = null;

    /**
     * 容纳人数
    * 类型：int
     */
    protected $participantNumber = null;

    /**
     * 管理员密码（base64）
    * 类型：string
     */
    protected $password = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['building'])) {
            $this->building = $jsonArray['building'];
        }
        if (isset($jsonArray['city'])) {
            $this->city = $jsonArray['city'];
        }
        if (isset($jsonArray['desc'])) {
            $this->desc = $jsonArray['desc'];
        }
        if (isset($jsonArray['device'])) {
            $this->device = $jsonArray['device'];
        }
        if (isset($jsonArray['floor'])) {
            $this->floor = $jsonArray['floor'];
        }
        if (isset($jsonArray['meeting_room_name'])) {
            $this->meetingRoomName = $jsonArray['meeting_room_name'];
        }
        if (isset($jsonArray['participant_number'])) {
            $this->participantNumber = $jsonArray['participant_number'];
        }
        if (isset($jsonArray['password'])) {
            $this->password = $jsonArray['password'];
        }
    }

    public function building(string $building): V1MeetingRoomsMeetingRoomIdGet200ResponseBasicInfo {
        $this->building = $building;
        return $this;
    }

    public function getBuilding() {
        return $this->building;
    }

    public function setBuilding(string $building) {
        $this->building = $building;
    }
    public function city(string $city): V1MeetingRoomsMeetingRoomIdGet200ResponseBasicInfo {
        $this->city = $city;
        return $this;
    }

    public function getCity() {
        return $this->city;
    }

    public function setCity(string $city) {
        $this->city = $city;
    }
    public function desc(string $desc): V1MeetingRoomsMeetingRoomIdGet200ResponseBasicInfo {
        $this->desc = $desc;
        return $this;
    }

    public function getDesc() {
        return $this->desc;
    }

    public function setDesc(string $desc) {
        $this->desc = $desc;
    }
    public function device(string $device): V1MeetingRoomsMeetingRoomIdGet200ResponseBasicInfo {
        $this->device = $device;
        return $this;
    }

    public function getDevice() {
        return $this->device;
    }

    public function setDevice(string $device) {
        $this->device = $device;
    }
    public function floor(string $floor): V1MeetingRoomsMeetingRoomIdGet200ResponseBasicInfo {
        $this->floor = $floor;
        return $this;
    }

    public function getFloor() {
        return $this->floor;
    }

    public function setFloor(string $floor) {
        $this->floor = $floor;
    }
    public function meetingRoomName(string $meetingRoomName): V1MeetingRoomsMeetingRoomIdGet200ResponseBasicInfo {
        $this->meetingRoomName = $meetingRoomName;
        return $this;
    }

    public function getMeetingRoomName() {
        return $this->meetingRoomName;
    }

    public function setMeetingRoomName(string $meetingRoomName) {
        $this->meetingRoomName = $meetingRoomName;
    }
    public function participantNumber(int $participantNumber): V1MeetingRoomsMeetingRoomIdGet200ResponseBasicInfo {
        $this->participantNumber = $participantNumber;
        return $this;
    }

    public function getParticipantNumber() {
        return $this->participantNumber;
    }

    public function setParticipantNumber(int $participantNumber) {
        $this->participantNumber = $participantNumber;
    }
    public function password(string $password): V1MeetingRoomsMeetingRoomIdGet200ResponseBasicInfo {
        $this->password = $password;
        return $this;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword(string $password) {
        $this->password = $password;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'building' => 'string',
        'city' => 'string',
        'desc' => 'string',
        'device' => 'string',
        'floor' => 'string',
        'meeting_room_name' => 'string',
        'participant_number' => 'int',
        'password' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'building' => null,
        'city' => null,
        'desc' => null,
        'device' => null,
        'floor' => null,
        'meeting_room_name' => null,
        'participant_number' => 'int64',
        'password' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'building' => false,
        'city' => false,
        'desc' => false,
        'device' => false,
        'floor' => false,
        'meeting_room_name' => false,
        'participant_number' => false,
        'password' => false
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
        'building' => 'building',
        'city' => 'city',
        'desc' => 'desc',
        'device' => 'device',
        'floor' => 'floor',
        'meeting_room_name' => 'meeting_room_name',
        'participant_number' => 'participant_number',
        'password' => 'password'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'building' => 'setBuilding',
        'city' => 'setCity',
        'desc' => 'setDesc',
        'device' => 'setDevice',
        'floor' => 'setFloor',
        'meeting_room_name' => 'setMeetingRoomName',
        'participant_number' => 'setParticipantNumber',
        'password' => 'setPassword'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'building' => 'getBuilding',
        'city' => 'getCity',
        'desc' => 'getDesc',
        'device' => 'getDevice',
        'floor' => 'getFloor',
        'meeting_room_name' => 'getMeetingRoomName',
        'participant_number' => 'getParticipantNumber',
        'password' => 'getPassword'
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
            'building' => $this->building,
            'city' => $this->city,
            'desc' => $this->desc,
            'device' => $this->device,
            'floor' => $this->floor,
            'meeting_room_name' => $this->meetingRoomName,
            'participant_number' => $this->participantNumber,
            'password' => $this->password,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

