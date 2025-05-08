<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.4
 */
namespace wemeet\openapi\service\user_manager\model;

use wemeet\openapi\core\xhttp\ModelInterface;


class V1PmiMeetingsPmiConfigGet200Response implements ModelInterface, \JsonSerializable
{

    /**
     * 是否允许成员在主持人前入会
    * 类型：bool
     */
    protected $allowInBeforeHost = null;

    /**
     * 是否开启等候室
    * 类型：bool
     */
    protected $allowInWaitingRoom = null;

    /**
     * 是否允许多端入会
    * 类型：bool
     */
    protected $allowMultiDevice = null;

    /**
     * 是否禁止笔记截屏
    * 类型：bool
     */
    protected $disableNoteCapture = null;

    /**
     * 指定主持人列表
    * 类型：\wemeet\openapi\service\user_manager\model\V1PmiMeetingsPmiConfigGet200ResponseHostsInner[]
     */
    protected $hosts = null;

    /**
     * 成员入会静音设置，0-关闭，1-开启，2-超过6人后自动开启
    * 类型：int
     */
    protected $muteEnableTypeJoin = null;

    /**
     * 是否仅企业内部成员可入会
    * 类型：bool
     */
    protected $onlyEnterpriseUserAllowed = null;

    /**
     * 个人会议号
    * 类型：string
     */
    protected $pmiCode = null;

    /**
     * 个人会议室名称
    * 类型：string
     */
    protected $pmiName = null;

    /**
     * 个人会议号密码，经过base64处理
    * 类型：string
     */
    protected $pmiPassword = null;

    /**
     * 水印样式，0-单排，1-多排
    * 类型：int
     */
    protected $waterMarkType = null;

    /**
     * 是否开启会议水印
    * 类型：bool
     */
    protected $watermark = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['allow_in_before_host'])) {
            $this->allowInBeforeHost = $jsonArray['allow_in_before_host'];
        }
        if (isset($jsonArray['allow_in_waiting_room'])) {
            $this->allowInWaitingRoom = $jsonArray['allow_in_waiting_room'];
        }
        if (isset($jsonArray['allow_multi_device'])) {
            $this->allowMultiDevice = $jsonArray['allow_multi_device'];
        }
        if (isset($jsonArray['disable_note_capture'])) {
            $this->disableNoteCapture = $jsonArray['disable_note_capture'];
        }
        if (isset($jsonArray['hosts'])) {
            $this->hosts = $jsonArray['hosts'];
        }
        if (isset($jsonArray['mute_enable_type_join'])) {
            $this->muteEnableTypeJoin = $jsonArray['mute_enable_type_join'];
        }
        if (isset($jsonArray['only_enterprise_user_allowed'])) {
            $this->onlyEnterpriseUserAllowed = $jsonArray['only_enterprise_user_allowed'];
        }
        if (isset($jsonArray['pmi_code'])) {
            $this->pmiCode = $jsonArray['pmi_code'];
        }
        if (isset($jsonArray['pmi_name'])) {
            $this->pmiName = $jsonArray['pmi_name'];
        }
        if (isset($jsonArray['pmi_password'])) {
            $this->pmiPassword = $jsonArray['pmi_password'];
        }
        if (isset($jsonArray['water_mark_type'])) {
            $this->waterMarkType = $jsonArray['water_mark_type'];
        }
        if (isset($jsonArray['watermark'])) {
            $this->watermark = $jsonArray['watermark'];
        }
    }

    public function allowInBeforeHost(bool $allowInBeforeHost): V1PmiMeetingsPmiConfigGet200Response {
        $this->allowInBeforeHost = $allowInBeforeHost;
        return $this;
    }

    public function getAllowInBeforeHost() {
        return $this->allowInBeforeHost;
    }

    public function setAllowInBeforeHost(bool $allowInBeforeHost) {
        $this->allowInBeforeHost = $allowInBeforeHost;
    }
    public function allowInWaitingRoom(bool $allowInWaitingRoom): V1PmiMeetingsPmiConfigGet200Response {
        $this->allowInWaitingRoom = $allowInWaitingRoom;
        return $this;
    }

    public function getAllowInWaitingRoom() {
        return $this->allowInWaitingRoom;
    }

    public function setAllowInWaitingRoom(bool $allowInWaitingRoom) {
        $this->allowInWaitingRoom = $allowInWaitingRoom;
    }
    public function allowMultiDevice(bool $allowMultiDevice): V1PmiMeetingsPmiConfigGet200Response {
        $this->allowMultiDevice = $allowMultiDevice;
        return $this;
    }

    public function getAllowMultiDevice() {
        return $this->allowMultiDevice;
    }

    public function setAllowMultiDevice(bool $allowMultiDevice) {
        $this->allowMultiDevice = $allowMultiDevice;
    }
    public function disableNoteCapture(bool $disableNoteCapture): V1PmiMeetingsPmiConfigGet200Response {
        $this->disableNoteCapture = $disableNoteCapture;
        return $this;
    }

    public function getDisableNoteCapture() {
        return $this->disableNoteCapture;
    }

    public function setDisableNoteCapture(bool $disableNoteCapture) {
        $this->disableNoteCapture = $disableNoteCapture;
    }
    public function hosts(array $hosts): V1PmiMeetingsPmiConfigGet200Response {
        $this->hosts = $hosts;
        return $this;
    }

    public function getHosts() {
        return $this->hosts;
    }

    public function setHosts(array $hosts) {
        $this->hosts = $hosts;
    }
    public function muteEnableTypeJoin(int $muteEnableTypeJoin): V1PmiMeetingsPmiConfigGet200Response {
        $this->muteEnableTypeJoin = $muteEnableTypeJoin;
        return $this;
    }

    public function getMuteEnableTypeJoin() {
        return $this->muteEnableTypeJoin;
    }

    public function setMuteEnableTypeJoin(int $muteEnableTypeJoin) {
        $this->muteEnableTypeJoin = $muteEnableTypeJoin;
    }
    public function onlyEnterpriseUserAllowed(bool $onlyEnterpriseUserAllowed): V1PmiMeetingsPmiConfigGet200Response {
        $this->onlyEnterpriseUserAllowed = $onlyEnterpriseUserAllowed;
        return $this;
    }

    public function getOnlyEnterpriseUserAllowed() {
        return $this->onlyEnterpriseUserAllowed;
    }

    public function setOnlyEnterpriseUserAllowed(bool $onlyEnterpriseUserAllowed) {
        $this->onlyEnterpriseUserAllowed = $onlyEnterpriseUserAllowed;
    }
    public function pmiCode(string $pmiCode): V1PmiMeetingsPmiConfigGet200Response {
        $this->pmiCode = $pmiCode;
        return $this;
    }

    public function getPmiCode() {
        return $this->pmiCode;
    }

    public function setPmiCode(string $pmiCode) {
        $this->pmiCode = $pmiCode;
    }
    public function pmiName(string $pmiName): V1PmiMeetingsPmiConfigGet200Response {
        $this->pmiName = $pmiName;
        return $this;
    }

    public function getPmiName() {
        return $this->pmiName;
    }

    public function setPmiName(string $pmiName) {
        $this->pmiName = $pmiName;
    }
    public function pmiPassword(string $pmiPassword): V1PmiMeetingsPmiConfigGet200Response {
        $this->pmiPassword = $pmiPassword;
        return $this;
    }

    public function getPmiPassword() {
        return $this->pmiPassword;
    }

    public function setPmiPassword(string $pmiPassword) {
        $this->pmiPassword = $pmiPassword;
    }
    public function waterMarkType(int $waterMarkType): V1PmiMeetingsPmiConfigGet200Response {
        $this->waterMarkType = $waterMarkType;
        return $this;
    }

    public function getWaterMarkType() {
        return $this->waterMarkType;
    }

    public function setWaterMarkType(int $waterMarkType) {
        $this->waterMarkType = $waterMarkType;
    }
    public function watermark(bool $watermark): V1PmiMeetingsPmiConfigGet200Response {
        $this->watermark = $watermark;
        return $this;
    }

    public function getWatermark() {
        return $this->watermark;
    }

    public function setWatermark(bool $watermark) {
        $this->watermark = $watermark;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'allow_in_before_host' => 'bool',
        'allow_in_waiting_room' => 'bool',
        'allow_multi_device' => 'bool',
        'disable_note_capture' => 'bool',
        'hosts' => '\wemeet\openapi\service\user_manager\model\V1PmiMeetingsPmiConfigGet200ResponseHostsInner[]',
        'mute_enable_type_join' => 'int',
        'only_enterprise_user_allowed' => 'bool',
        'pmi_code' => 'string',
        'pmi_name' => 'string',
        'pmi_password' => 'string',
        'water_mark_type' => 'int',
        'watermark' => 'bool'
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
        'allow_in_waiting_room' => null,
        'allow_multi_device' => null,
        'disable_note_capture' => null,
        'hosts' => null,
        'mute_enable_type_join' => 'int64',
        'only_enterprise_user_allowed' => null,
        'pmi_code' => null,
        'pmi_name' => null,
        'pmi_password' => null,
        'water_mark_type' => 'int64',
        'watermark' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'allow_in_before_host' => false,
        'allow_in_waiting_room' => false,
        'allow_multi_device' => false,
        'disable_note_capture' => false,
        'hosts' => false,
        'mute_enable_type_join' => false,
        'only_enterprise_user_allowed' => false,
        'pmi_code' => false,
        'pmi_name' => false,
        'pmi_password' => false,
        'water_mark_type' => false,
        'watermark' => false
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
        'allow_in_waiting_room' => 'allow_in_waiting_room',
        'allow_multi_device' => 'allow_multi_device',
        'disable_note_capture' => 'disable_note_capture',
        'hosts' => 'hosts',
        'mute_enable_type_join' => 'mute_enable_type_join',
        'only_enterprise_user_allowed' => 'only_enterprise_user_allowed',
        'pmi_code' => 'pmi_code',
        'pmi_name' => 'pmi_name',
        'pmi_password' => 'pmi_password',
        'water_mark_type' => 'water_mark_type',
        'watermark' => 'watermark'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allow_in_before_host' => 'setAllowInBeforeHost',
        'allow_in_waiting_room' => 'setAllowInWaitingRoom',
        'allow_multi_device' => 'setAllowMultiDevice',
        'disable_note_capture' => 'setDisableNoteCapture',
        'hosts' => 'setHosts',
        'mute_enable_type_join' => 'setMuteEnableTypeJoin',
        'only_enterprise_user_allowed' => 'setOnlyEnterpriseUserAllowed',
        'pmi_code' => 'setPmiCode',
        'pmi_name' => 'setPmiName',
        'pmi_password' => 'setPmiPassword',
        'water_mark_type' => 'setWaterMarkType',
        'watermark' => 'setWatermark'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allow_in_before_host' => 'getAllowInBeforeHost',
        'allow_in_waiting_room' => 'getAllowInWaitingRoom',
        'allow_multi_device' => 'getAllowMultiDevice',
        'disable_note_capture' => 'getDisableNoteCapture',
        'hosts' => 'getHosts',
        'mute_enable_type_join' => 'getMuteEnableTypeJoin',
        'only_enterprise_user_allowed' => 'getOnlyEnterpriseUserAllowed',
        'pmi_code' => 'getPmiCode',
        'pmi_name' => 'getPmiName',
        'pmi_password' => 'getPmiPassword',
        'water_mark_type' => 'getWaterMarkType',
        'watermark' => 'getWatermark'
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
            'allow_in_waiting_room' => $this->allowInWaitingRoom,
            'allow_multi_device' => $this->allowMultiDevice,
            'disable_note_capture' => $this->disableNoteCapture,
            'hosts' => $this->hosts,
            'mute_enable_type_join' => $this->muteEnableTypeJoin,
            'only_enterprise_user_allowed' => $this->onlyEnterpriseUserAllowed,
            'pmi_code' => $this->pmiCode,
            'pmi_name' => $this->pmiName,
            'pmi_password' => $this->pmiPassword,
            'water_mark_type' => $this->waterMarkType,
            'watermark' => $this->watermark,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

