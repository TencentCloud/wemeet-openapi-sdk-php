<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.4
 */
namespace wemeet\openapi\service\meeting_room\model;

use wemeet\openapi\core\xhttp\ModelInterface;


class V1RoomsInventoryAccountStatisticsGet200Response implements ModelInterface, \JsonSerializable
{

    /**
     * 基础版账号使用数
    * 类型：int
     */
    protected $customUsedCount = null;

    /**
     * 专业版账号数
    * 类型：int
     */
    protected $proCount = null;

    /**
     * 专业版账号使用数
    * 类型：int
     */
    protected $proUsedCount = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['custom_used_count'])) {
            $this->customUsedCount = $jsonArray['custom_used_count'];
        }
        if (isset($jsonArray['pro_count'])) {
            $this->proCount = $jsonArray['pro_count'];
        }
        if (isset($jsonArray['pro_used_count'])) {
            $this->proUsedCount = $jsonArray['pro_used_count'];
        }
    }

    public function customUsedCount(int $customUsedCount): V1RoomsInventoryAccountStatisticsGet200Response {
        $this->customUsedCount = $customUsedCount;
        return $this;
    }

    public function getCustomUsedCount() {
        return $this->customUsedCount;
    }

    public function setCustomUsedCount(int $customUsedCount) {
        $this->customUsedCount = $customUsedCount;
    }
    public function proCount(int $proCount): V1RoomsInventoryAccountStatisticsGet200Response {
        $this->proCount = $proCount;
        return $this;
    }

    public function getProCount() {
        return $this->proCount;
    }

    public function setProCount(int $proCount) {
        $this->proCount = $proCount;
    }
    public function proUsedCount(int $proUsedCount): V1RoomsInventoryAccountStatisticsGet200Response {
        $this->proUsedCount = $proUsedCount;
        return $this;
    }

    public function getProUsedCount() {
        return $this->proUsedCount;
    }

    public function setProUsedCount(int $proUsedCount) {
        $this->proUsedCount = $proUsedCount;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'custom_used_count' => 'int',
        'pro_count' => 'int',
        'pro_used_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'custom_used_count' => 'int64',
        'pro_count' => 'int64',
        'pro_used_count' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'custom_used_count' => false,
        'pro_count' => false,
        'pro_used_count' => false
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
        'custom_used_count' => 'custom_used_count',
        'pro_count' => 'pro_count',
        'pro_used_count' => 'pro_used_count'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'custom_used_count' => 'setCustomUsedCount',
        'pro_count' => 'setProCount',
        'pro_used_count' => 'setProUsedCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'custom_used_count' => 'getCustomUsedCount',
        'pro_count' => 'getProCount',
        'pro_used_count' => 'getProUsedCount'
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
            'custom_used_count' => $this->customUsedCount,
            'pro_count' => $this->proCount,
            'pro_used_count' => $this->proUsedCount,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

