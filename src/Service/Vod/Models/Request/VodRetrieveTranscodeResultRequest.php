<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vod/request/request_vod.proto

namespace Volc\Service\Vod\Models\Request;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Request.VodRetrieveTranscodeResultRequest</code>
 */
class VodRetrieveTranscodeResultRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * 视频Id
     *
     * Generated from protobuf field <code>string Vid = 1;</code>
     */
    protected $Vid = '';
    /**
     * 预期获取的结果类型，可选：inspection、category_tags，支持多选，用,分隔，例如inspection,category_tags
     *
     * Generated from protobuf field <code>string ResultType = 2;</code>
     */
    protected $ResultType = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Vid
     *           视频Id
     *     @type string $ResultType
     *           预期获取的结果类型，可选：inspection、category_tags，支持多选，用,分隔，例如inspection,category_tags
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
     * 预期获取的结果类型，可选：inspection、category_tags，支持多选，用,分隔，例如inspection,category_tags
     *
     * Generated from protobuf field <code>string ResultType = 2;</code>
     * @return string
     */
    public function getResultType()
    {
        return $this->ResultType;
    }

    /**
     * 预期获取的结果类型，可选：inspection、category_tags，支持多选，用,分隔，例如inspection,category_tags
     *
     * Generated from protobuf field <code>string ResultType = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setResultType($var)
    {
        GPBUtil::checkString($var, True);
        $this->ResultType = $var;

        return $this;
    }

}

