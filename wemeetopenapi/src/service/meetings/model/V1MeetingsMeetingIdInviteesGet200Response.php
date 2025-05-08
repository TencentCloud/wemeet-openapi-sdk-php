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


class V1MeetingsMeetingIdInviteesGet200Response implements ModelInterface, \JsonSerializable
{

    /**
     * 是否还存在受邀成员需要继续查询。
    * 类型：bool
     */
    protected $hasRemaining = null;

    /**
     * 会议邀请的参会者
    * 类型：\wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdInviteesGet200ResponseInviteesInner[]
     */
    protected $invitees = null;

    /**
     * 当has_remaining为true时，下次查询时输入参数pos的值
    * 类型：int
     */
    protected $nextPos = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['has_remaining'])) {
            $this->hasRemaining = $jsonArray['has_remaining'];
        }
        if (isset($jsonArray['invitees'])) {
            $this->invitees = $jsonArray['invitees'];
        }
        if (isset($jsonArray['next_pos'])) {
            $this->nextPos = $jsonArray['next_pos'];
        }
    }

    public function hasRemaining(bool $hasRemaining): V1MeetingsMeetingIdInviteesGet200Response {
        $this->hasRemaining = $hasRemaining;
        return $this;
    }

    public function getHasRemaining() {
        return $this->hasRemaining;
    }

    public function setHasRemaining(bool $hasRemaining) {
        $this->hasRemaining = $hasRemaining;
    }
    public function invitees(array $invitees): V1MeetingsMeetingIdInviteesGet200Response {
        $this->invitees = $invitees;
        return $this;
    }

    public function getInvitees() {
        return $this->invitees;
    }

    public function setInvitees(array $invitees) {
        $this->invitees = $invitees;
    }
    public function nextPos(int $nextPos): V1MeetingsMeetingIdInviteesGet200Response {
        $this->nextPos = $nextPos;
        return $this;
    }

    public function getNextPos() {
        return $this->nextPos;
    }

    public function setNextPos(int $nextPos) {
        $this->nextPos = $nextPos;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'has_remaining' => 'bool',
        'invitees' => '\wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdInviteesGet200ResponseInviteesInner[]',
        'next_pos' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'has_remaining' => null,
        'invitees' => null,
        'next_pos' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'has_remaining' => false,
        'invitees' => false,
        'next_pos' => false
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
        'has_remaining' => 'has_remaining',
        'invitees' => 'invitees',
        'next_pos' => 'next_pos'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'has_remaining' => 'setHasRemaining',
        'invitees' => 'setInvitees',
        'next_pos' => 'setNextPos'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'has_remaining' => 'getHasRemaining',
        'invitees' => 'getInvitees',
        'next_pos' => 'getNextPos'
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
            'has_remaining' => $this->hasRemaining,
            'invitees' => $this->invitees,
            'next_pos' => $this->nextPos,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

