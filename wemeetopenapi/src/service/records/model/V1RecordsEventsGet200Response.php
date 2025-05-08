<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.4
 */
namespace wemeet\openapi\service\records\model;

use wemeet\openapi\core\xhttp\ModelInterface;


class V1RecordsEventsGet200Response implements ModelInterface, \JsonSerializable
{

    /**
     * 分页查询返回当前页码。
    * 类型：int
     */
    protected $currentPage = null;

    /**
     * 分页查询返回单页数据条数。
    * 类型：int
     */
    protected $currentSize = null;

    /**
     * 事件明细集合。
    * 类型：\wemeet\openapi\service\records\model\V1RecordsEventsGet200ResponseEventsInner[]
     */
    protected $events = null;

    /**
     * 分页查询返回数据总数。
    * 类型：int
     */
    protected $totalCount = null;

    /**
     * 分页查询返回分页总数。
    * 类型：int
     */
    protected $totalPage = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['current_page'])) {
            $this->currentPage = $jsonArray['current_page'];
        }
        if (isset($jsonArray['current_size'])) {
            $this->currentSize = $jsonArray['current_size'];
        }
        if (isset($jsonArray['events'])) {
            $this->events = $jsonArray['events'];
        }
        if (isset($jsonArray['total_count'])) {
            $this->totalCount = $jsonArray['total_count'];
        }
        if (isset($jsonArray['total_page'])) {
            $this->totalPage = $jsonArray['total_page'];
        }
    }

    public function currentPage(int $currentPage): V1RecordsEventsGet200Response {
        $this->currentPage = $currentPage;
        return $this;
    }

    public function getCurrentPage() {
        return $this->currentPage;
    }

    public function setCurrentPage(int $currentPage) {
        $this->currentPage = $currentPage;
    }
    public function currentSize(int $currentSize): V1RecordsEventsGet200Response {
        $this->currentSize = $currentSize;
        return $this;
    }

    public function getCurrentSize() {
        return $this->currentSize;
    }

    public function setCurrentSize(int $currentSize) {
        $this->currentSize = $currentSize;
    }
    public function events(array $events): V1RecordsEventsGet200Response {
        $this->events = $events;
        return $this;
    }

    public function getEvents() {
        return $this->events;
    }

    public function setEvents(array $events) {
        $this->events = $events;
    }
    public function totalCount(int $totalCount): V1RecordsEventsGet200Response {
        $this->totalCount = $totalCount;
        return $this;
    }

    public function getTotalCount() {
        return $this->totalCount;
    }

    public function setTotalCount(int $totalCount) {
        $this->totalCount = $totalCount;
    }
    public function totalPage(int $totalPage): V1RecordsEventsGet200Response {
        $this->totalPage = $totalPage;
        return $this;
    }

    public function getTotalPage() {
        return $this->totalPage;
    }

    public function setTotalPage(int $totalPage) {
        $this->totalPage = $totalPage;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'current_page' => 'int',
        'current_size' => 'int',
        'events' => '\wemeet\openapi\service\records\model\V1RecordsEventsGet200ResponseEventsInner[]',
        'total_count' => 'int',
        'total_page' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'current_page' => 'int64',
        'current_size' => 'int64',
        'events' => null,
        'total_count' => 'int64',
        'total_page' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'current_page' => false,
        'current_size' => false,
        'events' => false,
        'total_count' => false,
        'total_page' => false
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
        'current_page' => 'current_page',
        'current_size' => 'current_size',
        'events' => 'events',
        'total_count' => 'total_count',
        'total_page' => 'total_page'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'current_page' => 'setCurrentPage',
        'current_size' => 'setCurrentSize',
        'events' => 'setEvents',
        'total_count' => 'setTotalCount',
        'total_page' => 'setTotalPage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'current_page' => 'getCurrentPage',
        'current_size' => 'getCurrentSize',
        'events' => 'getEvents',
        'total_count' => 'getTotalCount',
        'total_page' => 'getTotalPage'
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
            'current_page' => $this->currentPage,
            'current_size' => $this->currentSize,
            'events' => $this->events,
            'total_count' => $this->totalCount,
            'total_page' => $this->totalPage,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

