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


class V1MeetingsMeetingIdEnrollConfigGet200Response implements ModelInterface, \JsonSerializable
{

    /**
     * 审批类型：1 自动审批，2 手动审批，默认自动审批
    * 类型：int
     */
    protected $approveType = null;

    /**
     * 报名页封面图URL（base64编码）
    * 类型：string[]
     */
    protected $coverImage = null;

    /**
     * 显示已报名/预约人数。0：不展示 1：展示，默认开启
    * 类型：int
     */
    protected $displayNumberOfParticipants = null;

    /**
     * 报名截止时间（秒级时间戳）
    * 类型：string
     */
    protected $enrollDeadline = null;

    /**
     * 报名页简介
    * 类型：string
     */
    protected $enrollDescription = null;

    /**
     * 报名人数上限
    * 类型：int
     */
    protected $enrollNumber = null;

    /**
     * 报名审批自动通知方式，1-短信通知；2-邮件中文；3-邮件英文；4-邮件中英文；5-公众号
    * 类型：int[]
     */
    protected $enrollPushType = null;

    /**
     * 是否收集问题：1 不收集，2 收集，默认不收集问题
    * 类型：int
     */
    protected $isCollectQuestion = null;

    /**
     * 会议id
    * 类型：string
     */
    protected $meetingId = null;

    /**
     * 本企业用户无需报名。 true: 本企业用户无需报名。 false：默认配置，所有用户需要报名。
    * 类型：bool
     */
    protected $noRegistrationNeededForStaff = null;

    /**
     * 报名问题列表，自定义问题按传入的顺序排序，预设问题会优先放在最前面，仅开启收集问题时有效
    * 类型：\wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdEnrollConfigGet200ResponseQuestionListInner[]
     */
    protected $questionList = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['approve_type'])) {
            $this->approveType = $jsonArray['approve_type'];
        }
        if (isset($jsonArray['cover_image'])) {
            $this->coverImage = $jsonArray['cover_image'];
        }
        if (isset($jsonArray['display_number_of_participants'])) {
            $this->displayNumberOfParticipants = $jsonArray['display_number_of_participants'];
        }
        if (isset($jsonArray['enroll_deadline'])) {
            $this->enrollDeadline = $jsonArray['enroll_deadline'];
        }
        if (isset($jsonArray['enroll_description'])) {
            $this->enrollDescription = $jsonArray['enroll_description'];
        }
        if (isset($jsonArray['enroll_number'])) {
            $this->enrollNumber = $jsonArray['enroll_number'];
        }
        if (isset($jsonArray['enroll_push_type'])) {
            $this->enrollPushType = $jsonArray['enroll_push_type'];
        }
        if (isset($jsonArray['is_collect_question'])) {
            $this->isCollectQuestion = $jsonArray['is_collect_question'];
        }
        if (isset($jsonArray['meeting_id'])) {
            $this->meetingId = $jsonArray['meeting_id'];
        }
        if (isset($jsonArray['no_registration_needed_for_staff'])) {
            $this->noRegistrationNeededForStaff = $jsonArray['no_registration_needed_for_staff'];
        }
        if (isset($jsonArray['question_list'])) {
            $this->questionList = $jsonArray['question_list'];
        }
    }

    public function approveType(int $approveType): V1MeetingsMeetingIdEnrollConfigGet200Response {
        $this->approveType = $approveType;
        return $this;
    }

    public function getApproveType() {
        return $this->approveType;
    }

    public function setApproveType(int $approveType) {
        $this->approveType = $approveType;
    }
    public function coverImage(array $coverImage): V1MeetingsMeetingIdEnrollConfigGet200Response {
        $this->coverImage = $coverImage;
        return $this;
    }

    public function getCoverImage() {
        return $this->coverImage;
    }

    public function setCoverImage(array $coverImage) {
        $this->coverImage = $coverImage;
    }
    public function displayNumberOfParticipants(int $displayNumberOfParticipants): V1MeetingsMeetingIdEnrollConfigGet200Response {
        $this->displayNumberOfParticipants = $displayNumberOfParticipants;
        return $this;
    }

    public function getDisplayNumberOfParticipants() {
        return $this->displayNumberOfParticipants;
    }

    public function setDisplayNumberOfParticipants(int $displayNumberOfParticipants) {
        $this->displayNumberOfParticipants = $displayNumberOfParticipants;
    }
    public function enrollDeadline(string $enrollDeadline): V1MeetingsMeetingIdEnrollConfigGet200Response {
        $this->enrollDeadline = $enrollDeadline;
        return $this;
    }

    public function getEnrollDeadline() {
        return $this->enrollDeadline;
    }

    public function setEnrollDeadline(string $enrollDeadline) {
        $this->enrollDeadline = $enrollDeadline;
    }
    public function enrollDescription(string $enrollDescription): V1MeetingsMeetingIdEnrollConfigGet200Response {
        $this->enrollDescription = $enrollDescription;
        return $this;
    }

    public function getEnrollDescription() {
        return $this->enrollDescription;
    }

    public function setEnrollDescription(string $enrollDescription) {
        $this->enrollDescription = $enrollDescription;
    }
    public function enrollNumber(int $enrollNumber): V1MeetingsMeetingIdEnrollConfigGet200Response {
        $this->enrollNumber = $enrollNumber;
        return $this;
    }

    public function getEnrollNumber() {
        return $this->enrollNumber;
    }

    public function setEnrollNumber(int $enrollNumber) {
        $this->enrollNumber = $enrollNumber;
    }
    public function enrollPushType(array $enrollPushType): V1MeetingsMeetingIdEnrollConfigGet200Response {
        $this->enrollPushType = $enrollPushType;
        return $this;
    }

    public function getEnrollPushType() {
        return $this->enrollPushType;
    }

    public function setEnrollPushType(array $enrollPushType) {
        $this->enrollPushType = $enrollPushType;
    }
    public function isCollectQuestion(int $isCollectQuestion): V1MeetingsMeetingIdEnrollConfigGet200Response {
        $this->isCollectQuestion = $isCollectQuestion;
        return $this;
    }

    public function getIsCollectQuestion() {
        return $this->isCollectQuestion;
    }

    public function setIsCollectQuestion(int $isCollectQuestion) {
        $this->isCollectQuestion = $isCollectQuestion;
    }
    public function meetingId(string $meetingId): V1MeetingsMeetingIdEnrollConfigGet200Response {
        $this->meetingId = $meetingId;
        return $this;
    }

    public function getMeetingId() {
        return $this->meetingId;
    }

    public function setMeetingId(string $meetingId) {
        $this->meetingId = $meetingId;
    }
    public function noRegistrationNeededForStaff(bool $noRegistrationNeededForStaff): V1MeetingsMeetingIdEnrollConfigGet200Response {
        $this->noRegistrationNeededForStaff = $noRegistrationNeededForStaff;
        return $this;
    }

    public function getNoRegistrationNeededForStaff() {
        return $this->noRegistrationNeededForStaff;
    }

    public function setNoRegistrationNeededForStaff(bool $noRegistrationNeededForStaff) {
        $this->noRegistrationNeededForStaff = $noRegistrationNeededForStaff;
    }
    public function questionList(array $questionList): V1MeetingsMeetingIdEnrollConfigGet200Response {
        $this->questionList = $questionList;
        return $this;
    }

    public function getQuestionList() {
        return $this->questionList;
    }

    public function setQuestionList(array $questionList) {
        $this->questionList = $questionList;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'approve_type' => 'int',
        'cover_image' => 'string[]',
        'display_number_of_participants' => 'int',
        'enroll_deadline' => 'string',
        'enroll_description' => 'string',
        'enroll_number' => 'int',
        'enroll_push_type' => 'int[]',
        'is_collect_question' => 'int',
        'meeting_id' => 'string',
        'no_registration_needed_for_staff' => 'bool',
        'question_list' => '\wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdEnrollConfigGet200ResponseQuestionListInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'approve_type' => 'int64',
        'cover_image' => null,
        'display_number_of_participants' => 'int64',
        'enroll_deadline' => null,
        'enroll_description' => null,
        'enroll_number' => 'int64',
        'enroll_push_type' => 'int64',
        'is_collect_question' => 'int64',
        'meeting_id' => null,
        'no_registration_needed_for_staff' => null,
        'question_list' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'approve_type' => false,
        'cover_image' => false,
        'display_number_of_participants' => false,
        'enroll_deadline' => false,
        'enroll_description' => false,
        'enroll_number' => false,
        'enroll_push_type' => false,
        'is_collect_question' => false,
        'meeting_id' => false,
        'no_registration_needed_for_staff' => false,
        'question_list' => false
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
        'approve_type' => 'approve_type',
        'cover_image' => 'cover_image',
        'display_number_of_participants' => 'display_number_of_participants',
        'enroll_deadline' => 'enroll_deadline',
        'enroll_description' => 'enroll_description',
        'enroll_number' => 'enroll_number',
        'enroll_push_type' => 'enroll_push_type',
        'is_collect_question' => 'is_collect_question',
        'meeting_id' => 'meeting_id',
        'no_registration_needed_for_staff' => 'no_registration_needed_for_staff',
        'question_list' => 'question_list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'approve_type' => 'setApproveType',
        'cover_image' => 'setCoverImage',
        'display_number_of_participants' => 'setDisplayNumberOfParticipants',
        'enroll_deadline' => 'setEnrollDeadline',
        'enroll_description' => 'setEnrollDescription',
        'enroll_number' => 'setEnrollNumber',
        'enroll_push_type' => 'setEnrollPushType',
        'is_collect_question' => 'setIsCollectQuestion',
        'meeting_id' => 'setMeetingId',
        'no_registration_needed_for_staff' => 'setNoRegistrationNeededForStaff',
        'question_list' => 'setQuestionList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'approve_type' => 'getApproveType',
        'cover_image' => 'getCoverImage',
        'display_number_of_participants' => 'getDisplayNumberOfParticipants',
        'enroll_deadline' => 'getEnrollDeadline',
        'enroll_description' => 'getEnrollDescription',
        'enroll_number' => 'getEnrollNumber',
        'enroll_push_type' => 'getEnrollPushType',
        'is_collect_question' => 'getIsCollectQuestion',
        'meeting_id' => 'getMeetingId',
        'no_registration_needed_for_staff' => 'getNoRegistrationNeededForStaff',
        'question_list' => 'getQuestionList'
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
            'approve_type' => $this->approveType,
            'cover_image' => $this->coverImage,
            'display_number_of_participants' => $this->displayNumberOfParticipants,
            'enroll_deadline' => $this->enrollDeadline,
            'enroll_description' => $this->enrollDescription,
            'enroll_number' => $this->enrollNumber,
            'enroll_push_type' => $this->enrollPushType,
            'is_collect_question' => $this->isCollectQuestion,
            'meeting_id' => $this->meetingId,
            'no_registration_needed_for_staff' => $this->noRegistrationNeededForStaff,
            'question_list' => $this->questionList,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

