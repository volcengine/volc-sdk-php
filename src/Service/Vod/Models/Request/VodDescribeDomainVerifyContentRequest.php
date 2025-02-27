<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/request/request_vod.proto

namespace Volc\Service\Vod\Models\Request;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Request.VodDescribeDomainVerifyContentRequest</code>
 */
class VodDescribeDomainVerifyContentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * 需要校验归属权的域名
     *
     * Generated from protobuf field <code>string Domain = 1;</code>
     */
    protected $Domain = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Domain
     *           需要校验归属权的域名
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\RequestVod::initOnce();
        parent::__construct($data);
    }

    /**
     * 需要校验归属权的域名
     *
     * Generated from protobuf field <code>string Domain = 1;</code>
     * @return string
     */
    public function getDomain()
    {
        return $this->Domain;
    }

    /**
     * 需要校验归属权的域名
     *
     * Generated from protobuf field <code>string Domain = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDomain($var)
    {
        GPBUtil::checkString($var, True);
        $this->Domain = $var;

        return $this;
    }

}

