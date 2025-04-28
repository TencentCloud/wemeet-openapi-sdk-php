<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.2
 */
namespace wemeet\openapi\service\records\model;

use wemeet\openapi\core\xhttp\ModelInterface;


class V1RecordsTranscriptsSearchGet200Response implements ModelInterface, \JsonSerializable
{

    /**
     * 搜索结果列表
    * 类型：\wemeet\openapi\service\records\model\V1RecordsTranscriptsSearchGet200ResponseHitsInner[]
     */
    protected $hits = null;

    /**
     * 搜索结果时间戳对象列表
    * 类型：\wemeet\openapi\service\records\model\V1RecordsTranscriptsSearchGet200ResponseTimelinesInner[]
     */
    protected $timelines = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['hits'])) {
            $this->hits = $jsonArray['hits'];
        }
        if (isset($jsonArray['timelines'])) {
            $this->timelines = $jsonArray['timelines'];
        }
    }

    public function hits(array $hits): V1RecordsTranscriptsSearchGet200Response {
        $this->hits = $hits;
        return $this;
    }

    public function getHits() {
        return $this->hits;
    }

    public function setHits(array $hits) {
        $this->hits = $hits;
    }
    public function timelines(array $timelines): V1RecordsTranscriptsSearchGet200Response {
        $this->timelines = $timelines;
        return $this;
    }

    public function getTimelines() {
        return $this->timelines;
    }

    public function setTimelines(array $timelines) {
        $this->timelines = $timelines;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'hits' => '\wemeet\openapi\service\records\model\V1RecordsTranscriptsSearchGet200ResponseHitsInner[]',
        'timelines' => '\wemeet\openapi\service\records\model\V1RecordsTranscriptsSearchGet200ResponseTimelinesInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'hits' => null,
        'timelines' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'hits' => false,
        'timelines' => false
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
        'hits' => 'hits',
        'timelines' => 'timelines'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'hits' => 'setHits',
        'timelines' => 'setTimelines'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'hits' => 'getHits',
        'timelines' => 'getTimelines'
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
            'hits' => $this->hits,
            'timelines' => $this->timelines,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

