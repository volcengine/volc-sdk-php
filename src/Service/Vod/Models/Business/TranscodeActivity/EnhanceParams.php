<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/business/vod_workflow.proto

namespace Volc\Service\Vod\Models\Business\TranscodeActivity;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.TranscodeActivity.EnhanceParams</code>
 */
class EnhanceParams extends \Google\Protobuf\Internal\Message
{
    /**
     * 任务模板Id
     *
     * Generated from protobuf field <code>string TemplateId = 1;</code>
     */
    protected $TemplateId = '';
    /**
     * 版本，当前为volc
     *
     * Generated from protobuf field <code>string Version = 2;</code>
     */
    protected $Version = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $TemplateId
     *           任务模板Id
     *     @type string $Version
     *           版本，当前为volc
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodWorkflow::initOnce();
        parent::__construct($data);
    }

    /**
     * 任务模板Id
     *
     * Generated from protobuf field <code>string TemplateId = 1;</code>
     * @return string
     */
    public function getTemplateId()
    {
        return $this->TemplateId;
    }

    /**
     * 任务模板Id
     *
     * Generated from protobuf field <code>string TemplateId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTemplateId($var)
    {
        GPBUtil::checkString($var, True);
        $this->TemplateId = $var;

        return $this;
    }

    /**
     * 版本，当前为volc
     *
     * Generated from protobuf field <code>string Version = 2;</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->Version;
    }

    /**
     * 版本，当前为volc
     *
     * Generated from protobuf field <code>string Version = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->Version = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(EnhanceParams::class, \Volc\Service\Vod\Models\Business\TranscodeActivity_EnhanceParams::class);

