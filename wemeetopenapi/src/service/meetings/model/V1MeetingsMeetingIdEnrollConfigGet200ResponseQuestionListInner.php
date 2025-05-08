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


class V1MeetingsMeetingIdEnrollConfigGet200ResponseQuestionListInner implements ModelInterface, \JsonSerializable
{

    /**
     * 是否必填：1 否，2 是
    * 类型：int
     */
    protected $isRequired = null;

    /**
     * 问题选项列表，按传入的顺序排序，仅单选/多选时有效，最多8个选项，每个选项限40个汉字
    * 类型：\wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdEnrollConfigGet200ResponseQuestionListInnerOptionListInner[]
     */
    protected $optionList = null;

    /**
     * 问题标题，限制40个汉字
    * 类型：string
     */
    protected $questionTitle = null;

    /**
     * 问题类型：1 单选，2 多选，3 简答
    * 类型：int
     */
    protected $questionType = null;

    /**
     * 特殊问题类型：1 无，2 手机号，3 邮箱，4 姓名，5 组织名称，6 组织规模（目前除组织规模外均为简答题，组织规模为单选题）
    * 类型：int
     */
    protected $specialType = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['is_required'])) {
            $this->isRequired = $jsonArray['is_required'];
        }
        if (isset($jsonArray['option_list'])) {
            $this->optionList = $jsonArray['option_list'];
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

    public function isRequired(int $isRequired): V1MeetingsMeetingIdEnrollConfigGet200ResponseQuestionListInner {
        $this->isRequired = $isRequired;
        return $this;
    }

    public function getIsRequired() {
        return $this->isRequired;
    }

    public function setIsRequired(int $isRequired) {
        $this->isRequired = $isRequired;
    }
    public function optionList(array $optionList): V1MeetingsMeetingIdEnrollConfigGet200ResponseQuestionListInner {
        $this->optionList = $optionList;
        return $this;
    }

    public function getOptionList() {
        return $this->optionList;
    }

    public function setOptionList(array $optionList) {
        $this->optionList = $optionList;
    }
    public function questionTitle(string $questionTitle): V1MeetingsMeetingIdEnrollConfigGet200ResponseQuestionListInner {
        $this->questionTitle = $questionTitle;
        return $this;
    }

    public function getQuestionTitle() {
        return $this->questionTitle;
    }

    public function setQuestionTitle(string $questionTitle) {
        $this->questionTitle = $questionTitle;
    }
    public function questionType(int $questionType): V1MeetingsMeetingIdEnrollConfigGet200ResponseQuestionListInner {
        $this->questionType = $questionType;
        return $this;
    }

    public function getQuestionType() {
        return $this->questionType;
    }

    public function setQuestionType(int $questionType) {
        $this->questionType = $questionType;
    }
    public function specialType(int $specialType): V1MeetingsMeetingIdEnrollConfigGet200ResponseQuestionListInner {
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
        'is_required' => 'int',
        'option_list' => '\wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdEnrollConfigGet200ResponseQuestionListInnerOptionListInner[]',
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
        'is_required' => 'int64',
        'option_list' => null,
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
        'is_required' => false,
        'option_list' => false,
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
        'is_required' => 'is_required',
        'option_list' => 'option_list',
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
        'is_required' => 'setIsRequired',
        'option_list' => 'setOptionList',
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
        'is_required' => 'getIsRequired',
        'option_list' => 'getOptionList',
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
            'is_required' => $this->isRequired,
            'option_list' => $this->optionList,
            'question_title' => $this->questionTitle,
            'question_type' => $this->questionType,
            'special_type' => $this->specialType,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

