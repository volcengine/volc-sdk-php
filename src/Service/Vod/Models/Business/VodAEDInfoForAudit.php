<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/business/vod_media.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.VodAEDInfoForAudit</code>
 */
class VodAEDInfoForAudit extends \Google\Protobuf\Internal\Message
{
    /**
     * 识别出来的音频事件信息
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodAEDEventItemForAudit EventItems = 1;</code>
     */
    private $EventItems;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Volc\Service\Vod\Models\Business\VodAEDEventItemForAudit[]|\Google\Protobuf\Internal\RepeatedField $EventItems
     *           识别出来的音频事件信息
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodMedia::initOnce();
        parent::__construct($data);
    }

    /**
     * 识别出来的音频事件信息
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodAEDEventItemForAudit EventItems = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEventItems()
    {
        return $this->EventItems;
    }

    /**
     * 识别出来的音频事件信息
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodAEDEventItemForAudit EventItems = 1;</code>
     * @param \Volc\Service\Vod\Models\Business\VodAEDEventItemForAudit[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEventItems($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Volc\Service\Vod\Models\Business\VodAEDEventItemForAudit::class);
        $this->EventItems = $arr;

        return $this;
    }

}

