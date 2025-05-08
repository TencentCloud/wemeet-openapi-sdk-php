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


class V1UsersAccountStatisticsGet200ResponseUserAccountDetailsInner implements ModelInterface, \JsonSerializable
{

    /**
     * 账号数
    * 类型：int
     */
    protected $userAccountCount = null;

    /**
     * 账号类型，1：高级账号 （企业版，教育版）  2：免费账号  （企业版，教育版，商业版）  3：免费账号100方 （商业版）  4：高级账号300方（商业版）  5：高级账号500方（商业版）  6：高级账号1000方（商业版）  7：高级账号2000方（商业版）
    * 类型：int
     */
    protected $userAccountType = null;

    /**
     * 已分配账号数
    * 类型：int
     */
    protected $userAccountUsedCount = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['user_account_count'])) {
            $this->userAccountCount = $jsonArray['user_account_count'];
        }
        if (isset($jsonArray['user_account_type'])) {
            $this->userAccountType = $jsonArray['user_account_type'];
        }
        if (isset($jsonArray['user_account_used_count'])) {
            $this->userAccountUsedCount = $jsonArray['user_account_used_count'];
        }
    }

    public function userAccountCount(int $userAccountCount): V1UsersAccountStatisticsGet200ResponseUserAccountDetailsInner {
        $this->userAccountCount = $userAccountCount;
        return $this;
    }

    public function getUserAccountCount() {
        return $this->userAccountCount;
    }

    public function setUserAccountCount(int $userAccountCount) {
        $this->userAccountCount = $userAccountCount;
    }
    public function userAccountType(int $userAccountType): V1UsersAccountStatisticsGet200ResponseUserAccountDetailsInner {
        $this->userAccountType = $userAccountType;
        return $this;
    }

    public function getUserAccountType() {
        return $this->userAccountType;
    }

    public function setUserAccountType(int $userAccountType) {
        $this->userAccountType = $userAccountType;
    }
    public function userAccountUsedCount(int $userAccountUsedCount): V1UsersAccountStatisticsGet200ResponseUserAccountDetailsInner {
        $this->userAccountUsedCount = $userAccountUsedCount;
        return $this;
    }

    public function getUserAccountUsedCount() {
        return $this->userAccountUsedCount;
    }

    public function setUserAccountUsedCount(int $userAccountUsedCount) {
        $this->userAccountUsedCount = $userAccountUsedCount;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'user_account_count' => 'int',
        'user_account_type' => 'int',
        'user_account_used_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'user_account_count' => 'int64',
        'user_account_type' => 'int64',
        'user_account_used_count' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'user_account_count' => false,
        'user_account_type' => false,
        'user_account_used_count' => false
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
        'user_account_count' => 'user_account_count',
        'user_account_type' => 'user_account_type',
        'user_account_used_count' => 'user_account_used_count'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'user_account_count' => 'setUserAccountCount',
        'user_account_type' => 'setUserAccountType',
        'user_account_used_count' => 'setUserAccountUsedCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'user_account_count' => 'getUserAccountCount',
        'user_account_type' => 'getUserAccountType',
        'user_account_used_count' => 'getUserAccountUsedCount'
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
            'user_account_count' => $this->userAccountCount,
            'user_account_type' => $this->userAccountType,
            'user_account_used_count' => $this->userAccountUsedCount,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

