<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/request/request_vod.proto

namespace Volc\Service\Vod\Models\Request;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Request.VodCreateDomainV3Request</code>
 */
class VodCreateDomainV3Request extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string SpaceName = 1;</code>
     */
    protected $SpaceName = '';
    /**
     * Generated from protobuf field <code>string DomainType = 2;</code>
     */
    protected $DomainType = '';
    /**
     * 域名
     *
     * Generated from protobuf field <code>string Domain = 3;</code>
     */
    protected $Domain = '';
    /**
     * Generated from protobuf field <code>int32 SourceStationType = 5;</code>
     */
    protected $SourceStationType = 0;
    /**
     *地区
     *
     * Generated from protobuf field <code>string Area = 8;</code>
     */
    protected $Area = '';
    /**
     *挂载tos 桶名称
     *
     * Generated from protobuf field <code>string BucketName = 9;</code>
     */
    protected $BucketName = '';
    /**
     * IPV6配置模块
     *
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.IPv6 IPv6 = 10;</code>
     */
    protected $IPv6 = null;
    /**
     * 源站列表。在 SourceStationType 参数取值为
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.CdnOriginRule Origin = 11;</code>
     */
    private $Origin;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $SpaceName
     *     @type string $DomainType
     *     @type string $Domain
     *           域名
     *     @type int $SourceStationType
     *     @type string $Area
     *          地区
     *     @type string $BucketName
     *          挂载tos 桶名称
     *     @type \Volc\Service\Vod\Models\Business\IPv6 $IPv6
     *           IPV6配置模块
     *     @type \Volc\Service\Vod\Models\Business\CdnOriginRule[]|\Google\Protobuf\Internal\RepeatedField $Origin
     *           源站列表。在 SourceStationType 参数取值为
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\RequestVod::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string SpaceName = 1;</code>
     * @return string
     */
    public function getSpaceName()
    {
        return $this->SpaceName;
    }

    /**
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
     * Generated from protobuf field <code>string DomainType = 2;</code>
     * @return string
     */
    public function getDomainType()
    {
        return $this->DomainType;
    }

    /**
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
     * 域名
     *
     * Generated from protobuf field <code>string Domain = 3;</code>
     * @return string
     */
    public function getDomain()
    {
        return $this->Domain;
    }

    /**
     * 域名
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
     * Generated from protobuf field <code>int32 SourceStationType = 5;</code>
     * @return int
     */
    public function getSourceStationType()
    {
        return $this->SourceStationType;
    }

    /**
     * Generated from protobuf field <code>int32 SourceStationType = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setSourceStationType($var)
    {
        GPBUtil::checkInt32($var);
        $this->SourceStationType = $var;

        return $this;
    }

    /**
     *地区
     *
     * Generated from protobuf field <code>string Area = 8;</code>
     * @return string
     */
    public function getArea()
    {
        return $this->Area;
    }

    /**
     *地区
     *
     * Generated from protobuf field <code>string Area = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setArea($var)
    {
        GPBUtil::checkString($var, True);
        $this->Area = $var;

        return $this;
    }

    /**
     *挂载tos 桶名称
     *
     * Generated from protobuf field <code>string BucketName = 9;</code>
     * @return string
     */
    public function getBucketName()
    {
        return $this->BucketName;
    }

    /**
     *挂载tos 桶名称
     *
     * Generated from protobuf field <code>string BucketName = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setBucketName($var)
    {
        GPBUtil::checkString($var, True);
        $this->BucketName = $var;

        return $this;
    }

    /**
     * IPV6配置模块
     *
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.IPv6 IPv6 = 10;</code>
     * @return \Volc\Service\Vod\Models\Business\IPv6|null
     */
    public function getIPv6()
    {
        return $this->IPv6;
    }

    public function hasIPv6()
    {
        return isset($this->IPv6);
    }

    public function clearIPv6()
    {
        unset($this->IPv6);
    }

    /**
     * IPV6配置模块
     *
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.IPv6 IPv6 = 10;</code>
     * @param \Volc\Service\Vod\Models\Business\IPv6 $var
     * @return $this
     */
    public function setIPv6($var)
    {
        GPBUtil::checkMessage($var, \Volc\Service\Vod\Models\Business\IPv6::class);
        $this->IPv6 = $var;

        return $this;
    }

    /**
     * 源站列表。在 SourceStationType 参数取值为
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.CdnOriginRule Origin = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOrigin()
    {
        return $this->Origin;
    }

    /**
     * 源站列表。在 SourceStationType 参数取值为
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.CdnOriginRule Origin = 11;</code>
     * @param \Volc\Service\Vod\Models\Business\CdnOriginRule[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOrigin($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Volc\Service\Vod\Models\Business\CdnOriginRule::class);
        $this->Origin = $arr;

        return $this;
    }

}

