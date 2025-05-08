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


class V1MeetingsMeetingIdQosGet200ResponseParticipantsInnerQosDetailsInnerVideo implements ModelInterface, \JsonSerializable
{

    /**
     * 下行码率（kbps）
    * 类型：string
     */
    protected $downstreamBitrate = null;

    /**
     * 下行帧率（fps）
    * 类型：string
     */
    protected $downstreamFramerate = null;

    /**
     * 下行分辨率
    * 类型：string
     */
    protected $downstreamResolution = null;

    /**
     * 上行码率（kbps）
    * 类型：string
     */
    protected $upstreamBitrate = null;

    /**
     * 上行帧率（fps）
    * 类型：string
     */
    protected $upstreamFramerate = null;

    /**
     * 上行分辨率
    * 类型：string
     */
    protected $upstreamResolution = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['downstream_bitrate'])) {
            $this->downstreamBitrate = $jsonArray['downstream_bitrate'];
        }
        if (isset($jsonArray['downstream_framerate'])) {
            $this->downstreamFramerate = $jsonArray['downstream_framerate'];
        }
        if (isset($jsonArray['downstream_resolution'])) {
            $this->downstreamResolution = $jsonArray['downstream_resolution'];
        }
        if (isset($jsonArray['upstream_bitrate'])) {
            $this->upstreamBitrate = $jsonArray['upstream_bitrate'];
        }
        if (isset($jsonArray['upstream_framerate'])) {
            $this->upstreamFramerate = $jsonArray['upstream_framerate'];
        }
        if (isset($jsonArray['upstream_resolution'])) {
            $this->upstreamResolution = $jsonArray['upstream_resolution'];
        }
    }

    public function downstreamBitrate(string $downstreamBitrate): V1MeetingsMeetingIdQosGet200ResponseParticipantsInnerQosDetailsInnerVideo {
        $this->downstreamBitrate = $downstreamBitrate;
        return $this;
    }

    public function getDownstreamBitrate() {
        return $this->downstreamBitrate;
    }

    public function setDownstreamBitrate(string $downstreamBitrate) {
        $this->downstreamBitrate = $downstreamBitrate;
    }
    public function downstreamFramerate(string $downstreamFramerate): V1MeetingsMeetingIdQosGet200ResponseParticipantsInnerQosDetailsInnerVideo {
        $this->downstreamFramerate = $downstreamFramerate;
        return $this;
    }

    public function getDownstreamFramerate() {
        return $this->downstreamFramerate;
    }

    public function setDownstreamFramerate(string $downstreamFramerate) {
        $this->downstreamFramerate = $downstreamFramerate;
    }
    public function downstreamResolution(string $downstreamResolution): V1MeetingsMeetingIdQosGet200ResponseParticipantsInnerQosDetailsInnerVideo {
        $this->downstreamResolution = $downstreamResolution;
        return $this;
    }

    public function getDownstreamResolution() {
        return $this->downstreamResolution;
    }

    public function setDownstreamResolution(string $downstreamResolution) {
        $this->downstreamResolution = $downstreamResolution;
    }
    public function upstreamBitrate(string $upstreamBitrate): V1MeetingsMeetingIdQosGet200ResponseParticipantsInnerQosDetailsInnerVideo {
        $this->upstreamBitrate = $upstreamBitrate;
        return $this;
    }

    public function getUpstreamBitrate() {
        return $this->upstreamBitrate;
    }

    public function setUpstreamBitrate(string $upstreamBitrate) {
        $this->upstreamBitrate = $upstreamBitrate;
    }
    public function upstreamFramerate(string $upstreamFramerate): V1MeetingsMeetingIdQosGet200ResponseParticipantsInnerQosDetailsInnerVideo {
        $this->upstreamFramerate = $upstreamFramerate;
        return $this;
    }

    public function getUpstreamFramerate() {
        return $this->upstreamFramerate;
    }

    public function setUpstreamFramerate(string $upstreamFramerate) {
        $this->upstreamFramerate = $upstreamFramerate;
    }
    public function upstreamResolution(string $upstreamResolution): V1MeetingsMeetingIdQosGet200ResponseParticipantsInnerQosDetailsInnerVideo {
        $this->upstreamResolution = $upstreamResolution;
        return $this;
    }

    public function getUpstreamResolution() {
        return $this->upstreamResolution;
    }

    public function setUpstreamResolution(string $upstreamResolution) {
        $this->upstreamResolution = $upstreamResolution;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'downstream_bitrate' => 'string',
        'downstream_framerate' => 'string',
        'downstream_resolution' => 'string',
        'upstream_bitrate' => 'string',
        'upstream_framerate' => 'string',
        'upstream_resolution' => 'string'
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
        'downstream_framerate' => null,
        'downstream_resolution' => null,
        'upstream_bitrate' => null,
        'upstream_framerate' => null,
        'upstream_resolution' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'downstream_bitrate' => false,
        'downstream_framerate' => false,
        'downstream_resolution' => false,
        'upstream_bitrate' => false,
        'upstream_framerate' => false,
        'upstream_resolution' => false
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
        'downstream_framerate' => 'downstream_framerate',
        'downstream_resolution' => 'downstream_resolution',
        'upstream_bitrate' => 'upstream_bitrate',
        'upstream_framerate' => 'upstream_framerate',
        'upstream_resolution' => 'upstream_resolution'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'downstream_bitrate' => 'setDownstreamBitrate',
        'downstream_framerate' => 'setDownstreamFramerate',
        'downstream_resolution' => 'setDownstreamResolution',
        'upstream_bitrate' => 'setUpstreamBitrate',
        'upstream_framerate' => 'setUpstreamFramerate',
        'upstream_resolution' => 'setUpstreamResolution'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'downstream_bitrate' => 'getDownstreamBitrate',
        'downstream_framerate' => 'getDownstreamFramerate',
        'downstream_resolution' => 'getDownstreamResolution',
        'upstream_bitrate' => 'getUpstreamBitrate',
        'upstream_framerate' => 'getUpstreamFramerate',
        'upstream_resolution' => 'getUpstreamResolution'
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
            'downstream_framerate' => $this->downstreamFramerate,
            'downstream_resolution' => $this->downstreamResolution,
            'upstream_bitrate' => $this->upstreamBitrate,
            'upstream_framerate' => $this->upstreamFramerate,
            'upstream_resolution' => $this->upstreamResolution,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

