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


class V1RealControlMeetingsMeetingIdDocPutRequest implements ModelInterface, \JsonSerializable
{
    /**
     * 是否允许全员上传文档  true：是 false：否
    * 类型：
     */
    protected $enableUploadDoc;
    /**
     * 用户的终端设备类型： 1：PC 2：Mac 3：Android 4：iOS 5：Web 6：iPad 7：Android Pad 8：小程序 9：voip、sip 设备 10：linux 20：Rooms for Touch Windows 21：Rooms for Touch Mac 22：Rooms for Touch Android 30：Controller for Touch Windows 32：Controller for Touch Android 33：Controller for Touch Iphone
    * 类型：
     */
    protected $instanceid;

    /**
     * 操作者 ID。 1：operator_id 必须与 operator_id_type 配合使用。根据 operator_id_type 的值，operator_id 代表不同类型。 2：接口输入参数如果需要传用户 ID 时，operator_id 和 uuid 不可以同时为空，两个参数如果都传了以 operator_id 为准。 3：如果 operator_id_type=2，operator_id 必须和公共参数的 openid 一致。
    * 类型：string
     */
    protected $operatorId = null;

    /**
     * 操作者ID的类型：  2:openid  4: ms_open_id
    * 类型：int
     */
    protected $operatorIdType = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['enable_upload_doc'])) {
            $this->enableUploadDoc = $jsonArray['enable_upload_doc'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter enable_upload_doc');
        }
        if (isset($jsonArray['instanceid'])) {
            $this->instanceid = $jsonArray['instanceid'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter instanceid');
        }
        if (isset($jsonArray['operator_id'])) {
            $this->operatorId = $jsonArray['operator_id'];
        }
        if (isset($jsonArray['operator_id_type'])) {
            $this->operatorIdType = $jsonArray['operator_id_type'];
        }
    }

    public function enableUploadDoc(bool $enableUploadDoc): V1RealControlMeetingsMeetingIdDocPutRequest {
        $this->enableUploadDoc = $enableUploadDoc;
        return $this;
    }

    public function getEnableUploadDoc() {
        return $this->enableUploadDoc;
    }

    public function setEnableUploadDoc(bool $enableUploadDoc) {
        $this->enableUploadDoc = $enableUploadDoc;
    }
    public function instanceid(int $instanceid): V1RealControlMeetingsMeetingIdDocPutRequest {
        $this->instanceid = $instanceid;
        return $this;
    }

    public function getInstanceid() {
        return $this->instanceid;
    }

    public function setInstanceid(int $instanceid) {
        $this->instanceid = $instanceid;
    }
    public function operatorId(string $operatorId): V1RealControlMeetingsMeetingIdDocPutRequest {
        $this->operatorId = $operatorId;
        return $this;
    }

    public function getOperatorId() {
        return $this->operatorId;
    }

    public function setOperatorId(string $operatorId) {
        $this->operatorId = $operatorId;
    }
    public function operatorIdType(int $operatorIdType): V1RealControlMeetingsMeetingIdDocPutRequest {
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
        'enable_upload_doc' => 'bool',
        'instanceid' => 'int',
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
        'enable_upload_doc' => null,
        'instanceid' => 'int64',
        'operator_id' => null,
        'operator_id_type' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'enable_upload_doc' => false,
        'instanceid' => false,
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
        'enable_upload_doc' => 'enable_upload_doc',
        'instanceid' => 'instanceid',
        'operator_id' => 'operator_id',
        'operator_id_type' => 'operator_id_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'enable_upload_doc' => 'setEnableUploadDoc',
        'instanceid' => 'setInstanceid',
        'operator_id' => 'setOperatorId',
        'operator_id_type' => 'setOperatorIdType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'enable_upload_doc' => 'getEnableUploadDoc',
        'instanceid' => 'getInstanceid',
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
            'enable_upload_doc' => $this->enableUploadDoc,
            'instanceid' => $this->instanceid,
            'operator_id' => $this->operatorId,
            'operator_id_type' => $this->operatorIdType,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

