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


class V1MeetingsMeetingIdQosGet200ResponseParticipantsInnerQosDetailsInnerAudio implements ModelInterface, \JsonSerializable
{

    /**
     * 下行码率（kbps）
    * 类型：string
     */
    protected $downstreamBitrate = null;

    /**
     * 扬声器播放音量（db）
    * 类型：string
     */
    protected $loudspeakerVolume = null;

    /**
     * 麦克风采集音量（db）
    * 类型：string
     */
    protected $micVolume = null;

    /**
     * 上行码率（kbps）
    * 类型：string
     */
    protected $upstreamBitrate = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['downstream_bitrate'])) {
            $this->downstreamBitrate = $jsonArray['downstream_bitrate'];
        }
        if (isset($jsonArray['loudspeaker_volume'])) {
            $this->loudspeakerVolume = $jsonArray['loudspeaker_volume'];
        }
        if (isset($jsonArray['mic_volume'])) {
            $this->micVolume = $jsonArray['mic_volume'];
        }
        if (isset($jsonArray['upstream_bitrate'])) {
            $this->upstreamBitrate = $jsonArray['upstream_bitrate'];
        }
    }

    public function downstreamBitrate(string $downstreamBitrate): V1MeetingsMeetingIdQosGet200ResponseParticipantsInnerQosDetailsInnerAudio {
        $this->downstreamBitrate = $downstreamBitrate;
        return $this;
    }

    public function getDownstreamBitrate() {
        return $this->downstreamBitrate;
    }

    public function setDownstreamBitrate(string $downstreamBitrate) {
        $this->downstreamBitrate = $downstreamBitrate;
    }
    public function loudspeakerVolume(string $loudspeakerVolume): V1MeetingsMeetingIdQosGet200ResponseParticipantsInnerQosDetailsInnerAudio {
        $this->loudspeakerVolume = $loudspeakerVolume;
        return $this;
    }

    public function getLoudspeakerVolume() {
        return $this->loudspeakerVolume;
    }

    public function setLoudspeakerVolume(string $loudspeakerVolume) {
        $this->loudspeakerVolume = $loudspeakerVolume;
    }
    public function micVolume(string $micVolume): V1MeetingsMeetingIdQosGet200ResponseParticipantsInnerQosDetailsInnerAudio {
        $this->micVolume = $micVolume;
        return $this;
    }

    public function getMicVolume() {
        return $this->micVolume;
    }

    public function setMicVolume(string $micVolume) {
        $this->micVolume = $micVolume;
    }
    public function upstreamBitrate(string $upstreamBitrate): V1MeetingsMeetingIdQosGet200ResponseParticipantsInnerQosDetailsInnerAudio {
        $this->upstreamBitrate = $upstreamBitrate;
        return $this;
    }

    public function getUpstreamBitrate() {
        return $this->upstreamBitrate;
    }

    public function setUpstreamBitrate(string $upstreamBitrate) {
        $this->upstreamBitrate = $upstreamBitrate;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'downstream_bitrate' => 'string',
        'loudspeaker_volume' => 'string',
        'mic_volume' => 'string',
        'upstream_bitrate' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'downstream_bitrate' => null,
        'loudspeaker_volume' => null,
        'mic_volume' => null,
        'upstream_bitrate' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'downstream_bitrate' => false,
        'loudspeaker_volume' => false,
        'mic_volume' => false,
        'upstream_bitrate' => false
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
        'downstream_bitrate' => 'downstream_bitrate',
        'loudspeaker_volume' => 'loudspeaker_volume',
        'mic_volume' => 'mic_volume',
        'upstream_bitrate' => 'upstream_bitrate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'downstream_bitrate' => 'setDownstreamBitrate',
        'loudspeaker_volume' => 'setLoudspeakerVolume',
        'mic_volume' => 'setMicVolume',
        'upstream_bitrate' => 'setUpstreamBitrate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'downstream_bitrate' => 'getDownstreamBitrate',
        'loudspeaker_volume' => 'getLoudspeakerVolume',
        'mic_volume' => 'getMicVolume',
        'upstream_bitrate' => 'getUpstreamBitrate'
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
            'downstream_bitrate' => $this->downstreamBitrate,
            'loudspeaker_volume' => $this->loudspeakerVolume,
            'mic_volume' => $this->micVolume,
            'upstream_bitrate' => $this->upstreamBitrate,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

