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


class V1MeetingsMeetingIdEnrollIdsPostRequest implements ModelInterface, \JsonSerializable
{
    /**
     * 用户的终端设备类型： 0：PSTN 1：PC 2：Mac 3：Android 4：iOS 5：Web 6：iPad 7：Android Pad 8：小程序 9：voip、sip 设备 10：linux 20：Rooms for Touch Windows 21：Rooms for Touch MacOS 22：Rooms for Touch Android 30：Controller for Touch Windows 32：Controller for Touch Android 33：Controller for Touch iOS
    * 类型：
     */
    protected $instanceid;
    /**
     * 当场会议的用户临时 ID（适用于所有用户）数组，单次最多支持500条。
    * 类型：
     */
    protected $msOpenIdList;
    /**
     * 操作者 ID。会议创建者可以导入报名信息。 operator_id 必须与 operator_id_type 配合使用。根据 operator_id_type 的值，operator_id 代表不同类型。 operator_id_type=2，operator_id 必须和公共参数的 openid 一致。 operator_id 和 userid 至少填写一个，两个参数如果都传了以 operator_id 为准。 使用 OAuth 公参鉴权后不能使用 userid 为入参。
    * 类型：
     */
    protected $operatorId;

    /**
     * 操作者 ID 的类型： 1：userid 2：open_id 如果 operator_id 和 userid 具有值，则以 operator_id 为准。
    * 类型：int
     */
    protected $operatorIdType = null;

    /**
     * 查询报名 ID 的排序规则。当该账号存在多条报名记录（手机号导入、手动报名等）时，该接口返回的顺序。 1：优先查询手机号导入报名，再查询用户手动报名，默认值。 2：优先查询用户手动报名，再查手机号导入。
    * 类型：int
     */
    protected $sortingRules = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['instanceid'])) {
            $this->instanceid = $jsonArray['instanceid'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter instanceid');
        }
        if (isset($jsonArray['ms_open_id_list'])) {
            $this->msOpenIdList = $jsonArray['ms_open_id_list'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter ms_open_id_list');
        }
        if (isset($jsonArray['operator_id'])) {
            $this->operatorId = $jsonArray['operator_id'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter operator_id');
        }
        if (isset($jsonArray['operator_id_type'])) {
            $this->operatorIdType = $jsonArray['operator_id_type'];
        }
        if (isset($jsonArray['sorting_rules'])) {
            $this->sortingRules = $jsonArray['sorting_rules'];
        }
    }

    public function instanceid(int $instanceid): V1MeetingsMeetingIdEnrollIdsPostRequest {
        $this->instanceid = $instanceid;
        return $this;
    }

    public function getInstanceid() {
        return $this->instanceid;
    }

    public function setInstanceid(int $instanceid) {
        $this->instanceid = $instanceid;
    }
    public function msOpenIdList(array $msOpenIdList): V1MeetingsMeetingIdEnrollIdsPostRequest {
        $this->msOpenIdList = $msOpenIdList;
        return $this;
    }

    public function getMsOpenIdList() {
        return $this->msOpenIdList;
    }

    public function setMsOpenIdList(array $msOpenIdList) {
        $this->msOpenIdList = $msOpenIdList;
    }
    public function operatorId(string $operatorId): V1MeetingsMeetingIdEnrollIdsPostRequest {
        $this->operatorId = $operatorId;
        return $this;
    }

    public function getOperatorId() {
        return $this->operatorId;
    }

    public function setOperatorId(string $operatorId) {
        $this->operatorId = $operatorId;
    }
    public function operatorIdType(int $operatorIdType): V1MeetingsMeetingIdEnrollIdsPostRequest {
        $this->operatorIdType = $operatorIdType;
        return $this;
    }

    public function getOperatorIdType() {
        return $this->operatorIdType;
    }

    public function setOperatorIdType(int $operatorIdType) {
        $this->operatorIdType = $operatorIdType;
    }
    public function sortingRules(int $sortingRules): V1MeetingsMeetingIdEnrollIdsPostRequest {
        $this->sortingRules = $sortingRules;
        return $this;
    }

    public function getSortingRules() {
        return $this->sortingRules;
    }

    public function setSortingRules(int $sortingRules) {
        $this->sortingRules = $sortingRules;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'instanceid' => 'int',
        'ms_open_id_list' => 'string[]',
        'operator_id' => 'string',
        'operator_id_type' => 'int',
        'sorting_rules' => 'int'
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
        'ms_open_id_list' => null,
        'operator_id' => null,
        'operator_id_type' => 'int64',
        'sorting_rules' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'instanceid' => false,
        'ms_open_id_list' => false,
        'operator_id' => false,
        'operator_id_type' => false,
        'sorting_rules' => false
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
        'ms_open_id_list' => 'ms_open_id_list',
        'operator_id' => 'operator_id',
        'operator_id_type' => 'operator_id_type',
        'sorting_rules' => 'sorting_rules'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'instanceid' => 'setInstanceid',
        'ms_open_id_list' => 'setMsOpenIdList',
        'operator_id' => 'setOperatorId',
        'operator_id_type' => 'setOperatorIdType',
        'sorting_rules' => 'setSortingRules'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'instanceid' => 'getInstanceid',
        'ms_open_id_list' => 'getMsOpenIdList',
        'operator_id' => 'getOperatorId',
        'operator_id_type' => 'getOperatorIdType',
        'sorting_rules' => 'getSortingRules'
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
            'ms_open_id_list' => $this->msOpenIdList,
            'operator_id' => $this->operatorId,
            'operator_id_type' => $this->operatorIdType,
            'sorting_rules' => $this->sortingRules,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

