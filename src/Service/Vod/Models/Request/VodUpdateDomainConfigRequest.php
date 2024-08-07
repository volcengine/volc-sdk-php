<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/request/request_vod.proto

namespace Volc\Service\Vod\Models\Request;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Request.VodUpdateDomainConfigRequest</code>
 */
class VodUpdateDomainConfigRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * 点播空间名称
     *
     * Generated from protobuf field <code>string SpaceName = 1;</code>
     */
    protected $SpaceName = '';
    /**
     * 域名类型（play、image）
     *
     * Generated from protobuf field <code>string DomainType = 2;</code>
     */
    protected $DomainType = '';
    /**
     * 指定一个加速域名修改其配置
     *
     * Generated from protobuf field <code>string Domain = 3;</code>
     */
    protected $Domain = '';
    /**
     * 表示本次修改的配置
     *
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.VodDomainConfig Config = 4;</code>
     */
    protected $Config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $SpaceName
     *           点播空间名称
     *     @type string $DomainType
     *           域名类型（play、image）
     *     @type string $Domain
     *           指定一个加速域名修改其配置
     *     @type \Volc\Service\Vod\Models\Business\VodDomainConfig $Config
     *           表示本次修改的配置
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\RequestVod::initOnce();
        parent::__construct($data);
    }

    /**
     * 点播空间名称
     *
     * Generated from protobuf field <code>string SpaceName = 1;</code>
     * @return string
     */
    public function getSpaceName()
    {
        return $this->SpaceName;
    }

    /**
     * 点播空间名称
     *
     * Generated from protobuf field <code>string SpaceName = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSpaceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->SpaceName = $var;

        return $this;
    }

    /**
     * 域名类型（play、image）
     *
     * Generated from protobuf field <code>string DomainType = 2;</code>
     * @return string
     */
    public function getDomainType()
    {
        return $this->DomainType;
    }

    /**
     * 域名类型（play、image）
     *
     * Generated from protobuf field <code>string DomainType = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDomainType($var)
    {
        GPBUtil::checkString($var, True);
        $this->DomainType = $var;

        return $this;
    }

    /**
     * 指定一个加速域名修改其配置
     *
     * Generated from protobuf field <code>string Domain = 3;</code>
     * @return string
     */
    public function getDomain()
    {
        return $this->Domain;
    }

    /**
     * 指定一个加速域名修改其配置
     *
     * Generated from protobuf field <code>string Domain = 3;</code>
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
     * 表示本次修改的配置
     *
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.VodDomainConfig Config = 4;</code>
     * @return \Volc\Service\Vod\Models\Business\VodDomainConfig|null
     */
    public function getConfig()
    {
        return $this->Config;
    }

    public function hasConfig()
    {
        return isset($this->Config);
    }

    public function clearConfig()
    {
        unset($this->Config);
    }

    /**
     * 表示本次修改的配置
     *
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.VodDomainConfig Config = 4;</code>
     * @param \Volc\Service\Vod\Models\Business\VodDomainConfig $var
     * @return $this
     */
    public function setConfig($var)
    {
        GPBUtil::checkMessage($var, \Volc\Service\Vod\Models\Business\VodDomainConfig::class);
        $this->Config = $var;

        return $this;
    }

}

