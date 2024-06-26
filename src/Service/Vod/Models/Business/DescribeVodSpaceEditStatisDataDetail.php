<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/business/vod_measure.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.DescribeVodSpaceEditStatisDataDetail</code>
 */
class DescribeVodSpaceEditStatisDataDetail extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string Space = 1;</code>
     */
    protected $Space = '';
    /**
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.DescribeVodSpaceEditStatisDetailTVUnit EditUsageDataList = 3;</code>
     */
    private $EditUsageDataList;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Space
     *     @type \Volc\Service\Vod\Models\Business\DescribeVodSpaceEditStatisDetailTVUnit[]|\Google\Protobuf\Internal\RepeatedField $EditUsageDataList
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodMeasure::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string Space = 1;</code>
     * @return string
     */
    public function getSpace()
    {
        return $this->Space;
    }

    /**
     * Generated from protobuf field <code>string Space = 1;</code>
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
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.DescribeVodSpaceEditStatisDetailTVUnit EditUsageDataList = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEditUsageDataList()
    {
        return $this->EditUsageDataList;
    }

    /**
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.DescribeVodSpaceEditStatisDetailTVUnit EditUsageDataList = 3;</code>
     * @param \Volc\Service\Vod\Models\Business\DescribeVodSpaceEditStatisDetailTVUnit[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEditUsageDataList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Volc\Service\Vod\Models\Business\DescribeVodSpaceEditStatisDetailTVUnit::class);
        $this->EditUsageDataList = $arr;

        return $this;
    }

}

