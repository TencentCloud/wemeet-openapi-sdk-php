<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.2
 */
namespace wemeet\openapi\service\layout\model;

use wemeet\openapi\core\xhttp\ModelInterface;


class V1MeetingsMeetingIdApplyingLayoutPutRequest implements ModelInterface, \JsonSerializable
{
    /**
     * 设备类型 ID 0：PSTN 1：PC 2：Mac 3：Android 4：iOS 5：Web 6：iPad 7：Android Pad 8：小程序 9：voip、sip 设备 10：linux 20：Rooms for Touch Windows 21：Rooms for Touch MacOS 22：Rooms for Touch Android 30：Controller for Touch Windows 32：Controller for Touch Android 33：Controller for Touch iOS
    * 类型：
     */
    protected $instanceid;
    /**
     * 操作人ID
    * 类型：
     */
    protected $operatorId;
    /**
     * 操作人id类型，1 :userid，4 :ms_open_id
    * 类型：
     */
    protected $operatorIdType;

    /**
     * 选择应用的布局 ID （若送空\"\"，表示恢复成当前会议的默认布局）  备注：应用布局的优先级从高到低为： ● 个性布局 ● 自定义布局 ● 默认布局（MRA不支持同框模式， 如果会议设置为同框模式， MRA应用默认布局））
    * 类型：string
     */
    protected $layoutId = null;

    /**
     * 用户列表对象数组。如果该字段为空， 为会议设置高级自定义布局；如果该字段携带用户， 则只为指定用户设置个性布局。 单次最多支持20个用户。
    * 类型：\wemeet\openapi\service\layout\model\V1MeetingsMeetingIdApplyingLayoutPutRequestUserListInner[]
     */
    protected $userList = null;

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
        if (isset($jsonArray['layout_id'])) {
            $this->layoutId = $jsonArray['layout_id'];
        }
        if (isset($jsonArray['user_list'])) {
            $this->userList = $jsonArray['user_list'];
        }
    }

    public function instanceid(int $instanceid): V1MeetingsMeetingIdApplyingLayoutPutRequest {
        $this->instanceid = $instanceid;
        return $this;
    }

    public function getInstanceid() {
        return $this->instanceid;
    }

    public function setInstanceid(int $instanceid) {
        $this->instanceid = $instanceid;
    }
    public function layoutId(string $layoutId): V1MeetingsMeetingIdApplyingLayoutPutRequest {
        $this->layoutId = $layoutId;
        return $this;
    }

    public function getLayoutId() {
        return $this->layoutId;
    }

    public function setLayoutId(string $layoutId) {
        $this->layoutId = $layoutId;
    }
    public function operatorId(string $operatorId): V1MeetingsMeetingIdApplyingLayoutPutRequest {
        $this->operatorId = $operatorId;
        return $this;
    }

    public function getOperatorId() {
        return $this->operatorId;
    }

    public function setOperatorId(string $operatorId) {
        $this->operatorId = $operatorId;
    }
    public function operatorIdType(int $operatorIdType): V1MeetingsMeetingIdApplyingLayoutPutRequest {
        $this->operatorIdType = $operatorIdType;
        return $this;
    }

    public function getOperatorIdType() {
        return $this->operatorIdType;
    }

    public function setOperatorIdType(int $operatorIdType) {
        $this->operatorIdType = $operatorIdType;
    }
    public function userList(array $userList): V1MeetingsMeetingIdApplyingLayoutPutRequest {
        $this->userList = $userList;
        return $this;
    }

    public function getUserList() {
        return $this->userList;
    }

    public function setUserList(array $userList) {
        $this->userList = $userList;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'instanceid' => 'int',
        'layout_id' => 'string',
        'operator_id' => 'string',
        'operator_id_type' => 'int',
        'user_list' => '\wemeet\openapi\service\layout\model\V1MeetingsMeetingIdApplyingLayoutPutRequestUserListInner[]'
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
        'layout_id' => null,
        'operator_id' => null,
        'operator_id_type' => 'int64',
        'user_list' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'instanceid' => false,
        'layout_id' => false,
        'operator_id' => false,
        'operator_id_type' => false,
        'user_list' => false
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
        'layout_id' => 'layout_id',
        'operator_id' => 'operator_id',
        'operator_id_type' => 'operator_id_type',
        'user_list' => 'user_list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'instanceid' => 'setInstanceid',
        'layout_id' => 'setLayoutId',
        'operator_id' => 'setOperatorId',
        'operator_id_type' => 'setOperatorIdType',
        'user_list' => 'setUserList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'instanceid' => 'getInstanceid',
        'layout_id' => 'getLayoutId',
        'operator_id' => 'getOperatorId',
        'operator_id_type' => 'getOperatorIdType',
        'user_list' => 'getUserList'
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
            'layout_id' => $this->layoutId,
            'operator_id' => $this->operatorId,
            'operator_id_type' => $this->operatorIdType,
            'user_list' => $this->userList,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

