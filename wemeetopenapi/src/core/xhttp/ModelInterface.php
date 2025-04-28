<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.2
 */
namespace wemeet\openapi\core\xhttp;


interface ModelInterface
{

    /**
     * 属性到类型映射的数组。用于（反）序列化
     */
    public static function openAPITypes();

    /**
     * 属性到格式映射的数组。用于（反）序列化
     */
    public static function openAPIFormats();

    /**
     * 属性数组，其中键是本地名称，值是原始名称
     */
    public static function attributeMap();

    /**
     * 设置函数的属性数组（用于响应的反序列化）
     */
    public static function setters();

    /**
     * 获取函数的属性数组（用于序列化请求
     */
    public static function getters();

    /**
     * 检查属性是否可空
     */
    public static function isNullable(string $property): bool;

    /**
     * 检查可空属性是否设置为空。
     */
    public function isNullableSetToNull(string $property): bool;
}
