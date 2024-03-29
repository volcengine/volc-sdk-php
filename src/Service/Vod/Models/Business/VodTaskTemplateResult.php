<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/business/vod_workflow.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.VodTaskTemplateResult</code>
 */
class VodTaskTemplateResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.TaskTemplate TaskTemplate = 2;</code>
     */
    protected $TaskTemplate = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Volc\Service\Vod\Models\Business\TaskTemplate $TaskTemplate
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodWorkflow::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.TaskTemplate TaskTemplate = 2;</code>
     * @return \Volc\Service\Vod\Models\Business\TaskTemplate|null
     */
    public function getTaskTemplate()
    {
        return $this->TaskTemplate;
    }

    public function hasTaskTemplate()
    {
        return isset($this->TaskTemplate);
    }

    public function clearTaskTemplate()
    {
        unset($this->TaskTemplate);
    }

    /**
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.TaskTemplate TaskTemplate = 2;</code>
     * @param \Volc\Service\Vod\Models\Business\TaskTemplate $var
     * @return $this
     */
    public function setTaskTemplate($var)
    {
        GPBUtil::checkMessage($var, \Volc\Service\Vod\Models\Business\TaskTemplate::class);
        $this->TaskTemplate = $var;

        return $this;
    }

}

