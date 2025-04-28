<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.2
 */
namespace wemeet\openapi\service\meetings\model;

use wemeet\openapi\core\xhttp\ModelInterface;


class V1MeetingsMeetingIdQosGet200ResponseParticipantsInnerQosDetailsInnerNetwork implements ModelInterface, \JsonSerializable
{

    /**
     * 下行带宽（kbps）
    * 类型：string
     */
    protected $downstreamBindwidth = null;

    /**
     * 下行丢包（%）
    * 类型：string
     */
    protected $downstreamPacketLoss = null;

    /**
     * 网络延迟 (ms)
    * 类型：string
     */
    protected $networkDelay = null;

    /**
     * 上行带宽（kbps）
    * 类型：string
     */
    protected $upstreamBindwidth = null;

    /**
     * 上行丢包（%）
    * 类型：string
     */
    protected $upstreamPacketLoss = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['downstream_bindwidth'])) {
            $this->downstreamBindwidth = $jsonArray['downstream_bindwidth'];
        }
        if (isset($jsonArray['downstream_packet_loss'])) {
            $this->downstreamPacketLoss = $jsonArray['downstream_packet_loss'];
        }
        if (isset($jsonArray['network_delay'])) {
            $this->networkDelay = $jsonArray['network_delay'];
        }
        if (isset($jsonArray['upstream_bindwidth'])) {
            $this->upstreamBindwidth = $jsonArray['upstream_bindwidth'];
        }
        if (isset($jsonArray['upstream_packet_loss'])) {
            $this->upstreamPacketLoss = $jsonArray['upstream_packet_loss'];
        }
    }

    public function downstreamBindwidth(string $downstreamBindwidth): V1MeetingsMeetingIdQosGet200ResponseParticipantsInnerQosDetailsInnerNetwork {
        $this->downstreamBindwidth = $downstreamBindwidth;
        return $this;
    }

    public function getDownstreamBindwidth() {
        return $this->downstreamBindwidth;
    }

    public function setDownstreamBindwidth(string $downstreamBindwidth) {
        $this->downstreamBindwidth = $downstreamBindwidth;
    }
    public function downstreamPacketLoss(string $downstreamPacketLoss): V1MeetingsMeetingIdQosGet200ResponseParticipantsInnerQosDetailsInnerNetwork {
        $this->downstreamPacketLoss = $downstreamPacketLoss;
        return $this;
    }

    public function getDownstreamPacketLoss() {
        return $this->downstreamPacketLoss;
    }

    public function setDownstreamPacketLoss(string $downstreamPacketLoss) {
        $this->downstreamPacketLoss = $downstreamPacketLoss;
    }
    public function networkDelay(string $networkDelay): V1MeetingsMeetingIdQosGet200ResponseParticipantsInnerQosDetailsInnerNetwork {
        $this->networkDelay = $networkDelay;
        return $this;
    }

    public function getNetworkDelay() {
        return $this->networkDelay;
    }

    public function setNetworkDelay(string $networkDelay) {
        $this->networkDelay = $networkDelay;
    }
    public function upstreamBindwidth(string $upstreamBindwidth): V1MeetingsMeetingIdQosGet200ResponseParticipantsInnerQosDetailsInnerNetwork {
        $this->upstreamBindwidth = $upstreamBindwidth;
        return $this;
    }

    public function getUpstreamBindwidth() {
        return $this->upstreamBindwidth;
    }

    public function setUpstreamBindwidth(string $upstreamBindwidth) {
        $this->upstreamBindwidth = $upstreamBindwidth;
    }
    public function upstreamPacketLoss(string $upstreamPacketLoss): V1MeetingsMeetingIdQosGet200ResponseParticipantsInnerQosDetailsInnerNetwork {
        $this->upstreamPacketLoss = $upstreamPacketLoss;
        return $this;
    }

    public function getUpstreamPacketLoss() {
        return $this->upstreamPacketLoss;
    }

    public function setUpstreamPacketLoss(string $upstreamPacketLoss) {
        $this->upstreamPacketLoss = $upstreamPacketLoss;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'downstream_bindwidth' => 'string',
        'downstream_packet_loss' => 'string',
        'network_delay' => 'string',
        'upstream_bindwidth' => 'string',
        'upstream_packet_loss' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'downstream_bindwidth' => null,
        'downstream_packet_loss' => null,
        'network_delay' => null,
        'upstream_bindwidth' => null,
        'upstream_packet_loss' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'downstream_bindwidth' => false,
        'downstream_packet_loss' => false,
        'network_delay' => false,
        'upstream_bindwidth' => false,
        'upstream_packet_loss' => false
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
        'downstream_bindwidth' => 'downstream_bindwidth',
        'downstream_packet_loss' => 'downstream_packet_loss',
        'network_delay' => 'network_delay',
        'upstream_bindwidth' => 'upstream_bindwidth',
        'upstream_packet_loss' => 'upstream_packet_loss'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'downstream_bindwidth' => 'setDownstreamBindwidth',
        'downstream_packet_loss' => 'setDownstreamPacketLoss',
        'network_delay' => 'setNetworkDelay',
        'upstream_bindwidth' => 'setUpstreamBindwidth',
        'upstream_packet_loss' => 'setUpstreamPacketLoss'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'downstream_bindwidth' => 'getDownstreamBindwidth',
        'downstream_packet_loss' => 'getDownstreamPacketLoss',
        'network_delay' => 'getNetworkDelay',
        'upstream_bindwidth' => 'getUpstreamBindwidth',
        'upstream_packet_loss' => 'getUpstreamPacketLoss'
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
            'downstream_bindwidth' => $this->downstreamBindwidth,
            'downstream_packet_loss' => $this->downstreamPacketLoss,
            'network_delay' => $this->networkDelay,
            'upstream_bindwidth' => $this->upstreamBindwidth,
            'upstream_packet_loss' => $this->upstreamPacketLoss,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

