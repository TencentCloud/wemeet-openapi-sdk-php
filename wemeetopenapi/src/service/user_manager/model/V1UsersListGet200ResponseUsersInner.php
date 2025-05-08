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


class V1UsersListGet200ResponseUsersInner implements ModelInterface, \JsonSerializable
{

    /**
     * 账号版本
    * 类型：int
     */
    protected $accountVersion = null;

    /**
     * ai账号类型 1:购买版 2:赠送版
    * 类型：int
     */
    protected $aiAccountType = null;

    /**
     * 手机区号。
    * 类型：string
     */
    protected $area = null;

    /**
     * 用户图像地址。
    * 类型：string
     */
    protected $avatarUrl = null;

    /**
     * 用户部门信息。
    * 类型：\wemeet\openapi\service\user_manager\model\V1UsersListGet200ResponseUsersInnerDepartmentListInner[]
     */
    protected $departmentList = null;

    /**
     * 邮箱。
    * 类型：string
     */
    protected $email = null;

    /**
     * 是否有ai账号能力  true：有  false：无  教育版/企业版存在有ai账号，商业版都具有ai能力，其余为false
    * 类型：bool
     */
    protected $enableAiAccount = null;

    /**
     * 入职时间。
    * 类型：string
     */
    protected $entryTime = null;

    /**
     * 员工职位。
    * 类型：string
     */
    protected $jobTitle = null;

    /**
     * 手机号。
    * 类型：string
     */
    protected $phone = null;

    /**
     * 手机号验证状态。 0：未知 1：已验证 2：未验证
    * 类型：int
     */
    protected $phoneStatus = null;

    /**
     * 角色类型。
    * 类型：string
     */
    protected $roleCode = null;

    /**
     * 角色名称。
    * 类型：string
     */
    protected $roleName = null;

    /**
     * String  员工工号。
    * 类型：string
     */
    protected $staffId = null;

    /**
     * 账号状态： 1：正常 2：注销 3：未激活 4：禁用
    * 类型：string
     */
    protected $status = null;

    /**
     * String  更新时间。
    * 类型：string
     */
    protected $updateTime = null;

    /**
     * 账号类型    1：高级账号 （企业版，教育版）  2：免费账号  （企业版，教育版，商业版）  3：免费账号100方 （商业版）  4：高级账号300方（商业版）  5：高级账号500方（商业版）  6：高级账号1000方（商业版）  7:高级账号2000方（商业版）
    * 类型：int
     */
    protected $userAccountType = null;

    /**
     * String  用户 userid。
    * 类型：string
     */
    protected $userid = null;

    /**
     * 用户 name。
    * 类型：string
     */
    protected $username = null;

    /**
     * 用户身份 ID（腾讯会议颁发的用于开放平台的唯一用户 ID）。
    * 类型：string
     */
    protected $uuid = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['account_version'])) {
            $this->accountVersion = $jsonArray['account_version'];
        }
        if (isset($jsonArray['ai_account_type'])) {
            $this->aiAccountType = $jsonArray['ai_account_type'];
        }
        if (isset($jsonArray['area'])) {
            $this->area = $jsonArray['area'];
        }
        if (isset($jsonArray['avatar_url'])) {
            $this->avatarUrl = $jsonArray['avatar_url'];
        }
        if (isset($jsonArray['department_list'])) {
            $this->departmentList = $jsonArray['department_list'];
        }
        if (isset($jsonArray['email'])) {
            $this->email = $jsonArray['email'];
        }
        if (isset($jsonArray['enable_ai_account'])) {
            $this->enableAiAccount = $jsonArray['enable_ai_account'];
        }
        if (isset($jsonArray['entry_time'])) {
            $this->entryTime = $jsonArray['entry_time'];
        }
        if (isset($jsonArray['job_title'])) {
            $this->jobTitle = $jsonArray['job_title'];
        }
        if (isset($jsonArray['phone'])) {
            $this->phone = $jsonArray['phone'];
        }
        if (isset($jsonArray['phone_status'])) {
            $this->phoneStatus = $jsonArray['phone_status'];
        }
        if (isset($jsonArray['role_code'])) {
            $this->roleCode = $jsonArray['role_code'];
        }
        if (isset($jsonArray['role_name'])) {
            $this->roleName = $jsonArray['role_name'];
        }
        if (isset($jsonArray['staff_id'])) {
            $this->staffId = $jsonArray['staff_id'];
        }
        if (isset($jsonArray['status'])) {
            $this->status = $jsonArray['status'];
        }
        if (isset($jsonArray['update_time'])) {
            $this->updateTime = $jsonArray['update_time'];
        }
        if (isset($jsonArray['user_account_type'])) {
            $this->userAccountType = $jsonArray['user_account_type'];
        }
        if (isset($jsonArray['userid'])) {
            $this->userid = $jsonArray['userid'];
        }
        if (isset($jsonArray['username'])) {
            $this->username = $jsonArray['username'];
        }
        if (isset($jsonArray['uuid'])) {
            $this->uuid = $jsonArray['uuid'];
        }
    }

    public function accountVersion(int $accountVersion): V1UsersListGet200ResponseUsersInner {
        $this->accountVersion = $accountVersion;
        return $this;
    }

    public function getAccountVersion() {
        return $this->accountVersion;
    }

    public function setAccountVersion(int $accountVersion) {
        $this->accountVersion = $accountVersion;
    }
    public function aiAccountType(int $aiAccountType): V1UsersListGet200ResponseUsersInner {
        $this->aiAccountType = $aiAccountType;
        return $this;
    }

    public function getAiAccountType() {
        return $this->aiAccountType;
    }

    public function setAiAccountType(int $aiAccountType) {
        $this->aiAccountType = $aiAccountType;
    }
    public function area(string $area): V1UsersListGet200ResponseUsersInner {
        $this->area = $area;
        return $this;
    }

    public function getArea() {
        return $this->area;
    }

    public function setArea(string $area) {
        $this->area = $area;
    }
    public function avatarUrl(string $avatarUrl): V1UsersListGet200ResponseUsersInner {
        $this->avatarUrl = $avatarUrl;
        return $this;
    }

    public function getAvatarUrl() {
        return $this->avatarUrl;
    }

    public function setAvatarUrl(string $avatarUrl) {
        $this->avatarUrl = $avatarUrl;
    }
    public function departmentList(array $departmentList): V1UsersListGet200ResponseUsersInner {
        $this->departmentList = $departmentList;
        return $this;
    }

    public function getDepartmentList() {
        return $this->departmentList;
    }

    public function setDepartmentList(array $departmentList) {
        $this->departmentList = $departmentList;
    }
    public function email(string $email): V1UsersListGet200ResponseUsersInner {
        $this->email = $email;
        return $this;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail(string $email) {
        $this->email = $email;
    }
    public function enableAiAccount(bool $enableAiAccount): V1UsersListGet200ResponseUsersInner {
        $this->enableAiAccount = $enableAiAccount;
        return $this;
    }

    public function getEnableAiAccount() {
        return $this->enableAiAccount;
    }

    public function setEnableAiAccount(bool $enableAiAccount) {
        $this->enableAiAccount = $enableAiAccount;
    }
    public function entryTime(string $entryTime): V1UsersListGet200ResponseUsersInner {
        $this->entryTime = $entryTime;
        return $this;
    }

    public function getEntryTime() {
        return $this->entryTime;
    }

    public function setEntryTime(string $entryTime) {
        $this->entryTime = $entryTime;
    }
    public function jobTitle(string $jobTitle): V1UsersListGet200ResponseUsersInner {
        $this->jobTitle = $jobTitle;
        return $this;
    }

    public function getJobTitle() {
        return $this->jobTitle;
    }

    public function setJobTitle(string $jobTitle) {
        $this->jobTitle = $jobTitle;
    }
    public function phone(string $phone): V1UsersListGet200ResponseUsersInner {
        $this->phone = $phone;
        return $this;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function setPhone(string $phone) {
        $this->phone = $phone;
    }
    public function phoneStatus(int $phoneStatus): V1UsersListGet200ResponseUsersInner {
        $this->phoneStatus = $phoneStatus;
        return $this;
    }

    public function getPhoneStatus() {
        return $this->phoneStatus;
    }

    public function setPhoneStatus(int $phoneStatus) {
        $this->phoneStatus = $phoneStatus;
    }
    public function roleCode(string $roleCode): V1UsersListGet200ResponseUsersInner {
        $this->roleCode = $roleCode;
        return $this;
    }

    public function getRoleCode() {
        return $this->roleCode;
    }

    public function setRoleCode(string $roleCode) {
        $this->roleCode = $roleCode;
    }
    public function roleName(string $roleName): V1UsersListGet200ResponseUsersInner {
        $this->roleName = $roleName;
        return $this;
    }

    public function getRoleName() {
        return $this->roleName;
    }

    public function setRoleName(string $roleName) {
        $this->roleName = $roleName;
    }
    public function staffId(string $staffId): V1UsersListGet200ResponseUsersInner {
        $this->staffId = $staffId;
        return $this;
    }

    public function getStaffId() {
        return $this->staffId;
    }

    public function setStaffId(string $staffId) {
        $this->staffId = $staffId;
    }
    public function status(string $status): V1UsersListGet200ResponseUsersInner {
        $this->status = $status;
        return $this;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus(string $status) {
        $this->status = $status;
    }
    public function updateTime(string $updateTime): V1UsersListGet200ResponseUsersInner {
        $this->updateTime = $updateTime;
        return $this;
    }

    public function getUpdateTime() {
        return $this->updateTime;
    }

    public function setUpdateTime(string $updateTime) {
        $this->updateTime = $updateTime;
    }
    public function userAccountType(int $userAccountType): V1UsersListGet200ResponseUsersInner {
        $this->userAccountType = $userAccountType;
        return $this;
    }

    public function getUserAccountType() {
        return $this->userAccountType;
    }

    public function setUserAccountType(int $userAccountType) {
        $this->userAccountType = $userAccountType;
    }
    public function userid(string $userid): V1UsersListGet200ResponseUsersInner {
        $this->userid = $userid;
        return $this;
    }

    public function getUserid() {
        return $this->userid;
    }

    public function setUserid(string $userid) {
        $this->userid = $userid;
    }
    public function username(string $username): V1UsersListGet200ResponseUsersInner {
        $this->username = $username;
        return $this;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setUsername(string $username) {
        $this->username = $username;
    }
    public function uuid(string $uuid): V1UsersListGet200ResponseUsersInner {
        $this->uuid = $uuid;
        return $this;
    }

    public function getUuid() {
        return $this->uuid;
    }

    public function setUuid(string $uuid) {
        $this->uuid = $uuid;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_version' => 'int',
        'ai_account_type' => 'int',
        'area' => 'string',
        'avatar_url' => 'string',
        'department_list' => '\wemeet\openapi\service\user_manager\model\V1UsersListGet200ResponseUsersInnerDepartmentListInner[]',
        'email' => 'string',
        'enable_ai_account' => 'bool',
        'entry_time' => 'string',
        'job_title' => 'string',
        'phone' => 'string',
        'phone_status' => 'int',
        'role_code' => 'string',
        'role_name' => 'string',
        'staff_id' => 'string',
        'status' => 'string',
        'update_time' => 'string',
        'user_account_type' => 'int',
        'userid' => 'string',
        'username' => 'string',
        'uuid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'account_version' => 'int64',
        'ai_account_type' => 'int64',
        'area' => null,
        'avatar_url' => null,
        'department_list' => null,
        'email' => null,
        'enable_ai_account' => null,
        'entry_time' => null,
        'job_title' => null,
        'phone' => null,
        'phone_status' => 'int64',
        'role_code' => null,
        'role_name' => null,
        'staff_id' => null,
        'status' => null,
        'update_time' => null,
        'user_account_type' => 'int64',
        'userid' => null,
        'username' => null,
        'uuid' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'account_version' => false,
        'ai_account_type' => false,
        'area' => false,
        'avatar_url' => false,
        'department_list' => false,
        'email' => false,
        'enable_ai_account' => false,
        'entry_time' => false,
        'job_title' => false,
        'phone' => false,
        'phone_status' => false,
        'role_code' => false,
        'role_name' => false,
        'staff_id' => false,
        'status' => false,
        'update_time' => false,
        'user_account_type' => false,
        'userid' => false,
        'username' => false,
        'uuid' => false
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
        'account_version' => 'account_version',
        'ai_account_type' => 'ai_account_type',
        'area' => 'area',
        'avatar_url' => 'avatar_url',
        'department_list' => 'department_list',
        'email' => 'email',
        'enable_ai_account' => 'enable_ai_account',
        'entry_time' => 'entry_time',
        'job_title' => 'job_title',
        'phone' => 'phone',
        'phone_status' => 'phone_status',
        'role_code' => 'role_code',
        'role_name' => 'role_name',
        'staff_id' => 'staff_id',
        'status' => 'status',
        'update_time' => 'update_time',
        'user_account_type' => 'user_account_type',
        'userid' => 'userid',
        'username' => 'username',
        'uuid' => 'uuid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_version' => 'setAccountVersion',
        'ai_account_type' => 'setAiAccountType',
        'area' => 'setArea',
        'avatar_url' => 'setAvatarUrl',
        'department_list' => 'setDepartmentList',
        'email' => 'setEmail',
        'enable_ai_account' => 'setEnableAiAccount',
        'entry_time' => 'setEntryTime',
        'job_title' => 'setJobTitle',
        'phone' => 'setPhone',
        'phone_status' => 'setPhoneStatus',
        'role_code' => 'setRoleCode',
        'role_name' => 'setRoleName',
        'staff_id' => 'setStaffId',
        'status' => 'setStatus',
        'update_time' => 'setUpdateTime',
        'user_account_type' => 'setUserAccountType',
        'userid' => 'setUserid',
        'username' => 'setUsername',
        'uuid' => 'setUuid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_version' => 'getAccountVersion',
        'ai_account_type' => 'getAiAccountType',
        'area' => 'getArea',
        'avatar_url' => 'getAvatarUrl',
        'department_list' => 'getDepartmentList',
        'email' => 'getEmail',
        'enable_ai_account' => 'getEnableAiAccount',
        'entry_time' => 'getEntryTime',
        'job_title' => 'getJobTitle',
        'phone' => 'getPhone',
        'phone_status' => 'getPhoneStatus',
        'role_code' => 'getRoleCode',
        'role_name' => 'getRoleName',
        'staff_id' => 'getStaffId',
        'status' => 'getStatus',
        'update_time' => 'getUpdateTime',
        'user_account_type' => 'getUserAccountType',
        'userid' => 'getUserid',
        'username' => 'getUsername',
        'uuid' => 'getUuid'
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
            'account_version' => $this->accountVersion,
            'ai_account_type' => $this->aiAccountType,
            'area' => $this->area,
            'avatar_url' => $this->avatarUrl,
            'department_list' => $this->departmentList,
            'email' => $this->email,
            'enable_ai_account' => $this->enableAiAccount,
            'entry_time' => $this->entryTime,
            'job_title' => $this->jobTitle,
            'phone' => $this->phone,
            'phone_status' => $this->phoneStatus,
            'role_code' => $this->roleCode,
            'role_name' => $this->roleName,
            'staff_id' => $this->staffId,
            'status' => $this->status,
            'update_time' => $this->updateTime,
            'user_account_type' => $this->userAccountType,
            'userid' => $this->userid,
            'username' => $this->username,
            'uuid' => $this->uuid,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

