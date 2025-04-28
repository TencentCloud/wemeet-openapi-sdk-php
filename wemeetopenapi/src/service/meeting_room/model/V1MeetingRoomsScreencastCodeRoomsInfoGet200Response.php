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


class V1MeetingRoomsScreencastCodeRoomsInfoGet200Response implements ModelInterface, \JsonSerializable
{

    /**
     * 中控API密码
    * 类型：string
     */
    protected $apiPassword = null;

    /**
     * 中控API开关
    * 类型：bool
     */
    protected $csApiEnable = null;

    /**
     * 会议室ID
    * 类型：string
     */
    protected $meetingRoomId = null;

    /**
     * Rooms ID
    * 类型：string
     */
    protected $roomsId = null;

    /**
     * rooms的IP列表
    * 类型：string[]
     */
    protected $roomsIpList = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['api_password'])) {
            $this->apiPassword = $jsonArray['api_password'];
        }
        if (isset($jsonArray['cs_api_enable'])) {
            $this->csApiEnable = $jsonArray['cs_api_enable'];
        }
        if (isset($jsonArray['meeting_room_id'])) {
            $this->meetingRoomId = $jsonArray['meeting_room_id'];
        }
        if (isset($jsonArray['rooms_id'])) {
            $this->roomsId = $jsonArray['rooms_id'];
        }
        if (isset($jsonArray['rooms_ip_list'])) {
            $this->roomsIpList = $jsonArray['rooms_ip_list'];
        }
    }

    public function apiPassword(string $apiPassword): V1MeetingRoomsScreencastCodeRoomsInfoGet200Response {
        $this->apiPassword = $apiPassword;
        return $this;
    }

    public function getApiPassword() {
        return $this->apiPassword;
    }

    public function setApiPassword(string $apiPassword) {
        $this->apiPassword = $apiPassword;
    }
    public function csApiEnable(bool $csApiEnable): V1MeetingRoomsScreencastCodeRoomsInfoGet200Response {
        $this->csApiEnable = $csApiEnable;
        return $this;
    }

    public function getCsApiEnable() {
        return $this->csApiEnable;
    }

    public function setCsApiEnable(bool $csApiEnable) {
        $this->csApiEnable = $csApiEnable;
    }
    public function meetingRoomId(string $meetingRoomId): V1MeetingRoomsScreencastCodeRoomsInfoGet200Response {
        $this->meetingRoomId = $meetingRoomId;
        return $this;
    }

    public function getMeetingRoomId() {
        return $this->meetingRoomId;
    }

    public function setMeetingRoomId(string $meetingRoomId) {
        $this->meetingRoomId = $meetingRoomId;
    }
    public function roomsId(string $roomsId): V1MeetingRoomsScreencastCodeRoomsInfoGet200Response {
        $this->roomsId = $roomsId;
        return $this;
    }

    public function getRoomsId() {
        return $this->roomsId;
    }

    public function setRoomsId(string $roomsId) {
        $this->roomsId = $roomsId;
    }
    public function roomsIpList(array $roomsIpList): V1MeetingRoomsScreencastCodeRoomsInfoGet200Response {
        $this->roomsIpList = $roomsIpList;
        return $this;
    }

    public function getRoomsIpList() {
        return $this->roomsIpList;
    }

    public function setRoomsIpList(array $roomsIpList) {
        $this->roomsIpList = $roomsIpList;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'api_password' => 'string',
        'cs_api_enable' => 'bool',
        'meeting_room_id' => 'string',
        'rooms_id' => 'string',
        'rooms_ip_list' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'api_password' => null,
        'cs_api_enable' => null,
        'meeting_room_id' => null,
        'rooms_id' => null,
        'rooms_ip_list' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'api_password' => false,
        'cs_api_enable' => false,
        'meeting_room_id' => false,
        'rooms_id' => false,
        'rooms_ip_list' => false
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
        'api_password' => 'api_password',
        'cs_api_enable' => 'cs_api_enable',
        'meeting_room_id' => 'meeting_room_id',
        'rooms_id' => 'rooms_id',
        'rooms_ip_list' => 'rooms_ip_list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'api_password' => 'setApiPassword',
        'cs_api_enable' => 'setCsApiEnable',
        'meeting_room_id' => 'setMeetingRoomId',
        'rooms_id' => 'setRoomsId',
        'rooms_ip_list' => 'setRoomsIpList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'api_password' => 'getApiPassword',
        'cs_api_enable' => 'getCsApiEnable',
        'meeting_room_id' => 'getMeetingRoomId',
        'rooms_id' => 'getRoomsId',
        'rooms_ip_list' => 'getRoomsIpList'
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
            'api_password' => $this->apiPassword,
            'cs_api_enable' => $this->csApiEnable,
            'meeting_room_id' => $this->meetingRoomId,
            'rooms_id' => $this->roomsId,
            'rooms_ip_list' => $this->roomsIpList,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

