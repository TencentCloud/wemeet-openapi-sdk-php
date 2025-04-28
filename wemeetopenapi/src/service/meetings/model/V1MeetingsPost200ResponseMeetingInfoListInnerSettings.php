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


class V1MeetingsPost200ResponseMeetingInfoListInnerSettings implements ModelInterface, \JsonSerializable
{

    /**
     * 允许成员在主持人进会前加入会议
    * 类型：bool
     */
    protected $allowInBeforeHost = null;

    /**
     * 是否允许多端入会
    * 类型：bool
     */
    protected $allowMultiDevice = null;

    /**
     * 开启屏幕共享水印
    * 类型：bool
     */
    protected $allowScreenSharedWatermark = null;

    /**
     * 静音自解除允许
    * 类型：bool
     */
    protected $allowUnmuteSelf = null;

    /**
     * 开启等候室
    * 类型：bool
     */
    protected $autoInWaitingRoom = null;

    /**
     * 自动录制类型，仅客户端2.7及以上版本生效 none：禁用 local：本地录制 cloud：云录制
    * 类型：string
     */
    protected $autoRecordType = null;

    /**
     * 是否允许用户自己改名 1:允许用户自己改名，2:不允许用户自己改名，默认为1
    * 类型：int
     */
    protected $changeNickname = null;

    /**
     * 允许主持人暂停或者停止云录制，默认值为 true 开启，开启时，主持人允许暂停和停止云录制；当设置为关闭时，则主持人不允许暂停和关闭云录制
    * 类型：bool
     */
    protected $enableHostPauseAutoRecord = null;

    /**
     * 加入静音状态
    * 类型：bool
     */
    protected $muteEnableJoin = null;

    /**
     * 加入静音状态
    * 类型：int
     */
    protected $muteEnableTypeJoin = null;

    /**
     * 是否仅企业内部成员可入会，默认值为 false。true：仅企业内部用户可入会 false：所有人可入会
    * 类型：bool
     */
    protected $onlyEnterpriseUserAllowed = null;

    /**
     * 成员入会限制，1：所有成员可入会，2：仅受邀成员可入会，3：仅企业内部成员可入会 ；当only_user_join_type和only_allow_enterprise_user_join同时传的时候，以only_user_join_type为准
    * 类型：int
     */
    protected $onlyUserJoinType = null;

    /**
     * 当有参会成员入会时立即开启云录制，默认值为 false 关闭，关闭时，主持人入会自动开启云录制；当设置为开启时，则有参会成员入会自动开启云录制。
    * 类型：bool
     */
    protected $participantJoinAutoRecord = null;

    /**
     * 有新的与会者加入时播放提示音，暂不支持，可在客户端设置
    * 类型：bool
     */
    protected $playIvrOnJoin = null;

    /**
     * 参会者离开时播放提示音，暂时不支持，可在客户端设置。
    * 类型：bool
     */
    protected $playIvrOnLeave = null;

    /**
     * 水印样式，默认为单排：0：单排 1：多排
    * 类型：int
     */
    protected $waterMarkType = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['allow_in_before_host'])) {
            $this->allowInBeforeHost = $jsonArray['allow_in_before_host'];
        }
        if (isset($jsonArray['allow_multi_device'])) {
            $this->allowMultiDevice = $jsonArray['allow_multi_device'];
        }
        if (isset($jsonArray['allow_screen_shared_watermark'])) {
            $this->allowScreenSharedWatermark = $jsonArray['allow_screen_shared_watermark'];
        }
        if (isset($jsonArray['allow_unmute_self'])) {
            $this->allowUnmuteSelf = $jsonArray['allow_unmute_self'];
        }
        if (isset($jsonArray['auto_in_waiting_room'])) {
            $this->autoInWaitingRoom = $jsonArray['auto_in_waiting_room'];
        }
        if (isset($jsonArray['auto_record_type'])) {
            $this->autoRecordType = $jsonArray['auto_record_type'];
        }
        if (isset($jsonArray['change_nickname'])) {
            $this->changeNickname = $jsonArray['change_nickname'];
        }
        if (isset($jsonArray['enable_host_pause_auto_record'])) {
            $this->enableHostPauseAutoRecord = $jsonArray['enable_host_pause_auto_record'];
        }
        if (isset($jsonArray['mute_enable_join'])) {
            $this->muteEnableJoin = $jsonArray['mute_enable_join'];
        }
        if (isset($jsonArray['mute_enable_type_join'])) {
            $this->muteEnableTypeJoin = $jsonArray['mute_enable_type_join'];
        }
        if (isset($jsonArray['only_enterprise_user_allowed'])) {
            $this->onlyEnterpriseUserAllowed = $jsonArray['only_enterprise_user_allowed'];
        }
        if (isset($jsonArray['only_user_join_type'])) {
            $this->onlyUserJoinType = $jsonArray['only_user_join_type'];
        }
        if (isset($jsonArray['participant_join_auto_record'])) {
            $this->participantJoinAutoRecord = $jsonArray['participant_join_auto_record'];
        }
        if (isset($jsonArray['play_ivr_on_join'])) {
            $this->playIvrOnJoin = $jsonArray['play_ivr_on_join'];
        }
        if (isset($jsonArray['play_ivr_on_leave'])) {
            $this->playIvrOnLeave = $jsonArray['play_ivr_on_leave'];
        }
        if (isset($jsonArray['water_mark_type'])) {
            $this->waterMarkType = $jsonArray['water_mark_type'];
        }
    }

    public function allowInBeforeHost(bool $allowInBeforeHost): V1MeetingsPost200ResponseMeetingInfoListInnerSettings {
        $this->allowInBeforeHost = $allowInBeforeHost;
        return $this;
    }

    public function getAllowInBeforeHost() {
        return $this->allowInBeforeHost;
    }

    public function setAllowInBeforeHost(bool $allowInBeforeHost) {
        $this->allowInBeforeHost = $allowInBeforeHost;
    }
    public function allowMultiDevice(bool $allowMultiDevice): V1MeetingsPost200ResponseMeetingInfoListInnerSettings {
        $this->allowMultiDevice = $allowMultiDevice;
        return $this;
    }

    public function getAllowMultiDevice() {
        return $this->allowMultiDevice;
    }

    public function setAllowMultiDevice(bool $allowMultiDevice) {
        $this->allowMultiDevice = $allowMultiDevice;
    }
    public function allowScreenSharedWatermark(bool $allowScreenSharedWatermark): V1MeetingsPost200ResponseMeetingInfoListInnerSettings {
        $this->allowScreenSharedWatermark = $allowScreenSharedWatermark;
        return $this;
    }

    public function getAllowScreenSharedWatermark() {
        return $this->allowScreenSharedWatermark;
    }

    public function setAllowScreenSharedWatermark(bool $allowScreenSharedWatermark) {
        $this->allowScreenSharedWatermark = $allowScreenSharedWatermark;
    }
    public function allowUnmuteSelf(bool $allowUnmuteSelf): V1MeetingsPost200ResponseMeetingInfoListInnerSettings {
        $this->allowUnmuteSelf = $allowUnmuteSelf;
        return $this;
    }

    public function getAllowUnmuteSelf() {
        return $this->allowUnmuteSelf;
    }

    public function setAllowUnmuteSelf(bool $allowUnmuteSelf) {
        $this->allowUnmuteSelf = $allowUnmuteSelf;
    }
    public function autoInWaitingRoom(bool $autoInWaitingRoom): V1MeetingsPost200ResponseMeetingInfoListInnerSettings {
        $this->autoInWaitingRoom = $autoInWaitingRoom;
        return $this;
    }

    public function getAutoInWaitingRoom() {
        return $this->autoInWaitingRoom;
    }

    public function setAutoInWaitingRoom(bool $autoInWaitingRoom) {
        $this->autoInWaitingRoom = $autoInWaitingRoom;
    }
    public function autoRecordType(string $autoRecordType): V1MeetingsPost200ResponseMeetingInfoListInnerSettings {
        $this->autoRecordType = $autoRecordType;
        return $this;
    }

    public function getAutoRecordType() {
        return $this->autoRecordType;
    }

    public function setAutoRecordType(string $autoRecordType) {
        $this->autoRecordType = $autoRecordType;
    }
    public function changeNickname(int $changeNickname): V1MeetingsPost200ResponseMeetingInfoListInnerSettings {
        $this->changeNickname = $changeNickname;
        return $this;
    }

    public function getChangeNickname() {
        return $this->changeNickname;
    }

    public function setChangeNickname(int $changeNickname) {
        $this->changeNickname = $changeNickname;
    }
    public function enableHostPauseAutoRecord(bool $enableHostPauseAutoRecord): V1MeetingsPost200ResponseMeetingInfoListInnerSettings {
        $this->enableHostPauseAutoRecord = $enableHostPauseAutoRecord;
        return $this;
    }

    public function getEnableHostPauseAutoRecord() {
        return $this->enableHostPauseAutoRecord;
    }

    public function setEnableHostPauseAutoRecord(bool $enableHostPauseAutoRecord) {
        $this->enableHostPauseAutoRecord = $enableHostPauseAutoRecord;
    }
    public function muteEnableJoin(bool $muteEnableJoin): V1MeetingsPost200ResponseMeetingInfoListInnerSettings {
        $this->muteEnableJoin = $muteEnableJoin;
        return $this;
    }

    public function getMuteEnableJoin() {
        return $this->muteEnableJoin;
    }

    public function setMuteEnableJoin(bool $muteEnableJoin) {
        $this->muteEnableJoin = $muteEnableJoin;
    }
    public function muteEnableTypeJoin(int $muteEnableTypeJoin): V1MeetingsPost200ResponseMeetingInfoListInnerSettings {
        $this->muteEnableTypeJoin = $muteEnableTypeJoin;
        return $this;
    }

    public function getMuteEnableTypeJoin() {
        return $this->muteEnableTypeJoin;
    }

    public function setMuteEnableTypeJoin(int $muteEnableTypeJoin) {
        $this->muteEnableTypeJoin = $muteEnableTypeJoin;
    }
    public function onlyEnterpriseUserAllowed(bool $onlyEnterpriseUserAllowed): V1MeetingsPost200ResponseMeetingInfoListInnerSettings {
        $this->onlyEnterpriseUserAllowed = $onlyEnterpriseUserAllowed;
        return $this;
    }

    public function getOnlyEnterpriseUserAllowed() {
        return $this->onlyEnterpriseUserAllowed;
    }

    public function setOnlyEnterpriseUserAllowed(bool $onlyEnterpriseUserAllowed) {
        $this->onlyEnterpriseUserAllowed = $onlyEnterpriseUserAllowed;
    }
    public function onlyUserJoinType(int $onlyUserJoinType): V1MeetingsPost200ResponseMeetingInfoListInnerSettings {
        $this->onlyUserJoinType = $onlyUserJoinType;
        return $this;
    }

    public function getOnlyUserJoinType() {
        return $this->onlyUserJoinType;
    }

    public function setOnlyUserJoinType(int $onlyUserJoinType) {
        $this->onlyUserJoinType = $onlyUserJoinType;
    }
    public function participantJoinAutoRecord(bool $participantJoinAutoRecord): V1MeetingsPost200ResponseMeetingInfoListInnerSettings {
        $this->participantJoinAutoRecord = $participantJoinAutoRecord;
        return $this;
    }

    public function getParticipantJoinAutoRecord() {
        return $this->participantJoinAutoRecord;
    }

    public function setParticipantJoinAutoRecord(bool $participantJoinAutoRecord) {
        $this->participantJoinAutoRecord = $participantJoinAutoRecord;
    }
    public function playIvrOnJoin(bool $playIvrOnJoin): V1MeetingsPost200ResponseMeetingInfoListInnerSettings {
        $this->playIvrOnJoin = $playIvrOnJoin;
        return $this;
    }

    public function getPlayIvrOnJoin() {
        return $this->playIvrOnJoin;
    }

    public function setPlayIvrOnJoin(bool $playIvrOnJoin) {
        $this->playIvrOnJoin = $playIvrOnJoin;
    }
    public function playIvrOnLeave(bool $playIvrOnLeave): V1MeetingsPost200ResponseMeetingInfoListInnerSettings {
        $this->playIvrOnLeave = $playIvrOnLeave;
        return $this;
    }

    public function getPlayIvrOnLeave() {
        return $this->playIvrOnLeave;
    }

    public function setPlayIvrOnLeave(bool $playIvrOnLeave) {
        $this->playIvrOnLeave = $playIvrOnLeave;
    }
    public function waterMarkType(int $waterMarkType): V1MeetingsPost200ResponseMeetingInfoListInnerSettings {
        $this->waterMarkType = $waterMarkType;
        return $this;
    }

    public function getWaterMarkType() {
        return $this->waterMarkType;
    }

    public function setWaterMarkType(int $waterMarkType) {
        $this->waterMarkType = $waterMarkType;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'allow_in_before_host' => 'bool',
        'allow_multi_device' => 'bool',
        'allow_screen_shared_watermark' => 'bool',
        'allow_unmute_self' => 'bool',
        'auto_in_waiting_room' => 'bool',
        'auto_record_type' => 'string',
        'change_nickname' => 'int',
        'enable_host_pause_auto_record' => 'bool',
        'mute_enable_join' => 'bool',
        'mute_enable_type_join' => 'int',
        'only_enterprise_user_allowed' => 'bool',
        'only_user_join_type' => 'int',
        'participant_join_auto_record' => 'bool',
        'play_ivr_on_join' => 'bool',
        'play_ivr_on_leave' => 'bool',
        'water_mark_type' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'allow_in_before_host' => null,
        'allow_multi_device' => null,
        'allow_screen_shared_watermark' => null,
        'allow_unmute_self' => null,
        'auto_in_waiting_room' => null,
        'auto_record_type' => null,
        'change_nickname' => 'int64',
        'enable_host_pause_auto_record' => null,
        'mute_enable_join' => null,
        'mute_enable_type_join' => 'int64',
        'only_enterprise_user_allowed' => null,
        'only_user_join_type' => 'int64',
        'participant_join_auto_record' => null,
        'play_ivr_on_join' => null,
        'play_ivr_on_leave' => null,
        'water_mark_type' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'allow_in_before_host' => false,
        'allow_multi_device' => false,
        'allow_screen_shared_watermark' => false,
        'allow_unmute_self' => false,
        'auto_in_waiting_room' => false,
        'auto_record_type' => false,
        'change_nickname' => false,
        'enable_host_pause_auto_record' => false,
        'mute_enable_join' => false,
        'mute_enable_type_join' => false,
        'only_enterprise_user_allowed' => false,
        'only_user_join_type' => false,
        'participant_join_auto_record' => false,
        'play_ivr_on_join' => false,
        'play_ivr_on_leave' => false,
        'water_mark_type' => false
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
        'allow_in_before_host' => 'allow_in_before_host',
        'allow_multi_device' => 'allow_multi_device',
        'allow_screen_shared_watermark' => 'allow_screen_shared_watermark',
        'allow_unmute_self' => 'allow_unmute_self',
        'auto_in_waiting_room' => 'auto_in_waiting_room',
        'auto_record_type' => 'auto_record_type',
        'change_nickname' => 'change_nickname',
        'enable_host_pause_auto_record' => 'enable_host_pause_auto_record',
        'mute_enable_join' => 'mute_enable_join',
        'mute_enable_type_join' => 'mute_enable_type_join',
        'only_enterprise_user_allowed' => 'only_enterprise_user_allowed',
        'only_user_join_type' => 'only_user_join_type',
        'participant_join_auto_record' => 'participant_join_auto_record',
        'play_ivr_on_join' => 'play_ivr_on_join',
        'play_ivr_on_leave' => 'play_ivr_on_leave',
        'water_mark_type' => 'water_mark_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allow_in_before_host' => 'setAllowInBeforeHost',
        'allow_multi_device' => 'setAllowMultiDevice',
        'allow_screen_shared_watermark' => 'setAllowScreenSharedWatermark',
        'allow_unmute_self' => 'setAllowUnmuteSelf',
        'auto_in_waiting_room' => 'setAutoInWaitingRoom',
        'auto_record_type' => 'setAutoRecordType',
        'change_nickname' => 'setChangeNickname',
        'enable_host_pause_auto_record' => 'setEnableHostPauseAutoRecord',
        'mute_enable_join' => 'setMuteEnableJoin',
        'mute_enable_type_join' => 'setMuteEnableTypeJoin',
        'only_enterprise_user_allowed' => 'setOnlyEnterpriseUserAllowed',
        'only_user_join_type' => 'setOnlyUserJoinType',
        'participant_join_auto_record' => 'setParticipantJoinAutoRecord',
        'play_ivr_on_join' => 'setPlayIvrOnJoin',
        'play_ivr_on_leave' => 'setPlayIvrOnLeave',
        'water_mark_type' => 'setWaterMarkType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allow_in_before_host' => 'getAllowInBeforeHost',
        'allow_multi_device' => 'getAllowMultiDevice',
        'allow_screen_shared_watermark' => 'getAllowScreenSharedWatermark',
        'allow_unmute_self' => 'getAllowUnmuteSelf',
        'auto_in_waiting_room' => 'getAutoInWaitingRoom',
        'auto_record_type' => 'getAutoRecordType',
        'change_nickname' => 'getChangeNickname',
        'enable_host_pause_auto_record' => 'getEnableHostPauseAutoRecord',
        'mute_enable_join' => 'getMuteEnableJoin',
        'mute_enable_type_join' => 'getMuteEnableTypeJoin',
        'only_enterprise_user_allowed' => 'getOnlyEnterpriseUserAllowed',
        'only_user_join_type' => 'getOnlyUserJoinType',
        'participant_join_auto_record' => 'getParticipantJoinAutoRecord',
        'play_ivr_on_join' => 'getPlayIvrOnJoin',
        'play_ivr_on_leave' => 'getPlayIvrOnLeave',
        'water_mark_type' => 'getWaterMarkType'
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
            'allow_in_before_host' => $this->allowInBeforeHost,
            'allow_multi_device' => $this->allowMultiDevice,
            'allow_screen_shared_watermark' => $this->allowScreenSharedWatermark,
            'allow_unmute_self' => $this->allowUnmuteSelf,
            'auto_in_waiting_room' => $this->autoInWaitingRoom,
            'auto_record_type' => $this->autoRecordType,
            'change_nickname' => $this->changeNickname,
            'enable_host_pause_auto_record' => $this->enableHostPauseAutoRecord,
            'mute_enable_join' => $this->muteEnableJoin,
            'mute_enable_type_join' => $this->muteEnableTypeJoin,
            'only_enterprise_user_allowed' => $this->onlyEnterpriseUserAllowed,
            'only_user_join_type' => $this->onlyUserJoinType,
            'participant_join_auto_record' => $this->participantJoinAutoRecord,
            'play_ivr_on_join' => $this->playIvrOnJoin,
            'play_ivr_on_leave' => $this->playIvrOnLeave,
            'water_mark_type' => $this->waterMarkType,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

