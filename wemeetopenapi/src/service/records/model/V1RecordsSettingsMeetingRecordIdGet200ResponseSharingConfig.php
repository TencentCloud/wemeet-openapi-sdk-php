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


class V1RecordsSettingsMeetingRecordIdGet200ResponseSharingConfig implements ModelInterface, \JsonSerializable
{

    /**
     * 是否允许下载
    * 类型：bool
     */
    protected $allowDownload = null;

    /**
     * 是否允许查看录制转写
    * 类型：bool
     */
    protected $allowViewTranscripts = null;

    /**
     * 是否需要审批
    * 类型：bool
     */
    protected $enableApprove = null;

    /**
     * 是否开启秘密
    * 类型：bool
     */
    protected $enablePassword = null;

    /**
     * 共享链接开关，true-开启，false-未开启
    * 类型：bool
     */
    protected $enableSharing = null;

    /**
     * 是否开启共享链接有效期
    * 类型：bool
     */
    protected $enableSharingExpire = null;

    /**
     * 录制上传者、会议创建者、企业超级管理员或有企业录制管理权限的用户返回，
    * 类型：string
     */
    protected $password = null;

    /**
     * 访问范围，0-所有人，1-同企业
    * 类型：int
     */
    protected $shareScope = null;

    /**
     * 共享链接有效期，毫秒级时间戳
    * 类型：int
     */
    protected $sharingExpire = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['allow_download'])) {
            $this->allowDownload = $jsonArray['allow_download'];
        }
        if (isset($jsonArray['allow_view_transcripts'])) {
            $this->allowViewTranscripts = $jsonArray['allow_view_transcripts'];
        }
        if (isset($jsonArray['enable_approve'])) {
            $this->enableApprove = $jsonArray['enable_approve'];
        }
        if (isset($jsonArray['enable_password'])) {
            $this->enablePassword = $jsonArray['enable_password'];
        }
        if (isset($jsonArray['enable_sharing'])) {
            $this->enableSharing = $jsonArray['enable_sharing'];
        }
        if (isset($jsonArray['enable_sharing_expire'])) {
            $this->enableSharingExpire = $jsonArray['enable_sharing_expire'];
        }
        if (isset($jsonArray['password'])) {
            $this->password = $jsonArray['password'];
        }
        if (isset($jsonArray['share_scope'])) {
            $this->shareScope = $jsonArray['share_scope'];
        }
        if (isset($jsonArray['sharing_expire'])) {
            $this->sharingExpire = $jsonArray['sharing_expire'];
        }
    }

    public function allowDownload(bool $allowDownload): V1RecordsSettingsMeetingRecordIdGet200ResponseSharingConfig {
        $this->allowDownload = $allowDownload;
        return $this;
    }

    public function getAllowDownload() {
        return $this->allowDownload;
    }

    public function setAllowDownload(bool $allowDownload) {
        $this->allowDownload = $allowDownload;
    }
    public function allowViewTranscripts(bool $allowViewTranscripts): V1RecordsSettingsMeetingRecordIdGet200ResponseSharingConfig {
        $this->allowViewTranscripts = $allowViewTranscripts;
        return $this;
    }

    public function getAllowViewTranscripts() {
        return $this->allowViewTranscripts;
    }

    public function setAllowViewTranscripts(bool $allowViewTranscripts) {
        $this->allowViewTranscripts = $allowViewTranscripts;
    }
    public function enableApprove(bool $enableApprove): V1RecordsSettingsMeetingRecordIdGet200ResponseSharingConfig {
        $this->enableApprove = $enableApprove;
        return $this;
    }

    public function getEnableApprove() {
        return $this->enableApprove;
    }

    public function setEnableApprove(bool $enableApprove) {
        $this->enableApprove = $enableApprove;
    }
    public function enablePassword(bool $enablePassword): V1RecordsSettingsMeetingRecordIdGet200ResponseSharingConfig {
        $this->enablePassword = $enablePassword;
        return $this;
    }

    public function getEnablePassword() {
        return $this->enablePassword;
    }

    public function setEnablePassword(bool $enablePassword) {
        $this->enablePassword = $enablePassword;
    }
    public function enableSharing(bool $enableSharing): V1RecordsSettingsMeetingRecordIdGet200ResponseSharingConfig {
        $this->enableSharing = $enableSharing;
        return $this;
    }

    public function getEnableSharing() {
        return $this->enableSharing;
    }

    public function setEnableSharing(bool $enableSharing) {
        $this->enableSharing = $enableSharing;
    }
    public function enableSharingExpire(bool $enableSharingExpire): V1RecordsSettingsMeetingRecordIdGet200ResponseSharingConfig {
        $this->enableSharingExpire = $enableSharingExpire;
        return $this;
    }

    public function getEnableSharingExpire() {
        return $this->enableSharingExpire;
    }

    public function setEnableSharingExpire(bool $enableSharingExpire) {
        $this->enableSharingExpire = $enableSharingExpire;
    }
    public function password(string $password): V1RecordsSettingsMeetingRecordIdGet200ResponseSharingConfig {
        $this->password = $password;
        return $this;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword(string $password) {
        $this->password = $password;
    }
    public function shareScope(int $shareScope): V1RecordsSettingsMeetingRecordIdGet200ResponseSharingConfig {
        $this->shareScope = $shareScope;
        return $this;
    }

    public function getShareScope() {
        return $this->shareScope;
    }

    public function setShareScope(int $shareScope) {
        $this->shareScope = $shareScope;
    }
    public function sharingExpire(int $sharingExpire): V1RecordsSettingsMeetingRecordIdGet200ResponseSharingConfig {
        $this->sharingExpire = $sharingExpire;
        return $this;
    }

    public function getSharingExpire() {
        return $this->sharingExpire;
    }

    public function setSharingExpire(int $sharingExpire) {
        $this->sharingExpire = $sharingExpire;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'allow_download' => 'bool',
        'allow_view_transcripts' => 'bool',
        'enable_approve' => 'bool',
        'enable_password' => 'bool',
        'enable_sharing' => 'bool',
        'enable_sharing_expire' => 'bool',
        'password' => 'string',
        'share_scope' => 'int',
        'sharing_expire' => 'int'
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
        'allow_view_transcripts' => null,
        'enable_approve' => null,
        'enable_password' => null,
        'enable_sharing' => null,
        'enable_sharing_expire' => null,
        'password' => null,
        'share_scope' => 'int64',
        'sharing_expire' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'allow_download' => false,
        'allow_view_transcripts' => false,
        'enable_approve' => false,
        'enable_password' => false,
        'enable_sharing' => false,
        'enable_sharing_expire' => false,
        'password' => false,
        'share_scope' => false,
        'sharing_expire' => false
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
        'allow_view_transcripts' => 'allow_view_transcripts',
        'enable_approve' => 'enable_approve',
        'enable_password' => 'enable_password',
        'enable_sharing' => 'enable_sharing',
        'enable_sharing_expire' => 'enable_sharing_expire',
        'password' => 'password',
        'share_scope' => 'share_scope',
        'sharing_expire' => 'sharing_expire'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allow_download' => 'setAllowDownload',
        'allow_view_transcripts' => 'setAllowViewTranscripts',
        'enable_approve' => 'setEnableApprove',
        'enable_password' => 'setEnablePassword',
        'enable_sharing' => 'setEnableSharing',
        'enable_sharing_expire' => 'setEnableSharingExpire',
        'password' => 'setPassword',
        'share_scope' => 'setShareScope',
        'sharing_expire' => 'setSharingExpire'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allow_download' => 'getAllowDownload',
        'allow_view_transcripts' => 'getAllowViewTranscripts',
        'enable_approve' => 'getEnableApprove',
        'enable_password' => 'getEnablePassword',
        'enable_sharing' => 'getEnableSharing',
        'enable_sharing_expire' => 'getEnableSharingExpire',
        'password' => 'getPassword',
        'share_scope' => 'getShareScope',
        'sharing_expire' => 'getSharingExpire'
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
            'allow_view_transcripts' => $this->allowViewTranscripts,
            'enable_approve' => $this->enableApprove,
            'enable_password' => $this->enablePassword,
            'enable_sharing' => $this->enableSharing,
            'enable_sharing_expire' => $this->enableSharingExpire,
            'password' => $this->password,
            'share_scope' => $this->shareScope,
            'sharing_expire' => $this->sharingExpire,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

