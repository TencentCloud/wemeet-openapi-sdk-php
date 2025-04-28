<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.2
 */
namespace wemeet\openapi\service\user_manager\model;

use wemeet\openapi\core\xhttp\ModelInterface;


class V1UsersAdvanceListGet200Response implements ModelInterface, \JsonSerializable
{

    /**
     * 是否还有未拉取的数据
    * 类型：bool
     */
    protected $hasRemaining = null;

    /**
     * 下一次查询pos位置
    * 类型：string
     */
    protected $nextPos = null;

    /**
    * 类型：\wemeet\openapi\service\user_manager\model\V1UsersAdvanceListGet200ResponseUsersInner[]
     */
    protected $users = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['has_remaining'])) {
            $this->hasRemaining = $jsonArray['has_remaining'];
        }
        if (isset($jsonArray['next_pos'])) {
            $this->nextPos = $jsonArray['next_pos'];
        }
        if (isset($jsonArray['users'])) {
            $this->users = $jsonArray['users'];
        }
    }

    public function hasRemaining(bool $hasRemaining): V1UsersAdvanceListGet200Response {
        $this->hasRemaining = $hasRemaining;
        return $this;
    }

    public function getHasRemaining() {
        return $this->hasRemaining;
    }

    public function setHasRemaining(bool $hasRemaining) {
        $this->hasRemaining = $hasRemaining;
    }
    public function nextPos(string $nextPos): V1UsersAdvanceListGet200Response {
        $this->nextPos = $nextPos;
        return $this;
    }

    public function getNextPos() {
        return $this->nextPos;
    }

    public function setNextPos(string $nextPos) {
        $this->nextPos = $nextPos;
    }
    public function users(array $users): V1UsersAdvanceListGet200Response {
        $this->users = $users;
        return $this;
    }

    public function getUsers() {
        return $this->users;
    }

    public function setUsers(array $users) {
        $this->users = $users;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'has_remaining' => 'bool',
        'next_pos' => 'string',
        'users' => '\wemeet\openapi\service\user_manager\model\V1UsersAdvanceListGet200ResponseUsersInner[]'
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
        'next_pos' => null,
        'users' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'has_remaining' => false,
        'next_pos' => false,
        'users' => false
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
        'next_pos' => 'next_pos',
        'users' => 'users'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'has_remaining' => 'setHasRemaining',
        'next_pos' => 'setNextPos',
        'users' => 'setUsers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'has_remaining' => 'getHasRemaining',
        'next_pos' => 'getNextPos',
        'users' => 'getUsers'
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
            'next_pos' => $this->nextPos,
            'users' => $this->users,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

