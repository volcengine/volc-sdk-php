<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vod/business/vod_measure.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.DescribeVodPlayFileLogByDomainResult</code>
 */
class DescribeVodPlayFileLogByDomainResult extends \Google\Protobuf\Internal\Message
{
    /**
     * 查询的起始时间, rfc3339格式, 最早查询1年内的数据
     *
     * Generated from protobuf field <code>string StartTime = 1;</code>
     */
    protected $StartTime = '';
    /**
     * 查询的结束时间, rfc3339；起止时间间隔不超过93天
     *
     * Generated from protobuf field <code>string EndTime = 2;</code>
     */
    protected $EndTime = '';
    /**
     * 查询域名列表
     *
     * Generated from protobuf field <code>repeated string DomainList = 3;</code>
     */
    private $DomainList;
    /**
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.DescribeVodPlayFileLogByDomainItem FileList = 4;</code>
     */
    private $FileList;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $StartTime
     *           查询的起始时间, rfc3339格式, 最早查询1年内的数据
     *     @type string $EndTime
     *           查询的结束时间, rfc3339；起止时间间隔不超过93天
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $DomainList
     *           查询域名列表
     *     @type \Volc\Service\Vod\Models\Business\DescribeVodPlayFileLogByDomainItem[]|\Google\Protobuf\Internal\RepeatedField $FileList
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodMeasure::initOnce();
        parent::__construct($data);
    }

    /**
     * 查询的起始时间, rfc3339格式, 最早查询1年内的数据
     *
     * Generated from protobuf field <code>string StartTime = 1;</code>
     * @return string
     */
    public function getStartTime()
    {
        return $this->StartTime;
    }

    /**
     * 查询的起始时间, rfc3339格式, 最早查询1年内的数据
     *
     * Generated from protobuf field <code>string StartTime = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->StartTime = $var;

        return $this;
    }

    /**
     * 查询的结束时间, rfc3339；起止时间间隔不超过93天
     *
     * Generated from protobuf field <code>string EndTime = 2;</code>
     * @return string
     */
    public function getEndTime()
    {
        return $this->EndTime;
    }

    /**
     * 查询的结束时间, rfc3339；起止时间间隔不超过93天
     *
     * Generated from protobuf field <code>string EndTime = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->EndTime = $var;

        return $this;
    }

    /**
     * 查询域名列表
     *
     * Generated from protobuf field <code>repeated string DomainList = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDomainList()
    {
        return $this->DomainList;
    }

    /**
     * 查询域名列表
     *
     * Generated from protobuf field <code>repeated string DomainList = 3;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDomainList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->DomainList = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.DescribeVodPlayFileLogByDomainItem FileList = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFileList()
    {
        return $this->FileList;
    }

    /**
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.DescribeVodPlayFileLogByDomainItem FileList = 4;</code>
     * @param \Volc\Service\Vod\Models\Business\DescribeVodPlayFileLogByDomainItem[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFileList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Volc\Service\Vod\Models\Business\DescribeVodPlayFileLogByDomainItem::class);
        $this->FileList = $arr;

        return $this;
    }

}

