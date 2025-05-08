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


class V1DevicesGet200ResponseDeviceInfoListInner implements ModelInterface, \JsonSerializable
{

    /**
     * 应用程序版本
    * 类型：string
     */
    protected $appVersion = null;

    /**
     * 设备型号
    * 类型：string
     */
    protected $deviceModel = null;

    /**
    * 类型：\wemeet\openapi\service\meeting_room\model\V1DevicesGet200ResponseDeviceInfoListInnerDeviceMonitorInfo
     */
    protected $deviceMonitorInfo = null;

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
     * 会议室状态：0：未激活1：未绑定2：空闲3：使用中4：离线，5:未登录
    * 类型：int
     */
    protected $meetingRoomStatus = null;

    /**
    * 类型：string
     */
    protected $roomsId = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['app_version'])) {
            $this->appVersion = $jsonArray['app_version'];
        }
        if (isset($jsonArray['device_model'])) {
            $this->deviceModel = $jsonArray['device_model'];
        }
        if (isset($jsonArray['device_monitor_info'])) {
            $this->deviceMonitorInfo = new V1DevicesGet200ResponseDeviceInfoListInnerDeviceMonitorInfo($jsonArray['device_monitor_info']);
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
        if (isset($jsonArray['rooms_id'])) {
            $this->roomsId = $jsonArray['rooms_id'];
        }
    }

    public function appVersion(string $appVersion): V1DevicesGet200ResponseDeviceInfoListInner {
        $this->appVersion = $appVersion;
        return $this;
    }

    public function getAppVersion() {
        return $this->appVersion;
    }

    public function setAppVersion(string $appVersion) {
        $this->appVersion = $appVersion;
    }
    public function deviceModel(string $deviceModel): V1DevicesGet200ResponseDeviceInfoListInner {
        $this->deviceModel = $deviceModel;
        return $this;
    }

    public function getDeviceModel() {
        return $this->deviceModel;
    }

    public function setDeviceModel(string $deviceModel) {
        $this->deviceModel = $deviceModel;
    }
    public function deviceMonitorInfo(V1DevicesGet200ResponseDeviceInfoListInnerDeviceMonitorInfo $deviceMonitorInfo): V1DevicesGet200ResponseDeviceInfoListInner {
        $this->deviceMonitorInfo = $deviceMonitorInfo;
        return $this;
    }

    public function getDeviceMonitorInfo() {
        return $this->deviceMonitorInfo;
    }

    public function setDeviceMonitorInfo(V1DevicesGet200ResponseDeviceInfoListInnerDeviceMonitorInfo $deviceMonitorInfo) {
        $this->deviceMonitorInfo = $deviceMonitorInfo;
    }
    public function meetingRoomId(string $meetingRoomId): V1DevicesGet200ResponseDeviceInfoListInner {
        $this->meetingRoomId = $meetingRoomId;
        return $this;
    }

    public function getMeetingRoomId() {
        return $this->meetingRoomId;
    }

    public function setMeetingRoomId(string $meetingRoomId) {
        $this->meetingRoomId = $meetingRoomId;
    }
    public function meetingRoomLocation(string $meetingRoomLocation): V1DevicesGet200ResponseDeviceInfoListInner {
        $this->meetingRoomLocation = $meetingRoomLocation;
        return $this;
    }

    public function getMeetingRoomLocation() {
        return $this->meetingRoomLocation;
    }

    public function setMeetingRoomLocation(string $meetingRoomLocation) {
        $this->meetingRoomLocation = $meetingRoomLocation;
    }
    public function meetingRoomName(string $meetingRoomName): V1DevicesGet200ResponseDeviceInfoListInner {
        $this->meetingRoomName = $meetingRoomName;
        return $this;
    }

    public function getMeetingRoomName() {
        return $this->meetingRoomName;
    }

    public function setMeetingRoomName(string $meetingRoomName) {
        $this->meetingRoomName = $meetingRoomName;
    }
    public function meetingRoomStatus(int $meetingRoomStatus): V1DevicesGet200ResponseDeviceInfoListInner {
        $this->meetingRoomStatus = $meetingRoomStatus;
        return $this;
    }

    public function getMeetingRoomStatus() {
        return $this->meetingRoomStatus;
    }

    public function setMeetingRoomStatus(int $meetingRoomStatus) {
        $this->meetingRoomStatus = $meetingRoomStatus;
    }
    public function roomsId(string $roomsId): V1DevicesGet200ResponseDeviceInfoListInner {
        $this->roomsId = $roomsId;
        return $this;
    }

    public function getRoomsId() {
        return $this->roomsId;
    }

    public function setRoomsId(string $roomsId) {
        $this->roomsId = $roomsId;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'app_version' => 'string',
        'device_model' => 'string',
        'device_monitor_info' => '\wemeet\openapi\service\meeting_room\model\V1DevicesGet200ResponseDeviceInfoListInnerDeviceMonitorInfo',
        'meeting_room_id' => 'string',
        'meeting_room_location' => 'string',
        'meeting_room_name' => 'string',
        'meeting_room_status' => 'int',
        'rooms_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'app_version' => null,
        'device_model' => null,
        'device_monitor_info' => null,
        'meeting_room_id' => null,
        'meeting_room_location' => null,
        'meeting_room_name' => null,
        'meeting_room_status' => 'int64',
        'rooms_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'app_version' => false,
        'device_model' => false,
        'device_monitor_info' => false,
        'meeting_room_id' => false,
        'meeting_room_location' => false,
        'meeting_room_name' => false,
        'meeting_room_status' => false,
        'rooms_id' => false
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
        'app_version' => 'app_version',
        'device_model' => 'device_model',
        'device_monitor_info' => 'device_monitor_info',
        'meeting_room_id' => 'meeting_room_id',
        'meeting_room_location' => 'meeting_room_location',
        'meeting_room_name' => 'meeting_room_name',
        'meeting_room_status' => 'meeting_room_status',
        'rooms_id' => 'rooms_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'app_version' => 'setAppVersion',
        'device_model' => 'setDeviceModel',
        'device_monitor_info' => 'setDeviceMonitorInfo',
        'meeting_room_id' => 'setMeetingRoomId',
        'meeting_room_location' => 'setMeetingRoomLocation',
        'meeting_room_name' => 'setMeetingRoomName',
        'meeting_room_status' => 'setMeetingRoomStatus',
        'rooms_id' => 'setRoomsId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'app_version' => 'getAppVersion',
        'device_model' => 'getDeviceModel',
        'device_monitor_info' => 'getDeviceMonitorInfo',
        'meeting_room_id' => 'getMeetingRoomId',
        'meeting_room_location' => 'getMeetingRoomLocation',
        'meeting_room_name' => 'getMeetingRoomName',
        'meeting_room_status' => 'getMeetingRoomStatus',
        'rooms_id' => 'getRoomsId'
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
            'app_version' => $this->appVersion,
            'device_model' => $this->deviceModel,
            'device_monitor_info' => $this->deviceMonitorInfo,
            'meeting_room_id' => $this->meetingRoomId,
            'meeting_room_location' => $this->meetingRoomLocation,
            'meeting_room_name' => $this->meetingRoomName,
            'meeting_room_status' => $this->meetingRoomStatus,
            'rooms_id' => $this->roomsId,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

