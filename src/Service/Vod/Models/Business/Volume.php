<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/business/vod_workflow.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.Volume</code>
 */
class Volume extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string Method = 1;</code>
     */
    protected $Method = '';
    /**
     * Generated from protobuf field <code>double IntegratedLoudness = 2;</code>
     */
    protected $IntegratedLoudness = 0.0;
    /**
     * Generated from protobuf field <code>double TruePeak = 3;</code>
     */
    protected $TruePeak = 0.0;
    /**
     * Generated from protobuf field <code>double Volume = 4;</code>
     */
    protected $Volume = 0.0;
    /**
     * Generated from protobuf field <code>double VolumeTime = 5;</code>
     */
    protected $VolumeTime = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Method
     *     @type float $IntegratedLoudness
     *     @type float $TruePeak
     *     @type float $Volume
     *     @type float $VolumeTime
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodWorkflow::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string Method = 1;</code>
     * @return string
     */
    public function getMethod()
    {
        return $this->Method;
    }

    /**
     * Generated from protobuf field <code>string Method = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMethod($var)
    {
        GPBUtil::checkString($var, True);
        $this->Method = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double IntegratedLoudness = 2;</code>
     * @return float
     */
    public function getIntegratedLoudness()
    {
        return $this->IntegratedLoudness;
    }

    /**
     * Generated from protobuf field <code>double IntegratedLoudness = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setIntegratedLoudness($var)
    {
        GPBUtil::checkDouble($var);
        $this->IntegratedLoudness = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double TruePeak = 3;</code>
     * @return float
     */
    public function getTruePeak()
    {
        return $this->TruePeak;
    }

    /**
     * Generated from protobuf field <code>double TruePeak = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setTruePeak($var)
    {
        GPBUtil::checkDouble($var);
        $this->TruePeak = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double Volume = 4;</code>
     * @return float
     */
    public function getVolume()
    {
        return $this->Volume;
    }

    /**
     * Generated from protobuf field <code>double Volume = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setVolume($var)
    {
        GPBUtil::checkDouble($var);
        $this->Volume = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double VolumeTime = 5;</code>
     * @return float
     */
    public function getVolumeTime()
    {
        return $this->VolumeTime;
    }

    /**
     * Generated from protobuf field <code>double VolumeTime = 5;</code>
     * @param float $var
     * @return $this
     */
    public function setVolumeTime($var)
    {
        GPBUtil::checkDouble($var);
        $this->VolumeTime = $var;

        return $this;
    }

}
