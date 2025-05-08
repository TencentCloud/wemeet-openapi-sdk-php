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


class V1MeetingsMeetingIdEnrollApprovalsGet200ResponseEnrollListInnerAnswerListInner implements ModelInterface, \JsonSerializable
{

    /**
     * 回答内容：单选/简答只有一个元素，多选会有多个
    * 类型：string[]
     */
    protected $answerContent = null;

    /**
     * 是否必填：1 否，2 是
    * 类型：int
     */
    protected $isRequired = null;

    /**
     * 问题编号，1,2,3...等形式
    * 类型：int
     */
    protected $questionNum = null;

    /**
     * 问题标题
    * 类型：string
     */
    protected $questionTitle = null;

    /**
     * 问题类型：1 单选，2 多选，3 简答
    * 类型：int
     */
    protected $questionType = null;

    /**
     * 特殊问题类型：1 无，2 手机号，3 邮箱，4 姓名，5 公司名称（目前4种特殊问题均为简答题）
    * 类型：int
     */
    protected $specialType = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['answer_content'])) {
            $this->answerContent = $jsonArray['answer_content'];
        }
        if (isset($jsonArray['is_required'])) {
            $this->isRequired = $jsonArray['is_required'];
        }
        if (isset($jsonArray['question_num'])) {
            $this->questionNum = $jsonArray['question_num'];
        }
        if (isset($jsonArray['question_title'])) {
            $this->questionTitle = $jsonArray['question_title'];
        }
        if (isset($jsonArray['question_type'])) {
            $this->questionType = $jsonArray['question_type'];
        }
        if (isset($jsonArray['special_type'])) {
            $this->specialType = $jsonArray['special_type'];
        }
    }

    public function answerContent(array $answerContent): V1MeetingsMeetingIdEnrollApprovalsGet200ResponseEnrollListInnerAnswerListInner {
        $this->answerContent = $answerContent;
        return $this;
    }

    public function getAnswerContent() {
        return $this->answerContent;
    }

    public function setAnswerContent(array $answerContent) {
        $this->answerContent = $answerContent;
    }
    public function isRequired(int $isRequired): V1MeetingsMeetingIdEnrollApprovalsGet200ResponseEnrollListInnerAnswerListInner {
        $this->isRequired = $isRequired;
        return $this;
    }

    public function getIsRequired() {
        return $this->isRequired;
    }

    public function setIsRequired(int $isRequired) {
        $this->isRequired = $isRequired;
    }
    public function questionNum(int $questionNum): V1MeetingsMeetingIdEnrollApprovalsGet200ResponseEnrollListInnerAnswerListInner {
        $this->questionNum = $questionNum;
        return $this;
    }

    public function getQuestionNum() {
        return $this->questionNum;
    }

    public function setQuestionNum(int $questionNum) {
        $this->questionNum = $questionNum;
    }
    public function questionTitle(string $questionTitle): V1MeetingsMeetingIdEnrollApprovalsGet200ResponseEnrollListInnerAnswerListInner {
        $this->questionTitle = $questionTitle;
        return $this;
    }

    public function getQuestionTitle() {
        return $this->questionTitle;
    }

    public function setQuestionTitle(string $questionTitle) {
        $this->questionTitle = $questionTitle;
    }
    public function questionType(int $questionType): V1MeetingsMeetingIdEnrollApprovalsGet200ResponseEnrollListInnerAnswerListInner {
        $this->questionType = $questionType;
        return $this;
    }

    public function getQuestionType() {
        return $this->questionType;
    }

    public function setQuestionType(int $questionType) {
        $this->questionType = $questionType;
    }
    public function specialType(int $specialType): V1MeetingsMeetingIdEnrollApprovalsGet200ResponseEnrollListInnerAnswerListInner {
        $this->specialType = $specialType;
        return $this;
    }

    public function getSpecialType() {
        return $this->specialType;
    }

    public function setSpecialType(int $specialType) {
        $this->specialType = $specialType;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'answer_content' => 'string[]',
        'is_required' => 'int',
        'question_num' => 'int',
        'question_title' => 'string',
        'question_type' => 'int',
        'special_type' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'answer_content' => null,
        'is_required' => 'int64',
        'question_num' => 'int64',
        'question_title' => null,
        'question_type' => 'int64',
        'special_type' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'answer_content' => false,
        'is_required' => false,
        'question_num' => false,
        'question_title' => false,
        'question_type' => false,
        'special_type' => false
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
        'answer_content' => 'answer_content',
        'is_required' => 'is_required',
        'question_num' => 'question_num',
        'question_title' => 'question_title',
        'question_type' => 'question_type',
        'special_type' => 'special_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'answer_content' => 'setAnswerContent',
        'is_required' => 'setIsRequired',
        'question_num' => 'setQuestionNum',
        'question_title' => 'setQuestionTitle',
        'question_type' => 'setQuestionType',
        'special_type' => 'setSpecialType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'answer_content' => 'getAnswerContent',
        'is_required' => 'getIsRequired',
        'question_num' => 'getQuestionNum',
        'question_title' => 'getQuestionTitle',
        'question_type' => 'getQuestionType',
        'special_type' => 'getSpecialType'
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
            'answer_content' => $this->answerContent,
            'is_required' => $this->isRequired,
            'question_num' => $this->questionNum,
            'question_title' => $this->questionTitle,
            'question_type' => $this->questionType,
            'special_type' => $this->specialType,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

