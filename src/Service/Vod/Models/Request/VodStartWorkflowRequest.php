<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/request/request_vod.proto

namespace Volc\Service\Vod\Models\Request;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * **********************************************************************
 * 转码
 * **********************************************************************
 *
 * Generated from protobuf message <code>Volcengine.Vod.Models.Request.VodStartWorkflowRequest</code>
 */
class VodStartWorkflowRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * 视频Id
     *
     * Generated from protobuf field <code>string Vid = 1;</code>
     */
    protected $Vid = '';
    /**
     * 工作流模板Id
     *
     * Generated from protobuf field <code>string TemplateId = 2;</code>
     */
    protected $TemplateId = '';
    /**
     * 动态参数
     *
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.WorkflowParams Input = 3;</code>
     */
    protected $Input = null;
    /**
     * 任务优先级
     *
     * Generated from protobuf field <code>int32 Priority = 4;</code>
     */
    protected $Priority = 0;
    /**
     * 回调参数
     *
     * Generated from protobuf field <code>string CallbackArgs = 5;</code>
     */
    protected $CallbackArgs = '';
    /**
     * 是否使能闲时转码
     *
     * Generated from protobuf field <code>bool EnableLowPriority = 6;</code>
     */
    protected $EnableLowPriority = false;
    /**
     * DirectUrl输入
     *
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.DirectUrl DirectUrl = 7;</code>
     */
    protected $DirectUrl = null;
    /**
     * Generated from protobuf field <code>string TaskListId = 8;</code>
     */
    protected $TaskListId = '';
    /**
     * Generated from protobuf field <code>string ClientToken = 9;</code>
     */
    protected $ClientToken = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Vid
     *           视频Id
     *     @type string $TemplateId
     *           工作流模板Id
     *     @type \Volc\Service\Vod\Models\Business\WorkflowParams $Input
     *           动态参数
     *     @type int $Priority
     *           任务优先级
     *     @type string $CallbackArgs
     *           回调参数
     *     @type bool $EnableLowPriority
     *           是否使能闲时转码
     *     @type \Volc\Service\Vod\Models\Business\DirectUrl $DirectUrl
     *           DirectUrl输入
     *     @type string $TaskListId
     *     @type string $ClientToken
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\RequestVod::initOnce();
        parent::__construct($data);
    }

    /**
     * 视频Id
     *
     * Generated from protobuf field <code>string Vid = 1;</code>
     * @return string
     */
    public function getVid()
    {
        return $this->Vid;
    }

    /**
     * 视频Id
     *
     * Generated from protobuf field <code>string Vid = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setVid($var)
    {
        GPBUtil::checkString($var, True);
        $this->Vid = $var;

        return $this;
    }

    /**
     * 工作流模板Id
     *
     * Generated from protobuf field <code>string TemplateId = 2;</code>
     * @return string
     */
    public function getTemplateId()
    {
        return $this->TemplateId;
    }

    /**
     * 工作流模板Id
     *
     * Generated from protobuf field <code>string TemplateId = 2;</code>
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
     * 动态参数
     *
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.WorkflowParams Input = 3;</code>
     * @return \Volc\Service\Vod\Models\Business\WorkflowParams|null
     */
    public function getInput()
    {
        return $this->Input;
    }

    public function hasInput()
    {
        return isset($this->Input);
    }

    public function clearInput()
    {
        unset($this->Input);
    }

    /**
     * 动态参数
     *
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.WorkflowParams Input = 3;</code>
     * @param \Volc\Service\Vod\Models\Business\WorkflowParams $var
     * @return $this
     */
    public function setInput($var)
    {
        GPBUtil::checkMessage($var, \Volc\Service\Vod\Models\Business\WorkflowParams::class);
        $this->Input = $var;

        return $this;
    }

    /**
     * 任务优先级
     *
     * Generated from protobuf field <code>int32 Priority = 4;</code>
     * @return int
     */
    public function getPriority()
    {
        return $this->Priority;
    }

    /**
     * 任务优先级
     *
     * Generated from protobuf field <code>int32 Priority = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setPriority($var)
    {
        GPBUtil::checkInt32($var);
        $this->Priority = $var;

        return $this;
    }

    /**
     * 回调参数
     *
     * Generated from protobuf field <code>string CallbackArgs = 5;</code>
     * @return string
     */
    public function getCallbackArgs()
    {
        return $this->CallbackArgs;
    }

    /**
     * 回调参数
     *
     * Generated from protobuf field <code>string CallbackArgs = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setCallbackArgs($var)
    {
        GPBUtil::checkString($var, True);
        $this->CallbackArgs = $var;

        return $this;
    }

    /**
     * 是否使能闲时转码
     *
     * Generated from protobuf field <code>bool EnableLowPriority = 6;</code>
     * @return bool
     */
    public function getEnableLowPriority()
    {
        return $this->EnableLowPriority;
    }

    /**
     * 是否使能闲时转码
     *
     * Generated from protobuf field <code>bool EnableLowPriority = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableLowPriority($var)
    {
        GPBUtil::checkBool($var);
        $this->EnableLowPriority = $var;

        return $this;
    }

    /**
     * DirectUrl输入
     *
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.DirectUrl DirectUrl = 7;</code>
     * @return \Volc\Service\Vod\Models\Business\DirectUrl|null
     */
    public function getDirectUrl()
    {
        return $this->DirectUrl;
    }

    public function hasDirectUrl()
    {
        return isset($this->DirectUrl);
    }

    public function clearDirectUrl()
    {
        unset($this->DirectUrl);
    }

    /**
     * DirectUrl输入
     *
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.DirectUrl DirectUrl = 7;</code>
     * @param \Volc\Service\Vod\Models\Business\DirectUrl $var
     * @return $this
     */
    public function setDirectUrl($var)
    {
        GPBUtil::checkMessage($var, \Volc\Service\Vod\Models\Business\DirectUrl::class);
        $this->DirectUrl = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string TaskListId = 8;</code>
     * @return string
     */
    public function getTaskListId()
    {
        return $this->TaskListId;
    }

    /**
     * Generated from protobuf field <code>string TaskListId = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setTaskListId($var)
    {
        GPBUtil::checkString($var, True);
        $this->TaskListId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string ClientToken = 9;</code>
     * @return string
     */
    public function getClientToken()
    {
        return $this->ClientToken;
    }

    /**
     * Generated from protobuf field <code>string ClientToken = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setClientToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->ClientToken = $var;

        return $this;
    }

}

