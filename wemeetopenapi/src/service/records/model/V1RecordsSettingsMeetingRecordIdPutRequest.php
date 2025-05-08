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


class V1RecordsSettingsMeetingRecordIdPutRequest implements ModelInterface, \JsonSerializable
{

    /**
     * 会议id
    * 类型：string
     */
    protected $meetingId = null;

    /**
     * 操作者ID
    * 类型：string
     */
    protected $operatorId = null;

    /**
     * 操作者ID的类型。3. rooms_id 说明：当前仅支持 rooms_id。如操作者为企业内 userid 或 openId，请使用 userid 字段。
    * 类型：int
     */
    protected $operatorIdType = null;

    /**
    * 类型：\wemeet\openapi\service\records\model\V1RecordsSettingsMeetingRecordIdPutRequestSharingConfig
     */
    protected $sharingConfig = null;

    /**
     * 用户id。仅会议创建者、企业超级管理员或有企业录制管理权限的用户可调用。调用方用于标示用户的唯一 ID（企业内部请使用企业唯一用户标识；OAuth2.0 鉴权用户请使用 openId）。 企业唯一用户标识说明： 1. 企业对接 SSO 时使用的员工唯一标识 ID。 2. 企业调用创建用户接口时传递的 userid 参数。
    * 类型：string
     */
    protected $userid = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['meeting_id'])) {
            $this->meetingId = $jsonArray['meeting_id'];
        }
        if (isset($jsonArray['operator_id'])) {
            $this->operatorId = $jsonArray['operator_id'];
        }
        if (isset($jsonArray['operator_id_type'])) {
            $this->operatorIdType = $jsonArray['operator_id_type'];
        }
        if (isset($jsonArray['sharing_config'])) {
            $this->sharingConfig = new V1RecordsSettingsMeetingRecordIdPutRequestSharingConfig($jsonArray['sharing_config']);
        }
        if (isset($jsonArray['userid'])) {
            $this->userid = $jsonArray['userid'];
        }
    }

    public function meetingId(string $meetingId): V1RecordsSettingsMeetingRecordIdPutRequest {
        $this->meetingId = $meetingId;
        return $this;
    }

    public function getMeetingId() {
        return $this->meetingId;
    }

    public function setMeetingId(string $meetingId) {
        $this->meetingId = $meetingId;
    }
    public function operatorId(string $operatorId): V1RecordsSettingsMeetingRecordIdPutRequest {
        $this->operatorId = $operatorId;
        return $this;
    }

    public function getOperatorId() {
        return $this->operatorId;
    }

    public function setOperatorId(string $operatorId) {
        $this->operatorId = $operatorId;
    }
    public function operatorIdType(int $operatorIdType): V1RecordsSettingsMeetingRecordIdPutRequest {
        $this->operatorIdType = $operatorIdType;
        return $this;
    }

    public function getOperatorIdType() {
        return $this->operatorIdType;
    }

    public function setOperatorIdType(int $operatorIdType) {
        $this->operatorIdType = $operatorIdType;
    }
    public function sharingConfig(V1RecordsSettingsMeetingRecordIdPutRequestSharingConfig $sharingConfig): V1RecordsSettingsMeetingRecordIdPutRequest {
        $this->sharingConfig = $sharingConfig;
        return $this;
    }

    public function getSharingConfig() {
        return $this->sharingConfig;
    }

    public function setSharingConfig(V1RecordsSettingsMeetingRecordIdPutRequestSharingConfig $sharingConfig) {
        $this->sharingConfig = $sharingConfig;
    }
    public function userid(string $userid): V1RecordsSettingsMeetingRecordIdPutRequest {
        $this->userid = $userid;
        return $this;
    }

    public function getUserid() {
        return $this->userid;
    }

    public function setUserid(string $userid) {
        $this->userid = $userid;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'meeting_id' => 'string',
        'operator_id' => 'string',
        'operator_id_type' => 'int',
        'sharing_config' => '\wemeet\openapi\service\records\model\V1RecordsSettingsMeetingRecordIdPutRequestSharingConfig',
        'userid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'meeting_id' => null,
        'operator_id' => null,
        'operator_id_type' => 'int64',
        'sharing_config' => null,
        'userid' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'meeting_id' => false,
        'operator_id' => false,
        'operator_id_type' => false,
        'sharing_config' => false,
        'userid' => false
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
        'meeting_id' => 'meeting_id',
        'operator_id' => 'operator_id',
        'operator_id_type' => 'operator_id_type',
        'sharing_config' => 'sharing_config',
        'userid' => 'userid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'meeting_id' => 'setMeetingId',
        'operator_id' => 'setOperatorId',
        'operator_id_type' => 'setOperatorIdType',
        'sharing_config' => 'setSharingConfig',
        'userid' => 'setUserid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'meeting_id' => 'getMeetingId',
        'operator_id' => 'getOperatorId',
        'operator_id_type' => 'getOperatorIdType',
        'sharing_config' => 'getSharingConfig',
        'userid' => 'getUserid'
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
            'meeting_id' => $this->meetingId,
            'operator_id' => $this->operatorId,
            'operator_id_type' => $this->operatorIdType,
            'sharing_config' => $this->sharingConfig,
            'userid' => $this->userid,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

