<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.4
 */
namespace wemeet\openapi\service\meetings\model;

use wemeet\openapi\core\xhttp\ModelInterface;


class V1MeetingsMeetingIdCancelPostRequest implements ModelInterface, \JsonSerializable
{
    /**
     * 用户的终端设备类型： 0：PSTN 1：PC 2：Mac 3：Android 4：iOS 5：Web 6：iPad 7：Android Pad 8：小程序 9：voip、sip 设备 10：linux 20：Rooms for Touch Windows 21：Rooms for Touch MacOS 22：Rooms for Touch Android 30：Controller for Touch Windows 32：Controller for Touch Android 33：Controller for Touch iOS
    * 类型：
     */
    protected $instanceid;
    /**
     * 原因代码，可为用户自定义
    * 类型：
     */
    protected $reasonCode;
    /**
     * 调用 API 的用户 ID（企业内部请使用企业唯一用户标识；OAuth2.0 鉴权用户请使用 openId）。 企业唯一用户标识说明： 1：企业对接 SSO 时使用的员工唯一标识 ID。 2：企业调用创建用户接口时传递的 userid 参数。
    * 类型：
     */
    protected $userid;

    /**
     * 会议类型，默认值为0。 0：普通会议 1：周期性会议
    * 类型：int
     */
    protected $meetingType = null;

    /**
     * 取消原因描述
    * 类型：string
     */
    protected $reasonDetail = null;

    /**
     * 周期性子会议 ID，如果不传，则会取消该系列的周期性会议
    * 类型：string
     */
    protected $subMeetingId = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['instanceid'])) {
            $this->instanceid = $jsonArray['instanceid'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter instanceid');
        }
        if (isset($jsonArray['reason_code'])) {
            $this->reasonCode = $jsonArray['reason_code'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter reason_code');
        }
        if (isset($jsonArray['userid'])) {
            $this->userid = $jsonArray['userid'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter userid');
        }
        if (isset($jsonArray['meeting_type'])) {
            $this->meetingType = $jsonArray['meeting_type'];
        }
        if (isset($jsonArray['reason_detail'])) {
            $this->reasonDetail = $jsonArray['reason_detail'];
        }
        if (isset($jsonArray['sub_meeting_id'])) {
            $this->subMeetingId = $jsonArray['sub_meeting_id'];
        }
    }

    public function instanceid(int $instanceid): V1MeetingsMeetingIdCancelPostRequest {
        $this->instanceid = $instanceid;
        return $this;
    }

    public function getInstanceid() {
        return $this->instanceid;
    }

    public function setInstanceid(int $instanceid) {
        $this->instanceid = $instanceid;
    }
    public function meetingType(int $meetingType): V1MeetingsMeetingIdCancelPostRequest {
        $this->meetingType = $meetingType;
        return $this;
    }

    public function getMeetingType() {
        return $this->meetingType;
    }

    public function setMeetingType(int $meetingType) {
        $this->meetingType = $meetingType;
    }
    public function reasonCode(int $reasonCode): V1MeetingsMeetingIdCancelPostRequest {
        $this->reasonCode = $reasonCode;
        return $this;
    }

    public function getReasonCode() {
        return $this->reasonCode;
    }

    public function setReasonCode(int $reasonCode) {
        $this->reasonCode = $reasonCode;
    }
    public function reasonDetail(string $reasonDetail): V1MeetingsMeetingIdCancelPostRequest {
        $this->reasonDetail = $reasonDetail;
        return $this;
    }

    public function getReasonDetail() {
        return $this->reasonDetail;
    }

    public function setReasonDetail(string $reasonDetail) {
        $this->reasonDetail = $reasonDetail;
    }
    public function subMeetingId(string $subMeetingId): V1MeetingsMeetingIdCancelPostRequest {
        $this->subMeetingId = $subMeetingId;
        return $this;
    }

    public function getSubMeetingId() {
        return $this->subMeetingId;
    }

    public function setSubMeetingId(string $subMeetingId) {
        $this->subMeetingId = $subMeetingId;
    }
    public function userid(string $userid): V1MeetingsMeetingIdCancelPostRequest {
        $this->userid = $userid;
        return $this;
    }

    public function getUserid() {
        return $this->userid;
    }

    public function setUserid(string $userid) {
        $this->userid = $userid;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'instanceid' => 'int',
        'meeting_type' => 'int',
        'reason_code' => 'int',
        'reason_detail' => 'string',
        'sub_meeting_id' => 'string',
        'userid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'instanceid' => 'int64',
        'meeting_type' => 'int64',
        'reason_code' => 'int64',
        'reason_detail' => null,
        'sub_meeting_id' => null,
        'userid' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'instanceid' => false,
        'meeting_type' => false,
        'reason_code' => false,
        'reason_detail' => false,
        'sub_meeting_id' => false,
        'userid' => false
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
        'instanceid' => 'instanceid',
        'meeting_type' => 'meeting_type',
        'reason_code' => 'reason_code',
        'reason_detail' => 'reason_detail',
        'sub_meeting_id' => 'sub_meeting_id',
        'userid' => 'userid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'instanceid' => 'setInstanceid',
        'meeting_type' => 'setMeetingType',
        'reason_code' => 'setReasonCode',
        'reason_detail' => 'setReasonDetail',
        'sub_meeting_id' => 'setSubMeetingId',
        'userid' => 'setUserid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'instanceid' => 'getInstanceid',
        'meeting_type' => 'getMeetingType',
        'reason_code' => 'getReasonCode',
        'reason_detail' => 'getReasonDetail',
        'sub_meeting_id' => 'getSubMeetingId',
        'userid' => 'getUserid'
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
            'instanceid' => $this->instanceid,
            'meeting_type' => $this->meetingType,
            'reason_code' => $this->reasonCode,
            'reason_detail' => $this->reasonDetail,
            'sub_meeting_id' => $this->subMeetingId,
            'userid' => $this->userid,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

