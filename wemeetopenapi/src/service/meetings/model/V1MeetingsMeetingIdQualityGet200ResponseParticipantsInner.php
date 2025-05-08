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


class V1MeetingsMeetingIdQualityGet200ResponseParticipantsInner implements ModelInterface, \JsonSerializable
{

    /**
     * 音频质量：0-无数据，1-好、2-较好、3-中、4-差
    * 类型：int
     */
    protected $audioQuality = null;

    /**
     * 用户的终端设备类型： 0：PSTN 1：PC 2：Mac 3：Android 4：iOS 5：Web 6：iPad 7：Android Pad 8：小程序 9：voip、sip 设备 10：linux 20：Rooms for Touch Windows 21：Rooms for Touch MacOS 22：Rooms for Touch Android 30：Controller for Touch Windows 32：Controller for Touch Android 33：Controller for Touch iOS
    * 类型：string
     */
    protected $instanceid = null;

    /**
     * 当场会议的用户临时 ID，可用于会控操作，适用于所有用户。
    * 类型：string
     */
    protected $msOpenId = null;

    /**
     * 网络质量：0-无数据，1-好、2-较好、3-中、4-差
    * 类型：int
     */
    protected $networkQuality = null;

    /**
     * OAuth2.0 鉴权用户请使用 open_id。
    * 类型：string
     */
    protected $openId = null;

    /**
     * 告警的具体问题
    * 类型：string[]
     */
    protected $problems = null;

    /**
     * 用户健康度：0-无数据，1-健康、2-告警
    * 类型：int
     */
    protected $quality = null;

    /**
     * 共享屏幕质量：0-无数据，1-好、2-较好、3-中、4-差
    * 类型：int
     */
    protected $screenShareQuality = null;

    /**
     * 同企业内部请使用企业唯一用户标识； 其他企业，个人，小程序没有 。
    * 类型：string
     */
    protected $userid = null;

    /**
     * 视频质量：0-无数据，1-好、2-较好、3-中、4-差
    * 类型：int
     */
    protected $videoQuality = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['audio_quality'])) {
            $this->audioQuality = $jsonArray['audio_quality'];
        }
        if (isset($jsonArray['instanceid'])) {
            $this->instanceid = $jsonArray['instanceid'];
        }
        if (isset($jsonArray['ms_open_id'])) {
            $this->msOpenId = $jsonArray['ms_open_id'];
        }
        if (isset($jsonArray['network_quality'])) {
            $this->networkQuality = $jsonArray['network_quality'];
        }
        if (isset($jsonArray['open_id'])) {
            $this->openId = $jsonArray['open_id'];
        }
        if (isset($jsonArray['problems'])) {
            $this->problems = $jsonArray['problems'];
        }
        if (isset($jsonArray['quality'])) {
            $this->quality = $jsonArray['quality'];
        }
        if (isset($jsonArray['screen_share_quality'])) {
            $this->screenShareQuality = $jsonArray['screen_share_quality'];
        }
        if (isset($jsonArray['userid'])) {
            $this->userid = $jsonArray['userid'];
        }
        if (isset($jsonArray['video_quality'])) {
            $this->videoQuality = $jsonArray['video_quality'];
        }
    }

    public function audioQuality(int $audioQuality): V1MeetingsMeetingIdQualityGet200ResponseParticipantsInner {
        $this->audioQuality = $audioQuality;
        return $this;
    }

    public function getAudioQuality() {
        return $this->audioQuality;
    }

    public function setAudioQuality(int $audioQuality) {
        $this->audioQuality = $audioQuality;
    }
    public function instanceid(string $instanceid): V1MeetingsMeetingIdQualityGet200ResponseParticipantsInner {
        $this->instanceid = $instanceid;
        return $this;
    }

    public function getInstanceid() {
        return $this->instanceid;
    }

    public function setInstanceid(string $instanceid) {
        $this->instanceid = $instanceid;
    }
    public function msOpenId(string $msOpenId): V1MeetingsMeetingIdQualityGet200ResponseParticipantsInner {
        $this->msOpenId = $msOpenId;
        return $this;
    }

    public function getMsOpenId() {
        return $this->msOpenId;
    }

    public function setMsOpenId(string $msOpenId) {
        $this->msOpenId = $msOpenId;
    }
    public function networkQuality(int $networkQuality): V1MeetingsMeetingIdQualityGet200ResponseParticipantsInner {
        $this->networkQuality = $networkQuality;
        return $this;
    }

    public function getNetworkQuality() {
        return $this->networkQuality;
    }

    public function setNetworkQuality(int $networkQuality) {
        $this->networkQuality = $networkQuality;
    }
    public function openId(string $openId): V1MeetingsMeetingIdQualityGet200ResponseParticipantsInner {
        $this->openId = $openId;
        return $this;
    }

    public function getOpenId() {
        return $this->openId;
    }

    public function setOpenId(string $openId) {
        $this->openId = $openId;
    }
    public function problems(array $problems): V1MeetingsMeetingIdQualityGet200ResponseParticipantsInner {
        $this->problems = $problems;
        return $this;
    }

    public function getProblems() {
        return $this->problems;
    }

    public function setProblems(array $problems) {
        $this->problems = $problems;
    }
    public function quality(int $quality): V1MeetingsMeetingIdQualityGet200ResponseParticipantsInner {
        $this->quality = $quality;
        return $this;
    }

    public function getQuality() {
        return $this->quality;
    }

    public function setQuality(int $quality) {
        $this->quality = $quality;
    }
    public function screenShareQuality(int $screenShareQuality): V1MeetingsMeetingIdQualityGet200ResponseParticipantsInner {
        $this->screenShareQuality = $screenShareQuality;
        return $this;
    }

    public function getScreenShareQuality() {
        return $this->screenShareQuality;
    }

    public function setScreenShareQuality(int $screenShareQuality) {
        $this->screenShareQuality = $screenShareQuality;
    }
    public function userid(string $userid): V1MeetingsMeetingIdQualityGet200ResponseParticipantsInner {
        $this->userid = $userid;
        return $this;
    }

    public function getUserid() {
        return $this->userid;
    }

    public function setUserid(string $userid) {
        $this->userid = $userid;
    }
    public function videoQuality(int $videoQuality): V1MeetingsMeetingIdQualityGet200ResponseParticipantsInner {
        $this->videoQuality = $videoQuality;
        return $this;
    }

    public function getVideoQuality() {
        return $this->videoQuality;
    }

    public function setVideoQuality(int $videoQuality) {
        $this->videoQuality = $videoQuality;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'audio_quality' => 'int',
        'instanceid' => 'string',
        'ms_open_id' => 'string',
        'network_quality' => 'int',
        'open_id' => 'string',
        'problems' => 'string[]',
        'quality' => 'int',
        'screen_share_quality' => 'int',
        'userid' => 'string',
        'video_quality' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'audio_quality' => 'int64',
        'instanceid' => null,
        'ms_open_id' => null,
        'network_quality' => 'int64',
        'open_id' => null,
        'problems' => null,
        'quality' => 'int64',
        'screen_share_quality' => 'int64',
        'userid' => null,
        'video_quality' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'audio_quality' => false,
        'instanceid' => false,
        'ms_open_id' => false,
        'network_quality' => false,
        'open_id' => false,
        'problems' => false,
        'quality' => false,
        'screen_share_quality' => false,
        'userid' => false,
        'video_quality' => false
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
        'audio_quality' => 'audio_quality',
        'instanceid' => 'instanceid',
        'ms_open_id' => 'ms_open_id',
        'network_quality' => 'network_quality',
        'open_id' => 'open_id',
        'problems' => 'problems',
        'quality' => 'quality',
        'screen_share_quality' => 'screen_share_quality',
        'userid' => 'userid',
        'video_quality' => 'video_quality'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'audio_quality' => 'setAudioQuality',
        'instanceid' => 'setInstanceid',
        'ms_open_id' => 'setMsOpenId',
        'network_quality' => 'setNetworkQuality',
        'open_id' => 'setOpenId',
        'problems' => 'setProblems',
        'quality' => 'setQuality',
        'screen_share_quality' => 'setScreenShareQuality',
        'userid' => 'setUserid',
        'video_quality' => 'setVideoQuality'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'audio_quality' => 'getAudioQuality',
        'instanceid' => 'getInstanceid',
        'ms_open_id' => 'getMsOpenId',
        'network_quality' => 'getNetworkQuality',
        'open_id' => 'getOpenId',
        'problems' => 'getProblems',
        'quality' => 'getQuality',
        'screen_share_quality' => 'getScreenShareQuality',
        'userid' => 'getUserid',
        'video_quality' => 'getVideoQuality'
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
            'audio_quality' => $this->audioQuality,
            'instanceid' => $this->instanceid,
            'ms_open_id' => $this->msOpenId,
            'network_quality' => $this->networkQuality,
            'open_id' => $this->openId,
            'problems' => $this->problems,
            'quality' => $this->quality,
            'screen_share_quality' => $this->screenShareQuality,
            'userid' => $this->userid,
            'video_quality' => $this->videoQuality,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

