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


class V1MeetingsGet200Response implements ModelInterface, \JsonSerializable
{

    /**
    * 类型：\wemeet\openapi\service\meetings\model\V1MeetingsGet200ResponseMeetingInfoListInner[]
     */
    protected $meetingInfoList = null;

    /**
     * 会议数量。
    * 类型：int
     */
    protected $meetingNumber = null;

    /**
     * 分页获取用户会议列表，查询的会议的最后一次修改时间值，UNIX 毫秒级时间戳，分页游标。 因目前一次查询返回会议数量最多为20，当用户会议较多时，如果会议总数量超过20，则需要再次查询。此参数为非必选参数，默认值为0，表示第一次查询利用会议开始时间北京时间当日零点进行查询。 查询返回输出参数“remaining”不为0时，表示还有会议需要继续查询。返回参数“next_cursory”的值即为下一次查询的 cursory 的值。 多次调用该查询接口直到输出参数“remaining”值为0。 当只使用 pos 作为分页条件时,可能会出现查询不到第二页,数据排序出现重复数据等情况与 pos 配合使用。
    * 类型：int
     */
    protected $nextCursory = null;

    /**
     * 下次查询时请求里需要携带的 pos 参数。
    * 类型：int
     */
    protected $nextPos = null;

    /**
     * 是否还剩下会议；因目前一次查询返回会议数量最多为20，如果会议总数量超过20则此字段被置为非0，表示需要再次查询，且下次查询的“pos”参数需从本次响应的“next_pos”字段取值
    * 类型：int
     */
    protected $remaining = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['meeting_info_list'])) {
            $this->meetingInfoList = $jsonArray['meeting_info_list'];
        }
        if (isset($jsonArray['meeting_number'])) {
            $this->meetingNumber = $jsonArray['meeting_number'];
        }
        if (isset($jsonArray['next_cursory'])) {
            $this->nextCursory = $jsonArray['next_cursory'];
        }
        if (isset($jsonArray['next_pos'])) {
            $this->nextPos = $jsonArray['next_pos'];
        }
        if (isset($jsonArray['remaining'])) {
            $this->remaining = $jsonArray['remaining'];
        }
    }

    public function meetingInfoList(array $meetingInfoList): V1MeetingsGet200Response {
        $this->meetingInfoList = $meetingInfoList;
        return $this;
    }

    public function getMeetingInfoList() {
        return $this->meetingInfoList;
    }

    public function setMeetingInfoList(array $meetingInfoList) {
        $this->meetingInfoList = $meetingInfoList;
    }
    public function meetingNumber(int $meetingNumber): V1MeetingsGet200Response {
        $this->meetingNumber = $meetingNumber;
        return $this;
    }

    public function getMeetingNumber() {
        return $this->meetingNumber;
    }

    public function setMeetingNumber(int $meetingNumber) {
        $this->meetingNumber = $meetingNumber;
    }
    public function nextCursory(int $nextCursory): V1MeetingsGet200Response {
        $this->nextCursory = $nextCursory;
        return $this;
    }

    public function getNextCursory() {
        return $this->nextCursory;
    }

    public function setNextCursory(int $nextCursory) {
        $this->nextCursory = $nextCursory;
    }
    public function nextPos(int $nextPos): V1MeetingsGet200Response {
        $this->nextPos = $nextPos;
        return $this;
    }

    public function getNextPos() {
        return $this->nextPos;
    }

    public function setNextPos(int $nextPos) {
        $this->nextPos = $nextPos;
    }
    public function remaining(int $remaining): V1MeetingsGet200Response {
        $this->remaining = $remaining;
        return $this;
    }

    public function getRemaining() {
        return $this->remaining;
    }

    public function setRemaining(int $remaining) {
        $this->remaining = $remaining;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'meeting_info_list' => '\wemeet\openapi\service\meetings\model\V1MeetingsGet200ResponseMeetingInfoListInner[]',
        'meeting_number' => 'int',
        'next_cursory' => 'int',
        'next_pos' => 'int',
        'remaining' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'meeting_info_list' => null,
        'meeting_number' => 'int64',
        'next_cursory' => 'int64',
        'next_pos' => 'int64',
        'remaining' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'meeting_info_list' => false,
        'meeting_number' => false,
        'next_cursory' => false,
        'next_pos' => false,
        'remaining' => false
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
        'meeting_info_list' => 'meeting_info_list',
        'meeting_number' => 'meeting_number',
        'next_cursory' => 'next_cursory',
        'next_pos' => 'next_pos',
        'remaining' => 'remaining'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'meeting_info_list' => 'setMeetingInfoList',
        'meeting_number' => 'setMeetingNumber',
        'next_cursory' => 'setNextCursory',
        'next_pos' => 'setNextPos',
        'remaining' => 'setRemaining'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'meeting_info_list' => 'getMeetingInfoList',
        'meeting_number' => 'getMeetingNumber',
        'next_cursory' => 'getNextCursory',
        'next_pos' => 'getNextPos',
        'remaining' => 'getRemaining'
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
            'meeting_info_list' => $this->meetingInfoList,
            'meeting_number' => $this->meetingNumber,
            'next_cursory' => $this->nextCursory,
            'next_pos' => $this->nextPos,
            'remaining' => $this->remaining,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

