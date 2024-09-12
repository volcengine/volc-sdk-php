<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/response/response_vod.proto

namespace Volc\Service\Vod\Models\Response;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Response.VodSubmitDirectEditTaskSyncResponse</code>
 */
class VodSubmitDirectEditTaskSyncResponse extends \Google\Protobuf\Internal\Message
{
    /**
     *响应通用信息
     *
     * Generated from protobuf field <code>.Volcengine.Base.Models.Base.ResponseMetadata ResponseMetadata = 1;</code>
     */
    protected $ResponseMetadata = null;
    /**
     *响应结果
     *
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.SubmitDirectEditTaskSyncResult Result = 2;</code>
     */
    protected $Result = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Volc\Service\Base\Models\Base\ResponseMetadata $ResponseMetadata
     *          响应通用信息
     *     @type \Volc\Service\Vod\Models\Business\SubmitDirectEditTaskSyncResult $Result
     *          响应结果
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\ResponseVod::initOnce();
        parent::__construct($data);
    }

    /**
     *响应通用信息
     *
     * Generated from protobuf field <code>.Volcengine.Base.Models.Base.ResponseMetadata ResponseMetadata = 1;</code>
     * @return \Volc\Service\Base\Models\Base\ResponseMetadata|null
     */
    public function getResponseMetadata()
    {
        return $this->ResponseMetadata;
    }

    public function hasResponseMetadata()
    {
        return isset($this->ResponseMetadata);
    }

    public function clearResponseMetadata()
    {
        unset($this->ResponseMetadata);
    }

    /**
     *响应通用信息
     *
     * Generated from protobuf field <code>.Volcengine.Base.Models.Base.ResponseMetadata ResponseMetadata = 1;</code>
     * @param \Volc\Service\Base\Models\Base\ResponseMetadata $var
     * @return $this
     */
    public function setResponseMetadata($var)
    {
        GPBUtil::checkMessage($var, \Volc\Service\Base\Models\Base\ResponseMetadata::class);
        $this->ResponseMetadata = $var;

        return $this;
    }

    /**
     *响应结果
     *
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.SubmitDirectEditTaskSyncResult Result = 2;</code>
     * @return \Volc\Service\Vod\Models\Business\SubmitDirectEditTaskSyncResult|null
     */
    public function getResult()
    {
        return $this->Result;
    }

    public function hasResult()
    {
        return isset($this->Result);
    }

    public function clearResult()
    {
        unset($this->Result);
    }

    /**
     *响应结果
     *
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.SubmitDirectEditTaskSyncResult Result = 2;</code>
     * @param \Volc\Service\Vod\Models\Business\SubmitDirectEditTaskSyncResult $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkMessage($var, \Volc\Service\Vod\Models\Business\SubmitDirectEditTaskSyncResult::class);
        $this->Result = $var;

        return $this;
    }

}

