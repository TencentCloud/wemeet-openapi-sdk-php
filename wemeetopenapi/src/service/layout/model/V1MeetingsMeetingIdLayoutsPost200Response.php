<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.4
 */
namespace wemeet\openapi\service\layout\model;

use wemeet\openapi\core\xhttp\ModelInterface;


class V1MeetingsMeetingIdLayoutsPost200Response implements ModelInterface, \JsonSerializable
{

    /**
     * 布局对象列表
    * 类型：\wemeet\openapi\service\layout\model\V1MeetingsMeetingIdLayoutsPost200ResponseLayoutListInner[]
     */
    protected $layoutList = null;

    /**
     * 布局数量
    * 类型：int
     */
    protected $layoutNumber = null;

    /**
     * 会议应用的布局ID
    * 类型：string
     */
    protected $selectedLayoutId = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['layout_list'])) {
            $this->layoutList = $jsonArray['layout_list'];
        }
        if (isset($jsonArray['layout_number'])) {
            $this->layoutNumber = $jsonArray['layout_number'];
        }
        if (isset($jsonArray['selected_layout_id'])) {
            $this->selectedLayoutId = $jsonArray['selected_layout_id'];
        }
    }

    public function layoutList(array $layoutList): V1MeetingsMeetingIdLayoutsPost200Response {
        $this->layoutList = $layoutList;
        return $this;
    }

    public function getLayoutList() {
        return $this->layoutList;
    }

    public function setLayoutList(array $layoutList) {
        $this->layoutList = $layoutList;
    }
    public function layoutNumber(int $layoutNumber): V1MeetingsMeetingIdLayoutsPost200Response {
        $this->layoutNumber = $layoutNumber;
        return $this;
    }

    public function getLayoutNumber() {
        return $this->layoutNumber;
    }

    public function setLayoutNumber(int $layoutNumber) {
        $this->layoutNumber = $layoutNumber;
    }
    public function selectedLayoutId(string $selectedLayoutId): V1MeetingsMeetingIdLayoutsPost200Response {
        $this->selectedLayoutId = $selectedLayoutId;
        return $this;
    }

    public function getSelectedLayoutId() {
        return $this->selectedLayoutId;
    }

    public function setSelectedLayoutId(string $selectedLayoutId) {
        $this->selectedLayoutId = $selectedLayoutId;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'layout_list' => '\wemeet\openapi\service\layout\model\V1MeetingsMeetingIdLayoutsPost200ResponseLayoutListInner[]',
        'layout_number' => 'int',
        'selected_layout_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'layout_list' => null,
        'layout_number' => 'int64',
        'selected_layout_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'layout_list' => false,
        'layout_number' => false,
        'selected_layout_id' => false
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
        'layout_list' => 'layout_list',
        'layout_number' => 'layout_number',
        'selected_layout_id' => 'selected_layout_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'layout_list' => 'setLayoutList',
        'layout_number' => 'setLayoutNumber',
        'selected_layout_id' => 'setSelectedLayoutId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'layout_list' => 'getLayoutList',
        'layout_number' => 'getLayoutNumber',
        'selected_layout_id' => 'getSelectedLayoutId'
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
            'layout_list' => $this->layoutList,
            'layout_number' => $this->layoutNumber,
            'selected_layout_id' => $this->selectedLayoutId,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

