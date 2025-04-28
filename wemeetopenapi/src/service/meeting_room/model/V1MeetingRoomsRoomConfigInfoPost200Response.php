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


class V1MeetingRoomsRoomConfigInfoPost200Response implements ModelInterface, \JsonSerializable
{

    /**
    * 类型：\wemeet\openapi\service\meeting_room\model\V1MeetingRoomsRoomConfigInfoPost200ResponseMeetingSettings
     */
    protected $meetingSettings = null;

    /**
    * 类型：\wemeet\openapi\service\meeting_room\model\V1MeetingRoomsRoomConfigInfoPost200ResponseRecordSettings
     */
    protected $recordSettings = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['meeting_settings'])) {
            $this->meetingSettings = new V1MeetingRoomsRoomConfigInfoPost200ResponseMeetingSettings($jsonArray['meeting_settings']);
        }
        if (isset($jsonArray['record_settings'])) {
            $this->recordSettings = new V1MeetingRoomsRoomConfigInfoPost200ResponseRecordSettings($jsonArray['record_settings']);
        }
    }

    public function meetingSettings(V1MeetingRoomsRoomConfigInfoPost200ResponseMeetingSettings $meetingSettings): V1MeetingRoomsRoomConfigInfoPost200Response {
        $this->meetingSettings = $meetingSettings;
        return $this;
    }

    public function getMeetingSettings() {
        return $this->meetingSettings;
    }

    public function setMeetingSettings(V1MeetingRoomsRoomConfigInfoPost200ResponseMeetingSettings $meetingSettings) {
        $this->meetingSettings = $meetingSettings;
    }
    public function recordSettings(V1MeetingRoomsRoomConfigInfoPost200ResponseRecordSettings $recordSettings): V1MeetingRoomsRoomConfigInfoPost200Response {
        $this->recordSettings = $recordSettings;
        return $this;
    }

    public function getRecordSettings() {
        return $this->recordSettings;
    }

    public function setRecordSettings(V1MeetingRoomsRoomConfigInfoPost200ResponseRecordSettings $recordSettings) {
        $this->recordSettings = $recordSettings;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'meeting_settings' => '\wemeet\openapi\service\meeting_room\model\V1MeetingRoomsRoomConfigInfoPost200ResponseMeetingSettings',
        'record_settings' => '\wemeet\openapi\service\meeting_room\model\V1MeetingRoomsRoomConfigInfoPost200ResponseRecordSettings'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'meeting_settings' => null,
        'record_settings' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'meeting_settings' => false,
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
        'meeting_settings' => 'meeting_settings',
        'record_settings' => 'record_settings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'meeting_settings' => 'setMeetingSettings',
        'record_settings' => 'setRecordSettings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'meeting_settings' => 'getMeetingSettings',
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
            'meeting_settings' => $this->meetingSettings,
            'record_settings' => $this->recordSettings,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

