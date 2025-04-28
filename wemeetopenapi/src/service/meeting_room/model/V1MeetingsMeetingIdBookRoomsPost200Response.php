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


class V1MeetingsMeetingIdBookRoomsPost200Response implements ModelInterface, \JsonSerializable
{

    /**
     * 会议室对象列表
    * 类型：\wemeet\openapi\service\meeting_room\model\V1MeetingsMeetingIdBookRoomsPost200ResponseMeetingRoomListInner[]
     */
    protected $meetingRoomList = null;

    /**
     * 会议室数量
    * 类型：int
     */
    protected $meetingRoomNumber = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['meeting_room_list'])) {
            $this->meetingRoomList = $jsonArray['meeting_room_list'];
        }
        if (isset($jsonArray['meeting_room_number'])) {
            $this->meetingRoomNumber = $jsonArray['meeting_room_number'];
        }
    }

    public function meetingRoomList(array $meetingRoomList): V1MeetingsMeetingIdBookRoomsPost200Response {
        $this->meetingRoomList = $meetingRoomList;
        return $this;
    }

    public function getMeetingRoomList() {
        return $this->meetingRoomList;
    }

    public function setMeetingRoomList(array $meetingRoomList) {
        $this->meetingRoomList = $meetingRoomList;
    }
    public function meetingRoomNumber(int $meetingRoomNumber): V1MeetingsMeetingIdBookRoomsPost200Response {
        $this->meetingRoomNumber = $meetingRoomNumber;
        return $this;
    }

    public function getMeetingRoomNumber() {
        return $this->meetingRoomNumber;
    }

    public function setMeetingRoomNumber(int $meetingRoomNumber) {
        $this->meetingRoomNumber = $meetingRoomNumber;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'meeting_room_list' => '\wemeet\openapi\service\meeting_room\model\V1MeetingsMeetingIdBookRoomsPost200ResponseMeetingRoomListInner[]',
        'meeting_room_number' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'meeting_room_list' => null,
        'meeting_room_number' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'meeting_room_list' => false,
        'meeting_room_number' => false
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
        'meeting_room_list' => 'meeting_room_list',
        'meeting_room_number' => 'meeting_room_number'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'meeting_room_list' => 'setMeetingRoomList',
        'meeting_room_number' => 'setMeetingRoomNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'meeting_room_list' => 'getMeetingRoomList',
        'meeting_room_number' => 'getMeetingRoomNumber'
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
            'meeting_room_list' => $this->meetingRoomList,
            'meeting_room_number' => $this->meetingRoomNumber,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

