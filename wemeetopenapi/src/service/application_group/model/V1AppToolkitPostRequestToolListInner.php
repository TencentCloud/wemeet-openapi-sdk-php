<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.4
 */
namespace wemeet\openapi\service\application_group\model;

use wemeet\openapi\core\xhttp\ModelInterface;


class V1AppToolkitPostRequestToolListInner implements ModelInterface, \JsonSerializable
{
    /**
     * 工具箱应用所属企业appid
    * 类型：
     */
    protected $toolAppid;
    /**
     * 工具箱应用id
    * 类型：
     */
    protected $toolSdkid;

    /**
     * 应用是否可以拉取机器人，0:否，1:是，默认为0
    * 类型：int
     */
    protected $enableAddRobot = null;

    /**
     * 应用是否可以查询customerData，0:否，1:是，默认为0
    * 类型：int
     */
    protected $enableCustomerData = null;

    /**
     * 可见用户是否屏蔽会议创建者，visible_type=2时该字段才有效。true：屏蔽会议创建者，除非在可见用户列表中显式设置会议创建者；false：默认配置，会议创建者可见
    * 类型：bool
     */
    protected $isShieldCreator = null;

    /**
     * 调用方业务相关字段，最大128个字符
    * 类型：string
     */
    protected $uniqueCode = null;

    /**
     * 可见用户列表（默认会议创建者可见），visible_type=2时该字段才有效
    * 类型：\wemeet\openapi\service\application_group\model\V1AppToolkitPostRequestToolListInnerVisibleListInner[]
     */
    protected $visibleList = null;

    /**
     * 工具箱应用可见类型。 0:所有人可见, 1:本企业可见, 2:指定用户可见，默认为0
    * 类型：int
     */
    protected $visibleType = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['tool_appid'])) {
            $this->toolAppid = $jsonArray['tool_appid'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter tool_appid');
        }
        if (isset($jsonArray['tool_sdkid'])) {
            $this->toolSdkid = $jsonArray['tool_sdkid'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter tool_sdkid');
        }
        if (isset($jsonArray['enable_add_robot'])) {
            $this->enableAddRobot = $jsonArray['enable_add_robot'];
        }
        if (isset($jsonArray['enable_customer_data'])) {
            $this->enableCustomerData = $jsonArray['enable_customer_data'];
        }
        if (isset($jsonArray['is_shield_creator'])) {
            $this->isShieldCreator = $jsonArray['is_shield_creator'];
        }
        if (isset($jsonArray['unique_code'])) {
            $this->uniqueCode = $jsonArray['unique_code'];
        }
        if (isset($jsonArray['visible_list'])) {
            $this->visibleList = $jsonArray['visible_list'];
        }
        if (isset($jsonArray['visible_type'])) {
            $this->visibleType = $jsonArray['visible_type'];
        }
    }

    public function enableAddRobot(int $enableAddRobot): V1AppToolkitPostRequestToolListInner {
        $this->enableAddRobot = $enableAddRobot;
        return $this;
    }

    public function getEnableAddRobot() {
        return $this->enableAddRobot;
    }

    public function setEnableAddRobot(int $enableAddRobot) {
        $this->enableAddRobot = $enableAddRobot;
    }
    public function enableCustomerData(int $enableCustomerData): V1AppToolkitPostRequestToolListInner {
        $this->enableCustomerData = $enableCustomerData;
        return $this;
    }

    public function getEnableCustomerData() {
        return $this->enableCustomerData;
    }

    public function setEnableCustomerData(int $enableCustomerData) {
        $this->enableCustomerData = $enableCustomerData;
    }
    public function isShieldCreator(bool $isShieldCreator): V1AppToolkitPostRequestToolListInner {
        $this->isShieldCreator = $isShieldCreator;
        return $this;
    }

    public function getIsShieldCreator() {
        return $this->isShieldCreator;
    }

    public function setIsShieldCreator(bool $isShieldCreator) {
        $this->isShieldCreator = $isShieldCreator;
    }
    public function toolAppid(string $toolAppid): V1AppToolkitPostRequestToolListInner {
        $this->toolAppid = $toolAppid;
        return $this;
    }

    public function getToolAppid() {
        return $this->toolAppid;
    }

    public function setToolAppid(string $toolAppid) {
        $this->toolAppid = $toolAppid;
    }
    public function toolSdkid(string $toolSdkid): V1AppToolkitPostRequestToolListInner {
        $this->toolSdkid = $toolSdkid;
        return $this;
    }

    public function getToolSdkid() {
        return $this->toolSdkid;
    }

    public function setToolSdkid(string $toolSdkid) {
        $this->toolSdkid = $toolSdkid;
    }
    public function uniqueCode(string $uniqueCode): V1AppToolkitPostRequestToolListInner {
        $this->uniqueCode = $uniqueCode;
        return $this;
    }

    public function getUniqueCode() {
        return $this->uniqueCode;
    }

    public function setUniqueCode(string $uniqueCode) {
        $this->uniqueCode = $uniqueCode;
    }
    public function visibleList(array $visibleList): V1AppToolkitPostRequestToolListInner {
        $this->visibleList = $visibleList;
        return $this;
    }

    public function getVisibleList() {
        return $this->visibleList;
    }

    public function setVisibleList(array $visibleList) {
        $this->visibleList = $visibleList;
    }
    public function visibleType(int $visibleType): V1AppToolkitPostRequestToolListInner {
        $this->visibleType = $visibleType;
        return $this;
    }

    public function getVisibleType() {
        return $this->visibleType;
    }

    public function setVisibleType(int $visibleType) {
        $this->visibleType = $visibleType;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'enable_add_robot' => 'int',
        'enable_customer_data' => 'int',
        'is_shield_creator' => 'bool',
        'tool_appid' => 'string',
        'tool_sdkid' => 'string',
        'unique_code' => 'string',
        'visible_list' => '\wemeet\openapi\service\application_group\model\V1AppToolkitPostRequestToolListInnerVisibleListInner[]',
        'visible_type' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'enable_add_robot' => 'int64',
        'enable_customer_data' => 'int64',
        'is_shield_creator' => null,
        'tool_appid' => null,
        'tool_sdkid' => null,
        'unique_code' => null,
        'visible_list' => null,
        'visible_type' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'enable_add_robot' => false,
        'enable_customer_data' => false,
        'is_shield_creator' => false,
        'tool_appid' => false,
        'tool_sdkid' => false,
        'unique_code' => false,
        'visible_list' => false,
        'visible_type' => false
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
        'enable_add_robot' => 'enable_add_robot',
        'enable_customer_data' => 'enable_customer_data',
        'is_shield_creator' => 'is_shield_creator',
        'tool_appid' => 'tool_appid',
        'tool_sdkid' => 'tool_sdkid',
        'unique_code' => 'unique_code',
        'visible_list' => 'visible_list',
        'visible_type' => 'visible_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'enable_add_robot' => 'setEnableAddRobot',
        'enable_customer_data' => 'setEnableCustomerData',
        'is_shield_creator' => 'setIsShieldCreator',
        'tool_appid' => 'setToolAppid',
        'tool_sdkid' => 'setToolSdkid',
        'unique_code' => 'setUniqueCode',
        'visible_list' => 'setVisibleList',
        'visible_type' => 'setVisibleType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'enable_add_robot' => 'getEnableAddRobot',
        'enable_customer_data' => 'getEnableCustomerData',
        'is_shield_creator' => 'getIsShieldCreator',
        'tool_appid' => 'getToolAppid',
        'tool_sdkid' => 'getToolSdkid',
        'unique_code' => 'getUniqueCode',
        'visible_list' => 'getVisibleList',
        'visible_type' => 'getVisibleType'
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
            'enable_add_robot' => $this->enableAddRobot,
            'enable_customer_data' => $this->enableCustomerData,
            'is_shield_creator' => $this->isShieldCreator,
            'tool_appid' => $this->toolAppid,
            'tool_sdkid' => $this->toolSdkid,
            'unique_code' => $this->uniqueCode,
            'visible_list' => $this->visibleList,
            'visible_type' => $this->visibleType,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

