<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/business/vod_media.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.VodFileMetaInfo</code>
 */
class VodFileMetaInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * VideoId
     *
     * Generated from protobuf field <code>string Vid = 1;</code>
     */
    protected $Vid = '';
    /**
     * FileId
     *
     * Generated from protobuf field <code>string FileId = 2;</code>
     */
    protected $FileId = '';
    /**
     * MaterialId
     *
     * Generated from protobuf field <code>string MaterialId = 3;</code>
     */
    protected $MaterialId = '';
    /**
     * Uri所指类型 VideoUri MaterialUri PosterUri Unknown
     *
     * Generated from protobuf field <code>string FileType = 5;</code>
     */
    protected $FileType = '';
    /**
     * FileName
     *
     * Generated from protobuf field <code>string FileName = 6;</code>
     */
    protected $FileName = '';
    /**
     * UrlEncode后的FileName
     *
     * Generated from protobuf field <code>string FileNameEncoded = 7;</code>
     */
    protected $FileNameEncoded = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Vid
     *           VideoId
     *     @type string $FileId
     *           FileId
     *     @type string $MaterialId
     *           MaterialId
     *     @type string $FileType
     *           Uri所指类型 VideoUri MaterialUri PosterUri Unknown
     *     @type string $FileName
     *           FileName
     *     @type string $FileNameEncoded
     *           UrlEncode后的FileName
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodMedia::initOnce();
        parent::__construct($data);
    }

    /**
     * VideoId
     *
     * Generated from protobuf field <code>string Vid = 1;</code>
     * @return string
     */
    public function getVid()
    {
        return $this->Vid;
    }

    /**
     * VideoId
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
     * FileId
     *
     * Generated from protobuf field <code>string FileId = 2;</code>
     * @return string
     */
    public function getFileId()
    {
        return $this->FileId;
    }

    /**
     * FileId
     *
     * Generated from protobuf field <code>string FileId = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFileId($var)
    {
        GPBUtil::checkString($var, True);
        $this->FileId = $var;

        return $this;
    }

    /**
     * MaterialId
     *
     * Generated from protobuf field <code>string MaterialId = 3;</code>
     * @return string
     */
    public function getMaterialId()
    {
        return $this->MaterialId;
    }

    /**
     * MaterialId
     *
     * Generated from protobuf field <code>string MaterialId = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setMaterialId($var)
    {
        GPBUtil::checkString($var, True);
        $this->MaterialId = $var;

        return $this;
    }

    /**
     * Uri所指类型 VideoUri MaterialUri PosterUri Unknown
     *
     * Generated from protobuf field <code>string FileType = 5;</code>
     * @return string
     */
    public function getFileType()
    {
        return $this->FileType;
    }

    /**
     * Uri所指类型 VideoUri MaterialUri PosterUri Unknown
     *
     * Generated from protobuf field <code>string FileType = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setFileType($var)
    {
        GPBUtil::checkString($var, True);
        $this->FileType = $var;

        return $this;
    }

    /**
     * FileName
     *
     * Generated from protobuf field <code>string FileName = 6;</code>
     * @return string
     */
    public function getFileName()
    {
        return $this->FileName;
    }

    /**
     * FileName
     *
     * Generated from protobuf field <code>string FileName = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setFileName($var)
    {
        GPBUtil::checkString($var, True);
        $this->FileName = $var;

        return $this;
    }

    /**
     * UrlEncode后的FileName
     *
     * Generated from protobuf field <code>string FileNameEncoded = 7;</code>
     * @return string
     */
    public function getFileNameEncoded()
    {
        return $this->FileNameEncoded;
    }

    /**
     * UrlEncode后的FileName
     *
     * Generated from protobuf field <code>string FileNameEncoded = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setFileNameEncoded($var)
    {
        GPBUtil::checkString($var, True);
        $this->FileNameEncoded = $var;

        return $this;
    }

}

