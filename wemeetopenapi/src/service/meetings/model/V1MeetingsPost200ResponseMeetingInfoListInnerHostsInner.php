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


class V1MeetingsPost200ResponseMeetingInfoListInnerHostsInner implements ModelInterface, \JsonSerializable
{

    /**
     * 用户是否匿名入会，缺省为 false，不匿名。 true：匿名 false：不匿名
    * 类型：bool
     */
    protected $isAnonymous = null;

    /**
     * 用户匿名字符串。如果字段“is_anonymous”设置为“true”，但是无指定匿名字符串, 会议将分配缺省名称，例如 “会议用户xxxx”，其中“xxxx”为随机数字
    * 类型：string
     */
    protected $nickName = null;

    /**
     * 操作者ID，根据operator_id_type的值，使用不同的类型
    * 类型：string
     */
    protected $operatorId = null;

    /**
     * 操作者ID的类型：1:userid  2:openid 3:rooms_id  4: ms_open_id
    * 类型：int
     */
    protected $operatorIdType = null;

    /**
     * 头像地址
    * 类型：string
     */
    protected $profilePhoto = null;

    /**
    * 类型：string
     */
    protected $userid = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['is_anonymous'])) {
            $this->isAnonymous = $jsonArray['is_anonymous'];
        }
        if (isset($jsonArray['nick_name'])) {
            $this->nickName = $jsonArray['nick_name'];
        }
        if (isset($jsonArray['operator_id'])) {
            $this->operatorId = $jsonArray['operator_id'];
        }
        if (isset($jsonArray['operator_id_type'])) {
            $this->operatorIdType = $jsonArray['operator_id_type'];
        }
        if (isset($jsonArray['profile_photo'])) {
            $this->profilePhoto = $jsonArray['profile_photo'];
        }
        if (isset($jsonArray['userid'])) {
            $this->userid = $jsonArray['userid'];
        }
    }

    public function isAnonymous(bool $isAnonymous): V1MeetingsPost200ResponseMeetingInfoListInnerHostsInner {
        $this->isAnonymous = $isAnonymous;
        return $this;
    }

    public function getIsAnonymous() {
        return $this->isAnonymous;
    }

    public function setIsAnonymous(bool $isAnonymous) {
        $this->isAnonymous = $isAnonymous;
    }
    public function nickName(string $nickName): V1MeetingsPost200ResponseMeetingInfoListInnerHostsInner {
        $this->nickName = $nickName;
        return $this;
    }

    public function getNickName() {
        return $this->nickName;
    }

    public function setNickName(string $nickName) {
        $this->nickName = $nickName;
    }
    public function operatorId(string $operatorId): V1MeetingsPost200ResponseMeetingInfoListInnerHostsInner {
        $this->operatorId = $operatorId;
        return $this;
    }

    public function getOperatorId() {
        return $this->operatorId;
    }

    public function setOperatorId(string $operatorId) {
        $this->operatorId = $operatorId;
    }
    public function operatorIdType(int $operatorIdType): V1MeetingsPost200ResponseMeetingInfoListInnerHostsInner {
        $this->operatorIdType = $operatorIdType;
        return $this;
    }

    public function getOperatorIdType() {
        return $this->operatorIdType;
    }

    public function setOperatorIdType(int $operatorIdType) {
        $this->operatorIdType = $operatorIdType;
    }
    public function profilePhoto(string $profilePhoto): V1MeetingsPost200ResponseMeetingInfoListInnerHostsInner {
        $this->profilePhoto = $profilePhoto;
        return $this;
    }

    public function getProfilePhoto() {
        return $this->profilePhoto;
    }

    public function setProfilePhoto(string $profilePhoto) {
        $this->profilePhoto = $profilePhoto;
    }
    public function userid(string $userid): V1MeetingsPost200ResponseMeetingInfoListInnerHostsInner {
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
        'is_anonymous' => 'bool',
        'nick_name' => 'string',
        'operator_id' => 'string',
        'operator_id_type' => 'int',
        'profile_photo' => 'string',
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
        'is_anonymous' => null,
        'nick_name' => null,
        'operator_id' => null,
        'operator_id_type' => 'int64',
        'profile_photo' => null,
        'userid' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'is_anonymous' => false,
        'nick_name' => false,
        'operator_id' => false,
        'operator_id_type' => false,
        'profile_photo' => false,
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
        'is_anonymous' => 'is_anonymous',
        'nick_name' => 'nick_name',
        'operator_id' => 'operator_id',
        'operator_id_type' => 'operator_id_type',
        'profile_photo' => 'profile_photo',
        'userid' => 'userid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_anonymous' => 'setIsAnonymous',
        'nick_name' => 'setNickName',
        'operator_id' => 'setOperatorId',
        'operator_id_type' => 'setOperatorIdType',
        'profile_photo' => 'setProfilePhoto',
        'userid' => 'setUserid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_anonymous' => 'getIsAnonymous',
        'nick_name' => 'getNickName',
        'operator_id' => 'getOperatorId',
        'operator_id_type' => 'getOperatorIdType',
        'profile_photo' => 'getProfilePhoto',
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
            'is_anonymous' => $this->isAnonymous,
            'nick_name' => $this->nickName,
            'operator_id' => $this->operatorId,
            'operator_id_type' => $this->operatorIdType,
            'profile_photo' => $this->profilePhoto,
            'userid' => $this->userid,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

