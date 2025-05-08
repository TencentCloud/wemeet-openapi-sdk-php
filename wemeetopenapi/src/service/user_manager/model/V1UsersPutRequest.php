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


class V1UsersPutRequest implements ModelInterface, \JsonSerializable
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
    * 类型：string
     */
    protected $avatarUrl = null;

    /**
     * 员工部门，暂只支持为用户分配1个部门。
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
        if (isset($jsonArray['job_title'])) {
            $this->jobTitle = $jsonArray['job_title'];
        }
        if (isset($jsonArray['phone'])) {
            $this->phone = $jsonArray['phone'];
        }
        if (isset($jsonArray['staff_id'])) {
            $this->staffId = $jsonArray['staff_id'];
        }
        if (isset($jsonArray['username'])) {
            $this->username = $jsonArray['username'];
        }
    }

    public function avatarUrl(string $avatarUrl): V1UsersPutRequest {
        $this->avatarUrl = $avatarUrl;
        return $this;
    }

    public function getAvatarUrl() {
        return $this->avatarUrl;
    }

    public function setAvatarUrl(string $avatarUrl) {
        $this->avatarUrl = $avatarUrl;
    }
    public function departmentList(array $departmentList): V1UsersPutRequest {
        $this->departmentList = $departmentList;
        return $this;
    }

    public function getDepartmentList() {
        return $this->departmentList;
    }

    public function setDepartmentList(array $departmentList) {
        $this->departmentList = $departmentList;
    }
    public function email(string $email): V1UsersPutRequest {
        $this->email = $email;
        return $this;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail(string $email) {
        $this->email = $email;
    }
    public function entryTime(int $entryTime): V1UsersPutRequest {
        $this->entryTime = $entryTime;
        return $this;
    }

    public function getEntryTime() {
        return $this->entryTime;
    }

    public function setEntryTime(int $entryTime) {
        $this->entryTime = $entryTime;
    }
    public function jobTitle(string $jobTitle): V1UsersPutRequest {
        $this->jobTitle = $jobTitle;
        return $this;
    }

    public function getJobTitle() {
        return $this->jobTitle;
    }

    public function setJobTitle(string $jobTitle) {
        $this->jobTitle = $jobTitle;
    }
    public function operatorId(string $operatorId): V1UsersPutRequest {
        $this->operatorId = $operatorId;
        return $this;
    }

    public function getOperatorId() {
        return $this->operatorId;
    }

    public function setOperatorId(string $operatorId) {
        $this->operatorId = $operatorId;
    }
    public function operatorIdType(int $operatorIdType): V1UsersPutRequest {
        $this->operatorIdType = $operatorIdType;
        return $this;
    }

    public function getOperatorIdType() {
        return $this->operatorIdType;
    }

    public function setOperatorIdType(int $operatorIdType) {
        $this->operatorIdType = $operatorIdType;
    }
    public function phone(string $phone): V1UsersPutRequest {
        $this->phone = $phone;
        return $this;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function setPhone(string $phone) {
        $this->phone = $phone;
    }
    public function staffId(string $staffId): V1UsersPutRequest {
        $this->staffId = $staffId;
        return $this;
    }

    public function getStaffId() {
        return $this->staffId;
    }

    public function setStaffId(string $staffId) {
        $this->staffId = $staffId;
    }
    public function username(string $username): V1UsersPutRequest {
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
        'avatar_url' => 'string',
        'department_list' => 'string[]',
        'email' => 'string',
        'entry_time' => 'int',
        'job_title' => 'string',
        'operator_id' => 'string',
        'operator_id_type' => 'int',
        'phone' => 'string',
        'staff_id' => 'string',
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
        'avatar_url' => null,
        'department_list' => null,
        'email' => null,
        'entry_time' => 'int64',
        'job_title' => null,
        'operator_id' => null,
        'operator_id_type' => 'int64',
        'phone' => null,
        'staff_id' => null,
        'username' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'avatar_url' => false,
        'department_list' => false,
        'email' => false,
        'entry_time' => false,
        'job_title' => false,
        'operator_id' => false,
        'operator_id_type' => false,
        'phone' => false,
        'staff_id' => false,
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
        'avatar_url' => 'avatar_url',
        'department_list' => 'department_list',
        'email' => 'email',
        'entry_time' => 'entry_time',
        'job_title' => 'job_title',
        'operator_id' => 'operator_id',
        'operator_id_type' => 'operator_id_type',
        'phone' => 'phone',
        'staff_id' => 'staff_id',
        'username' => 'username'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'avatar_url' => 'setAvatarUrl',
        'department_list' => 'setDepartmentList',
        'email' => 'setEmail',
        'entry_time' => 'setEntryTime',
        'job_title' => 'setJobTitle',
        'operator_id' => 'setOperatorId',
        'operator_id_type' => 'setOperatorIdType',
        'phone' => 'setPhone',
        'staff_id' => 'setStaffId',
        'username' => 'setUsername'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'avatar_url' => 'getAvatarUrl',
        'department_list' => 'getDepartmentList',
        'email' => 'getEmail',
        'entry_time' => 'getEntryTime',
        'job_title' => 'getJobTitle',
        'operator_id' => 'getOperatorId',
        'operator_id_type' => 'getOperatorIdType',
        'phone' => 'getPhone',
        'staff_id' => 'getStaffId',
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
            'avatar_url' => $this->avatarUrl,
            'department_list' => $this->departmentList,
            'email' => $this->email,
            'entry_time' => $this->entryTime,
            'job_title' => $this->jobTitle,
            'operator_id' => $this->operatorId,
            'operator_id_type' => $this->operatorIdType,
            'phone' => $this->phone,
            'staff_id' => $this->staffId,
            'username' => $this->username,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

