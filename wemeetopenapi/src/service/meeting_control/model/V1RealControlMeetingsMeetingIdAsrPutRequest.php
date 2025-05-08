<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.4
 */
namespace wemeet\openapi\service\meeting_control\model;

use wemeet\openapi\core\xhttp\ModelInterface;


class V1RealControlMeetingsMeetingIdAsrPutRequest implements ModelInterface, \JsonSerializable
{
    /**
     * 用户的终端设备类型：  0：PSTN  1：PC  2：Mac  3：Android  4：iOS  5：Web  6：iPad  7：Android Pad  8：小程序  9：voip、sip 设备  10：Linux  20：Rooms for Touch Windows  21：Rooms for Touch MacOS  22：Rooms for Touch Android  30：Controller for Touch Windows  32：Controller for Touch Android  33：Controller for Touch iOS
    * 类型：
     */
    protected $instanceId;
    /**
     * 开启/关闭实时转写 true：开启实时转写 false：关闭实时转写
    * 类型：
     */
    protected $isOpen;
    /**
     * 操作者 ID。operator_id 必须与 operator_id_type 配合使用。根据 operator_id_type 的值，operator_id 代表不同类型。
    * 类型：
     */
    protected $operatorId;
    /**
     * 操作者 ID 的类型： 1：userid
    * 类型：
     */
    protected $operatorIdType;

    /**
     * 是否自动打开转写侧边栏，仅在is_open 为 true 时生效，默认为 0， 0：打开实时转写页面 。1：不打开实时转写页面
    * 类型：int
     */
    protected $openAsrView = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['instance_id'])) {
            $this->instanceId = $jsonArray['instance_id'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter instance_id');
        }
        if (isset($jsonArray['is_open'])) {
            $this->isOpen = $jsonArray['is_open'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter is_open');
        }
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
        if (isset($jsonArray['open_asr_view'])) {
            $this->openAsrView = $jsonArray['open_asr_view'];
        }
    }

    public function instanceId(int $instanceId): V1RealControlMeetingsMeetingIdAsrPutRequest {
        $this->instanceId = $instanceId;
        return $this;
    }

    public function getInstanceId() {
        return $this->instanceId;
    }

    public function setInstanceId(int $instanceId) {
        $this->instanceId = $instanceId;
    }
    public function isOpen(bool $isOpen): V1RealControlMeetingsMeetingIdAsrPutRequest {
        $this->isOpen = $isOpen;
        return $this;
    }

    public function getIsOpen() {
        return $this->isOpen;
    }

    public function setIsOpen(bool $isOpen) {
        $this->isOpen = $isOpen;
    }
    public function openAsrView(int $openAsrView): V1RealControlMeetingsMeetingIdAsrPutRequest {
        $this->openAsrView = $openAsrView;
        return $this;
    }

    public function getOpenAsrView() {
        return $this->openAsrView;
    }

    public function setOpenAsrView(int $openAsrView) {
        $this->openAsrView = $openAsrView;
    }
    public function operatorId(string $operatorId): V1RealControlMeetingsMeetingIdAsrPutRequest {
        $this->operatorId = $operatorId;
        return $this;
    }

    public function getOperatorId() {
        return $this->operatorId;
    }

    public function setOperatorId(string $operatorId) {
        $this->operatorId = $operatorId;
    }
    public function operatorIdType(int $operatorIdType): V1RealControlMeetingsMeetingIdAsrPutRequest {
        $this->operatorIdType = $operatorIdType;
        return $this;
    }

    public function getOperatorIdType() {
        return $this->operatorIdType;
    }

    public function setOperatorIdType(int $operatorIdType) {
        $this->operatorIdType = $operatorIdType;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'instance_id' => 'int',
        'is_open' => 'bool',
        'open_asr_view' => 'int',
        'operator_id' => 'string',
        'operator_id_type' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'instance_id' => 'int64',
        'is_open' => null,
        'open_asr_view' => 'int64',
        'operator_id' => null,
        'operator_id_type' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'instance_id' => false,
        'is_open' => false,
        'open_asr_view' => false,
        'operator_id' => false,
        'operator_id_type' => false
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
        'instance_id' => 'instance_id',
        'is_open' => 'is_open',
        'open_asr_view' => 'open_asr_view',
        'operator_id' => 'operator_id',
        'operator_id_type' => 'operator_id_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'instance_id' => 'setInstanceId',
        'is_open' => 'setIsOpen',
        'open_asr_view' => 'setOpenAsrView',
        'operator_id' => 'setOperatorId',
        'operator_id_type' => 'setOperatorIdType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'instance_id' => 'getInstanceId',
        'is_open' => 'getIsOpen',
        'open_asr_view' => 'getOpenAsrView',
        'operator_id' => 'getOperatorId',
        'operator_id_type' => 'getOperatorIdType'
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
            'instance_id' => $this->instanceId,
            'is_open' => $this->isOpen,
            'open_asr_view' => $this->openAsrView,
            'operator_id' => $this->operatorId,
            'operator_id_type' => $this->operatorIdType,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

