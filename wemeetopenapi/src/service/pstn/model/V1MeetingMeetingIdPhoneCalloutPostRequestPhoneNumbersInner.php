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


class V1MeetingMeetingIdPhoneCalloutPostRequestPhoneNumbersInner implements ModelInterface, \JsonSerializable
{
    /**
     * 电话区号
    * 类型：
     */
    protected $area;
    /**
    * 类型：
     */
    protected $phone;

    /**
    * 类型：string
     */
    protected $extensionNumber = null;

    /**
    * 类型：string
     */
    protected $nickName = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['area'])) {
            $this->area = $jsonArray['area'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter area');
        }
        if (isset($jsonArray['phone'])) {
            $this->phone = $jsonArray['phone'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter phone');
        }
        if (isset($jsonArray['extension_number'])) {
            $this->extensionNumber = $jsonArray['extension_number'];
        }
        if (isset($jsonArray['nick_name'])) {
            $this->nickName = $jsonArray['nick_name'];
        }
    }

    public function area(int $area): V1MeetingMeetingIdPhoneCalloutPostRequestPhoneNumbersInner {
        $this->area = $area;
        return $this;
    }

    public function getArea() {
        return $this->area;
    }

    public function setArea(int $area) {
        $this->area = $area;
    }
    public function extensionNumber(string $extensionNumber): V1MeetingMeetingIdPhoneCalloutPostRequestPhoneNumbersInner {
        $this->extensionNumber = $extensionNumber;
        return $this;
    }

    public function getExtensionNumber() {
        return $this->extensionNumber;
    }

    public function setExtensionNumber(string $extensionNumber) {
        $this->extensionNumber = $extensionNumber;
    }
    public function nickName(string $nickName): V1MeetingMeetingIdPhoneCalloutPostRequestPhoneNumbersInner {
        $this->nickName = $nickName;
        return $this;
    }

    public function getNickName() {
        return $this->nickName;
    }

    public function setNickName(string $nickName) {
        $this->nickName = $nickName;
    }
    public function phone(string $phone): V1MeetingMeetingIdPhoneCalloutPostRequestPhoneNumbersInner {
        $this->phone = $phone;
        return $this;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function setPhone(string $phone) {
        $this->phone = $phone;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'area' => 'int',
        'extension_number' => 'string',
        'nick_name' => 'string',
        'phone' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'area' => 'int64',
        'extension_number' => null,
        'nick_name' => null,
        'phone' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'area' => false,
        'extension_number' => false,
        'nick_name' => false,
        'phone' => false
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
        'area' => 'area',
        'extension_number' => 'extension_number',
        'nick_name' => 'nick_name',
        'phone' => 'phone'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'area' => 'setArea',
        'extension_number' => 'setExtensionNumber',
        'nick_name' => 'setNickName',
        'phone' => 'setPhone'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'area' => 'getArea',
        'extension_number' => 'getExtensionNumber',
        'nick_name' => 'getNickName',
        'phone' => 'getPhone'
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
            'area' => $this->area,
            'extension_number' => $this->extensionNumber,
            'nick_name' => $this->nickName,
            'phone' => $this->phone,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

