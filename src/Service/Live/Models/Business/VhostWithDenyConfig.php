<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: live/business/deny_config.proto

namespace Volc\Service\Live\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Live.Models.Business.VhostWithDenyConfig</code>
 */
class VhostWithDenyConfig extends \Google\Protobuf\Internal\Message
{
    /**
     *域名空间名称
     *
     * Generated from protobuf field <code>string Vhost = 1;</code>
     */
    protected $Vhost = '';
    /**
     *推拉流域名
     *
     * Generated from protobuf field <code>string Domain = 2;</code>
     */
    protected $Domain = '';
    /**
     * App的名称，由 1 到 30 位数字、字母、下划线及"-"和"."组成。
     *
     * Generated from protobuf field <code>string App = 3;</code>
     */
    protected $App = '';
    /**
     *配置详情列表
     *
     * Generated from protobuf field <code>repeated .Volcengine.Live.Models.Business.DenyConfigDetail DenyConfigDetail = 4;</code>
     */
    private $DenyConfigDetail;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Vhost
     *          域名空间名称
     *     @type string $Domain
     *          推拉流域名
     *     @type string $App
     *           App的名称，由 1 到 30 位数字、字母、下划线及"-"和"."组成。
     *     @type \Volc\Service\Live\Models\Business\DenyConfigDetail[]|\Google\Protobuf\Internal\RepeatedField $DenyConfigDetail
     *          配置详情列表
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Live\Models\GPBMetadata\DenyConfig::initOnce();
        parent::__construct($data);
    }

    /**
     *域名空间名称
     *
     * Generated from protobuf field <code>string Vhost = 1;</code>
     * @return string
     */
    public function getVhost()
    {
        return $this->Vhost;
    }

    /**
     *域名空间名称
     *
     * Generated from protobuf field <code>string Vhost = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setVhost($var)
    {
        GPBUtil::checkString($var, True);
        $this->Vhost = $var;

        return $this;
    }

    /**
     *推拉流域名
     *
     * Generated from protobuf field <code>string Domain = 2;</code>
     * @return string
     */
    public function getDomain()
    {
        return $this->Domain;
    }

    /**
     *推拉流域名
     *
     * Generated from protobuf field <code>string Domain = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDomain($var)
    {
        GPBUtil::checkString($var, True);
        $this->Domain = $var;

        return $this;
    }

    /**
     * App的名称，由 1 到 30 位数字、字母、下划线及"-"和"."组成。
     *
     * Generated from protobuf field <code>string App = 3;</code>
     * @return string
     */
    public function getApp()
    {
        return $this->App;
    }

    /**
     * App的名称，由 1 到 30 位数字、字母、下划线及"-"和"."组成。
     *
     * Generated from protobuf field <code>string App = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setApp($var)
    {
        GPBUtil::checkString($var, True);
        $this->App = $var;

        return $this;
    }

    /**
     *配置详情列表
     *
     * Generated from protobuf field <code>repeated .Volcengine.Live.Models.Business.DenyConfigDetail DenyConfigDetail = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDenyConfigDetail()
    {
        return $this->DenyConfigDetail;
    }

    /**
     *配置详情列表
     *
     * Generated from protobuf field <code>repeated .Volcengine.Live.Models.Business.DenyConfigDetail DenyConfigDetail = 4;</code>
     * @param \Volc\Service\Live\Models\Business\DenyConfigDetail[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDenyConfigDetail($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Volc\Service\Live\Models\Business\DenyConfigDetail::class);
        $this->DenyConfigDetail = $arr;

        return $this;
    }

}

