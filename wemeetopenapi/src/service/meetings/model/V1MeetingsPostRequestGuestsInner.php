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


class V1MeetingsPostRequestGuestsInner implements ModelInterface, \JsonSerializable
{
    /**
     * 国家/地区代码（例如：中国传86，不是+86，也不是0086）
    * 类型：
     */
    protected $area;
    /**
     * 手机号
    * 类型：
     */
    protected $phoneNumber;

    /**
     * 嘉宾名称
    * 类型：string
     */
    protected $guestName = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['area'])) {
            $this->area = $jsonArray['area'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter area');
        }
        if (isset($jsonArray['phone_number'])) {
            $this->phoneNumber = $jsonArray['phone_number'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter phone_number');
        }
        if (isset($jsonArray['guest_name'])) {
            $this->guestName = $jsonArray['guest_name'];
        }
    }

    public function area(string $area): V1MeetingsPostRequestGuestsInner {
        $this->area = $area;
        return $this;
    }

    public function getArea() {
        return $this->area;
    }

    public function setArea(string $area) {
        $this->area = $area;
    }
    public function guestName(string $guestName): V1MeetingsPostRequestGuestsInner {
        $this->guestName = $guestName;
        return $this;
    }

    public function getGuestName() {
        return $this->guestName;
    }

    public function setGuestName(string $guestName) {
        $this->guestName = $guestName;
    }
    public function phoneNumber(string $phoneNumber): V1MeetingsPostRequestGuestsInner {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    public function getPhoneNumber() {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(string $phoneNumber) {
        $this->phoneNumber = $phoneNumber;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'area' => 'string',
        'guest_name' => 'string',
        'phone_number' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'area' => null,
        'guest_name' => null,
        'phone_number' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'area' => false,
        'guest_name' => false,
        'phone_number' => false
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
        'guest_name' => 'guest_name',
        'phone_number' => 'phone_number'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'area' => 'setArea',
        'guest_name' => 'setGuestName',
        'phone_number' => 'setPhoneNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'area' => 'getArea',
        'guest_name' => 'getGuestName',
        'phone_number' => 'getPhoneNumber'
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
            'guest_name' => $this->guestName,
            'phone_number' => $this->phoneNumber,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

