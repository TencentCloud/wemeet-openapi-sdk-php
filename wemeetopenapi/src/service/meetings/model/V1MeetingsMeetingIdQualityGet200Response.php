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


class V1MeetingsMeetingIdQualityGet200Response implements ModelInterface, \JsonSerializable
{

    /**
     * 音频质量：0-无数据，1-好、2-较好、3-中、4-差
    * 类型：int
     */
    protected $audioQuality = null;

    /**
     * 分页查询返回当前页码
    * 类型：int
     */
    protected $currentPage = null;

    /**
     * 分页查询返回单页数据条数
    * 类型：int
     */
    protected $currentSize = null;

    /**
     * 会议的唯一 ID
    * 类型：string
     */
    protected $meetingId = null;

    /**
     * 网络质量：0-无数据，1-好、2-较好、3-中、4-差
    * 类型：int
     */
    protected $networkQuality = null;

    /**
     * 参会人员健康度对象数组（按成员入会时间正序排列，入会越早的在越上面；成员使用不同端入会时平铺返回数据，instanceid不同）
    * 类型：\wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdQualityGet200ResponseParticipantsInner[]
     */
    protected $participants = null;

    /**
     * 告警的具体问题
    * 类型：string[]
     */
    protected $problems = null;

    /**
     * 健康度：0-无数据，1-健康、2-告警
    * 类型：int
     */
    protected $quality = null;

    /**
     * 共享屏幕质量：0-无数据，1-好、2-较好、3-中、4-差
    * 类型：int
     */
    protected $screenShareQuality = null;

    /**
     * 分页查询返回数据总数
    * 类型：int
     */
    protected $totalCount = null;

    /**
     * 分页查询返回分页总数
    * 类型：int
     */
    protected $totalPage = null;

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
        if (isset($jsonArray['current_page'])) {
            $this->currentPage = $jsonArray['current_page'];
        }
        if (isset($jsonArray['current_size'])) {
            $this->currentSize = $jsonArray['current_size'];
        }
        if (isset($jsonArray['meeting_id'])) {
            $this->meetingId = $jsonArray['meeting_id'];
        }
        if (isset($jsonArray['network_quality'])) {
            $this->networkQuality = $jsonArray['network_quality'];
        }
        if (isset($jsonArray['participants'])) {
            $this->participants = $jsonArray['participants'];
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
        if (isset($jsonArray['total_count'])) {
            $this->totalCount = $jsonArray['total_count'];
        }
        if (isset($jsonArray['total_page'])) {
            $this->totalPage = $jsonArray['total_page'];
        }
        if (isset($jsonArray['video_quality'])) {
            $this->videoQuality = $jsonArray['video_quality'];
        }
    }

    public function audioQuality(int $audioQuality): V1MeetingsMeetingIdQualityGet200Response {
        $this->audioQuality = $audioQuality;
        return $this;
    }

    public function getAudioQuality() {
        return $this->audioQuality;
    }

    public function setAudioQuality(int $audioQuality) {
        $this->audioQuality = $audioQuality;
    }
    public function currentPage(int $currentPage): V1MeetingsMeetingIdQualityGet200Response {
        $this->currentPage = $currentPage;
        return $this;
    }

    public function getCurrentPage() {
        return $this->currentPage;
    }

    public function setCurrentPage(int $currentPage) {
        $this->currentPage = $currentPage;
    }
    public function currentSize(int $currentSize): V1MeetingsMeetingIdQualityGet200Response {
        $this->currentSize = $currentSize;
        return $this;
    }

    public function getCurrentSize() {
        return $this->currentSize;
    }

    public function setCurrentSize(int $currentSize) {
        $this->currentSize = $currentSize;
    }
    public function meetingId(string $meetingId): V1MeetingsMeetingIdQualityGet200Response {
        $this->meetingId = $meetingId;
        return $this;
    }

    public function getMeetingId() {
        return $this->meetingId;
    }

    public function setMeetingId(string $meetingId) {
        $this->meetingId = $meetingId;
    }
    public function networkQuality(int $networkQuality): V1MeetingsMeetingIdQualityGet200Response {
        $this->networkQuality = $networkQuality;
        return $this;
    }

    public function getNetworkQuality() {
        return $this->networkQuality;
    }

    public function setNetworkQuality(int $networkQuality) {
        $this->networkQuality = $networkQuality;
    }
    public function participants(array $participants): V1MeetingsMeetingIdQualityGet200Response {
        $this->participants = $participants;
        return $this;
    }

    public function getParticipants() {
        return $this->participants;
    }

    public function setParticipants(array $participants) {
        $this->participants = $participants;
    }
    public function problems(array $problems): V1MeetingsMeetingIdQualityGet200Response {
        $this->problems = $problems;
        return $this;
    }

    public function getProblems() {
        return $this->problems;
    }

    public function setProblems(array $problems) {
        $this->problems = $problems;
    }
    public function quality(int $quality): V1MeetingsMeetingIdQualityGet200Response {
        $this->quality = $quality;
        return $this;
    }

    public function getQuality() {
        return $this->quality;
    }

    public function setQuality(int $quality) {
        $this->quality = $quality;
    }
    public function screenShareQuality(int $screenShareQuality): V1MeetingsMeetingIdQualityGet200Response {
        $this->screenShareQuality = $screenShareQuality;
        return $this;
    }

    public function getScreenShareQuality() {
        return $this->screenShareQuality;
    }

    public function setScreenShareQuality(int $screenShareQuality) {
        $this->screenShareQuality = $screenShareQuality;
    }
    public function totalCount(int $totalCount): V1MeetingsMeetingIdQualityGet200Response {
        $this->totalCount = $totalCount;
        return $this;
    }

    public function getTotalCount() {
        return $this->totalCount;
    }

    public function setTotalCount(int $totalCount) {
        $this->totalCount = $totalCount;
    }
    public function totalPage(int $totalPage): V1MeetingsMeetingIdQualityGet200Response {
        $this->totalPage = $totalPage;
        return $this;
    }

    public function getTotalPage() {
        return $this->totalPage;
    }

    public function setTotalPage(int $totalPage) {
        $this->totalPage = $totalPage;
    }
    public function videoQuality(int $videoQuality): V1MeetingsMeetingIdQualityGet200Response {
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
        'current_page' => 'int',
        'current_size' => 'int',
        'meeting_id' => 'string',
        'network_quality' => 'int',
        'participants' => '\wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdQualityGet200ResponseParticipantsInner[]',
        'problems' => 'string[]',
        'quality' => 'int',
        'screen_share_quality' => 'int',
        'total_count' => 'int',
        'total_page' => 'int',
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
        'current_page' => 'int64',
        'current_size' => 'int64',
        'meeting_id' => null,
        'network_quality' => 'int64',
        'participants' => null,
        'problems' => null,
        'quality' => 'int64',
        'screen_share_quality' => 'int64',
        'total_count' => 'int64',
        'total_page' => 'int64',
        'video_quality' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'audio_quality' => false,
        'current_page' => false,
        'current_size' => false,
        'meeting_id' => false,
        'network_quality' => false,
        'participants' => false,
        'problems' => false,
        'quality' => false,
        'screen_share_quality' => false,
        'total_count' => false,
        'total_page' => false,
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
        'current_page' => 'current_page',
        'current_size' => 'current_size',
        'meeting_id' => 'meeting_id',
        'network_quality' => 'network_quality',
        'participants' => 'participants',
        'problems' => 'problems',
        'quality' => 'quality',
        'screen_share_quality' => 'screen_share_quality',
        'total_count' => 'total_count',
        'total_page' => 'total_page',
        'video_quality' => 'video_quality'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'audio_quality' => 'setAudioQuality',
        'current_page' => 'setCurrentPage',
        'current_size' => 'setCurrentSize',
        'meeting_id' => 'setMeetingId',
        'network_quality' => 'setNetworkQuality',
        'participants' => 'setParticipants',
        'problems' => 'setProblems',
        'quality' => 'setQuality',
        'screen_share_quality' => 'setScreenShareQuality',
        'total_count' => 'setTotalCount',
        'total_page' => 'setTotalPage',
        'video_quality' => 'setVideoQuality'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'audio_quality' => 'getAudioQuality',
        'current_page' => 'getCurrentPage',
        'current_size' => 'getCurrentSize',
        'meeting_id' => 'getMeetingId',
        'network_quality' => 'getNetworkQuality',
        'participants' => 'getParticipants',
        'problems' => 'getProblems',
        'quality' => 'getQuality',
        'screen_share_quality' => 'getScreenShareQuality',
        'total_count' => 'getTotalCount',
        'total_page' => 'getTotalPage',
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
            'current_page' => $this->currentPage,
            'current_size' => $this->currentSize,
            'meeting_id' => $this->meetingId,
            'network_quality' => $this->networkQuality,
            'participants' => $this->participants,
            'problems' => $this->problems,
            'quality' => $this->quality,
            'screen_share_quality' => $this->screenShareQuality,
            'total_count' => $this->totalCount,
            'total_page' => $this->totalPage,
            'video_quality' => $this->videoQuality,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

