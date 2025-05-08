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


class V1MeetingsMeetingIdLayoutsPost200ResponseLayoutListInner implements ModelInterface, \JsonSerializable
{

    /**
    * 类型：string
     */
    protected $layoutId = null;

    /**
     * 布局单页对象列表
    * 类型：\wemeet\openapi\service\layout\model\V1MeetingsMeetingIdLayoutsPost200ResponseLayoutListInnerPageListInner[]
     */
    protected $pageList = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['layout_id'])) {
            $this->layoutId = $jsonArray['layout_id'];
        }
        if (isset($jsonArray['page_list'])) {
            $this->pageList = $jsonArray['page_list'];
        }
    }

    public function layoutId(string $layoutId): V1MeetingsMeetingIdLayoutsPost200ResponseLayoutListInner {
        $this->layoutId = $layoutId;
        return $this;
    }

    public function getLayoutId() {
        return $this->layoutId;
    }

    public function setLayoutId(string $layoutId) {
        $this->layoutId = $layoutId;
    }
    public function pageList(array $pageList): V1MeetingsMeetingIdLayoutsPost200ResponseLayoutListInner {
        $this->pageList = $pageList;
        return $this;
    }

    public function getPageList() {
        return $this->pageList;
    }

    public function setPageList(array $pageList) {
        $this->pageList = $pageList;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'layout_id' => 'string',
        'page_list' => '\wemeet\openapi\service\layout\model\V1MeetingsMeetingIdLayoutsPost200ResponseLayoutListInnerPageListInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'layout_id' => null,
        'page_list' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'layout_id' => false,
        'page_list' => false
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
        'layout_id' => 'layout_id',
        'page_list' => 'page_list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'layout_id' => 'setLayoutId',
        'page_list' => 'setPageList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'layout_id' => 'getLayoutId',
        'page_list' => 'getPageList'
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
            'layout_id' => $this->layoutId,
            'page_list' => $this->pageList,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

