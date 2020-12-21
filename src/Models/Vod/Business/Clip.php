<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vod/business/vod_workflow.proto

namespace Volc\Models\Vod\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Models.Vod.Business.Clip</code>
 */
class Clip extends \Google\Protobuf\Internal\Message
{
    /**
     * 开始时间 ms
     *
     * Generated from protobuf field <code>int32 StartTime = 1;</code>
     */
    protected $StartTime = 0;
    /**
     * 结束时间 ms
     *
     * Generated from protobuf field <code>int32 EndTime = 2;</code>
     */
    protected $EndTime = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $StartTime
     *           开始时间 ms
     *     @type int $EndTime
     *           结束时间 ms
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Models\Vod\GPBMetadata\VodWorkflow::initOnce();
        parent::__construct($data);
    }

    /**
     * 开始时间 ms
     *
     * Generated from protobuf field <code>int32 StartTime = 1;</code>
     * @return int
     */
    public function getStartTime()
    {
        return $this->StartTime;
    }

    /**
     * 开始时间 ms
     *
     * Generated from protobuf field <code>int32 StartTime = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkInt32($var);
        $this->StartTime = $var;

        return $this;
    }

    /**
     * 结束时间 ms
     *
     * Generated from protobuf field <code>int32 EndTime = 2;</code>
     * @return int
     */
    public function getEndTime()
    {
        return $this->EndTime;
    }

    /**
     * 结束时间 ms
     *
     * Generated from protobuf field <code>int32 EndTime = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkInt32($var);
        $this->EndTime = $var;

        return $this;
    }

}

