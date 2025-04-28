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


class V1UsersAdvanceListGet200ResponseUsersInnerDepartmentListInner implements ModelInterface, \JsonSerializable
{

    /**
     * 部门全路径
    * 类型：string
     */
    protected $departmentFullName = null;

    /**
     * 部门ID
    * 类型：string
     */
    protected $departmentId = null;

    /**
     * 部门名称
    * 类型：string
     */
    protected $departmentName = null;

    /**
     * 是否主部门
    * 类型：bool
     */
    protected $isMain = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['department_full_name'])) {
            $this->departmentFullName = $jsonArray['department_full_name'];
        }
        if (isset($jsonArray['department_id'])) {
            $this->departmentId = $jsonArray['department_id'];
        }
        if (isset($jsonArray['department_name'])) {
            $this->departmentName = $jsonArray['department_name'];
        }
        if (isset($jsonArray['is_main'])) {
            $this->isMain = $jsonArray['is_main'];
        }
    }

    public function departmentFullName(string $departmentFullName): V1UsersAdvanceListGet200ResponseUsersInnerDepartmentListInner {
        $this->departmentFullName = $departmentFullName;
        return $this;
    }

    public function getDepartmentFullName() {
        return $this->departmentFullName;
    }

    public function setDepartmentFullName(string $departmentFullName) {
        $this->departmentFullName = $departmentFullName;
    }
    public function departmentId(string $departmentId): V1UsersAdvanceListGet200ResponseUsersInnerDepartmentListInner {
        $this->departmentId = $departmentId;
        return $this;
    }

    public function getDepartmentId() {
        return $this->departmentId;
    }

    public function setDepartmentId(string $departmentId) {
        $this->departmentId = $departmentId;
    }
    public function departmentName(string $departmentName): V1UsersAdvanceListGet200ResponseUsersInnerDepartmentListInner {
        $this->departmentName = $departmentName;
        return $this;
    }

    public function getDepartmentName() {
        return $this->departmentName;
    }

    public function setDepartmentName(string $departmentName) {
        $this->departmentName = $departmentName;
    }
    public function isMain(bool $isMain): V1UsersAdvanceListGet200ResponseUsersInnerDepartmentListInner {
        $this->isMain = $isMain;
        return $this;
    }

    public function getIsMain() {
        return $this->isMain;
    }

    public function setIsMain(bool $isMain) {
        $this->isMain = $isMain;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'department_full_name' => 'string',
        'department_id' => 'string',
        'department_name' => 'string',
        'is_main' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'department_full_name' => null,
        'department_id' => null,
        'department_name' => null,
        'is_main' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'department_full_name' => false,
        'department_id' => false,
        'department_name' => false,
        'is_main' => false
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
        'department_full_name' => 'department_full_name',
        'department_id' => 'department_id',
        'department_name' => 'department_name',
        'is_main' => 'is_main'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'department_full_name' => 'setDepartmentFullName',
        'department_id' => 'setDepartmentId',
        'department_name' => 'setDepartmentName',
        'is_main' => 'setIsMain'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'department_full_name' => 'getDepartmentFullName',
        'department_id' => 'getDepartmentId',
        'department_name' => 'getDepartmentName',
        'is_main' => 'getIsMain'
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
            'department_full_name' => $this->departmentFullName,
            'department_id' => $this->departmentId,
            'department_name' => $this->departmentName,
            'is_main' => $this->isMain,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

