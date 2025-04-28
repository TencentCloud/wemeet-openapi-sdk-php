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


class V1MeetingsMeetingIdQosGet200ResponseParticipantsInnerQosDetailsInner implements ModelInterface, \JsonSerializable
{

    /**
    * 类型：\wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdQosGet200ResponseParticipantsInnerQosDetailsInnerAudio
     */
    protected $audio = null;

    /**
     * 设备类型
    * 类型：int
     */
    protected $instanceid = null;

    /**
    * 类型：\wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdQosGet200ResponseParticipantsInnerQosDetailsInnerNetwork
     */
    protected $network = null;

    /**
    * 类型：\wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdQosGet200ResponseParticipantsInnerQosDetailsInnerShareScreen
     */
    protected $shareScreen = null;

    /**
    * 类型：\wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdQosGet200ResponseParticipantsInnerQosDetailsInnerVideo
     */
    protected $video = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['audio'])) {
            $this->audio = new V1MeetingsMeetingIdQosGet200ResponseParticipantsInnerQosDetailsInnerAudio($jsonArray['audio']);
        }
        if (isset($jsonArray['instanceid'])) {
            $this->instanceid = $jsonArray['instanceid'];
        }
        if (isset($jsonArray['network'])) {
            $this->network = new V1MeetingsMeetingIdQosGet200ResponseParticipantsInnerQosDetailsInnerNetwork($jsonArray['network']);
        }
        if (isset($jsonArray['share_screen'])) {
            $this->shareScreen = new V1MeetingsMeetingIdQosGet200ResponseParticipantsInnerQosDetailsInnerShareScreen($jsonArray['share_screen']);
        }
        if (isset($jsonArray['video'])) {
            $this->video = new V1MeetingsMeetingIdQosGet200ResponseParticipantsInnerQosDetailsInnerVideo($jsonArray['video']);
        }
    }

    public function audio(V1MeetingsMeetingIdQosGet200ResponseParticipantsInnerQosDetailsInnerAudio $audio): V1MeetingsMeetingIdQosGet200ResponseParticipantsInnerQosDetailsInner {
        $this->audio = $audio;
        return $this;
    }

    public function getAudio() {
        return $this->audio;
    }

    public function setAudio(V1MeetingsMeetingIdQosGet200ResponseParticipantsInnerQosDetailsInnerAudio $audio) {
        $this->audio = $audio;
    }
    public function instanceid(int $instanceid): V1MeetingsMeetingIdQosGet200ResponseParticipantsInnerQosDetailsInner {
        $this->instanceid = $instanceid;
        return $this;
    }

    public function getInstanceid() {
        return $this->instanceid;
    }

    public function setInstanceid(int $instanceid) {
        $this->instanceid = $instanceid;
    }
    public function network(V1MeetingsMeetingIdQosGet200ResponseParticipantsInnerQosDetailsInnerNetwork $network): V1MeetingsMeetingIdQosGet200ResponseParticipantsInnerQosDetailsInner {
        $this->network = $network;
        return $this;
    }

    public function getNetwork() {
        return $this->network;
    }

    public function setNetwork(V1MeetingsMeetingIdQosGet200ResponseParticipantsInnerQosDetailsInnerNetwork $network) {
        $this->network = $network;
    }
    public function shareScreen(V1MeetingsMeetingIdQosGet200ResponseParticipantsInnerQosDetailsInnerShareScreen $shareScreen): V1MeetingsMeetingIdQosGet200ResponseParticipantsInnerQosDetailsInner {
        $this->shareScreen = $shareScreen;
        return $this;
    }

    public function getShareScreen() {
        return $this->shareScreen;
    }

    public function setShareScreen(V1MeetingsMeetingIdQosGet200ResponseParticipantsInnerQosDetailsInnerShareScreen $shareScreen) {
        $this->shareScreen = $shareScreen;
    }
    public function video(V1MeetingsMeetingIdQosGet200ResponseParticipantsInnerQosDetailsInnerVideo $video): V1MeetingsMeetingIdQosGet200ResponseParticipantsInnerQosDetailsInner {
        $this->video = $video;
        return $this;
    }

    public function getVideo() {
        return $this->video;
    }

    public function setVideo(V1MeetingsMeetingIdQosGet200ResponseParticipantsInnerQosDetailsInnerVideo $video) {
        $this->video = $video;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'audio' => '\wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdQosGet200ResponseParticipantsInnerQosDetailsInnerAudio',
        'instanceid' => 'int',
        'network' => '\wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdQosGet200ResponseParticipantsInnerQosDetailsInnerNetwork',
        'share_screen' => '\wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdQosGet200ResponseParticipantsInnerQosDetailsInnerShareScreen',
        'video' => '\wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdQosGet200ResponseParticipantsInnerQosDetailsInnerVideo'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'audio' => null,
        'instanceid' => 'int64',
        'network' => null,
        'share_screen' => null,
        'video' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'audio' => false,
        'instanceid' => false,
        'network' => false,
        'share_screen' => false,
        'video' => false
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
        'audio' => 'audio',
        'instanceid' => 'instanceid',
        'network' => 'network',
        'share_screen' => 'share_screen',
        'video' => 'video'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'audio' => 'setAudio',
        'instanceid' => 'setInstanceid',
        'network' => 'setNetwork',
        'share_screen' => 'setShareScreen',
        'video' => 'setVideo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'audio' => 'getAudio',
        'instanceid' => 'getInstanceid',
        'network' => 'getNetwork',
        'share_screen' => 'getShareScreen',
        'video' => 'getVideo'
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
            'audio' => $this->audio,
            'instanceid' => $this->instanceid,
            'network' => $this->network,
            'share_screen' => $this->shareScreen,
            'video' => $this->video,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

