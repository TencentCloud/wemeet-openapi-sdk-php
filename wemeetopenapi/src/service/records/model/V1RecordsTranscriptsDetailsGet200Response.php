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


class V1RecordsTranscriptsDetailsGet200Response implements ModelInterface, \JsonSerializable
{

    /**
    * 类型：\wemeet\openapi\service\records\model\V1RecordsTranscriptsDetailsGet200ResponseMinutes
     */
    protected $minutes = null;

    /**
     * 是否还有更多
    * 类型：bool
     */
    protected $more = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['minutes'])) {
            $this->minutes = new V1RecordsTranscriptsDetailsGet200ResponseMinutes($jsonArray['minutes']);
        }
        if (isset($jsonArray['more'])) {
            $this->more = $jsonArray['more'];
        }
    }

    public function minutes(V1RecordsTranscriptsDetailsGet200ResponseMinutes $minutes): V1RecordsTranscriptsDetailsGet200Response {
        $this->minutes = $minutes;
        return $this;
    }

    public function getMinutes() {
        return $this->minutes;
    }

    public function setMinutes(V1RecordsTranscriptsDetailsGet200ResponseMinutes $minutes) {
        $this->minutes = $minutes;
    }
    public function more(bool $more): V1RecordsTranscriptsDetailsGet200Response {
        $this->more = $more;
        return $this;
    }

    public function getMore() {
        return $this->more;
    }

    public function setMore(bool $more) {
        $this->more = $more;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'minutes' => '\wemeet\openapi\service\records\model\V1RecordsTranscriptsDetailsGet200ResponseMinutes',
        'more' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'minutes' => null,
        'more' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'minutes' => false,
        'more' => false
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
        'minutes' => 'minutes',
        'more' => 'more'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'minutes' => 'setMinutes',
        'more' => 'setMore'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'minutes' => 'getMinutes',
        'more' => 'getMore'
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
            'minutes' => $this->minutes,
            'more' => $this->more,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

