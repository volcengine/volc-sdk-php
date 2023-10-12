<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/business/vod_project.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.VodListProjectsResult</code>
 */
class VodListProjectsResult extends \Google\Protobuf\Internal\Message
{
    /**
     * 项目列表
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodProjectInfo ProjectList = 1;</code>
     */
    private $ProjectList;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Volc\Service\Vod\Models\Business\VodProjectInfo[]|\Google\Protobuf\Internal\RepeatedField $ProjectList
     *           项目列表
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodProject::initOnce();
        parent::__construct($data);
    }

    /**
     * 项目列表
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodProjectInfo ProjectList = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getProjectList()
    {
        return $this->ProjectList;
    }

    /**
     * 项目列表
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodProjectInfo ProjectList = 1;</code>
     * @param \Volc\Service\Vod\Models\Business\VodProjectInfo[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setProjectList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Volc\Service\Vod\Models\Business\VodProjectInfo::class);
        $this->ProjectList = $arr;

        return $this;
    }

}

