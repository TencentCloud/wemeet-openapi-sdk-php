<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.4
 */
namespace wemeet\openapi\service\meetings\model;

use wemeet\openapi\core\xhttp\ModelInterface;


class V1MeetingsMeetingIdEnrollIdsPost200ResponseEnrollIdListInner implements ModelInterface, \JsonSerializable
{

    /**
     * 报名ID
    * 类型：int
     */
    protected $enrollId = null;

    /**
     * 当场会议的用户临时 ID，适用于所有用户。
    * 类型：string
     */
    protected $msOpenId = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['enroll_id'])) {
            $this->enrollId = $jsonArray['enroll_id'];
        }
        if (isset($jsonArray['ms_open_id'])) {
            $this->msOpenId = $jsonArray['ms_open_id'];
        }
    }

    public function enrollId(int $enrollId): V1MeetingsMeetingIdEnrollIdsPost200ResponseEnrollIdListInner {
        $this->enrollId = $enrollId;
        return $this;
    }

    public function getEnrollId() {
        return $this->enrollId;
    }

    public function setEnrollId(int $enrollId) {
        $this->enrollId = $enrollId;
    }
    public function msOpenId(string $msOpenId): V1MeetingsMeetingIdEnrollIdsPost200ResponseEnrollIdListInner {
        $this->msOpenId = $msOpenId;
        return $this;
    }

    public function getMsOpenId() {
        return $this->msOpenId;
    }

    public function setMsOpenId(string $msOpenId) {
        $this->msOpenId = $msOpenId;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'enroll_id' => 'int',
        'ms_open_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'enroll_id' => 'int64',
        'ms_open_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'enroll_id' => false,
        'ms_open_id' => false
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
        'enroll_id' => 'enroll_id',
        'ms_open_id' => 'ms_open_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'enroll_id' => 'setEnrollId',
        'ms_open_id' => 'setMsOpenId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'enroll_id' => 'getEnrollId',
        'ms_open_id' => 'getMsOpenId'
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
            'enroll_id' => $this->enrollId,
            'ms_open_id' => $this->msOpenId,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

