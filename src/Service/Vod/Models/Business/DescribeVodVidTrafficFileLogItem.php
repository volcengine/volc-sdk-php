<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/business/vod_measure.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * 文件vid粒度统计数据（分空间）下载地址接口
 *
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.DescribeVodVidTrafficFileLogItem</code>
 */
class DescribeVodVidTrafficFileLogItem extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string Date = 1;</code>
     */
    protected $Date = '';
    /**
     * Generated from protobuf field <code>string Space = 2;</code>
     */
    protected $Space = '';
    /**
     * Generated from protobuf field <code>string DownloadUrl = 3;</code>
     */
    protected $DownloadUrl = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Date
     *     @type string $Space
     *     @type string $DownloadUrl
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodMeasure::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string Date = 1;</code>
     * @return string
     */
    public function getDate()
    {
        return $this->Date;
    }

    /**
     * Generated from protobuf field <code>string Date = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->Date = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Space = 2;</code>
     * @return string
     */
    public function getSpace()
    {
        return $this->Space;
    }

    /**
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
     * Generated from protobuf field <code>string DownloadUrl = 3;</code>
     * @return string
     */
    public function getDownloadUrl()
    {
        return $this->DownloadUrl;
    }

    /**
     * Generated from protobuf field <code>string DownloadUrl = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDownloadUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->DownloadUrl = $var;

        return $this;
    }

}
