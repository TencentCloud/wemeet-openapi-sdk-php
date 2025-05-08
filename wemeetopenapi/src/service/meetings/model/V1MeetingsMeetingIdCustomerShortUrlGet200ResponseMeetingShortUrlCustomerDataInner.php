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


class V1MeetingsMeetingIdCustomerShortUrlGet200ResponseMeetingShortUrlCustomerDataInner implements ModelInterface, \JsonSerializable
{

    /**
     * 用户专属信息字段，用户自定义参数customerData
    * 类型：string
     */
    protected $customerData = null;

    /**
     * 根据customerData生成的专属参会链接
    * 类型：string
     */
    protected $meetingShortUrl = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['customer_data'])) {
            $this->customerData = $jsonArray['customer_data'];
        }
        if (isset($jsonArray['meeting_short_url'])) {
            $this->meetingShortUrl = $jsonArray['meeting_short_url'];
        }
    }

    public function customerData(string $customerData): V1MeetingsMeetingIdCustomerShortUrlGet200ResponseMeetingShortUrlCustomerDataInner {
        $this->customerData = $customerData;
        return $this;
    }

    public function getCustomerData() {
        return $this->customerData;
    }

    public function setCustomerData(string $customerData) {
        $this->customerData = $customerData;
    }
    public function meetingShortUrl(string $meetingShortUrl): V1MeetingsMeetingIdCustomerShortUrlGet200ResponseMeetingShortUrlCustomerDataInner {
        $this->meetingShortUrl = $meetingShortUrl;
        return $this;
    }

    public function getMeetingShortUrl() {
        return $this->meetingShortUrl;
    }

    public function setMeetingShortUrl(string $meetingShortUrl) {
        $this->meetingShortUrl = $meetingShortUrl;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'customer_data' => 'string',
        'meeting_short_url' => 'string'
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
        'meeting_short_url' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'customer_data' => false,
        'meeting_short_url' => false
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
        'meeting_short_url' => 'meeting_short_url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'customer_data' => 'setCustomerData',
        'meeting_short_url' => 'setMeetingShortUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'customer_data' => 'getCustomerData',
        'meeting_short_url' => 'getMeetingShortUrl'
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
            'meeting_short_url' => $this->meetingShortUrl,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

