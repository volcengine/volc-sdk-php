<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/request/request_vod.proto

namespace Volc\Service\Vod\Models\Request;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Request.GetCallbackRecordRequest</code>
 */
class GetCallbackRecordRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string SpaceName = 1;</code>
     */
    protected $SpaceName = '';
    /**
     * 视频id
     *
     * Generated from protobuf field <code>string Vid = 2;</code>
     */
    protected $Vid = '';
    /**
     * 回调状态
     *
     * Generated from protobuf field <code>string Status = 3;</code>
     */
    protected $Status = '';
    /**
     * 开始时间戳
     *
     * Generated from protobuf field <code>int64 StartTime = 4;</code>
     */
    protected $StartTime = 0;
    /**
     * 结束时间戳
     *
     * Generated from protobuf field <code>int64 EndTime = 5;</code>
     */
    protected $EndTime = 0;
    /**
     * 返回大小
     *
     * Generated from protobuf field <code>int32 Limit = 6;</code>
     */
    protected $Limit = 0;
    /**
     * 事件类型
     *
     * Generated from protobuf field <code>string EventType = 7;</code>
     */
    protected $EventType = '';
    /**
     * 指定列举操作需要从此 token 开始。可从上次列举结果中的
     *
     * Generated from protobuf field <code>string ContinuationToken = 8;</code>
     */
    protected $ContinuationToken = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $SpaceName
     *     @type string $Vid
     *           视频id
     *     @type string $Status
     *           回调状态
     *     @type int|string $StartTime
     *           开始时间戳
     *     @type int|string $EndTime
     *           结束时间戳
     *     @type int $Limit
     *           返回大小
     *     @type string $EventType
     *           事件类型
     *     @type string $ContinuationToken
     *           指定列举操作需要从此 token 开始。可从上次列举结果中的
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\RequestVod::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string SpaceName = 1;</code>
     * @return string
     */
    public function getSpaceName()
    {
        return $this->SpaceName;
    }

    /**
     * Generated from protobuf field <code>string SpaceName = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSpaceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->SpaceName = $var;

        return $this;
    }

    /**
     * 视频id
     *
     * Generated from protobuf field <code>string Vid = 2;</code>
     * @return string
     */
    public function getVid()
    {
        return $this->Vid;
    }

    /**
     * 视频id
     *
     * Generated from protobuf field <code>string Vid = 2;</code>
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
     * 回调状态
     *
     * Generated from protobuf field <code>string Status = 3;</code>
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * 回调状态
     *
     * Generated from protobuf field <code>string Status = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkString($var, True);
        $this->Status = $var;

        return $this;
    }

    /**
     * 开始时间戳
     *
     * Generated from protobuf field <code>int64 StartTime = 4;</code>
     * @return int|string
     */
    public function getStartTime()
    {
        return $this->StartTime;
    }

    /**
     * 开始时间戳
     *
     * Generated from protobuf field <code>int64 StartTime = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->StartTime = $var;

        return $this;
    }

    /**
     * 结束时间戳
     *
     * Generated from protobuf field <code>int64 EndTime = 5;</code>
     * @return int|string
     */
    public function getEndTime()
    {
        return $this->EndTime;
    }

    /**
     * 结束时间戳
     *
     * Generated from protobuf field <code>int64 EndTime = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->EndTime = $var;

        return $this;
    }

    /**
     * 返回大小
     *
     * Generated from protobuf field <code>int32 Limit = 6;</code>
     * @return int
     */
    public function getLimit()
    {
        return $this->Limit;
    }

    /**
     * 返回大小
     *
     * Generated from protobuf field <code>int32 Limit = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setLimit($var)
    {
        GPBUtil::checkInt32($var);
        $this->Limit = $var;

        return $this;
    }

    /**
     * 事件类型
     *
     * Generated from protobuf field <code>string EventType = 7;</code>
     * @return string
     */
    public function getEventType()
    {
        return $this->EventType;
    }

    /**
     * 事件类型
     *
     * Generated from protobuf field <code>string EventType = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setEventType($var)
    {
        GPBUtil::checkString($var, True);
        $this->EventType = $var;

        return $this;
    }

    /**
     * 指定列举操作需要从此 token 开始。可从上次列举结果中的
     *
     * Generated from protobuf field <code>string ContinuationToken = 8;</code>
     * @return string
     */
    public function getContinuationToken()
    {
        return $this->ContinuationToken;
    }

    /**
     * 指定列举操作需要从此 token 开始。可从上次列举结果中的
     *
     * Generated from protobuf field <code>string ContinuationToken = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setContinuationToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->ContinuationToken = $var;

        return $this;
    }

}

