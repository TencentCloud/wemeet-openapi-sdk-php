<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.2
 */
namespace wemeet\openapi\service\meetings\model;

use wemeet\openapi\core\xhttp\ModelInterface;


class V1AsrConfigPutRequest implements ModelInterface, \JsonSerializable
{
    /**
     * 自定义热词，不得包含数字、特殊字符、中英混合，中文十个字以内，英文 20 个字母以内。同场会议或同一个人每次设置会覆盖上次设置内容。会议维度最多支持设置 500 个，创建者维度最多支持设置 100 个。
    * 类型：
     */
    protected $customizeWords;
    /**
     * 操作者ID
    * 类型：
     */
    protected $operatorId;
    /**
     * 操作者ID类型 1:userid，2:openid
    * 类型：
     */
    protected $operatorIdType;
    /**
     * 自定义热词标签，便于热词分类，最多支持输入 32 个字符（中英文）
    * 类型：
     */
    protected $tag;

    /**
     * 会议ID，有该字段则对该场会议生效。不传该字段则对操作人创建的会议生效
    * 类型：string
     */
    protected $meetingId = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['customize_words'])) {
            $this->customizeWords = $jsonArray['customize_words'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter customize_words');
        }
        if (isset($jsonArray['operator_id'])) {
            $this->operatorId = $jsonArray['operator_id'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter operator_id');
        }
        if (isset($jsonArray['operator_id_type'])) {
            $this->operatorIdType = $jsonArray['operator_id_type'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter operator_id_type');
        }
        if (isset($jsonArray['tag'])) {
            $this->tag = $jsonArray['tag'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter tag');
        }
        if (isset($jsonArray['meeting_id'])) {
            $this->meetingId = $jsonArray['meeting_id'];
        }
    }

    public function customizeWords(array $customizeWords): V1AsrConfigPutRequest {
        $this->customizeWords = $customizeWords;
        return $this;
    }

    public function getCustomizeWords() {
        return $this->customizeWords;
    }

    public function setCustomizeWords(array $customizeWords) {
        $this->customizeWords = $customizeWords;
    }
    public function meetingId(string $meetingId): V1AsrConfigPutRequest {
        $this->meetingId = $meetingId;
        return $this;
    }

    public function getMeetingId() {
        return $this->meetingId;
    }

    public function setMeetingId(string $meetingId) {
        $this->meetingId = $meetingId;
    }
    public function operatorId(string $operatorId): V1AsrConfigPutRequest {
        $this->operatorId = $operatorId;
        return $this;
    }

    public function getOperatorId() {
        return $this->operatorId;
    }

    public function setOperatorId(string $operatorId) {
        $this->operatorId = $operatorId;
    }
    public function operatorIdType(int $operatorIdType): V1AsrConfigPutRequest {
        $this->operatorIdType = $operatorIdType;
        return $this;
    }

    public function getOperatorIdType() {
        return $this->operatorIdType;
    }

    public function setOperatorIdType(int $operatorIdType) {
        $this->operatorIdType = $operatorIdType;
    }
    public function tag(string $tag): V1AsrConfigPutRequest {
        $this->tag = $tag;
        return $this;
    }

    public function getTag() {
        return $this->tag;
    }

    public function setTag(string $tag) {
        $this->tag = $tag;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'customize_words' => 'string[]',
        'meeting_id' => 'string',
        'operator_id' => 'string',
        'operator_id_type' => 'int',
        'tag' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'customize_words' => null,
        'meeting_id' => null,
        'operator_id' => null,
        'operator_id_type' => 'int64',
        'tag' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'customize_words' => false,
        'meeting_id' => false,
        'operator_id' => false,
        'operator_id_type' => false,
        'tag' => false
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
        'customize_words' => 'customize_words',
        'meeting_id' => 'meeting_id',
        'operator_id' => 'operator_id',
        'operator_id_type' => 'operator_id_type',
        'tag' => 'tag'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'customize_words' => 'setCustomizeWords',
        'meeting_id' => 'setMeetingId',
        'operator_id' => 'setOperatorId',
        'operator_id_type' => 'setOperatorIdType',
        'tag' => 'setTag'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'customize_words' => 'getCustomizeWords',
        'meeting_id' => 'getMeetingId',
        'operator_id' => 'getOperatorId',
        'operator_id_type' => 'getOperatorIdType',
        'tag' => 'getTag'
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
            'customize_words' => $this->customizeWords,
            'meeting_id' => $this->meetingId,
            'operator_id' => $this->operatorId,
            'operator_id_type' => $this->operatorIdType,
            'tag' => $this->tag,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

