<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.4
 */
namespace wemeet\openapi\service\user_manager\model;

use wemeet\openapi\core\xhttp\ModelInterface;


class V1UsersInviteAuthPost200Response implements ModelInterface, \JsonSerializable
{

    /**
     * 未验证用户对象列表
    * 类型：\wemeet\openapi\service\user_manager\model\V1UsersInviteAuthPost200ResponseAuthUserListInner[]
     */
    protected $authUserList = null;

    /**
    * 类型：\wemeet\openapi\service\user_manager\model\V1UsersInviteAuthPost200ResponseErrorUserListInner[]
     */
    protected $errorUserList = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['auth_user_list'])) {
            $this->authUserList = $jsonArray['auth_user_list'];
        }
        if (isset($jsonArray['error_user_list'])) {
            $this->errorUserList = $jsonArray['error_user_list'];
        }
    }

    public function authUserList(array $authUserList): V1UsersInviteAuthPost200Response {
        $this->authUserList = $authUserList;
        return $this;
    }

    public function getAuthUserList() {
        return $this->authUserList;
    }

    public function setAuthUserList(array $authUserList) {
        $this->authUserList = $authUserList;
    }
    public function errorUserList(array $errorUserList): V1UsersInviteAuthPost200Response {
        $this->errorUserList = $errorUserList;
        return $this;
    }

    public function getErrorUserList() {
        return $this->errorUserList;
    }

    public function setErrorUserList(array $errorUserList) {
        $this->errorUserList = $errorUserList;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'auth_user_list' => '\wemeet\openapi\service\user_manager\model\V1UsersInviteAuthPost200ResponseAuthUserListInner[]',
        'error_user_list' => '\wemeet\openapi\service\user_manager\model\V1UsersInviteAuthPost200ResponseErrorUserListInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'auth_user_list' => null,
        'error_user_list' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'auth_user_list' => false,
        'error_user_list' => false
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
        'auth_user_list' => 'auth_user_list',
        'error_user_list' => 'error_user_list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'auth_user_list' => 'setAuthUserList',
        'error_user_list' => 'setErrorUserList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'auth_user_list' => 'getAuthUserList',
        'error_user_list' => 'getErrorUserList'
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
            'auth_user_list' => $this->authUserList,
            'error_user_list' => $this->errorUserList,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

