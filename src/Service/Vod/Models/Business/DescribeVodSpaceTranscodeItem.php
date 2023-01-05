<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vod/business/vod_measure.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * 转码用量
 *
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.DescribeVodSpaceTranscodeItem</code>
 */
class DescribeVodSpaceTranscodeItem extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string Name = 1;</code>
     */
    protected $Name = '';
    /**
     * Generated from protobuf field <code>int64 Value = 2;</code>
     */
    protected $Value = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Name
     *     @type int|string $Value
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodMeasure::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string Name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Generated from protobuf field <code>string Name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->Name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 Value = 2;</code>
     * @return int|string
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * Generated from protobuf field <code>int64 Value = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkInt64($var);
        $this->Value = $var;

        return $this;
    }

}

