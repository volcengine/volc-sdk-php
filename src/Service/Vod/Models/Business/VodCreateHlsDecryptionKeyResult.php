<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/business/vod_play.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.VodCreateHlsDecryptionKeyResult</code>
 */
class VodCreateHlsDecryptionKeyResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string SecretKey = 1;</code>
     */
    protected $SecretKey = '';
    /**
     * Generated from protobuf field <code>string Ak = 2;</code>
     */
    protected $Ak = '';
    /**
     * SecretKey是否是已经base64过后的SecretKey
     *
     * Generated from protobuf field <code>bool IsBase64 = 3;</code>
     */
    protected $IsBase64 = false;
    /**
     *真实的密钥格式 二进制密钥则是binary 缺省就是string
     *
     * Generated from protobuf field <code>string KeyFormat = 4;</code>
     */
    protected $KeyFormat = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $SecretKey
     *     @type string $Ak
     *     @type bool $IsBase64
     *           SecretKey是否是已经base64过后的SecretKey
     *     @type string $KeyFormat
     *          真实的密钥格式 二进制密钥则是binary 缺省就是string
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodPlay::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string SecretKey = 1;</code>
     * @return string
     */
    public function getSecretKey()
    {
        return $this->SecretKey;
    }

    /**
     * Generated from protobuf field <code>string SecretKey = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSecretKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->SecretKey = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Ak = 2;</code>
     * @return string
     */
    public function getAk()
    {
        return $this->Ak;
    }

    /**
     * Generated from protobuf field <code>string Ak = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAk($var)
    {
        GPBUtil::checkString($var, True);
        $this->Ak = $var;

        return $this;
    }

    /**
     * SecretKey是否是已经base64过后的SecretKey
     *
     * Generated from protobuf field <code>bool IsBase64 = 3;</code>
     * @return bool
     */
    public function getIsBase64()
    {
        return $this->IsBase64;
    }

    /**
     * SecretKey是否是已经base64过后的SecretKey
     *
     * Generated from protobuf field <code>bool IsBase64 = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsBase64($var)
    {
        GPBUtil::checkBool($var);
        $this->IsBase64 = $var;

        return $this;
    }

    /**
     *真实的密钥格式 二进制密钥则是binary 缺省就是string
     *
     * Generated from protobuf field <code>string KeyFormat = 4;</code>
     * @return string
     */
    public function getKeyFormat()
    {
        return $this->KeyFormat;
    }

    /**
     *真实的密钥格式 二进制密钥则是binary 缺省就是string
     *
     * Generated from protobuf field <code>string KeyFormat = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setKeyFormat($var)
    {
        GPBUtil::checkString($var, True);
        $this->KeyFormat = $var;

        return $this;
    }

}

