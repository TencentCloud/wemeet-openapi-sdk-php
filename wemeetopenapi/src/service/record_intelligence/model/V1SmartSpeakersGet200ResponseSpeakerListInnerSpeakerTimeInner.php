<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.7
 */
namespace wemeet\openapi\service\record_intelligence\model;

use wemeet\openapi\core\xhttp\ModelInterface;


class V1SmartSpeakersGet200ResponseSpeakerListInnerSpeakerTimeInner implements ModelInterface, \JsonSerializable
{

    /**
     * 结束时间戳（单位毫秒）
    * 类型：string
     */
    protected $endTime = null;

    /**
     * 发言语句id
    * 类型：string
     */
    protected $sid = null;

    /**
     * 开始时间戳（单位毫秒）
    * 类型：string
     */
    protected $startTime = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['end_time'])) {
            $this->endTime = $jsonArray['end_time'];
        }
        if (isset($jsonArray['sid'])) {
            $this->sid = $jsonArray['sid'];
        }
        if (isset($jsonArray['start_time'])) {
            $this->startTime = $jsonArray['start_time'];
        }
    }

    public function endTime(string $endTime): V1SmartSpeakersGet200ResponseSpeakerListInnerSpeakerTimeInner {
        $this->endTime = $endTime;
        return $this;
    }

    public function getEndTime() {
        return $this->endTime;
    }

    public function setEndTime(string $endTime) {
        $this->endTime = $endTime;
    }
    public function sid(string $sid): V1SmartSpeakersGet200ResponseSpeakerListInnerSpeakerTimeInner {
        $this->sid = $sid;
        return $this;
    }

    public function getSid() {
        return $this->sid;
    }

    public function setSid(string $sid) {
        $this->sid = $sid;
    }
    public function startTime(string $startTime): V1SmartSpeakersGet200ResponseSpeakerListInnerSpeakerTimeInner {
        $this->startTime = $startTime;
        return $this;
    }

    public function getStartTime() {
        return $this->startTime;
    }

    public function setStartTime(string $startTime) {
        $this->startTime = $startTime;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'end_time' => 'string',
        'sid' => 'string',
        'start_time' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'end_time' => null,
        'sid' => null,
        'start_time' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'end_time' => false,
        'sid' => false,
        'start_time' => false
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
        'end_time' => 'end_time',
        'sid' => 'sid',
        'start_time' => 'start_time'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'end_time' => 'setEndTime',
        'sid' => 'setSid',
        'start_time' => 'setStartTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'end_time' => 'getEndTime',
        'sid' => 'getSid',
        'start_time' => 'getStartTime'
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
            'end_time' => $this->endTime,
            'sid' => $this->sid,
            'start_time' => $this->startTime,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

