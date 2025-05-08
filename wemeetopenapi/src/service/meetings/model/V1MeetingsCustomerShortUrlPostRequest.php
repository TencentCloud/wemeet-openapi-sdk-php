<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.4
 */
namespace wemeet\openapi\service\meetings\model;

use wemeet\openapi\core\xhttp\ModelInterface;


class V1MeetingsCustomerShortUrlPostRequest implements ModelInterface, \JsonSerializable
{
    /**
     * 自定义参数，长度不超过256 字节。
    * 类型：
     */
    protected $customerData;
    /**
     * 会议ID
    * 类型：
     */
    protected $meetingId;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['customer_data'])) {
            $this->customerData = $jsonArray['customer_data'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter customer_data');
        }
        if (isset($jsonArray['meeting_id'])) {
            $this->meetingId = $jsonArray['meeting_id'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter meeting_id');
        }
    }

    public function customerData(string $customerData): V1MeetingsCustomerShortUrlPostRequest {
        $this->customerData = $customerData;
        return $this;
    }

    public function getCustomerData() {
        return $this->customerData;
    }

    public function setCustomerData(string $customerData) {
        $this->customerData = $customerData;
    }
    public function meetingId(string $meetingId): V1MeetingsCustomerShortUrlPostRequest {
        $this->meetingId = $meetingId;
        return $this;
    }

    public function getMeetingId() {
        return $this->meetingId;
    }

    public function setMeetingId(string $meetingId) {
        $this->meetingId = $meetingId;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'customer_data' => 'string',
        'meeting_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'customer_data' => null,
        'meeting_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'customer_data' => false,
        'meeting_id' => false
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
        'customer_data' => 'customer_data',
        'meeting_id' => 'meeting_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'customer_data' => 'setCustomerData',
        'meeting_id' => 'setMeetingId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'customer_data' => 'getCustomerData',
        'meeting_id' => 'getMeetingId'
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
            'customer_data' => $this->customerData,
            'meeting_id' => $this->meetingId,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

