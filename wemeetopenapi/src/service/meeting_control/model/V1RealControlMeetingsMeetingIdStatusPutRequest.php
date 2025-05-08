<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.4
 */
namespace wemeet\openapi\service\meeting_control\model;

use wemeet\openapi\core\xhttp\ModelInterface;


class V1RealControlMeetingsMeetingIdStatusPutRequest implements ModelInterface, \JsonSerializable
{
    /**
     * 用户的终端设备类型： 1：PC 2：Mac 3：Android 4：iOS 5：Web 6：iPad 7：Android Pad 8：小程序 9：voip、sip 设备 10：linux 20：Rooms for Touch Windows 21：Rooms for Touch Mac 22：Rooms for Touch Android 30：Controller for Touch Windows 32：Controller for Touch Android 33：Controller for Touch Iphone
    * 类型：
     */
    protected $instanceid;

    /**
     * 允许参会者聊天设置  0:允许参会者自由聊天  1:仅允许参会者公开聊天  2:只允许支持人发言
    * 类型：int
     */
    protected $allowChat = null;

    /**
     * 是否允许成员自己解除静音
    * 类型：bool
     */
    protected $allowUnmuteBySelf = null;

    /**
     * 是否开启等候室 true：开启 false：关闭
    * 类型：bool
     */
    protected $autoWaitingRoom = null;

    /**
     * 是否允许参会者发送红包 true：允许 false：不允许
    * 类型：bool
     */
    protected $enableRedEnvelope = null;

    /**
     * 隐藏会议号和密码 true：隐藏 false：不隐藏
    * 类型：bool
     */
    protected $hideMeetingCodePassword = null;

    /**
     * 是否锁定会议 true：锁定 false：关闭锁定
    * 类型：bool
     */
    protected $meetingLocked = null;

    /**
     * 是否全体静音，true：是；false关闭全体静音
    * 类型：bool
     */
    protected $muteAll = null;

    /**
     * 是否仅企业成员可入会  true：仅企业成员可入会  false：不限制
    * 类型：bool
     */
    protected $onlyEnterpriseUserAllowed = null;

    /**
     * 操作者ID，根据operator_id_type的值，使用不同的类型
    * 类型：string
     */
    protected $operatorId = null;

    /**
     * 操作者ID的类型：1:userid  2:openid（预留编号，本次不添加，未来新增接口使用）3:rooms_id  4: ms_open_id
    * 类型：int
     */
    protected $operatorIdType = null;

    /**
     * 成员入会静音 0:关闭静音 1:开启静音 2:超过6人自动开启静音
    * 类型：int
     */
    protected $participantJoinMute = null;

    /**
     * 成员入会是否播放提示音 true：成员入会播放提示音 false：不播放
    * 类型：bool
     */
    protected $playIvrOnJoin = null;

    /**
     * 是否允许参会者发起屏幕共享 true：允许 false：不允许
    * 类型：bool
     */
    protected $shareScreen = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['instanceid'])) {
            $this->instanceid = $jsonArray['instanceid'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter instanceid');
        }
        if (isset($jsonArray['allow_chat'])) {
            $this->allowChat = $jsonArray['allow_chat'];
        }
        if (isset($jsonArray['allow_unmute_by_self'])) {
            $this->allowUnmuteBySelf = $jsonArray['allow_unmute_by_self'];
        }
        if (isset($jsonArray['auto_waiting_room'])) {
            $this->autoWaitingRoom = $jsonArray['auto_waiting_room'];
        }
        if (isset($jsonArray['enable_red_envelope'])) {
            $this->enableRedEnvelope = $jsonArray['enable_red_envelope'];
        }
        if (isset($jsonArray['hide_meeting_code_password'])) {
            $this->hideMeetingCodePassword = $jsonArray['hide_meeting_code_password'];
        }
        if (isset($jsonArray['meeting_locked'])) {
            $this->meetingLocked = $jsonArray['meeting_locked'];
        }
        if (isset($jsonArray['mute_all'])) {
            $this->muteAll = $jsonArray['mute_all'];
        }
        if (isset($jsonArray['only_enterprise_user_allowed'])) {
            $this->onlyEnterpriseUserAllowed = $jsonArray['only_enterprise_user_allowed'];
        }
        if (isset($jsonArray['operator_id'])) {
            $this->operatorId = $jsonArray['operator_id'];
        }
        if (isset($jsonArray['operator_id_type'])) {
            $this->operatorIdType = $jsonArray['operator_id_type'];
        }
        if (isset($jsonArray['participant_join_mute'])) {
            $this->participantJoinMute = $jsonArray['participant_join_mute'];
        }
        if (isset($jsonArray['play_ivr_on_join'])) {
            $this->playIvrOnJoin = $jsonArray['play_ivr_on_join'];
        }
        if (isset($jsonArray['share_screen'])) {
            $this->shareScreen = $jsonArray['share_screen'];
        }
    }

    public function allowChat(int $allowChat): V1RealControlMeetingsMeetingIdStatusPutRequest {
        $this->allowChat = $allowChat;
        return $this;
    }

    public function getAllowChat() {
        return $this->allowChat;
    }

    public function setAllowChat(int $allowChat) {
        $this->allowChat = $allowChat;
    }
    public function allowUnmuteBySelf(bool $allowUnmuteBySelf): V1RealControlMeetingsMeetingIdStatusPutRequest {
        $this->allowUnmuteBySelf = $allowUnmuteBySelf;
        return $this;
    }

    public function getAllowUnmuteBySelf() {
        return $this->allowUnmuteBySelf;
    }

    public function setAllowUnmuteBySelf(bool $allowUnmuteBySelf) {
        $this->allowUnmuteBySelf = $allowUnmuteBySelf;
    }
    public function autoWaitingRoom(bool $autoWaitingRoom): V1RealControlMeetingsMeetingIdStatusPutRequest {
        $this->autoWaitingRoom = $autoWaitingRoom;
        return $this;
    }

    public function getAutoWaitingRoom() {
        return $this->autoWaitingRoom;
    }

    public function setAutoWaitingRoom(bool $autoWaitingRoom) {
        $this->autoWaitingRoom = $autoWaitingRoom;
    }
    public function enableRedEnvelope(bool $enableRedEnvelope): V1RealControlMeetingsMeetingIdStatusPutRequest {
        $this->enableRedEnvelope = $enableRedEnvelope;
        return $this;
    }

    public function getEnableRedEnvelope() {
        return $this->enableRedEnvelope;
    }

    public function setEnableRedEnvelope(bool $enableRedEnvelope) {
        $this->enableRedEnvelope = $enableRedEnvelope;
    }
    public function hideMeetingCodePassword(bool $hideMeetingCodePassword): V1RealControlMeetingsMeetingIdStatusPutRequest {
        $this->hideMeetingCodePassword = $hideMeetingCodePassword;
        return $this;
    }

    public function getHideMeetingCodePassword() {
        return $this->hideMeetingCodePassword;
    }

    public function setHideMeetingCodePassword(bool $hideMeetingCodePassword) {
        $this->hideMeetingCodePassword = $hideMeetingCodePassword;
    }
    public function instanceid(int $instanceid): V1RealControlMeetingsMeetingIdStatusPutRequest {
        $this->instanceid = $instanceid;
        return $this;
    }

    public function getInstanceid() {
        return $this->instanceid;
    }

    public function setInstanceid(int $instanceid) {
        $this->instanceid = $instanceid;
    }
    public function meetingLocked(bool $meetingLocked): V1RealControlMeetingsMeetingIdStatusPutRequest {
        $this->meetingLocked = $meetingLocked;
        return $this;
    }

    public function getMeetingLocked() {
        return $this->meetingLocked;
    }

    public function setMeetingLocked(bool $meetingLocked) {
        $this->meetingLocked = $meetingLocked;
    }
    public function muteAll(bool $muteAll): V1RealControlMeetingsMeetingIdStatusPutRequest {
        $this->muteAll = $muteAll;
        return $this;
    }

    public function getMuteAll() {
        return $this->muteAll;
    }

    public function setMuteAll(bool $muteAll) {
        $this->muteAll = $muteAll;
    }
    public function onlyEnterpriseUserAllowed(bool $onlyEnterpriseUserAllowed): V1RealControlMeetingsMeetingIdStatusPutRequest {
        $this->onlyEnterpriseUserAllowed = $onlyEnterpriseUserAllowed;
        return $this;
    }

    public function getOnlyEnterpriseUserAllowed() {
        return $this->onlyEnterpriseUserAllowed;
    }

    public function setOnlyEnterpriseUserAllowed(bool $onlyEnterpriseUserAllowed) {
        $this->onlyEnterpriseUserAllowed = $onlyEnterpriseUserAllowed;
    }
    public function operatorId(string $operatorId): V1RealControlMeetingsMeetingIdStatusPutRequest {
        $this->operatorId = $operatorId;
        return $this;
    }

    public function getOperatorId() {
        return $this->operatorId;
    }

    public function setOperatorId(string $operatorId) {
        $this->operatorId = $operatorId;
    }
    public function operatorIdType(int $operatorIdType): V1RealControlMeetingsMeetingIdStatusPutRequest {
        $this->operatorIdType = $operatorIdType;
        return $this;
    }

    public function getOperatorIdType() {
        return $this->operatorIdType;
    }

    public function setOperatorIdType(int $operatorIdType) {
        $this->operatorIdType = $operatorIdType;
    }
    public function participantJoinMute(int $participantJoinMute): V1RealControlMeetingsMeetingIdStatusPutRequest {
        $this->participantJoinMute = $participantJoinMute;
        return $this;
    }

    public function getParticipantJoinMute() {
        return $this->participantJoinMute;
    }

    public function setParticipantJoinMute(int $participantJoinMute) {
        $this->participantJoinMute = $participantJoinMute;
    }
    public function playIvrOnJoin(bool $playIvrOnJoin): V1RealControlMeetingsMeetingIdStatusPutRequest {
        $this->playIvrOnJoin = $playIvrOnJoin;
        return $this;
    }

    public function getPlayIvrOnJoin() {
        return $this->playIvrOnJoin;
    }

    public function setPlayIvrOnJoin(bool $playIvrOnJoin) {
        $this->playIvrOnJoin = $playIvrOnJoin;
    }
    public function shareScreen(bool $shareScreen): V1RealControlMeetingsMeetingIdStatusPutRequest {
        $this->shareScreen = $shareScreen;
        return $this;
    }

    public function getShareScreen() {
        return $this->shareScreen;
    }

    public function setShareScreen(bool $shareScreen) {
        $this->shareScreen = $shareScreen;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'allow_chat' => 'int',
        'allow_unmute_by_self' => 'bool',
        'auto_waiting_room' => 'bool',
        'enable_red_envelope' => 'bool',
        'hide_meeting_code_password' => 'bool',
        'instanceid' => 'int',
        'meeting_locked' => 'bool',
        'mute_all' => 'bool',
        'only_enterprise_user_allowed' => 'bool',
        'operator_id' => 'string',
        'operator_id_type' => 'int',
        'participant_join_mute' => 'int',
        'play_ivr_on_join' => 'bool',
        'share_screen' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'allow_chat' => 'int64',
        'allow_unmute_by_self' => null,
        'auto_waiting_room' => null,
        'enable_red_envelope' => null,
        'hide_meeting_code_password' => null,
        'instanceid' => 'int64',
        'meeting_locked' => null,
        'mute_all' => null,
        'only_enterprise_user_allowed' => null,
        'operator_id' => null,
        'operator_id_type' => 'int64',
        'participant_join_mute' => 'int64',
        'play_ivr_on_join' => null,
        'share_screen' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'allow_chat' => false,
        'allow_unmute_by_self' => false,
        'auto_waiting_room' => false,
        'enable_red_envelope' => false,
        'hide_meeting_code_password' => false,
        'instanceid' => false,
        'meeting_locked' => false,
        'mute_all' => false,
        'only_enterprise_user_allowed' => false,
        'operator_id' => false,
        'operator_id_type' => false,
        'participant_join_mute' => false,
        'play_ivr_on_join' => false,
        'share_screen' => false
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
        'allow_chat' => 'allow_chat',
        'allow_unmute_by_self' => 'allow_unmute_by_self',
        'auto_waiting_room' => 'auto_waiting_room',
        'enable_red_envelope' => 'enable_red_envelope',
        'hide_meeting_code_password' => 'hide_meeting_code_password',
        'instanceid' => 'instanceid',
        'meeting_locked' => 'meeting_locked',
        'mute_all' => 'mute_all',
        'only_enterprise_user_allowed' => 'only_enterprise_user_allowed',
        'operator_id' => 'operator_id',
        'operator_id_type' => 'operator_id_type',
        'participant_join_mute' => 'participant_join_mute',
        'play_ivr_on_join' => 'play_ivr_on_join',
        'share_screen' => 'share_screen'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allow_chat' => 'setAllowChat',
        'allow_unmute_by_self' => 'setAllowUnmuteBySelf',
        'auto_waiting_room' => 'setAutoWaitingRoom',
        'enable_red_envelope' => 'setEnableRedEnvelope',
        'hide_meeting_code_password' => 'setHideMeetingCodePassword',
        'instanceid' => 'setInstanceid',
        'meeting_locked' => 'setMeetingLocked',
        'mute_all' => 'setMuteAll',
        'only_enterprise_user_allowed' => 'setOnlyEnterpriseUserAllowed',
        'operator_id' => 'setOperatorId',
        'operator_id_type' => 'setOperatorIdType',
        'participant_join_mute' => 'setParticipantJoinMute',
        'play_ivr_on_join' => 'setPlayIvrOnJoin',
        'share_screen' => 'setShareScreen'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allow_chat' => 'getAllowChat',
        'allow_unmute_by_self' => 'getAllowUnmuteBySelf',
        'auto_waiting_room' => 'getAutoWaitingRoom',
        'enable_red_envelope' => 'getEnableRedEnvelope',
        'hide_meeting_code_password' => 'getHideMeetingCodePassword',
        'instanceid' => 'getInstanceid',
        'meeting_locked' => 'getMeetingLocked',
        'mute_all' => 'getMuteAll',
        'only_enterprise_user_allowed' => 'getOnlyEnterpriseUserAllowed',
        'operator_id' => 'getOperatorId',
        'operator_id_type' => 'getOperatorIdType',
        'participant_join_mute' => 'getParticipantJoinMute',
        'play_ivr_on_join' => 'getPlayIvrOnJoin',
        'share_screen' => 'getShareScreen'
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
            'allow_chat' => $this->allowChat,
            'allow_unmute_by_self' => $this->allowUnmuteBySelf,
            'auto_waiting_room' => $this->autoWaitingRoom,
            'enable_red_envelope' => $this->enableRedEnvelope,
            'hide_meeting_code_password' => $this->hideMeetingCodePassword,
            'instanceid' => $this->instanceid,
            'meeting_locked' => $this->meetingLocked,
            'mute_all' => $this->muteAll,
            'only_enterprise_user_allowed' => $this->onlyEnterpriseUserAllowed,
            'operator_id' => $this->operatorId,
            'operator_id_type' => $this->operatorIdType,
            'participant_join_mute' => $this->participantJoinMute,
            'play_ivr_on_join' => $this->playIvrOnJoin,
            'share_screen' => $this->shareScreen,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

