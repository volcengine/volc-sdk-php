<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/request/request_vod.proto

namespace Volc\Service\Vod\Models\Request;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Request.VodListPCDNDomainRequest</code>
 */
class VodListPCDNDomainRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * 空间名 
     *
     * Generated from protobuf field <code>string SpaceName = 1;</code>
     */
    protected $SpaceName = '';
    /**
     *设置跨域名页数。传 0 表示获取第一页。每页大小默认为 10 条域名结果
     *
     * Generated from protobuf field <code>int32 Offset = 2;</code>
     */
    protected $Offset = 0;
    /**
     *当前页数量条数（默认10）
     *
     * Generated from protobuf field <code>int32 Limit = 3;</code>
     */
    protected $Limit = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $SpaceName
     *           空间名 
     *     @type int $Offset
     *          设置跨域名页数。传 0 表示获取第一页。每页大小默认为 10 条域名结果
     *     @type int $Limit
     *          当前页数量条数（默认10）
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\RequestVod::initOnce();
        parent::__construct($data);
    }

    /**
     * 空间名 
     *
     * Generated from protobuf field <code>string SpaceName = 1;</code>
     * @return string
     */
    public function getSpaceName()
    {
        return $this->SpaceName;
    }

    /**
     * 空间名 
     *
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
     *设置跨域名页数。传 0 表示获取第一页。每页大小默认为 10 条域名结果
     *
     * Generated from protobuf field <code>int32 Offset = 2;</code>
     * @return int
     */
    public function getOffset()
    {
        return $this->Offset;
    }

    /**
     *设置跨域名页数。传 0 表示获取第一页。每页大小默认为 10 条域名结果
     *
     * Generated from protobuf field <code>int32 Offset = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setOffset($var)
    {
        GPBUtil::checkInt32($var);
        $this->Offset = $var;

        return $this;
    }

    /**
     *当前页数量条数（默认10）
     *
     * Generated from protobuf field <code>int32 Limit = 3;</code>
     * @return int
     */
    public function getLimit()
    {
        return $this->Limit;
    }

    /**
     *当前页数量条数（默认10）
     *
     * Generated from protobuf field <code>int32 Limit = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setLimit($var)
    {
        GPBUtil::checkInt32($var);
        $this->Limit = $var;

        return $this;
    }

}

