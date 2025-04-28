<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.2
 */
namespace wemeet\openapi\service\record_intelligence\model;

use wemeet\openapi\core\xhttp\ModelInterface;


class V1SmartTopicsGet200ResponseAiTopicListInner implements ModelInterface, \JsonSerializable
{

    /**
     * 话题唯一ID
    * 类型：string
     */
    protected $topicId = null;

    /**
     * 话题主题，base6编码
    * 类型：string
     */
    protected $topicName = null;

    /**
     * 本话题的发言段落及时间段，以对象数组形式返回
    * 类型：\wemeet\openapi\service\record_intelligence\model\V1SmartTopicsGet200ResponseAiTopicListInnerTopicTimeInner[]
     */
    protected $topicTime = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['topic_id'])) {
            $this->topicId = $jsonArray['topic_id'];
        }
        if (isset($jsonArray['topic_name'])) {
            $this->topicName = $jsonArray['topic_name'];
        }
        if (isset($jsonArray['topic_time'])) {
            $this->topicTime = $jsonArray['topic_time'];
        }
    }

    public function topicId(string $topicId): V1SmartTopicsGet200ResponseAiTopicListInner {
        $this->topicId = $topicId;
        return $this;
    }

    public function getTopicId() {
        return $this->topicId;
    }

    public function setTopicId(string $topicId) {
        $this->topicId = $topicId;
    }
    public function topicName(string $topicName): V1SmartTopicsGet200ResponseAiTopicListInner {
        $this->topicName = $topicName;
        return $this;
    }

    public function getTopicName() {
        return $this->topicName;
    }

    public function setTopicName(string $topicName) {
        $this->topicName = $topicName;
    }
    public function topicTime(array $topicTime): V1SmartTopicsGet200ResponseAiTopicListInner {
        $this->topicTime = $topicTime;
        return $this;
    }

    public function getTopicTime() {
        return $this->topicTime;
    }

    public function setTopicTime(array $topicTime) {
        $this->topicTime = $topicTime;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'topic_id' => 'string',
        'topic_name' => 'string',
        'topic_time' => '\wemeet\openapi\service\record_intelligence\model\V1SmartTopicsGet200ResponseAiTopicListInnerTopicTimeInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'topic_id' => null,
        'topic_name' => null,
        'topic_time' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'topic_id' => false,
        'topic_name' => false,
        'topic_time' => false
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
        'topic_id' => 'topic_id',
        'topic_name' => 'topic_name',
        'topic_time' => 'topic_time'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'topic_id' => 'setTopicId',
        'topic_name' => 'setTopicName',
        'topic_time' => 'setTopicTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'topic_id' => 'getTopicId',
        'topic_name' => 'getTopicName',
        'topic_time' => 'getTopicTime'
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
            'topic_id' => $this->topicId,
            'topic_name' => $this->topicName,
            'topic_time' => $this->topicTime,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

