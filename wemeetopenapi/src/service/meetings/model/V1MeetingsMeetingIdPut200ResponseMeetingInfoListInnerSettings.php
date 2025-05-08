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


class V1MeetingsMeetingIdPut200ResponseMeetingInfoListInnerSettings implements ModelInterface, \JsonSerializable
{

    /**
     * 是否允许用户自己改名 1:允许用户自己改名，2:不允许用户自己改名，默认为1
    * 类型：int
     */
    protected $changeNickname = null;

    /**
     * 是否仅受邀成员可入会，默认值为false，true：仅受邀成员可入会，false：所有成员可入会
    * 类型：bool
     */
    protected $onlyInviteesAllowed = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['change_nickname'])) {
            $this->changeNickname = $jsonArray['change_nickname'];
        }
        if (isset($jsonArray['only_invitees_allowed'])) {
            $this->onlyInviteesAllowed = $jsonArray['only_invitees_allowed'];
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
    public function onlyInviteesAllowed(bool $onlyInviteesAllowed): V1MeetingsMeetingIdPut200ResponseMeetingInfoListInnerSettings {
        $this->onlyInviteesAllowed = $onlyInviteesAllowed;
        return $this;
    }

    public function getOnlyInviteesAllowed() {
        return $this->onlyInviteesAllowed;
    }

    public function setOnlyInviteesAllowed(bool $onlyInviteesAllowed) {
        $this->onlyInviteesAllowed = $onlyInviteesAllowed;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'change_nickname' => 'int',
        'only_invitees_allowed' => 'bool'
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
        'only_invitees_allowed' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'change_nickname' => false,
        'only_invitees_allowed' => false
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
        'only_invitees_allowed' => 'only_invitees_allowed'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'change_nickname' => 'setChangeNickname',
        'only_invitees_allowed' => 'setOnlyInviteesAllowed'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'change_nickname' => 'getChangeNickname',
        'only_invitees_allowed' => 'getOnlyInviteesAllowed'
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
            'only_invitees_allowed' => $this->onlyInviteesAllowed,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

