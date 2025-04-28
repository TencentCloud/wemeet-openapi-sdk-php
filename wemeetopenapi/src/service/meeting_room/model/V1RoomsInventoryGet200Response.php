<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.2
 */
namespace wemeet\openapi\service\meeting_room\model;

use wemeet\openapi\core\xhttp\ModelInterface;


class V1RoomsInventoryGet200Response implements ModelInterface, \JsonSerializable
{

    /**
     * 普通设备数
    * 类型：int
     */
    protected $normalCount = null;

    /**
     * 普通设备过期数
    * 类型：int
     */
    protected $normalExpiredCount = null;

    /**
     * 普通设备使用数
    * 类型：int
     */
    protected $normalUsedCount = null;

    /**
     * 专款设备数
    * 类型：int
     */
    protected $specialCount = null;

    /**
     * 专款设备过期数
    * 类型：int
     */
    protected $specialExpiredCount = null;

    /**
     * 专款设备使用数
    * 类型：int
     */
    protected $specialUsedCount = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['normal_count'])) {
            $this->normalCount = $jsonArray['normal_count'];
        }
        if (isset($jsonArray['normal_expired_count'])) {
            $this->normalExpiredCount = $jsonArray['normal_expired_count'];
        }
        if (isset($jsonArray['normal_used_count'])) {
            $this->normalUsedCount = $jsonArray['normal_used_count'];
        }
        if (isset($jsonArray['special_count'])) {
            $this->specialCount = $jsonArray['special_count'];
        }
        if (isset($jsonArray['special_expired_count'])) {
            $this->specialExpiredCount = $jsonArray['special_expired_count'];
        }
        if (isset($jsonArray['special_used_count'])) {
            $this->specialUsedCount = $jsonArray['special_used_count'];
        }
    }

    public function normalCount(int $normalCount): V1RoomsInventoryGet200Response {
        $this->normalCount = $normalCount;
        return $this;
    }

    public function getNormalCount() {
        return $this->normalCount;
    }

    public function setNormalCount(int $normalCount) {
        $this->normalCount = $normalCount;
    }
    public function normalExpiredCount(int $normalExpiredCount): V1RoomsInventoryGet200Response {
        $this->normalExpiredCount = $normalExpiredCount;
        return $this;
    }

    public function getNormalExpiredCount() {
        return $this->normalExpiredCount;
    }

    public function setNormalExpiredCount(int $normalExpiredCount) {
        $this->normalExpiredCount = $normalExpiredCount;
    }
    public function normalUsedCount(int $normalUsedCount): V1RoomsInventoryGet200Response {
        $this->normalUsedCount = $normalUsedCount;
        return $this;
    }

    public function getNormalUsedCount() {
        return $this->normalUsedCount;
    }

    public function setNormalUsedCount(int $normalUsedCount) {
        $this->normalUsedCount = $normalUsedCount;
    }
    public function specialCount(int $specialCount): V1RoomsInventoryGet200Response {
        $this->specialCount = $specialCount;
        return $this;
    }

    public function getSpecialCount() {
        return $this->specialCount;
    }

    public function setSpecialCount(int $specialCount) {
        $this->specialCount = $specialCount;
    }
    public function specialExpiredCount(int $specialExpiredCount): V1RoomsInventoryGet200Response {
        $this->specialExpiredCount = $specialExpiredCount;
        return $this;
    }

    public function getSpecialExpiredCount() {
        return $this->specialExpiredCount;
    }

    public function setSpecialExpiredCount(int $specialExpiredCount) {
        $this->specialExpiredCount = $specialExpiredCount;
    }
    public function specialUsedCount(int $specialUsedCount): V1RoomsInventoryGet200Response {
        $this->specialUsedCount = $specialUsedCount;
        return $this;
    }

    public function getSpecialUsedCount() {
        return $this->specialUsedCount;
    }

    public function setSpecialUsedCount(int $specialUsedCount) {
        $this->specialUsedCount = $specialUsedCount;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'normal_count' => 'int',
        'normal_expired_count' => 'int',
        'normal_used_count' => 'int',
        'special_count' => 'int',
        'special_expired_count' => 'int',
        'special_used_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'normal_count' => 'int64',
        'normal_expired_count' => 'int64',
        'normal_used_count' => 'int64',
        'special_count' => 'int64',
        'special_expired_count' => 'int64',
        'special_used_count' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'normal_count' => false,
        'normal_expired_count' => false,
        'normal_used_count' => false,
        'special_count' => false,
        'special_expired_count' => false,
        'special_used_count' => false
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
        'normal_count' => 'normal_count',
        'normal_expired_count' => 'normal_expired_count',
        'normal_used_count' => 'normal_used_count',
        'special_count' => 'special_count',
        'special_expired_count' => 'special_expired_count',
        'special_used_count' => 'special_used_count'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'normal_count' => 'setNormalCount',
        'normal_expired_count' => 'setNormalExpiredCount',
        'normal_used_count' => 'setNormalUsedCount',
        'special_count' => 'setSpecialCount',
        'special_expired_count' => 'setSpecialExpiredCount',
        'special_used_count' => 'setSpecialUsedCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'normal_count' => 'getNormalCount',
        'normal_expired_count' => 'getNormalExpiredCount',
        'normal_used_count' => 'getNormalUsedCount',
        'special_count' => 'getSpecialCount',
        'special_expired_count' => 'getSpecialExpiredCount',
        'special_used_count' => 'getSpecialUsedCount'
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
            'normal_count' => $this->normalCount,
            'normal_expired_count' => $this->normalExpiredCount,
            'normal_used_count' => $this->normalUsedCount,
            'special_count' => $this->specialCount,
            'special_expired_count' => $this->specialExpiredCount,
            'special_used_count' => $this->specialUsedCount,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

