<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/business/vod_measure.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.DescribeVodSpaceEditStatisDataResult</code>
 */
class DescribeVodSpaceEditStatisDataResult extends \Google\Protobuf\Internal\Message
{
    /**
     * 空间列表，多个空间用逗号分割
     *
     * Generated from protobuf field <code>repeated string SpaceList = 1;</code>
     */
    private $SpaceList;
    /**
     * 查询的起始时间, rfc3339
     *
     * Generated from protobuf field <code>string StartTime = 2;</code>
     */
    protected $StartTime = '';
    /**
     * 查询的结束时间, rfc3339；查询时间跨度不超过93天
     *
     * Generated from protobuf field <code>string EndTime = 3;</code>
     */
    protected $EndTime = '';
    /**
     * 封装格式
     *
     * Generated from protobuf field <code>string Specification = 4;</code>
     */
    protected $Specification = '';
    /**
     *聚合的时间粒度，单位秒，默认3600，支持3600和86400
     *
     * Generated from protobuf field <code>int64 Aggregation = 5;</code>
     */
    protected $Aggregation = 0;
    /**
     * 展示详细信息的维度，取值：Space
     *
     * Generated from protobuf field <code>repeated string DetailFieldList = 6;</code>
     */
    private $DetailFieldList;
    /**
     * 区域，多个区域用逗号分割
     *
     * Generated from protobuf field <code>repeated string RegionList = 7;</code>
     */
    private $RegionList;
    /**
     * Generated from protobuf field <code>int64 TotalEditUsageData = 8;</code>
     */
    protected $TotalEditUsageData = 0;
    /**
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.DescribeVodSpaceEditStatisDataItem TotalEditUsageDataList = 9;</code>
     */
    private $TotalEditUsageDataList;
    /**
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.DescribeVodSpaceEditStatisDataDetail EditUsageDataDetailList = 10;</code>
     */
    private $EditUsageDataDetailList;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $SpaceList
     *           空间列表，多个空间用逗号分割
     *     @type string $StartTime
     *           查询的起始时间, rfc3339
     *     @type string $EndTime
     *           查询的结束时间, rfc3339；查询时间跨度不超过93天
     *     @type string $Specification
     *           封装格式
     *     @type int|string $Aggregation
     *          聚合的时间粒度，单位秒，默认3600，支持3600和86400
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $DetailFieldList
     *           展示详细信息的维度，取值：Space
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $RegionList
     *           区域，多个区域用逗号分割
     *     @type int|string $TotalEditUsageData
     *     @type \Volc\Service\Vod\Models\Business\DescribeVodSpaceEditStatisDataItem[]|\Google\Protobuf\Internal\RepeatedField $TotalEditUsageDataList
     *     @type \Volc\Service\Vod\Models\Business\DescribeVodSpaceEditStatisDataDetail[]|\Google\Protobuf\Internal\RepeatedField $EditUsageDataDetailList
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodMeasure::initOnce();
        parent::__construct($data);
    }

    /**
     * 空间列表，多个空间用逗号分割
     *
     * Generated from protobuf field <code>repeated string SpaceList = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSpaceList()
    {
        return $this->SpaceList;
    }

    /**
     * 空间列表，多个空间用逗号分割
     *
     * Generated from protobuf field <code>repeated string SpaceList = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSpaceList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->SpaceList = $arr;

        return $this;
    }

    /**
     * 查询的起始时间, rfc3339
     *
     * Generated from protobuf field <code>string StartTime = 2;</code>
     * @return string
     */
    public function getStartTime()
    {
        return $this->StartTime;
    }

    /**
     * 查询的起始时间, rfc3339
     *
     * Generated from protobuf field <code>string StartTime = 2;</code>
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
     * 查询的结束时间, rfc3339；查询时间跨度不超过93天
     *
     * Generated from protobuf field <code>string EndTime = 3;</code>
     * @return string
     */
    public function getEndTime()
    {
        return $this->EndTime;
    }

    /**
     * 查询的结束时间, rfc3339；查询时间跨度不超过93天
     *
     * Generated from protobuf field <code>string EndTime = 3;</code>
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
     * 封装格式
     *
     * Generated from protobuf field <code>string Specification = 4;</code>
     * @return string
     */
    public function getSpecification()
    {
        return $this->Specification;
    }

    /**
     * 封装格式
     *
     * Generated from protobuf field <code>string Specification = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setSpecification($var)
    {
        GPBUtil::checkString($var, True);
        $this->Specification = $var;

        return $this;
    }

    /**
     *聚合的时间粒度，单位秒，默认3600，支持3600和86400
     *
     * Generated from protobuf field <code>int64 Aggregation = 5;</code>
     * @return int|string
     */
    public function getAggregation()
    {
        return $this->Aggregation;
    }

    /**
     *聚合的时间粒度，单位秒，默认3600，支持3600和86400
     *
     * Generated from protobuf field <code>int64 Aggregation = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAggregation($var)
    {
        GPBUtil::checkInt64($var);
        $this->Aggregation = $var;

        return $this;
    }

    /**
     * 展示详细信息的维度，取值：Space
     *
     * Generated from protobuf field <code>repeated string DetailFieldList = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDetailFieldList()
    {
        return $this->DetailFieldList;
    }

    /**
     * 展示详细信息的维度，取值：Space
     *
     * Generated from protobuf field <code>repeated string DetailFieldList = 6;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDetailFieldList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->DetailFieldList = $arr;

        return $this;
    }

    /**
     * 区域，多个区域用逗号分割
     *
     * Generated from protobuf field <code>repeated string RegionList = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRegionList()
    {
        return $this->RegionList;
    }

    /**
     * 区域，多个区域用逗号分割
     *
     * Generated from protobuf field <code>repeated string RegionList = 7;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRegionList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->RegionList = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 TotalEditUsageData = 8;</code>
     * @return int|string
     */
    public function getTotalEditUsageData()
    {
        return $this->TotalEditUsageData;
    }

    /**
     * Generated from protobuf field <code>int64 TotalEditUsageData = 8;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTotalEditUsageData($var)
    {
        GPBUtil::checkInt64($var);
        $this->TotalEditUsageData = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.DescribeVodSpaceEditStatisDataItem TotalEditUsageDataList = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTotalEditUsageDataList()
    {
        return $this->TotalEditUsageDataList;
    }

    /**
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.DescribeVodSpaceEditStatisDataItem TotalEditUsageDataList = 9;</code>
     * @param \Volc\Service\Vod\Models\Business\DescribeVodSpaceEditStatisDataItem[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTotalEditUsageDataList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Volc\Service\Vod\Models\Business\DescribeVodSpaceEditStatisDataItem::class);
        $this->TotalEditUsageDataList = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.DescribeVodSpaceEditStatisDataDetail EditUsageDataDetailList = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEditUsageDataDetailList()
    {
        return $this->EditUsageDataDetailList;
    }

    /**
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.DescribeVodSpaceEditStatisDataDetail EditUsageDataDetailList = 10;</code>
     * @param \Volc\Service\Vod\Models\Business\DescribeVodSpaceEditStatisDataDetail[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEditUsageDataDetailList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Volc\Service\Vod\Models\Business\DescribeVodSpaceEditStatisDataDetail::class);
        $this->EditUsageDataDetailList = $arr;

        return $this;
    }

}

