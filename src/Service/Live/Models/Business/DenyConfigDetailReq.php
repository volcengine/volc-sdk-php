<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: live/business/deny_config.proto

namespace Volc\Service\Live\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Live.Models.Business.DenyConfigDetailReq</code>
 */
class DenyConfigDetailReq
{
    /**
     *协议类型，比如tcp,kcp,quic
     *
     * Generated from protobuf field <code>repeated string ProType = 1;</code>
     */
    public $ProType;
    /**
     *格式类型，比如http，rtmp
     *
     * Generated from protobuf field <code>repeated string FmtType = 2;</code>
     */
    public $FmtType;
    /**
     *大洲
     *
     * Generated from protobuf field <code>string Continent = 3;</code>
     */
    public $Continent = '';
    /**
     *国家码
     *
     * Generated from protobuf field <code>string Country = 4;</code>
     */
    public $Country = '';
    /**
     *区域
     *
     * Generated from protobuf field <code>string Region = 5;</code>
     */
    public $Region = '';
    /**
     *城市
     *
     * Generated from protobuf field <code>string City = 6;</code>
     */
    public $City = '';
    /**
     *运营商
     *
     * Generated from protobuf field <code>string ISP = 7;</code>
     */
    public $ISP = '';
    /**
     *黑名单
     *
     * Generated from protobuf field <code>repeated string DenyList = 8;</code>
     */
    public $DenyList;
    /**
     *白名单
     *
     * Generated from protobuf field <code>repeated string AllowList = 9;</code>
     */
    public $AllowList;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $ProType
     *          协议类型，比如tcp,kcp,quic
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $FmtType
     *          格式类型，比如http，rtmp
     *     @type string $Continent
     *          大洲
     *     @type string $Country
     *          国家码
     *     @type string $Region
     *          区域
     *     @type string $City
     *          城市
     *     @type string $ISP
     *          运营商
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $DenyList
     *          黑名单
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $AllowList
     *          白名单
     * }
     */
//    public function __construct($data = NULL) {
//        \Volc\Service\Live\Models\GPBMetadata\DenyConfig::initOnce();
//        parent::__construct($data);
//    }

    /**
     *协议类型，比如tcp,kcp,quic
     *
     * Generated from protobuf field <code>repeated string ProType = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getProType()
    {
        return $this->ProType;
    }

    /**
     *协议类型，比如tcp,kcp,quic
     *
     * Generated from protobuf field <code>repeated string ProType = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setProType($var)
    {
        $this->ProType = $var;

        return $this;
    }

    /**
     *格式类型，比如http，rtmp
     *
     * Generated from protobuf field <code>repeated string FmtType = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFmtType()
    {
        return $this->FmtType;
    }

    /**
     *格式类型，比如http，rtmp
     *
     * Generated from protobuf field <code>repeated string FmtType = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFmtType($var)
    {
        $this->FmtType = $var;

        return $this;
    }

    /**
     *大洲
     *
     * Generated from protobuf field <code>string Continent = 3;</code>
     * @return string
     */
    public function getContinent()
    {
        return $this->Continent;
    }

    /**
     *大洲
     *
     * Generated from protobuf field <code>string Continent = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setContinent($var)
    {
        $this->Continent = $var;

        return $this;
    }

    /**
     *国家码
     *
     * Generated from protobuf field <code>string Country = 4;</code>
     * @return string
     */
    public function getCountry()
    {
        return $this->Country;
    }

    /**
     *国家码
     *
     * Generated from protobuf field <code>string Country = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setCountry($var)
    {
        $this->Country = $var;

        return $this;
    }

    /**
     *区域
     *
     * Generated from protobuf field <code>string Region = 5;</code>
     * @return string
     */
    public function getRegion()
    {
        return $this->Region;
    }

    /**
     *区域
     *
     * Generated from protobuf field <code>string Region = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        $this->Region = $var;

        return $this;
    }

    /**
     *城市
     *
     * Generated from protobuf field <code>string City = 6;</code>
     * @return string
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     *城市
     *
     * Generated from protobuf field <code>string City = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setCity($var)
    {
        $this->City = $var;

        return $this;
    }

    /**
     *运营商
     *
     * Generated from protobuf field <code>string ISP = 7;</code>
     * @return string
     */
    public function getISP()
    {
        return $this->ISP;
    }

    /**
     *运营商
     *
     * Generated from protobuf field <code>string ISP = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setISP($var)
    {
        $this->ISP = $var;

        return $this;
    }

    /**
     *黑名单
     *
     * Generated from protobuf field <code>repeated string DenyList = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDenyList()
    {
        return $this->DenyList;
    }

    /**
     *黑名单
     *
     * Generated from protobuf field <code>repeated string DenyList = 8;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDenyList($var)
    {
        $this->DenyList = $var;

        return $this;
    }

    /**
     *白名单
     *
     * Generated from protobuf field <code>repeated string AllowList = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAllowList()
    {
        return $this->AllowList;
    }

    /**
     *白名单
     *
     * Generated from protobuf field <code>repeated string AllowList = 9;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAllowList($var)
    {
        $this->AllowList = $var;

        return $this;
    }

}

