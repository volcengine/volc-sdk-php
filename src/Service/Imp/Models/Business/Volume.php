<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: imp/business/imp_common.proto

namespace Volc\Service\Imp\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Imp.Models.Business.Volume</code>
 */
class Volume extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string Method = 1;</code>
     */
    protected $Method = '';
    /**
     * Generated from protobuf field <code>optional double IntegratedLoudness = 2;</code>
     */
    protected $IntegratedLoudness = null;
    /**
     * Generated from protobuf field <code>optional double TruePeak = 3;</code>
     */
    protected $TruePeak = null;
    /**
     * Generated from protobuf field <code>optional double VolumeTime = 4;</code>
     */
    protected $VolumeTime = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Method
     *     @type float $IntegratedLoudness
     *     @type float $TruePeak
     *     @type float $VolumeTime
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Imp\Models\GPBMetadata\ImpCommon::initOnce();
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
     * Generated from protobuf field <code>optional double IntegratedLoudness = 2;</code>
     * @return float
     */
    public function getIntegratedLoudness()
    {
        return isset($this->IntegratedLoudness) ? $this->IntegratedLoudness : 0.0;
    }

    public function hasIntegratedLoudness()
    {
        return isset($this->IntegratedLoudness);
    }

    public function clearIntegratedLoudness()
    {
        unset($this->IntegratedLoudness);
    }

    /**
     * Generated from protobuf field <code>optional double IntegratedLoudness = 2;</code>
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
     * Generated from protobuf field <code>optional double TruePeak = 3;</code>
     * @return float
     */
    public function getTruePeak()
    {
        return isset($this->TruePeak) ? $this->TruePeak : 0.0;
    }

    public function hasTruePeak()
    {
        return isset($this->TruePeak);
    }

    public function clearTruePeak()
    {
        unset($this->TruePeak);
    }

    /**
     * Generated from protobuf field <code>optional double TruePeak = 3;</code>
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
     * Generated from protobuf field <code>optional double VolumeTime = 4;</code>
     * @return float
     */
    public function getVolumeTime()
    {
        return isset($this->VolumeTime) ? $this->VolumeTime : 0.0;
    }

    public function hasVolumeTime()
    {
        return isset($this->VolumeTime);
    }

    public function clearVolumeTime()
    {
        unset($this->VolumeTime);
    }

    /**
     * Generated from protobuf field <code>optional double VolumeTime = 4;</code>
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

