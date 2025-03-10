<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/business/vod_upload.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.PartUploadInfo</code>
 */
class PartUploadInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * 分片大小 
     *
     * Generated from protobuf field <code>int64 PartSize = 1;</code>
     */
    protected $PartSize = 0;
    /**
     * 分片上传URLs 
     *
     * Generated from protobuf field <code>repeated string PartPutUrls = 2;</code>
     */
    private $PartPutUrls;
    /**
     * 合并分片URL 
     *
     * Generated from protobuf field <code>string CompletePartUrl = 3;</code>
     */
    protected $CompletePartUrl = '';
    /**
     * 合并分片阶段需携带的headers 
     *
     * Generated from protobuf field <code>map<string, string> CompleteUrlHeaders = 4;</code>
     */
    private $CompleteUrlHeaders;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $PartSize
     *           分片大小 
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $PartPutUrls
     *           分片上传URLs 
     *     @type string $CompletePartUrl
     *           合并分片URL 
     *     @type array|\Google\Protobuf\Internal\MapField $CompleteUrlHeaders
     *           合并分片阶段需携带的headers 
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodUpload::initOnce();
        parent::__construct($data);
    }

    /**
     * 分片大小 
     *
     * Generated from protobuf field <code>int64 PartSize = 1;</code>
     * @return int|string
     */
    public function getPartSize()
    {
        return $this->PartSize;
    }

    /**
     * 分片大小 
     *
     * Generated from protobuf field <code>int64 PartSize = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPartSize($var)
    {
        GPBUtil::checkInt64($var);
        $this->PartSize = $var;

        return $this;
    }

    /**
     * 分片上传URLs 
     *
     * Generated from protobuf field <code>repeated string PartPutUrls = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPartPutUrls()
    {
        return $this->PartPutUrls;
    }

    /**
     * 分片上传URLs 
     *
     * Generated from protobuf field <code>repeated string PartPutUrls = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPartPutUrls($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->PartPutUrls = $arr;

        return $this;
    }

    /**
     * 合并分片URL 
     *
     * Generated from protobuf field <code>string CompletePartUrl = 3;</code>
     * @return string
     */
    public function getCompletePartUrl()
    {
        return $this->CompletePartUrl;
    }

    /**
     * 合并分片URL 
     *
     * Generated from protobuf field <code>string CompletePartUrl = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setCompletePartUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->CompletePartUrl = $var;

        return $this;
    }

    /**
     * 合并分片阶段需携带的headers 
     *
     * Generated from protobuf field <code>map<string, string> CompleteUrlHeaders = 4;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getCompleteUrlHeaders()
    {
        return $this->CompleteUrlHeaders;
    }

    /**
     * 合并分片阶段需携带的headers 
     *
     * Generated from protobuf field <code>map<string, string> CompleteUrlHeaders = 4;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setCompleteUrlHeaders($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->CompleteUrlHeaders = $arr;

        return $this;
    }

}

