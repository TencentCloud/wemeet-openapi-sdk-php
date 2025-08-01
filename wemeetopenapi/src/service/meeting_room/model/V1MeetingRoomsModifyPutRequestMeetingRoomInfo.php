<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.7
 */
namespace wemeet\openapi\service\meeting_room\model;

use wemeet\openapi\core\xhttp\ModelInterface;


class V1MeetingRoomsModifyPutRequestMeetingRoomInfo implements ModelInterface, \JsonSerializable
{
    /**
     * 会议室名称。长度不超过36个字符。
    * 类型：
     */
    protected $meetingRoomName;
    /**
     * 会议室类型。 0：rooms 会议室 1：无类型会议室 2：SIP 会议室 4：H.323 会议室
    * 类型：
     */
    protected $meetingRoomType;

    /**
     * 配置管理员密码。 格式要求：输入应为1 - 16位的数字、字母或字符。 依赖说明：若启用管理员密码，此密码不可为空；若不启用，此密码无需输入。
    * 类型：string
     */
    protected $adminPassword = null;

    /**
     * 会议室类型为1时，可选择是否启用管理员密码。 true：启用  false：不启用（默认值）
    * 类型：bool
     */
    protected $adminPasswordEnabled = null;

    /**
     * 建筑。若非输入城市下现有建筑则自动创建该建筑与楼层。长度不超过36个字符或18个汉字。
    * 类型：string
     */
    protected $building = null;

    /**
     * 城市。若非已添加城市则自动创建城市及建筑与楼层。长度不超过36个字符或18个汉字。city、building、floor 需同时传入或都不传入。
    * 类型：string
     */
    protected $city = null;

    /**
     * 描述（base64）。长度不超过1000个字符。
    * 类型：string
     */
    protected $desc = null;

    /**
     * 会议室设备，输入非现有类型内容则无效。设备类型有：TV，投影，会议电话机，MIC，视频电视，PC，无线投屏。
    * 类型：string[]
     */
    protected $device = null;

    /**
     * 楼层。若非输入建筑下现有楼层则自动创建楼层。输入应为数字或字母，长度不超过36个字符。
    * 类型：string
     */
    protected $floor = null;

    /**
     * 标签。非现有标签则自动创建，最多设置10个标签，每个标签不超过40个字。
    * 类型：string[]
     */
    protected $label = null;

    /**
     * 会议室信令地址。会议室类型为2或4时必填写，与mra_register_account 二选一。
    * 类型：string
     */
    protected $mraAddress = null;

    /**
     * SIP/ H.323注册账号。会议室类型为2或4时填写。
    * 类型：string
     */
    protected $mraRegisterAccount = null;

    /**
     * 容纳人数。不超过9位数。
    * 类型：int
     */
    protected $participantNumber = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['meeting_room_name'])) {
            $this->meetingRoomName = $jsonArray['meeting_room_name'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter meeting_room_name');
        }
        if (isset($jsonArray['meeting_room_type'])) {
            $this->meetingRoomType = $jsonArray['meeting_room_type'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter meeting_room_type');
        }
        if (isset($jsonArray['admin_password'])) {
            $this->adminPassword = $jsonArray['admin_password'];
        }
        if (isset($jsonArray['admin_password_enabled'])) {
            $this->adminPasswordEnabled = $jsonArray['admin_password_enabled'];
        }
        if (isset($jsonArray['building'])) {
            $this->building = $jsonArray['building'];
        }
        if (isset($jsonArray['city'])) {
            $this->city = $jsonArray['city'];
        }
        if (isset($jsonArray['desc'])) {
            $this->desc = $jsonArray['desc'];
        }
        if (isset($jsonArray['device'])) {
            $this->device = $jsonArray['device'];
        }
        if (isset($jsonArray['floor'])) {
            $this->floor = $jsonArray['floor'];
        }
        if (isset($jsonArray['label'])) {
            $this->label = $jsonArray['label'];
        }
        if (isset($jsonArray['mra_address'])) {
            $this->mraAddress = $jsonArray['mra_address'];
        }
        if (isset($jsonArray['mra_register_account'])) {
            $this->mraRegisterAccount = $jsonArray['mra_register_account'];
        }
        if (isset($jsonArray['participant_number'])) {
            $this->participantNumber = $jsonArray['participant_number'];
        }
    }

    public function adminPassword(string $adminPassword): V1MeetingRoomsModifyPutRequestMeetingRoomInfo {
        $this->adminPassword = $adminPassword;
        return $this;
    }

    public function getAdminPassword() {
        return $this->adminPassword;
    }

    public function setAdminPassword(string $adminPassword) {
        $this->adminPassword = $adminPassword;
    }
    public function adminPasswordEnabled(bool $adminPasswordEnabled): V1MeetingRoomsModifyPutRequestMeetingRoomInfo {
        $this->adminPasswordEnabled = $adminPasswordEnabled;
        return $this;
    }

    public function getAdminPasswordEnabled() {
        return $this->adminPasswordEnabled;
    }

    public function setAdminPasswordEnabled(bool $adminPasswordEnabled) {
        $this->adminPasswordEnabled = $adminPasswordEnabled;
    }
    public function building(string $building): V1MeetingRoomsModifyPutRequestMeetingRoomInfo {
        $this->building = $building;
        return $this;
    }

    public function getBuilding() {
        return $this->building;
    }

    public function setBuilding(string $building) {
        $this->building = $building;
    }
    public function city(string $city): V1MeetingRoomsModifyPutRequestMeetingRoomInfo {
        $this->city = $city;
        return $this;
    }

    public function getCity() {
        return $this->city;
    }

    public function setCity(string $city) {
        $this->city = $city;
    }
    public function desc(string $desc): V1MeetingRoomsModifyPutRequestMeetingRoomInfo {
        $this->desc = $desc;
        return $this;
    }

    public function getDesc() {
        return $this->desc;
    }

    public function setDesc(string $desc) {
        $this->desc = $desc;
    }
    public function device(array $device): V1MeetingRoomsModifyPutRequestMeetingRoomInfo {
        $this->device = $device;
        return $this;
    }

    public function getDevice() {
        return $this->device;
    }

    public function setDevice(array $device) {
        $this->device = $device;
    }
    public function floor(string $floor): V1MeetingRoomsModifyPutRequestMeetingRoomInfo {
        $this->floor = $floor;
        return $this;
    }

    public function getFloor() {
        return $this->floor;
    }

    public function setFloor(string $floor) {
        $this->floor = $floor;
    }
    public function label(array $label): V1MeetingRoomsModifyPutRequestMeetingRoomInfo {
        $this->label = $label;
        return $this;
    }

    public function getLabel() {
        return $this->label;
    }

    public function setLabel(array $label) {
        $this->label = $label;
    }
    public function meetingRoomName(string $meetingRoomName): V1MeetingRoomsModifyPutRequestMeetingRoomInfo {
        $this->meetingRoomName = $meetingRoomName;
        return $this;
    }

    public function getMeetingRoomName() {
        return $this->meetingRoomName;
    }

    public function setMeetingRoomName(string $meetingRoomName) {
        $this->meetingRoomName = $meetingRoomName;
    }
    public function meetingRoomType(int $meetingRoomType): V1MeetingRoomsModifyPutRequestMeetingRoomInfo {
        $this->meetingRoomType = $meetingRoomType;
        return $this;
    }

    public function getMeetingRoomType() {
        return $this->meetingRoomType;
    }

    public function setMeetingRoomType(int $meetingRoomType) {
        $this->meetingRoomType = $meetingRoomType;
    }
    public function mraAddress(string $mraAddress): V1MeetingRoomsModifyPutRequestMeetingRoomInfo {
        $this->mraAddress = $mraAddress;
        return $this;
    }

    public function getMraAddress() {
        return $this->mraAddress;
    }

    public function setMraAddress(string $mraAddress) {
        $this->mraAddress = $mraAddress;
    }
    public function mraRegisterAccount(string $mraRegisterAccount): V1MeetingRoomsModifyPutRequestMeetingRoomInfo {
        $this->mraRegisterAccount = $mraRegisterAccount;
        return $this;
    }

    public function getMraRegisterAccount() {
        return $this->mraRegisterAccount;
    }

    public function setMraRegisterAccount(string $mraRegisterAccount) {
        $this->mraRegisterAccount = $mraRegisterAccount;
    }
    public function participantNumber(int $participantNumber): V1MeetingRoomsModifyPutRequestMeetingRoomInfo {
        $this->participantNumber = $participantNumber;
        return $this;
    }

    public function getParticipantNumber() {
        return $this->participantNumber;
    }

    public function setParticipantNumber(int $participantNumber) {
        $this->participantNumber = $participantNumber;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'admin_password' => 'string',
        'admin_password_enabled' => 'bool',
        'building' => 'string',
        'city' => 'string',
        'desc' => 'string',
        'device' => 'string[]',
        'floor' => 'string',
        'label' => 'string[]',
        'meeting_room_name' => 'string',
        'meeting_room_type' => 'int',
        'mra_address' => 'string',
        'mra_register_account' => 'string',
        'participant_number' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'admin_password' => null,
        'admin_password_enabled' => null,
        'building' => null,
        'city' => null,
        'desc' => null,
        'device' => null,
        'floor' => null,
        'label' => null,
        'meeting_room_name' => null,
        'meeting_room_type' => 'int64',
        'mra_address' => null,
        'mra_register_account' => null,
        'participant_number' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'admin_password' => false,
        'admin_password_enabled' => false,
        'building' => false,
        'city' => false,
        'desc' => false,
        'device' => false,
        'floor' => false,
        'label' => false,
        'meeting_room_name' => false,
        'meeting_room_type' => false,
        'mra_address' => false,
        'mra_register_account' => false,
        'participant_number' => false
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
        'admin_password' => 'admin_password',
        'admin_password_enabled' => 'admin_password_enabled',
        'building' => 'building',
        'city' => 'city',
        'desc' => 'desc',
        'device' => 'device',
        'floor' => 'floor',
        'label' => 'label',
        'meeting_room_name' => 'meeting_room_name',
        'meeting_room_type' => 'meeting_room_type',
        'mra_address' => 'mra_address',
        'mra_register_account' => 'mra_register_account',
        'participant_number' => 'participant_number'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'admin_password' => 'setAdminPassword',
        'admin_password_enabled' => 'setAdminPasswordEnabled',
        'building' => 'setBuilding',
        'city' => 'setCity',
        'desc' => 'setDesc',
        'device' => 'setDevice',
        'floor' => 'setFloor',
        'label' => 'setLabel',
        'meeting_room_name' => 'setMeetingRoomName',
        'meeting_room_type' => 'setMeetingRoomType',
        'mra_address' => 'setMraAddress',
        'mra_register_account' => 'setMraRegisterAccount',
        'participant_number' => 'setParticipantNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'admin_password' => 'getAdminPassword',
        'admin_password_enabled' => 'getAdminPasswordEnabled',
        'building' => 'getBuilding',
        'city' => 'getCity',
        'desc' => 'getDesc',
        'device' => 'getDevice',
        'floor' => 'getFloor',
        'label' => 'getLabel',
        'meeting_room_name' => 'getMeetingRoomName',
        'meeting_room_type' => 'getMeetingRoomType',
        'mra_address' => 'getMraAddress',
        'mra_register_account' => 'getMraRegisterAccount',
        'participant_number' => 'getParticipantNumber'
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
            'admin_password' => $this->adminPassword,
            'admin_password_enabled' => $this->adminPasswordEnabled,
            'building' => $this->building,
            'city' => $this->city,
            'desc' => $this->desc,
            'device' => $this->device,
            'floor' => $this->floor,
            'label' => $this->label,
            'meeting_room_name' => $this->meetingRoomName,
            'meeting_room_type' => $this->meetingRoomType,
            'mra_address' => $this->mraAddress,
            'mra_register_account' => $this->mraRegisterAccount,
            'participant_number' => $this->participantNumber,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

