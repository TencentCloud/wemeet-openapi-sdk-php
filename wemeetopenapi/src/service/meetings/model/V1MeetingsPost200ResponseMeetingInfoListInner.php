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


class V1MeetingsPost200ResponseMeetingInfoListInner implements ModelInterface, \JsonSerializable
{

    /**
     * 联席主持人
    * 类型：\wemeet\openapi\service\meetings\model\V1MeetingsPost200ResponseMeetingInfoListInnerCurrentCoHostsInner[]
     */
    protected $currentCoHosts = null;

    /**
     * 是否开启直播（会议创建人才有权限查询）
    * 类型：bool
     */
    protected $enableLive = null;

    /**
     * 会议结束时间戳（秒）
    * 类型：string
     */
    protected $endTime = null;

    /**
     * 主持人密钥，仅支持6位数字。
    * 类型：string
     */
    protected $hostKey = null;

    /**
     * 指定主持人列表，仅商业版和企业版可指定主持人
    * 类型：\wemeet\openapi\service\meetings\model\V1MeetingsPost200ResponseMeetingInfoListInnerHostsInner[]
     */
    protected $hosts = null;

    /**
     * 加入会议 URL
    * 类型：string
     */
    protected $joinUrl = null;

    /**
    * 类型：\wemeet\openapi\service\meetings\model\V1MeetingsPost200ResponseMeetingInfoListInnerLiveConfig
     */
    protected $liveConfig = null;

    /**
     * 会议 App 的呼入号码
    * 类型：string
     */
    protected $meetingCode = null;

    /**
     * 会议唯一id
    * 类型：string
     */
    protected $meetingId = null;

    /**
     * 邀请的参会人
    * 类型：\wemeet\openapi\service\meetings\model\V1MeetingsPost200ResponseMeetingInfoListInnerParticipantsInner[]
     */
    protected $participants = null;

    /**
     * 会议密码
    * 类型：string
     */
    protected $password = null;

    /**
    * 类型：\wemeet\openapi\service\meetings\model\V1MeetingsPost200ResponseMeetingInfoListInnerSettings
     */
    protected $settings = null;

    /**
     * 会议开始时间戳（秒）
    * 类型：string
     */
    protected $startTime = null;

    /**
     * 会议主题
    * 类型：string
     */
    protected $subject = null;

    /**
     * 邀请的参会者中未注册用户。注意：仅腾讯会议商业版和企业版可获取该参数。
    * 类型：string[]
     */
    protected $userNonRegistered = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['current_co_hosts'])) {
            $this->currentCoHosts = $jsonArray['current_co_hosts'];
        }
        if (isset($jsonArray['enable_live'])) {
            $this->enableLive = $jsonArray['enable_live'];
        }
        if (isset($jsonArray['end_time'])) {
            $this->endTime = $jsonArray['end_time'];
        }
        if (isset($jsonArray['host_key'])) {
            $this->hostKey = $jsonArray['host_key'];
        }
        if (isset($jsonArray['hosts'])) {
            $this->hosts = $jsonArray['hosts'];
        }
        if (isset($jsonArray['join_url'])) {
            $this->joinUrl = $jsonArray['join_url'];
        }
        if (isset($jsonArray['live_config'])) {
            $this->liveConfig = new V1MeetingsPost200ResponseMeetingInfoListInnerLiveConfig($jsonArray['live_config']);
        }
        if (isset($jsonArray['meeting_code'])) {
            $this->meetingCode = $jsonArray['meeting_code'];
        }
        if (isset($jsonArray['meeting_id'])) {
            $this->meetingId = $jsonArray['meeting_id'];
        }
        if (isset($jsonArray['participants'])) {
            $this->participants = $jsonArray['participants'];
        }
        if (isset($jsonArray['password'])) {
            $this->password = $jsonArray['password'];
        }
        if (isset($jsonArray['settings'])) {
            $this->settings = new V1MeetingsPost200ResponseMeetingInfoListInnerSettings($jsonArray['settings']);
        }
        if (isset($jsonArray['start_time'])) {
            $this->startTime = $jsonArray['start_time'];
        }
        if (isset($jsonArray['subject'])) {
            $this->subject = $jsonArray['subject'];
        }
        if (isset($jsonArray['user_non_registered'])) {
            $this->userNonRegistered = $jsonArray['user_non_registered'];
        }
    }

    public function currentCoHosts(array $currentCoHosts): V1MeetingsPost200ResponseMeetingInfoListInner {
        $this->currentCoHosts = $currentCoHosts;
        return $this;
    }

    public function getCurrentCoHosts() {
        return $this->currentCoHosts;
    }

    public function setCurrentCoHosts(array $currentCoHosts) {
        $this->currentCoHosts = $currentCoHosts;
    }
    public function enableLive(bool $enableLive): V1MeetingsPost200ResponseMeetingInfoListInner {
        $this->enableLive = $enableLive;
        return $this;
    }

    public function getEnableLive() {
        return $this->enableLive;
    }

    public function setEnableLive(bool $enableLive) {
        $this->enableLive = $enableLive;
    }
    public function endTime(string $endTime): V1MeetingsPost200ResponseMeetingInfoListInner {
        $this->endTime = $endTime;
        return $this;
    }

    public function getEndTime() {
        return $this->endTime;
    }

    public function setEndTime(string $endTime) {
        $this->endTime = $endTime;
    }
    public function hostKey(string $hostKey): V1MeetingsPost200ResponseMeetingInfoListInner {
        $this->hostKey = $hostKey;
        return $this;
    }

    public function getHostKey() {
        return $this->hostKey;
    }

    public function setHostKey(string $hostKey) {
        $this->hostKey = $hostKey;
    }
    public function hosts(array $hosts): V1MeetingsPost200ResponseMeetingInfoListInner {
        $this->hosts = $hosts;
        return $this;
    }

    public function getHosts() {
        return $this->hosts;
    }

    public function setHosts(array $hosts) {
        $this->hosts = $hosts;
    }
    public function joinUrl(string $joinUrl): V1MeetingsPost200ResponseMeetingInfoListInner {
        $this->joinUrl = $joinUrl;
        return $this;
    }

    public function getJoinUrl() {
        return $this->joinUrl;
    }

    public function setJoinUrl(string $joinUrl) {
        $this->joinUrl = $joinUrl;
    }
    public function liveConfig(V1MeetingsPost200ResponseMeetingInfoListInnerLiveConfig $liveConfig): V1MeetingsPost200ResponseMeetingInfoListInner {
        $this->liveConfig = $liveConfig;
        return $this;
    }

    public function getLiveConfig() {
        return $this->liveConfig;
    }

    public function setLiveConfig(V1MeetingsPost200ResponseMeetingInfoListInnerLiveConfig $liveConfig) {
        $this->liveConfig = $liveConfig;
    }
    public function meetingCode(string $meetingCode): V1MeetingsPost200ResponseMeetingInfoListInner {
        $this->meetingCode = $meetingCode;
        return $this;
    }

    public function getMeetingCode() {
        return $this->meetingCode;
    }

    public function setMeetingCode(string $meetingCode) {
        $this->meetingCode = $meetingCode;
    }
    public function meetingId(string $meetingId): V1MeetingsPost200ResponseMeetingInfoListInner {
        $this->meetingId = $meetingId;
        return $this;
    }

    public function getMeetingId() {
        return $this->meetingId;
    }

    public function setMeetingId(string $meetingId) {
        $this->meetingId = $meetingId;
    }
    public function participants(array $participants): V1MeetingsPost200ResponseMeetingInfoListInner {
        $this->participants = $participants;
        return $this;
    }

    public function getParticipants() {
        return $this->participants;
    }

    public function setParticipants(array $participants) {
        $this->participants = $participants;
    }
    public function password(string $password): V1MeetingsPost200ResponseMeetingInfoListInner {
        $this->password = $password;
        return $this;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword(string $password) {
        $this->password = $password;
    }
    public function settings(V1MeetingsPost200ResponseMeetingInfoListInnerSettings $settings): V1MeetingsPost200ResponseMeetingInfoListInner {
        $this->settings = $settings;
        return $this;
    }

    public function getSettings() {
        return $this->settings;
    }

    public function setSettings(V1MeetingsPost200ResponseMeetingInfoListInnerSettings $settings) {
        $this->settings = $settings;
    }
    public function startTime(string $startTime): V1MeetingsPost200ResponseMeetingInfoListInner {
        $this->startTime = $startTime;
        return $this;
    }

    public function getStartTime() {
        return $this->startTime;
    }

    public function setStartTime(string $startTime) {
        $this->startTime = $startTime;
    }
    public function subject(string $subject): V1MeetingsPost200ResponseMeetingInfoListInner {
        $this->subject = $subject;
        return $this;
    }

    public function getSubject() {
        return $this->subject;
    }

    public function setSubject(string $subject) {
        $this->subject = $subject;
    }
    public function userNonRegistered(array $userNonRegistered): V1MeetingsPost200ResponseMeetingInfoListInner {
        $this->userNonRegistered = $userNonRegistered;
        return $this;
    }

    public function getUserNonRegistered() {
        return $this->userNonRegistered;
    }

    public function setUserNonRegistered(array $userNonRegistered) {
        $this->userNonRegistered = $userNonRegistered;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'current_co_hosts' => '\wemeet\openapi\service\meetings\model\V1MeetingsPost200ResponseMeetingInfoListInnerCurrentCoHostsInner[]',
        'enable_live' => 'bool',
        'end_time' => 'string',
        'host_key' => 'string',
        'hosts' => '\wemeet\openapi\service\meetings\model\V1MeetingsPost200ResponseMeetingInfoListInnerHostsInner[]',
        'join_url' => 'string',
        'live_config' => '\wemeet\openapi\service\meetings\model\V1MeetingsPost200ResponseMeetingInfoListInnerLiveConfig',
        'meeting_code' => 'string',
        'meeting_id' => 'string',
        'participants' => '\wemeet\openapi\service\meetings\model\V1MeetingsPost200ResponseMeetingInfoListInnerParticipantsInner[]',
        'password' => 'string',
        'settings' => '\wemeet\openapi\service\meetings\model\V1MeetingsPost200ResponseMeetingInfoListInnerSettings',
        'start_time' => 'string',
        'subject' => 'string',
        'user_non_registered' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'current_co_hosts' => null,
        'enable_live' => null,
        'end_time' => null,
        'host_key' => null,
        'hosts' => null,
        'join_url' => null,
        'live_config' => null,
        'meeting_code' => null,
        'meeting_id' => null,
        'participants' => null,
        'password' => null,
        'settings' => null,
        'start_time' => null,
        'subject' => null,
        'user_non_registered' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'current_co_hosts' => false,
        'enable_live' => false,
        'end_time' => false,
        'host_key' => false,
        'hosts' => false,
        'join_url' => false,
        'live_config' => false,
        'meeting_code' => false,
        'meeting_id' => false,
        'participants' => false,
        'password' => false,
        'settings' => false,
        'start_time' => false,
        'subject' => false,
        'user_non_registered' => false
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
        'current_co_hosts' => 'current_co_hosts',
        'enable_live' => 'enable_live',
        'end_time' => 'end_time',
        'host_key' => 'host_key',
        'hosts' => 'hosts',
        'join_url' => 'join_url',
        'live_config' => 'live_config',
        'meeting_code' => 'meeting_code',
        'meeting_id' => 'meeting_id',
        'participants' => 'participants',
        'password' => 'password',
        'settings' => 'settings',
        'start_time' => 'start_time',
        'subject' => 'subject',
        'user_non_registered' => 'user_non_registered'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'current_co_hosts' => 'setCurrentCoHosts',
        'enable_live' => 'setEnableLive',
        'end_time' => 'setEndTime',
        'host_key' => 'setHostKey',
        'hosts' => 'setHosts',
        'join_url' => 'setJoinUrl',
        'live_config' => 'setLiveConfig',
        'meeting_code' => 'setMeetingCode',
        'meeting_id' => 'setMeetingId',
        'participants' => 'setParticipants',
        'password' => 'setPassword',
        'settings' => 'setSettings',
        'start_time' => 'setStartTime',
        'subject' => 'setSubject',
        'user_non_registered' => 'setUserNonRegistered'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'current_co_hosts' => 'getCurrentCoHosts',
        'enable_live' => 'getEnableLive',
        'end_time' => 'getEndTime',
        'host_key' => 'getHostKey',
        'hosts' => 'getHosts',
        'join_url' => 'getJoinUrl',
        'live_config' => 'getLiveConfig',
        'meeting_code' => 'getMeetingCode',
        'meeting_id' => 'getMeetingId',
        'participants' => 'getParticipants',
        'password' => 'getPassword',
        'settings' => 'getSettings',
        'start_time' => 'getStartTime',
        'subject' => 'getSubject',
        'user_non_registered' => 'getUserNonRegistered'
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
            'current_co_hosts' => $this->currentCoHosts,
            'enable_live' => $this->enableLive,
            'end_time' => $this->endTime,
            'host_key' => $this->hostKey,
            'hosts' => $this->hosts,
            'join_url' => $this->joinUrl,
            'live_config' => $this->liveConfig,
            'meeting_code' => $this->meetingCode,
            'meeting_id' => $this->meetingId,
            'participants' => $this->participants,
            'password' => $this->password,
            'settings' => $this->settings,
            'start_time' => $this->startTime,
            'subject' => $this->subject,
            'user_non_registered' => $this->userNonRegistered,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

