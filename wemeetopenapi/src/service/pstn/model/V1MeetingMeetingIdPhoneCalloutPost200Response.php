<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.7
 */
namespace wemeet\openapi\service\pstn\model;

use wemeet\openapi\core\xhttp\ModelInterface;


class V1MeetingMeetingIdPhoneCalloutPost200Response implements ModelInterface, \JsonSerializable
{

    /**
     * 外呼的电话号码对象列表。
    * 类型：\wemeet\openapi\service\pstn\model\V1MeetingMeetingIdPhoneCalloutPost200ResponseInvalidPhoneNumbersInner[]
     */
    protected $invalidPhoneNumbers = null;

    /**
     * 会议的唯一ID
    * 类型：string
     */
    protected $meetingId = null;

    /**
     * 外呼的电话号码对象列表。
    * 类型：\wemeet\openapi\service\pstn\model\V1MeetingMeetingIdPhoneCalloutPost200ResponsePhoneNumbersInner[]
     */
    protected $phoneNumbers = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['invalid_phone_numbers'])) {
            $this->invalidPhoneNumbers = $jsonArray['invalid_phone_numbers'];
        }
        if (isset($jsonArray['meeting_id'])) {
            $this->meetingId = $jsonArray['meeting_id'];
        }
        if (isset($jsonArray['phone_numbers'])) {
            $this->phoneNumbers = $jsonArray['phone_numbers'];
        }
    }

    public function invalidPhoneNumbers(array $invalidPhoneNumbers): V1MeetingMeetingIdPhoneCalloutPost200Response {
        $this->invalidPhoneNumbers = $invalidPhoneNumbers;
        return $this;
    }

    public function getInvalidPhoneNumbers() {
        return $this->invalidPhoneNumbers;
    }

    public function setInvalidPhoneNumbers(array $invalidPhoneNumbers) {
        $this->invalidPhoneNumbers = $invalidPhoneNumbers;
    }
    public function meetingId(string $meetingId): V1MeetingMeetingIdPhoneCalloutPost200Response {
        $this->meetingId = $meetingId;
        return $this;
    }

    public function getMeetingId() {
        return $this->meetingId;
    }

    public function setMeetingId(string $meetingId) {
        $this->meetingId = $meetingId;
    }
    public function phoneNumbers(array $phoneNumbers): V1MeetingMeetingIdPhoneCalloutPost200Response {
        $this->phoneNumbers = $phoneNumbers;
        return $this;
    }

    public function getPhoneNumbers() {
        return $this->phoneNumbers;
    }

    public function setPhoneNumbers(array $phoneNumbers) {
        $this->phoneNumbers = $phoneNumbers;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'invalid_phone_numbers' => '\wemeet\openapi\service\pstn\model\V1MeetingMeetingIdPhoneCalloutPost200ResponseInvalidPhoneNumbersInner[]',
        'meeting_id' => 'string',
        'phone_numbers' => '\wemeet\openapi\service\pstn\model\V1MeetingMeetingIdPhoneCalloutPost200ResponsePhoneNumbersInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'invalid_phone_numbers' => null,
        'meeting_id' => null,
        'phone_numbers' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'invalid_phone_numbers' => false,
        'meeting_id' => false,
        'phone_numbers' => false
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
        'invalid_phone_numbers' => 'invalid_phone_numbers',
        'meeting_id' => 'meeting_id',
        'phone_numbers' => 'phone_numbers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'invalid_phone_numbers' => 'setInvalidPhoneNumbers',
        'meeting_id' => 'setMeetingId',
        'phone_numbers' => 'setPhoneNumbers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'invalid_phone_numbers' => 'getInvalidPhoneNumbers',
        'meeting_id' => 'getMeetingId',
        'phone_numbers' => 'getPhoneNumbers'
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
            'invalid_phone_numbers' => $this->invalidPhoneNumbers,
            'meeting_id' => $this->meetingId,
            'phone_numbers' => $this->phoneNumbers,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

