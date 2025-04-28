<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.2
 */
namespace wemeet\openapi\service\records\model;

use wemeet\openapi\core\xhttp\ModelInterface;


class V1RecordsAccessMeetingRecordIdDeleteRequestAccessMembersInner implements ModelInterface, \JsonSerializable
{
    /**
     * 被操作者ID，根据 to_operator_id_type 的值，使用不同的类型
    * 类型：
     */
    protected $toOperatorId;
    /**
     * 被操作者ID类型  1:userid  2:open_id  4:ms_open_id
    * 类型：
     */
    protected $toOperatorIdType;

    public function __construct(
        $jsonArray = []
    ) {
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
    }

    public function toOperatorId(string $toOperatorId): V1RecordsAccessMeetingRecordIdDeleteRequestAccessMembersInner {
        $this->toOperatorId = $toOperatorId;
        return $this;
    }

    public function getToOperatorId() {
        return $this->toOperatorId;
    }

    public function setToOperatorId(string $toOperatorId) {
        $this->toOperatorId = $toOperatorId;
    }
    public function toOperatorIdType(int $toOperatorIdType): V1RecordsAccessMeetingRecordIdDeleteRequestAccessMembersInner {
        $this->toOperatorIdType = $toOperatorIdType;
        return $this;
    }

    public function getToOperatorIdType() {
        return $this->toOperatorIdType;
    }

    public function setToOperatorIdType(int $toOperatorIdType) {
        $this->toOperatorIdType = $toOperatorIdType;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'to_operator_id' => 'string',
        'to_operator_id_type' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'to_operator_id' => null,
        'to_operator_id_type' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'to_operator_id' => false,
        'to_operator_id_type' => false
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
        'to_operator_id' => 'to_operator_id',
        'to_operator_id_type' => 'to_operator_id_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'to_operator_id' => 'setToOperatorId',
        'to_operator_id_type' => 'setToOperatorIdType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'to_operator_id' => 'getToOperatorId',
        'to_operator_id_type' => 'getToOperatorIdType'
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
            'to_operator_id' => $this->toOperatorId,
            'to_operator_id_type' => $this->toOperatorIdType,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

