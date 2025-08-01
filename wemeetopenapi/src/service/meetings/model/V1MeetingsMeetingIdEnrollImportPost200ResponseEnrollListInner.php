<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.7
 */
namespace wemeet\openapi\service\meetings\model;

use wemeet\openapi\core\xhttp\ModelInterface;


class V1MeetingsMeetingIdEnrollImportPost200ResponseEnrollListInner implements ModelInterface, \JsonSerializable
{

    /**
     * 国家/地区代码，若使用手机号，必填（例如：中国传86，不是+86）
    * 类型：string
     */
    protected $area = null;

    /**
    * 类型：string
     */
    protected $enrollCode = null;

    /**
     * 报名ID
    * 类型：int
     */
    protected $enrollId = null;

    /**
     * 报名的昵称，与会中昵称可能不一致
    * 类型：string
     */
    protected $nickName = null;

    /**
     * OAuth授权用户ID。  导入报名对象支持本企业（或与OAuth应用同企业）内 userid、授权用户的openid、phone_number 三种形式，三者必填其一；
    * 类型：string
     */
    protected $openId = null;

    /**
     * 手机号
    * 类型：string
     */
    protected $phoneNumber = null;

    /**
     * 用户的唯一 ID（企业内部请使用企业唯一用户标识）。 userid 和 phone_number 两者必填一个
    * 类型：string
     */
    protected $userid = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['area'])) {
            $this->area = $jsonArray['area'];
        }
        if (isset($jsonArray['enroll_code'])) {
            $this->enrollCode = $jsonArray['enroll_code'];
        }
        if (isset($jsonArray['enroll_id'])) {
            $this->enrollId = $jsonArray['enroll_id'];
        }
        if (isset($jsonArray['nick_name'])) {
            $this->nickName = $jsonArray['nick_name'];
        }
        if (isset($jsonArray['open_id'])) {
            $this->openId = $jsonArray['open_id'];
        }
        if (isset($jsonArray['phone_number'])) {
            $this->phoneNumber = $jsonArray['phone_number'];
        }
        if (isset($jsonArray['userid'])) {
            $this->userid = $jsonArray['userid'];
        }
    }

    public function area(string $area): V1MeetingsMeetingIdEnrollImportPost200ResponseEnrollListInner {
        $this->area = $area;
        return $this;
    }

    public function getArea() {
        return $this->area;
    }

    public function setArea(string $area) {
        $this->area = $area;
    }
    public function enrollCode(string $enrollCode): V1MeetingsMeetingIdEnrollImportPost200ResponseEnrollListInner {
        $this->enrollCode = $enrollCode;
        return $this;
    }

    public function getEnrollCode() {
        return $this->enrollCode;
    }

    public function setEnrollCode(string $enrollCode) {
        $this->enrollCode = $enrollCode;
    }
    public function enrollId(int $enrollId): V1MeetingsMeetingIdEnrollImportPost200ResponseEnrollListInner {
        $this->enrollId = $enrollId;
        return $this;
    }

    public function getEnrollId() {
        return $this->enrollId;
    }

    public function setEnrollId(int $enrollId) {
        $this->enrollId = $enrollId;
    }
    public function nickName(string $nickName): V1MeetingsMeetingIdEnrollImportPost200ResponseEnrollListInner {
        $this->nickName = $nickName;
        return $this;
    }

    public function getNickName() {
        return $this->nickName;
    }

    public function setNickName(string $nickName) {
        $this->nickName = $nickName;
    }
    public function openId(string $openId): V1MeetingsMeetingIdEnrollImportPost200ResponseEnrollListInner {
        $this->openId = $openId;
        return $this;
    }

    public function getOpenId() {
        return $this->openId;
    }

    public function setOpenId(string $openId) {
        $this->openId = $openId;
    }
    public function phoneNumber(string $phoneNumber): V1MeetingsMeetingIdEnrollImportPost200ResponseEnrollListInner {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    public function getPhoneNumber() {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(string $phoneNumber) {
        $this->phoneNumber = $phoneNumber;
    }
    public function userid(string $userid): V1MeetingsMeetingIdEnrollImportPost200ResponseEnrollListInner {
        $this->userid = $userid;
        return $this;
    }

    public function getUserid() {
        return $this->userid;
    }

    public function setUserid(string $userid) {
        $this->userid = $userid;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'area' => 'string',
        'enroll_code' => 'string',
        'enroll_id' => 'int',
        'nick_name' => 'string',
        'open_id' => 'string',
        'phone_number' => 'string',
        'userid' => 'string'
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
        'enroll_code' => null,
        'enroll_id' => 'int64',
        'nick_name' => null,
        'open_id' => null,
        'phone_number' => null,
        'userid' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'area' => false,
        'enroll_code' => false,
        'enroll_id' => false,
        'nick_name' => false,
        'open_id' => false,
        'phone_number' => false,
        'userid' => false
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
        'enroll_code' => 'enroll_code',
        'enroll_id' => 'enroll_id',
        'nick_name' => 'nick_name',
        'open_id' => 'open_id',
        'phone_number' => 'phone_number',
        'userid' => 'userid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'area' => 'setArea',
        'enroll_code' => 'setEnrollCode',
        'enroll_id' => 'setEnrollId',
        'nick_name' => 'setNickName',
        'open_id' => 'setOpenId',
        'phone_number' => 'setPhoneNumber',
        'userid' => 'setUserid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'area' => 'getArea',
        'enroll_code' => 'getEnrollCode',
        'enroll_id' => 'getEnrollId',
        'nick_name' => 'getNickName',
        'open_id' => 'getOpenId',
        'phone_number' => 'getPhoneNumber',
        'userid' => 'getUserid'
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
            'enroll_code' => $this->enrollCode,
            'enroll_id' => $this->enrollId,
            'nick_name' => $this->nickName,
            'open_id' => $this->openId,
            'phone_number' => $this->phoneNumber,
            'userid' => $this->userid,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

