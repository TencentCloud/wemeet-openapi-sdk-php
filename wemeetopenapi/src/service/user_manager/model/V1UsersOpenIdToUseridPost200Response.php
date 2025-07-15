<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.7
 */
namespace wemeet\openapi\service\user_manager\model;

use wemeet\openapi\core\xhttp\ModelInterface;


class V1UsersOpenIdToUseridPost200Response implements ModelInterface, \JsonSerializable
{

    /**
     * 所有没有转换成功的open_id列表。 例如：open_id和sdkid不一致、open_id和自建应用不是同企业、open_id非法等情况。
    * 类型：string[]
     */
    protected $invalidOpenIdList = null;

    /**
     * 转换成功的该自建应用所在企业下的userid、open_id对应关系列表。
    * 类型：\wemeet\openapi\service\user_manager\model\V1UsersOpenIdToUseridPost200ResponseUseridListInner[]
     */
    protected $useridList = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['invalid_open_id_list'])) {
            $this->invalidOpenIdList = $jsonArray['invalid_open_id_list'];
        }
        if (isset($jsonArray['userid_list'])) {
            $this->useridList = $jsonArray['userid_list'];
        }
    }

    public function invalidOpenIdList(array $invalidOpenIdList): V1UsersOpenIdToUseridPost200Response {
        $this->invalidOpenIdList = $invalidOpenIdList;
        return $this;
    }

    public function getInvalidOpenIdList() {
        return $this->invalidOpenIdList;
    }

    public function setInvalidOpenIdList(array $invalidOpenIdList) {
        $this->invalidOpenIdList = $invalidOpenIdList;
    }
    public function useridList(array $useridList): V1UsersOpenIdToUseridPost200Response {
        $this->useridList = $useridList;
        return $this;
    }

    public function getUseridList() {
        return $this->useridList;
    }

    public function setUseridList(array $useridList) {
        $this->useridList = $useridList;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'invalid_open_id_list' => 'string[]',
        'userid_list' => '\wemeet\openapi\service\user_manager\model\V1UsersOpenIdToUseridPost200ResponseUseridListInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'invalid_open_id_list' => null,
        'userid_list' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'invalid_open_id_list' => false,
        'userid_list' => false
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
        'invalid_open_id_list' => 'invalid_open_id_list',
        'userid_list' => 'userid_list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'invalid_open_id_list' => 'setInvalidOpenIdList',
        'userid_list' => 'setUseridList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'invalid_open_id_list' => 'getInvalidOpenIdList',
        'userid_list' => 'getUseridList'
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
            'invalid_open_id_list' => $this->invalidOpenIdList,
            'userid_list' => $this->useridList,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

