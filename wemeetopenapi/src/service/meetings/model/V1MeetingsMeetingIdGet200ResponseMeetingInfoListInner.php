<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.4
 */
namespace wemeet\openapi\service\meetings\model;

use wemeet\openapi\core\xhttp\ModelInterface;


class V1MeetingsMeetingIdGet200ResponseMeetingInfoListInner implements ModelInterface, \JsonSerializable
{

    /**
    * 类型：\wemeet\openapi\service\meetings\model\V1MeetingsGet200ResponseMeetingInfoListInnerCurrentCoHostsInner[]
     */
    protected $currentCoHosts = null;

    /**
    * 类型：\wemeet\openapi\service\meetings\model\V1MeetingsGet200ResponseMeetingInfoListInnerCurrentCoHostsInner[]
     */
    protected $currentHosts = null;

    /**
    * 类型：string
     */
    protected $currentSubMeetingId = null;

    /**
    * 类型：bool
     */
    protected $enableDocUploadPermission = null;

    /**
    * 类型：bool
     */
    protected $enableEnroll = null;

    /**
    * 类型：bool
     */
    protected $enableHostKey = null;

    /**
    * 类型：bool
     */
    protected $enableLive = null;

    /**
    * 类型：string
     */
    protected $endTime = null;

    /**
    * 类型：\wemeet\openapi\service\meetings\model\V1MeetingsGet200ResponseMeetingInfoListInnerGuestsInner[]
     */
    protected $guests = null;

    /**
    * 类型：int
     */
    protected $hasMoreSubMeeting = null;

    /**
    * 类型：bool
     */
    protected $hasVote = null;

    /**
    * 类型：string
     */
    protected $hostKey = null;

    /**
    * 类型：\wemeet\openapi\service\meetings\model\V1MeetingsGet200ResponseMeetingInfoListInnerCurrentCoHostsInner[]
     */
    protected $hosts = null;

    /**
    * 类型：string
     */
    protected $joinUrl = null;

    /**
    * 类型：\wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdGet200ResponseMeetingInfoListInnerLiveConfig
     */
    protected $liveConfig = null;

    /**
    * 类型：string
     */
    protected $location = null;

    /**
    * 类型：string
     */
    protected $meetingCode = null;

    /**
    * 类型：string
     */
    protected $meetingId = null;

    /**
    * 类型：int
     */
    protected $meetingType = null;

    /**
    * 类型：bool
     */
    protected $needPassword = null;

    /**
    * 类型：\wemeet\openapi\service\meetings\model\V1MeetingsGet200ResponseMeetingInfoListInnerCurrentCoHostsInner[]
     */
    protected $participants = null;

    /**
    * 类型：string
     */
    protected $password = null;

    /**
    * 类型：\wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdGet200ResponseMeetingInfoListInnerRecurringRule
     */
    protected $recurringRule = null;

    /**
    * 类型：int
     */
    protected $remainSubMeetings = null;

    /**
    * 类型：\wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdGet200ResponseMeetingInfoListInnerSettings
     */
    protected $settings = null;

    /**
    * 类型：string
     */
    protected $startTime = null;

    /**
    * 类型：string
     */
    protected $status = null;

    /**
    * 类型：\wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdGet200ResponseMeetingInfoListInnerSubMeetingsInner[]
     */
    protected $subMeetings = null;

    /**
    * 类型：string
     */
    protected $subject = null;

    /**
    * 类型：bool
     */
    protected $syncToWework = null;

    /**
    * 类型：string
     */
    protected $timeZone = null;

    /**
    * 类型：int
     */
    protected $type = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['current_co_hosts'])) {
            $this->currentCoHosts = $jsonArray['current_co_hosts'];
        }
        if (isset($jsonArray['current_hosts'])) {
            $this->currentHosts = $jsonArray['current_hosts'];
        }
        if (isset($jsonArray['current_sub_meeting_id'])) {
            $this->currentSubMeetingId = $jsonArray['current_sub_meeting_id'];
        }
        if (isset($jsonArray['enable_doc_upload_permission'])) {
            $this->enableDocUploadPermission = $jsonArray['enable_doc_upload_permission'];
        }
        if (isset($jsonArray['enable_enroll'])) {
            $this->enableEnroll = $jsonArray['enable_enroll'];
        }
        if (isset($jsonArray['enable_host_key'])) {
            $this->enableHostKey = $jsonArray['enable_host_key'];
        }
        if (isset($jsonArray['enable_live'])) {
            $this->enableLive = $jsonArray['enable_live'];
        }
        if (isset($jsonArray['end_time'])) {
            $this->endTime = $jsonArray['end_time'];
        }
        if (isset($jsonArray['guests'])) {
            $this->guests = $jsonArray['guests'];
        }
        if (isset($jsonArray['has_more_sub_meeting'])) {
            $this->hasMoreSubMeeting = $jsonArray['has_more_sub_meeting'];
        }
        if (isset($jsonArray['has_vote'])) {
            $this->hasVote = $jsonArray['has_vote'];
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
            $this->liveConfig = new V1MeetingsMeetingIdGet200ResponseMeetingInfoListInnerLiveConfig($jsonArray['live_config']);
        }
        if (isset($jsonArray['location'])) {
            $this->location = $jsonArray['location'];
        }
        if (isset($jsonArray['meeting_code'])) {
            $this->meetingCode = $jsonArray['meeting_code'];
        }
        if (isset($jsonArray['meeting_id'])) {
            $this->meetingId = $jsonArray['meeting_id'];
        }
        if (isset($jsonArray['meeting_type'])) {
            $this->meetingType = $jsonArray['meeting_type'];
        }
        if (isset($jsonArray['need_password'])) {
            $this->needPassword = $jsonArray['need_password'];
        }
        if (isset($jsonArray['participants'])) {
            $this->participants = $jsonArray['participants'];
        }
        if (isset($jsonArray['password'])) {
            $this->password = $jsonArray['password'];
        }
        if (isset($jsonArray['recurring_rule'])) {
            $this->recurringRule = new V1MeetingsMeetingIdGet200ResponseMeetingInfoListInnerRecurringRule($jsonArray['recurring_rule']);
        }
        if (isset($jsonArray['remain_sub_meetings'])) {
            $this->remainSubMeetings = $jsonArray['remain_sub_meetings'];
        }
        if (isset($jsonArray['settings'])) {
            $this->settings = new V1MeetingsMeetingIdGet200ResponseMeetingInfoListInnerSettings($jsonArray['settings']);
        }
        if (isset($jsonArray['start_time'])) {
            $this->startTime = $jsonArray['start_time'];
        }
        if (isset($jsonArray['status'])) {
            $this->status = $jsonArray['status'];
        }
        if (isset($jsonArray['sub_meetings'])) {
            $this->subMeetings = $jsonArray['sub_meetings'];
        }
        if (isset($jsonArray['subject'])) {
            $this->subject = $jsonArray['subject'];
        }
        if (isset($jsonArray['sync_to_wework'])) {
            $this->syncToWework = $jsonArray['sync_to_wework'];
        }
        if (isset($jsonArray['time_zone'])) {
            $this->timeZone = $jsonArray['time_zone'];
        }
        if (isset($jsonArray['type'])) {
            $this->type = $jsonArray['type'];
        }
    }

    public function currentCoHosts(array $currentCoHosts): V1MeetingsMeetingIdGet200ResponseMeetingInfoListInner {
        $this->currentCoHosts = $currentCoHosts;
        return $this;
    }

    public function getCurrentCoHosts() {
        return $this->currentCoHosts;
    }

    public function setCurrentCoHosts(array $currentCoHosts) {
        $this->currentCoHosts = $currentCoHosts;
    }
    public function currentHosts(array $currentHosts): V1MeetingsMeetingIdGet200ResponseMeetingInfoListInner {
        $this->currentHosts = $currentHosts;
        return $this;
    }

    public function getCurrentHosts() {
        return $this->currentHosts;
    }

    public function setCurrentHosts(array $currentHosts) {
        $this->currentHosts = $currentHosts;
    }
    public function currentSubMeetingId(string $currentSubMeetingId): V1MeetingsMeetingIdGet200ResponseMeetingInfoListInner {
        $this->currentSubMeetingId = $currentSubMeetingId;
        return $this;
    }

    public function getCurrentSubMeetingId() {
        return $this->currentSubMeetingId;
    }

    public function setCurrentSubMeetingId(string $currentSubMeetingId) {
        $this->currentSubMeetingId = $currentSubMeetingId;
    }
    public function enableDocUploadPermission(bool $enableDocUploadPermission): V1MeetingsMeetingIdGet200ResponseMeetingInfoListInner {
        $this->enableDocUploadPermission = $enableDocUploadPermission;
        return $this;
    }

    public function getEnableDocUploadPermission() {
        return $this->enableDocUploadPermission;
    }

    public function setEnableDocUploadPermission(bool $enableDocUploadPermission) {
        $this->enableDocUploadPermission = $enableDocUploadPermission;
    }
    public function enableEnroll(bool $enableEnroll): V1MeetingsMeetingIdGet200ResponseMeetingInfoListInner {
        $this->enableEnroll = $enableEnroll;
        return $this;
    }

    public function getEnableEnroll() {
        return $this->enableEnroll;
    }

    public function setEnableEnroll(bool $enableEnroll) {
        $this->enableEnroll = $enableEnroll;
    }
    public function enableHostKey(bool $enableHostKey): V1MeetingsMeetingIdGet200ResponseMeetingInfoListInner {
        $this->enableHostKey = $enableHostKey;
        return $this;
    }

    public function getEnableHostKey() {
        return $this->enableHostKey;
    }

    public function setEnableHostKey(bool $enableHostKey) {
        $this->enableHostKey = $enableHostKey;
    }
    public function enableLive(bool $enableLive): V1MeetingsMeetingIdGet200ResponseMeetingInfoListInner {
        $this->enableLive = $enableLive;
        return $this;
    }

    public function getEnableLive() {
        return $this->enableLive;
    }

    public function setEnableLive(bool $enableLive) {
        $this->enableLive = $enableLive;
    }
    public function endTime(string $endTime): V1MeetingsMeetingIdGet200ResponseMeetingInfoListInner {
        $this->endTime = $endTime;
        return $this;
    }

    public function getEndTime() {
        return $this->endTime;
    }

    public function setEndTime(string $endTime) {
        $this->endTime = $endTime;
    }
    public function guests(array $guests): V1MeetingsMeetingIdGet200ResponseMeetingInfoListInner {
        $this->guests = $guests;
        return $this;
    }

    public function getGuests() {
        return $this->guests;
    }

    public function setGuests(array $guests) {
        $this->guests = $guests;
    }
    public function hasMoreSubMeeting(int $hasMoreSubMeeting): V1MeetingsMeetingIdGet200ResponseMeetingInfoListInner {
        $this->hasMoreSubMeeting = $hasMoreSubMeeting;
        return $this;
    }

    public function getHasMoreSubMeeting() {
        return $this->hasMoreSubMeeting;
    }

    public function setHasMoreSubMeeting(int $hasMoreSubMeeting) {
        $this->hasMoreSubMeeting = $hasMoreSubMeeting;
    }
    public function hasVote(bool $hasVote): V1MeetingsMeetingIdGet200ResponseMeetingInfoListInner {
        $this->hasVote = $hasVote;
        return $this;
    }

    public function getHasVote() {
        return $this->hasVote;
    }

    public function setHasVote(bool $hasVote) {
        $this->hasVote = $hasVote;
    }
    public function hostKey(string $hostKey): V1MeetingsMeetingIdGet200ResponseMeetingInfoListInner {
        $this->hostKey = $hostKey;
        return $this;
    }

    public function getHostKey() {
        return $this->hostKey;
    }

    public function setHostKey(string $hostKey) {
        $this->hostKey = $hostKey;
    }
    public function hosts(array $hosts): V1MeetingsMeetingIdGet200ResponseMeetingInfoListInner {
        $this->hosts = $hosts;
        return $this;
    }

    public function getHosts() {
        return $this->hosts;
    }

    public function setHosts(array $hosts) {
        $this->hosts = $hosts;
    }
    public function joinUrl(string $joinUrl): V1MeetingsMeetingIdGet200ResponseMeetingInfoListInner {
        $this->joinUrl = $joinUrl;
        return $this;
    }

    public function getJoinUrl() {
        return $this->joinUrl;
    }

    public function setJoinUrl(string $joinUrl) {
        $this->joinUrl = $joinUrl;
    }
    public function liveConfig(V1MeetingsMeetingIdGet200ResponseMeetingInfoListInnerLiveConfig $liveConfig): V1MeetingsMeetingIdGet200ResponseMeetingInfoListInner {
        $this->liveConfig = $liveConfig;
        return $this;
    }

    public function getLiveConfig() {
        return $this->liveConfig;
    }

    public function setLiveConfig(V1MeetingsMeetingIdGet200ResponseMeetingInfoListInnerLiveConfig $liveConfig) {
        $this->liveConfig = $liveConfig;
    }
    public function location(string $location): V1MeetingsMeetingIdGet200ResponseMeetingInfoListInner {
        $this->location = $location;
        return $this;
    }

    public function getLocation() {
        return $this->location;
    }

    public function setLocation(string $location) {
        $this->location = $location;
    }
    public function meetingCode(string $meetingCode): V1MeetingsMeetingIdGet200ResponseMeetingInfoListInner {
        $this->meetingCode = $meetingCode;
        return $this;
    }

    public function getMeetingCode() {
        return $this->meetingCode;
    }

    public function setMeetingCode(string $meetingCode) {
        $this->meetingCode = $meetingCode;
    }
    public function meetingId(string $meetingId): V1MeetingsMeetingIdGet200ResponseMeetingInfoListInner {
        $this->meetingId = $meetingId;
        return $this;
    }

    public function getMeetingId() {
        return $this->meetingId;
    }

    public function setMeetingId(string $meetingId) {
        $this->meetingId = $meetingId;
    }
    public function meetingType(int $meetingType): V1MeetingsMeetingIdGet200ResponseMeetingInfoListInner {
        $this->meetingType = $meetingType;
        return $this;
    }

    public function getMeetingType() {
        return $this->meetingType;
    }

    public function setMeetingType(int $meetingType) {
        $this->meetingType = $meetingType;
    }
    public function needPassword(bool $needPassword): V1MeetingsMeetingIdGet200ResponseMeetingInfoListInner {
        $this->needPassword = $needPassword;
        return $this;
    }

    public function getNeedPassword() {
        return $this->needPassword;
    }

    public function setNeedPassword(bool $needPassword) {
        $this->needPassword = $needPassword;
    }
    public function participants(array $participants): V1MeetingsMeetingIdGet200ResponseMeetingInfoListInner {
        $this->participants = $participants;
        return $this;
    }

    public function getParticipants() {
        return $this->participants;
    }

    public function setParticipants(array $participants) {
        $this->participants = $participants;
    }
    public function password(string $password): V1MeetingsMeetingIdGet200ResponseMeetingInfoListInner {
        $this->password = $password;
        return $this;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword(string $password) {
        $this->password = $password;
    }
    public function recurringRule(V1MeetingsMeetingIdGet200ResponseMeetingInfoListInnerRecurringRule $recurringRule): V1MeetingsMeetingIdGet200ResponseMeetingInfoListInner {
        $this->recurringRule = $recurringRule;
        return $this;
    }

    public function getRecurringRule() {
        return $this->recurringRule;
    }

    public function setRecurringRule(V1MeetingsMeetingIdGet200ResponseMeetingInfoListInnerRecurringRule $recurringRule) {
        $this->recurringRule = $recurringRule;
    }
    public function remainSubMeetings(int $remainSubMeetings): V1MeetingsMeetingIdGet200ResponseMeetingInfoListInner {
        $this->remainSubMeetings = $remainSubMeetings;
        return $this;
    }

    public function getRemainSubMeetings() {
        return $this->remainSubMeetings;
    }

    public function setRemainSubMeetings(int $remainSubMeetings) {
        $this->remainSubMeetings = $remainSubMeetings;
    }
    public function settings(V1MeetingsMeetingIdGet200ResponseMeetingInfoListInnerSettings $settings): V1MeetingsMeetingIdGet200ResponseMeetingInfoListInner {
        $this->settings = $settings;
        return $this;
    }

    public function getSettings() {
        return $this->settings;
    }

    public function setSettings(V1MeetingsMeetingIdGet200ResponseMeetingInfoListInnerSettings $settings) {
        $this->settings = $settings;
    }
    public function startTime(string $startTime): V1MeetingsMeetingIdGet200ResponseMeetingInfoListInner {
        $this->startTime = $startTime;
        return $this;
    }

    public function getStartTime() {
        return $this->startTime;
    }

    public function setStartTime(string $startTime) {
        $this->startTime = $startTime;
    }
    public function status(string $status): V1MeetingsMeetingIdGet200ResponseMeetingInfoListInner {
        $this->status = $status;
        return $this;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus(string $status) {
        $this->status = $status;
    }
    public function subMeetings(array $subMeetings): V1MeetingsMeetingIdGet200ResponseMeetingInfoListInner {
        $this->subMeetings = $subMeetings;
        return $this;
    }

    public function getSubMeetings() {
        return $this->subMeetings;
    }

    public function setSubMeetings(array $subMeetings) {
        $this->subMeetings = $subMeetings;
    }
    public function subject(string $subject): V1MeetingsMeetingIdGet200ResponseMeetingInfoListInner {
        $this->subject = $subject;
        return $this;
    }

    public function getSubject() {
        return $this->subject;
    }

    public function setSubject(string $subject) {
        $this->subject = $subject;
    }
    public function syncToWework(bool $syncToWework): V1MeetingsMeetingIdGet200ResponseMeetingInfoListInner {
        $this->syncToWework = $syncToWework;
        return $this;
    }

    public function getSyncToWework() {
        return $this->syncToWework;
    }

    public function setSyncToWework(bool $syncToWework) {
        $this->syncToWework = $syncToWework;
    }
    public function timeZone(string $timeZone): V1MeetingsMeetingIdGet200ResponseMeetingInfoListInner {
        $this->timeZone = $timeZone;
        return $this;
    }

    public function getTimeZone() {
        return $this->timeZone;
    }

    public function setTimeZone(string $timeZone) {
        $this->timeZone = $timeZone;
    }
    public function type(int $type): V1MeetingsMeetingIdGet200ResponseMeetingInfoListInner {
        $this->type = $type;
        return $this;
    }

    public function getType() {
        return $this->type;
    }

    public function setType(int $type) {
        $this->type = $type;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'current_co_hosts' => '\wemeet\openapi\service\meetings\model\V1MeetingsGet200ResponseMeetingInfoListInnerCurrentCoHostsInner[]',
        'current_hosts' => '\wemeet\openapi\service\meetings\model\V1MeetingsGet200ResponseMeetingInfoListInnerCurrentCoHostsInner[]',
        'current_sub_meeting_id' => 'string',
        'enable_doc_upload_permission' => 'bool',
        'enable_enroll' => 'bool',
        'enable_host_key' => 'bool',
        'enable_live' => 'bool',
        'end_time' => 'string',
        'guests' => '\wemeet\openapi\service\meetings\model\V1MeetingsGet200ResponseMeetingInfoListInnerGuestsInner[]',
        'has_more_sub_meeting' => 'int',
        'has_vote' => 'bool',
        'host_key' => 'string',
        'hosts' => '\wemeet\openapi\service\meetings\model\V1MeetingsGet200ResponseMeetingInfoListInnerCurrentCoHostsInner[]',
        'join_url' => 'string',
        'live_config' => '\wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdGet200ResponseMeetingInfoListInnerLiveConfig',
        'location' => 'string',
        'meeting_code' => 'string',
        'meeting_id' => 'string',
        'meeting_type' => 'int',
        'need_password' => 'bool',
        'participants' => '\wemeet\openapi\service\meetings\model\V1MeetingsGet200ResponseMeetingInfoListInnerCurrentCoHostsInner[]',
        'password' => 'string',
        'recurring_rule' => '\wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdGet200ResponseMeetingInfoListInnerRecurringRule',
        'remain_sub_meetings' => 'int',
        'settings' => '\wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdGet200ResponseMeetingInfoListInnerSettings',
        'start_time' => 'string',
        'status' => 'string',
        'sub_meetings' => '\wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdGet200ResponseMeetingInfoListInnerSubMeetingsInner[]',
        'subject' => 'string',
        'sync_to_wework' => 'bool',
        'time_zone' => 'string',
        'type' => 'int'
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
        'current_hosts' => null,
        'current_sub_meeting_id' => null,
        'enable_doc_upload_permission' => null,
        'enable_enroll' => null,
        'enable_host_key' => null,
        'enable_live' => null,
        'end_time' => null,
        'guests' => null,
        'has_more_sub_meeting' => 'int64',
        'has_vote' => null,
        'host_key' => null,
        'hosts' => null,
        'join_url' => null,
        'live_config' => null,
        'location' => null,
        'meeting_code' => null,
        'meeting_id' => null,
        'meeting_type' => 'int64',
        'need_password' => null,
        'participants' => null,
        'password' => null,
        'recurring_rule' => null,
        'remain_sub_meetings' => 'int64',
        'settings' => null,
        'start_time' => null,
        'status' => null,
        'sub_meetings' => null,
        'subject' => null,
        'sync_to_wework' => null,
        'time_zone' => null,
        'type' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'current_co_hosts' => false,
        'current_hosts' => false,
        'current_sub_meeting_id' => false,
        'enable_doc_upload_permission' => false,
        'enable_enroll' => false,
        'enable_host_key' => false,
        'enable_live' => false,
        'end_time' => false,
        'guests' => false,
        'has_more_sub_meeting' => false,
        'has_vote' => false,
        'host_key' => false,
        'hosts' => false,
        'join_url' => false,
        'live_config' => false,
        'location' => false,
        'meeting_code' => false,
        'meeting_id' => false,
        'meeting_type' => false,
        'need_password' => false,
        'participants' => false,
        'password' => false,
        'recurring_rule' => false,
        'remain_sub_meetings' => false,
        'settings' => false,
        'start_time' => false,
        'status' => false,
        'sub_meetings' => false,
        'subject' => false,
        'sync_to_wework' => false,
        'time_zone' => false,
        'type' => false
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
        'current_hosts' => 'current_hosts',
        'current_sub_meeting_id' => 'current_sub_meeting_id',
        'enable_doc_upload_permission' => 'enable_doc_upload_permission',
        'enable_enroll' => 'enable_enroll',
        'enable_host_key' => 'enable_host_key',
        'enable_live' => 'enable_live',
        'end_time' => 'end_time',
        'guests' => 'guests',
        'has_more_sub_meeting' => 'has_more_sub_meeting',
        'has_vote' => 'has_vote',
        'host_key' => 'host_key',
        'hosts' => 'hosts',
        'join_url' => 'join_url',
        'live_config' => 'live_config',
        'location' => 'location',
        'meeting_code' => 'meeting_code',
        'meeting_id' => 'meeting_id',
        'meeting_type' => 'meeting_type',
        'need_password' => 'need_password',
        'participants' => 'participants',
        'password' => 'password',
        'recurring_rule' => 'recurring_rule',
        'remain_sub_meetings' => 'remain_sub_meetings',
        'settings' => 'settings',
        'start_time' => 'start_time',
        'status' => 'status',
        'sub_meetings' => 'sub_meetings',
        'subject' => 'subject',
        'sync_to_wework' => 'sync_to_wework',
        'time_zone' => 'time_zone',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'current_co_hosts' => 'setCurrentCoHosts',
        'current_hosts' => 'setCurrentHosts',
        'current_sub_meeting_id' => 'setCurrentSubMeetingId',
        'enable_doc_upload_permission' => 'setEnableDocUploadPermission',
        'enable_enroll' => 'setEnableEnroll',
        'enable_host_key' => 'setEnableHostKey',
        'enable_live' => 'setEnableLive',
        'end_time' => 'setEndTime',
        'guests' => 'setGuests',
        'has_more_sub_meeting' => 'setHasMoreSubMeeting',
        'has_vote' => 'setHasVote',
        'host_key' => 'setHostKey',
        'hosts' => 'setHosts',
        'join_url' => 'setJoinUrl',
        'live_config' => 'setLiveConfig',
        'location' => 'setLocation',
        'meeting_code' => 'setMeetingCode',
        'meeting_id' => 'setMeetingId',
        'meeting_type' => 'setMeetingType',
        'need_password' => 'setNeedPassword',
        'participants' => 'setParticipants',
        'password' => 'setPassword',
        'recurring_rule' => 'setRecurringRule',
        'remain_sub_meetings' => 'setRemainSubMeetings',
        'settings' => 'setSettings',
        'start_time' => 'setStartTime',
        'status' => 'setStatus',
        'sub_meetings' => 'setSubMeetings',
        'subject' => 'setSubject',
        'sync_to_wework' => 'setSyncToWework',
        'time_zone' => 'setTimeZone',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'current_co_hosts' => 'getCurrentCoHosts',
        'current_hosts' => 'getCurrentHosts',
        'current_sub_meeting_id' => 'getCurrentSubMeetingId',
        'enable_doc_upload_permission' => 'getEnableDocUploadPermission',
        'enable_enroll' => 'getEnableEnroll',
        'enable_host_key' => 'getEnableHostKey',
        'enable_live' => 'getEnableLive',
        'end_time' => 'getEndTime',
        'guests' => 'getGuests',
        'has_more_sub_meeting' => 'getHasMoreSubMeeting',
        'has_vote' => 'getHasVote',
        'host_key' => 'getHostKey',
        'hosts' => 'getHosts',
        'join_url' => 'getJoinUrl',
        'live_config' => 'getLiveConfig',
        'location' => 'getLocation',
        'meeting_code' => 'getMeetingCode',
        'meeting_id' => 'getMeetingId',
        'meeting_type' => 'getMeetingType',
        'need_password' => 'getNeedPassword',
        'participants' => 'getParticipants',
        'password' => 'getPassword',
        'recurring_rule' => 'getRecurringRule',
        'remain_sub_meetings' => 'getRemainSubMeetings',
        'settings' => 'getSettings',
        'start_time' => 'getStartTime',
        'status' => 'getStatus',
        'sub_meetings' => 'getSubMeetings',
        'subject' => 'getSubject',
        'sync_to_wework' => 'getSyncToWework',
        'time_zone' => 'getTimeZone',
        'type' => 'getType'
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
            'current_hosts' => $this->currentHosts,
            'current_sub_meeting_id' => $this->currentSubMeetingId,
            'enable_doc_upload_permission' => $this->enableDocUploadPermission,
            'enable_enroll' => $this->enableEnroll,
            'enable_host_key' => $this->enableHostKey,
            'enable_live' => $this->enableLive,
            'end_time' => $this->endTime,
            'guests' => $this->guests,
            'has_more_sub_meeting' => $this->hasMoreSubMeeting,
            'has_vote' => $this->hasVote,
            'host_key' => $this->hostKey,
            'hosts' => $this->hosts,
            'join_url' => $this->joinUrl,
            'live_config' => $this->liveConfig,
            'location' => $this->location,
            'meeting_code' => $this->meetingCode,
            'meeting_id' => $this->meetingId,
            'meeting_type' => $this->meetingType,
            'need_password' => $this->needPassword,
            'participants' => $this->participants,
            'password' => $this->password,
            'recurring_rule' => $this->recurringRule,
            'remain_sub_meetings' => $this->remainSubMeetings,
            'settings' => $this->settings,
            'start_time' => $this->startTime,
            'status' => $this->status,
            'sub_meetings' => $this->subMeetings,
            'subject' => $this->subject,
            'sync_to_wework' => $this->syncToWework,
            'time_zone' => $this->timeZone,
            'type' => $this->type,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

