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


class V1RecordsTranscriptsSearchGet200ResponseHitsInner implements ModelInterface, \JsonSerializable
{

    /**
     * 匹配长度
    * 类型：int
     */
    protected $length = null;

    /**
     * text 相对词的偏移。
    * 类型：int
     */
    protected $offset = null;

    /**
     * 段落 ID
    * 类型：string
     */
    protected $pid = null;

    /**
     * 句子 ID
    * 类型：string
     */
    protected $sid = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['length'])) {
            $this->length = $jsonArray['length'];
        }
        if (isset($jsonArray['offset'])) {
            $this->offset = $jsonArray['offset'];
        }
        if (isset($jsonArray['pid'])) {
            $this->pid = $jsonArray['pid'];
        }
        if (isset($jsonArray['sid'])) {
            $this->sid = $jsonArray['sid'];
        }
    }

    public function length(int $length): V1RecordsTranscriptsSearchGet200ResponseHitsInner {
        $this->length = $length;
        return $this;
    }

    public function getLength() {
        return $this->length;
    }

    public function setLength(int $length) {
        $this->length = $length;
    }
    public function offset(int $offset): V1RecordsTranscriptsSearchGet200ResponseHitsInner {
        $this->offset = $offset;
        return $this;
    }

    public function getOffset() {
        return $this->offset;
    }

    public function setOffset(int $offset) {
        $this->offset = $offset;
    }
    public function pid(string $pid): V1RecordsTranscriptsSearchGet200ResponseHitsInner {
        $this->pid = $pid;
        return $this;
    }

    public function getPid() {
        return $this->pid;
    }

    public function setPid(string $pid) {
        $this->pid = $pid;
    }
    public function sid(string $sid): V1RecordsTranscriptsSearchGet200ResponseHitsInner {
        $this->sid = $sid;
        return $this;
    }

    public function getSid() {
        return $this->sid;
    }

    public function setSid(string $sid) {
        $this->sid = $sid;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'length' => 'int',
        'offset' => 'int',
        'pid' => 'string',
        'sid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'length' => 'int64',
        'offset' => 'int64',
        'pid' => null,
        'sid' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'length' => false,
        'offset' => false,
        'pid' => false,
        'sid' => false
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
        'length' => 'length',
        'offset' => 'offset',
        'pid' => 'pid',
        'sid' => 'sid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'length' => 'setLength',
        'offset' => 'setOffset',
        'pid' => 'setPid',
        'sid' => 'setSid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'length' => 'getLength',
        'offset' => 'getOffset',
        'pid' => 'getPid',
        'sid' => 'getSid'
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
            'length' => $this->length,
            'offset' => $this->offset,
            'pid' => $this->pid,
            'sid' => $this->sid,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

