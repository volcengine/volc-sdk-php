<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/business/vod_cdn.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.VodDomainConfig</code>
 */
class VodDomainConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * HTTP响应头设置
     *
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.VodResponseHeaderControl ResponseHeaderControl = 1;</code>
     */
    protected $ResponseHeaderControl = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Volc\Service\Vod\Models\Business\VodResponseHeaderControl $ResponseHeaderControl
     *           HTTP响应头设置
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodCdn::initOnce();
        parent::__construct($data);
    }

    /**
     * HTTP响应头设置
     *
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.VodResponseHeaderControl ResponseHeaderControl = 1;</code>
     * @return \Volc\Service\Vod\Models\Business\VodResponseHeaderControl|null
     */
    public function getResponseHeaderControl()
    {
        return $this->ResponseHeaderControl;
    }

    public function hasResponseHeaderControl()
    {
        return isset($this->ResponseHeaderControl);
    }

    public function clearResponseHeaderControl()
    {
        unset($this->ResponseHeaderControl);
    }

    /**
     * HTTP响应头设置
     *
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.VodResponseHeaderControl ResponseHeaderControl = 1;</code>
     * @param \Volc\Service\Vod\Models\Business\VodResponseHeaderControl $var
     * @return $this
     */
    public function setResponseHeaderControl($var)
    {
        GPBUtil::checkMessage($var, \Volc\Service\Vod\Models\Business\VodResponseHeaderControl::class);
        $this->ResponseHeaderControl = $var;

        return $this;
    }

}
