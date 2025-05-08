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


class V1MetricsRecordsGet200ResponseSummariesInner implements ModelInterface, \JsonSerializable
{

    /**
     * 统计时间，格式：yyyy-MM-dd。
    * 类型：string
     */
    protected $date = null;

    /**
     * 下载次数（当天数据），默认0。
    * 类型：int
     */
    protected $downloadCounts = null;

    /**
     * 观看次数（当天数据），默认0。
    * 类型：int
     */
    protected $viewCounts = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['date'])) {
            $this->date = $jsonArray['date'];
        }
        if (isset($jsonArray['download_counts'])) {
            $this->downloadCounts = $jsonArray['download_counts'];
        }
        if (isset($jsonArray['view_counts'])) {
            $this->viewCounts = $jsonArray['view_counts'];
        }
    }

    public function date(string $date): V1MetricsRecordsGet200ResponseSummariesInner {
        $this->date = $date;
        return $this;
    }

    public function getDate() {
        return $this->date;
    }

    public function setDate(string $date) {
        $this->date = $date;
    }
    public function downloadCounts(int $downloadCounts): V1MetricsRecordsGet200ResponseSummariesInner {
        $this->downloadCounts = $downloadCounts;
        return $this;
    }

    public function getDownloadCounts() {
        return $this->downloadCounts;
    }

    public function setDownloadCounts(int $downloadCounts) {
        $this->downloadCounts = $downloadCounts;
    }
    public function viewCounts(int $viewCounts): V1MetricsRecordsGet200ResponseSummariesInner {
        $this->viewCounts = $viewCounts;
        return $this;
    }

    public function getViewCounts() {
        return $this->viewCounts;
    }

    public function setViewCounts(int $viewCounts) {
        $this->viewCounts = $viewCounts;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'date' => 'string',
        'download_counts' => 'int',
        'view_counts' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'date' => null,
        'download_counts' => 'int64',
        'view_counts' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'date' => false,
        'download_counts' => false,
        'view_counts' => false
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
        'date' => 'date',
        'download_counts' => 'download_counts',
        'view_counts' => 'view_counts'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date' => 'setDate',
        'download_counts' => 'setDownloadCounts',
        'view_counts' => 'setViewCounts'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date' => 'getDate',
        'download_counts' => 'getDownloadCounts',
        'view_counts' => 'getViewCounts'
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
            'date' => $this->date,
            'download_counts' => $this->downloadCounts,
            'view_counts' => $this->viewCounts,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

