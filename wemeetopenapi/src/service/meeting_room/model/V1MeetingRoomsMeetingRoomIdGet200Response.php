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


class V1MeetingRoomsMeetingRoomIdGet200Response implements ModelInterface, \JsonSerializable
{

    /**
    * 类型：\wemeet\openapi\service\meeting_room\model\V1MeetingRoomsMeetingRoomIdGet200ResponseAccountInfo
     */
    protected $accountInfo = null;

    /**
    * 类型：\wemeet\openapi\service\meeting_room\model\V1MeetingRoomsMeetingRoomIdGet200ResponseBasicInfo
     */
    protected $basicInfo = null;

    /**
    * 类型：\wemeet\openapi\service\meeting_room\model\V1MeetingRoomsMeetingRoomIdGet200ResponseHardwareInfo
     */
    protected $hardwareInfo = null;

    /**
     * 是否允许被呼叫，true：是 false：否
    * 类型：bool
     */
    protected $isAllowCall = null;

    /**
     * 告警通知状态，0：未开启 1：已开启
    * 类型：int
     */
    protected $monitorStatus = null;

    /**
    * 类型：\wemeet\openapi\service\meeting_room\model\V1MeetingRoomsMeetingRoomIdGet200ResponsePmiInfo
     */
    protected $pmiInfo = null;

    /**
     * 预定状态： 0：未开放预定 1：开放预定
    * 类型：int
     */
    protected $scheduledStatus = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['account_info'])) {
            $this->accountInfo = new V1MeetingRoomsMeetingRoomIdGet200ResponseAccountInfo($jsonArray['account_info']);
        }
        if (isset($jsonArray['basic_info'])) {
            $this->basicInfo = new V1MeetingRoomsMeetingRoomIdGet200ResponseBasicInfo($jsonArray['basic_info']);
        }
        if (isset($jsonArray['hardware_info'])) {
            $this->hardwareInfo = new V1MeetingRoomsMeetingRoomIdGet200ResponseHardwareInfo($jsonArray['hardware_info']);
        }
        if (isset($jsonArray['is_allow_call'])) {
            $this->isAllowCall = $jsonArray['is_allow_call'];
        }
        if (isset($jsonArray['monitor_status'])) {
            $this->monitorStatus = $jsonArray['monitor_status'];
        }
        if (isset($jsonArray['pmi_info'])) {
            $this->pmiInfo = new V1MeetingRoomsMeetingRoomIdGet200ResponsePmiInfo($jsonArray['pmi_info']);
        }
        if (isset($jsonArray['scheduled_status'])) {
            $this->scheduledStatus = $jsonArray['scheduled_status'];
        }
    }

    public function accountInfo(V1MeetingRoomsMeetingRoomIdGet200ResponseAccountInfo $accountInfo): V1MeetingRoomsMeetingRoomIdGet200Response {
        $this->accountInfo = $accountInfo;
        return $this;
    }

    public function getAccountInfo() {
        return $this->accountInfo;
    }

    public function setAccountInfo(V1MeetingRoomsMeetingRoomIdGet200ResponseAccountInfo $accountInfo) {
        $this->accountInfo = $accountInfo;
    }
    public function basicInfo(V1MeetingRoomsMeetingRoomIdGet200ResponseBasicInfo $basicInfo): V1MeetingRoomsMeetingRoomIdGet200Response {
        $this->basicInfo = $basicInfo;
        return $this;
    }

    public function getBasicInfo() {
        return $this->basicInfo;
    }

    public function setBasicInfo(V1MeetingRoomsMeetingRoomIdGet200ResponseBasicInfo $basicInfo) {
        $this->basicInfo = $basicInfo;
    }
    public function hardwareInfo(V1MeetingRoomsMeetingRoomIdGet200ResponseHardwareInfo $hardwareInfo): V1MeetingRoomsMeetingRoomIdGet200Response {
        $this->hardwareInfo = $hardwareInfo;
        return $this;
    }

    public function getHardwareInfo() {
        return $this->hardwareInfo;
    }

    public function setHardwareInfo(V1MeetingRoomsMeetingRoomIdGet200ResponseHardwareInfo $hardwareInfo) {
        $this->hardwareInfo = $hardwareInfo;
    }
    public function isAllowCall(bool $isAllowCall): V1MeetingRoomsMeetingRoomIdGet200Response {
        $this->isAllowCall = $isAllowCall;
        return $this;
    }

    public function getIsAllowCall() {
        return $this->isAllowCall;
    }

    public function setIsAllowCall(bool $isAllowCall) {
        $this->isAllowCall = $isAllowCall;
    }
    public function monitorStatus(int $monitorStatus): V1MeetingRoomsMeetingRoomIdGet200Response {
        $this->monitorStatus = $monitorStatus;
        return $this;
    }

    public function getMonitorStatus() {
        return $this->monitorStatus;
    }

    public function setMonitorStatus(int $monitorStatus) {
        $this->monitorStatus = $monitorStatus;
    }
    public function pmiInfo(V1MeetingRoomsMeetingRoomIdGet200ResponsePmiInfo $pmiInfo): V1MeetingRoomsMeetingRoomIdGet200Response {
        $this->pmiInfo = $pmiInfo;
        return $this;
    }

    public function getPmiInfo() {
        return $this->pmiInfo;
    }

    public function setPmiInfo(V1MeetingRoomsMeetingRoomIdGet200ResponsePmiInfo $pmiInfo) {
        $this->pmiInfo = $pmiInfo;
    }
    public function scheduledStatus(int $scheduledStatus): V1MeetingRoomsMeetingRoomIdGet200Response {
        $this->scheduledStatus = $scheduledStatus;
        return $this;
    }

    public function getScheduledStatus() {
        return $this->scheduledStatus;
    }

    public function setScheduledStatus(int $scheduledStatus) {
        $this->scheduledStatus = $scheduledStatus;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_info' => '\wemeet\openapi\service\meeting_room\model\V1MeetingRoomsMeetingRoomIdGet200ResponseAccountInfo',
        'basic_info' => '\wemeet\openapi\service\meeting_room\model\V1MeetingRoomsMeetingRoomIdGet200ResponseBasicInfo',
        'hardware_info' => '\wemeet\openapi\service\meeting_room\model\V1MeetingRoomsMeetingRoomIdGet200ResponseHardwareInfo',
        'is_allow_call' => 'bool',
        'monitor_status' => 'int',
        'pmi_info' => '\wemeet\openapi\service\meeting_room\model\V1MeetingRoomsMeetingRoomIdGet200ResponsePmiInfo',
        'scheduled_status' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'account_info' => null,
        'basic_info' => null,
        'hardware_info' => null,
        'is_allow_call' => null,
        'monitor_status' => 'int64',
        'pmi_info' => null,
        'scheduled_status' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'account_info' => false,
        'basic_info' => false,
        'hardware_info' => false,
        'is_allow_call' => false,
        'monitor_status' => false,
        'pmi_info' => false,
        'scheduled_status' => false
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
        'account_info' => 'account_info',
        'basic_info' => 'basic_info',
        'hardware_info' => 'hardware_info',
        'is_allow_call' => 'is_allow_call',
        'monitor_status' => 'monitor_status',
        'pmi_info' => 'pmi_info',
        'scheduled_status' => 'scheduled_status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_info' => 'setAccountInfo',
        'basic_info' => 'setBasicInfo',
        'hardware_info' => 'setHardwareInfo',
        'is_allow_call' => 'setIsAllowCall',
        'monitor_status' => 'setMonitorStatus',
        'pmi_info' => 'setPmiInfo',
        'scheduled_status' => 'setScheduledStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_info' => 'getAccountInfo',
        'basic_info' => 'getBasicInfo',
        'hardware_info' => 'getHardwareInfo',
        'is_allow_call' => 'getIsAllowCall',
        'monitor_status' => 'getMonitorStatus',
        'pmi_info' => 'getPmiInfo',
        'scheduled_status' => 'getScheduledStatus'
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
            'account_info' => $this->accountInfo,
            'basic_info' => $this->basicInfo,
            'hardware_info' => $this->hardwareInfo,
            'is_allow_call' => $this->isAllowCall,
            'monitor_status' => $this->monitorStatus,
            'pmi_info' => $this->pmiInfo,
            'scheduled_status' => $this->scheduledStatus,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

