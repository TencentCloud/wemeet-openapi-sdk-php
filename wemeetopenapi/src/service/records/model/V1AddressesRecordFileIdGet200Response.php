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


class V1AddressesRecordFileIdGet200Response implements ModelInterface, \JsonSerializable
{

    /**
     * 录制转写文件（智能优化版）列表。OAuth 鉴权方式下，账号类型为个人免费版、企微创建企业时，该值返回为空。
    * 类型：\wemeet\openapi\service\records\model\V1AddressesRecordFileIdGet200ResponseAiMeetingTranscriptsInner[]
     */
    protected $aiMeetingTranscripts = null;

    /**
     * 智能纪要列表。OAuth 鉴权方式下，账号类型为个人免费版、企微创建企业时，该值返回为空。
    * 类型：\wemeet\openapi\service\records\model\V1AddressesRecordFileIdGet200ResponseAiMeetingTranscriptsInner[]
     */
    protected $aiMinutes = null;

    /**
     * 音频下载地址。OAuth 鉴权方式下，账号类型为个人免费版、企微创建企业时，该值返回为空。
    * 类型：string
     */
    protected $audioAddress = null;

    /**
     * 下载音频文件格式，例如：m4a。OAuth 鉴权方式下，账号类型为个人免费版、企微创建企业时，该值返回为空。
    * 类型：string
     */
    protected $audioAddressFileType = null;

    /**
     * 下载地址，过期时间6小时。OAuth 鉴权方式下，账号类型为个人免费版、企微创建企业时，该值返回为空。
    * 类型：string
     */
    protected $downloadAddress = null;

    /**
     * 下载视频文件格式，例如：mp4。
    * 类型：string
     */
    protected $downloadAddressFileType = null;

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
     * 会议转写文件列表。OAuth 鉴权方式下，账号类型为个人免费版、企微创建企业时，该值返回为空。
    * 类型：\wemeet\openapi\service\records\model\V1AddressesGet200ResponseRecordFilesInnerMeetingSummaryInner[]
     */
    protected $meetingSummary = null;

    /**
     * 录制文件 ID。
    * 类型：string
     */
    protected $recordFileId = null;

    /**
     * 播放地址。
    * 类型：string
     */
    protected $viewAddress = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['ai_meeting_transcripts'])) {
            $this->aiMeetingTranscripts = $jsonArray['ai_meeting_transcripts'];
        }
        if (isset($jsonArray['ai_minutes'])) {
            $this->aiMinutes = $jsonArray['ai_minutes'];
        }
        if (isset($jsonArray['audio_address'])) {
            $this->audioAddress = $jsonArray['audio_address'];
        }
        if (isset($jsonArray['audio_address_file_type'])) {
            $this->audioAddressFileType = $jsonArray['audio_address_file_type'];
        }
        if (isset($jsonArray['download_address'])) {
            $this->downloadAddress = $jsonArray['download_address'];
        }
        if (isset($jsonArray['download_address_file_type'])) {
            $this->downloadAddressFileType = $jsonArray['download_address_file_type'];
        }
        if (isset($jsonArray['meeting_code'])) {
            $this->meetingCode = $jsonArray['meeting_code'];
        }
        if (isset($jsonArray['meeting_id'])) {
            $this->meetingId = $jsonArray['meeting_id'];
        }
        if (isset($jsonArray['meeting_summary'])) {
            $this->meetingSummary = $jsonArray['meeting_summary'];
        }
        if (isset($jsonArray['record_file_id'])) {
            $this->recordFileId = $jsonArray['record_file_id'];
        }
        if (isset($jsonArray['view_address'])) {
            $this->viewAddress = $jsonArray['view_address'];
        }
    }

    public function aiMeetingTranscripts(array $aiMeetingTranscripts): V1AddressesRecordFileIdGet200Response {
        $this->aiMeetingTranscripts = $aiMeetingTranscripts;
        return $this;
    }

    public function getAiMeetingTranscripts() {
        return $this->aiMeetingTranscripts;
    }

    public function setAiMeetingTranscripts(array $aiMeetingTranscripts) {
        $this->aiMeetingTranscripts = $aiMeetingTranscripts;
    }
    public function aiMinutes(array $aiMinutes): V1AddressesRecordFileIdGet200Response {
        $this->aiMinutes = $aiMinutes;
        return $this;
    }

    public function getAiMinutes() {
        return $this->aiMinutes;
    }

    public function setAiMinutes(array $aiMinutes) {
        $this->aiMinutes = $aiMinutes;
    }
    public function audioAddress(string $audioAddress): V1AddressesRecordFileIdGet200Response {
        $this->audioAddress = $audioAddress;
        return $this;
    }

    public function getAudioAddress() {
        return $this->audioAddress;
    }

    public function setAudioAddress(string $audioAddress) {
        $this->audioAddress = $audioAddress;
    }
    public function audioAddressFileType(string $audioAddressFileType): V1AddressesRecordFileIdGet200Response {
        $this->audioAddressFileType = $audioAddressFileType;
        return $this;
    }

    public function getAudioAddressFileType() {
        return $this->audioAddressFileType;
    }

    public function setAudioAddressFileType(string $audioAddressFileType) {
        $this->audioAddressFileType = $audioAddressFileType;
    }
    public function downloadAddress(string $downloadAddress): V1AddressesRecordFileIdGet200Response {
        $this->downloadAddress = $downloadAddress;
        return $this;
    }

    public function getDownloadAddress() {
        return $this->downloadAddress;
    }

    public function setDownloadAddress(string $downloadAddress) {
        $this->downloadAddress = $downloadAddress;
    }
    public function downloadAddressFileType(string $downloadAddressFileType): V1AddressesRecordFileIdGet200Response {
        $this->downloadAddressFileType = $downloadAddressFileType;
        return $this;
    }

    public function getDownloadAddressFileType() {
        return $this->downloadAddressFileType;
    }

    public function setDownloadAddressFileType(string $downloadAddressFileType) {
        $this->downloadAddressFileType = $downloadAddressFileType;
    }
    public function meetingCode(string $meetingCode): V1AddressesRecordFileIdGet200Response {
        $this->meetingCode = $meetingCode;
        return $this;
    }

    public function getMeetingCode() {
        return $this->meetingCode;
    }

    public function setMeetingCode(string $meetingCode) {
        $this->meetingCode = $meetingCode;
    }
    public function meetingId(string $meetingId): V1AddressesRecordFileIdGet200Response {
        $this->meetingId = $meetingId;
        return $this;
    }

    public function getMeetingId() {
        return $this->meetingId;
    }

    public function setMeetingId(string $meetingId) {
        $this->meetingId = $meetingId;
    }
    public function meetingSummary(array $meetingSummary): V1AddressesRecordFileIdGet200Response {
        $this->meetingSummary = $meetingSummary;
        return $this;
    }

    public function getMeetingSummary() {
        return $this->meetingSummary;
    }

    public function setMeetingSummary(array $meetingSummary) {
        $this->meetingSummary = $meetingSummary;
    }
    public function recordFileId(string $recordFileId): V1AddressesRecordFileIdGet200Response {
        $this->recordFileId = $recordFileId;
        return $this;
    }

    public function getRecordFileId() {
        return $this->recordFileId;
    }

    public function setRecordFileId(string $recordFileId) {
        $this->recordFileId = $recordFileId;
    }
    public function viewAddress(string $viewAddress): V1AddressesRecordFileIdGet200Response {
        $this->viewAddress = $viewAddress;
        return $this;
    }

    public function getViewAddress() {
        return $this->viewAddress;
    }

    public function setViewAddress(string $viewAddress) {
        $this->viewAddress = $viewAddress;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ai_meeting_transcripts' => '\wemeet\openapi\service\records\model\V1AddressesRecordFileIdGet200ResponseAiMeetingTranscriptsInner[]',
        'ai_minutes' => '\wemeet\openapi\service\records\model\V1AddressesRecordFileIdGet200ResponseAiMeetingTranscriptsInner[]',
        'audio_address' => 'string',
        'audio_address_file_type' => 'string',
        'download_address' => 'string',
        'download_address_file_type' => 'string',
        'meeting_code' => 'string',
        'meeting_id' => 'string',
        'meeting_summary' => '\wemeet\openapi\service\records\model\V1AddressesGet200ResponseRecordFilesInnerMeetingSummaryInner[]',
        'record_file_id' => 'string',
        'view_address' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'ai_meeting_transcripts' => null,
        'ai_minutes' => null,
        'audio_address' => null,
        'audio_address_file_type' => null,
        'download_address' => null,
        'download_address_file_type' => null,
        'meeting_code' => null,
        'meeting_id' => null,
        'meeting_summary' => null,
        'record_file_id' => null,
        'view_address' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'ai_meeting_transcripts' => false,
        'ai_minutes' => false,
        'audio_address' => false,
        'audio_address_file_type' => false,
        'download_address' => false,
        'download_address_file_type' => false,
        'meeting_code' => false,
        'meeting_id' => false,
        'meeting_summary' => false,
        'record_file_id' => false,
        'view_address' => false
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
        'ai_meeting_transcripts' => 'ai_meeting_transcripts',
        'ai_minutes' => 'ai_minutes',
        'audio_address' => 'audio_address',
        'audio_address_file_type' => 'audio_address_file_type',
        'download_address' => 'download_address',
        'download_address_file_type' => 'download_address_file_type',
        'meeting_code' => 'meeting_code',
        'meeting_id' => 'meeting_id',
        'meeting_summary' => 'meeting_summary',
        'record_file_id' => 'record_file_id',
        'view_address' => 'view_address'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ai_meeting_transcripts' => 'setAiMeetingTranscripts',
        'ai_minutes' => 'setAiMinutes',
        'audio_address' => 'setAudioAddress',
        'audio_address_file_type' => 'setAudioAddressFileType',
        'download_address' => 'setDownloadAddress',
        'download_address_file_type' => 'setDownloadAddressFileType',
        'meeting_code' => 'setMeetingCode',
        'meeting_id' => 'setMeetingId',
        'meeting_summary' => 'setMeetingSummary',
        'record_file_id' => 'setRecordFileId',
        'view_address' => 'setViewAddress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ai_meeting_transcripts' => 'getAiMeetingTranscripts',
        'ai_minutes' => 'getAiMinutes',
        'audio_address' => 'getAudioAddress',
        'audio_address_file_type' => 'getAudioAddressFileType',
        'download_address' => 'getDownloadAddress',
        'download_address_file_type' => 'getDownloadAddressFileType',
        'meeting_code' => 'getMeetingCode',
        'meeting_id' => 'getMeetingId',
        'meeting_summary' => 'getMeetingSummary',
        'record_file_id' => 'getRecordFileId',
        'view_address' => 'getViewAddress'
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
            'ai_meeting_transcripts' => $this->aiMeetingTranscripts,
            'ai_minutes' => $this->aiMinutes,
            'audio_address' => $this->audioAddress,
            'audio_address_file_type' => $this->audioAddressFileType,
            'download_address' => $this->downloadAddress,
            'download_address_file_type' => $this->downloadAddressFileType,
            'meeting_code' => $this->meetingCode,
            'meeting_id' => $this->meetingId,
            'meeting_summary' => $this->meetingSummary,
            'record_file_id' => $this->recordFileId,
            'view_address' => $this->viewAddress,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

