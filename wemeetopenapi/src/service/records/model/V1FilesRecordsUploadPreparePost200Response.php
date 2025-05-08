<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.4
 */
namespace wemeet\openapi\service\records\model;

use wemeet\openapi\core\xhttp\ModelInterface;


class V1FilesRecordsUploadPreparePost200Response implements ModelInterface, \JsonSerializable
{

    /**
     * 分块数量
    * 类型：int
     */
    protected $blockNum = null;

    /**
     * 分块大小策略（以字节为单位）
    * 类型：int
     */
    protected $blockSize = null;

    /**
     * 上传事务 ID
    * 类型：string
     */
    protected $uploadId = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['block_num'])) {
            $this->blockNum = $jsonArray['block_num'];
        }
        if (isset($jsonArray['block_size'])) {
            $this->blockSize = $jsonArray['block_size'];
        }
        if (isset($jsonArray['upload_id'])) {
            $this->uploadId = $jsonArray['upload_id'];
        }
    }

    public function blockNum(int $blockNum): V1FilesRecordsUploadPreparePost200Response {
        $this->blockNum = $blockNum;
        return $this;
    }

    public function getBlockNum() {
        return $this->blockNum;
    }

    public function setBlockNum(int $blockNum) {
        $this->blockNum = $blockNum;
    }
    public function blockSize(int $blockSize): V1FilesRecordsUploadPreparePost200Response {
        $this->blockSize = $blockSize;
        return $this;
    }

    public function getBlockSize() {
        return $this->blockSize;
    }

    public function setBlockSize(int $blockSize) {
        $this->blockSize = $blockSize;
    }
    public function uploadId(string $uploadId): V1FilesRecordsUploadPreparePost200Response {
        $this->uploadId = $uploadId;
        return $this;
    }

    public function getUploadId() {
        return $this->uploadId;
    }

    public function setUploadId(string $uploadId) {
        $this->uploadId = $uploadId;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'block_num' => 'int',
        'block_size' => 'int',
        'upload_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'block_num' => 'int64',
        'block_size' => 'int64',
        'upload_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'block_num' => false,
        'block_size' => false,
        'upload_id' => false
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
        'block_num' => 'block_num',
        'block_size' => 'block_size',
        'upload_id' => 'upload_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'block_num' => 'setBlockNum',
        'block_size' => 'setBlockSize',
        'upload_id' => 'setUploadId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'block_num' => 'getBlockNum',
        'block_size' => 'getBlockSize',
        'upload_id' => 'getUploadId'
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
            'block_num' => $this->blockNum,
            'block_size' => $this->blockSize,
            'upload_id' => $this->uploadId,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

