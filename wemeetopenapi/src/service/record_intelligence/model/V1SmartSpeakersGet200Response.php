<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.4
 */
namespace wemeet\openapi\service\record_intelligence\model;

use wemeet\openapi\core\xhttp\ModelInterface;


class V1SmartSpeakersGet200Response implements ModelInterface, \JsonSerializable
{

    /**
     * 本录制文件的发言人列表，以对象数组形式返回
    * 类型：\wemeet\openapi\service\record_intelligence\model\V1SmartSpeakersGet200ResponseSpeakerListInner[]
     */
    protected $speakerList = null;

    /**
     * 发言人总数
    * 类型：int
     */
    protected $totalCount = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['speaker_list'])) {
            $this->speakerList = $jsonArray['speaker_list'];
        }
        if (isset($jsonArray['total_count'])) {
            $this->totalCount = $jsonArray['total_count'];
        }
    }

    public function speakerList(array $speakerList): V1SmartSpeakersGet200Response {
        $this->speakerList = $speakerList;
        return $this;
    }

    public function getSpeakerList() {
        return $this->speakerList;
    }

    public function setSpeakerList(array $speakerList) {
        $this->speakerList = $speakerList;
    }
    public function totalCount(int $totalCount): V1SmartSpeakersGet200Response {
        $this->totalCount = $totalCount;
        return $this;
    }

    public function getTotalCount() {
        return $this->totalCount;
    }

    public function setTotalCount(int $totalCount) {
        $this->totalCount = $totalCount;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'speaker_list' => '\wemeet\openapi\service\record_intelligence\model\V1SmartSpeakersGet200ResponseSpeakerListInner[]',
        'total_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'speaker_list' => null,
        'total_count' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'speaker_list' => false,
        'total_count' => false
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
        'speaker_list' => 'speaker_list',
        'total_count' => 'total_count'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'speaker_list' => 'setSpeakerList',
        'total_count' => 'setTotalCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'speaker_list' => 'getSpeakerList',
        'total_count' => 'getTotalCount'
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
            'speaker_list' => $this->speakerList,
            'total_count' => $this->totalCount,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

