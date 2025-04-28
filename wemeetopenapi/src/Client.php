<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.2
 */
namespace wemeet\openapi;

use GuzzleHttp\Client as GuzzleClient;
use wemeet\openapi\core\Configuration;
use wemeet\openapi\core\Constant;
use wemeet\openapi\core\xhttp\DefaultHttpClient;
use wemeet\openapi\service\meetings\api\MeetingsApi;
use wemeet\openapi\service\application_group\api\ApplicationGroupApi;
use wemeet\openapi\service\meeting_control\api\MeetingControlApi;
use wemeet\openapi\service\user_manager\api\UserManagerApi;
use wemeet\openapi\service\records\api\RecordsApi;
use wemeet\openapi\service\record_intelligence\api\RecordIntelligenceApi;
use wemeet\openapi\service\meeting_guest\api\MeetingGuestApi;
use wemeet\openapi\service\pstn\api\PstnApi;
use wemeet\openapi\service\meeting_room\api\MeetingRoomApi;
use wemeet\openapi\service\layout\api\LayoutApi;


class Client {
    protected Configuration $config;
    private MeetingsApi $meetings;
    private ApplicationGroupApi $application_group;
    private MeetingControlApi $meeting_control;
    private UserManagerApi $user_manager;
    private RecordsApi $records;
    private RecordIntelligenceApi $record_intelligence;
    private MeetingGuestApi $meeting_guest;
    private PstnApi $pstn;
    private MeetingRoomApi $meeting_room;
    private LayoutApi $layout;

    public function getConfig() {
        return $this->config;
    }

    public function build($createClient = true) {
        // 构建配置
        $this->config = new Configuration();
        // 构建 wemeet http client
        if ($createClient) {
            $defaultHttpClient = new DefaultHttpClient(Constant::OPEN_API_DOMAIN);
            $defaultHttpClient = $defaultHttpClient->withProtocol(Constant::DEFAULT_PROTOCOL)
                ->withHttpClient(new GuzzleClient());
            $this->config->setClt($defaultHttpClient);
        }
        // 注册服务
        $this->meetings = new MeetingsApi($this->config);
        $this->application_group = new ApplicationGroupApi($this->config);
        $this->meeting_control = new MeetingControlApi($this->config);
        $this->user_manager = new UserManagerApi($this->config);
        $this->records = new RecordsApi($this->config);
        $this->record_intelligence = new RecordIntelligenceApi($this->config);
        $this->meeting_guest = new MeetingGuestApi($this->config);
        $this->pstn = new PstnApi($this->config);
        $this->meeting_room = new MeetingRoomApi($this->config);
        $this->layout = new LayoutApi($this->config);
        return $this;
    }

    public function Meetings() {
        return $this->meetings;
    }
    public function ApplicationGroup() {
        return $this->application_group;
    }
    public function MeetingControl() {
        return $this->meeting_control;
    }
    public function UserManager() {
        return $this->user_manager;
    }
    public function Records() {
        return $this->records;
    }
    public function RecordIntelligence() {
        return $this->record_intelligence;
    }
    public function MeetingGuest() {
        return $this->meeting_guest;
    }
    public function Pstn() {
        return $this->pstn;
    }
    public function MeetingRoom() {
        return $this->meeting_room;
    }
    public function Layout() {
        return $this->layout;
    }

    /*
    * WithAppId 腾讯会议分配给企业的企业 ID。
    *
    * 企业管理员可以登录 腾讯会议官网，单击右上角用户中心，在左侧菜单栏中的企业管理 > 账户管理 > 账户信息中进行查看。
    *
    * 开发者可以单击右上角用户中心，在左侧菜单栏中的企业管理 > 高级 > REST API 应用信息中查看。
    */
    public function withAppId(string $appId) {
        $this->config->setAppId($appId);
        return $this;
    }

    // WithSecret 设置应用生成的 Secret ID 和 Secret Key。JWT 鉴权用。
    public function withSecret(string $secretId, string $secretKey) {
        $this->config->setSecretId($secretId);
        $this->config->setSecretKey($secretKey);
        return $this;
    }

    public function withVersion(string $version) {
        $this->config->setVersion($version);
        return $this;
    }

    /*
    * WithSdkId 设置用户子账号或开发的应用 ID。
    *
    * 企业管理员可以登录 腾讯会议官网，单击右上角用户中心，
    * 在左侧菜单栏中的企业管理 > 高级 > REST API 中进行查看（如存在 SdkId 则必须填写，早期申请 API 且未分配 SdkId 的客户可不填写）。
    */
    public function withSdkId(string $sdkId) {
        $this->config->setSdkId($sdkId);
        return $this;
    }
}