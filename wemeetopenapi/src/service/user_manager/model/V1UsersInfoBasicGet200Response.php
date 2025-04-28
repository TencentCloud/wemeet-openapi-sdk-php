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


class V1UsersInfoBasicGet200Response implements ModelInterface, \JsonSerializable
{

    /**
    * 类型：int
     */
    protected $accountType = null;

    /**
     * 商企版计费需求，账号版本
    * 类型：int
     */
    protected $accountVersion = null;

    /**
     * AI账号类型 1:购买版 2:赠送版
    * 类型：int
     */
    protected $aiAccountType = null;

    /**
    * 类型：string
     */
    protected $avatarUrl = null;

    /**
     * 是否有AI账号能力，true：有， false：无，教育版/企业版存在ai账号，商业版都是ai账号，其余为false
    * 类型：bool
     */
    protected $enableAiAccount = null;

    /**
    * 类型：string
     */
    protected $openCorpId = null;

    /**
    * 类型：string
     */
    protected $openCorpName = null;

    /**
     * 手机号验证状态。 0：未知 1：已验证 2：未验证
    * 类型：int
     */
    protected $phoneStatus = null;

    /**
    * 类型：string
     */
    protected $status = null;

    /**
     * 账号类型 1：高级账号  2：免费账号  3：免费账号100方 4:高级账号300方，5:高级账号500方，6：高级账号1000方，7:高级账号2000方
    * 类型：int
     */
    protected $userAccountType = null;

    /**
    * 类型：string
     */
    protected $username = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['account_type'])) {
            $this->accountType = $jsonArray['account_type'];
        }
        if (isset($jsonArray['account_version'])) {
            $this->accountVersion = $jsonArray['account_version'];
        }
        if (isset($jsonArray['ai_account_type'])) {
            $this->aiAccountType = $jsonArray['ai_account_type'];
        }
        if (isset($jsonArray['avatar_url'])) {
            $this->avatarUrl = $jsonArray['avatar_url'];
        }
        if (isset($jsonArray['enable_ai_account'])) {
            $this->enableAiAccount = $jsonArray['enable_ai_account'];
        }
        if (isset($jsonArray['open_corp_id'])) {
            $this->openCorpId = $jsonArray['open_corp_id'];
        }
        if (isset($jsonArray['open_corp_name'])) {
            $this->openCorpName = $jsonArray['open_corp_name'];
        }
        if (isset($jsonArray['phone_status'])) {
            $this->phoneStatus = $jsonArray['phone_status'];
        }
        if (isset($jsonArray['status'])) {
            $this->status = $jsonArray['status'];
        }
        if (isset($jsonArray['user_account_type'])) {
            $this->userAccountType = $jsonArray['user_account_type'];
        }
        if (isset($jsonArray['username'])) {
            $this->username = $jsonArray['username'];
        }
    }

    public function accountType(int $accountType): V1UsersInfoBasicGet200Response {
        $this->accountType = $accountType;
        return $this;
    }

    public function getAccountType() {
        return $this->accountType;
    }

    public function setAccountType(int $accountType) {
        $this->accountType = $accountType;
    }
    public function accountVersion(int $accountVersion): V1UsersInfoBasicGet200Response {
        $this->accountVersion = $accountVersion;
        return $this;
    }

    public function getAccountVersion() {
        return $this->accountVersion;
    }

    public function setAccountVersion(int $accountVersion) {
        $this->accountVersion = $accountVersion;
    }
    public function aiAccountType(int $aiAccountType): V1UsersInfoBasicGet200Response {
        $this->aiAccountType = $aiAccountType;
        return $this;
    }

    public function getAiAccountType() {
        return $this->aiAccountType;
    }

    public function setAiAccountType(int $aiAccountType) {
        $this->aiAccountType = $aiAccountType;
    }
    public function avatarUrl(string $avatarUrl): V1UsersInfoBasicGet200Response {
        $this->avatarUrl = $avatarUrl;
        return $this;
    }

    public function getAvatarUrl() {
        return $this->avatarUrl;
    }

    public function setAvatarUrl(string $avatarUrl) {
        $this->avatarUrl = $avatarUrl;
    }
    public function enableAiAccount(bool $enableAiAccount): V1UsersInfoBasicGet200Response {
        $this->enableAiAccount = $enableAiAccount;
        return $this;
    }

    public function getEnableAiAccount() {
        return $this->enableAiAccount;
    }

    public function setEnableAiAccount(bool $enableAiAccount) {
        $this->enableAiAccount = $enableAiAccount;
    }
    public function openCorpId(string $openCorpId): V1UsersInfoBasicGet200Response {
        $this->openCorpId = $openCorpId;
        return $this;
    }

    public function getOpenCorpId() {
        return $this->openCorpId;
    }

    public function setOpenCorpId(string $openCorpId) {
        $this->openCorpId = $openCorpId;
    }
    public function openCorpName(string $openCorpName): V1UsersInfoBasicGet200Response {
        $this->openCorpName = $openCorpName;
        return $this;
    }

    public function getOpenCorpName() {
        return $this->openCorpName;
    }

    public function setOpenCorpName(string $openCorpName) {
        $this->openCorpName = $openCorpName;
    }
    public function phoneStatus(int $phoneStatus): V1UsersInfoBasicGet200Response {
        $this->phoneStatus = $phoneStatus;
        return $this;
    }

    public function getPhoneStatus() {
        return $this->phoneStatus;
    }

    public function setPhoneStatus(int $phoneStatus) {
        $this->phoneStatus = $phoneStatus;
    }
    public function status(string $status): V1UsersInfoBasicGet200Response {
        $this->status = $status;
        return $this;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus(string $status) {
        $this->status = $status;
    }
    public function userAccountType(int $userAccountType): V1UsersInfoBasicGet200Response {
        $this->userAccountType = $userAccountType;
        return $this;
    }

    public function getUserAccountType() {
        return $this->userAccountType;
    }

    public function setUserAccountType(int $userAccountType) {
        $this->userAccountType = $userAccountType;
    }
    public function username(string $username): V1UsersInfoBasicGet200Response {
        $this->username = $username;
        return $this;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setUsername(string $username) {
        $this->username = $username;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_type' => 'int',
        'account_version' => 'int',
        'ai_account_type' => 'int',
        'avatar_url' => 'string',
        'enable_ai_account' => 'bool',
        'open_corp_id' => 'string',
        'open_corp_name' => 'string',
        'phone_status' => 'int',
        'status' => 'string',
        'user_account_type' => 'int',
        'username' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'account_type' => 'int64',
        'account_version' => 'int64',
        'ai_account_type' => 'int64',
        'avatar_url' => null,
        'enable_ai_account' => null,
        'open_corp_id' => null,
        'open_corp_name' => null,
        'phone_status' => 'int64',
        'status' => null,
        'user_account_type' => 'int64',
        'username' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'account_type' => false,
        'account_version' => false,
        'ai_account_type' => false,
        'avatar_url' => false,
        'enable_ai_account' => false,
        'open_corp_id' => false,
        'open_corp_name' => false,
        'phone_status' => false,
        'status' => false,
        'user_account_type' => false,
        'username' => false
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
        'account_type' => 'account_type',
        'account_version' => 'account_version',
        'ai_account_type' => 'ai_account_type',
        'avatar_url' => 'avatar_url',
        'enable_ai_account' => 'enable_ai_account',
        'open_corp_id' => 'open_corp_id',
        'open_corp_name' => 'open_corp_name',
        'phone_status' => 'phone_status',
        'status' => 'status',
        'user_account_type' => 'user_account_type',
        'username' => 'username'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_type' => 'setAccountType',
        'account_version' => 'setAccountVersion',
        'ai_account_type' => 'setAiAccountType',
        'avatar_url' => 'setAvatarUrl',
        'enable_ai_account' => 'setEnableAiAccount',
        'open_corp_id' => 'setOpenCorpId',
        'open_corp_name' => 'setOpenCorpName',
        'phone_status' => 'setPhoneStatus',
        'status' => 'setStatus',
        'user_account_type' => 'setUserAccountType',
        'username' => 'setUsername'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_type' => 'getAccountType',
        'account_version' => 'getAccountVersion',
        'ai_account_type' => 'getAiAccountType',
        'avatar_url' => 'getAvatarUrl',
        'enable_ai_account' => 'getEnableAiAccount',
        'open_corp_id' => 'getOpenCorpId',
        'open_corp_name' => 'getOpenCorpName',
        'phone_status' => 'getPhoneStatus',
        'status' => 'getStatus',
        'user_account_type' => 'getUserAccountType',
        'username' => 'getUsername'
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
            'account_type' => $this->accountType,
            'account_version' => $this->accountVersion,
            'ai_account_type' => $this->aiAccountType,
            'avatar_url' => $this->avatarUrl,
            'enable_ai_account' => $this->enableAiAccount,
            'open_corp_id' => $this->openCorpId,
            'open_corp_name' => $this->openCorpName,
            'phone_status' => $this->phoneStatus,
            'status' => $this->status,
            'user_account_type' => $this->userAccountType,
            'username' => $this->username,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

