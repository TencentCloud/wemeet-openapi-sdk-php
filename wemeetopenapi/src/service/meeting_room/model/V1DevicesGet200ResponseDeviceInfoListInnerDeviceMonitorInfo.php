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


class V1DevicesGet200ResponseDeviceInfoListInnerDeviceMonitorInfo implements ModelInterface, \JsonSerializable
{

    /**
     * 摄像头健康状态
    * 类型：bool
     */
    protected $cameraStatus = null;

    /**
     * 麦克风健康状态
    * 类型：bool
     */
    protected $microphoneStatus = null;

    /**
     * 扬声器健康状态
    * 类型：bool
     */
    protected $speakerStatus = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['camera_status'])) {
            $this->cameraStatus = $jsonArray['camera_status'];
        }
        if (isset($jsonArray['microphone_status'])) {
            $this->microphoneStatus = $jsonArray['microphone_status'];
        }
        if (isset($jsonArray['speaker_status'])) {
            $this->speakerStatus = $jsonArray['speaker_status'];
        }
    }

    public function cameraStatus(bool $cameraStatus): V1DevicesGet200ResponseDeviceInfoListInnerDeviceMonitorInfo {
        $this->cameraStatus = $cameraStatus;
        return $this;
    }

    public function getCameraStatus() {
        return $this->cameraStatus;
    }

    public function setCameraStatus(bool $cameraStatus) {
        $this->cameraStatus = $cameraStatus;
    }
    public function microphoneStatus(bool $microphoneStatus): V1DevicesGet200ResponseDeviceInfoListInnerDeviceMonitorInfo {
        $this->microphoneStatus = $microphoneStatus;
        return $this;
    }

    public function getMicrophoneStatus() {
        return $this->microphoneStatus;
    }

    public function setMicrophoneStatus(bool $microphoneStatus) {
        $this->microphoneStatus = $microphoneStatus;
    }
    public function speakerStatus(bool $speakerStatus): V1DevicesGet200ResponseDeviceInfoListInnerDeviceMonitorInfo {
        $this->speakerStatus = $speakerStatus;
        return $this;
    }

    public function getSpeakerStatus() {
        return $this->speakerStatus;
    }

    public function setSpeakerStatus(bool $speakerStatus) {
        $this->speakerStatus = $speakerStatus;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'camera_status' => 'bool',
        'microphone_status' => 'bool',
        'speaker_status' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'camera_status' => null,
        'microphone_status' => null,
        'speaker_status' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'camera_status' => false,
        'microphone_status' => false,
        'speaker_status' => false
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
        'camera_status' => 'camera_status',
        'microphone_status' => 'microphone_status',
        'speaker_status' => 'speaker_status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'camera_status' => 'setCameraStatus',
        'microphone_status' => 'setMicrophoneStatus',
        'speaker_status' => 'setSpeakerStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'camera_status' => 'getCameraStatus',
        'microphone_status' => 'getMicrophoneStatus',
        'speaker_status' => 'getSpeakerStatus'
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
            'camera_status' => $this->cameraStatus,
            'microphone_status' => $this->microphoneStatus,
            'speaker_status' => $this->speakerStatus,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

