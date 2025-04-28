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


class V1RecordsTranscriptsDetailsGet200ResponseMinutesParagraphsInner implements ModelInterface, \JsonSerializable
{

    /**
     * 录制文件中的段落结束时间（毫秒）。
    * 类型：int
     */
    protected $endTime = null;

    /**
     * 段落id
    * 类型：string
     */
    protected $pid = null;

    /**
    * 类型：\wemeet\openapi\service\records\model\V1RecordsTranscriptsDetailsGet200ResponseMinutesParagraphsInnerSentencesInner[]
     */
    protected $sentences = null;

    /**
    * 类型：\wemeet\openapi\service\records\model\V1RecordsTranscriptsDetailsGet200ResponseMinutesParagraphsInnerSpeakerInfo
     */
    protected $speakerInfo = null;

    /**
     * 录制文件中的段落开始时间（毫秒）。
    * 类型：int
     */
    protected $startTime = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['end_time'])) {
            $this->endTime = $jsonArray['end_time'];
        }
        if (isset($jsonArray['pid'])) {
            $this->pid = $jsonArray['pid'];
        }
        if (isset($jsonArray['sentences'])) {
            $this->sentences = $jsonArray['sentences'];
        }
        if (isset($jsonArray['speaker_info'])) {
            $this->speakerInfo = new V1RecordsTranscriptsDetailsGet200ResponseMinutesParagraphsInnerSpeakerInfo($jsonArray['speaker_info']);
        }
        if (isset($jsonArray['start_time'])) {
            $this->startTime = $jsonArray['start_time'];
        }
    }

    public function endTime(int $endTime): V1RecordsTranscriptsDetailsGet200ResponseMinutesParagraphsInner {
        $this->endTime = $endTime;
        return $this;
    }

    public function getEndTime() {
        return $this->endTime;
    }

    public function setEndTime(int $endTime) {
        $this->endTime = $endTime;
    }
    public function pid(string $pid): V1RecordsTranscriptsDetailsGet200ResponseMinutesParagraphsInner {
        $this->pid = $pid;
        return $this;
    }

    public function getPid() {
        return $this->pid;
    }

    public function setPid(string $pid) {
        $this->pid = $pid;
    }
    public function sentences(array $sentences): V1RecordsTranscriptsDetailsGet200ResponseMinutesParagraphsInner {
        $this->sentences = $sentences;
        return $this;
    }

    public function getSentences() {
        return $this->sentences;
    }

    public function setSentences(array $sentences) {
        $this->sentences = $sentences;
    }
    public function speakerInfo(V1RecordsTranscriptsDetailsGet200ResponseMinutesParagraphsInnerSpeakerInfo $speakerInfo): V1RecordsTranscriptsDetailsGet200ResponseMinutesParagraphsInner {
        $this->speakerInfo = $speakerInfo;
        return $this;
    }

    public function getSpeakerInfo() {
        return $this->speakerInfo;
    }

    public function setSpeakerInfo(V1RecordsTranscriptsDetailsGet200ResponseMinutesParagraphsInnerSpeakerInfo $speakerInfo) {
        $this->speakerInfo = $speakerInfo;
    }
    public function startTime(int $startTime): V1RecordsTranscriptsDetailsGet200ResponseMinutesParagraphsInner {
        $this->startTime = $startTime;
        return $this;
    }

    public function getStartTime() {
        return $this->startTime;
    }

    public function setStartTime(int $startTime) {
        $this->startTime = $startTime;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'end_time' => 'int',
        'pid' => 'string',
        'sentences' => '\wemeet\openapi\service\records\model\V1RecordsTranscriptsDetailsGet200ResponseMinutesParagraphsInnerSentencesInner[]',
        'speaker_info' => '\wemeet\openapi\service\records\model\V1RecordsTranscriptsDetailsGet200ResponseMinutesParagraphsInnerSpeakerInfo',
        'start_time' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'end_time' => 'int64',
        'pid' => null,
        'sentences' => null,
        'speaker_info' => null,
        'start_time' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'end_time' => false,
        'pid' => false,
        'sentences' => false,
        'speaker_info' => false,
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
        'pid' => 'pid',
        'sentences' => 'sentences',
        'speaker_info' => 'speaker_info',
        'start_time' => 'start_time'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'end_time' => 'setEndTime',
        'pid' => 'setPid',
        'sentences' => 'setSentences',
        'speaker_info' => 'setSpeakerInfo',
        'start_time' => 'setStartTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'end_time' => 'getEndTime',
        'pid' => 'getPid',
        'sentences' => 'getSentences',
        'speaker_info' => 'getSpeakerInfo',
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
            'pid' => $this->pid,
            'sentences' => $this->sentences,
            'speaker_info' => $this->speakerInfo,
            'start_time' => $this->startTime,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

