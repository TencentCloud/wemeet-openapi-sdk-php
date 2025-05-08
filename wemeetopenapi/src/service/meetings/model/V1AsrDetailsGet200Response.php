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


class V1AsrDetailsGet200Response implements ModelInterface, \JsonSerializable
{

    /**
     * 分页查询返回分页总数
    * 类型：int
     */
    protected $currPage = null;

    /**
     * 分页查询返回当前页码
    * 类型：int
     */
    protected $currSize = null;

    /**
     * 文件下载链接列表，有效期2个小时
    * 类型：string[]
     */
    protected $downloadUrl = null;

    /**
     * 分页查询返回数据总数
    * 类型：int
     */
    protected $totalCount = null;

    /**
     * 分页查询返回单页数据条数
    * 类型：int
     */
    protected $totalPage = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['curr_page'])) {
            $this->currPage = $jsonArray['curr_page'];
        }
        if (isset($jsonArray['curr_size'])) {
            $this->currSize = $jsonArray['curr_size'];
        }
        if (isset($jsonArray['download_url'])) {
            $this->downloadUrl = $jsonArray['download_url'];
        }
        if (isset($jsonArray['total_count'])) {
            $this->totalCount = $jsonArray['total_count'];
        }
        if (isset($jsonArray['total_page'])) {
            $this->totalPage = $jsonArray['total_page'];
        }
    }

    public function currPage(int $currPage): V1AsrDetailsGet200Response {
        $this->currPage = $currPage;
        return $this;
    }

    public function getCurrPage() {
        return $this->currPage;
    }

    public function setCurrPage(int $currPage) {
        $this->currPage = $currPage;
    }
    public function currSize(int $currSize): V1AsrDetailsGet200Response {
        $this->currSize = $currSize;
        return $this;
    }

    public function getCurrSize() {
        return $this->currSize;
    }

    public function setCurrSize(int $currSize) {
        $this->currSize = $currSize;
    }
    public function downloadUrl(array $downloadUrl): V1AsrDetailsGet200Response {
        $this->downloadUrl = $downloadUrl;
        return $this;
    }

    public function getDownloadUrl() {
        return $this->downloadUrl;
    }

    public function setDownloadUrl(array $downloadUrl) {
        $this->downloadUrl = $downloadUrl;
    }
    public function totalCount(int $totalCount): V1AsrDetailsGet200Response {
        $this->totalCount = $totalCount;
        return $this;
    }

    public function getTotalCount() {
        return $this->totalCount;
    }

    public function setTotalCount(int $totalCount) {
        $this->totalCount = $totalCount;
    }
    public function totalPage(int $totalPage): V1AsrDetailsGet200Response {
        $this->totalPage = $totalPage;
        return $this;
    }

    public function getTotalPage() {
        return $this->totalPage;
    }

    public function setTotalPage(int $totalPage) {
        $this->totalPage = $totalPage;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'curr_page' => 'int',
        'curr_size' => 'int',
        'download_url' => 'string[]',
        'total_count' => 'int',
        'total_page' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'curr_page' => 'int64',
        'curr_size' => 'int64',
        'download_url' => null,
        'total_count' => 'int64',
        'total_page' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'curr_page' => false,
        'curr_size' => false,
        'download_url' => false,
        'total_count' => false,
        'total_page' => false
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
        'curr_page' => 'curr_page',
        'curr_size' => 'curr_size',
        'download_url' => 'download_url',
        'total_count' => 'total_count',
        'total_page' => 'total_page'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'curr_page' => 'setCurrPage',
        'curr_size' => 'setCurrSize',
        'download_url' => 'setDownloadUrl',
        'total_count' => 'setTotalCount',
        'total_page' => 'setTotalPage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'curr_page' => 'getCurrPage',
        'curr_size' => 'getCurrSize',
        'download_url' => 'getDownloadUrl',
        'total_count' => 'getTotalCount',
        'total_page' => 'getTotalPage'
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
            'curr_page' => $this->currPage,
            'curr_size' => $this->currSize,
            'download_url' => $this->downloadUrl,
            'total_count' => $this->totalCount,
            'total_page' => $this->totalPage,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

