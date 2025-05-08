<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.4
 */
namespace wemeet\openapi\service\meeting_room\model;

use wemeet\openapi\core\xhttp\ModelInterface;


class V1MeetingsMeetingIdBookRoomsPostRequest implements ModelInterface, \JsonSerializable
{
    /**
     * 会议室ID列表
    * 类型：
     */
    protected $meetingRoomIdList;
    /**
    * 类型：
     */
    protected $operatorId;
    /**
    * 类型：
     */
    protected $operatorIdType;

    /**
     * true：在会议开始前的一小时内，在 Room 上显示会议主题。默认值为 true。 false：在会议开始前的一小时内，在 Room 上不显示会议主题。 说明：该参数并不影响预定时间晚过当前时间一个小时以上的会议。超过一小时的会议默认不显示会议主题。
    * 类型：bool
     */
    protected $subjectVisible = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['meeting_room_id_list'])) {
            $this->meetingRoomIdList = $jsonArray['meeting_room_id_list'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter meeting_room_id_list');
        }
        if (isset($jsonArray['operator_id'])) {
            $this->operatorId = $jsonArray['operator_id'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter operator_id');
        }
        if (isset($jsonArray['operator_id_type'])) {
            $this->operatorIdType = $jsonArray['operator_id_type'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter operator_id_type');
        }
        if (isset($jsonArray['subject_visible'])) {
            $this->subjectVisible = $jsonArray['subject_visible'];
        }
    }

    public function meetingRoomIdList(array $meetingRoomIdList): V1MeetingsMeetingIdBookRoomsPostRequest {
        $this->meetingRoomIdList = $meetingRoomIdList;
        return $this;
    }

    public function getMeetingRoomIdList() {
        return $this->meetingRoomIdList;
    }

    public function setMeetingRoomIdList(array $meetingRoomIdList) {
        $this->meetingRoomIdList = $meetingRoomIdList;
    }
    public function operatorId(string $operatorId): V1MeetingsMeetingIdBookRoomsPostRequest {
        $this->operatorId = $operatorId;
        return $this;
    }

    public function getOperatorId() {
        return $this->operatorId;
    }

    public function setOperatorId(string $operatorId) {
        $this->operatorId = $operatorId;
    }
    public function operatorIdType(int $operatorIdType): V1MeetingsMeetingIdBookRoomsPostRequest {
        $this->operatorIdType = $operatorIdType;
        return $this;
    }

    public function getOperatorIdType() {
        return $this->operatorIdType;
    }

    public function setOperatorIdType(int $operatorIdType) {
        $this->operatorIdType = $operatorIdType;
    }
    public function subjectVisible(bool $subjectVisible): V1MeetingsMeetingIdBookRoomsPostRequest {
        $this->subjectVisible = $subjectVisible;
        return $this;
    }

    public function getSubjectVisible() {
        return $this->subjectVisible;
    }

    public function setSubjectVisible(bool $subjectVisible) {
        $this->subjectVisible = $subjectVisible;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'meeting_room_id_list' => 'string[]',
        'operator_id' => 'string',
        'operator_id_type' => 'int',
        'subject_visible' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'meeting_room_id_list' => null,
        'operator_id' => null,
        'operator_id_type' => 'int64',
        'subject_visible' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'meeting_room_id_list' => false,
        'operator_id' => false,
        'operator_id_type' => false,
        'subject_visible' => false
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
        'meeting_room_id_list' => 'meeting_room_id_list',
        'operator_id' => 'operator_id',
        'operator_id_type' => 'operator_id_type',
        'subject_visible' => 'subject_visible'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'meeting_room_id_list' => 'setMeetingRoomIdList',
        'operator_id' => 'setOperatorId',
        'operator_id_type' => 'setOperatorIdType',
        'subject_visible' => 'setSubjectVisible'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'meeting_room_id_list' => 'getMeetingRoomIdList',
        'operator_id' => 'getOperatorId',
        'operator_id_type' => 'getOperatorIdType',
        'subject_visible' => 'getSubjectVisible'
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
            'meeting_room_id_list' => $this->meetingRoomIdList,
            'operator_id' => $this->operatorId,
            'operator_id_type' => $this->operatorIdType,
            'subject_visible' => $this->subjectVisible,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

