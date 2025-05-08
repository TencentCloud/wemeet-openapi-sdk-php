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


class V1RealControlMeetingsMeetingIdMutesPutRequest implements ModelInterface, \JsonSerializable
{
    /**
     * 用户的终端设备类型： 0：PSTN 1：PC 2：Mac 3：Android 4：iOS 5：Web 6：iPad 7：Android Pad 8：小程序 9：voip、sip 设备 10：linux 20：Rooms for Touch Windows 21：Rooms for Touch MacOS 22：Rooms for Touch Android 30：Controller for Touch Windows 32：Controller for Touch Android 33：Controller for Touch iOS
    * 类型：
     */
    protected $instanceid;
    /**
     * 是否静音： true：静音 false：解除静音
    * 类型：
     */
    protected $mute;
    /**
    * 类型：V1RealControlMeetingsMeetingIdMutesPutRequestUser
     */
    protected $user;

    /**
     * 操作者 ID。 1：operator_id 必须与 operator_id_type 配合使用。根据 operator_id_type 的值，operator_id 代表不同类型。 2：接口输入参数如果需要传用户 ID 时，operator_id 和 uuid 不可以同时为空，两个参数如果都传了以 operator_id 为准。 3：如果 operator_id_type=2，operator_id 必须和公共参数的 openid 一致。
    * 类型：string
     */
    protected $operatorId = null;

    /**
     * 操作者ID的类型：2:openid 4: ms_open_id
    * 类型：int
     */
    protected $operatorIdType = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['instanceid'])) {
            $this->instanceid = $jsonArray['instanceid'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter instanceid');
        }
        if (isset($jsonArray['mute'])) {
            $this->mute = $jsonArray['mute'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter mute');
        }
        if (isset($jsonArray['user'])) {
            $this->user = new _WemeetopenapiservicemeetingControlmodelV1RealControlMeetingsMeetingIdMutesPutRequestUser($jsonArray['user']);
        } else {
            throw new \InvalidArgumentException('Missing required parameter user');
        }
        if (isset($jsonArray['operator_id'])) {
            $this->operatorId = $jsonArray['operator_id'];
        }
        if (isset($jsonArray['operator_id_type'])) {
            $this->operatorIdType = $jsonArray['operator_id_type'];
        }
    }

    public function instanceid(int $instanceid): V1RealControlMeetingsMeetingIdMutesPutRequest {
        $this->instanceid = $instanceid;
        return $this;
    }

    public function getInstanceid() {
        return $this->instanceid;
    }

    public function setInstanceid(int $instanceid) {
        $this->instanceid = $instanceid;
    }
    public function mute(bool $mute): V1RealControlMeetingsMeetingIdMutesPutRequest {
        $this->mute = $mute;
        return $this;
    }

    public function getMute() {
        return $this->mute;
    }

    public function setMute(bool $mute) {
        $this->mute = $mute;
    }
    public function operatorId(string $operatorId): V1RealControlMeetingsMeetingIdMutesPutRequest {
        $this->operatorId = $operatorId;
        return $this;
    }

    public function getOperatorId() {
        return $this->operatorId;
    }

    public function setOperatorId(string $operatorId) {
        $this->operatorId = $operatorId;
    }
    public function operatorIdType(int $operatorIdType): V1RealControlMeetingsMeetingIdMutesPutRequest {
        $this->operatorIdType = $operatorIdType;
        return $this;
    }

    public function getOperatorIdType() {
        return $this->operatorIdType;
    }

    public function setOperatorIdType(int $operatorIdType) {
        $this->operatorIdType = $operatorIdType;
    }
    public function user(V1RealControlMeetingsMeetingIdMutesPutRequestUser $user): V1RealControlMeetingsMeetingIdMutesPutRequest {
        $this->user = $user;
        return $this;
    }

    public function getUser() {
        return $this->user;
    }

    public function setUser(V1RealControlMeetingsMeetingIdMutesPutRequestUser $user) {
        $this->user = $user;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'instanceid' => 'int',
        'mute' => 'bool',
        'operator_id' => 'string',
        'operator_id_type' => 'int',
        'user' => '\wemeet\openapi\service\meeting_control\model\V1RealControlMeetingsMeetingIdMutesPutRequestUser'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'instanceid' => 'int64',
        'mute' => null,
        'operator_id' => null,
        'operator_id_type' => 'int64',
        'user' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'instanceid' => false,
        'mute' => false,
        'operator_id' => false,
        'operator_id_type' => false,
        'user' => false
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
        'instanceid' => 'instanceid',
        'mute' => 'mute',
        'operator_id' => 'operator_id',
        'operator_id_type' => 'operator_id_type',
        'user' => 'user'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'instanceid' => 'setInstanceid',
        'mute' => 'setMute',
        'operator_id' => 'setOperatorId',
        'operator_id_type' => 'setOperatorIdType',
        'user' => 'setUser'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'instanceid' => 'getInstanceid',
        'mute' => 'getMute',
        'operator_id' => 'getOperatorId',
        'operator_id_type' => 'getOperatorIdType',
        'user' => 'getUser'
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
            'instanceid' => $this->instanceid,
            'mute' => $this->mute,
            'operator_id' => $this->operatorId,
            'operator_id_type' => $this->operatorIdType,
            'user' => $this->user,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

