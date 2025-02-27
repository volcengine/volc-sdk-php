<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/business/vod_cdn.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.VodVerifyDomainOwnerResult</code>
 */
class VodVerifyDomainOwnerResult extends \Google\Protobuf\Internal\Message
{
    /**
     * 校验是否成功，true-校验成功，false-校验失败
     *
     * Generated from protobuf field <code>bool VerifyResult = 1;</code>
     */
    protected $VerifyResult = false;
    /**
     * 校验失败的原因（Status=false时返回）
     *
     * Generated from protobuf field <code>string ErrorMessage = 2;</code>
     */
    protected $ErrorMessage = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $VerifyResult
     *           校验是否成功，true-校验成功，false-校验失败
     *     @type string $ErrorMessage
     *           校验失败的原因（Status=false时返回）
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodCdn::initOnce();
        parent::__construct($data);
    }

    /**
     * 校验是否成功，true-校验成功，false-校验失败
     *
     * Generated from protobuf field <code>bool VerifyResult = 1;</code>
     * @return bool
     */
    public function getVerifyResult()
    {
        return $this->VerifyResult;
    }

    /**
     * 校验是否成功，true-校验成功，false-校验失败
     *
     * Generated from protobuf field <code>bool VerifyResult = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setVerifyResult($var)
    {
        GPBUtil::checkBool($var);
        $this->VerifyResult = $var;

        return $this;
    }

    /**
     * 校验失败的原因（Status=false时返回）
     *
     * Generated from protobuf field <code>string ErrorMessage = 2;</code>
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->ErrorMessage;
    }

    /**
     * 校验失败的原因（Status=false时返回）
     *
     * Generated from protobuf field <code>string ErrorMessage = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setErrorMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->ErrorMessage = $var;

        return $this;
    }

}

