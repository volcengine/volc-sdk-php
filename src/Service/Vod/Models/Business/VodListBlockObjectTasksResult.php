<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/business/vod_object.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.VodListBlockObjectTasksResult</code>
 */
class VodListBlockObjectTasksResult extends \Google\Protobuf\Internal\Message
{
    /**
     * object封禁/解封任务信息
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.ObjectBlockTaskInfo ObjectBlockTaskInfos = 1;</code>
     */
    private $ObjectBlockTaskInfos;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Volc\Service\Vod\Models\Business\ObjectBlockTaskInfo[]|\Google\Protobuf\Internal\RepeatedField $ObjectBlockTaskInfos
     *           object封禁/解封任务信息
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodObject::initOnce();
        parent::__construct($data);
    }

    /**
     * object封禁/解封任务信息
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.ObjectBlockTaskInfo ObjectBlockTaskInfos = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getObjectBlockTaskInfos()
    {
        return $this->ObjectBlockTaskInfos;
    }

    /**
     * object封禁/解封任务信息
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.ObjectBlockTaskInfo ObjectBlockTaskInfos = 1;</code>
     * @param \Volc\Service\Vod\Models\Business\ObjectBlockTaskInfo[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setObjectBlockTaskInfos($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Volc\Service\Vod\Models\Business\ObjectBlockTaskInfo::class);
        $this->ObjectBlockTaskInfos = $arr;

        return $this;
    }

}
