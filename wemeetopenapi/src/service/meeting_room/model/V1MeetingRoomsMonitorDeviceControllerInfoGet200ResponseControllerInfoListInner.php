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


class V1MeetingRoomsMonitorDeviceControllerInfoGet200ResponseControllerInfoListInner implements ModelInterface, \JsonSerializable
{

    /**
     * 应用程序版本。
    * 类型：string
     */
    protected $appVersion = null;

    /**
     * 控制器型号
    * 类型：string
     */
    protected $controllerModel = null;

    /**
     * 控制器名称
    * 类型：string
     */
    protected $controllerName = null;

    /**
     * CPU 类型
    * 类型：string
     */
    protected $cpuType = null;

    /**
     * CPU 当前占有率
    * 类型：string
     */
    protected $cpuUsage = null;

    /**
     * 固件版本
    * 类型：string
     */
    protected $frameworkVersion = null;

    /**
     * IP 地址
    * 类型：string
     */
    protected $ipAddress = null;

    /**
     * MAC 地址
    * 类型：string
     */
    protected $macAddress = null;

    /**
     * 厂商
    * 类型：string
     */
    protected $manufactureName = null;

    /**
     * 会议室地址。
    * 类型：string
     */
    protected $meetingRoomLocation = null;

    /**
     * 会议室名称。
    * 类型：string
     */
    protected $meetingRoomName = null;

    /**
     * 内存使用大小
    * 类型：string
     */
    protected $memUsage = null;

    /**
     * 网络类型
    * 类型：string
     */
    protected $networkType = null;

    /**
     * 会议室 ID。
    * 类型：string
     */
    protected $roomsId = null;

    /**
     * 设备状态；0:离线 1:在线
    * 类型：string
     */
    protected $status = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['app_version'])) {
            $this->appVersion = $jsonArray['app_version'];
        }
        if (isset($jsonArray['controller_model'])) {
            $this->controllerModel = $jsonArray['controller_model'];
        }
        if (isset($jsonArray['controller_name'])) {
            $this->controllerName = $jsonArray['controller_name'];
        }
        if (isset($jsonArray['cpu_type'])) {
            $this->cpuType = $jsonArray['cpu_type'];
        }
        if (isset($jsonArray['cpu_usage'])) {
            $this->cpuUsage = $jsonArray['cpu_usage'];
        }
        if (isset($jsonArray['framework_version'])) {
            $this->frameworkVersion = $jsonArray['framework_version'];
        }
        if (isset($jsonArray['ip_address'])) {
            $this->ipAddress = $jsonArray['ip_address'];
        }
        if (isset($jsonArray['mac_address'])) {
            $this->macAddress = $jsonArray['mac_address'];
        }
        if (isset($jsonArray['manufacture_name'])) {
            $this->manufactureName = $jsonArray['manufacture_name'];
        }
        if (isset($jsonArray['meeting_room_location'])) {
            $this->meetingRoomLocation = $jsonArray['meeting_room_location'];
        }
        if (isset($jsonArray['meeting_room_name'])) {
            $this->meetingRoomName = $jsonArray['meeting_room_name'];
        }
        if (isset($jsonArray['mem_usage'])) {
            $this->memUsage = $jsonArray['mem_usage'];
        }
        if (isset($jsonArray['network_type'])) {
            $this->networkType = $jsonArray['network_type'];
        }
        if (isset($jsonArray['rooms_id'])) {
            $this->roomsId = $jsonArray['rooms_id'];
        }
        if (isset($jsonArray['status'])) {
            $this->status = $jsonArray['status'];
        }
    }

    public function appVersion(string $appVersion): V1MeetingRoomsMonitorDeviceControllerInfoGet200ResponseControllerInfoListInner {
        $this->appVersion = $appVersion;
        return $this;
    }

    public function getAppVersion() {
        return $this->appVersion;
    }

    public function setAppVersion(string $appVersion) {
        $this->appVersion = $appVersion;
    }
    public function controllerModel(string $controllerModel): V1MeetingRoomsMonitorDeviceControllerInfoGet200ResponseControllerInfoListInner {
        $this->controllerModel = $controllerModel;
        return $this;
    }

    public function getControllerModel() {
        return $this->controllerModel;
    }

    public function setControllerModel(string $controllerModel) {
        $this->controllerModel = $controllerModel;
    }
    public function controllerName(string $controllerName): V1MeetingRoomsMonitorDeviceControllerInfoGet200ResponseControllerInfoListInner {
        $this->controllerName = $controllerName;
        return $this;
    }

    public function getControllerName() {
        return $this->controllerName;
    }

    public function setControllerName(string $controllerName) {
        $this->controllerName = $controllerName;
    }
    public function cpuType(string $cpuType): V1MeetingRoomsMonitorDeviceControllerInfoGet200ResponseControllerInfoListInner {
        $this->cpuType = $cpuType;
        return $this;
    }

    public function getCpuType() {
        return $this->cpuType;
    }

    public function setCpuType(string $cpuType) {
        $this->cpuType = $cpuType;
    }
    public function cpuUsage(string $cpuUsage): V1MeetingRoomsMonitorDeviceControllerInfoGet200ResponseControllerInfoListInner {
        $this->cpuUsage = $cpuUsage;
        return $this;
    }

    public function getCpuUsage() {
        return $this->cpuUsage;
    }

    public function setCpuUsage(string $cpuUsage) {
        $this->cpuUsage = $cpuUsage;
    }
    public function frameworkVersion(string $frameworkVersion): V1MeetingRoomsMonitorDeviceControllerInfoGet200ResponseControllerInfoListInner {
        $this->frameworkVersion = $frameworkVersion;
        return $this;
    }

    public function getFrameworkVersion() {
        return $this->frameworkVersion;
    }

    public function setFrameworkVersion(string $frameworkVersion) {
        $this->frameworkVersion = $frameworkVersion;
    }
    public function ipAddress(string $ipAddress): V1MeetingRoomsMonitorDeviceControllerInfoGet200ResponseControllerInfoListInner {
        $this->ipAddress = $ipAddress;
        return $this;
    }

    public function getIpAddress() {
        return $this->ipAddress;
    }

    public function setIpAddress(string $ipAddress) {
        $this->ipAddress = $ipAddress;
    }
    public function macAddress(string $macAddress): V1MeetingRoomsMonitorDeviceControllerInfoGet200ResponseControllerInfoListInner {
        $this->macAddress = $macAddress;
        return $this;
    }

    public function getMacAddress() {
        return $this->macAddress;
    }

    public function setMacAddress(string $macAddress) {
        $this->macAddress = $macAddress;
    }
    public function manufactureName(string $manufactureName): V1MeetingRoomsMonitorDeviceControllerInfoGet200ResponseControllerInfoListInner {
        $this->manufactureName = $manufactureName;
        return $this;
    }

    public function getManufactureName() {
        return $this->manufactureName;
    }

    public function setManufactureName(string $manufactureName) {
        $this->manufactureName = $manufactureName;
    }
    public function meetingRoomLocation(string $meetingRoomLocation): V1MeetingRoomsMonitorDeviceControllerInfoGet200ResponseControllerInfoListInner {
        $this->meetingRoomLocation = $meetingRoomLocation;
        return $this;
    }

    public function getMeetingRoomLocation() {
        return $this->meetingRoomLocation;
    }

    public function setMeetingRoomLocation(string $meetingRoomLocation) {
        $this->meetingRoomLocation = $meetingRoomLocation;
    }
    public function meetingRoomName(string $meetingRoomName): V1MeetingRoomsMonitorDeviceControllerInfoGet200ResponseControllerInfoListInner {
        $this->meetingRoomName = $meetingRoomName;
        return $this;
    }

    public function getMeetingRoomName() {
        return $this->meetingRoomName;
    }

    public function setMeetingRoomName(string $meetingRoomName) {
        $this->meetingRoomName = $meetingRoomName;
    }
    public function memUsage(string $memUsage): V1MeetingRoomsMonitorDeviceControllerInfoGet200ResponseControllerInfoListInner {
        $this->memUsage = $memUsage;
        return $this;
    }

    public function getMemUsage() {
        return $this->memUsage;
    }

    public function setMemUsage(string $memUsage) {
        $this->memUsage = $memUsage;
    }
    public function networkType(string $networkType): V1MeetingRoomsMonitorDeviceControllerInfoGet200ResponseControllerInfoListInner {
        $this->networkType = $networkType;
        return $this;
    }

    public function getNetworkType() {
        return $this->networkType;
    }

    public function setNetworkType(string $networkType) {
        $this->networkType = $networkType;
    }
    public function roomsId(string $roomsId): V1MeetingRoomsMonitorDeviceControllerInfoGet200ResponseControllerInfoListInner {
        $this->roomsId = $roomsId;
        return $this;
    }

    public function getRoomsId() {
        return $this->roomsId;
    }

    public function setRoomsId(string $roomsId) {
        $this->roomsId = $roomsId;
    }
    public function status(string $status): V1MeetingRoomsMonitorDeviceControllerInfoGet200ResponseControllerInfoListInner {
        $this->status = $status;
        return $this;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus(string $status) {
        $this->status = $status;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'app_version' => 'string',
        'controller_model' => 'string',
        'controller_name' => 'string',
        'cpu_type' => 'string',
        'cpu_usage' => 'string',
        'framework_version' => 'string',
        'ip_address' => 'string',
        'mac_address' => 'string',
        'manufacture_name' => 'string',
        'meeting_room_location' => 'string',
        'meeting_room_name' => 'string',
        'mem_usage' => 'string',
        'network_type' => 'string',
        'rooms_id' => 'string',
        'status' => 'string'
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
        'controller_model' => null,
        'controller_name' => null,
        'cpu_type' => null,
        'cpu_usage' => null,
        'framework_version' => null,
        'ip_address' => null,
        'mac_address' => null,
        'manufacture_name' => null,
        'meeting_room_location' => null,
        'meeting_room_name' => null,
        'mem_usage' => null,
        'network_type' => null,
        'rooms_id' => null,
        'status' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'app_version' => false,
        'controller_model' => false,
        'controller_name' => false,
        'cpu_type' => false,
        'cpu_usage' => false,
        'framework_version' => false,
        'ip_address' => false,
        'mac_address' => false,
        'manufacture_name' => false,
        'meeting_room_location' => false,
        'meeting_room_name' => false,
        'mem_usage' => false,
        'network_type' => false,
        'rooms_id' => false,
        'status' => false
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
        'controller_model' => 'controller_model',
        'controller_name' => 'controller_name',
        'cpu_type' => 'cpu_type',
        'cpu_usage' => 'cpu_usage',
        'framework_version' => 'framework_version',
        'ip_address' => 'ip_address',
        'mac_address' => 'mac_address',
        'manufacture_name' => 'manufacture_name',
        'meeting_room_location' => 'meeting_room_location',
        'meeting_room_name' => 'meeting_room_name',
        'mem_usage' => 'mem_usage',
        'network_type' => 'network_type',
        'rooms_id' => 'rooms_id',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'app_version' => 'setAppVersion',
        'controller_model' => 'setControllerModel',
        'controller_name' => 'setControllerName',
        'cpu_type' => 'setCpuType',
        'cpu_usage' => 'setCpuUsage',
        'framework_version' => 'setFrameworkVersion',
        'ip_address' => 'setIpAddress',
        'mac_address' => 'setMacAddress',
        'manufacture_name' => 'setManufactureName',
        'meeting_room_location' => 'setMeetingRoomLocation',
        'meeting_room_name' => 'setMeetingRoomName',
        'mem_usage' => 'setMemUsage',
        'network_type' => 'setNetworkType',
        'rooms_id' => 'setRoomsId',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'app_version' => 'getAppVersion',
        'controller_model' => 'getControllerModel',
        'controller_name' => 'getControllerName',
        'cpu_type' => 'getCpuType',
        'cpu_usage' => 'getCpuUsage',
        'framework_version' => 'getFrameworkVersion',
        'ip_address' => 'getIpAddress',
        'mac_address' => 'getMacAddress',
        'manufacture_name' => 'getManufactureName',
        'meeting_room_location' => 'getMeetingRoomLocation',
        'meeting_room_name' => 'getMeetingRoomName',
        'mem_usage' => 'getMemUsage',
        'network_type' => 'getNetworkType',
        'rooms_id' => 'getRoomsId',
        'status' => 'getStatus'
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
            'controller_model' => $this->controllerModel,
            'controller_name' => $this->controllerName,
            'cpu_type' => $this->cpuType,
            'cpu_usage' => $this->cpuUsage,
            'framework_version' => $this->frameworkVersion,
            'ip_address' => $this->ipAddress,
            'mac_address' => $this->macAddress,
            'manufacture_name' => $this->manufactureName,
            'meeting_room_location' => $this->meetingRoomLocation,
            'meeting_room_name' => $this->meetingRoomName,
            'mem_usage' => $this->memUsage,
            'network_type' => $this->networkType,
            'rooms_id' => $this->roomsId,
            'status' => $this->status,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

