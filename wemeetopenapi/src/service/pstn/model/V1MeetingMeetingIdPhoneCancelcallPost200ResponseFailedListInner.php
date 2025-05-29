<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.5
 */
namespace wemeet\openapi\service\pstn\model;

use wemeet\openapi\core\xhttp\ModelInterface;


class V1MeetingMeetingIdPhoneCancelcallPost200ResponseFailedListInner implements ModelInterface, \JsonSerializable
{

    /**
     * 国家/地区代码。（例如：中国是86）
    * 类型：int
     */
    protected $area = null;

    /**
     * 错误信息
    * 类型：string
     */
    protected $errorMsg = null;

    /**
     * 固定电话分机号。
    * 类型：string
     */
    protected $extensionNumber = null;

    /**
     * 电话号码或固定电话总机号。
    * 类型：string
     */
    protected $phone = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['area'])) {
            $this->area = $jsonArray['area'];
        }
        if (isset($jsonArray['error_msg'])) {
            $this->errorMsg = $jsonArray['error_msg'];
        }
        if (isset($jsonArray['extension_number'])) {
            $this->extensionNumber = $jsonArray['extension_number'];
        }
        if (isset($jsonArray['phone'])) {
            $this->phone = $jsonArray['phone'];
        }
    }

    public function area(int $area): V1MeetingMeetingIdPhoneCancelcallPost200ResponseFailedListInner {
        $this->area = $area;
        return $this;
    }

    public function getArea() {
        return $this->area;
    }

    public function setArea(int $area) {
        $this->area = $area;
    }
    public function errorMsg(string $errorMsg): V1MeetingMeetingIdPhoneCancelcallPost200ResponseFailedListInner {
        $this->errorMsg = $errorMsg;
        return $this;
    }

    public function getErrorMsg() {
        return $this->errorMsg;
    }

    public function setErrorMsg(string $errorMsg) {
        $this->errorMsg = $errorMsg;
    }
    public function extensionNumber(string $extensionNumber): V1MeetingMeetingIdPhoneCancelcallPost200ResponseFailedListInner {
        $this->extensionNumber = $extensionNumber;
        return $this;
    }

    public function getExtensionNumber() {
        return $this->extensionNumber;
    }

    public function setExtensionNumber(string $extensionNumber) {
        $this->extensionNumber = $extensionNumber;
    }
    public function phone(string $phone): V1MeetingMeetingIdPhoneCancelcallPost200ResponseFailedListInner {
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
        'error_msg' => 'string',
        'extension_number' => 'string',
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
        'error_msg' => null,
        'extension_number' => null,
        'phone' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'area' => false,
        'error_msg' => false,
        'extension_number' => false,
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
        'error_msg' => 'error_msg',
        'extension_number' => 'extension_number',
        'phone' => 'phone'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'area' => 'setArea',
        'error_msg' => 'setErrorMsg',
        'extension_number' => 'setExtensionNumber',
        'phone' => 'setPhone'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'area' => 'getArea',
        'error_msg' => 'getErrorMsg',
        'extension_number' => 'getExtensionNumber',
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
            'error_msg' => $this->errorMsg,
            'extension_number' => $this->extensionNumber,
            'phone' => $this->phone,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

