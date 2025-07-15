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


class V1UsersAccountStatisticsGet200ResponseAddOnLargemeetingDetailsInner implements ModelInterface, \JsonSerializable
{

    /**
     * 升级许可数。
    * 类型：int
     */
    protected $addOnLargemeetingCount = null;

    /**
     * 房间规模升级许可类型 1：500方房间规模升级许可 2：1000方房间规模升级许可 3：2000方房间规模升级许可
    * 类型：int
     */
    protected $addOnLargemeetingType = null;

    /**
     * 已分配升级许可数。
    * 类型：int
     */
    protected $addOnLargemeetingUsedCount = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['add_on_largemeeting_count'])) {
            $this->addOnLargemeetingCount = $jsonArray['add_on_largemeeting_count'];
        }
        if (isset($jsonArray['add_on_largemeeting_type'])) {
            $this->addOnLargemeetingType = $jsonArray['add_on_largemeeting_type'];
        }
        if (isset($jsonArray['add_on_largemeeting_used_count'])) {
            $this->addOnLargemeetingUsedCount = $jsonArray['add_on_largemeeting_used_count'];
        }
    }

    public function addOnLargemeetingCount(int $addOnLargemeetingCount): V1UsersAccountStatisticsGet200ResponseAddOnLargemeetingDetailsInner {
        $this->addOnLargemeetingCount = $addOnLargemeetingCount;
        return $this;
    }

    public function getAddOnLargemeetingCount() {
        return $this->addOnLargemeetingCount;
    }

    public function setAddOnLargemeetingCount(int $addOnLargemeetingCount) {
        $this->addOnLargemeetingCount = $addOnLargemeetingCount;
    }
    public function addOnLargemeetingType(int $addOnLargemeetingType): V1UsersAccountStatisticsGet200ResponseAddOnLargemeetingDetailsInner {
        $this->addOnLargemeetingType = $addOnLargemeetingType;
        return $this;
    }

    public function getAddOnLargemeetingType() {
        return $this->addOnLargemeetingType;
    }

    public function setAddOnLargemeetingType(int $addOnLargemeetingType) {
        $this->addOnLargemeetingType = $addOnLargemeetingType;
    }
    public function addOnLargemeetingUsedCount(int $addOnLargemeetingUsedCount): V1UsersAccountStatisticsGet200ResponseAddOnLargemeetingDetailsInner {
        $this->addOnLargemeetingUsedCount = $addOnLargemeetingUsedCount;
        return $this;
    }

    public function getAddOnLargemeetingUsedCount() {
        return $this->addOnLargemeetingUsedCount;
    }

    public function setAddOnLargemeetingUsedCount(int $addOnLargemeetingUsedCount) {
        $this->addOnLargemeetingUsedCount = $addOnLargemeetingUsedCount;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'add_on_largemeeting_count' => 'int',
        'add_on_largemeeting_type' => 'int',
        'add_on_largemeeting_used_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'add_on_largemeeting_count' => 'int64',
        'add_on_largemeeting_type' => 'int64',
        'add_on_largemeeting_used_count' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'add_on_largemeeting_count' => false,
        'add_on_largemeeting_type' => false,
        'add_on_largemeeting_used_count' => false
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
        'add_on_largemeeting_count' => 'add_on_largemeeting_count',
        'add_on_largemeeting_type' => 'add_on_largemeeting_type',
        'add_on_largemeeting_used_count' => 'add_on_largemeeting_used_count'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'add_on_largemeeting_count' => 'setAddOnLargemeetingCount',
        'add_on_largemeeting_type' => 'setAddOnLargemeetingType',
        'add_on_largemeeting_used_count' => 'setAddOnLargemeetingUsedCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'add_on_largemeeting_count' => 'getAddOnLargemeetingCount',
        'add_on_largemeeting_type' => 'getAddOnLargemeetingType',
        'add_on_largemeeting_used_count' => 'getAddOnLargemeetingUsedCount'
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
            'add_on_largemeeting_count' => $this->addOnLargemeetingCount,
            'add_on_largemeeting_type' => $this->addOnLargemeetingType,
            'add_on_largemeeting_used_count' => $this->addOnLargemeetingUsedCount,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

