<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.4
 */
namespace wemeet\openapi\service\meeting_room\model;

use wemeet\openapi\core\xhttp\ModelInterface;


class V1MeetingRoomsMeetingRoomIdGet200ResponsePmiInfo implements ModelInterface, \JsonSerializable
{

    /**
     * 设备会议号
    * 类型：string
     */
    protected $pmiCode = null;

    /**
     * 设备入会密码
    * 类型：string
     */
    protected $pmiPwd = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['pmi_code'])) {
            $this->pmiCode = $jsonArray['pmi_code'];
        }
        if (isset($jsonArray['pmi_pwd'])) {
            $this->pmiPwd = $jsonArray['pmi_pwd'];
        }
    }

    public function pmiCode(string $pmiCode): V1MeetingRoomsMeetingRoomIdGet200ResponsePmiInfo {
        $this->pmiCode = $pmiCode;
        return $this;
    }

    public function getPmiCode() {
        return $this->pmiCode;
    }

    public function setPmiCode(string $pmiCode) {
        $this->pmiCode = $pmiCode;
    }
    public function pmiPwd(string $pmiPwd): V1MeetingRoomsMeetingRoomIdGet200ResponsePmiInfo {
        $this->pmiPwd = $pmiPwd;
        return $this;
    }

    public function getPmiPwd() {
        return $this->pmiPwd;
    }

    public function setPmiPwd(string $pmiPwd) {
        $this->pmiPwd = $pmiPwd;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pmi_code' => 'string',
        'pmi_pwd' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pmi_code' => null,
        'pmi_pwd' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pmi_code' => false,
        'pmi_pwd' => false
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
        'pmi_code' => 'pmi_code',
        'pmi_pwd' => 'pmi_pwd'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pmi_code' => 'setPmiCode',
        'pmi_pwd' => 'setPmiPwd'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pmi_code' => 'getPmiCode',
        'pmi_pwd' => 'getPmiPwd'
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
            'pmi_code' => $this->pmiCode,
            'pmi_pwd' => $this->pmiPwd,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

