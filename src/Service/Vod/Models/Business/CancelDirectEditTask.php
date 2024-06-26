<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/business/vod_edit.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.CancelDirectEditTask</code>
 */
class CancelDirectEditTask extends \Google\Protobuf\Internal\Message
{
    /**
     * 取消信息
     *
     * Generated from protobuf field <code>string Message = 1;</code>
     */
    protected $Message = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Message
     *           取消信息
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodEdit::initOnce();
        parent::__construct($data);
    }

    /**
     * 取消信息
     *
     * Generated from protobuf field <code>string Message = 1;</code>
     * @return string
     */
    public function getMessage()
    {
        return $this->Message;
    }

    /**
     * 取消信息
     *
     * Generated from protobuf field <code>string Message = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->Message = $var;

        return $this;
    }

}

