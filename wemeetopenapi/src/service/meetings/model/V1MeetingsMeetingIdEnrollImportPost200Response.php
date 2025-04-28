<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.2
 */
namespace wemeet\openapi\service\meetings\model;

use wemeet\openapi\core\xhttp\ModelInterface;


class V1MeetingsMeetingIdEnrollImportPost200Response implements ModelInterface, \JsonSerializable
{

    /**
     * 报名对象列表
    * 类型：\wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdEnrollImportPost200ResponseEnrollListInner[]
     */
    protected $enrollList = null;

    /**
     * 成功导入的报名信息条数
    * 类型：int
     */
    protected $totalCount = null;

    /**
     * 未注册用户列表
    * 类型：string[]
     */
    protected $userNonRegistered = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['enroll_list'])) {
            $this->enrollList = $jsonArray['enroll_list'];
        }
        if (isset($jsonArray['total_count'])) {
            $this->totalCount = $jsonArray['total_count'];
        }
        if (isset($jsonArray['user_non_registered'])) {
            $this->userNonRegistered = $jsonArray['user_non_registered'];
        }
    }

    public function enrollList(array $enrollList): V1MeetingsMeetingIdEnrollImportPost200Response {
        $this->enrollList = $enrollList;
        return $this;
    }

    public function getEnrollList() {
        return $this->enrollList;
    }

    public function setEnrollList(array $enrollList) {
        $this->enrollList = $enrollList;
    }
    public function totalCount(int $totalCount): V1MeetingsMeetingIdEnrollImportPost200Response {
        $this->totalCount = $totalCount;
        return $this;
    }

    public function getTotalCount() {
        return $this->totalCount;
    }

    public function setTotalCount(int $totalCount) {
        $this->totalCount = $totalCount;
    }
    public function userNonRegistered(array $userNonRegistered): V1MeetingsMeetingIdEnrollImportPost200Response {
        $this->userNonRegistered = $userNonRegistered;
        return $this;
    }

    public function getUserNonRegistered() {
        return $this->userNonRegistered;
    }

    public function setUserNonRegistered(array $userNonRegistered) {
        $this->userNonRegistered = $userNonRegistered;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'enroll_list' => '\wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdEnrollImportPost200ResponseEnrollListInner[]',
        'total_count' => 'int',
        'user_non_registered' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'enroll_list' => null,
        'total_count' => 'int64',
        'user_non_registered' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'enroll_list' => false,
        'total_count' => false,
        'user_non_registered' => false
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
        'enroll_list' => 'enroll_list',
        'total_count' => 'total_count',
        'user_non_registered' => 'user_non_registered'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'enroll_list' => 'setEnrollList',
        'total_count' => 'setTotalCount',
        'user_non_registered' => 'setUserNonRegistered'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'enroll_list' => 'getEnrollList',
        'total_count' => 'getTotalCount',
        'user_non_registered' => 'getUserNonRegistered'
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
            'enroll_list' => $this->enrollList,
            'total_count' => $this->totalCount,
            'user_non_registered' => $this->userNonRegistered,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

