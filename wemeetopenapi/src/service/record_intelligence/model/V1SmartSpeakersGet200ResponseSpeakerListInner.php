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


class V1SmartSpeakersGet200ResponseSpeakerListInner implements ModelInterface, \JsonSerializable
{

    /**
     * 会议中为每个参会成员授予的临时 ID，以会议为维度，表示同一场会议内用户的唯一标识，不同会议间 ms_open_id 隔离。
    * 类型：string
     */
    protected $msOpenId = null;

    /**
     * 发言人ID。speaker_id 必须与 speaker_id_type 配合使用。根据 speaker_id_type 的值，speaker_id 代表不同类型。
    * 类型：string
     */
    protected $speakerId = null;

    /**
     * 发言人ID类型： 1：userid 2：openid 6：temp_id（临时 ID，上传的文件无法映射到 userid，故仅在当前录制发言人中代表唯一标识）
    * 类型：int
     */
    protected $speakerIdType = null;

    /**
     * 发言人名称，base64编码
    * 类型：string
     */
    protected $speakerName = null;

    /**
     * 本录制文件某个具体发言人的发言时间段，以对象数组形式返回
    * 类型：\wemeet\openapi\service\record_intelligence\model\V1SmartSpeakersGet200ResponseSpeakerListInnerSpeakerTimeInner[]
     */
    protected $speakerTime = null;

    /**
     * 发言总时长
    * 类型：int
     */
    protected $totalTime = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['ms_open_id'])) {
            $this->msOpenId = $jsonArray['ms_open_id'];
        }
        if (isset($jsonArray['speaker_id'])) {
            $this->speakerId = $jsonArray['speaker_id'];
        }
        if (isset($jsonArray['speaker_id_type'])) {
            $this->speakerIdType = $jsonArray['speaker_id_type'];
        }
        if (isset($jsonArray['speaker_name'])) {
            $this->speakerName = $jsonArray['speaker_name'];
        }
        if (isset($jsonArray['speaker_time'])) {
            $this->speakerTime = $jsonArray['speaker_time'];
        }
        if (isset($jsonArray['total_time'])) {
            $this->totalTime = $jsonArray['total_time'];
        }
    }

    public function msOpenId(string $msOpenId): V1SmartSpeakersGet200ResponseSpeakerListInner {
        $this->msOpenId = $msOpenId;
        return $this;
    }

    public function getMsOpenId() {
        return $this->msOpenId;
    }

    public function setMsOpenId(string $msOpenId) {
        $this->msOpenId = $msOpenId;
    }
    public function speakerId(string $speakerId): V1SmartSpeakersGet200ResponseSpeakerListInner {
        $this->speakerId = $speakerId;
        return $this;
    }

    public function getSpeakerId() {
        return $this->speakerId;
    }

    public function setSpeakerId(string $speakerId) {
        $this->speakerId = $speakerId;
    }
    public function speakerIdType(int $speakerIdType): V1SmartSpeakersGet200ResponseSpeakerListInner {
        $this->speakerIdType = $speakerIdType;
        return $this;
    }

    public function getSpeakerIdType() {
        return $this->speakerIdType;
    }

    public function setSpeakerIdType(int $speakerIdType) {
        $this->speakerIdType = $speakerIdType;
    }
    public function speakerName(string $speakerName): V1SmartSpeakersGet200ResponseSpeakerListInner {
        $this->speakerName = $speakerName;
        return $this;
    }

    public function getSpeakerName() {
        return $this->speakerName;
    }

    public function setSpeakerName(string $speakerName) {
        $this->speakerName = $speakerName;
    }
    public function speakerTime(array $speakerTime): V1SmartSpeakersGet200ResponseSpeakerListInner {
        $this->speakerTime = $speakerTime;
        return $this;
    }

    public function getSpeakerTime() {
        return $this->speakerTime;
    }

    public function setSpeakerTime(array $speakerTime) {
        $this->speakerTime = $speakerTime;
    }
    public function totalTime(int $totalTime): V1SmartSpeakersGet200ResponseSpeakerListInner {
        $this->totalTime = $totalTime;
        return $this;
    }

    public function getTotalTime() {
        return $this->totalTime;
    }

    public function setTotalTime(int $totalTime) {
        $this->totalTime = $totalTime;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ms_open_id' => 'string',
        'speaker_id' => 'string',
        'speaker_id_type' => 'int',
        'speaker_name' => 'string',
        'speaker_time' => '\wemeet\openapi\service\record_intelligence\model\V1SmartSpeakersGet200ResponseSpeakerListInnerSpeakerTimeInner[]',
        'total_time' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'ms_open_id' => null,
        'speaker_id' => null,
        'speaker_id_type' => 'int64',
        'speaker_name' => null,
        'speaker_time' => null,
        'total_time' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'ms_open_id' => false,
        'speaker_id' => false,
        'speaker_id_type' => false,
        'speaker_name' => false,
        'speaker_time' => false,
        'total_time' => false
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
        'ms_open_id' => 'ms_open_id',
        'speaker_id' => 'speaker_id',
        'speaker_id_type' => 'speaker_id_type',
        'speaker_name' => 'speaker_name',
        'speaker_time' => 'speaker_time',
        'total_time' => 'total_time'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ms_open_id' => 'setMsOpenId',
        'speaker_id' => 'setSpeakerId',
        'speaker_id_type' => 'setSpeakerIdType',
        'speaker_name' => 'setSpeakerName',
        'speaker_time' => 'setSpeakerTime',
        'total_time' => 'setTotalTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ms_open_id' => 'getMsOpenId',
        'speaker_id' => 'getSpeakerId',
        'speaker_id_type' => 'getSpeakerIdType',
        'speaker_name' => 'getSpeakerName',
        'speaker_time' => 'getSpeakerTime',
        'total_time' => 'getTotalTime'
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
            'ms_open_id' => $this->msOpenId,
            'speaker_id' => $this->speakerId,
            'speaker_id_type' => $this->speakerIdType,
            'speaker_name' => $this->speakerName,
            'speaker_time' => $this->speakerTime,
            'total_time' => $this->totalTime,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

