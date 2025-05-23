<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/business/vod_space.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.VodUploadSpaceConfig</code>
 */
class VodUploadSpaceConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string AutoPoster = 1;</code>
     */
    protected $AutoPoster = '';
    /**
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.CustomPosterConfig CustomPosterConfig = 2;</code>
     */
    protected $CustomPosterConfig = null;
    /**
     * Generated from protobuf field <code>string GetPosterMode = 3;</code>
     */
    protected $GetPosterMode = '';
    /**
     * Generated from protobuf field <code>string AutoPosterCandidate = 4;</code>
     */
    protected $AutoPosterCandidate = '';
    /**
     * Generated from protobuf field <code>string AutoTranscode = 5;</code>
     */
    protected $AutoTranscode = '';
    /**
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.TranscodeConfig TranscodeConfig = 6;</code>
     */
    protected $TranscodeConfig = null;
    /**
     * Generated from protobuf field <code>string AutoSetVideoStatus = 7;</code>
     */
    protected $AutoSetVideoStatus = '';
    /**
     * Generated from protobuf field <code>string UploadOverwrite = 8;</code>
     */
    protected $UploadOverwrite = '';
    /**
     * Generated from protobuf field <code>string CallbackReturnPlayUrl = 9;</code>
     */
    protected $CallbackReturnPlayUrl = '';
    /**
     * Generated from protobuf field <code>string CallbackReturnRunId = 10;</code>
     */
    protected $CallbackReturnRunId = '';
    /**
     * Generated from protobuf field <code>string GetMetaMode = 11;</code>
     */
    protected $GetMetaMode = '';
    /**
     * Generated from protobuf field <code>string AutoGetArchiveVideoMeta = 12;</code>
     */
    protected $AutoGetArchiveVideoMeta = '';
    /**
     * Generated from protobuf field <code>string AutoGetIAVideoMeta = 13;</code>
     */
    protected $AutoGetIAVideoMeta = '';
    /**
     * Generated from protobuf field <code>string MetaGetMd5 = 14;</code>
     */
    protected $MetaGetMd5 = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $AutoPoster
     *     @type \Volc\Service\Vod\Models\Business\CustomPosterConfig $CustomPosterConfig
     *     @type string $GetPosterMode
     *     @type string $AutoPosterCandidate
     *     @type string $AutoTranscode
     *     @type \Volc\Service\Vod\Models\Business\TranscodeConfig $TranscodeConfig
     *     @type string $AutoSetVideoStatus
     *     @type string $UploadOverwrite
     *     @type string $CallbackReturnPlayUrl
     *     @type string $CallbackReturnRunId
     *     @type string $GetMetaMode
     *     @type string $AutoGetArchiveVideoMeta
     *     @type string $AutoGetIAVideoMeta
     *     @type string $MetaGetMd5
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodSpace::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string AutoPoster = 1;</code>
     * @return string
     */
    public function getAutoPoster()
    {
        return $this->AutoPoster;
    }

    /**
     * Generated from protobuf field <code>string AutoPoster = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAutoPoster($var)
    {
        GPBUtil::checkString($var, True);
        $this->AutoPoster = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.CustomPosterConfig CustomPosterConfig = 2;</code>
     * @return \Volc\Service\Vod\Models\Business\CustomPosterConfig|null
     */
    public function getCustomPosterConfig()
    {
        return $this->CustomPosterConfig;
    }

    public function hasCustomPosterConfig()
    {
        return isset($this->CustomPosterConfig);
    }

    public function clearCustomPosterConfig()
    {
        unset($this->CustomPosterConfig);
    }

    /**
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.CustomPosterConfig CustomPosterConfig = 2;</code>
     * @param \Volc\Service\Vod\Models\Business\CustomPosterConfig $var
     * @return $this
     */
    public function setCustomPosterConfig($var)
    {
        GPBUtil::checkMessage($var, \Volc\Service\Vod\Models\Business\CustomPosterConfig::class);
        $this->CustomPosterConfig = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string GetPosterMode = 3;</code>
     * @return string
     */
    public function getGetPosterMode()
    {
        return $this->GetPosterMode;
    }

    /**
     * Generated from protobuf field <code>string GetPosterMode = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setGetPosterMode($var)
    {
        GPBUtil::checkString($var, True);
        $this->GetPosterMode = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string AutoPosterCandidate = 4;</code>
     * @return string
     */
    public function getAutoPosterCandidate()
    {
        return $this->AutoPosterCandidate;
    }

    /**
     * Generated from protobuf field <code>string AutoPosterCandidate = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setAutoPosterCandidate($var)
    {
        GPBUtil::checkString($var, True);
        $this->AutoPosterCandidate = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string AutoTranscode = 5;</code>
     * @return string
     */
    public function getAutoTranscode()
    {
        return $this->AutoTranscode;
    }

    /**
     * Generated from protobuf field <code>string AutoTranscode = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setAutoTranscode($var)
    {
        GPBUtil::checkString($var, True);
        $this->AutoTranscode = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.TranscodeConfig TranscodeConfig = 6;</code>
     * @return \Volc\Service\Vod\Models\Business\TranscodeConfig|null
     */
    public function getTranscodeConfig()
    {
        return $this->TranscodeConfig;
    }

    public function hasTranscodeConfig()
    {
        return isset($this->TranscodeConfig);
    }

    public function clearTranscodeConfig()
    {
        unset($this->TranscodeConfig);
    }

    /**
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.TranscodeConfig TranscodeConfig = 6;</code>
     * @param \Volc\Service\Vod\Models\Business\TranscodeConfig $var
     * @return $this
     */
    public function setTranscodeConfig($var)
    {
        GPBUtil::checkMessage($var, \Volc\Service\Vod\Models\Business\TranscodeConfig::class);
        $this->TranscodeConfig = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string AutoSetVideoStatus = 7;</code>
     * @return string
     */
    public function getAutoSetVideoStatus()
    {
        return $this->AutoSetVideoStatus;
    }

    /**
     * Generated from protobuf field <code>string AutoSetVideoStatus = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setAutoSetVideoStatus($var)
    {
        GPBUtil::checkString($var, True);
        $this->AutoSetVideoStatus = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string UploadOverwrite = 8;</code>
     * @return string
     */
    public function getUploadOverwrite()
    {
        return $this->UploadOverwrite;
    }

    /**
     * Generated from protobuf field <code>string UploadOverwrite = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setUploadOverwrite($var)
    {
        GPBUtil::checkString($var, True);
        $this->UploadOverwrite = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string CallbackReturnPlayUrl = 9;</code>
     * @return string
     */
    public function getCallbackReturnPlayUrl()
    {
        return $this->CallbackReturnPlayUrl;
    }

    /**
     * Generated from protobuf field <code>string CallbackReturnPlayUrl = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setCallbackReturnPlayUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->CallbackReturnPlayUrl = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string CallbackReturnRunId = 10;</code>
     * @return string
     */
    public function getCallbackReturnRunId()
    {
        return $this->CallbackReturnRunId;
    }

    /**
     * Generated from protobuf field <code>string CallbackReturnRunId = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setCallbackReturnRunId($var)
    {
        GPBUtil::checkString($var, True);
        $this->CallbackReturnRunId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string GetMetaMode = 11;</code>
     * @return string
     */
    public function getGetMetaMode()
    {
        return $this->GetMetaMode;
    }

    /**
     * Generated from protobuf field <code>string GetMetaMode = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setGetMetaMode($var)
    {
        GPBUtil::checkString($var, True);
        $this->GetMetaMode = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string AutoGetArchiveVideoMeta = 12;</code>
     * @return string
     */
    public function getAutoGetArchiveVideoMeta()
    {
        return $this->AutoGetArchiveVideoMeta;
    }

    /**
     * Generated from protobuf field <code>string AutoGetArchiveVideoMeta = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setAutoGetArchiveVideoMeta($var)
    {
        GPBUtil::checkString($var, True);
        $this->AutoGetArchiveVideoMeta = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string AutoGetIAVideoMeta = 13;</code>
     * @return string
     */
    public function getAutoGetIAVideoMeta()
    {
        return $this->AutoGetIAVideoMeta;
    }

    /**
     * Generated from protobuf field <code>string AutoGetIAVideoMeta = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setAutoGetIAVideoMeta($var)
    {
        GPBUtil::checkString($var, True);
        $this->AutoGetIAVideoMeta = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string MetaGetMd5 = 14;</code>
     * @return string
     */
    public function getMetaGetMd5()
    {
        return $this->MetaGetMd5;
    }

    /**
     * Generated from protobuf field <code>string MetaGetMd5 = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setMetaGetMd5($var)
    {
        GPBUtil::checkString($var, True);
        $this->MetaGetMd5 = $var;

        return $this;
    }

}

