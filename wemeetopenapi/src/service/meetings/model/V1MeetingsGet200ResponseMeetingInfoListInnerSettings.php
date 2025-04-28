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


class V1MeetingsGet200ResponseMeetingInfoListInnerSettings implements ModelInterface, \JsonSerializable
{

    /**
    * 类型：bool
     */
    protected $allowInBeforeHost = null;

    /**
    * 类型：bool
     */
    protected $allowScreenSharedWatermark = null;

    /**
    * 类型：bool
     */
    protected $allowUnmuteSelf = null;

    /**
    * 类型：bool
     */
    protected $autoInWaitingRoom = null;

    /**
    * 类型：string
     */
    protected $autoRecordType = null;

    /**
    * 类型：bool
     */
    protected $enableHostPauseAutoRecord = null;

    /**
    * 类型：bool
     */
    protected $muteEnableJoin = null;

    /**
    * 类型：int
     */
    protected $muteEnableTypeJoin = null;

    /**
    * 类型：bool
     */
    protected $onlyAllowEnterpriseUserJoin = null;

    /**
    * 类型：bool
     */
    protected $participantJoinAutoRecord = null;

    /**
    * 类型：int
     */
    protected $waterMarkType = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['allow_in_before_host'])) {
            $this->allowInBeforeHost = $jsonArray['allow_in_before_host'];
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
        if (isset($jsonArray['enable_host_pause_auto_record'])) {
            $this->enableHostPauseAutoRecord = $jsonArray['enable_host_pause_auto_record'];
        }
        if (isset($jsonArray['mute_enable_join'])) {
            $this->muteEnableJoin = $jsonArray['mute_enable_join'];
        }
        if (isset($jsonArray['mute_enable_type_join'])) {
            $this->muteEnableTypeJoin = $jsonArray['mute_enable_type_join'];
        }
        if (isset($jsonArray['only_allow_enterprise_user_join'])) {
            $this->onlyAllowEnterpriseUserJoin = $jsonArray['only_allow_enterprise_user_join'];
        }
        if (isset($jsonArray['participant_join_auto_record'])) {
            $this->participantJoinAutoRecord = $jsonArray['participant_join_auto_record'];
        }
        if (isset($jsonArray['water_mark_type'])) {
            $this->waterMarkType = $jsonArray['water_mark_type'];
        }
    }

    public function allowInBeforeHost(bool $allowInBeforeHost): V1MeetingsGet200ResponseMeetingInfoListInnerSettings {
        $this->allowInBeforeHost = $allowInBeforeHost;
        return $this;
    }

    public function getAllowInBeforeHost() {
        return $this->allowInBeforeHost;
    }

    public function setAllowInBeforeHost(bool $allowInBeforeHost) {
        $this->allowInBeforeHost = $allowInBeforeHost;
    }
    public function allowScreenSharedWatermark(bool $allowScreenSharedWatermark): V1MeetingsGet200ResponseMeetingInfoListInnerSettings {
        $this->allowScreenSharedWatermark = $allowScreenSharedWatermark;
        return $this;
    }

    public function getAllowScreenSharedWatermark() {
        return $this->allowScreenSharedWatermark;
    }

    public function setAllowScreenSharedWatermark(bool $allowScreenSharedWatermark) {
        $this->allowScreenSharedWatermark = $allowScreenSharedWatermark;
    }
    public function allowUnmuteSelf(bool $allowUnmuteSelf): V1MeetingsGet200ResponseMeetingInfoListInnerSettings {
        $this->allowUnmuteSelf = $allowUnmuteSelf;
        return $this;
    }

    public function getAllowUnmuteSelf() {
        return $this->allowUnmuteSelf;
    }

    public function setAllowUnmuteSelf(bool $allowUnmuteSelf) {
        $this->allowUnmuteSelf = $allowUnmuteSelf;
    }
    public function autoInWaitingRoom(bool $autoInWaitingRoom): V1MeetingsGet200ResponseMeetingInfoListInnerSettings {
        $this->autoInWaitingRoom = $autoInWaitingRoom;
        return $this;
    }

    public function getAutoInWaitingRoom() {
        return $this->autoInWaitingRoom;
    }

    public function setAutoInWaitingRoom(bool $autoInWaitingRoom) {
        $this->autoInWaitingRoom = $autoInWaitingRoom;
    }
    public function autoRecordType(string $autoRecordType): V1MeetingsGet200ResponseMeetingInfoListInnerSettings {
        $this->autoRecordType = $autoRecordType;
        return $this;
    }

    public function getAutoRecordType() {
        return $this->autoRecordType;
    }

    public function setAutoRecordType(string $autoRecordType) {
        $this->autoRecordType = $autoRecordType;
    }
    public function enableHostPauseAutoRecord(bool $enableHostPauseAutoRecord): V1MeetingsGet200ResponseMeetingInfoListInnerSettings {
        $this->enableHostPauseAutoRecord = $enableHostPauseAutoRecord;
        return $this;
    }

    public function getEnableHostPauseAutoRecord() {
        return $this->enableHostPauseAutoRecord;
    }

    public function setEnableHostPauseAutoRecord(bool $enableHostPauseAutoRecord) {
        $this->enableHostPauseAutoRecord = $enableHostPauseAutoRecord;
    }
    public function muteEnableJoin(bool $muteEnableJoin): V1MeetingsGet200ResponseMeetingInfoListInnerSettings {
        $this->muteEnableJoin = $muteEnableJoin;
        return $this;
    }

    public function getMuteEnableJoin() {
        return $this->muteEnableJoin;
    }

    public function setMuteEnableJoin(bool $muteEnableJoin) {
        $this->muteEnableJoin = $muteEnableJoin;
    }
    public function muteEnableTypeJoin(int $muteEnableTypeJoin): V1MeetingsGet200ResponseMeetingInfoListInnerSettings {
        $this->muteEnableTypeJoin = $muteEnableTypeJoin;
        return $this;
    }

    public function getMuteEnableTypeJoin() {
        return $this->muteEnableTypeJoin;
    }

    public function setMuteEnableTypeJoin(int $muteEnableTypeJoin) {
        $this->muteEnableTypeJoin = $muteEnableTypeJoin;
    }
    public function onlyAllowEnterpriseUserJoin(bool $onlyAllowEnterpriseUserJoin): V1MeetingsGet200ResponseMeetingInfoListInnerSettings {
        $this->onlyAllowEnterpriseUserJoin = $onlyAllowEnterpriseUserJoin;
        return $this;
    }

    public function getOnlyAllowEnterpriseUserJoin() {
        return $this->onlyAllowEnterpriseUserJoin;
    }

    public function setOnlyAllowEnterpriseUserJoin(bool $onlyAllowEnterpriseUserJoin) {
        $this->onlyAllowEnterpriseUserJoin = $onlyAllowEnterpriseUserJoin;
    }
    public function participantJoinAutoRecord(bool $participantJoinAutoRecord): V1MeetingsGet200ResponseMeetingInfoListInnerSettings {
        $this->participantJoinAutoRecord = $participantJoinAutoRecord;
        return $this;
    }

    public function getParticipantJoinAutoRecord() {
        return $this->participantJoinAutoRecord;
    }

    public function setParticipantJoinAutoRecord(bool $participantJoinAutoRecord) {
        $this->participantJoinAutoRecord = $participantJoinAutoRecord;
    }
    public function waterMarkType(int $waterMarkType): V1MeetingsGet200ResponseMeetingInfoListInnerSettings {
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
        'allow_screen_shared_watermark' => 'bool',
        'allow_unmute_self' => 'bool',
        'auto_in_waiting_room' => 'bool',
        'auto_record_type' => 'string',
        'enable_host_pause_auto_record' => 'bool',
        'mute_enable_join' => 'bool',
        'mute_enable_type_join' => 'int',
        'only_allow_enterprise_user_join' => 'bool',
        'participant_join_auto_record' => 'bool',
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
        'allow_screen_shared_watermark' => null,
        'allow_unmute_self' => null,
        'auto_in_waiting_room' => null,
        'auto_record_type' => null,
        'enable_host_pause_auto_record' => null,
        'mute_enable_join' => null,
        'mute_enable_type_join' => 'int64',
        'only_allow_enterprise_user_join' => null,
        'participant_join_auto_record' => null,
        'water_mark_type' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'allow_in_before_host' => false,
        'allow_screen_shared_watermark' => false,
        'allow_unmute_self' => false,
        'auto_in_waiting_room' => false,
        'auto_record_type' => false,
        'enable_host_pause_auto_record' => false,
        'mute_enable_join' => false,
        'mute_enable_type_join' => false,
        'only_allow_enterprise_user_join' => false,
        'participant_join_auto_record' => false,
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
        'allow_screen_shared_watermark' => 'allow_screen_shared_watermark',
        'allow_unmute_self' => 'allow_unmute_self',
        'auto_in_waiting_room' => 'auto_in_waiting_room',
        'auto_record_type' => 'auto_record_type',
        'enable_host_pause_auto_record' => 'enable_host_pause_auto_record',
        'mute_enable_join' => 'mute_enable_join',
        'mute_enable_type_join' => 'mute_enable_type_join',
        'only_allow_enterprise_user_join' => 'only_allow_enterprise_user_join',
        'participant_join_auto_record' => 'participant_join_auto_record',
        'water_mark_type' => 'water_mark_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allow_in_before_host' => 'setAllowInBeforeHost',
        'allow_screen_shared_watermark' => 'setAllowScreenSharedWatermark',
        'allow_unmute_self' => 'setAllowUnmuteSelf',
        'auto_in_waiting_room' => 'setAutoInWaitingRoom',
        'auto_record_type' => 'setAutoRecordType',
        'enable_host_pause_auto_record' => 'setEnableHostPauseAutoRecord',
        'mute_enable_join' => 'setMuteEnableJoin',
        'mute_enable_type_join' => 'setMuteEnableTypeJoin',
        'only_allow_enterprise_user_join' => 'setOnlyAllowEnterpriseUserJoin',
        'participant_join_auto_record' => 'setParticipantJoinAutoRecord',
        'water_mark_type' => 'setWaterMarkType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allow_in_before_host' => 'getAllowInBeforeHost',
        'allow_screen_shared_watermark' => 'getAllowScreenSharedWatermark',
        'allow_unmute_self' => 'getAllowUnmuteSelf',
        'auto_in_waiting_room' => 'getAutoInWaitingRoom',
        'auto_record_type' => 'getAutoRecordType',
        'enable_host_pause_auto_record' => 'getEnableHostPauseAutoRecord',
        'mute_enable_join' => 'getMuteEnableJoin',
        'mute_enable_type_join' => 'getMuteEnableTypeJoin',
        'only_allow_enterprise_user_join' => 'getOnlyAllowEnterpriseUserJoin',
        'participant_join_auto_record' => 'getParticipantJoinAutoRecord',
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
            'allow_screen_shared_watermark' => $this->allowScreenSharedWatermark,
            'allow_unmute_self' => $this->allowUnmuteSelf,
            'auto_in_waiting_room' => $this->autoInWaitingRoom,
            'auto_record_type' => $this->autoRecordType,
            'enable_host_pause_auto_record' => $this->enableHostPauseAutoRecord,
            'mute_enable_join' => $this->muteEnableJoin,
            'mute_enable_type_join' => $this->muteEnableTypeJoin,
            'only_allow_enterprise_user_join' => $this->onlyAllowEnterpriseUserJoin,
            'participant_join_auto_record' => $this->participantJoinAutoRecord,
            'water_mark_type' => $this->waterMarkType,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

