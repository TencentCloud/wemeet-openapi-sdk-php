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


class V1MeetingRoomsMeetingRoomIdGet200ResponseAccountInfo implements ModelInterface, \JsonSerializable
{

    /**
    * 类型：int
     */
    protected $accountNewType = null;

    /**
     * 账号类型，0：普通 1：专款 2：试用
    * 类型：int
     */
    protected $accountType = null;

    /**
     * 1-预装 2-体验 3-付费
    * 类型：int
     */
    protected $proAccountType = null;

    /**
     * 有效期限
    * 类型：string
     */
    protected $validPeriod = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['account_new_type'])) {
            $this->accountNewType = $jsonArray['account_new_type'];
        }
        if (isset($jsonArray['account_type'])) {
            $this->accountType = $jsonArray['account_type'];
        }
        if (isset($jsonArray['pro_account_type'])) {
            $this->proAccountType = $jsonArray['pro_account_type'];
        }
        if (isset($jsonArray['valid_period'])) {
            $this->validPeriod = $jsonArray['valid_period'];
        }
    }

    public function accountNewType(int $accountNewType): V1MeetingRoomsMeetingRoomIdGet200ResponseAccountInfo {
        $this->accountNewType = $accountNewType;
        return $this;
    }

    public function getAccountNewType() {
        return $this->accountNewType;
    }

    public function setAccountNewType(int $accountNewType) {
        $this->accountNewType = $accountNewType;
    }
    public function accountType(int $accountType): V1MeetingRoomsMeetingRoomIdGet200ResponseAccountInfo {
        $this->accountType = $accountType;
        return $this;
    }

    public function getAccountType() {
        return $this->accountType;
    }

    public function setAccountType(int $accountType) {
        $this->accountType = $accountType;
    }
    public function proAccountType(int $proAccountType): V1MeetingRoomsMeetingRoomIdGet200ResponseAccountInfo {
        $this->proAccountType = $proAccountType;
        return $this;
    }

    public function getProAccountType() {
        return $this->proAccountType;
    }

    public function setProAccountType(int $proAccountType) {
        $this->proAccountType = $proAccountType;
    }
    public function validPeriod(string $validPeriod): V1MeetingRoomsMeetingRoomIdGet200ResponseAccountInfo {
        $this->validPeriod = $validPeriod;
        return $this;
    }

    public function getValidPeriod() {
        return $this->validPeriod;
    }

    public function setValidPeriod(string $validPeriod) {
        $this->validPeriod = $validPeriod;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_new_type' => 'int',
        'account_type' => 'int',
        'pro_account_type' => 'int',
        'valid_period' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'account_new_type' => 'int64',
        'account_type' => 'int64',
        'pro_account_type' => 'int64',
        'valid_period' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'account_new_type' => false,
        'account_type' => false,
        'pro_account_type' => false,
        'valid_period' => false
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
        'account_new_type' => 'account_new_type',
        'account_type' => 'account_type',
        'pro_account_type' => 'pro_account_type',
        'valid_period' => 'valid_period'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_new_type' => 'setAccountNewType',
        'account_type' => 'setAccountType',
        'pro_account_type' => 'setProAccountType',
        'valid_period' => 'setValidPeriod'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_new_type' => 'getAccountNewType',
        'account_type' => 'getAccountType',
        'pro_account_type' => 'getProAccountType',
        'valid_period' => 'getValidPeriod'
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
            'account_new_type' => $this->accountNewType,
            'account_type' => $this->accountType,
            'pro_account_type' => $this->proAccountType,
            'valid_period' => $this->validPeriod,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

