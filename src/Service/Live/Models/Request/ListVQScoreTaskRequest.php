<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: live/request/request_live.proto

namespace Volc\Service\Live\Models\Request;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Live.Models.Request.ListVQScoreTaskRequest</code>
 */
class ListVQScoreTaskRequest
{
    /**
     *查询开始时间，UTC时间格式，支持查询最近30天内的数据
     *
     * Generated from protobuf field <code>string StartTime = 1;</code>
     */
    public $StartTime = '';
    /**
     *查询结束时间，UTC时间格式，支持查询最近30天内的数据
     *
     * Generated from protobuf field <code>string EndTime = 2;</code>
     */
    public $EndTime = '';
    /**
     *当前页码，取值范围为 。
     *
     * Generated from protobuf field <code>int64 PageNum = 3;</code>
     */
    public $PageNum;
    /**
     *分页大小，取值范围为 。
     *
     * Generated from protobuf field <code>int64 PageSize = 4;</code>
     */
    public $PageSize;
    /**
     *测评状态，0：全部，1：测试中，2：成功，3：失败
     *
     * Generated from protobuf field <code>int64 Status = 5;</code>
     */
    public $Status;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $StartTime
     *          查询开始时间，UTC时间格式，支持查询最近30天内的数据
     *     @type string $EndTime
     *          查询结束时间，UTC时间格式，支持查询最近30天内的数据
     *     @type int|string $PageNum
     *          当前页码，取值范围为 。
     *     @type int|string $PageSize
     *          分页大小，取值范围为 。
     *     @type int|string $Status
     *          测评状态，0：全部，1：测试中，2：成功，3：失败
     * }
     */
    /**
     *查询开始时间，UTC时间格式，支持查询最近30天内的数据
     *
     * Generated from protobuf field <code>string StartTime = 1;</code>
     * @return string
     */
    public function getStartTime()
    {
        return $this->StartTime;
    }

    /**
     *查询开始时间，UTC时间格式，支持查询最近30天内的数据
     *
     * Generated from protobuf field <code>string StartTime = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->StartTime = $var;

        return $this;
    }

    /**
     *查询结束时间，UTC时间格式，支持查询最近30天内的数据
     *
     * Generated from protobuf field <code>string EndTime = 2;</code>
     * @return string
     */
    public function getEndTime()
    {
        return $this->EndTime;
    }

    /**
     *查询结束时间，UTC时间格式，支持查询最近30天内的数据
     *
     * Generated from protobuf field <code>string EndTime = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->EndTime = $var;

        return $this;
    }

    /**
     *当前页码，取值范围为 。
     *
     * Generated from protobuf field <code>int64 PageNum = 3;</code>
     * @return int|string
     */
    public function getPageNum()
    {
        return $this->PageNum;
    }

    /**
     *当前页码，取值范围为 。
     *
     * Generated from protobuf field <code>int64 PageNum = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPageNum($var)
    {
        GPBUtil::checkInt64($var);
        $this->PageNum = $var;

        return $this;
    }

    /**
     *分页大小，取值范围为 。
     *
     * Generated from protobuf field <code>int64 PageSize = 4;</code>
     * @return int|string
     */
    public function getPageSize()
    {
        return $this->PageSize;
    }

    /**
     *分页大小，取值范围为 。
     *
     * Generated from protobuf field <code>int64 PageSize = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt64($var);
        $this->PageSize = $var;

        return $this;
    }

    /**
     *测评状态，0：全部，1：测试中，2：成功，3：失败
     *
     * Generated from protobuf field <code>int64 Status = 5;</code>
     * @return int|string
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     *测评状态，0：全部，1：测试中，2：成功，3：失败
     *
     * Generated from protobuf field <code>int64 Status = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkInt64($var);
        $this->Status = $var;

        return $this;
    }

}

