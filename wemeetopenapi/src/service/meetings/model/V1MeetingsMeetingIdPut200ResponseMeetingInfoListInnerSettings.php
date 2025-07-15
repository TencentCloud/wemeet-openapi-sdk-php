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


class V1MeetingsMeetingIdPut200ResponseMeetingInfoListInnerSettings implements ModelInterface, \JsonSerializable
{

    /**
     * 是否允许用户自己改名 1:允许用户自己改名，2:不允许用户自己改名，默认为1
    * 类型：int
     */
    protected $changeNickname = null;

    /**
     * 成员入会限制，1：所有成员可入会，2：仅受邀成员可入会，3：仅企业内部成员可入会 ；当only_user_join_type和only_allow_enterprise_user_join同时传的时候，以only_user_join_type为准
    * 类型：int
     */
    protected $onlyUserJoinType = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['change_nickname'])) {
            $this->changeNickname = $jsonArray['change_nickname'];
        }
        if (isset($jsonArray['only_user_join_type'])) {
            $this->onlyUserJoinType = $jsonArray['only_user_join_type'];
        }
    }

    public function changeNickname(int $changeNickname): V1MeetingsMeetingIdPut200ResponseMeetingInfoListInnerSettings {
        $this->changeNickname = $changeNickname;
        return $this;
    }

    public function getChangeNickname() {
        return $this->changeNickname;
    }

    public function setChangeNickname(int $changeNickname) {
        $this->changeNickname = $changeNickname;
    }
    public function onlyUserJoinType(int $onlyUserJoinType): V1MeetingsMeetingIdPut200ResponseMeetingInfoListInnerSettings {
        $this->onlyUserJoinType = $onlyUserJoinType;
        return $this;
    }

    public function getOnlyUserJoinType() {
        return $this->onlyUserJoinType;
    }

    public function setOnlyUserJoinType(int $onlyUserJoinType) {
        $this->onlyUserJoinType = $onlyUserJoinType;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'change_nickname' => 'int',
        'only_user_join_type' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'change_nickname' => 'int64',
        'only_user_join_type' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'change_nickname' => false,
        'only_user_join_type' => false
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
        'change_nickname' => 'change_nickname',
        'only_user_join_type' => 'only_user_join_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'change_nickname' => 'setChangeNickname',
        'only_user_join_type' => 'setOnlyUserJoinType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'change_nickname' => 'getChangeNickname',
        'only_user_join_type' => 'getOnlyUserJoinType'
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
            'change_nickname' => $this->changeNickname,
            'only_user_join_type' => $this->onlyUserJoinType,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

