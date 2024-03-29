<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/request/request_vod.proto

namespace Volc\Service\Vod\Models\Request;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Request.VodListFileMetaInfosByFileNamesRequest</code>
 */
class VodListFileMetaInfosByFileNamesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * 必传 filename所属空间名 
     *
     * Generated from protobuf field <code>string SpaceName = 1;</code>
     */
    protected $SpaceName = '';
    /**
     * 需要查询的FileName 为了防止,出现在filename中,需要将filename进行urlencode后
     * 用,连接进行传入  一次最多传30个
     *
     * Generated from protobuf field <code>string FileNameEncodeds = 2;</code>
     */
    protected $FileNameEncodeds = '';
    /**
     *非必选 挂载Bucket专用
     *
     * Generated from protobuf field <code>string BucketName = 3;</code>
     */
    protected $BucketName = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $SpaceName
     *           必传 filename所属空间名 
     *     @type string $FileNameEncodeds
     *           需要查询的FileName 为了防止,出现在filename中,需要将filename进行urlencode后
     *           用,连接进行传入  一次最多传30个
     *     @type string $BucketName
     *          非必选 挂载Bucket专用
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\RequestVod::initOnce();
        parent::__construct($data);
    }

    /**
     * 必传 filename所属空间名 
     *
     * Generated from protobuf field <code>string SpaceName = 1;</code>
     * @return string
     */
    public function getSpaceName()
    {
        return $this->SpaceName;
    }

    /**
     * 必传 filename所属空间名 
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
     * 需要查询的FileName 为了防止,出现在filename中,需要将filename进行urlencode后
     * 用,连接进行传入  一次最多传30个
     *
     * Generated from protobuf field <code>string FileNameEncodeds = 2;</code>
     * @return string
     */
    public function getFileNameEncodeds()
    {
        return $this->FileNameEncodeds;
    }

    /**
     * 需要查询的FileName 为了防止,出现在filename中,需要将filename进行urlencode后
     * 用,连接进行传入  一次最多传30个
     *
     * Generated from protobuf field <code>string FileNameEncodeds = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFileNameEncodeds($var)
    {
        GPBUtil::checkString($var, True);
        $this->FileNameEncodeds = $var;

        return $this;
    }

    /**
     *非必选 挂载Bucket专用
     *
     * Generated from protobuf field <code>string BucketName = 3;</code>
     * @return string
     */
    public function getBucketName()
    {
        return $this->BucketName;
    }

    /**
     *非必选 挂载Bucket专用
     *
     * Generated from protobuf field <code>string BucketName = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setBucketName($var)
    {
        GPBUtil::checkString($var, True);
        $this->BucketName = $var;

        return $this;
    }

}

