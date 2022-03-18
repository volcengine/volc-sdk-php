<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vod/business/vod_media.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.VodClassification</code>
 */
class VodClassification extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string SpaceName = 1;</code>
     */
    protected $SpaceName = '';
    /**
     * Generated from protobuf field <code>int64 ClassificationId = 2;</code>
     */
    protected $ClassificationId = 0;
    /**
     * Generated from protobuf field <code>int32 Level = 3;</code>
     */
    protected $Level = 0;
    /**
     * Generated from protobuf field <code>string Classification = 4;</code>
     */
    protected $Classification = '';
    /**
     * Generated from protobuf field <code>int64 ParentClassificationId = 5;</code>
     */
    protected $ParentClassificationId = 0;
    /**
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.VodClassification SubClassification = 6;</code>
     */
    protected $SubClassification = null;
    /**
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodClassification SubClassificationTrees = 7;</code>
     */
    private $SubClassificationTrees;
    /**
     * Generated from protobuf field <code>string CreatedAt = 8;</code>
     */
    protected $CreatedAt = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $SpaceName
     *     @type int|string $ClassificationId
     *     @type int $Level
     *     @type string $Classification
     *     @type int|string $ParentClassificationId
     *     @type \Volc\Service\Vod\Models\Business\VodClassification $SubClassification
     *     @type \Volc\Service\Vod\Models\Business\VodClassification[]|\Google\Protobuf\Internal\RepeatedField $SubClassificationTrees
     *     @type string $CreatedAt
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodMedia::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string SpaceName = 1;</code>
     * @return string
     */
    public function getSpaceName()
    {
        return $this->SpaceName;
    }

    /**
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
     * Generated from protobuf field <code>int64 ClassificationId = 2;</code>
     * @return int|string
     */
    public function getClassificationId()
    {
        return $this->ClassificationId;
    }

    /**
     * Generated from protobuf field <code>int64 ClassificationId = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setClassificationId($var)
    {
        GPBUtil::checkInt64($var);
        $this->ClassificationId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 Level = 3;</code>
     * @return int
     */
    public function getLevel()
    {
        return $this->Level;
    }

    /**
     * Generated from protobuf field <code>int32 Level = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setLevel($var)
    {
        GPBUtil::checkInt32($var);
        $this->Level = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Classification = 4;</code>
     * @return string
     */
    public function getClassification()
    {
        return $this->Classification;
    }

    /**
     * Generated from protobuf field <code>string Classification = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setClassification($var)
    {
        GPBUtil::checkString($var, True);
        $this->Classification = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 ParentClassificationId = 5;</code>
     * @return int|string
     */
    public function getParentClassificationId()
    {
        return $this->ParentClassificationId;
    }

    /**
     * Generated from protobuf field <code>int64 ParentClassificationId = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setParentClassificationId($var)
    {
        GPBUtil::checkInt64($var);
        $this->ParentClassificationId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.VodClassification SubClassification = 6;</code>
     * @return \Volc\Service\Vod\Models\Business\VodClassification
     */
    public function getSubClassification()
    {
        return $this->SubClassification;
    }

    /**
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.VodClassification SubClassification = 6;</code>
     * @param \Volc\Service\Vod\Models\Business\VodClassification $var
     * @return $this
     */
    public function setSubClassification($var)
    {
        GPBUtil::checkMessage($var, \Volc\Service\Vod\Models\Business\VodClassification::class);
        $this->SubClassification = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodClassification SubClassificationTrees = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSubClassificationTrees()
    {
        return $this->SubClassificationTrees;
    }

    /**
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodClassification SubClassificationTrees = 7;</code>
     * @param \Volc\Service\Vod\Models\Business\VodClassification[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSubClassificationTrees($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Volc\Service\Vod\Models\Business\VodClassification::class);
        $this->SubClassificationTrees = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string CreatedAt = 8;</code>
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->CreatedAt;
    }

    /**
     * Generated from protobuf field <code>string CreatedAt = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setCreatedAt($var)
    {
        GPBUtil::checkString($var, True);
        $this->CreatedAt = $var;

        return $this;
    }

}
