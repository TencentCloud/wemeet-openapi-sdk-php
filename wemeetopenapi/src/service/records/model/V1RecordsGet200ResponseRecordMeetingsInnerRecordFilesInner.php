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


class V1RecordsGet200ResponseRecordMeetingsInnerRecordFilesInner implements ModelInterface, \JsonSerializable
{

    /**
     * 是否允许下载，开启共享时返回。
    * 类型：bool
     */
    protected $allowDownload = null;

    /**
     * 访问密码，开启共享时返回。
    * 类型：string
     */
    protected $password = null;

    /**
     * 结束录制时间，UNIX 时间戳（单位毫秒）。
    * 类型：int
     */
    protected $recordEndTime = null;

    /**
     * 录制文件 ID。
    * 类型：string
     */
    protected $recordFileId = null;

    /**
     * 文件大小（单位字节）。
    * 类型：int
     */
    protected $recordSize = null;

    /**
     * 开始录制时间，UNIX 时间戳（单位毫秒）。
    * 类型：int
     */
    protected $recordStartTime = null;

    /**
     * 仅参会成员可查看，开启共享时返回。
    * 类型：bool
     */
    protected $requiredParticipant = null;

    /**
     * 仅企业用户可查看，开启共享时返回。
    * 类型：bool
     */
    protected $requiredSameCorp = null;

    /**
     * 共享链接有效期（单位毫秒），当未开启共享时，返回0表示永久有效；开启共享时返回。
    * 类型：int
     */
    protected $sharingExpire = null;

    /**
     * 共享状态，是否开启共享。0：未开启1：开启，当开启共享时返回访问权限、访问密码、共享链接有效期、是否允许下载。
    * 类型：int
     */
    protected $sharingState = null;

    /**
     * 共享链接，开启共享时返回。
    * 类型：string
     */
    protected $sharingUrl = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['allow_download'])) {
            $this->allowDownload = $jsonArray['allow_download'];
        }
        if (isset($jsonArray['password'])) {
            $this->password = $jsonArray['password'];
        }
        if (isset($jsonArray['record_end_time'])) {
            $this->recordEndTime = $jsonArray['record_end_time'];
        }
        if (isset($jsonArray['record_file_id'])) {
            $this->recordFileId = $jsonArray['record_file_id'];
        }
        if (isset($jsonArray['record_size'])) {
            $this->recordSize = $jsonArray['record_size'];
        }
        if (isset($jsonArray['record_start_time'])) {
            $this->recordStartTime = $jsonArray['record_start_time'];
        }
        if (isset($jsonArray['required_participant'])) {
            $this->requiredParticipant = $jsonArray['required_participant'];
        }
        if (isset($jsonArray['required_same_corp'])) {
            $this->requiredSameCorp = $jsonArray['required_same_corp'];
        }
        if (isset($jsonArray['sharing_expire'])) {
            $this->sharingExpire = $jsonArray['sharing_expire'];
        }
        if (isset($jsonArray['sharing_state'])) {
            $this->sharingState = $jsonArray['sharing_state'];
        }
        if (isset($jsonArray['sharing_url'])) {
            $this->sharingUrl = $jsonArray['sharing_url'];
        }
    }

    public function allowDownload(bool $allowDownload): V1RecordsGet200ResponseRecordMeetingsInnerRecordFilesInner {
        $this->allowDownload = $allowDownload;
        return $this;
    }

    public function getAllowDownload() {
        return $this->allowDownload;
    }

    public function setAllowDownload(bool $allowDownload) {
        $this->allowDownload = $allowDownload;
    }
    public function password(string $password): V1RecordsGet200ResponseRecordMeetingsInnerRecordFilesInner {
        $this->password = $password;
        return $this;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword(string $password) {
        $this->password = $password;
    }
    public function recordEndTime(int $recordEndTime): V1RecordsGet200ResponseRecordMeetingsInnerRecordFilesInner {
        $this->recordEndTime = $recordEndTime;
        return $this;
    }

    public function getRecordEndTime() {
        return $this->recordEndTime;
    }

    public function setRecordEndTime(int $recordEndTime) {
        $this->recordEndTime = $recordEndTime;
    }
    public function recordFileId(string $recordFileId): V1RecordsGet200ResponseRecordMeetingsInnerRecordFilesInner {
        $this->recordFileId = $recordFileId;
        return $this;
    }

    public function getRecordFileId() {
        return $this->recordFileId;
    }

    public function setRecordFileId(string $recordFileId) {
        $this->recordFileId = $recordFileId;
    }
    public function recordSize(int $recordSize): V1RecordsGet200ResponseRecordMeetingsInnerRecordFilesInner {
        $this->recordSize = $recordSize;
        return $this;
    }

    public function getRecordSize() {
        return $this->recordSize;
    }

    public function setRecordSize(int $recordSize) {
        $this->recordSize = $recordSize;
    }
    public function recordStartTime(int $recordStartTime): V1RecordsGet200ResponseRecordMeetingsInnerRecordFilesInner {
        $this->recordStartTime = $recordStartTime;
        return $this;
    }

    public function getRecordStartTime() {
        return $this->recordStartTime;
    }

    public function setRecordStartTime(int $recordStartTime) {
        $this->recordStartTime = $recordStartTime;
    }
    public function requiredParticipant(bool $requiredParticipant): V1RecordsGet200ResponseRecordMeetingsInnerRecordFilesInner {
        $this->requiredParticipant = $requiredParticipant;
        return $this;
    }

    public function getRequiredParticipant() {
        return $this->requiredParticipant;
    }

    public function setRequiredParticipant(bool $requiredParticipant) {
        $this->requiredParticipant = $requiredParticipant;
    }
    public function requiredSameCorp(bool $requiredSameCorp): V1RecordsGet200ResponseRecordMeetingsInnerRecordFilesInner {
        $this->requiredSameCorp = $requiredSameCorp;
        return $this;
    }

    public function getRequiredSameCorp() {
        return $this->requiredSameCorp;
    }

    public function setRequiredSameCorp(bool $requiredSameCorp) {
        $this->requiredSameCorp = $requiredSameCorp;
    }
    public function sharingExpire(int $sharingExpire): V1RecordsGet200ResponseRecordMeetingsInnerRecordFilesInner {
        $this->sharingExpire = $sharingExpire;
        return $this;
    }

    public function getSharingExpire() {
        return $this->sharingExpire;
    }

    public function setSharingExpire(int $sharingExpire) {
        $this->sharingExpire = $sharingExpire;
    }
    public function sharingState(int $sharingState): V1RecordsGet200ResponseRecordMeetingsInnerRecordFilesInner {
        $this->sharingState = $sharingState;
        return $this;
    }

    public function getSharingState() {
        return $this->sharingState;
    }

    public function setSharingState(int $sharingState) {
        $this->sharingState = $sharingState;
    }
    public function sharingUrl(string $sharingUrl): V1RecordsGet200ResponseRecordMeetingsInnerRecordFilesInner {
        $this->sharingUrl = $sharingUrl;
        return $this;
    }

    public function getSharingUrl() {
        return $this->sharingUrl;
    }

    public function setSharingUrl(string $sharingUrl) {
        $this->sharingUrl = $sharingUrl;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'allow_download' => 'bool',
        'password' => 'string',
        'record_end_time' => 'int',
        'record_file_id' => 'string',
        'record_size' => 'int',
        'record_start_time' => 'int',
        'required_participant' => 'bool',
        'required_same_corp' => 'bool',
        'sharing_expire' => 'int',
        'sharing_state' => 'int',
        'sharing_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'allow_download' => null,
        'password' => null,
        'record_end_time' => 'int64',
        'record_file_id' => null,
        'record_size' => 'int64',
        'record_start_time' => 'int64',
        'required_participant' => null,
        'required_same_corp' => null,
        'sharing_expire' => 'int64',
        'sharing_state' => 'int64',
        'sharing_url' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'allow_download' => false,
        'password' => false,
        'record_end_time' => false,
        'record_file_id' => false,
        'record_size' => false,
        'record_start_time' => false,
        'required_participant' => false,
        'required_same_corp' => false,
        'sharing_expire' => false,
        'sharing_state' => false,
        'sharing_url' => false
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
        'allow_download' => 'allow_download',
        'password' => 'password',
        'record_end_time' => 'record_end_time',
        'record_file_id' => 'record_file_id',
        'record_size' => 'record_size',
        'record_start_time' => 'record_start_time',
        'required_participant' => 'required_participant',
        'required_same_corp' => 'required_same_corp',
        'sharing_expire' => 'sharing_expire',
        'sharing_state' => 'sharing_state',
        'sharing_url' => 'sharing_url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allow_download' => 'setAllowDownload',
        'password' => 'setPassword',
        'record_end_time' => 'setRecordEndTime',
        'record_file_id' => 'setRecordFileId',
        'record_size' => 'setRecordSize',
        'record_start_time' => 'setRecordStartTime',
        'required_participant' => 'setRequiredParticipant',
        'required_same_corp' => 'setRequiredSameCorp',
        'sharing_expire' => 'setSharingExpire',
        'sharing_state' => 'setSharingState',
        'sharing_url' => 'setSharingUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allow_download' => 'getAllowDownload',
        'password' => 'getPassword',
        'record_end_time' => 'getRecordEndTime',
        'record_file_id' => 'getRecordFileId',
        'record_size' => 'getRecordSize',
        'record_start_time' => 'getRecordStartTime',
        'required_participant' => 'getRequiredParticipant',
        'required_same_corp' => 'getRequiredSameCorp',
        'sharing_expire' => 'getSharingExpire',
        'sharing_state' => 'getSharingState',
        'sharing_url' => 'getSharingUrl'
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
            'allow_download' => $this->allowDownload,
            'password' => $this->password,
            'record_end_time' => $this->recordEndTime,
            'record_file_id' => $this->recordFileId,
            'record_size' => $this->recordSize,
            'record_start_time' => $this->recordStartTime,
            'required_participant' => $this->requiredParticipant,
            'required_same_corp' => $this->requiredSameCorp,
            'sharing_expire' => $this->sharingExpire,
            'sharing_state' => $this->sharingState,
            'sharing_url' => $this->sharingUrl,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

