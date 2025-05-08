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


class V1PmiMeetingsPmiConfigPutRequest implements ModelInterface, \JsonSerializable
{
    /**
     * 设备id
    * 类型：
     */
    protected $instanceid;
    /**
     * 根据type类型传相应内容
    * 类型：
     */
    protected $operatorId;
    /**
     * 操作者ID类型，1 - userid
    * 类型：
     */
    protected $operatorIdType;

    /**
     * 是否允许成员在主持人进会前加入会议
    * 类型：bool
     */
    protected $allowInBeforeHost = null;

    /**
     * 是否允许成员多端入会
    * 类型：bool
     */
    protected $allowMultiDevice = null;

    /**
     * 是否开启等候室
    * 类型：bool
     */
    protected $autoInWaitingRoom = null;

    /**
     * 禁止笔记截屏，true-禁止，false-不禁止。当水印参数开启时生效
    * 类型：bool
     */
    protected $disableNoteCapture = null;

    /**
     * 是否需要密码
    * 类型：bool
     */
    protected $enablePassword = null;

    /**
     * 指定主持人列表
    * 类型：\wemeet\openapi\service\user_manager\model\V1PmiMeetingsPmiConfigPutRequestHostsInner[]
     */
    protected $hosts = null;

    /**
     * 成员入会静音选项，0-关闭，1-开启，2-超过6人开启
    * 类型：int
     */
    protected $muteEnableTypeJoin = null;

    /**
     * 是否仅企业内部成员可入会
    * 类型：bool
     */
    protected $onlyEnterpriseUserAllowed = null;

    /**
     * 个人会议室名称，最大支持18个汉字或36个英文字母。
    * 类型：string
     */
    protected $pmiName = null;

    /**
     * 入会密码
    * 类型：string
     */
    protected $pmiPassword = null;

    /**
     * 水印样式。当水印参数为开启时，此参数才生效。 0：单排 1：多排
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
        if (isset($jsonArray['instanceid'])) {
            $this->instanceid = $jsonArray['instanceid'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter instanceid');
        }
        if (isset($jsonArray['operator_id'])) {
            $this->operatorId = $jsonArray['operator_id'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter operator_id');
        }
        if (isset($jsonArray['operator_id_type'])) {
            $this->operatorIdType = $jsonArray['operator_id_type'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter operator_id_type');
        }
        if (isset($jsonArray['allow_in_before_host'])) {
            $this->allowInBeforeHost = $jsonArray['allow_in_before_host'];
        }
        if (isset($jsonArray['allow_multi_device'])) {
            $this->allowMultiDevice = $jsonArray['allow_multi_device'];
        }
        if (isset($jsonArray['auto_in_waiting_room'])) {
            $this->autoInWaitingRoom = $jsonArray['auto_in_waiting_room'];
        }
        if (isset($jsonArray['disable_note_capture'])) {
            $this->disableNoteCapture = $jsonArray['disable_note_capture'];
        }
        if (isset($jsonArray['enable_password'])) {
            $this->enablePassword = $jsonArray['enable_password'];
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

    public function allowInBeforeHost(bool $allowInBeforeHost): V1PmiMeetingsPmiConfigPutRequest {
        $this->allowInBeforeHost = $allowInBeforeHost;
        return $this;
    }

    public function getAllowInBeforeHost() {
        return $this->allowInBeforeHost;
    }

    public function setAllowInBeforeHost(bool $allowInBeforeHost) {
        $this->allowInBeforeHost = $allowInBeforeHost;
    }
    public function allowMultiDevice(bool $allowMultiDevice): V1PmiMeetingsPmiConfigPutRequest {
        $this->allowMultiDevice = $allowMultiDevice;
        return $this;
    }

    public function getAllowMultiDevice() {
        return $this->allowMultiDevice;
    }

    public function setAllowMultiDevice(bool $allowMultiDevice) {
        $this->allowMultiDevice = $allowMultiDevice;
    }
    public function autoInWaitingRoom(bool $autoInWaitingRoom): V1PmiMeetingsPmiConfigPutRequest {
        $this->autoInWaitingRoom = $autoInWaitingRoom;
        return $this;
    }

    public function getAutoInWaitingRoom() {
        return $this->autoInWaitingRoom;
    }

    public function setAutoInWaitingRoom(bool $autoInWaitingRoom) {
        $this->autoInWaitingRoom = $autoInWaitingRoom;
    }
    public function disableNoteCapture(bool $disableNoteCapture): V1PmiMeetingsPmiConfigPutRequest {
        $this->disableNoteCapture = $disableNoteCapture;
        return $this;
    }

    public function getDisableNoteCapture() {
        return $this->disableNoteCapture;
    }

    public function setDisableNoteCapture(bool $disableNoteCapture) {
        $this->disableNoteCapture = $disableNoteCapture;
    }
    public function enablePassword(bool $enablePassword): V1PmiMeetingsPmiConfigPutRequest {
        $this->enablePassword = $enablePassword;
        return $this;
    }

    public function getEnablePassword() {
        return $this->enablePassword;
    }

    public function setEnablePassword(bool $enablePassword) {
        $this->enablePassword = $enablePassword;
    }
    public function hosts(array $hosts): V1PmiMeetingsPmiConfigPutRequest {
        $this->hosts = $hosts;
        return $this;
    }

    public function getHosts() {
        return $this->hosts;
    }

    public function setHosts(array $hosts) {
        $this->hosts = $hosts;
    }
    public function instanceid(int $instanceid): V1PmiMeetingsPmiConfigPutRequest {
        $this->instanceid = $instanceid;
        return $this;
    }

    public function getInstanceid() {
        return $this->instanceid;
    }

    public function setInstanceid(int $instanceid) {
        $this->instanceid = $instanceid;
    }
    public function muteEnableTypeJoin(int $muteEnableTypeJoin): V1PmiMeetingsPmiConfigPutRequest {
        $this->muteEnableTypeJoin = $muteEnableTypeJoin;
        return $this;
    }

    public function getMuteEnableTypeJoin() {
        return $this->muteEnableTypeJoin;
    }

    public function setMuteEnableTypeJoin(int $muteEnableTypeJoin) {
        $this->muteEnableTypeJoin = $muteEnableTypeJoin;
    }
    public function onlyEnterpriseUserAllowed(bool $onlyEnterpriseUserAllowed): V1PmiMeetingsPmiConfigPutRequest {
        $this->onlyEnterpriseUserAllowed = $onlyEnterpriseUserAllowed;
        return $this;
    }

    public function getOnlyEnterpriseUserAllowed() {
        return $this->onlyEnterpriseUserAllowed;
    }

    public function setOnlyEnterpriseUserAllowed(bool $onlyEnterpriseUserAllowed) {
        $this->onlyEnterpriseUserAllowed = $onlyEnterpriseUserAllowed;
    }
    public function operatorId(string $operatorId): V1PmiMeetingsPmiConfigPutRequest {
        $this->operatorId = $operatorId;
        return $this;
    }

    public function getOperatorId() {
        return $this->operatorId;
    }

    public function setOperatorId(string $operatorId) {
        $this->operatorId = $operatorId;
    }
    public function operatorIdType(int $operatorIdType): V1PmiMeetingsPmiConfigPutRequest {
        $this->operatorIdType = $operatorIdType;
        return $this;
    }

    public function getOperatorIdType() {
        return $this->operatorIdType;
    }

    public function setOperatorIdType(int $operatorIdType) {
        $this->operatorIdType = $operatorIdType;
    }
    public function pmiName(string $pmiName): V1PmiMeetingsPmiConfigPutRequest {
        $this->pmiName = $pmiName;
        return $this;
    }

    public function getPmiName() {
        return $this->pmiName;
    }

    public function setPmiName(string $pmiName) {
        $this->pmiName = $pmiName;
    }
    public function pmiPassword(string $pmiPassword): V1PmiMeetingsPmiConfigPutRequest {
        $this->pmiPassword = $pmiPassword;
        return $this;
    }

    public function getPmiPassword() {
        return $this->pmiPassword;
    }

    public function setPmiPassword(string $pmiPassword) {
        $this->pmiPassword = $pmiPassword;
    }
    public function waterMarkType(int $waterMarkType): V1PmiMeetingsPmiConfigPutRequest {
        $this->waterMarkType = $waterMarkType;
        return $this;
    }

    public function getWaterMarkType() {
        return $this->waterMarkType;
    }

    public function setWaterMarkType(int $waterMarkType) {
        $this->waterMarkType = $waterMarkType;
    }
    public function watermark(bool $watermark): V1PmiMeetingsPmiConfigPutRequest {
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
        'allow_multi_device' => 'bool',
        'auto_in_waiting_room' => 'bool',
        'disable_note_capture' => 'bool',
        'enable_password' => 'bool',
        'hosts' => '\wemeet\openapi\service\user_manager\model\V1PmiMeetingsPmiConfigPutRequestHostsInner[]',
        'instanceid' => 'int',
        'mute_enable_type_join' => 'int',
        'only_enterprise_user_allowed' => 'bool',
        'operator_id' => 'string',
        'operator_id_type' => 'int',
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
        'allow_multi_device' => null,
        'auto_in_waiting_room' => null,
        'disable_note_capture' => null,
        'enable_password' => null,
        'hosts' => null,
        'instanceid' => 'int64',
        'mute_enable_type_join' => 'int64',
        'only_enterprise_user_allowed' => null,
        'operator_id' => null,
        'operator_id_type' => 'int64',
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
        'allow_multi_device' => false,
        'auto_in_waiting_room' => false,
        'disable_note_capture' => false,
        'enable_password' => false,
        'hosts' => false,
        'instanceid' => false,
        'mute_enable_type_join' => false,
        'only_enterprise_user_allowed' => false,
        'operator_id' => false,
        'operator_id_type' => false,
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
        'allow_multi_device' => 'allow_multi_device',
        'auto_in_waiting_room' => 'auto_in_waiting_room',
        'disable_note_capture' => 'disable_note_capture',
        'enable_password' => 'enable_password',
        'hosts' => 'hosts',
        'instanceid' => 'instanceid',
        'mute_enable_type_join' => 'mute_enable_type_join',
        'only_enterprise_user_allowed' => 'only_enterprise_user_allowed',
        'operator_id' => 'operator_id',
        'operator_id_type' => 'operator_id_type',
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
        'allow_multi_device' => 'setAllowMultiDevice',
        'auto_in_waiting_room' => 'setAutoInWaitingRoom',
        'disable_note_capture' => 'setDisableNoteCapture',
        'enable_password' => 'setEnablePassword',
        'hosts' => 'setHosts',
        'instanceid' => 'setInstanceid',
        'mute_enable_type_join' => 'setMuteEnableTypeJoin',
        'only_enterprise_user_allowed' => 'setOnlyEnterpriseUserAllowed',
        'operator_id' => 'setOperatorId',
        'operator_id_type' => 'setOperatorIdType',
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
        'allow_multi_device' => 'getAllowMultiDevice',
        'auto_in_waiting_room' => 'getAutoInWaitingRoom',
        'disable_note_capture' => 'getDisableNoteCapture',
        'enable_password' => 'getEnablePassword',
        'hosts' => 'getHosts',
        'instanceid' => 'getInstanceid',
        'mute_enable_type_join' => 'getMuteEnableTypeJoin',
        'only_enterprise_user_allowed' => 'getOnlyEnterpriseUserAllowed',
        'operator_id' => 'getOperatorId',
        'operator_id_type' => 'getOperatorIdType',
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
            'allow_multi_device' => $this->allowMultiDevice,
            'auto_in_waiting_room' => $this->autoInWaitingRoom,
            'disable_note_capture' => $this->disableNoteCapture,
            'enable_password' => $this->enablePassword,
            'hosts' => $this->hosts,
            'instanceid' => $this->instanceid,
            'mute_enable_type_join' => $this->muteEnableTypeJoin,
            'only_enterprise_user_allowed' => $this->onlyEnterpriseUserAllowed,
            'operator_id' => $this->operatorId,
            'operator_id_type' => $this->operatorIdType,
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

