<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.5
 */
namespace wemeet\openapi\service\pstn\model;

use wemeet\openapi\core\xhttp\ModelInterface;


class V1MeetingMeetingIdPhoneCancelcallPost200Response implements ModelInterface, \JsonSerializable
{

    /**
     * 取消呼叫失败的列表
    * 类型：\wemeet\openapi\service\pstn\model\V1MeetingMeetingIdPhoneCancelcallPost200ResponseFailedListInner[]
     */
    protected $failedList = null;

    /**
     * 取消呼叫成功的列表
    * 类型：\wemeet\openapi\service\pstn\model\V1MeetingMeetingIdPhoneCancelcallPost200ResponseSuccessListInner[]
     */
    protected $successList = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['failed_list'])) {
            $this->failedList = $jsonArray['failed_list'];
        }
        if (isset($jsonArray['success_list'])) {
            $this->successList = $jsonArray['success_list'];
        }
    }

    public function failedList(array $failedList): V1MeetingMeetingIdPhoneCancelcallPost200Response {
        $this->failedList = $failedList;
        return $this;
    }

    public function getFailedList() {
        return $this->failedList;
    }

    public function setFailedList(array $failedList) {
        $this->failedList = $failedList;
    }
    public function successList(array $successList): V1MeetingMeetingIdPhoneCancelcallPost200Response {
        $this->successList = $successList;
        return $this;
    }

    public function getSuccessList() {
        return $this->successList;
    }

    public function setSuccessList(array $successList) {
        $this->successList = $successList;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'failed_list' => '\wemeet\openapi\service\pstn\model\V1MeetingMeetingIdPhoneCancelcallPost200ResponseFailedListInner[]',
        'success_list' => '\wemeet\openapi\service\pstn\model\V1MeetingMeetingIdPhoneCancelcallPost200ResponseSuccessListInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'failed_list' => null,
        'success_list' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'failed_list' => false,
        'success_list' => false
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
        'failed_list' => 'failed_list',
        'success_list' => 'success_list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'failed_list' => 'setFailedList',
        'success_list' => 'setSuccessList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'failed_list' => 'getFailedList',
        'success_list' => 'getSuccessList'
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
            'failed_list' => $this->failedList,
            'success_list' => $this->successList,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

