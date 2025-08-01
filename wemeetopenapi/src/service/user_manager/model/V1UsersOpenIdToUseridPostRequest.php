<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.7
 */
namespace wemeet\openapi\service\user_manager\model;

use wemeet\openapi\core\xhttp\ModelInterface;


class V1UsersOpenIdToUseridPostRequest implements ModelInterface, \JsonSerializable
{
    /**
     * 需要转换的open_id列表 。一次最多1000个。
    * 类型：
     */
    protected $openIdList;
    /**
     * 操作者ID
    * 类型：
     */
    protected $operatorId;
    /**
     * 操作者ID类型
    * 类型：
     */
    protected $operatorIdType;
    /**
     * 第三方应用的sdkid。需要转换的open_id应为腾讯会议为该三方应用提供的open_id。
    * 类型：
     */
    protected $sdkid;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['open_id_list'])) {
            $this->openIdList = $jsonArray['open_id_list'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter open_id_list');
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
        if (isset($jsonArray['sdkid'])) {
            $this->sdkid = $jsonArray['sdkid'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter sdkid');
        }
    }

    public function openIdList(array $openIdList): V1UsersOpenIdToUseridPostRequest {
        $this->openIdList = $openIdList;
        return $this;
    }

    public function getOpenIdList() {
        return $this->openIdList;
    }

    public function setOpenIdList(array $openIdList) {
        $this->openIdList = $openIdList;
    }
    public function operatorId(string $operatorId): V1UsersOpenIdToUseridPostRequest {
        $this->operatorId = $operatorId;
        return $this;
    }

    public function getOperatorId() {
        return $this->operatorId;
    }

    public function setOperatorId(string $operatorId) {
        $this->operatorId = $operatorId;
    }
    public function operatorIdType(int $operatorIdType): V1UsersOpenIdToUseridPostRequest {
        $this->operatorIdType = $operatorIdType;
        return $this;
    }

    public function getOperatorIdType() {
        return $this->operatorIdType;
    }

    public function setOperatorIdType(int $operatorIdType) {
        $this->operatorIdType = $operatorIdType;
    }
    public function sdkid(string $sdkid): V1UsersOpenIdToUseridPostRequest {
        $this->sdkid = $sdkid;
        return $this;
    }

    public function getSdkid() {
        return $this->sdkid;
    }

    public function setSdkid(string $sdkid) {
        $this->sdkid = $sdkid;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'open_id_list' => 'string[]',
        'operator_id' => 'string',
        'operator_id_type' => 'int',
        'sdkid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'open_id_list' => null,
        'operator_id' => null,
        'operator_id_type' => 'int64',
        'sdkid' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'open_id_list' => false,
        'operator_id' => false,
        'operator_id_type' => false,
        'sdkid' => false
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
        'open_id_list' => 'open_id_list',
        'operator_id' => 'operator_id',
        'operator_id_type' => 'operator_id_type',
        'sdkid' => 'sdkid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'open_id_list' => 'setOpenIdList',
        'operator_id' => 'setOperatorId',
        'operator_id_type' => 'setOperatorIdType',
        'sdkid' => 'setSdkid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'open_id_list' => 'getOpenIdList',
        'operator_id' => 'getOperatorId',
        'operator_id_type' => 'getOperatorIdType',
        'sdkid' => 'getSdkid'
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
            'open_id_list' => $this->openIdList,
            'operator_id' => $this->operatorId,
            'operator_id_type' => $this->operatorIdType,
            'sdkid' => $this->sdkid,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

