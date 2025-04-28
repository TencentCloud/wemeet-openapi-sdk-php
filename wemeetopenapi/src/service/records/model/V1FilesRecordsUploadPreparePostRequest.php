<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.2
 */
namespace wemeet\openapi\service\records\model;

use wemeet\openapi\core\xhttp\ModelInterface;


class V1FilesRecordsUploadPreparePostRequest implements ModelInterface, \JsonSerializable
{
    /**
     * 文件名base64编码
    * 类型：
     */
    protected $fileName;
    /**
     * 文件大小（以字节为单位）
    * 类型：
     */
    protected $fileSize;
    /**
     * 文件类型。voice：音频；video：视频
    * 类型：
     */
    protected $fileType;
    /**
     * 操作者ID
    * 类型：
     */
    protected $operatorId;
    /**
     * 操作者ID类型
    * 类型：
     */
    protected $operatorIdType;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['file_name'])) {
            $this->fileName = $jsonArray['file_name'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter file_name');
        }
        if (isset($jsonArray['file_size'])) {
            $this->fileSize = $jsonArray['file_size'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter file_size');
        }
        if (isset($jsonArray['file_type'])) {
            $this->fileType = $jsonArray['file_type'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter file_type');
        }
        if (isset($jsonArray['operator_id'])) {
            $this->operatorId = $jsonArray['operator_id'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter operator_id');
        }
        if (isset($jsonArray['operator_id_type'])) {
            $this->operatorIdType = $jsonArray['operator_id_type'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter operator_id_type');
        }
    }

    public function fileName(string $fileName): V1FilesRecordsUploadPreparePostRequest {
        $this->fileName = $fileName;
        return $this;
    }

    public function getFileName() {
        return $this->fileName;
    }

    public function setFileName(string $fileName) {
        $this->fileName = $fileName;
    }
    public function fileSize(int $fileSize): V1FilesRecordsUploadPreparePostRequest {
        $this->fileSize = $fileSize;
        return $this;
    }

    public function getFileSize() {
        return $this->fileSize;
    }

    public function setFileSize(int $fileSize) {
        $this->fileSize = $fileSize;
    }
    public function fileType(string $fileType): V1FilesRecordsUploadPreparePostRequest {
        $this->fileType = $fileType;
        return $this;
    }

    public function getFileType() {
        return $this->fileType;
    }

    public function setFileType(string $fileType) {
        $this->fileType = $fileType;
    }
    public function operatorId(string $operatorId): V1FilesRecordsUploadPreparePostRequest {
        $this->operatorId = $operatorId;
        return $this;
    }

    public function getOperatorId() {
        return $this->operatorId;
    }

    public function setOperatorId(string $operatorId) {
        $this->operatorId = $operatorId;
    }
    public function operatorIdType(int $operatorIdType): V1FilesRecordsUploadPreparePostRequest {
        $this->operatorIdType = $operatorIdType;
        return $this;
    }

    public function getOperatorIdType() {
        return $this->operatorIdType;
    }

    public function setOperatorIdType(int $operatorIdType) {
        $this->operatorIdType = $operatorIdType;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'file_name' => 'string',
        'file_size' => 'int',
        'file_type' => 'string',
        'operator_id' => 'string',
        'operator_id_type' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'file_name' => null,
        'file_size' => 'int64',
        'file_type' => null,
        'operator_id' => null,
        'operator_id_type' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'file_name' => false,
        'file_size' => false,
        'file_type' => false,
        'operator_id' => false,
        'operator_id_type' => false
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
        'file_name' => 'file_name',
        'file_size' => 'file_size',
        'file_type' => 'file_type',
        'operator_id' => 'operator_id',
        'operator_id_type' => 'operator_id_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'file_name' => 'setFileName',
        'file_size' => 'setFileSize',
        'file_type' => 'setFileType',
        'operator_id' => 'setOperatorId',
        'operator_id_type' => 'setOperatorIdType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'file_name' => 'getFileName',
        'file_size' => 'getFileSize',
        'file_type' => 'getFileType',
        'operator_id' => 'getOperatorId',
        'operator_id_type' => 'getOperatorIdType'
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
            'file_name' => $this->fileName,
            'file_size' => $this->fileSize,
            'file_type' => $this->fileType,
            'operator_id' => $this->operatorId,
            'operator_id_type' => $this->operatorIdType,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

