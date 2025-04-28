<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.2
 */
namespace wemeet\openapi\service\meeting_control\model;

use wemeet\openapi\core\xhttp\ModelInterface;


class V1MeetingsMeetingIdDismissPostRequest implements ModelInterface, \JsonSerializable
{
    /**
     * 设备类型
    * 类型：
     */
    protected $instanceid;
    /**
     * 操作者ID，根据operator_id_type的值，使用不同的类型
    * 类型：
     */
    protected $operatorId;
    /**
     * 操作者ID的类型：1:userid  2:openid（预留编号，本次不添加，未来新增接口使用）3:rooms_id  4: ms_open_id
    * 类型：
     */
    protected $operatorIdType;
    /**
     * 原因代码，可为用户自定义
    * 类型：
     */
    protected $reasonCode;

    /**
     * 是否强制结束会议，默认值为1：0：不强制结束会议，会议中有参会者，则无法强制结束会议 1 ：强制结束会议，会议中有参会者，也会强制结束会议
    * 类型：int
     */
    protected $forceDismissMeeting = null;

    /**
     * 取消原因
    * 类型：string
     */
    protected $reasonDetail = null;

    /**
     * 是否回收会议号，默认值为0： 0：不回收会议号，可以重新入会 1： 回收会议号，不可重新入会
    * 类型：int
     */
    protected $retrieveCode = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['instanceid'])) {
            $this->instanceid = $jsonArray['instanceid'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter instanceid');
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
        if (isset($jsonArray['reason_code'])) {
            $this->reasonCode = $jsonArray['reason_code'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter reason_code');
        }
        if (isset($jsonArray['force_dismiss_meeting'])) {
            $this->forceDismissMeeting = $jsonArray['force_dismiss_meeting'];
        }
        if (isset($jsonArray['reason_detail'])) {
            $this->reasonDetail = $jsonArray['reason_detail'];
        }
        if (isset($jsonArray['retrieve_code'])) {
            $this->retrieveCode = $jsonArray['retrieve_code'];
        }
    }

    public function forceDismissMeeting(int $forceDismissMeeting): V1MeetingsMeetingIdDismissPostRequest {
        $this->forceDismissMeeting = $forceDismissMeeting;
        return $this;
    }

    public function getForceDismissMeeting() {
        return $this->forceDismissMeeting;
    }

    public function setForceDismissMeeting(int $forceDismissMeeting) {
        $this->forceDismissMeeting = $forceDismissMeeting;
    }
    public function instanceid(int $instanceid): V1MeetingsMeetingIdDismissPostRequest {
        $this->instanceid = $instanceid;
        return $this;
    }

    public function getInstanceid() {
        return $this->instanceid;
    }

    public function setInstanceid(int $instanceid) {
        $this->instanceid = $instanceid;
    }
    public function operatorId(string $operatorId): V1MeetingsMeetingIdDismissPostRequest {
        $this->operatorId = $operatorId;
        return $this;
    }

    public function getOperatorId() {
        return $this->operatorId;
    }

    public function setOperatorId(string $operatorId) {
        $this->operatorId = $operatorId;
    }
    public function operatorIdType(int $operatorIdType): V1MeetingsMeetingIdDismissPostRequest {
        $this->operatorIdType = $operatorIdType;
        return $this;
    }

    public function getOperatorIdType() {
        return $this->operatorIdType;
    }

    public function setOperatorIdType(int $operatorIdType) {
        $this->operatorIdType = $operatorIdType;
    }
    public function reasonCode(int $reasonCode): V1MeetingsMeetingIdDismissPostRequest {
        $this->reasonCode = $reasonCode;
        return $this;
    }

    public function getReasonCode() {
        return $this->reasonCode;
    }

    public function setReasonCode(int $reasonCode) {
        $this->reasonCode = $reasonCode;
    }
    public function reasonDetail(string $reasonDetail): V1MeetingsMeetingIdDismissPostRequest {
        $this->reasonDetail = $reasonDetail;
        return $this;
    }

    public function getReasonDetail() {
        return $this->reasonDetail;
    }

    public function setReasonDetail(string $reasonDetail) {
        $this->reasonDetail = $reasonDetail;
    }
    public function retrieveCode(int $retrieveCode): V1MeetingsMeetingIdDismissPostRequest {
        $this->retrieveCode = $retrieveCode;
        return $this;
    }

    public function getRetrieveCode() {
        return $this->retrieveCode;
    }

    public function setRetrieveCode(int $retrieveCode) {
        $this->retrieveCode = $retrieveCode;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'force_dismiss_meeting' => 'int',
        'instanceid' => 'int',
        'operator_id' => 'string',
        'operator_id_type' => 'int',
        'reason_code' => 'int',
        'reason_detail' => 'string',
        'retrieve_code' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'force_dismiss_meeting' => 'int64',
        'instanceid' => 'int64',
        'operator_id' => null,
        'operator_id_type' => 'int64',
        'reason_code' => 'int64',
        'reason_detail' => null,
        'retrieve_code' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'force_dismiss_meeting' => false,
        'instanceid' => false,
        'operator_id' => false,
        'operator_id_type' => false,
        'reason_code' => false,
        'reason_detail' => false,
        'retrieve_code' => false
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
        'force_dismiss_meeting' => 'force_dismiss_meeting',
        'instanceid' => 'instanceid',
        'operator_id' => 'operator_id',
        'operator_id_type' => 'operator_id_type',
        'reason_code' => 'reason_code',
        'reason_detail' => 'reason_detail',
        'retrieve_code' => 'retrieve_code'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'force_dismiss_meeting' => 'setForceDismissMeeting',
        'instanceid' => 'setInstanceid',
        'operator_id' => 'setOperatorId',
        'operator_id_type' => 'setOperatorIdType',
        'reason_code' => 'setReasonCode',
        'reason_detail' => 'setReasonDetail',
        'retrieve_code' => 'setRetrieveCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'force_dismiss_meeting' => 'getForceDismissMeeting',
        'instanceid' => 'getInstanceid',
        'operator_id' => 'getOperatorId',
        'operator_id_type' => 'getOperatorIdType',
        'reason_code' => 'getReasonCode',
        'reason_detail' => 'getReasonDetail',
        'retrieve_code' => 'getRetrieveCode'
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
            'force_dismiss_meeting' => $this->forceDismissMeeting,
            'instanceid' => $this->instanceid,
            'operator_id' => $this->operatorId,
            'operator_id_type' => $this->operatorIdType,
            'reason_code' => $this->reasonCode,
            'reason_detail' => $this->reasonDetail,
            'retrieve_code' => $this->retrieveCode,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

