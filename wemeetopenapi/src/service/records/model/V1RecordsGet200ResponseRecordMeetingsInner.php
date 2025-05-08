<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.4
 */
namespace wemeet\openapi\service\records\model;

use wemeet\openapi\core\xhttp\ModelInterface;


class V1RecordsGet200ResponseRecordMeetingsInner implements ModelInterface, \JsonSerializable
{

    /**
     * 主持人用户 ID。(查询会议录制文件列表接口返回。)
    * 类型：string
     */
    protected $hostUserId = null;

    /**
     * 会议类型，0-全部 1-外部会议 2-内部会议
    * 类型：int
     */
    protected $mediaSetType = null;

    /**
     * 会议开始时间，UNIX 时间戳（单位毫秒）。
    * 类型：int
     */
    protected $mediaStartTime = null;

    /**
     * 会议 code。
    * 类型：string
     */
    protected $meetingCode = null;

    /**
     * 会议唯一 ID。
    * 类型：string
     */
    protected $meetingId = null;

    /**
     * 会议录制 ID。
    * 类型：string
     */
    protected $meetingRecordId = null;

    /**
     * 录制文件列表。
    * 类型：\wemeet\openapi\service\records\model\V1RecordsGet200ResponseRecordMeetingsInnerRecordFilesInner[]
     */
    protected $recordFiles = null;

    /**
     * 返回的录制文件类型，0：云录制、2：上传录制
    * 类型：int
     */
    protected $recordType = null;

    /**
     * 录制状态。1：录制中，2：转码中，3：转码完成，当状态为转码完成才会返回录制文件列表。
    * 类型：int
     */
    protected $state = null;

    /**
     * 会议主题。
    * 类型：string
     */
    protected $subject = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['host_user_id'])) {
            $this->hostUserId = $jsonArray['host_user_id'];
        }
        if (isset($jsonArray['media_set_type'])) {
            $this->mediaSetType = $jsonArray['media_set_type'];
        }
        if (isset($jsonArray['media_start_time'])) {
            $this->mediaStartTime = $jsonArray['media_start_time'];
        }
        if (isset($jsonArray['meeting_code'])) {
            $this->meetingCode = $jsonArray['meeting_code'];
        }
        if (isset($jsonArray['meeting_id'])) {
            $this->meetingId = $jsonArray['meeting_id'];
        }
        if (isset($jsonArray['meeting_record_id'])) {
            $this->meetingRecordId = $jsonArray['meeting_record_id'];
        }
        if (isset($jsonArray['record_files'])) {
            $this->recordFiles = $jsonArray['record_files'];
        }
        if (isset($jsonArray['record_type'])) {
            $this->recordType = $jsonArray['record_type'];
        }
        if (isset($jsonArray['state'])) {
            $this->state = $jsonArray['state'];
        }
        if (isset($jsonArray['subject'])) {
            $this->subject = $jsonArray['subject'];
        }
    }

    public function hostUserId(string $hostUserId): V1RecordsGet200ResponseRecordMeetingsInner {
        $this->hostUserId = $hostUserId;
        return $this;
    }

    public function getHostUserId() {
        return $this->hostUserId;
    }

    public function setHostUserId(string $hostUserId) {
        $this->hostUserId = $hostUserId;
    }
    public function mediaSetType(int $mediaSetType): V1RecordsGet200ResponseRecordMeetingsInner {
        $this->mediaSetType = $mediaSetType;
        return $this;
    }

    public function getMediaSetType() {
        return $this->mediaSetType;
    }

    public function setMediaSetType(int $mediaSetType) {
        $this->mediaSetType = $mediaSetType;
    }
    public function mediaStartTime(int $mediaStartTime): V1RecordsGet200ResponseRecordMeetingsInner {
        $this->mediaStartTime = $mediaStartTime;
        return $this;
    }

    public function getMediaStartTime() {
        return $this->mediaStartTime;
    }

    public function setMediaStartTime(int $mediaStartTime) {
        $this->mediaStartTime = $mediaStartTime;
    }
    public function meetingCode(string $meetingCode): V1RecordsGet200ResponseRecordMeetingsInner {
        $this->meetingCode = $meetingCode;
        return $this;
    }

    public function getMeetingCode() {
        return $this->meetingCode;
    }

    public function setMeetingCode(string $meetingCode) {
        $this->meetingCode = $meetingCode;
    }
    public function meetingId(string $meetingId): V1RecordsGet200ResponseRecordMeetingsInner {
        $this->meetingId = $meetingId;
        return $this;
    }

    public function getMeetingId() {
        return $this->meetingId;
    }

    public function setMeetingId(string $meetingId) {
        $this->meetingId = $meetingId;
    }
    public function meetingRecordId(string $meetingRecordId): V1RecordsGet200ResponseRecordMeetingsInner {
        $this->meetingRecordId = $meetingRecordId;
        return $this;
    }

    public function getMeetingRecordId() {
        return $this->meetingRecordId;
    }

    public function setMeetingRecordId(string $meetingRecordId) {
        $this->meetingRecordId = $meetingRecordId;
    }
    public function recordFiles(array $recordFiles): V1RecordsGet200ResponseRecordMeetingsInner {
        $this->recordFiles = $recordFiles;
        return $this;
    }

    public function getRecordFiles() {
        return $this->recordFiles;
    }

    public function setRecordFiles(array $recordFiles) {
        $this->recordFiles = $recordFiles;
    }
    public function recordType(int $recordType): V1RecordsGet200ResponseRecordMeetingsInner {
        $this->recordType = $recordType;
        return $this;
    }

    public function getRecordType() {
        return $this->recordType;
    }

    public function setRecordType(int $recordType) {
        $this->recordType = $recordType;
    }
    public function state(int $state): V1RecordsGet200ResponseRecordMeetingsInner {
        $this->state = $state;
        return $this;
    }

    public function getState() {
        return $this->state;
    }

    public function setState(int $state) {
        $this->state = $state;
    }
    public function subject(string $subject): V1RecordsGet200ResponseRecordMeetingsInner {
        $this->subject = $subject;
        return $this;
    }

    public function getSubject() {
        return $this->subject;
    }

    public function setSubject(string $subject) {
        $this->subject = $subject;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'host_user_id' => 'string',
        'media_set_type' => 'int',
        'media_start_time' => 'int',
        'meeting_code' => 'string',
        'meeting_id' => 'string',
        'meeting_record_id' => 'string',
        'record_files' => '\wemeet\openapi\service\records\model\V1RecordsGet200ResponseRecordMeetingsInnerRecordFilesInner[]',
        'record_type' => 'int',
        'state' => 'int',
        'subject' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'host_user_id' => null,
        'media_set_type' => 'int64',
        'media_start_time' => 'int64',
        'meeting_code' => null,
        'meeting_id' => null,
        'meeting_record_id' => null,
        'record_files' => null,
        'record_type' => 'int64',
        'state' => 'int64',
        'subject' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'host_user_id' => false,
        'media_set_type' => false,
        'media_start_time' => false,
        'meeting_code' => false,
        'meeting_id' => false,
        'meeting_record_id' => false,
        'record_files' => false,
        'record_type' => false,
        'state' => false,
        'subject' => false
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
        'host_user_id' => 'host_user_id',
        'media_set_type' => 'media_set_type',
        'media_start_time' => 'media_start_time',
        'meeting_code' => 'meeting_code',
        'meeting_id' => 'meeting_id',
        'meeting_record_id' => 'meeting_record_id',
        'record_files' => 'record_files',
        'record_type' => 'record_type',
        'state' => 'state',
        'subject' => 'subject'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'host_user_id' => 'setHostUserId',
        'media_set_type' => 'setMediaSetType',
        'media_start_time' => 'setMediaStartTime',
        'meeting_code' => 'setMeetingCode',
        'meeting_id' => 'setMeetingId',
        'meeting_record_id' => 'setMeetingRecordId',
        'record_files' => 'setRecordFiles',
        'record_type' => 'setRecordType',
        'state' => 'setState',
        'subject' => 'setSubject'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'host_user_id' => 'getHostUserId',
        'media_set_type' => 'getMediaSetType',
        'media_start_time' => 'getMediaStartTime',
        'meeting_code' => 'getMeetingCode',
        'meeting_id' => 'getMeetingId',
        'meeting_record_id' => 'getMeetingRecordId',
        'record_files' => 'getRecordFiles',
        'record_type' => 'getRecordType',
        'state' => 'getState',
        'subject' => 'getSubject'
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
            'host_user_id' => $this->hostUserId,
            'media_set_type' => $this->mediaSetType,
            'media_start_time' => $this->mediaStartTime,
            'meeting_code' => $this->meetingCode,
            'meeting_id' => $this->meetingId,
            'meeting_record_id' => $this->meetingRecordId,
            'record_files' => $this->recordFiles,
            'record_type' => $this->recordType,
            'state' => $this->state,
            'subject' => $this->subject,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

