<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.2
 */
namespace wemeet\openapi\service\meetings\model;

use wemeet\openapi\core\xhttp\ModelInterface;


class V1MeetingsMeetingIdEnrollApprovalsGet200ResponseEnrollListInner implements ModelInterface, \JsonSerializable
{

    /**
     * 答题列表
    * 类型：\wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdEnrollApprovalsGet200ResponseEnrollListInnerAnswerListInner[]
     */
    protected $answerList = null;

    /**
     * pstn入会凭证
    * 类型：string
     */
    protected $enrollCode = null;

    /**
     * 报名id
    * 类型：int
     */
    protected $enrollId = null;

    /**
     * 报名来源： 1：用户手动报名 2：批量导入报名
    * 类型：int
     */
    protected $enrollSourceType = null;

    /**
     * 报名时间（utc+8，非时间戳）
    * 类型：string
     */
    protected $enrollTime = null;

    /**
     * 当场会议的用户临时id，所有用户都有
    * 类型：string
     */
    protected $msOpenId = null;

    /**
     * 昵称
    * 类型：string
     */
    protected $nickName = null;

    /**
     * 报名者已授权过会议创建的应用时返回openid，否则为空
    * 类型：string
     */
    protected $openId = null;

    /**
     * 报名状态：1 待审批，2 已拒绝，3 已批准
    * 类型：int
     */
    protected $status = null;

    /**
     * 报名者与会议创建者为同企业时，返回userid，否则为空,导入报名入参为手机号的情况不返回userid。
    * 类型：string
     */
    protected $userid = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['answer_list'])) {
            $this->answerList = $jsonArray['answer_list'];
        }
        if (isset($jsonArray['enroll_code'])) {
            $this->enrollCode = $jsonArray['enroll_code'];
        }
        if (isset($jsonArray['enroll_id'])) {
            $this->enrollId = $jsonArray['enroll_id'];
        }
        if (isset($jsonArray['enroll_source_type'])) {
            $this->enrollSourceType = $jsonArray['enroll_source_type'];
        }
        if (isset($jsonArray['enroll_time'])) {
            $this->enrollTime = $jsonArray['enroll_time'];
        }
        if (isset($jsonArray['ms_open_id'])) {
            $this->msOpenId = $jsonArray['ms_open_id'];
        }
        if (isset($jsonArray['nick_name'])) {
            $this->nickName = $jsonArray['nick_name'];
        }
        if (isset($jsonArray['open_id'])) {
            $this->openId = $jsonArray['open_id'];
        }
        if (isset($jsonArray['status'])) {
            $this->status = $jsonArray['status'];
        }
        if (isset($jsonArray['userid'])) {
            $this->userid = $jsonArray['userid'];
        }
    }

    public function answerList(array $answerList): V1MeetingsMeetingIdEnrollApprovalsGet200ResponseEnrollListInner {
        $this->answerList = $answerList;
        return $this;
    }

    public function getAnswerList() {
        return $this->answerList;
    }

    public function setAnswerList(array $answerList) {
        $this->answerList = $answerList;
    }
    public function enrollCode(string $enrollCode): V1MeetingsMeetingIdEnrollApprovalsGet200ResponseEnrollListInner {
        $this->enrollCode = $enrollCode;
        return $this;
    }

    public function getEnrollCode() {
        return $this->enrollCode;
    }

    public function setEnrollCode(string $enrollCode) {
        $this->enrollCode = $enrollCode;
    }
    public function enrollId(int $enrollId): V1MeetingsMeetingIdEnrollApprovalsGet200ResponseEnrollListInner {
        $this->enrollId = $enrollId;
        return $this;
    }

    public function getEnrollId() {
        return $this->enrollId;
    }

    public function setEnrollId(int $enrollId) {
        $this->enrollId = $enrollId;
    }
    public function enrollSourceType(int $enrollSourceType): V1MeetingsMeetingIdEnrollApprovalsGet200ResponseEnrollListInner {
        $this->enrollSourceType = $enrollSourceType;
        return $this;
    }

    public function getEnrollSourceType() {
        return $this->enrollSourceType;
    }

    public function setEnrollSourceType(int $enrollSourceType) {
        $this->enrollSourceType = $enrollSourceType;
    }
    public function enrollTime(string $enrollTime): V1MeetingsMeetingIdEnrollApprovalsGet200ResponseEnrollListInner {
        $this->enrollTime = $enrollTime;
        return $this;
    }

    public function getEnrollTime() {
        return $this->enrollTime;
    }

    public function setEnrollTime(string $enrollTime) {
        $this->enrollTime = $enrollTime;
    }
    public function msOpenId(string $msOpenId): V1MeetingsMeetingIdEnrollApprovalsGet200ResponseEnrollListInner {
        $this->msOpenId = $msOpenId;
        return $this;
    }

    public function getMsOpenId() {
        return $this->msOpenId;
    }

    public function setMsOpenId(string $msOpenId) {
        $this->msOpenId = $msOpenId;
    }
    public function nickName(string $nickName): V1MeetingsMeetingIdEnrollApprovalsGet200ResponseEnrollListInner {
        $this->nickName = $nickName;
        return $this;
    }

    public function getNickName() {
        return $this->nickName;
    }

    public function setNickName(string $nickName) {
        $this->nickName = $nickName;
    }
    public function openId(string $openId): V1MeetingsMeetingIdEnrollApprovalsGet200ResponseEnrollListInner {
        $this->openId = $openId;
        return $this;
    }

    public function getOpenId() {
        return $this->openId;
    }

    public function setOpenId(string $openId) {
        $this->openId = $openId;
    }
    public function status(int $status): V1MeetingsMeetingIdEnrollApprovalsGet200ResponseEnrollListInner {
        $this->status = $status;
        return $this;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus(int $status) {
        $this->status = $status;
    }
    public function userid(string $userid): V1MeetingsMeetingIdEnrollApprovalsGet200ResponseEnrollListInner {
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
        'answer_list' => '\wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdEnrollApprovalsGet200ResponseEnrollListInnerAnswerListInner[]',
        'enroll_code' => 'string',
        'enroll_id' => 'int',
        'enroll_source_type' => 'int',
        'enroll_time' => 'string',
        'ms_open_id' => 'string',
        'nick_name' => 'string',
        'open_id' => 'string',
        'status' => 'int',
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
        'answer_list' => null,
        'enroll_code' => null,
        'enroll_id' => 'int64',
        'enroll_source_type' => 'int64',
        'enroll_time' => null,
        'ms_open_id' => null,
        'nick_name' => null,
        'open_id' => null,
        'status' => 'int64',
        'userid' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'answer_list' => false,
        'enroll_code' => false,
        'enroll_id' => false,
        'enroll_source_type' => false,
        'enroll_time' => false,
        'ms_open_id' => false,
        'nick_name' => false,
        'open_id' => false,
        'status' => false,
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
        'answer_list' => 'answer_list',
        'enroll_code' => 'enroll_code',
        'enroll_id' => 'enroll_id',
        'enroll_source_type' => 'enroll_source_type',
        'enroll_time' => 'enroll_time',
        'ms_open_id' => 'ms_open_id',
        'nick_name' => 'nick_name',
        'open_id' => 'open_id',
        'status' => 'status',
        'userid' => 'userid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'answer_list' => 'setAnswerList',
        'enroll_code' => 'setEnrollCode',
        'enroll_id' => 'setEnrollId',
        'enroll_source_type' => 'setEnrollSourceType',
        'enroll_time' => 'setEnrollTime',
        'ms_open_id' => 'setMsOpenId',
        'nick_name' => 'setNickName',
        'open_id' => 'setOpenId',
        'status' => 'setStatus',
        'userid' => 'setUserid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'answer_list' => 'getAnswerList',
        'enroll_code' => 'getEnrollCode',
        'enroll_id' => 'getEnrollId',
        'enroll_source_type' => 'getEnrollSourceType',
        'enroll_time' => 'getEnrollTime',
        'ms_open_id' => 'getMsOpenId',
        'nick_name' => 'getNickName',
        'open_id' => 'getOpenId',
        'status' => 'getStatus',
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
            'answer_list' => $this->answerList,
            'enroll_code' => $this->enrollCode,
            'enroll_id' => $this->enrollId,
            'enroll_source_type' => $this->enrollSourceType,
            'enroll_time' => $this->enrollTime,
            'ms_open_id' => $this->msOpenId,
            'nick_name' => $this->nickName,
            'open_id' => $this->openId,
            'status' => $this->status,
            'userid' => $this->userid,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

