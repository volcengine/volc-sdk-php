<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/business/vod_measure.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.DescribeVodRealtimeMediaDetailDataResult</code>
 */
class DescribeVodRealtimeMediaDetailDataResult extends \Google\Protobuf\Internal\Message
{
    /**
     *地区，如：cn-north-1
     *
     * Generated from protobuf field <code>string Region = 1;</code>
     */
    protected $Region = '';
    /**
     * 空间
     *
     * Generated from protobuf field <code>string Space = 2;</code>
     */
    protected $Space = '';
    /**
     * 查询的起始时间, rfc3339
     *
     * Generated from protobuf field <code>string StartTime = 3;</code>
     */
    protected $StartTime = '';
    /**
     * 查询的结束时间, rfc3339；起止时间间隔不超过1天
     *
     * Generated from protobuf field <code>string EndTime = 4;</code>
     */
    protected $EndTime = '';
    /**
     * 分页查询的页大小，默认100
     *
     * Generated from protobuf field <code>int64 PageSize = 5;</code>
     */
    protected $PageSize = 0;
    /**
     * 分页查询的页号，默认1
     *
     * Generated from protobuf field <code>int64 PageNum = 6;</code>
     */
    protected $PageNum = 0;
    /**
     * 数据总条数
     *
     * Generated from protobuf field <code>int64 Total = 7;</code>
     */
    protected $Total = 0;
    /**
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.DescribeVodRealtimeMediaDetailDataItem RealtimeMediaDetailData = 8;</code>
     */
    private $RealtimeMediaDetailData;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Region
     *          地区，如：cn-north-1
     *     @type string $Space
     *           空间
     *     @type string $StartTime
     *           查询的起始时间, rfc3339
     *     @type string $EndTime
     *           查询的结束时间, rfc3339；起止时间间隔不超过1天
     *     @type int|string $PageSize
     *           分页查询的页大小，默认100
     *     @type int|string $PageNum
     *           分页查询的页号，默认1
     *     @type int|string $Total
     *           数据总条数
     *     @type \Volc\Service\Vod\Models\Business\DescribeVodRealtimeMediaDetailDataItem[]|\Google\Protobuf\Internal\RepeatedField $RealtimeMediaDetailData
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodMeasure::initOnce();
        parent::__construct($data);
    }

    /**
     *地区，如：cn-north-1
     *
     * Generated from protobuf field <code>string Region = 1;</code>
     * @return string
     */
    public function getRegion()
    {
        return $this->Region;
    }

    /**
     *地区，如：cn-north-1
     *
     * Generated from protobuf field <code>string Region = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->Region = $var;

        return $this;
    }

    /**
     * 空间
     *
     * Generated from protobuf field <code>string Space = 2;</code>
     * @return string
     */
    public function getSpace()
    {
        return $this->Space;
    }

    /**
     * 空间
     *
     * Generated from protobuf field <code>string Space = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSpace($var)
    {
        GPBUtil::checkString($var, True);
        $this->Space = $var;

        return $this;
    }

    /**
     * 查询的起始时间, rfc3339
     *
     * Generated from protobuf field <code>string StartTime = 3;</code>
     * @return string
     */
    public function getStartTime()
    {
        return $this->StartTime;
    }

    /**
     * 查询的起始时间, rfc3339
     *
     * Generated from protobuf field <code>string StartTime = 3;</code>
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
     * 查询的结束时间, rfc3339；起止时间间隔不超过1天
     *
     * Generated from protobuf field <code>string EndTime = 4;</code>
     * @return string
     */
    public function getEndTime()
    {
        return $this->EndTime;
    }

    /**
     * 查询的结束时间, rfc3339；起止时间间隔不超过1天
     *
     * Generated from protobuf field <code>string EndTime = 4;</code>
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
     * 分页查询的页大小，默认100
     *
     * Generated from protobuf field <code>int64 PageSize = 5;</code>
     * @return int|string
     */
    public function getPageSize()
    {
        return $this->PageSize;
    }

    /**
     * 分页查询的页大小，默认100
     *
     * Generated from protobuf field <code>int64 PageSize = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt64($var);
        $this->PageSize = $var;

        return $this;
    }

    /**
     * 分页查询的页号，默认1
     *
     * Generated from protobuf field <code>int64 PageNum = 6;</code>
     * @return int|string
     */
    public function getPageNum()
    {
        return $this->PageNum;
    }

    /**
     * 分页查询的页号，默认1
     *
     * Generated from protobuf field <code>int64 PageNum = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPageNum($var)
    {
        GPBUtil::checkInt64($var);
        $this->PageNum = $var;

        return $this;
    }

    /**
     * 数据总条数
     *
     * Generated from protobuf field <code>int64 Total = 7;</code>
     * @return int|string
     */
    public function getTotal()
    {
        return $this->Total;
    }

    /**
     * 数据总条数
     *
     * Generated from protobuf field <code>int64 Total = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTotal($var)
    {
        GPBUtil::checkInt64($var);
        $this->Total = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.DescribeVodRealtimeMediaDetailDataItem RealtimeMediaDetailData = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRealtimeMediaDetailData()
    {
        return $this->RealtimeMediaDetailData;
    }

    /**
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.DescribeVodRealtimeMediaDetailDataItem RealtimeMediaDetailData = 8;</code>
     * @param \Volc\Service\Vod\Models\Business\DescribeVodRealtimeMediaDetailDataItem[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRealtimeMediaDetailData($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Volc\Service\Vod\Models\Business\DescribeVodRealtimeMediaDetailDataItem::class);
        $this->RealtimeMediaDetailData = $arr;

        return $this;
    }

}

