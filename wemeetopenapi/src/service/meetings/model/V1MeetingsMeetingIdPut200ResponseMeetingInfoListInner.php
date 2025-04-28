<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.2
 */
namespace wemeet\openapi\service\meetings\model;

use wemeet\openapi\core\xhttp\ModelInterface;


class V1MeetingsMeetingIdPut200ResponseMeetingInfoListInner implements ModelInterface, \JsonSerializable
{

    /**
     * 是否开启直播
    * 类型：bool
     */
    protected $enableLive = null;

    /**
     * 主持人密钥，仅支持6位数字。 如开启主持人密钥后没有填写此项，将自动分配一个6位数字的密钥。
    * 类型：string
     */
    protected $hostKey = null;

    /**
    * 类型：\wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdPut200ResponseMeetingInfoListInnerLiveConfig
     */
    protected $liveConfig = null;

    /**
     * 会议号码
    * 类型：string
     */
    protected $meetingCode = null;

    /**
     * 会议的唯一 ID
    * 类型：string
     */
    protected $meetingId = null;

    /**
    * 类型：\wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdPut200ResponseMeetingInfoListInnerSettings
     */
    protected $settings = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['enable_live'])) {
            $this->enableLive = $jsonArray['enable_live'];
        }
        if (isset($jsonArray['host_key'])) {
            $this->hostKey = $jsonArray['host_key'];
        }
        if (isset($jsonArray['live_config'])) {
            $this->liveConfig = new V1MeetingsMeetingIdPut200ResponseMeetingInfoListInnerLiveConfig($jsonArray['live_config']);
        }
        if (isset($jsonArray['meeting_code'])) {
            $this->meetingCode = $jsonArray['meeting_code'];
        }
        if (isset($jsonArray['meeting_id'])) {
            $this->meetingId = $jsonArray['meeting_id'];
        }
        if (isset($jsonArray['settings'])) {
            $this->settings = new V1MeetingsMeetingIdPut200ResponseMeetingInfoListInnerSettings($jsonArray['settings']);
        }
    }

    public function enableLive(bool $enableLive): V1MeetingsMeetingIdPut200ResponseMeetingInfoListInner {
        $this->enableLive = $enableLive;
        return $this;
    }

    public function getEnableLive() {
        return $this->enableLive;
    }

    public function setEnableLive(bool $enableLive) {
        $this->enableLive = $enableLive;
    }
    public function hostKey(string $hostKey): V1MeetingsMeetingIdPut200ResponseMeetingInfoListInner {
        $this->hostKey = $hostKey;
        return $this;
    }

    public function getHostKey() {
        return $this->hostKey;
    }

    public function setHostKey(string $hostKey) {
        $this->hostKey = $hostKey;
    }
    public function liveConfig(V1MeetingsMeetingIdPut200ResponseMeetingInfoListInnerLiveConfig $liveConfig): V1MeetingsMeetingIdPut200ResponseMeetingInfoListInner {
        $this->liveConfig = $liveConfig;
        return $this;
    }

    public function getLiveConfig() {
        return $this->liveConfig;
    }

    public function setLiveConfig(V1MeetingsMeetingIdPut200ResponseMeetingInfoListInnerLiveConfig $liveConfig) {
        $this->liveConfig = $liveConfig;
    }
    public function meetingCode(string $meetingCode): V1MeetingsMeetingIdPut200ResponseMeetingInfoListInner {
        $this->meetingCode = $meetingCode;
        return $this;
    }

    public function getMeetingCode() {
        return $this->meetingCode;
    }

    public function setMeetingCode(string $meetingCode) {
        $this->meetingCode = $meetingCode;
    }
    public function meetingId(string $meetingId): V1MeetingsMeetingIdPut200ResponseMeetingInfoListInner {
        $this->meetingId = $meetingId;
        return $this;
    }

    public function getMeetingId() {
        return $this->meetingId;
    }

    public function setMeetingId(string $meetingId) {
        $this->meetingId = $meetingId;
    }
    public function settings(V1MeetingsMeetingIdPut200ResponseMeetingInfoListInnerSettings $settings): V1MeetingsMeetingIdPut200ResponseMeetingInfoListInner {
        $this->settings = $settings;
        return $this;
    }

    public function getSettings() {
        return $this->settings;
    }

    public function setSettings(V1MeetingsMeetingIdPut200ResponseMeetingInfoListInnerSettings $settings) {
        $this->settings = $settings;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'enable_live' => 'bool',
        'host_key' => 'string',
        'live_config' => '\wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdPut200ResponseMeetingInfoListInnerLiveConfig',
        'meeting_code' => 'string',
        'meeting_id' => 'string',
        'settings' => '\wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdPut200ResponseMeetingInfoListInnerSettings'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'enable_live' => null,
        'host_key' => null,
        'live_config' => null,
        'meeting_code' => null,
        'meeting_id' => null,
        'settings' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'enable_live' => false,
        'host_key' => false,
        'live_config' => false,
        'meeting_code' => false,
        'meeting_id' => false,
        'settings' => false
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
        'enable_live' => 'enable_live',
        'host_key' => 'host_key',
        'live_config' => 'live_config',
        'meeting_code' => 'meeting_code',
        'meeting_id' => 'meeting_id',
        'settings' => 'settings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'enable_live' => 'setEnableLive',
        'host_key' => 'setHostKey',
        'live_config' => 'setLiveConfig',
        'meeting_code' => 'setMeetingCode',
        'meeting_id' => 'setMeetingId',
        'settings' => 'setSettings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'enable_live' => 'getEnableLive',
        'host_key' => 'getHostKey',
        'live_config' => 'getLiveConfig',
        'meeting_code' => 'getMeetingCode',
        'meeting_id' => 'getMeetingId',
        'settings' => 'getSettings'
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
            'enable_live' => $this->enableLive,
            'host_key' => $this->hostKey,
            'live_config' => $this->liveConfig,
            'meeting_code' => $this->meetingCode,
            'meeting_id' => $this->meetingId,
            'settings' => $this->settings,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

