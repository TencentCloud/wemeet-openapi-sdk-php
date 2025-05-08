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


class V1RecordsSettingsMeetingRecordIdGet200Response implements ModelInterface, \JsonSerializable
{

    /**
     * 会议ID
    * 类型：string
     */
    protected $meetingId = null;

    /**
     * 录制名称
    * 类型：string
     */
    protected $meetingRecordName = null;

    /**
    * 类型：\wemeet\openapi\service\records\model\V1RecordsSettingsMeetingRecordIdGet200ResponseSharingConfig
     */
    protected $sharingConfig = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['meeting_id'])) {
            $this->meetingId = $jsonArray['meeting_id'];
        }
        if (isset($jsonArray['meeting_record_name'])) {
            $this->meetingRecordName = $jsonArray['meeting_record_name'];
        }
        if (isset($jsonArray['sharing_config'])) {
            $this->sharingConfig = new V1RecordsSettingsMeetingRecordIdGet200ResponseSharingConfig($jsonArray['sharing_config']);
        }
    }

    public function meetingId(string $meetingId): V1RecordsSettingsMeetingRecordIdGet200Response {
        $this->meetingId = $meetingId;
        return $this;
    }

    public function getMeetingId() {
        return $this->meetingId;
    }

    public function setMeetingId(string $meetingId) {
        $this->meetingId = $meetingId;
    }
    public function meetingRecordName(string $meetingRecordName): V1RecordsSettingsMeetingRecordIdGet200Response {
        $this->meetingRecordName = $meetingRecordName;
        return $this;
    }

    public function getMeetingRecordName() {
        return $this->meetingRecordName;
    }

    public function setMeetingRecordName(string $meetingRecordName) {
        $this->meetingRecordName = $meetingRecordName;
    }
    public function sharingConfig(V1RecordsSettingsMeetingRecordIdGet200ResponseSharingConfig $sharingConfig): V1RecordsSettingsMeetingRecordIdGet200Response {
        $this->sharingConfig = $sharingConfig;
        return $this;
    }

    public function getSharingConfig() {
        return $this->sharingConfig;
    }

    public function setSharingConfig(V1RecordsSettingsMeetingRecordIdGet200ResponseSharingConfig $sharingConfig) {
        $this->sharingConfig = $sharingConfig;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'meeting_id' => 'string',
        'meeting_record_name' => 'string',
        'sharing_config' => '\wemeet\openapi\service\records\model\V1RecordsSettingsMeetingRecordIdGet200ResponseSharingConfig'
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
        'meeting_record_name' => null,
        'sharing_config' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'meeting_id' => false,
        'meeting_record_name' => false,
        'sharing_config' => false
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
        'meeting_record_name' => 'meeting_record_name',
        'sharing_config' => 'sharing_config'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'meeting_id' => 'setMeetingId',
        'meeting_record_name' => 'setMeetingRecordName',
        'sharing_config' => 'setSharingConfig'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'meeting_id' => 'getMeetingId',
        'meeting_record_name' => 'getMeetingRecordName',
        'sharing_config' => 'getSharingConfig'
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
            'meeting_record_name' => $this->meetingRecordName,
            'sharing_config' => $this->sharingConfig,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

