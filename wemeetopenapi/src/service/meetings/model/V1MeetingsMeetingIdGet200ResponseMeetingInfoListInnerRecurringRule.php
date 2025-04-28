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


class V1MeetingsMeetingIdGet200ResponseMeetingInfoListInnerRecurringRule implements ModelInterface, \JsonSerializable
{

    /**
    * 类型：int
     */
    protected $customizedRecurringDays = null;

    /**
    * 类型：int
     */
    protected $customizedRecurringStep = null;

    /**
    * 类型：int
     */
    protected $customizedRecurringType = null;

    /**
    * 类型：int
     */
    protected $recurringType = null;

    /**
    * 类型：int
     */
    protected $untilCount = null;

    /**
    * 类型：int
     */
    protected $untilDate = null;

    /**
    * 类型：int
     */
    protected $untilType = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['customized_recurring_days'])) {
            $this->customizedRecurringDays = $jsonArray['customized_recurring_days'];
        }
        if (isset($jsonArray['customized_recurring_step'])) {
            $this->customizedRecurringStep = $jsonArray['customized_recurring_step'];
        }
        if (isset($jsonArray['customized_recurring_type'])) {
            $this->customizedRecurringType = $jsonArray['customized_recurring_type'];
        }
        if (isset($jsonArray['recurring_type'])) {
            $this->recurringType = $jsonArray['recurring_type'];
        }
        if (isset($jsonArray['until_count'])) {
            $this->untilCount = $jsonArray['until_count'];
        }
        if (isset($jsonArray['until_date'])) {
            $this->untilDate = $jsonArray['until_date'];
        }
        if (isset($jsonArray['until_type'])) {
            $this->untilType = $jsonArray['until_type'];
        }
    }

    public function customizedRecurringDays(int $customizedRecurringDays): V1MeetingsMeetingIdGet200ResponseMeetingInfoListInnerRecurringRule {
        $this->customizedRecurringDays = $customizedRecurringDays;
        return $this;
    }

    public function getCustomizedRecurringDays() {
        return $this->customizedRecurringDays;
    }

    public function setCustomizedRecurringDays(int $customizedRecurringDays) {
        $this->customizedRecurringDays = $customizedRecurringDays;
    }
    public function customizedRecurringStep(int $customizedRecurringStep): V1MeetingsMeetingIdGet200ResponseMeetingInfoListInnerRecurringRule {
        $this->customizedRecurringStep = $customizedRecurringStep;
        return $this;
    }

    public function getCustomizedRecurringStep() {
        return $this->customizedRecurringStep;
    }

    public function setCustomizedRecurringStep(int $customizedRecurringStep) {
        $this->customizedRecurringStep = $customizedRecurringStep;
    }
    public function customizedRecurringType(int $customizedRecurringType): V1MeetingsMeetingIdGet200ResponseMeetingInfoListInnerRecurringRule {
        $this->customizedRecurringType = $customizedRecurringType;
        return $this;
    }

    public function getCustomizedRecurringType() {
        return $this->customizedRecurringType;
    }

    public function setCustomizedRecurringType(int $customizedRecurringType) {
        $this->customizedRecurringType = $customizedRecurringType;
    }
    public function recurringType(int $recurringType): V1MeetingsMeetingIdGet200ResponseMeetingInfoListInnerRecurringRule {
        $this->recurringType = $recurringType;
        return $this;
    }

    public function getRecurringType() {
        return $this->recurringType;
    }

    public function setRecurringType(int $recurringType) {
        $this->recurringType = $recurringType;
    }
    public function untilCount(int $untilCount): V1MeetingsMeetingIdGet200ResponseMeetingInfoListInnerRecurringRule {
        $this->untilCount = $untilCount;
        return $this;
    }

    public function getUntilCount() {
        return $this->untilCount;
    }

    public function setUntilCount(int $untilCount) {
        $this->untilCount = $untilCount;
    }
    public function untilDate(int $untilDate): V1MeetingsMeetingIdGet200ResponseMeetingInfoListInnerRecurringRule {
        $this->untilDate = $untilDate;
        return $this;
    }

    public function getUntilDate() {
        return $this->untilDate;
    }

    public function setUntilDate(int $untilDate) {
        $this->untilDate = $untilDate;
    }
    public function untilType(int $untilType): V1MeetingsMeetingIdGet200ResponseMeetingInfoListInnerRecurringRule {
        $this->untilType = $untilType;
        return $this;
    }

    public function getUntilType() {
        return $this->untilType;
    }

    public function setUntilType(int $untilType) {
        $this->untilType = $untilType;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'customized_recurring_days' => 'int',
        'customized_recurring_step' => 'int',
        'customized_recurring_type' => 'int',
        'recurring_type' => 'int',
        'until_count' => 'int',
        'until_date' => 'int',
        'until_type' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'customized_recurring_days' => 'int64',
        'customized_recurring_step' => 'int64',
        'customized_recurring_type' => 'int64',
        'recurring_type' => 'int64',
        'until_count' => 'int64',
        'until_date' => 'int64',
        'until_type' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'customized_recurring_days' => false,
        'customized_recurring_step' => false,
        'customized_recurring_type' => false,
        'recurring_type' => false,
        'until_count' => false,
        'until_date' => false,
        'until_type' => false
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
        'customized_recurring_days' => 'customized_recurring_days',
        'customized_recurring_step' => 'customized_recurring_step',
        'customized_recurring_type' => 'customized_recurring_type',
        'recurring_type' => 'recurring_type',
        'until_count' => 'until_count',
        'until_date' => 'until_date',
        'until_type' => 'until_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'customized_recurring_days' => 'setCustomizedRecurringDays',
        'customized_recurring_step' => 'setCustomizedRecurringStep',
        'customized_recurring_type' => 'setCustomizedRecurringType',
        'recurring_type' => 'setRecurringType',
        'until_count' => 'setUntilCount',
        'until_date' => 'setUntilDate',
        'until_type' => 'setUntilType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'customized_recurring_days' => 'getCustomizedRecurringDays',
        'customized_recurring_step' => 'getCustomizedRecurringStep',
        'customized_recurring_type' => 'getCustomizedRecurringType',
        'recurring_type' => 'getRecurringType',
        'until_count' => 'getUntilCount',
        'until_date' => 'getUntilDate',
        'until_type' => 'getUntilType'
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
            'customized_recurring_days' => $this->customizedRecurringDays,
            'customized_recurring_step' => $this->customizedRecurringStep,
            'customized_recurring_type' => $this->customizedRecurringType,
            'recurring_type' => $this->recurringType,
            'until_count' => $this->untilCount,
            'until_date' => $this->untilDate,
            'until_type' => $this->untilType,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

