<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/business/vod_media.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.VodCreateVideoClassificationData</code>
 */
class VodCreateVideoClassificationData extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 ClassificationId = 1;</code>
     */
    protected $ClassificationId = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $ClassificationId
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodMedia::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 ClassificationId = 1;</code>
     * @return int|string
     */
    public function getClassificationId()
    {
        return $this->ClassificationId;
    }

    /**
     * Generated from protobuf field <code>int64 ClassificationId = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setClassificationId($var)
    {
        GPBUtil::checkInt64($var);
        $this->ClassificationId = $var;

        return $this;
    }

}

