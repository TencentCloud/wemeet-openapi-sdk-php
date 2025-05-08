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


class V1FilesRecordsUploadFinishPostRequest implements ModelInterface, \JsonSerializable
{
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
    /**
     * 上传文件中的发言人数：传具体数值代表几人发言，最多支持12人，其中0代表多人发言
    * 类型：
     */
    protected $speakNumber;
    /**
     * 上传事务ID，由upload-prepare接口返回
    * 类型：
     */
    protected $uploadId;

    /**
     * 自动生成智能转写和智能纪要：true：自动生成（默认）  false：不生成
    * 类型：bool
     */
    protected $aiRecord = null;

    public function __construct(
        $jsonArray = []
    ) {
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
        if (isset($jsonArray['speak_number'])) {
            $this->speakNumber = $jsonArray['speak_number'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter speak_number');
        }
        if (isset($jsonArray['upload_id'])) {
            $this->uploadId = $jsonArray['upload_id'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter upload_id');
        }
        if (isset($jsonArray['ai_record'])) {
            $this->aiRecord = $jsonArray['ai_record'];
        }
    }

    public function aiRecord(bool $aiRecord): V1FilesRecordsUploadFinishPostRequest {
        $this->aiRecord = $aiRecord;
        return $this;
    }

    public function getAiRecord() {
        return $this->aiRecord;
    }

    public function setAiRecord(bool $aiRecord) {
        $this->aiRecord = $aiRecord;
    }
    public function operatorId(string $operatorId): V1FilesRecordsUploadFinishPostRequest {
        $this->operatorId = $operatorId;
        return $this;
    }

    public function getOperatorId() {
        return $this->operatorId;
    }

    public function setOperatorId(string $operatorId) {
        $this->operatorId = $operatorId;
    }
    public function operatorIdType(int $operatorIdType): V1FilesRecordsUploadFinishPostRequest {
        $this->operatorIdType = $operatorIdType;
        return $this;
    }

    public function getOperatorIdType() {
        return $this->operatorIdType;
    }

    public function setOperatorIdType(int $operatorIdType) {
        $this->operatorIdType = $operatorIdType;
    }
    public function speakNumber(int $speakNumber): V1FilesRecordsUploadFinishPostRequest {
        $this->speakNumber = $speakNumber;
        return $this;
    }

    public function getSpeakNumber() {
        return $this->speakNumber;
    }

    public function setSpeakNumber(int $speakNumber) {
        $this->speakNumber = $speakNumber;
    }
    public function uploadId(string $uploadId): V1FilesRecordsUploadFinishPostRequest {
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
        'ai_record' => 'bool',
        'operator_id' => 'string',
        'operator_id_type' => 'int',
        'speak_number' => 'int',
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
        'ai_record' => null,
        'operator_id' => null,
        'operator_id_type' => 'int64',
        'speak_number' => 'int64',
        'upload_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'ai_record' => false,
        'operator_id' => false,
        'operator_id_type' => false,
        'speak_number' => false,
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
        'ai_record' => 'ai_record',
        'operator_id' => 'operator_id',
        'operator_id_type' => 'operator_id_type',
        'speak_number' => 'speak_number',
        'upload_id' => 'upload_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ai_record' => 'setAiRecord',
        'operator_id' => 'setOperatorId',
        'operator_id_type' => 'setOperatorIdType',
        'speak_number' => 'setSpeakNumber',
        'upload_id' => 'setUploadId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ai_record' => 'getAiRecord',
        'operator_id' => 'getOperatorId',
        'operator_id_type' => 'getOperatorIdType',
        'speak_number' => 'getSpeakNumber',
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
            'ai_record' => $this->aiRecord,
            'operator_id' => $this->operatorId,
            'operator_id_type' => $this->operatorIdType,
            'speak_number' => $this->speakNumber,
            'upload_id' => $this->uploadId,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

