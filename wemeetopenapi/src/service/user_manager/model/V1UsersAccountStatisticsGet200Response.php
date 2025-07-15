<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.7
 */
namespace wemeet\openapi\service\user_manager\model;

use wemeet\openapi\core\xhttp\ModelInterface;


class V1UsersAccountStatisticsGet200Response implements ModelInterface, \JsonSerializable
{

    /**
     * 房间规模升级许可详情。
    * 类型：\wemeet\openapi\service\user_manager\model\V1UsersAccountStatisticsGet200ResponseAddOnLargemeetingDetailsInner[]
     */
    protected $addOnLargemeetingDetails = null;

    /**
     * 网络研讨会（Webinar）观众规模升级许可详情。
    * 类型：\wemeet\openapi\service\user_manager\model\V1UsersAccountStatisticsGet200ResponseAddOnWebinarDetailsInner[]
     */
    protected $addOnWebinarDetails = null;

    /**
     * ai账号类型使用对象（商业版不返回）
    * 类型：\wemeet\openapi\service\user_manager\model\V1UsersAccountStatisticsGet200ResponseAiAccountDetailsInner[]
     */
    protected $aiAccountDetails = null;

    /**
     * 账号类型使用对象
    * 类型：\wemeet\openapi\service\user_manager\model\V1UsersAccountStatisticsGet200ResponseUserAccountDetailsInner[]
     */
    protected $userAccountDetails = null;

    /**
     * 当前用户数
    * 类型：int
     */
    protected $userCount = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['add_on_largemeeting_details'])) {
            $this->addOnLargemeetingDetails = $jsonArray['add_on_largemeeting_details'];
        }
        if (isset($jsonArray['add_on_webinar_details'])) {
            $this->addOnWebinarDetails = $jsonArray['add_on_webinar_details'];
        }
        if (isset($jsonArray['ai_account_details'])) {
            $this->aiAccountDetails = $jsonArray['ai_account_details'];
        }
        if (isset($jsonArray['user_account_details'])) {
            $this->userAccountDetails = $jsonArray['user_account_details'];
        }
        if (isset($jsonArray['user_count'])) {
            $this->userCount = $jsonArray['user_count'];
        }
    }

    public function addOnLargemeetingDetails(array $addOnLargemeetingDetails): V1UsersAccountStatisticsGet200Response {
        $this->addOnLargemeetingDetails = $addOnLargemeetingDetails;
        return $this;
    }

    public function getAddOnLargemeetingDetails() {
        return $this->addOnLargemeetingDetails;
    }

    public function setAddOnLargemeetingDetails(array $addOnLargemeetingDetails) {
        $this->addOnLargemeetingDetails = $addOnLargemeetingDetails;
    }
    public function addOnWebinarDetails(array $addOnWebinarDetails): V1UsersAccountStatisticsGet200Response {
        $this->addOnWebinarDetails = $addOnWebinarDetails;
        return $this;
    }

    public function getAddOnWebinarDetails() {
        return $this->addOnWebinarDetails;
    }

    public function setAddOnWebinarDetails(array $addOnWebinarDetails) {
        $this->addOnWebinarDetails = $addOnWebinarDetails;
    }
    public function aiAccountDetails(array $aiAccountDetails): V1UsersAccountStatisticsGet200Response {
        $this->aiAccountDetails = $aiAccountDetails;
        return $this;
    }

    public function getAiAccountDetails() {
        return $this->aiAccountDetails;
    }

    public function setAiAccountDetails(array $aiAccountDetails) {
        $this->aiAccountDetails = $aiAccountDetails;
    }
    public function userAccountDetails(array $userAccountDetails): V1UsersAccountStatisticsGet200Response {
        $this->userAccountDetails = $userAccountDetails;
        return $this;
    }

    public function getUserAccountDetails() {
        return $this->userAccountDetails;
    }

    public function setUserAccountDetails(array $userAccountDetails) {
        $this->userAccountDetails = $userAccountDetails;
    }
    public function userCount(int $userCount): V1UsersAccountStatisticsGet200Response {
        $this->userCount = $userCount;
        return $this;
    }

    public function getUserCount() {
        return $this->userCount;
    }

    public function setUserCount(int $userCount) {
        $this->userCount = $userCount;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'add_on_largemeeting_details' => '\wemeet\openapi\service\user_manager\model\V1UsersAccountStatisticsGet200ResponseAddOnLargemeetingDetailsInner[]',
        'add_on_webinar_details' => '\wemeet\openapi\service\user_manager\model\V1UsersAccountStatisticsGet200ResponseAddOnWebinarDetailsInner[]',
        'ai_account_details' => '\wemeet\openapi\service\user_manager\model\V1UsersAccountStatisticsGet200ResponseAiAccountDetailsInner[]',
        'user_account_details' => '\wemeet\openapi\service\user_manager\model\V1UsersAccountStatisticsGet200ResponseUserAccountDetailsInner[]',
        'user_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'add_on_largemeeting_details' => null,
        'add_on_webinar_details' => null,
        'ai_account_details' => null,
        'user_account_details' => null,
        'user_count' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'add_on_largemeeting_details' => false,
        'add_on_webinar_details' => false,
        'ai_account_details' => false,
        'user_account_details' => false,
        'user_count' => false
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
        'add_on_largemeeting_details' => 'add_on_largemeeting_details',
        'add_on_webinar_details' => 'add_on_webinar_details',
        'ai_account_details' => 'ai_account_details',
        'user_account_details' => 'user_account_details',
        'user_count' => 'user_count'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'add_on_largemeeting_details' => 'setAddOnLargemeetingDetails',
        'add_on_webinar_details' => 'setAddOnWebinarDetails',
        'ai_account_details' => 'setAiAccountDetails',
        'user_account_details' => 'setUserAccountDetails',
        'user_count' => 'setUserCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'add_on_largemeeting_details' => 'getAddOnLargemeetingDetails',
        'add_on_webinar_details' => 'getAddOnWebinarDetails',
        'ai_account_details' => 'getAiAccountDetails',
        'user_account_details' => 'getUserAccountDetails',
        'user_count' => 'getUserCount'
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
            'add_on_largemeeting_details' => $this->addOnLargemeetingDetails,
            'add_on_webinar_details' => $this->addOnWebinarDetails,
            'ai_account_details' => $this->aiAccountDetails,
            'user_account_details' => $this->userAccountDetails,
            'user_count' => $this->userCount,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

