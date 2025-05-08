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


class V1RecordsTranscriptsParagraphsGet200Response implements ModelInterface, \JsonSerializable
{

    /**
     * 声纹识别状态0-未完成 1-已完成。说明：声纹识别是针对 Rooms 等设备出现一台设备多人讲话场景时，自动区分为多个发言人的能力。声纹识别与纪要生成的过程独立。无需声纹识别或声纹识别已完成时，该值为1。
    * 类型：int
     */
    protected $audioDetect = null;

    /**
     * 段落对象列表
    * 类型：\wemeet\openapi\service\records\model\V1RecordsTranscriptsParagraphsGet200ResponsePidsInner[]
     */
    protected $pids = null;

    /**
     * 段落总数。
    * 类型：int
     */
    protected $total = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['audio_detect'])) {
            $this->audioDetect = $jsonArray['audio_detect'];
        }
        if (isset($jsonArray['pids'])) {
            $this->pids = $jsonArray['pids'];
        }
        if (isset($jsonArray['total'])) {
            $this->total = $jsonArray['total'];
        }
    }

    public function audioDetect(int $audioDetect): V1RecordsTranscriptsParagraphsGet200Response {
        $this->audioDetect = $audioDetect;
        return $this;
    }

    public function getAudioDetect() {
        return $this->audioDetect;
    }

    public function setAudioDetect(int $audioDetect) {
        $this->audioDetect = $audioDetect;
    }
    public function pids(array $pids): V1RecordsTranscriptsParagraphsGet200Response {
        $this->pids = $pids;
        return $this;
    }

    public function getPids() {
        return $this->pids;
    }

    public function setPids(array $pids) {
        $this->pids = $pids;
    }
    public function total(int $total): V1RecordsTranscriptsParagraphsGet200Response {
        $this->total = $total;
        return $this;
    }

    public function getTotal() {
        return $this->total;
    }

    public function setTotal(int $total) {
        $this->total = $total;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'audio_detect' => 'int',
        'pids' => '\wemeet\openapi\service\records\model\V1RecordsTranscriptsParagraphsGet200ResponsePidsInner[]',
        'total' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'audio_detect' => 'int64',
        'pids' => null,
        'total' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'audio_detect' => false,
        'pids' => false,
        'total' => false
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
        'audio_detect' => 'audio_detect',
        'pids' => 'pids',
        'total' => 'total'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'audio_detect' => 'setAudioDetect',
        'pids' => 'setPids',
        'total' => 'setTotal'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'audio_detect' => 'getAudioDetect',
        'pids' => 'getPids',
        'total' => 'getTotal'
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
            'audio_detect' => $this->audioDetect,
            'pids' => $this->pids,
            'total' => $this->total,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

