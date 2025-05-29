<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.5
 */
namespace wemeet\openapi\core;


class Version {

    // Version SDK 版本
    public $version = "openapi-sdk-php/v1.0.5";

    public function getVersion() {
        return $this->version;
    }
}