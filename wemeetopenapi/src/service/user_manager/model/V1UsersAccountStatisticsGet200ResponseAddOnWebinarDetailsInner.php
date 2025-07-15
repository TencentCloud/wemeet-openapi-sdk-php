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


class V1UsersAccountStatisticsGet200ResponseAddOnWebinarDetailsInner implements ModelInterface, \JsonSerializable
{

    /**
     * 升级许可数。
    * 类型：int
     */
    protected $addOnWebinarCount = null;

    /**
     * 增强会议体验：网络研讨会（Webinar）观众规模升级许可类型。 1：Webinar 观众规模提升至 300 观众 2：Webinar 观众规模提升至 500 观众 3：Webinar 观众规模提升至 1000 观众 4：Webinar 观众规模提升至 2000 观众 5：Webinar 观众规模提升至 3000 观众 6：Webinar 观众规模提升至 5000 观众 7：Webinar 观众规模提升至 8000 观众 8：Webinar 观众规模提升至 10000 观众
    * 类型：int
     */
    protected $addOnWebinarType = null;

    /**
     * 已分配升级许可数。
    * 类型：int
     */
    protected $addOnWebinarUsedCount = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['add_on_webinar_count'])) {
            $this->addOnWebinarCount = $jsonArray['add_on_webinar_count'];
        }
        if (isset($jsonArray['add_on_webinar_type'])) {
            $this->addOnWebinarType = $jsonArray['add_on_webinar_type'];
        }
        if (isset($jsonArray['add_on_webinar_used_count'])) {
            $this->addOnWebinarUsedCount = $jsonArray['add_on_webinar_used_count'];
        }
    }

    public function addOnWebinarCount(int $addOnWebinarCount): V1UsersAccountStatisticsGet200ResponseAddOnWebinarDetailsInner {
        $this->addOnWebinarCount = $addOnWebinarCount;
        return $this;
    }

    public function getAddOnWebinarCount() {
        return $this->addOnWebinarCount;
    }

    public function setAddOnWebinarCount(int $addOnWebinarCount) {
        $this->addOnWebinarCount = $addOnWebinarCount;
    }
    public function addOnWebinarType(int $addOnWebinarType): V1UsersAccountStatisticsGet200ResponseAddOnWebinarDetailsInner {
        $this->addOnWebinarType = $addOnWebinarType;
        return $this;
    }

    public function getAddOnWebinarType() {
        return $this->addOnWebinarType;
    }

    public function setAddOnWebinarType(int $addOnWebinarType) {
        $this->addOnWebinarType = $addOnWebinarType;
    }
    public function addOnWebinarUsedCount(int $addOnWebinarUsedCount): V1UsersAccountStatisticsGet200ResponseAddOnWebinarDetailsInner {
        $this->addOnWebinarUsedCount = $addOnWebinarUsedCount;
        return $this;
    }

    public function getAddOnWebinarUsedCount() {
        return $this->addOnWebinarUsedCount;
    }

    public function setAddOnWebinarUsedCount(int $addOnWebinarUsedCount) {
        $this->addOnWebinarUsedCount = $addOnWebinarUsedCount;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'add_on_webinar_count' => 'int',
        'add_on_webinar_type' => 'int',
        'add_on_webinar_used_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'add_on_webinar_count' => 'int64',
        'add_on_webinar_type' => 'int64',
        'add_on_webinar_used_count' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'add_on_webinar_count' => false,
        'add_on_webinar_type' => false,
        'add_on_webinar_used_count' => false
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
        'add_on_webinar_count' => 'add_on_webinar_count',
        'add_on_webinar_type' => 'add_on_webinar_type',
        'add_on_webinar_used_count' => 'add_on_webinar_used_count'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'add_on_webinar_count' => 'setAddOnWebinarCount',
        'add_on_webinar_type' => 'setAddOnWebinarType',
        'add_on_webinar_used_count' => 'setAddOnWebinarUsedCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'add_on_webinar_count' => 'getAddOnWebinarCount',
        'add_on_webinar_type' => 'getAddOnWebinarType',
        'add_on_webinar_used_count' => 'getAddOnWebinarUsedCount'
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
            'add_on_webinar_count' => $this->addOnWebinarCount,
            'add_on_webinar_type' => $this->addOnWebinarType,
            'add_on_webinar_used_count' => $this->addOnWebinarUsedCount,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

