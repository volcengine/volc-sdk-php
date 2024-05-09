<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: imp/business/imp_common.proto

namespace Volc\Service\Imp\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Imp.Models.Business.OverrideParams</code>
 */
class OverrideParams extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .Volcengine.Imp.Models.Business.SmartEraseOverrideParams SmartErase = 1;</code>
     */
    private $SmartErase;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Volc\Service\Imp\Models\Business\SmartEraseOverrideParams[]|\Google\Protobuf\Internal\RepeatedField $SmartErase
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Imp\Models\GPBMetadata\ImpCommon::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .Volcengine.Imp.Models.Business.SmartEraseOverrideParams SmartErase = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSmartErase()
    {
        return $this->SmartErase;
    }

    /**
     * Generated from protobuf field <code>repeated .Volcengine.Imp.Models.Business.SmartEraseOverrideParams SmartErase = 1;</code>
     * @param \Volc\Service\Imp\Models\Business\SmartEraseOverrideParams[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSmartErase($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Volc\Service\Imp\Models\Business\SmartEraseOverrideParams::class);
        $this->SmartErase = $arr;

        return $this;
    }

}

