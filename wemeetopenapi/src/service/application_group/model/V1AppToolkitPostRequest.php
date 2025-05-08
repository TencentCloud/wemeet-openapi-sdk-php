<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.4
 */
namespace wemeet\openapi\service\application_group\model;

use wemeet\openapi\core\xhttp\ModelInterface;


class V1AppToolkitPostRequest implements ModelInterface, \JsonSerializable
{
    /**
     * 用户的终端设备类型： 1 - PC 2 - Mac 3 - Android 4 - iOS 5 - Web 6 - iPad 7 - Android Pad 8 - 小程序
    * 类型：
     */
    protected $instanceid;
    /**
     * 会议id
    * 类型：
     */
    protected $meetingId;
    /**
     * 工具箱应用列表
    * 类型：V1AppToolkitPostRequestToolListInner
     */
    protected $toolList;
    /**
     * 调用方用于标示用户的唯一 ID（企业内部请使用企业唯一用户标识；OAuth2.0鉴权用户请使用openId） 企业唯一用户标识说明： 1、 企业对接SSO时使用的员工唯一标识ID 2、 企业调用创建用户接口时传递的userid参数
    * 类型：
     */
    protected $userid;

    /**
     * 自动打开应用的id
    * 类型：string
     */
    protected $autoOpenSdkid = null;

    /**
     * 外显在会中工具栏的应用id（需要保证在tool_list列表中，且列表中的可见范围对此设置也生效）
    * 类型：string
     */
    protected $toolbarSdkid = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['instanceid'])) {
            $this->instanceid = $jsonArray['instanceid'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter instanceid');
        }
        if (isset($jsonArray['meeting_id'])) {
            $this->meetingId = $jsonArray['meeting_id'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter meeting_id');
        }
        if (isset($jsonArray['tool_list'])) {
            $this->toolList = $jsonArray['tool_list'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter tool_list');
        }
        if (isset($jsonArray['userid'])) {
            $this->userid = $jsonArray['userid'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter userid');
        }
        if (isset($jsonArray['auto_open_sdkid'])) {
            $this->autoOpenSdkid = $jsonArray['auto_open_sdkid'];
        }
        if (isset($jsonArray['toolbar_sdkid'])) {
            $this->toolbarSdkid = $jsonArray['toolbar_sdkid'];
        }
    }

    public function autoOpenSdkid(string $autoOpenSdkid): V1AppToolkitPostRequest {
        $this->autoOpenSdkid = $autoOpenSdkid;
        return $this;
    }

    public function getAutoOpenSdkid() {
        return $this->autoOpenSdkid;
    }

    public function setAutoOpenSdkid(string $autoOpenSdkid) {
        $this->autoOpenSdkid = $autoOpenSdkid;
    }
    public function instanceid(int $instanceid): V1AppToolkitPostRequest {
        $this->instanceid = $instanceid;
        return $this;
    }

    public function getInstanceid() {
        return $this->instanceid;
    }

    public function setInstanceid(int $instanceid) {
        $this->instanceid = $instanceid;
    }
    public function meetingId(string $meetingId): V1AppToolkitPostRequest {
        $this->meetingId = $meetingId;
        return $this;
    }

    public function getMeetingId() {
        return $this->meetingId;
    }

    public function setMeetingId(string $meetingId) {
        $this->meetingId = $meetingId;
    }
    public function toolList(array $toolList): V1AppToolkitPostRequest {
        $this->toolList = $toolList;
        return $this;
    }

    public function getToolList() {
        return $this->toolList;
    }

    public function setToolList(array $toolList) {
        $this->toolList = $toolList;
    }
    public function toolbarSdkid(string $toolbarSdkid): V1AppToolkitPostRequest {
        $this->toolbarSdkid = $toolbarSdkid;
        return $this;
    }

    public function getToolbarSdkid() {
        return $this->toolbarSdkid;
    }

    public function setToolbarSdkid(string $toolbarSdkid) {
        $this->toolbarSdkid = $toolbarSdkid;
    }
    public function userid(string $userid): V1AppToolkitPostRequest {
        $this->userid = $userid;
        return $this;
    }

    public function getUserid() {
        return $this->userid;
    }

    public function setUserid(string $userid) {
        $this->userid = $userid;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'auto_open_sdkid' => 'string',
        'instanceid' => 'int',
        'meeting_id' => 'string',
        'tool_list' => '\wemeet\openapi\service\application_group\model\V1AppToolkitPostRequestToolListInner[]',
        'toolbar_sdkid' => 'string',
        'userid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'auto_open_sdkid' => null,
        'instanceid' => 'int64',
        'meeting_id' => null,
        'tool_list' => null,
        'toolbar_sdkid' => null,
        'userid' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'auto_open_sdkid' => false,
        'instanceid' => false,
        'meeting_id' => false,
        'tool_list' => false,
        'toolbar_sdkid' => false,
        'userid' => false
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
        'auto_open_sdkid' => 'auto_open_sdkid',
        'instanceid' => 'instanceid',
        'meeting_id' => 'meeting_id',
        'tool_list' => 'tool_list',
        'toolbar_sdkid' => 'toolbar_sdkid',
        'userid' => 'userid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'auto_open_sdkid' => 'setAutoOpenSdkid',
        'instanceid' => 'setInstanceid',
        'meeting_id' => 'setMeetingId',
        'tool_list' => 'setToolList',
        'toolbar_sdkid' => 'setToolbarSdkid',
        'userid' => 'setUserid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'auto_open_sdkid' => 'getAutoOpenSdkid',
        'instanceid' => 'getInstanceid',
        'meeting_id' => 'getMeetingId',
        'tool_list' => 'getToolList',
        'toolbar_sdkid' => 'getToolbarSdkid',
        'userid' => 'getUserid'
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
            'auto_open_sdkid' => $this->autoOpenSdkid,
            'instanceid' => $this->instanceid,
            'meeting_id' => $this->meetingId,
            'tool_list' => $this->toolList,
            'toolbar_sdkid' => $this->toolbarSdkid,
            'userid' => $this->userid,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

