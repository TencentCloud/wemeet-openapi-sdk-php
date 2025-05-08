<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.4
 */
namespace wemeet\openapi\service\application_group\model;

use wemeet\openapi\core\xhttp\ModelInterface;


class V1AppToolkitPostRequestToolListInnerVisibleListInner implements ModelInterface, \JsonSerializable
{

    /**
     * 对哪个企业的用户可见
    * 类型：string
     */
    protected $visibleAppid = null;

    /**
     * 可见用户openid，OAuth2.0鉴权用户请用此字段（visible_userid和visible_openid二者选一，同时存在时以visible_openid为准）
    * 类型：string
     */
    protected $visibleOpenid = null;

    /**
     * 可见用户userid，若不填则对该企业下所有用户可见
    * 类型：string
     */
    protected $visibleUserid = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['visible_appid'])) {
            $this->visibleAppid = $jsonArray['visible_appid'];
        }
        if (isset($jsonArray['visible_openid'])) {
            $this->visibleOpenid = $jsonArray['visible_openid'];
        }
        if (isset($jsonArray['visible_userid'])) {
            $this->visibleUserid = $jsonArray['visible_userid'];
        }
    }

    public function visibleAppid(string $visibleAppid): V1AppToolkitPostRequestToolListInnerVisibleListInner {
        $this->visibleAppid = $visibleAppid;
        return $this;
    }

    public function getVisibleAppid() {
        return $this->visibleAppid;
    }

    public function setVisibleAppid(string $visibleAppid) {
        $this->visibleAppid = $visibleAppid;
    }
    public function visibleOpenid(string $visibleOpenid): V1AppToolkitPostRequestToolListInnerVisibleListInner {
        $this->visibleOpenid = $visibleOpenid;
        return $this;
    }

    public function getVisibleOpenid() {
        return $this->visibleOpenid;
    }

    public function setVisibleOpenid(string $visibleOpenid) {
        $this->visibleOpenid = $visibleOpenid;
    }
    public function visibleUserid(string $visibleUserid): V1AppToolkitPostRequestToolListInnerVisibleListInner {
        $this->visibleUserid = $visibleUserid;
        return $this;
    }

    public function getVisibleUserid() {
        return $this->visibleUserid;
    }

    public function setVisibleUserid(string $visibleUserid) {
        $this->visibleUserid = $visibleUserid;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'visible_appid' => 'string',
        'visible_openid' => 'string',
        'visible_userid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'visible_appid' => null,
        'visible_openid' => null,
        'visible_userid' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'visible_appid' => false,
        'visible_openid' => false,
        'visible_userid' => false
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
        'visible_appid' => 'visible_appid',
        'visible_openid' => 'visible_openid',
        'visible_userid' => 'visible_userid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'visible_appid' => 'setVisibleAppid',
        'visible_openid' => 'setVisibleOpenid',
        'visible_userid' => 'setVisibleUserid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'visible_appid' => 'getVisibleAppid',
        'visible_openid' => 'getVisibleOpenid',
        'visible_userid' => 'getVisibleUserid'
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
            'visible_appid' => $this->visibleAppid,
            'visible_openid' => $this->visibleOpenid,
            'visible_userid' => $this->visibleUserid,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

