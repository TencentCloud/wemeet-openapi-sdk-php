<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.2
 */
namespace wemeet\openapi\service\meeting_room\model;

use wemeet\openapi\core\xhttp\ModelInterface;


class V1MeetingRoomsModifyRoomConfigInfoPostRequestRecordSettings implements ModelInterface, \JsonSerializable
{

    /**
     * 是否允许下载云录制，初始值为 false。 true：开启 false：关闭
    * 类型：bool
     */
    protected $downloadRecord = null;

    /**
     * 分享云录制，初始值为1。 0：关闭分享 1：全部成员可查看 2：仅登录成员可查看 3：仅同企业成员可查看 4：仅参会成员可查看
    * 类型：int
     */
    protected $shareRecord = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['download_record'])) {
            $this->downloadRecord = $jsonArray['download_record'];
        }
        if (isset($jsonArray['share_record'])) {
            $this->shareRecord = $jsonArray['share_record'];
        }
    }

    public function downloadRecord(bool $downloadRecord): V1MeetingRoomsModifyRoomConfigInfoPostRequestRecordSettings {
        $this->downloadRecord = $downloadRecord;
        return $this;
    }

    public function getDownloadRecord() {
        return $this->downloadRecord;
    }

    public function setDownloadRecord(bool $downloadRecord) {
        $this->downloadRecord = $downloadRecord;
    }
    public function shareRecord(int $shareRecord): V1MeetingRoomsModifyRoomConfigInfoPostRequestRecordSettings {
        $this->shareRecord = $shareRecord;
        return $this;
    }

    public function getShareRecord() {
        return $this->shareRecord;
    }

    public function setShareRecord(int $shareRecord) {
        $this->shareRecord = $shareRecord;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'download_record' => 'bool',
        'share_record' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'download_record' => null,
        'share_record' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'download_record' => false,
        'share_record' => false
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
        'download_record' => 'download_record',
        'share_record' => 'share_record'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'download_record' => 'setDownloadRecord',
        'share_record' => 'setShareRecord'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'download_record' => 'getDownloadRecord',
        'share_record' => 'getShareRecord'
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
            'download_record' => $this->downloadRecord,
            'share_record' => $this->shareRecord,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

