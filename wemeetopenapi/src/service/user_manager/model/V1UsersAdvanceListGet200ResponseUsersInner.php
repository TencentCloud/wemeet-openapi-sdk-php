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


class V1UsersAdvanceListGet200ResponseUsersInner implements ModelInterface, \JsonSerializable
{

    /**
     * 账号版本。 0：其他 1：商业版 2：企业版 3：教育版
    * 类型：int
     */
    protected $accountVersion = null;

    /**
     * 增强会议体验：房间规模升级许可。 1：500方房间规模升级许可 2：1000方房间规模升级许可 3：2000方房间规模升级许可
    * 类型：int
     */
    protected $addOnLargemeeting = null;

    /**
     * 增强会议体验：网络研讨会（Webinar）观众规模升级许可。 1：Webinar 观众规模提升至 300 观众 2：Webinar 观众规模提升至 500 观众 3：Webinar 观众规模提升至 1000 观众 4：Webinar 观众规模提升至 2000 观众 5：Webinar 观众规模提升至 3000 观众 6：Webinar 观众规模提升至 5000 观众 7：Webinar 观众规模提升至 8000 观众 8：Webinar 观众规模提升至 10000 观众
    * 类型：int
     */
    protected $addOnWebinar = null;

    /**
     * AI 账号类型。 0：无账号 1：购买版 2：赠送版
    * 类型：int
     */
    protected $aiAccountType = null;

    /**
     * 手机区号
    * 类型：string
     */
    protected $area = null;

    /**
     * 头像地址
    * 类型：string
     */
    protected $avatarUrl = null;

    /**
     * 用户部门信息
    * 类型：\wemeet\openapi\service\user_manager\model\V1UsersAdvanceListGet200ResponseUsersInnerDepartmentListInner[]
     */
    protected $departmentList = null;

    /**
     * 邮箱
    * 类型：string
     */
    protected $email = null;

    /**
     * 邮箱验证状态： 1：已验证 2：未验证
    * 类型：int
     */
    protected $emailStatus = null;

    /**
     * 是否有 AI 账号能力。 true：有  false：无  教育版/企业版存在有 AI 账号，商业版都具有 AI 能力，其余为 false。
    * 类型：bool
     */
    protected $enableAiAccount = null;

    /**
     * 入职时间
    * 类型：string
     */
    protected $entryTime = null;

    /**
     * 是否为 VooV Meeting 客户端（国际账号），默认为0。 0：否 1：是
    * 类型：int
     */
    protected $isVoov = null;

    /**
     * 员工职位
    * 类型：string
     */
    protected $jobTitle = null;

    /**
     * 手机号
    * 类型：string
     */
    protected $phone = null;

    /**
     * 手机号验证状态。 0：未知 1：已验证 2：未验证
    * 类型：int
     */
    protected $phoneStatus = null;

    /**
     * 角色类型
    * 类型：string
     */
    protected $roleCode = null;

    /**
     * 角色名称
    * 类型：string
     */
    protected $roleName = null;

    /**
     * 员工工号
    * 类型：string
     */
    protected $staffId = null;

    /**
     * 账号状态。账号状态： 1：正常 2：注销 3：未激活 4：禁用 5：预注册
    * 类型：string
     */
    protected $status = null;

    /**
     * 更新时间
    * 类型：string
     */
    protected $updateTime = null;

    /**
     * 账号类型。 1：高级账号（企业版/教育版） 2：免费账号（企业版/教育版） 3：免费账号100方 （商业版） 4：高级账号300方（商业版） 5：高级账号500方（商业版） 6：高级账号1000方（商业版） 7：高级账号2000方（商业版） 8：高级账号100方（商业版）9：高级账号（企业版/教育版/商业版）
    * 类型：int
     */
    protected $userAccountType = null;

    /**
     * 用户userid
    * 类型：string
     */
    protected $userid = null;

    /**
     * 用户名称
    * 类型：string
     */
    protected $username = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['account_version'])) {
            $this->accountVersion = $jsonArray['account_version'];
        }
        if (isset($jsonArray['add_on_largemeeting'])) {
            $this->addOnLargemeeting = $jsonArray['add_on_largemeeting'];
        }
        if (isset($jsonArray['add_on_webinar'])) {
            $this->addOnWebinar = $jsonArray['add_on_webinar'];
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
        if (isset($jsonArray['email_status'])) {
            $this->emailStatus = $jsonArray['email_status'];
        }
        if (isset($jsonArray['enable_ai_account'])) {
            $this->enableAiAccount = $jsonArray['enable_ai_account'];
        }
        if (isset($jsonArray['entry_time'])) {
            $this->entryTime = $jsonArray['entry_time'];
        }
        if (isset($jsonArray['is_voov'])) {
            $this->isVoov = $jsonArray['is_voov'];
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
    }

    public function accountVersion(int $accountVersion): V1UsersAdvanceListGet200ResponseUsersInner {
        $this->accountVersion = $accountVersion;
        return $this;
    }

    public function getAccountVersion() {
        return $this->accountVersion;
    }

    public function setAccountVersion(int $accountVersion) {
        $this->accountVersion = $accountVersion;
    }
    public function addOnLargemeeting(int $addOnLargemeeting): V1UsersAdvanceListGet200ResponseUsersInner {
        $this->addOnLargemeeting = $addOnLargemeeting;
        return $this;
    }

    public function getAddOnLargemeeting() {
        return $this->addOnLargemeeting;
    }

    public function setAddOnLargemeeting(int $addOnLargemeeting) {
        $this->addOnLargemeeting = $addOnLargemeeting;
    }
    public function addOnWebinar(int $addOnWebinar): V1UsersAdvanceListGet200ResponseUsersInner {
        $this->addOnWebinar = $addOnWebinar;
        return $this;
    }

    public function getAddOnWebinar() {
        return $this->addOnWebinar;
    }

    public function setAddOnWebinar(int $addOnWebinar) {
        $this->addOnWebinar = $addOnWebinar;
    }
    public function aiAccountType(int $aiAccountType): V1UsersAdvanceListGet200ResponseUsersInner {
        $this->aiAccountType = $aiAccountType;
        return $this;
    }

    public function getAiAccountType() {
        return $this->aiAccountType;
    }

    public function setAiAccountType(int $aiAccountType) {
        $this->aiAccountType = $aiAccountType;
    }
    public function area(string $area): V1UsersAdvanceListGet200ResponseUsersInner {
        $this->area = $area;
        return $this;
    }

    public function getArea() {
        return $this->area;
    }

    public function setArea(string $area) {
        $this->area = $area;
    }
    public function avatarUrl(string $avatarUrl): V1UsersAdvanceListGet200ResponseUsersInner {
        $this->avatarUrl = $avatarUrl;
        return $this;
    }

    public function getAvatarUrl() {
        return $this->avatarUrl;
    }

    public function setAvatarUrl(string $avatarUrl) {
        $this->avatarUrl = $avatarUrl;
    }
    public function departmentList(array $departmentList): V1UsersAdvanceListGet200ResponseUsersInner {
        $this->departmentList = $departmentList;
        return $this;
    }

    public function getDepartmentList() {
        return $this->departmentList;
    }

    public function setDepartmentList(array $departmentList) {
        $this->departmentList = $departmentList;
    }
    public function email(string $email): V1UsersAdvanceListGet200ResponseUsersInner {
        $this->email = $email;
        return $this;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail(string $email) {
        $this->email = $email;
    }
    public function emailStatus(int $emailStatus): V1UsersAdvanceListGet200ResponseUsersInner {
        $this->emailStatus = $emailStatus;
        return $this;
    }

    public function getEmailStatus() {
        return $this->emailStatus;
    }

    public function setEmailStatus(int $emailStatus) {
        $this->emailStatus = $emailStatus;
    }
    public function enableAiAccount(bool $enableAiAccount): V1UsersAdvanceListGet200ResponseUsersInner {
        $this->enableAiAccount = $enableAiAccount;
        return $this;
    }

    public function getEnableAiAccount() {
        return $this->enableAiAccount;
    }

    public function setEnableAiAccount(bool $enableAiAccount) {
        $this->enableAiAccount = $enableAiAccount;
    }
    public function entryTime(string $entryTime): V1UsersAdvanceListGet200ResponseUsersInner {
        $this->entryTime = $entryTime;
        return $this;
    }

    public function getEntryTime() {
        return $this->entryTime;
    }

    public function setEntryTime(string $entryTime) {
        $this->entryTime = $entryTime;
    }
    public function isVoov(int $isVoov): V1UsersAdvanceListGet200ResponseUsersInner {
        $this->isVoov = $isVoov;
        return $this;
    }

    public function getIsVoov() {
        return $this->isVoov;
    }

    public function setIsVoov(int $isVoov) {
        $this->isVoov = $isVoov;
    }
    public function jobTitle(string $jobTitle): V1UsersAdvanceListGet200ResponseUsersInner {
        $this->jobTitle = $jobTitle;
        return $this;
    }

    public function getJobTitle() {
        return $this->jobTitle;
    }

    public function setJobTitle(string $jobTitle) {
        $this->jobTitle = $jobTitle;
    }
    public function phone(string $phone): V1UsersAdvanceListGet200ResponseUsersInner {
        $this->phone = $phone;
        return $this;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function setPhone(string $phone) {
        $this->phone = $phone;
    }
    public function phoneStatus(int $phoneStatus): V1UsersAdvanceListGet200ResponseUsersInner {
        $this->phoneStatus = $phoneStatus;
        return $this;
    }

    public function getPhoneStatus() {
        return $this->phoneStatus;
    }

    public function setPhoneStatus(int $phoneStatus) {
        $this->phoneStatus = $phoneStatus;
    }
    public function roleCode(string $roleCode): V1UsersAdvanceListGet200ResponseUsersInner {
        $this->roleCode = $roleCode;
        return $this;
    }

    public function getRoleCode() {
        return $this->roleCode;
    }

    public function setRoleCode(string $roleCode) {
        $this->roleCode = $roleCode;
    }
    public function roleName(string $roleName): V1UsersAdvanceListGet200ResponseUsersInner {
        $this->roleName = $roleName;
        return $this;
    }

    public function getRoleName() {
        return $this->roleName;
    }

    public function setRoleName(string $roleName) {
        $this->roleName = $roleName;
    }
    public function staffId(string $staffId): V1UsersAdvanceListGet200ResponseUsersInner {
        $this->staffId = $staffId;
        return $this;
    }

    public function getStaffId() {
        return $this->staffId;
    }

    public function setStaffId(string $staffId) {
        $this->staffId = $staffId;
    }
    public function status(string $status): V1UsersAdvanceListGet200ResponseUsersInner {
        $this->status = $status;
        return $this;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus(string $status) {
        $this->status = $status;
    }
    public function updateTime(string $updateTime): V1UsersAdvanceListGet200ResponseUsersInner {
        $this->updateTime = $updateTime;
        return $this;
    }

    public function getUpdateTime() {
        return $this->updateTime;
    }

    public function setUpdateTime(string $updateTime) {
        $this->updateTime = $updateTime;
    }
    public function userAccountType(int $userAccountType): V1UsersAdvanceListGet200ResponseUsersInner {
        $this->userAccountType = $userAccountType;
        return $this;
    }

    public function getUserAccountType() {
        return $this->userAccountType;
    }

    public function setUserAccountType(int $userAccountType) {
        $this->userAccountType = $userAccountType;
    }
    public function userid(string $userid): V1UsersAdvanceListGet200ResponseUsersInner {
        $this->userid = $userid;
        return $this;
    }

    public function getUserid() {
        return $this->userid;
    }

    public function setUserid(string $userid) {
        $this->userid = $userid;
    }
    public function username(string $username): V1UsersAdvanceListGet200ResponseUsersInner {
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
        'account_version' => 'int',
        'add_on_largemeeting' => 'int',
        'add_on_webinar' => 'int',
        'ai_account_type' => 'int',
        'area' => 'string',
        'avatar_url' => 'string',
        'department_list' => '\wemeet\openapi\service\user_manager\model\V1UsersAdvanceListGet200ResponseUsersInnerDepartmentListInner[]',
        'email' => 'string',
        'email_status' => 'int',
        'enable_ai_account' => 'bool',
        'entry_time' => 'string',
        'is_voov' => 'int',
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
        'account_version' => 'int64',
        'add_on_largemeeting' => 'int64',
        'add_on_webinar' => 'int64',
        'ai_account_type' => 'int64',
        'area' => null,
        'avatar_url' => null,
        'department_list' => null,
        'email' => null,
        'email_status' => 'int64',
        'enable_ai_account' => null,
        'entry_time' => null,
        'is_voov' => 'int64',
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
        'username' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'account_version' => false,
        'add_on_largemeeting' => false,
        'add_on_webinar' => false,
        'ai_account_type' => false,
        'area' => false,
        'avatar_url' => false,
        'department_list' => false,
        'email' => false,
        'email_status' => false,
        'enable_ai_account' => false,
        'entry_time' => false,
        'is_voov' => false,
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
        'account_version' => 'account_version',
        'add_on_largemeeting' => 'add_on_largemeeting',
        'add_on_webinar' => 'add_on_webinar',
        'ai_account_type' => 'ai_account_type',
        'area' => 'area',
        'avatar_url' => 'avatar_url',
        'department_list' => 'department_list',
        'email' => 'email',
        'email_status' => 'email_status',
        'enable_ai_account' => 'enable_ai_account',
        'entry_time' => 'entry_time',
        'is_voov' => 'is_voov',
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
        'username' => 'username'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_version' => 'setAccountVersion',
        'add_on_largemeeting' => 'setAddOnLargemeeting',
        'add_on_webinar' => 'setAddOnWebinar',
        'ai_account_type' => 'setAiAccountType',
        'area' => 'setArea',
        'avatar_url' => 'setAvatarUrl',
        'department_list' => 'setDepartmentList',
        'email' => 'setEmail',
        'email_status' => 'setEmailStatus',
        'enable_ai_account' => 'setEnableAiAccount',
        'entry_time' => 'setEntryTime',
        'is_voov' => 'setIsVoov',
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
        'username' => 'setUsername'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_version' => 'getAccountVersion',
        'add_on_largemeeting' => 'getAddOnLargemeeting',
        'add_on_webinar' => 'getAddOnWebinar',
        'ai_account_type' => 'getAiAccountType',
        'area' => 'getArea',
        'avatar_url' => 'getAvatarUrl',
        'department_list' => 'getDepartmentList',
        'email' => 'getEmail',
        'email_status' => 'getEmailStatus',
        'enable_ai_account' => 'getEnableAiAccount',
        'entry_time' => 'getEntryTime',
        'is_voov' => 'getIsVoov',
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
            'account_version' => $this->accountVersion,
            'add_on_largemeeting' => $this->addOnLargemeeting,
            'add_on_webinar' => $this->addOnWebinar,
            'ai_account_type' => $this->aiAccountType,
            'area' => $this->area,
            'avatar_url' => $this->avatarUrl,
            'department_list' => $this->departmentList,
            'email' => $this->email,
            'email_status' => $this->emailStatus,
            'enable_ai_account' => $this->enableAiAccount,
            'entry_time' => $this->entryTime,
            'is_voov' => $this->isVoov,
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
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

