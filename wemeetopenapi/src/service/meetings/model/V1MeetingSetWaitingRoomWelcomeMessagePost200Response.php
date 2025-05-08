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


class V1MeetingSetWaitingRoomWelcomeMessagePost200Response implements ModelInterface, \JsonSerializable
{

    /**
     * 是否开启等候室欢迎语能力。
    * 类型：bool
     */
    protected $enableWelcome = null;

    /**
     * 欢迎语，文本类型，最大长度1000字符。欢迎语中如果传入占位符%NICKNAME%（大小写敏感），则该占位符会被替换为被私聊用户的会中昵称。一条消息中支持多个占位符。
    * 类型：string
     */
    protected $welcomeText = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['enable_welcome'])) {
            $this->enableWelcome = $jsonArray['enable_welcome'];
        }
        if (isset($jsonArray['welcome_text'])) {
            $this->welcomeText = $jsonArray['welcome_text'];
        }
    }

    public function enableWelcome(bool $enableWelcome): V1MeetingSetWaitingRoomWelcomeMessagePost200Response {
        $this->enableWelcome = $enableWelcome;
        return $this;
    }

    public function getEnableWelcome() {
        return $this->enableWelcome;
    }

    public function setEnableWelcome(bool $enableWelcome) {
        $this->enableWelcome = $enableWelcome;
    }
    public function welcomeText(string $welcomeText): V1MeetingSetWaitingRoomWelcomeMessagePost200Response {
        $this->welcomeText = $welcomeText;
        return $this;
    }

    public function getWelcomeText() {
        return $this->welcomeText;
    }

    public function setWelcomeText(string $welcomeText) {
        $this->welcomeText = $welcomeText;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'enable_welcome' => 'bool',
        'welcome_text' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'enable_welcome' => null,
        'welcome_text' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'enable_welcome' => false,
        'welcome_text' => false
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
        'enable_welcome' => 'enable_welcome',
        'welcome_text' => 'welcome_text'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'enable_welcome' => 'setEnableWelcome',
        'welcome_text' => 'setWelcomeText'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'enable_welcome' => 'getEnableWelcome',
        'welcome_text' => 'getWelcomeText'
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
            'enable_welcome' => $this->enableWelcome,
            'welcome_text' => $this->welcomeText,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

