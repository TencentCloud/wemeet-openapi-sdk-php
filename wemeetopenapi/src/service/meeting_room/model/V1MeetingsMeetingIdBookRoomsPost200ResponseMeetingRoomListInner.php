<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.4
 */
namespace wemeet\openapi\service\meeting_room\model;

use wemeet\openapi\core\xhttp\ModelInterface;


class V1MeetingsMeetingIdBookRoomsPost200ResponseMeetingRoomListInner implements ModelInterface, \JsonSerializable
{

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

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['meeting_room_id'])) {
            $this->meetingRoomId = $jsonArray['meeting_room_id'];
        }
        if (isset($jsonArray['meeting_room_location'])) {
            $this->meetingRoomLocation = $jsonArray['meeting_room_location'];
        }
        if (isset($jsonArray['meeting_room_name'])) {
            $this->meetingRoomName = $jsonArray['meeting_room_name'];
        }
    }

    public function meetingRoomId(string $meetingRoomId): V1MeetingsMeetingIdBookRoomsPost200ResponseMeetingRoomListInner {
        $this->meetingRoomId = $meetingRoomId;
        return $this;
    }

    public function getMeetingRoomId() {
        return $this->meetingRoomId;
    }

    public function setMeetingRoomId(string $meetingRoomId) {
        $this->meetingRoomId = $meetingRoomId;
    }
    public function meetingRoomLocation(string $meetingRoomLocation): V1MeetingsMeetingIdBookRoomsPost200ResponseMeetingRoomListInner {
        $this->meetingRoomLocation = $meetingRoomLocation;
        return $this;
    }

    public function getMeetingRoomLocation() {
        return $this->meetingRoomLocation;
    }

    public function setMeetingRoomLocation(string $meetingRoomLocation) {
        $this->meetingRoomLocation = $meetingRoomLocation;
    }
    public function meetingRoomName(string $meetingRoomName): V1MeetingsMeetingIdBookRoomsPost200ResponseMeetingRoomListInner {
        $this->meetingRoomName = $meetingRoomName;
        return $this;
    }

    public function getMeetingRoomName() {
        return $this->meetingRoomName;
    }

    public function setMeetingRoomName(string $meetingRoomName) {
        $this->meetingRoomName = $meetingRoomName;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'meeting_room_id' => 'string',
        'meeting_room_location' => 'string',
        'meeting_room_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'meeting_room_id' => null,
        'meeting_room_location' => null,
        'meeting_room_name' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'meeting_room_id' => false,
        'meeting_room_location' => false,
        'meeting_room_name' => false
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
        'meeting_room_id' => 'meeting_room_id',
        'meeting_room_location' => 'meeting_room_location',
        'meeting_room_name' => 'meeting_room_name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'meeting_room_id' => 'setMeetingRoomId',
        'meeting_room_location' => 'setMeetingRoomLocation',
        'meeting_room_name' => 'setMeetingRoomName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'meeting_room_id' => 'getMeetingRoomId',
        'meeting_room_location' => 'getMeetingRoomLocation',
        'meeting_room_name' => 'getMeetingRoomName'
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
            'meeting_room_id' => $this->meetingRoomId,
            'meeting_room_location' => $this->meetingRoomLocation,
            'meeting_room_name' => $this->meetingRoomName,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

