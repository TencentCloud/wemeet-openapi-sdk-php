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


class V1MeetingsMeetingIdQosGet200ResponseParticipantsInner implements ModelInterface, \JsonSerializable
{

    /**
     * 会中ID
    * 类型：string
     */
    protected $msOpenId = null;

    /**
     * 会中用户名
    * 类型：string
     */
    protected $nickName = null;

    /**
    * 类型：\wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdQosGet200ResponseParticipantsInnerQosDetailsInner[]
     */
    protected $qosDetails = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['ms_open_id'])) {
            $this->msOpenId = $jsonArray['ms_open_id'];
        }
        if (isset($jsonArray['nick_name'])) {
            $this->nickName = $jsonArray['nick_name'];
        }
        if (isset($jsonArray['qos_details'])) {
            $this->qosDetails = $jsonArray['qos_details'];
        }
    }

    public function msOpenId(string $msOpenId): V1MeetingsMeetingIdQosGet200ResponseParticipantsInner {
        $this->msOpenId = $msOpenId;
        return $this;
    }

    public function getMsOpenId() {
        return $this->msOpenId;
    }

    public function setMsOpenId(string $msOpenId) {
        $this->msOpenId = $msOpenId;
    }
    public function nickName(string $nickName): V1MeetingsMeetingIdQosGet200ResponseParticipantsInner {
        $this->nickName = $nickName;
        return $this;
    }

    public function getNickName() {
        return $this->nickName;
    }

    public function setNickName(string $nickName) {
        $this->nickName = $nickName;
    }
    public function qosDetails(array $qosDetails): V1MeetingsMeetingIdQosGet200ResponseParticipantsInner {
        $this->qosDetails = $qosDetails;
        return $this;
    }

    public function getQosDetails() {
        return $this->qosDetails;
    }

    public function setQosDetails(array $qosDetails) {
        $this->qosDetails = $qosDetails;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ms_open_id' => 'string',
        'nick_name' => 'string',
        'qos_details' => '\wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdQosGet200ResponseParticipantsInnerQosDetailsInner[]'
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
        'nick_name' => null,
        'qos_details' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'ms_open_id' => false,
        'nick_name' => false,
        'qos_details' => false
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
        'nick_name' => 'nick_name',
        'qos_details' => 'qos_details'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ms_open_id' => 'setMsOpenId',
        'nick_name' => 'setNickName',
        'qos_details' => 'setQosDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ms_open_id' => 'getMsOpenId',
        'nick_name' => 'getNickName',
        'qos_details' => 'getQosDetails'
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
            'nick_name' => $this->nickName,
            'qos_details' => $this->qosDetails,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

