<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: imp/business/imp_common.proto

namespace Volc\Service\Imp\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Imp.Models.Business.OutputOverrideParams</code>
 */
class OutputOverrideParams extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated string ActivityId = 1;</code>
     */
    private $ActivityId;
    /**
     * Generated from protobuf field <code>.Volcengine.Imp.Models.Business.OutputPath OutputPath = 2;</code>
     */
    protected $OutputPath = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $ActivityId
     *     @type \Volc\Service\Imp\Models\Business\OutputPath $OutputPath
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Imp\Models\GPBMetadata\ImpCommon::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated string ActivityId = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getActivityId()
    {
        return $this->ActivityId;
    }

    /**
     * Generated from protobuf field <code>repeated string ActivityId = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setActivityId($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->ActivityId = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Volcengine.Imp.Models.Business.OutputPath OutputPath = 2;</code>
     * @return \Volc\Service\Imp\Models\Business\OutputPath
     */
    public function getOutputPath()
    {
        return $this->OutputPath;
    }

    /**
     * Generated from protobuf field <code>.Volcengine.Imp.Models.Business.OutputPath OutputPath = 2;</code>
     * @param \Volc\Service\Imp\Models\Business\OutputPath $var
     * @return $this
     */
    public function setOutputPath($var)
    {
        GPBUtil::checkMessage($var, \Volc\Service\Imp\Models\Business\OutputPath::class);
        $this->OutputPath = $var;

        return $this;
    }

}
