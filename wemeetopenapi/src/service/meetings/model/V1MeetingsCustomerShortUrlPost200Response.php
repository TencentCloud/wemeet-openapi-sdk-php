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


class V1MeetingsCustomerShortUrlPost200Response implements ModelInterface, \JsonSerializable
{

    /**
    * 类型：\wemeet\openapi\service\meetings\model\V1MeetingsCustomerShortUrlPost200ResponseMeetingShortUrlCustomerData
     */
    protected $meetingShortUrlCustomerData = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['meeting_short_url_customer_data'])) {
            $this->meetingShortUrlCustomerData = new V1MeetingsCustomerShortUrlPost200ResponseMeetingShortUrlCustomerData($jsonArray['meeting_short_url_customer_data']);
        }
    }

    public function meetingShortUrlCustomerData(V1MeetingsCustomerShortUrlPost200ResponseMeetingShortUrlCustomerData $meetingShortUrlCustomerData): V1MeetingsCustomerShortUrlPost200Response {
        $this->meetingShortUrlCustomerData = $meetingShortUrlCustomerData;
        return $this;
    }

    public function getMeetingShortUrlCustomerData() {
        return $this->meetingShortUrlCustomerData;
    }

    public function setMeetingShortUrlCustomerData(V1MeetingsCustomerShortUrlPost200ResponseMeetingShortUrlCustomerData $meetingShortUrlCustomerData) {
        $this->meetingShortUrlCustomerData = $meetingShortUrlCustomerData;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'meeting_short_url_customer_data' => '\wemeet\openapi\service\meetings\model\V1MeetingsCustomerShortUrlPost200ResponseMeetingShortUrlCustomerData'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'meeting_short_url_customer_data' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'meeting_short_url_customer_data' => false
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
        'meeting_short_url_customer_data' => 'meeting_short_url_customer_data'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'meeting_short_url_customer_data' => 'setMeetingShortUrlCustomerData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'meeting_short_url_customer_data' => 'getMeetingShortUrlCustomerData'
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
            'meeting_short_url_customer_data' => $this->meetingShortUrlCustomerData,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

