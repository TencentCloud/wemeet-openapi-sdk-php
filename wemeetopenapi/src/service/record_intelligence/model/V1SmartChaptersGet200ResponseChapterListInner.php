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


class V1SmartChaptersGet200ResponseChapterListInner implements ModelInterface, \JsonSerializable
{

    /**
     * 章节唯一ID
    * 类型：string
     */
    protected $chapterId = null;

    /**
     * 章节主题，返回base64编码后的结果
    * 类型：string
     */
    protected $chapterName = null;

    /**
     * 章节封面图片url
    * 类型：string
     */
    protected $picUrl = null;

    /**
     * 开始时间戳（单位毫秒）
    * 类型：string
     */
    protected $startTime = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['chapter_id'])) {
            $this->chapterId = $jsonArray['chapter_id'];
        }
        if (isset($jsonArray['chapter_name'])) {
            $this->chapterName = $jsonArray['chapter_name'];
        }
        if (isset($jsonArray['pic_url'])) {
            $this->picUrl = $jsonArray['pic_url'];
        }
        if (isset($jsonArray['start_time'])) {
            $this->startTime = $jsonArray['start_time'];
        }
    }

    public function chapterId(string $chapterId): V1SmartChaptersGet200ResponseChapterListInner {
        $this->chapterId = $chapterId;
        return $this;
    }

    public function getChapterId() {
        return $this->chapterId;
    }

    public function setChapterId(string $chapterId) {
        $this->chapterId = $chapterId;
    }
    public function chapterName(string $chapterName): V1SmartChaptersGet200ResponseChapterListInner {
        $this->chapterName = $chapterName;
        return $this;
    }

    public function getChapterName() {
        return $this->chapterName;
    }

    public function setChapterName(string $chapterName) {
        $this->chapterName = $chapterName;
    }
    public function picUrl(string $picUrl): V1SmartChaptersGet200ResponseChapterListInner {
        $this->picUrl = $picUrl;
        return $this;
    }

    public function getPicUrl() {
        return $this->picUrl;
    }

    public function setPicUrl(string $picUrl) {
        $this->picUrl = $picUrl;
    }
    public function startTime(string $startTime): V1SmartChaptersGet200ResponseChapterListInner {
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
        'chapter_id' => 'string',
        'chapter_name' => 'string',
        'pic_url' => 'string',
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
        'chapter_id' => null,
        'chapter_name' => null,
        'pic_url' => null,
        'start_time' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'chapter_id' => false,
        'chapter_name' => false,
        'pic_url' => false,
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
        'chapter_id' => 'chapter_id',
        'chapter_name' => 'chapter_name',
        'pic_url' => 'pic_url',
        'start_time' => 'start_time'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'chapter_id' => 'setChapterId',
        'chapter_name' => 'setChapterName',
        'pic_url' => 'setPicUrl',
        'start_time' => 'setStartTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'chapter_id' => 'getChapterId',
        'chapter_name' => 'getChapterName',
        'pic_url' => 'getPicUrl',
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
            'chapter_id' => $this->chapterId,
            'chapter_name' => $this->chapterName,
            'pic_url' => $this->picUrl,
            'start_time' => $this->startTime,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

