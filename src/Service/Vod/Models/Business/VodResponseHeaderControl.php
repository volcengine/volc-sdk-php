<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/business/vod_cdn.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * HTTP响应头设置
 *
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.VodResponseHeaderControl</code>
 */
class VodResponseHeaderControl extends \Google\Protobuf\Internal\Message
{
    /**
     * 表示 HTTP 响应头配置模块。该功能默认为禁用
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodResponseHeaderRule ResponseHeader = 1;</code>
     */
    private $ResponseHeader;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Volc\Service\Vod\Models\Business\VodResponseHeaderRule[]|\Google\Protobuf\Internal\RepeatedField $ResponseHeader
     *           表示 HTTP 响应头配置模块。该功能默认为禁用
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodCdn::initOnce();
        parent::__construct($data);
    }

    /**
     * 表示 HTTP 响应头配置模块。该功能默认为禁用
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodResponseHeaderRule ResponseHeader = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResponseHeader()
    {
        return $this->ResponseHeader;
    }

    /**
     * 表示 HTTP 响应头配置模块。该功能默认为禁用
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodResponseHeaderRule ResponseHeader = 1;</code>
     * @param \Volc\Service\Vod\Models\Business\VodResponseHeaderRule[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResponseHeader($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Volc\Service\Vod\Models\Business\VodResponseHeaderRule::class);
        $this->ResponseHeader = $arr;

        return $this;
    }

}

