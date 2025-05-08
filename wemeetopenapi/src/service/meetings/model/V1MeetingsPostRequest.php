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


class V1MeetingsPostRequest implements ModelInterface, \JsonSerializable
{
    /**
     * 会议结束时间戳（单位秒）
    * 类型：
     */
    protected $endTime;
    /**
     * 用户的终端设备类型： 0：PSTN 1：PC 2：Mac 3：Android 4：iOS 5：Web 6：iPad 7：Android Pad 8：小程序 9：voip、sip 设备 10：linux 20：Rooms for Touch Windows 21：Rooms for Touch MacOS 22：Rooms for Touch Android 30：Controller for Touch Windows 32：Controller for Touch Android 33：Controller for Touch iOS 创建会议时 userid 对应的设备类型，不影响入会时使用的设备类型，缺省可填1。
    * 类型：
     */
    protected $instanceid;
    /**
     * 会议开始时间戳（单位秒）
    * 类型：
     */
    protected $startTime;
    /**
     * 会议主题
    * 类型：
     */
    protected $subject;
    /**
     * 会议类型 0：预约会议 1：快速会议
    * 类型：
     */
    protected $type;
    /**
     * 调用方用于标示用户的唯一 ID（企业内部请使用企业唯一用户标识；OAuth2.0 鉴权用户请使用 openId）。 企业唯一用户标识说明： 1. 企业对接 SSO 时使用的员工唯一标识 ID； 2. 企业调用创建用户接口时传递的 userid 参数。
    * 类型：
     */
    protected $userid;

    /**
     * 默认是false, 如果操作者无创建转网会议的权限，则该字段忽略
    * 类型：bool
     */
    protected $allowEnterpriseIntranetOnly = null;

    /**
     * 是否允许成员上传文档，默认为允许 true：允许 false：不允许
    * 类型：bool
     */
    protected $enableDocUploadPermission = null;

    /**
     * 是否开启报名开关，默认不开启 true：开启 false：不开启
    * 类型：bool
     */
    protected $enableEnroll = null;

    /**
     * 是否开启主持人密钥，默认为false。 true：开启 false：关闭
    * 类型：bool
     */
    protected $enableHostKey = null;

    /**
     * 是否开启同声传译，默认不开启 false：不开启 true：开启同声传译
    * 类型：bool
     */
    protected $enableInterpreter = null;

    /**
     * 是否开启直播
    * 类型：bool
     */
    protected $enableLive = null;

    /**
     * 会议嘉宾列表，会议嘉宾不受会议密码和等候室的限制
    * 类型：\wemeet\openapi\service\meetings\model\V1MeetingsPostRequestGuestsInner[]
     */
    protected $guests = null;

    /**
     * 主持人密钥，仅支持6位数字。 如开启主持人密钥后没有填写此项，将自动分配一个6位数字的密钥。
    * 类型：string
     */
    protected $hostKey = null;

    /**
     * 主持人列表，会议指定主持人的用户 ID，如果无指定，主持人将被设定为参数 userid 的用户，即 API 调用者。 注意：仅腾讯会议商业版和企业版可指定主持人。
    * 类型：\wemeet\openapi\service\meetings\model\V1MeetingsPostRequestHostsInner[]
     */
    protected $hosts = null;

    /**
     * 邀请人列表 仅支持邀请与会议创建者同企业的成员（企业内部请使用企业唯一用户标识；OAuth2.0 鉴权用户请使用 openId），该会议将添加至邀请成员的会议列表中。 企业唯一用户标识说明： 企业对接 SSO 时使用的员工唯一标识 ID。 企业调用创建用户接口时传递的 userid 参数。 注意：仅腾讯会议商业版和企业版可邀请参会者，邀请者列表仅支持300人；需要邀请超过300人的场景请调用 设置会议邀请成员 接口。
    * 类型：\wemeet\openapi\service\meetings\model\V1MeetingsPostRequestInviteesInner[]
     */
    protected $invitees = null;

    /**
    * 类型：\wemeet\openapi\service\meetings\model\V1MeetingsPostRequestLiveConfig
     */
    protected $liveConfig = null;

    /**
     * 会议地点。最长支持18个汉字或36个英文字母
    * 类型：string
     */
    protected $location = null;

    /**
     * 该参数仅提供给支持混合云的企业可见，默认值为0 0：外部会议 1：内部会议
    * 类型：int
     */
    protected $mediaSetType = null;

    /**
     * 默认值为0。 0：普通会议 1：周期性会议（周期性会议时 type 不能为快速会议，同一账号同时最多可预定50场周期性会议）
    * 类型：int
     */
    protected $meetingType = null;

    /**
     * 会议密码（4~6位数字），可不填
    * 类型：string
     */
    protected $password = null;

    /**
    * 类型：\wemeet\openapi\service\meetings\model\V1MeetingsPostRequestRecurringRule
     */
    protected $recurringRule = null;

    /**
    * 类型：\wemeet\openapi\service\meetings\model\V1MeetingsPostRequestSettings
     */
    protected $settings = null;

    /**
     * 会议是否同步至企业微信，该字段仅支持创建会议时设置，创建后无法修改。 true: 同步，默认同步  false: 不同步
    * 类型：bool
     */
    protected $syncToWework = null;

    /**
     * 时区，可参见 Oracle-TimeZone 标准
    * 类型：string
     */
    protected $timeZone = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['end_time'])) {
            $this->endTime = $jsonArray['end_time'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter end_time');
        }
        if (isset($jsonArray['instanceid'])) {
            $this->instanceid = $jsonArray['instanceid'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter instanceid');
        }
        if (isset($jsonArray['start_time'])) {
            $this->startTime = $jsonArray['start_time'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter start_time');
        }
        if (isset($jsonArray['subject'])) {
            $this->subject = $jsonArray['subject'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter subject');
        }
        if (isset($jsonArray['type'])) {
            $this->type = $jsonArray['type'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter type');
        }
        if (isset($jsonArray['userid'])) {
            $this->userid = $jsonArray['userid'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter userid');
        }
        if (isset($jsonArray['allow_enterprise_intranet_only'])) {
            $this->allowEnterpriseIntranetOnly = $jsonArray['allow_enterprise_intranet_only'];
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
        if (isset($jsonArray['enable_interpreter'])) {
            $this->enableInterpreter = $jsonArray['enable_interpreter'];
        }
        if (isset($jsonArray['enable_live'])) {
            $this->enableLive = $jsonArray['enable_live'];
        }
        if (isset($jsonArray['guests'])) {
            $this->guests = $jsonArray['guests'];
        }
        if (isset($jsonArray['host_key'])) {
            $this->hostKey = $jsonArray['host_key'];
        }
        if (isset($jsonArray['hosts'])) {
            $this->hosts = $jsonArray['hosts'];
        }
        if (isset($jsonArray['invitees'])) {
            $this->invitees = $jsonArray['invitees'];
        }
        if (isset($jsonArray['live_config'])) {
            $this->liveConfig = new V1MeetingsPostRequestLiveConfig($jsonArray['live_config']);
        }
        if (isset($jsonArray['location'])) {
            $this->location = $jsonArray['location'];
        }
        if (isset($jsonArray['media_set_type'])) {
            $this->mediaSetType = $jsonArray['media_set_type'];
        }
        if (isset($jsonArray['meeting_type'])) {
            $this->meetingType = $jsonArray['meeting_type'];
        }
        if (isset($jsonArray['password'])) {
            $this->password = $jsonArray['password'];
        }
        if (isset($jsonArray['recurring_rule'])) {
            $this->recurringRule = new V1MeetingsPostRequestRecurringRule($jsonArray['recurring_rule']);
        }
        if (isset($jsonArray['settings'])) {
            $this->settings = new V1MeetingsPostRequestSettings($jsonArray['settings']);
        }
        if (isset($jsonArray['sync_to_wework'])) {
            $this->syncToWework = $jsonArray['sync_to_wework'];
        }
        if (isset($jsonArray['time_zone'])) {
            $this->timeZone = $jsonArray['time_zone'];
        }
    }

    public function allowEnterpriseIntranetOnly(bool $allowEnterpriseIntranetOnly): V1MeetingsPostRequest {
        $this->allowEnterpriseIntranetOnly = $allowEnterpriseIntranetOnly;
        return $this;
    }

    public function getAllowEnterpriseIntranetOnly() {
        return $this->allowEnterpriseIntranetOnly;
    }

    public function setAllowEnterpriseIntranetOnly(bool $allowEnterpriseIntranetOnly) {
        $this->allowEnterpriseIntranetOnly = $allowEnterpriseIntranetOnly;
    }
    public function enableDocUploadPermission(bool $enableDocUploadPermission): V1MeetingsPostRequest {
        $this->enableDocUploadPermission = $enableDocUploadPermission;
        return $this;
    }

    public function getEnableDocUploadPermission() {
        return $this->enableDocUploadPermission;
    }

    public function setEnableDocUploadPermission(bool $enableDocUploadPermission) {
        $this->enableDocUploadPermission = $enableDocUploadPermission;
    }
    public function enableEnroll(bool $enableEnroll): V1MeetingsPostRequest {
        $this->enableEnroll = $enableEnroll;
        return $this;
    }

    public function getEnableEnroll() {
        return $this->enableEnroll;
    }

    public function setEnableEnroll(bool $enableEnroll) {
        $this->enableEnroll = $enableEnroll;
    }
    public function enableHostKey(bool $enableHostKey): V1MeetingsPostRequest {
        $this->enableHostKey = $enableHostKey;
        return $this;
    }

    public function getEnableHostKey() {
        return $this->enableHostKey;
    }

    public function setEnableHostKey(bool $enableHostKey) {
        $this->enableHostKey = $enableHostKey;
    }
    public function enableInterpreter(bool $enableInterpreter): V1MeetingsPostRequest {
        $this->enableInterpreter = $enableInterpreter;
        return $this;
    }

    public function getEnableInterpreter() {
        return $this->enableInterpreter;
    }

    public function setEnableInterpreter(bool $enableInterpreter) {
        $this->enableInterpreter = $enableInterpreter;
    }
    public function enableLive(bool $enableLive): V1MeetingsPostRequest {
        $this->enableLive = $enableLive;
        return $this;
    }

    public function getEnableLive() {
        return $this->enableLive;
    }

    public function setEnableLive(bool $enableLive) {
        $this->enableLive = $enableLive;
    }
    public function endTime(string $endTime): V1MeetingsPostRequest {
        $this->endTime = $endTime;
        return $this;
    }

    public function getEndTime() {
        return $this->endTime;
    }

    public function setEndTime(string $endTime) {
        $this->endTime = $endTime;
    }
    public function guests(array $guests): V1MeetingsPostRequest {
        $this->guests = $guests;
        return $this;
    }

    public function getGuests() {
        return $this->guests;
    }

    public function setGuests(array $guests) {
        $this->guests = $guests;
    }
    public function hostKey(string $hostKey): V1MeetingsPostRequest {
        $this->hostKey = $hostKey;
        return $this;
    }

    public function getHostKey() {
        return $this->hostKey;
    }

    public function setHostKey(string $hostKey) {
        $this->hostKey = $hostKey;
    }
    public function hosts(array $hosts): V1MeetingsPostRequest {
        $this->hosts = $hosts;
        return $this;
    }

    public function getHosts() {
        return $this->hosts;
    }

    public function setHosts(array $hosts) {
        $this->hosts = $hosts;
    }
    public function instanceid(int $instanceid): V1MeetingsPostRequest {
        $this->instanceid = $instanceid;
        return $this;
    }

    public function getInstanceid() {
        return $this->instanceid;
    }

    public function setInstanceid(int $instanceid) {
        $this->instanceid = $instanceid;
    }
    public function invitees(array $invitees): V1MeetingsPostRequest {
        $this->invitees = $invitees;
        return $this;
    }

    public function getInvitees() {
        return $this->invitees;
    }

    public function setInvitees(array $invitees) {
        $this->invitees = $invitees;
    }
    public function liveConfig(V1MeetingsPostRequestLiveConfig $liveConfig): V1MeetingsPostRequest {
        $this->liveConfig = $liveConfig;
        return $this;
    }

    public function getLiveConfig() {
        return $this->liveConfig;
    }

    public function setLiveConfig(V1MeetingsPostRequestLiveConfig $liveConfig) {
        $this->liveConfig = $liveConfig;
    }
    public function location(string $location): V1MeetingsPostRequest {
        $this->location = $location;
        return $this;
    }

    public function getLocation() {
        return $this->location;
    }

    public function setLocation(string $location) {
        $this->location = $location;
    }
    public function mediaSetType(int $mediaSetType): V1MeetingsPostRequest {
        $this->mediaSetType = $mediaSetType;
        return $this;
    }

    public function getMediaSetType() {
        return $this->mediaSetType;
    }

    public function setMediaSetType(int $mediaSetType) {
        $this->mediaSetType = $mediaSetType;
    }
    public function meetingType(int $meetingType): V1MeetingsPostRequest {
        $this->meetingType = $meetingType;
        return $this;
    }

    public function getMeetingType() {
        return $this->meetingType;
    }

    public function setMeetingType(int $meetingType) {
        $this->meetingType = $meetingType;
    }
    public function password(string $password): V1MeetingsPostRequest {
        $this->password = $password;
        return $this;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword(string $password) {
        $this->password = $password;
    }
    public function recurringRule(V1MeetingsPostRequestRecurringRule $recurringRule): V1MeetingsPostRequest {
        $this->recurringRule = $recurringRule;
        return $this;
    }

    public function getRecurringRule() {
        return $this->recurringRule;
    }

    public function setRecurringRule(V1MeetingsPostRequestRecurringRule $recurringRule) {
        $this->recurringRule = $recurringRule;
    }
    public function settings(V1MeetingsPostRequestSettings $settings): V1MeetingsPostRequest {
        $this->settings = $settings;
        return $this;
    }

    public function getSettings() {
        return $this->settings;
    }

    public function setSettings(V1MeetingsPostRequestSettings $settings) {
        $this->settings = $settings;
    }
    public function startTime(string $startTime): V1MeetingsPostRequest {
        $this->startTime = $startTime;
        return $this;
    }

    public function getStartTime() {
        return $this->startTime;
    }

    public function setStartTime(string $startTime) {
        $this->startTime = $startTime;
    }
    public function subject(string $subject): V1MeetingsPostRequest {
        $this->subject = $subject;
        return $this;
    }

    public function getSubject() {
        return $this->subject;
    }

    public function setSubject(string $subject) {
        $this->subject = $subject;
    }
    public function syncToWework(bool $syncToWework): V1MeetingsPostRequest {
        $this->syncToWework = $syncToWework;
        return $this;
    }

    public function getSyncToWework() {
        return $this->syncToWework;
    }

    public function setSyncToWework(bool $syncToWework) {
        $this->syncToWework = $syncToWework;
    }
    public function timeZone(string $timeZone): V1MeetingsPostRequest {
        $this->timeZone = $timeZone;
        return $this;
    }

    public function getTimeZone() {
        return $this->timeZone;
    }

    public function setTimeZone(string $timeZone) {
        $this->timeZone = $timeZone;
    }
    public function type(int $type): V1MeetingsPostRequest {
        $this->type = $type;
        return $this;
    }

    public function getType() {
        return $this->type;
    }

    public function setType(int $type) {
        $this->type = $type;
    }
    public function userid(string $userid): V1MeetingsPostRequest {
        $this->userid = $userid;
        return $this;
    }

    public function getUserid() {
        return $this->userid;
    }

    public function setUserid(string $userid) {
        $this->userid = $userid;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'allow_enterprise_intranet_only' => 'bool',
        'enable_doc_upload_permission' => 'bool',
        'enable_enroll' => 'bool',
        'enable_host_key' => 'bool',
        'enable_interpreter' => 'bool',
        'enable_live' => 'bool',
        'end_time' => 'string',
        'guests' => '\wemeet\openapi\service\meetings\model\V1MeetingsPostRequestGuestsInner[]',
        'host_key' => 'string',
        'hosts' => '\wemeet\openapi\service\meetings\model\V1MeetingsPostRequestHostsInner[]',
        'instanceid' => 'int',
        'invitees' => '\wemeet\openapi\service\meetings\model\V1MeetingsPostRequestInviteesInner[]',
        'live_config' => '\wemeet\openapi\service\meetings\model\V1MeetingsPostRequestLiveConfig',
        'location' => 'string',
        'media_set_type' => 'int',
        'meeting_type' => 'int',
        'password' => 'string',
        'recurring_rule' => '\wemeet\openapi\service\meetings\model\V1MeetingsPostRequestRecurringRule',
        'settings' => '\wemeet\openapi\service\meetings\model\V1MeetingsPostRequestSettings',
        'start_time' => 'string',
        'subject' => 'string',
        'sync_to_wework' => 'bool',
        'time_zone' => 'string',
        'type' => 'int',
        'userid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'allow_enterprise_intranet_only' => null,
        'enable_doc_upload_permission' => null,
        'enable_enroll' => null,
        'enable_host_key' => null,
        'enable_interpreter' => null,
        'enable_live' => null,
        'end_time' => null,
        'guests' => null,
        'host_key' => null,
        'hosts' => null,
        'instanceid' => 'int64',
        'invitees' => null,
        'live_config' => null,
        'location' => null,
        'media_set_type' => 'int64',
        'meeting_type' => 'int64',
        'password' => null,
        'recurring_rule' => null,
        'settings' => null,
        'start_time' => null,
        'subject' => null,
        'sync_to_wework' => null,
        'time_zone' => null,
        'type' => 'int64',
        'userid' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'allow_enterprise_intranet_only' => false,
        'enable_doc_upload_permission' => false,
        'enable_enroll' => false,
        'enable_host_key' => false,
        'enable_interpreter' => false,
        'enable_live' => false,
        'end_time' => false,
        'guests' => false,
        'host_key' => false,
        'hosts' => false,
        'instanceid' => false,
        'invitees' => false,
        'live_config' => false,
        'location' => false,
        'media_set_type' => false,
        'meeting_type' => false,
        'password' => false,
        'recurring_rule' => false,
        'settings' => false,
        'start_time' => false,
        'subject' => false,
        'sync_to_wework' => false,
        'time_zone' => false,
        'type' => false,
        'userid' => false
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
        'allow_enterprise_intranet_only' => 'allow_enterprise_intranet_only',
        'enable_doc_upload_permission' => 'enable_doc_upload_permission',
        'enable_enroll' => 'enable_enroll',
        'enable_host_key' => 'enable_host_key',
        'enable_interpreter' => 'enable_interpreter',
        'enable_live' => 'enable_live',
        'end_time' => 'end_time',
        'guests' => 'guests',
        'host_key' => 'host_key',
        'hosts' => 'hosts',
        'instanceid' => 'instanceid',
        'invitees' => 'invitees',
        'live_config' => 'live_config',
        'location' => 'location',
        'media_set_type' => 'media_set_type',
        'meeting_type' => 'meeting_type',
        'password' => 'password',
        'recurring_rule' => 'recurring_rule',
        'settings' => 'settings',
        'start_time' => 'start_time',
        'subject' => 'subject',
        'sync_to_wework' => 'sync_to_wework',
        'time_zone' => 'time_zone',
        'type' => 'type',
        'userid' => 'userid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allow_enterprise_intranet_only' => 'setAllowEnterpriseIntranetOnly',
        'enable_doc_upload_permission' => 'setEnableDocUploadPermission',
        'enable_enroll' => 'setEnableEnroll',
        'enable_host_key' => 'setEnableHostKey',
        'enable_interpreter' => 'setEnableInterpreter',
        'enable_live' => 'setEnableLive',
        'end_time' => 'setEndTime',
        'guests' => 'setGuests',
        'host_key' => 'setHostKey',
        'hosts' => 'setHosts',
        'instanceid' => 'setInstanceid',
        'invitees' => 'setInvitees',
        'live_config' => 'setLiveConfig',
        'location' => 'setLocation',
        'media_set_type' => 'setMediaSetType',
        'meeting_type' => 'setMeetingType',
        'password' => 'setPassword',
        'recurring_rule' => 'setRecurringRule',
        'settings' => 'setSettings',
        'start_time' => 'setStartTime',
        'subject' => 'setSubject',
        'sync_to_wework' => 'setSyncToWework',
        'time_zone' => 'setTimeZone',
        'type' => 'setType',
        'userid' => 'setUserid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allow_enterprise_intranet_only' => 'getAllowEnterpriseIntranetOnly',
        'enable_doc_upload_permission' => 'getEnableDocUploadPermission',
        'enable_enroll' => 'getEnableEnroll',
        'enable_host_key' => 'getEnableHostKey',
        'enable_interpreter' => 'getEnableInterpreter',
        'enable_live' => 'getEnableLive',
        'end_time' => 'getEndTime',
        'guests' => 'getGuests',
        'host_key' => 'getHostKey',
        'hosts' => 'getHosts',
        'instanceid' => 'getInstanceid',
        'invitees' => 'getInvitees',
        'live_config' => 'getLiveConfig',
        'location' => 'getLocation',
        'media_set_type' => 'getMediaSetType',
        'meeting_type' => 'getMeetingType',
        'password' => 'getPassword',
        'recurring_rule' => 'getRecurringRule',
        'settings' => 'getSettings',
        'start_time' => 'getStartTime',
        'subject' => 'getSubject',
        'sync_to_wework' => 'getSyncToWework',
        'time_zone' => 'getTimeZone',
        'type' => 'getType',
        'userid' => 'getUserid'
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
            'allow_enterprise_intranet_only' => $this->allowEnterpriseIntranetOnly,
            'enable_doc_upload_permission' => $this->enableDocUploadPermission,
            'enable_enroll' => $this->enableEnroll,
            'enable_host_key' => $this->enableHostKey,
            'enable_interpreter' => $this->enableInterpreter,
            'enable_live' => $this->enableLive,
            'end_time' => $this->endTime,
            'guests' => $this->guests,
            'host_key' => $this->hostKey,
            'hosts' => $this->hosts,
            'instanceid' => $this->instanceid,
            'invitees' => $this->invitees,
            'live_config' => $this->liveConfig,
            'location' => $this->location,
            'media_set_type' => $this->mediaSetType,
            'meeting_type' => $this->meetingType,
            'password' => $this->password,
            'recurring_rule' => $this->recurringRule,
            'settings' => $this->settings,
            'start_time' => $this->startTime,
            'subject' => $this->subject,
            'sync_to_wework' => $this->syncToWework,
            'time_zone' => $this->timeZone,
            'type' => $this->type,
            'userid' => $this->userid,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

