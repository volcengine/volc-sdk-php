<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/business/vod_media.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.VodUpdateFileStorageClassData</code>
 */
class VodUpdateFileStorageClassData extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated string NotExistFileNames = 1;</code>
     */
    private $NotExistFileNames;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $NotExistFileNames
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodMedia::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated string NotExistFileNames = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNotExistFileNames()
    {
        return $this->NotExistFileNames;
    }

    /**
     * Generated from protobuf field <code>repeated string NotExistFileNames = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNotExistFileNames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->NotExistFileNames = $arr;

        return $this;
    }

}

