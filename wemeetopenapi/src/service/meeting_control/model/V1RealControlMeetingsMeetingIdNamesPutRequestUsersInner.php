<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.4
 */
namespace wemeet\openapi\service\meeting_control\model;

use wemeet\openapi\core\xhttp\ModelInterface;


class V1RealControlMeetingsMeetingIdNamesPutRequestUsersInner implements ModelInterface, \JsonSerializable
{
    /**
     * 用户的终端设备类型： 1：PC 2：Mac 3：Android 4：iOS 5：Web 6：iPad 7：Android Pad 8：小程序 9：voip、sip 设备 10：linux 20：Rooms for Touch Windows 21：Rooms for Touch Mac 22：Rooms for Touch Android 30：Controller for Touch Windows 32：Controller for Touch Android 33：Controller for Touch Iphone
    * 类型：
     */
    protected $instanceid;
    /**
     * 被操作者ms_open_id
    * 类型：
     */
    protected $msOpenId;

    /**
     * 要修改的昵称名，限制20个字符。
    * 类型：string
     */
    protected $nickName = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['instanceid'])) {
            $this->instanceid = $jsonArray['instanceid'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter instanceid');
        }
        if (isset($jsonArray['ms_open_id'])) {
            $this->msOpenId = $jsonArray['ms_open_id'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter ms_open_id');
        }
        if (isset($jsonArray['nick_name'])) {
            $this->nickName = $jsonArray['nick_name'];
        }
    }

    public function instanceid(int $instanceid): V1RealControlMeetingsMeetingIdNamesPutRequestUsersInner {
        $this->instanceid = $instanceid;
        return $this;
    }

    public function getInstanceid() {
        return $this->instanceid;
    }

    public function setInstanceid(int $instanceid) {
        $this->instanceid = $instanceid;
    }
    public function msOpenId(string $msOpenId): V1RealControlMeetingsMeetingIdNamesPutRequestUsersInner {
        $this->msOpenId = $msOpenId;
        return $this;
    }

    public function getMsOpenId() {
        return $this->msOpenId;
    }

    public function setMsOpenId(string $msOpenId) {
        $this->msOpenId = $msOpenId;
    }
    public function nickName(string $nickName): V1RealControlMeetingsMeetingIdNamesPutRequestUsersInner {
        $this->nickName = $nickName;
        return $this;
    }

    public function getNickName() {
        return $this->nickName;
    }

    public function setNickName(string $nickName) {
        $this->nickName = $nickName;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'instanceid' => 'int',
        'ms_open_id' => 'string',
        'nick_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'instanceid' => 'int64',
        'ms_open_id' => null,
        'nick_name' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'instanceid' => false,
        'ms_open_id' => false,
        'nick_name' => false
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
        'instanceid' => 'instanceid',
        'ms_open_id' => 'ms_open_id',
        'nick_name' => 'nick_name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'instanceid' => 'setInstanceid',
        'ms_open_id' => 'setMsOpenId',
        'nick_name' => 'setNickName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'instanceid' => 'getInstanceid',
        'ms_open_id' => 'getMsOpenId',
        'nick_name' => 'getNickName'
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
            'instanceid' => $this->instanceid,
            'ms_open_id' => $this->msOpenId,
            'nick_name' => $this->nickName,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

