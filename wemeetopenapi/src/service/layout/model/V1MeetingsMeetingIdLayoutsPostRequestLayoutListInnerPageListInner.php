<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.2
 */
namespace wemeet\openapi\service\layout\model;

use wemeet\openapi\core\xhttp\ModelInterface;


class V1MeetingsMeetingIdLayoutsPostRequestLayoutListInnerPageListInner implements ModelInterface, \JsonSerializable
{
    /**
     * 布局模板ID
    * 类型：
     */
    protected $layoutTemplateId;

    /**
     * 用户座次对象列表
    * 类型：\wemeet\openapi\service\layout\model\V1MeetingsMeetingIdLayoutsPostRequestLayoutListInnerPageListInnerUserSeatListInner[]
     */
    protected $userSeatList = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['layout_template_id'])) {
            $this->layoutTemplateId = $jsonArray['layout_template_id'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter layout_template_id');
        }
        if (isset($jsonArray['user_seat_list'])) {
            $this->userSeatList = $jsonArray['user_seat_list'];
        }
    }

    public function layoutTemplateId(string $layoutTemplateId): V1MeetingsMeetingIdLayoutsPostRequestLayoutListInnerPageListInner {
        $this->layoutTemplateId = $layoutTemplateId;
        return $this;
    }

    public function getLayoutTemplateId() {
        return $this->layoutTemplateId;
    }

    public function setLayoutTemplateId(string $layoutTemplateId) {
        $this->layoutTemplateId = $layoutTemplateId;
    }
    public function userSeatList(array $userSeatList): V1MeetingsMeetingIdLayoutsPostRequestLayoutListInnerPageListInner {
        $this->userSeatList = $userSeatList;
        return $this;
    }

    public function getUserSeatList() {
        return $this->userSeatList;
    }

    public function setUserSeatList(array $userSeatList) {
        $this->userSeatList = $userSeatList;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'layout_template_id' => 'string',
        'user_seat_list' => '\wemeet\openapi\service\layout\model\V1MeetingsMeetingIdLayoutsPostRequestLayoutListInnerPageListInnerUserSeatListInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'layout_template_id' => null,
        'user_seat_list' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'layout_template_id' => false,
        'user_seat_list' => false
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
        'layout_template_id' => 'layout_template_id',
        'user_seat_list' => 'user_seat_list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'layout_template_id' => 'setLayoutTemplateId',
        'user_seat_list' => 'setUserSeatList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'layout_template_id' => 'getLayoutTemplateId',
        'user_seat_list' => 'getUserSeatList'
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
            'layout_template_id' => $this->layoutTemplateId,
            'user_seat_list' => $this->userSeatList,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

