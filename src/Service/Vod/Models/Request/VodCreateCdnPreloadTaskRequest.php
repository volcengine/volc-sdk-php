<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/request/request_vod.proto

namespace Volc\Service\Vod\Models\Request;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Request.VodCreateCdnPreloadTaskRequest</code>
 */
class VodCreateCdnPreloadTaskRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * 空间名 
     *
     * Generated from protobuf field <code>string SpaceName = 1;</code>
     */
    protected $SpaceName = '';
    /**
     * 预热Url 
     *
     * Generated from protobuf field <code>string Urls = 2;</code>
     */
    protected $Urls = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $SpaceName
     *           空间名 
     *     @type string $Urls
     *           预热Url 
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
     * 预热Url 
     *
     * Generated from protobuf field <code>string Urls = 2;</code>
     * @return string
     */
    public function getUrls()
    {
        return $this->Urls;
    }

    /**
     * 预热Url 
     *
     * Generated from protobuf field <code>string Urls = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUrls($var)
    {
        GPBUtil::checkString($var, True);
        $this->Urls = $var;

        return $this;
    }

}

