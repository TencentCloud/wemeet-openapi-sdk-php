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


class V1UsersUseridPutRequest implements ModelInterface, \JsonSerializable
{
    /**
     * 操作者ID
    * 类型：
     */
    protected $operatorId;
    /**
     * 操作者ID类型，1:userid
    * 类型：
     */
    protected $operatorIdType;

    /**
     * 增强会议体验：房间规模升级许可。 0：回收房间规模升级许可 1：500方房间规模升级许可 2：1000方房间规模升级许可 3：2000方房间规模升级许可
    * 类型：int
     */
    protected $addOnLargemeeting = null;

    /**
     * 增强会议体验：网络研讨会（Webinar）观众规模升级许可。 0：回收 Webinar 观众规模升级许可 1：Webinar 观众规模提升至 300 观众 2：Webinar 观众规模提升至 500 观众 3：Webinar 观众规模提升至 1000 观众 4：Webinar 观众规模提升至 2000 观众 5：Webinar 观众规模提升至 3000 观众 6：Webinar 观众规模提升至 5000 观众 7：Webinar 观众规模提升至 8000 观众 8：Webinar 观众规模提升至 10000 观众
    * 类型：int
     */
    protected $addOnWebinar = null;

    /**
    * 类型：string
     */
    protected $area = null;

    /**
    * 类型：string
     */
    protected $avatarUrl = null;

    /**
    * 类型：string[]
     */
    protected $departmentList = null;

    /**
    * 类型：string
     */
    protected $email = null;

    /**
    * 类型：int
     */
    protected $entryTime = null;

    /**
     * 是否为voov用户，默认为0  0:否  1:是
    * 类型：int
     */
    protected $isVoov = null;

    /**
    * 类型：string
     */
    protected $jobTitle = null;

    /**
    * 类型：string
     */
    protected $phone = null;

    /**
    * 类型：string
     */
    protected $staffId = null;

    /**
     * 1：高级账号 2：免费账号 3：免费账号100方 4:高级账号300方，5:高级账号500方，6：高级账号1000方，7:高级账号2000方 8：高级账号100方（商业版） 9：高级账号（企业版/教育版/商业版）其中企业版/教育版：1，2 。免费组织 2。 商业版：2-7 ，新商业版：免费账号：2，高级账号：9。根据传入的参数判断是否有该类型账号，没有则报错。更新后，原类型账号资源释放。
    * 类型：int
     */
    protected $userAccountType = null;

    /**
    * 类型：string
     */
    protected $userid = null;

    /**
    * 类型：string
     */
    protected $username = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['operator_id'])) {
            $this->operatorId = $jsonArray['operator_id'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter operator_id');
        }
        if (isset($jsonArray['operator_id_type'])) {
            $this->operatorIdType = $jsonArray['operator_id_type'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter operator_id_type');
        }
        if (isset($jsonArray['add_on_largemeeting'])) {
            $this->addOnLargemeeting = $jsonArray['add_on_largemeeting'];
        }
        if (isset($jsonArray['add_on_webinar'])) {
            $this->addOnWebinar = $jsonArray['add_on_webinar'];
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
        if (isset($jsonArray['staff_id'])) {
            $this->staffId = $jsonArray['staff_id'];
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

    public function addOnLargemeeting(int $addOnLargemeeting): V1UsersUseridPutRequest {
        $this->addOnLargemeeting = $addOnLargemeeting;
        return $this;
    }

    public function getAddOnLargemeeting() {
        return $this->addOnLargemeeting;
    }

    public function setAddOnLargemeeting(int $addOnLargemeeting) {
        $this->addOnLargemeeting = $addOnLargemeeting;
    }
    public function addOnWebinar(int $addOnWebinar): V1UsersUseridPutRequest {
        $this->addOnWebinar = $addOnWebinar;
        return $this;
    }

    public function getAddOnWebinar() {
        return $this->addOnWebinar;
    }

    public function setAddOnWebinar(int $addOnWebinar) {
        $this->addOnWebinar = $addOnWebinar;
    }
    public function area(string $area): V1UsersUseridPutRequest {
        $this->area = $area;
        return $this;
    }

    public function getArea() {
        return $this->area;
    }

    public function setArea(string $area) {
        $this->area = $area;
    }
    public function avatarUrl(string $avatarUrl): V1UsersUseridPutRequest {
        $this->avatarUrl = $avatarUrl;
        return $this;
    }

    public function getAvatarUrl() {
        return $this->avatarUrl;
    }

    public function setAvatarUrl(string $avatarUrl) {
        $this->avatarUrl = $avatarUrl;
    }
    public function departmentList(array $departmentList): V1UsersUseridPutRequest {
        $this->departmentList = $departmentList;
        return $this;
    }

    public function getDepartmentList() {
        return $this->departmentList;
    }

    public function setDepartmentList(array $departmentList) {
        $this->departmentList = $departmentList;
    }
    public function email(string $email): V1UsersUseridPutRequest {
        $this->email = $email;
        return $this;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail(string $email) {
        $this->email = $email;
    }
    public function entryTime(int $entryTime): V1UsersUseridPutRequest {
        $this->entryTime = $entryTime;
        return $this;
    }

    public function getEntryTime() {
        return $this->entryTime;
    }

    public function setEntryTime(int $entryTime) {
        $this->entryTime = $entryTime;
    }
    public function isVoov(int $isVoov): V1UsersUseridPutRequest {
        $this->isVoov = $isVoov;
        return $this;
    }

    public function getIsVoov() {
        return $this->isVoov;
    }

    public function setIsVoov(int $isVoov) {
        $this->isVoov = $isVoov;
    }
    public function jobTitle(string $jobTitle): V1UsersUseridPutRequest {
        $this->jobTitle = $jobTitle;
        return $this;
    }

    public function getJobTitle() {
        return $this->jobTitle;
    }

    public function setJobTitle(string $jobTitle) {
        $this->jobTitle = $jobTitle;
    }
    public function operatorId(string $operatorId): V1UsersUseridPutRequest {
        $this->operatorId = $operatorId;
        return $this;
    }

    public function getOperatorId() {
        return $this->operatorId;
    }

    public function setOperatorId(string $operatorId) {
        $this->operatorId = $operatorId;
    }
    public function operatorIdType(int $operatorIdType): V1UsersUseridPutRequest {
        $this->operatorIdType = $operatorIdType;
        return $this;
    }

    public function getOperatorIdType() {
        return $this->operatorIdType;
    }

    public function setOperatorIdType(int $operatorIdType) {
        $this->operatorIdType = $operatorIdType;
    }
    public function phone(string $phone): V1UsersUseridPutRequest {
        $this->phone = $phone;
        return $this;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function setPhone(string $phone) {
        $this->phone = $phone;
    }
    public function staffId(string $staffId): V1UsersUseridPutRequest {
        $this->staffId = $staffId;
        return $this;
    }

    public function getStaffId() {
        return $this->staffId;
    }

    public function setStaffId(string $staffId) {
        $this->staffId = $staffId;
    }
    public function userAccountType(int $userAccountType): V1UsersUseridPutRequest {
        $this->userAccountType = $userAccountType;
        return $this;
    }

    public function getUserAccountType() {
        return $this->userAccountType;
    }

    public function setUserAccountType(int $userAccountType) {
        $this->userAccountType = $userAccountType;
    }
    public function userid(string $userid): V1UsersUseridPutRequest {
        $this->userid = $userid;
        return $this;
    }

    public function getUserid() {
        return $this->userid;
    }

    public function setUserid(string $userid) {
        $this->userid = $userid;
    }
    public function username(string $username): V1UsersUseridPutRequest {
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
        'add_on_largemeeting' => 'int',
        'add_on_webinar' => 'int',
        'area' => 'string',
        'avatar_url' => 'string',
        'department_list' => 'string[]',
        'email' => 'string',
        'entry_time' => 'int',
        'is_voov' => 'int',
        'job_title' => 'string',
        'operator_id' => 'string',
        'operator_id_type' => 'int',
        'phone' => 'string',
        'staff_id' => 'string',
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
        'add_on_largemeeting' => 'int64',
        'add_on_webinar' => 'int64',
        'area' => null,
        'avatar_url' => null,
        'department_list' => null,
        'email' => null,
        'entry_time' => 'int64',
        'is_voov' => 'int64',
        'job_title' => null,
        'operator_id' => null,
        'operator_id_type' => 'int64',
        'phone' => null,
        'staff_id' => null,
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
        'add_on_largemeeting' => false,
        'add_on_webinar' => false,
        'area' => false,
        'avatar_url' => false,
        'department_list' => false,
        'email' => false,
        'entry_time' => false,
        'is_voov' => false,
        'job_title' => false,
        'operator_id' => false,
        'operator_id_type' => false,
        'phone' => false,
        'staff_id' => false,
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
        'add_on_largemeeting' => 'add_on_largemeeting',
        'add_on_webinar' => 'add_on_webinar',
        'area' => 'area',
        'avatar_url' => 'avatar_url',
        'department_list' => 'department_list',
        'email' => 'email',
        'entry_time' => 'entry_time',
        'is_voov' => 'is_voov',
        'job_title' => 'job_title',
        'operator_id' => 'operator_id',
        'operator_id_type' => 'operator_id_type',
        'phone' => 'phone',
        'staff_id' => 'staff_id',
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
        'add_on_largemeeting' => 'setAddOnLargemeeting',
        'add_on_webinar' => 'setAddOnWebinar',
        'area' => 'setArea',
        'avatar_url' => 'setAvatarUrl',
        'department_list' => 'setDepartmentList',
        'email' => 'setEmail',
        'entry_time' => 'setEntryTime',
        'is_voov' => 'setIsVoov',
        'job_title' => 'setJobTitle',
        'operator_id' => 'setOperatorId',
        'operator_id_type' => 'setOperatorIdType',
        'phone' => 'setPhone',
        'staff_id' => 'setStaffId',
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
        'add_on_largemeeting' => 'getAddOnLargemeeting',
        'add_on_webinar' => 'getAddOnWebinar',
        'area' => 'getArea',
        'avatar_url' => 'getAvatarUrl',
        'department_list' => 'getDepartmentList',
        'email' => 'getEmail',
        'entry_time' => 'getEntryTime',
        'is_voov' => 'getIsVoov',
        'job_title' => 'getJobTitle',
        'operator_id' => 'getOperatorId',
        'operator_id_type' => 'getOperatorIdType',
        'phone' => 'getPhone',
        'staff_id' => 'getStaffId',
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
            'add_on_largemeeting' => $this->addOnLargemeeting,
            'add_on_webinar' => $this->addOnWebinar,
            'area' => $this->area,
            'avatar_url' => $this->avatarUrl,
            'department_list' => $this->departmentList,
            'email' => $this->email,
            'entry_time' => $this->entryTime,
            'is_voov' => $this->isVoov,
            'job_title' => $this->jobTitle,
            'operator_id' => $this->operatorId,
            'operator_id_type' => $this->operatorIdType,
            'phone' => $this->phone,
            'staff_id' => $this->staffId,
            'user_account_type' => $this->userAccountType,
            'userid' => $this->userid,
            'username' => $this->username,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

