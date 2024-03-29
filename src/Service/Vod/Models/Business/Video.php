<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/business/vod_workflow.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.Video</code>
 */
class Video extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string Res = 1;</code>
     */
    protected $Res = '';
    /**
     * Generated from protobuf field <code>int32 ScaleType = 4;</code>
     */
    protected $ScaleType = 0;
    /**
     * Generated from protobuf field <code>int32 ScaleMode = 22;</code>
     */
    protected $ScaleMode = 0;
    /**
     * Generated from protobuf field <code>int32 ScaleWidth = 5;</code>
     */
    protected $ScaleWidth = 0;
    /**
     * Generated from protobuf field <code>int32 ScaleHeight = 6;</code>
     */
    protected $ScaleHeight = 0;
    /**
     * Generated from protobuf field <code>int32 ScaleShort = 7;</code>
     */
    protected $ScaleShort = 0;
    /**
     * Generated from protobuf field <code>int32 ScaleLong = 8;</code>
     */
    protected $ScaleLong = 0;
    /**
     * Generated from protobuf field <code>string Codec = 9;</code>
     */
    protected $Codec = '';
    /**
     * Generated from protobuf field <code>string RateControlMode = 10;</code>
     */
    protected $RateControlMode = '';
    /**
     * Generated from protobuf field <code>int32 MaxBitrate = 11;</code>
     */
    protected $MaxBitrate = 0;
    /**
     * Generated from protobuf field <code>int32 Bitrate = 12;</code>
     */
    protected $Bitrate = 0;
    /**
     * Generated from protobuf field <code>float Crf = 13;</code>
     */
    protected $Crf = 0.0;
    /**
     * Generated from protobuf field <code>int32 MaxFps = 15;</code>
     */
    protected $MaxFps = 0;
    /**
     * Generated from protobuf field <code>string Vsync = 16;</code>
     */
    protected $Vsync = '';
    /**
     * Generated from protobuf field <code>float Fps = 17;</code>
     */
    protected $Fps = 0.0;
    /**
     * Generated from protobuf field <code>int32 HDRMode = 21;</code>
     */
    protected $HDRMode = 0;
    /**
     * Generated from protobuf field <code>int32 GopSize = 24;</code>
     */
    protected $GopSize = 0;
    /**
     * Generated from protobuf field <code>bool DisableBFrame = 25;</code>
     */
    protected $DisableBFrame = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Res
     *     @type int $ScaleType
     *     @type int $ScaleMode
     *     @type int $ScaleWidth
     *     @type int $ScaleHeight
     *     @type int $ScaleShort
     *     @type int $ScaleLong
     *     @type string $Codec
     *     @type string $RateControlMode
     *     @type int $MaxBitrate
     *     @type int $Bitrate
     *     @type float $Crf
     *     @type int $MaxFps
     *     @type string $Vsync
     *     @type float $Fps
     *     @type int $HDRMode
     *     @type int $GopSize
     *     @type bool $DisableBFrame
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodWorkflow::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string Res = 1;</code>
     * @return string
     */
    public function getRes()
    {
        return $this->Res;
    }

    /**
     * Generated from protobuf field <code>string Res = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setRes($var)
    {
        GPBUtil::checkString($var, True);
        $this->Res = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 ScaleType = 4;</code>
     * @return int
     */
    public function getScaleType()
    {
        return $this->ScaleType;
    }

    /**
     * Generated from protobuf field <code>int32 ScaleType = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setScaleType($var)
    {
        GPBUtil::checkInt32($var);
        $this->ScaleType = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 ScaleMode = 22;</code>
     * @return int
     */
    public function getScaleMode()
    {
        return $this->ScaleMode;
    }

    /**
     * Generated from protobuf field <code>int32 ScaleMode = 22;</code>
     * @param int $var
     * @return $this
     */
    public function setScaleMode($var)
    {
        GPBUtil::checkInt32($var);
        $this->ScaleMode = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 ScaleWidth = 5;</code>
     * @return int
     */
    public function getScaleWidth()
    {
        return $this->ScaleWidth;
    }

    /**
     * Generated from protobuf field <code>int32 ScaleWidth = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setScaleWidth($var)
    {
        GPBUtil::checkInt32($var);
        $this->ScaleWidth = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 ScaleHeight = 6;</code>
     * @return int
     */
    public function getScaleHeight()
    {
        return $this->ScaleHeight;
    }

    /**
     * Generated from protobuf field <code>int32 ScaleHeight = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setScaleHeight($var)
    {
        GPBUtil::checkInt32($var);
        $this->ScaleHeight = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 ScaleShort = 7;</code>
     * @return int
     */
    public function getScaleShort()
    {
        return $this->ScaleShort;
    }

    /**
     * Generated from protobuf field <code>int32 ScaleShort = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setScaleShort($var)
    {
        GPBUtil::checkInt32($var);
        $this->ScaleShort = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 ScaleLong = 8;</code>
     * @return int
     */
    public function getScaleLong()
    {
        return $this->ScaleLong;
    }

    /**
     * Generated from protobuf field <code>int32 ScaleLong = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setScaleLong($var)
    {
        GPBUtil::checkInt32($var);
        $this->ScaleLong = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Codec = 9;</code>
     * @return string
     */
    public function getCodec()
    {
        return $this->Codec;
    }

    /**
     * Generated from protobuf field <code>string Codec = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setCodec($var)
    {
        GPBUtil::checkString($var, True);
        $this->Codec = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string RateControlMode = 10;</code>
     * @return string
     */
    public function getRateControlMode()
    {
        return $this->RateControlMode;
    }

    /**
     * Generated from protobuf field <code>string RateControlMode = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setRateControlMode($var)
    {
        GPBUtil::checkString($var, True);
        $this->RateControlMode = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 MaxBitrate = 11;</code>
     * @return int
     */
    public function getMaxBitrate()
    {
        return $this->MaxBitrate;
    }

    /**
     * Generated from protobuf field <code>int32 MaxBitrate = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxBitrate($var)
    {
        GPBUtil::checkInt32($var);
        $this->MaxBitrate = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 Bitrate = 12;</code>
     * @return int
     */
    public function getBitrate()
    {
        return $this->Bitrate;
    }

    /**
     * Generated from protobuf field <code>int32 Bitrate = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setBitrate($var)
    {
        GPBUtil::checkInt32($var);
        $this->Bitrate = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float Crf = 13;</code>
     * @return float
     */
    public function getCrf()
    {
        return $this->Crf;
    }

    /**
     * Generated from protobuf field <code>float Crf = 13;</code>
     * @param float $var
     * @return $this
     */
    public function setCrf($var)
    {
        GPBUtil::checkFloat($var);
        $this->Crf = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 MaxFps = 15;</code>
     * @return int
     */
    public function getMaxFps()
    {
        return $this->MaxFps;
    }

    /**
     * Generated from protobuf field <code>int32 MaxFps = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxFps($var)
    {
        GPBUtil::checkInt32($var);
        $this->MaxFps = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Vsync = 16;</code>
     * @return string
     */
    public function getVsync()
    {
        return $this->Vsync;
    }

    /**
     * Generated from protobuf field <code>string Vsync = 16;</code>
     * @param string $var
     * @return $this
     */
    public function setVsync($var)
    {
        GPBUtil::checkString($var, True);
        $this->Vsync = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float Fps = 17;</code>
     * @return float
     */
    public function getFps()
    {
        return $this->Fps;
    }

    /**
     * Generated from protobuf field <code>float Fps = 17;</code>
     * @param float $var
     * @return $this
     */
    public function setFps($var)
    {
        GPBUtil::checkFloat($var);
        $this->Fps = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 HDRMode = 21;</code>
     * @return int
     */
    public function getHDRMode()
    {
        return $this->HDRMode;
    }

    /**
     * Generated from protobuf field <code>int32 HDRMode = 21;</code>
     * @param int $var
     * @return $this
     */
    public function setHDRMode($var)
    {
        GPBUtil::checkInt32($var);
        $this->HDRMode = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 GopSize = 24;</code>
     * @return int
     */
    public function getGopSize()
    {
        return $this->GopSize;
    }

    /**
     * Generated from protobuf field <code>int32 GopSize = 24;</code>
     * @param int $var
     * @return $this
     */
    public function setGopSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->GopSize = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool DisableBFrame = 25;</code>
     * @return bool
     */
    public function getDisableBFrame()
    {
        return $this->DisableBFrame;
    }

    /**
     * Generated from protobuf field <code>bool DisableBFrame = 25;</code>
     * @param bool $var
     * @return $this
     */
    public function setDisableBFrame($var)
    {
        GPBUtil::checkBool($var);
        $this->DisableBFrame = $var;

        return $this;
    }

}

