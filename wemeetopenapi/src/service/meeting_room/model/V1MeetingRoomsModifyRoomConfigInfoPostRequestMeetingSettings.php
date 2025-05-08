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


class V1MeetingRoomsModifyRoomConfigInfoPostRequestMeetingSettings implements ModelInterface, \JsonSerializable
{

    /**
     * 自动接听，初始值为 false。 1：开启 2：关闭
    * 类型：int
     */
    protected $autoResponse = null;

    /**
     * 字幕，初始值为 true。 true：开启 false：关闭
    * 类型：bool
     */
    protected $caption = null;

    /**
     * Rooms 屏幕是否展示消息通知，初始值为 false。 true：开启 false：不开启
    * 类型：bool
     */
    protected $roomNotification = null;

    /**
     * 专属 ID，初始值为 true。 true：开启 false：关闭
    * 类型：bool
     */
    protected $roomPmi = null;

    /**
    * 类型：\wemeet\openapi\service\meeting_room\model\V1MeetingRoomsModifyRoomConfigInfoPostRequestMeetingSettingsRoomPmiSettings
     */
    protected $roomPmiSettings = null;

    /**
     * 水印，初始值为2。 0：关闭 1：单排水印 2：多排水印
    * 类型：int
     */
    protected $waterMark = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['auto_response'])) {
            $this->autoResponse = $jsonArray['auto_response'];
        }
        if (isset($jsonArray['caption'])) {
            $this->caption = $jsonArray['caption'];
        }
        if (isset($jsonArray['room_notification'])) {
            $this->roomNotification = $jsonArray['room_notification'];
        }
        if (isset($jsonArray['room_pmi'])) {
            $this->roomPmi = $jsonArray['room_pmi'];
        }
        if (isset($jsonArray['room_pmi_settings'])) {
            $this->roomPmiSettings = new V1MeetingRoomsModifyRoomConfigInfoPostRequestMeetingSettingsRoomPmiSettings($jsonArray['room_pmi_settings']);
        }
        if (isset($jsonArray['water_mark'])) {
            $this->waterMark = $jsonArray['water_mark'];
        }
    }

    public function autoResponse(int $autoResponse): V1MeetingRoomsModifyRoomConfigInfoPostRequestMeetingSettings {
        $this->autoResponse = $autoResponse;
        return $this;
    }

    public function getAutoResponse() {
        return $this->autoResponse;
    }

    public function setAutoResponse(int $autoResponse) {
        $this->autoResponse = $autoResponse;
    }
    public function caption(bool $caption): V1MeetingRoomsModifyRoomConfigInfoPostRequestMeetingSettings {
        $this->caption = $caption;
        return $this;
    }

    public function getCaption() {
        return $this->caption;
    }

    public function setCaption(bool $caption) {
        $this->caption = $caption;
    }
    public function roomNotification(bool $roomNotification): V1MeetingRoomsModifyRoomConfigInfoPostRequestMeetingSettings {
        $this->roomNotification = $roomNotification;
        return $this;
    }

    public function getRoomNotification() {
        return $this->roomNotification;
    }

    public function setRoomNotification(bool $roomNotification) {
        $this->roomNotification = $roomNotification;
    }
    public function roomPmi(bool $roomPmi): V1MeetingRoomsModifyRoomConfigInfoPostRequestMeetingSettings {
        $this->roomPmi = $roomPmi;
        return $this;
    }

    public function getRoomPmi() {
        return $this->roomPmi;
    }

    public function setRoomPmi(bool $roomPmi) {
        $this->roomPmi = $roomPmi;
    }
    public function roomPmiSettings(V1MeetingRoomsModifyRoomConfigInfoPostRequestMeetingSettingsRoomPmiSettings $roomPmiSettings): V1MeetingRoomsModifyRoomConfigInfoPostRequestMeetingSettings {
        $this->roomPmiSettings = $roomPmiSettings;
        return $this;
    }

    public function getRoomPmiSettings() {
        return $this->roomPmiSettings;
    }

    public function setRoomPmiSettings(V1MeetingRoomsModifyRoomConfigInfoPostRequestMeetingSettingsRoomPmiSettings $roomPmiSettings) {
        $this->roomPmiSettings = $roomPmiSettings;
    }
    public function waterMark(int $waterMark): V1MeetingRoomsModifyRoomConfigInfoPostRequestMeetingSettings {
        $this->waterMark = $waterMark;
        return $this;
    }

    public function getWaterMark() {
        return $this->waterMark;
    }

    public function setWaterMark(int $waterMark) {
        $this->waterMark = $waterMark;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'auto_response' => 'int',
        'caption' => 'bool',
        'room_notification' => 'bool',
        'room_pmi' => 'bool',
        'room_pmi_settings' => '\wemeet\openapi\service\meeting_room\model\V1MeetingRoomsModifyRoomConfigInfoPostRequestMeetingSettingsRoomPmiSettings',
        'water_mark' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'auto_response' => 'int64',
        'caption' => null,
        'room_notification' => null,
        'room_pmi' => null,
        'room_pmi_settings' => null,
        'water_mark' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'auto_response' => false,
        'caption' => false,
        'room_notification' => false,
        'room_pmi' => false,
        'room_pmi_settings' => false,
        'water_mark' => false
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
        'auto_response' => 'auto_response',
        'caption' => 'caption',
        'room_notification' => 'room_notification',
        'room_pmi' => 'room_pmi',
        'room_pmi_settings' => 'room_pmi_settings',
        'water_mark' => 'water_mark'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'auto_response' => 'setAutoResponse',
        'caption' => 'setCaption',
        'room_notification' => 'setRoomNotification',
        'room_pmi' => 'setRoomPmi',
        'room_pmi_settings' => 'setRoomPmiSettings',
        'water_mark' => 'setWaterMark'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'auto_response' => 'getAutoResponse',
        'caption' => 'getCaption',
        'room_notification' => 'getRoomNotification',
        'room_pmi' => 'getRoomPmi',
        'room_pmi_settings' => 'getRoomPmiSettings',
        'water_mark' => 'getWaterMark'
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
            'auto_response' => $this->autoResponse,
            'caption' => $this->caption,
            'room_notification' => $this->roomNotification,
            'room_pmi' => $this->roomPmi,
            'room_pmi_settings' => $this->roomPmiSettings,
            'water_mark' => $this->waterMark,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

