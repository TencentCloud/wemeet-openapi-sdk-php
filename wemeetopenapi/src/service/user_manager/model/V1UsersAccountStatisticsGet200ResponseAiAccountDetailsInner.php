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


class V1UsersAccountStatisticsGet200ResponseAiAccountDetailsInner implements ModelInterface, \JsonSerializable
{

    /**
     * 账号数
    * 类型：int
     */
    protected $aiAccountCount = null;

    /**
     * ai账号类型，1:购买版 2:赠送版
    * 类型：int
     */
    protected $aiAccountType = null;

    /**
     * 已分配的账号数
    * 类型：int
     */
    protected $aiAccountUsedCount = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['ai_account_count'])) {
            $this->aiAccountCount = $jsonArray['ai_account_count'];
        }
        if (isset($jsonArray['ai_account_type'])) {
            $this->aiAccountType = $jsonArray['ai_account_type'];
        }
        if (isset($jsonArray['ai_account_used_count'])) {
            $this->aiAccountUsedCount = $jsonArray['ai_account_used_count'];
        }
    }

    public function aiAccountCount(int $aiAccountCount): V1UsersAccountStatisticsGet200ResponseAiAccountDetailsInner {
        $this->aiAccountCount = $aiAccountCount;
        return $this;
    }

    public function getAiAccountCount() {
        return $this->aiAccountCount;
    }

    public function setAiAccountCount(int $aiAccountCount) {
        $this->aiAccountCount = $aiAccountCount;
    }
    public function aiAccountType(int $aiAccountType): V1UsersAccountStatisticsGet200ResponseAiAccountDetailsInner {
        $this->aiAccountType = $aiAccountType;
        return $this;
    }

    public function getAiAccountType() {
        return $this->aiAccountType;
    }

    public function setAiAccountType(int $aiAccountType) {
        $this->aiAccountType = $aiAccountType;
    }
    public function aiAccountUsedCount(int $aiAccountUsedCount): V1UsersAccountStatisticsGet200ResponseAiAccountDetailsInner {
        $this->aiAccountUsedCount = $aiAccountUsedCount;
        return $this;
    }

    public function getAiAccountUsedCount() {
        return $this->aiAccountUsedCount;
    }

    public function setAiAccountUsedCount(int $aiAccountUsedCount) {
        $this->aiAccountUsedCount = $aiAccountUsedCount;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ai_account_count' => 'int',
        'ai_account_type' => 'int',
        'ai_account_used_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'ai_account_count' => 'int64',
        'ai_account_type' => 'int64',
        'ai_account_used_count' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'ai_account_count' => false,
        'ai_account_type' => false,
        'ai_account_used_count' => false
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
        'ai_account_count' => 'ai_account_count',
        'ai_account_type' => 'ai_account_type',
        'ai_account_used_count' => 'ai_account_used_count'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ai_account_count' => 'setAiAccountCount',
        'ai_account_type' => 'setAiAccountType',
        'ai_account_used_count' => 'setAiAccountUsedCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ai_account_count' => 'getAiAccountCount',
        'ai_account_type' => 'getAiAccountType',
        'ai_account_used_count' => 'getAiAccountUsedCount'
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
            'ai_account_count' => $this->aiAccountCount,
            'ai_account_type' => $this->aiAccountType,
            'ai_account_used_count' => $this->aiAccountUsedCount,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

