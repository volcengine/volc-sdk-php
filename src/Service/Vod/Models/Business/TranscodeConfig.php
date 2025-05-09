<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/business/vod_space.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.TranscodeConfig</code>
 */
class TranscodeConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string DefaultTemplateStatus = 1;</code>
     */
    protected $DefaultTemplateStatus = '';
    /**
     * Generated from protobuf field <code>string DefaultTemplateId = 2;</code>
     */
    protected $DefaultTemplateId = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $DefaultTemplateStatus
     *     @type string $DefaultTemplateId
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodSpace::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string DefaultTemplateStatus = 1;</code>
     * @return string
     */
    public function getDefaultTemplateStatus()
    {
        return $this->DefaultTemplateStatus;
    }

    /**
     * Generated from protobuf field <code>string DefaultTemplateStatus = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDefaultTemplateStatus($var)
    {
        GPBUtil::checkString($var, True);
        $this->DefaultTemplateStatus = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string DefaultTemplateId = 2;</code>
     * @return string
     */
    public function getDefaultTemplateId()
    {
        return $this->DefaultTemplateId;
    }

    /**
     * Generated from protobuf field <code>string DefaultTemplateId = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDefaultTemplateId($var)
    {
        GPBUtil::checkString($var, True);
        $this->DefaultTemplateId = $var;

        return $this;
    }

}

