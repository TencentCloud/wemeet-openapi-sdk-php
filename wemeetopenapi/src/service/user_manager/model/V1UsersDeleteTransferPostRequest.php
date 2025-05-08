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


class V1UsersDeleteTransferPostRequest implements ModelInterface, \JsonSerializable
{
    /**
     * 操作者 ID。 operator_id 必须与 operator_id_type 配合使用。根据 operator_id_type 的值，operator_id 代表不同类型。 operator_id_type=2，operator_id 必须和公共参数的 openid 一致。
    * 类型：
     */
    protected $operatorId;
    /**
     * 操作者 ID 的类型： 1：userid 2：open_id
    * 类型：
     */
    protected $operatorIdType;
    /**
     * 被操作者 ID，根据 to_operator_id_type 的值，使用不同的类型，这里指被删除的用户。
    * 类型：
     */
    protected $toOperatorId;
    /**
     * 被操作者 ID 的类型： 1：userid 2：open_id
    * 类型：
     */
    protected $toOperatorIdType;

    /**
     * 删除用户的数据处理方式： 1=彻底删除； 2=转移给指定成员；
    * 类型：string
     */
    protected $dataProcess = null;

    /**
     * 数据接收者的ID，根据receiver_id_type的值，使用不同的类型。； data_process为2时生效； 该userid不存在时，将报错；
    * 类型：string
     */
    protected $receiverId = null;

    /**
     * 数据接收者 ID 的类型：  1：userid  2：open_id
    * 类型：int
     */
    protected $receiverIdType = null;

    /**
     * 转移的具体数据； 0=全部； 1=云录制； 2=会议列表； data_process为2时生效； 不传时默认为0；
    * 类型：string
     */
    protected $transferData = null;

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
        if (isset($jsonArray['to_operator_id'])) {
            $this->toOperatorId = $jsonArray['to_operator_id'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter to_operator_id');
        }
        if (isset($jsonArray['to_operator_id_type'])) {
            $this->toOperatorIdType = $jsonArray['to_operator_id_type'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter to_operator_id_type');
        }
        if (isset($jsonArray['data_process'])) {
            $this->dataProcess = $jsonArray['data_process'];
        }
        if (isset($jsonArray['receiver_id'])) {
            $this->receiverId = $jsonArray['receiver_id'];
        }
        if (isset($jsonArray['receiver_id_type'])) {
            $this->receiverIdType = $jsonArray['receiver_id_type'];
        }
        if (isset($jsonArray['transfer_data'])) {
            $this->transferData = $jsonArray['transfer_data'];
        }
    }

    public function dataProcess(string $dataProcess): V1UsersDeleteTransferPostRequest {
        $this->dataProcess = $dataProcess;
        return $this;
    }

    public function getDataProcess() {
        return $this->dataProcess;
    }

    public function setDataProcess(string $dataProcess) {
        $this->dataProcess = $dataProcess;
    }
    public function operatorId(string $operatorId): V1UsersDeleteTransferPostRequest {
        $this->operatorId = $operatorId;
        return $this;
    }

    public function getOperatorId() {
        return $this->operatorId;
    }

    public function setOperatorId(string $operatorId) {
        $this->operatorId = $operatorId;
    }
    public function operatorIdType(int $operatorIdType): V1UsersDeleteTransferPostRequest {
        $this->operatorIdType = $operatorIdType;
        return $this;
    }

    public function getOperatorIdType() {
        return $this->operatorIdType;
    }

    public function setOperatorIdType(int $operatorIdType) {
        $this->operatorIdType = $operatorIdType;
    }
    public function receiverId(string $receiverId): V1UsersDeleteTransferPostRequest {
        $this->receiverId = $receiverId;
        return $this;
    }

    public function getReceiverId() {
        return $this->receiverId;
    }

    public function setReceiverId(string $receiverId) {
        $this->receiverId = $receiverId;
    }
    public function receiverIdType(int $receiverIdType): V1UsersDeleteTransferPostRequest {
        $this->receiverIdType = $receiverIdType;
        return $this;
    }

    public function getReceiverIdType() {
        return $this->receiverIdType;
    }

    public function setReceiverIdType(int $receiverIdType) {
        $this->receiverIdType = $receiverIdType;
    }
    public function toOperatorId(string $toOperatorId): V1UsersDeleteTransferPostRequest {
        $this->toOperatorId = $toOperatorId;
        return $this;
    }

    public function getToOperatorId() {
        return $this->toOperatorId;
    }

    public function setToOperatorId(string $toOperatorId) {
        $this->toOperatorId = $toOperatorId;
    }
    public function toOperatorIdType(int $toOperatorIdType): V1UsersDeleteTransferPostRequest {
        $this->toOperatorIdType = $toOperatorIdType;
        return $this;
    }

    public function getToOperatorIdType() {
        return $this->toOperatorIdType;
    }

    public function setToOperatorIdType(int $toOperatorIdType) {
        $this->toOperatorIdType = $toOperatorIdType;
    }
    public function transferData(string $transferData): V1UsersDeleteTransferPostRequest {
        $this->transferData = $transferData;
        return $this;
    }

    public function getTransferData() {
        return $this->transferData;
    }

    public function setTransferData(string $transferData) {
        $this->transferData = $transferData;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'data_process' => 'string',
        'operator_id' => 'string',
        'operator_id_type' => 'int',
        'receiver_id' => 'string',
        'receiver_id_type' => 'int',
        'to_operator_id' => 'string',
        'to_operator_id_type' => 'int',
        'transfer_data' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'data_process' => null,
        'operator_id' => null,
        'operator_id_type' => 'int64',
        'receiver_id' => null,
        'receiver_id_type' => 'int64',
        'to_operator_id' => null,
        'to_operator_id_type' => 'int64',
        'transfer_data' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'data_process' => false,
        'operator_id' => false,
        'operator_id_type' => false,
        'receiver_id' => false,
        'receiver_id_type' => false,
        'to_operator_id' => false,
        'to_operator_id_type' => false,
        'transfer_data' => false
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
        'data_process' => 'data_process',
        'operator_id' => 'operator_id',
        'operator_id_type' => 'operator_id_type',
        'receiver_id' => 'receiver_id',
        'receiver_id_type' => 'receiver_id_type',
        'to_operator_id' => 'to_operator_id',
        'to_operator_id_type' => 'to_operator_id_type',
        'transfer_data' => 'transfer_data'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'data_process' => 'setDataProcess',
        'operator_id' => 'setOperatorId',
        'operator_id_type' => 'setOperatorIdType',
        'receiver_id' => 'setReceiverId',
        'receiver_id_type' => 'setReceiverIdType',
        'to_operator_id' => 'setToOperatorId',
        'to_operator_id_type' => 'setToOperatorIdType',
        'transfer_data' => 'setTransferData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'data_process' => 'getDataProcess',
        'operator_id' => 'getOperatorId',
        'operator_id_type' => 'getOperatorIdType',
        'receiver_id' => 'getReceiverId',
        'receiver_id_type' => 'getReceiverIdType',
        'to_operator_id' => 'getToOperatorId',
        'to_operator_id_type' => 'getToOperatorIdType',
        'transfer_data' => 'getTransferData'
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
            'data_process' => $this->dataProcess,
            'operator_id' => $this->operatorId,
            'operator_id_type' => $this->operatorIdType,
            'receiver_id' => $this->receiverId,
            'receiver_id_type' => $this->receiverIdType,
            'to_operator_id' => $this->toOperatorId,
            'to_operator_id_type' => $this->toOperatorIdType,
            'transfer_data' => $this->transferData,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

