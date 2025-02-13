<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: imp/business/imp_common.proto

namespace Volc\Service\Imp\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Imp.Models.Business.LogoDefinition</code>
 */
class LogoDefinition extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string Type = 1;</code>
     */
    protected $Type = '';
    /**
     * Generated from protobuf field <code>.Volcengine.Imp.Models.Business.TextLogoDefinition TextLogoDefinition = 2;</code>
     */
    protected $TextLogoDefinition = null;
    /**
     * Generated from protobuf field <code>.Volcengine.Imp.Models.Business.ImageLogoDefinition ImageLogoDefinition = 3;</code>
     */
    protected $ImageLogoDefinition = null;
    /**
     * Generated from protobuf field <code>.Volcengine.Imp.Models.Business.LogoPosition Position = 4;</code>
     */
    protected $Position = null;
    /**
     * Generated from protobuf field <code>.Volcengine.Imp.Models.Business.TimeLine TimeLine = 5;</code>
     */
    protected $TimeLine = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Type
     *     @type \Volc\Service\Imp\Models\Business\TextLogoDefinition $TextLogoDefinition
     *     @type \Volc\Service\Imp\Models\Business\ImageLogoDefinition $ImageLogoDefinition
     *     @type \Volc\Service\Imp\Models\Business\LogoPosition $Position
     *     @type \Volc\Service\Imp\Models\Business\TimeLine $TimeLine
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Imp\Models\GPBMetadata\ImpCommon::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string Type = 1;</code>
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * Generated from protobuf field <code>string Type = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->Type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Volcengine.Imp.Models.Business.TextLogoDefinition TextLogoDefinition = 2;</code>
     * @return \Volc\Service\Imp\Models\Business\TextLogoDefinition|null
     */
    public function getTextLogoDefinition()
    {
        return $this->TextLogoDefinition;
    }

    public function hasTextLogoDefinition()
    {
        return isset($this->TextLogoDefinition);
    }

    public function clearTextLogoDefinition()
    {
        unset($this->TextLogoDefinition);
    }

    /**
     * Generated from protobuf field <code>.Volcengine.Imp.Models.Business.TextLogoDefinition TextLogoDefinition = 2;</code>
     * @param \Volc\Service\Imp\Models\Business\TextLogoDefinition $var
     * @return $this
     */
    public function setTextLogoDefinition($var)
    {
        GPBUtil::checkMessage($var, \Volc\Service\Imp\Models\Business\TextLogoDefinition::class);
        $this->TextLogoDefinition = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Volcengine.Imp.Models.Business.ImageLogoDefinition ImageLogoDefinition = 3;</code>
     * @return \Volc\Service\Imp\Models\Business\ImageLogoDefinition|null
     */
    public function getImageLogoDefinition()
    {
        return $this->ImageLogoDefinition;
    }

    public function hasImageLogoDefinition()
    {
        return isset($this->ImageLogoDefinition);
    }

    public function clearImageLogoDefinition()
    {
        unset($this->ImageLogoDefinition);
    }

    /**
     * Generated from protobuf field <code>.Volcengine.Imp.Models.Business.ImageLogoDefinition ImageLogoDefinition = 3;</code>
     * @param \Volc\Service\Imp\Models\Business\ImageLogoDefinition $var
     * @return $this
     */
    public function setImageLogoDefinition($var)
    {
        GPBUtil::checkMessage($var, \Volc\Service\Imp\Models\Business\ImageLogoDefinition::class);
        $this->ImageLogoDefinition = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Volcengine.Imp.Models.Business.LogoPosition Position = 4;</code>
     * @return \Volc\Service\Imp\Models\Business\LogoPosition|null
     */
    public function getPosition()
    {
        return $this->Position;
    }

    public function hasPosition()
    {
        return isset($this->Position);
    }

    public function clearPosition()
    {
        unset($this->Position);
    }

    /**
     * Generated from protobuf field <code>.Volcengine.Imp.Models.Business.LogoPosition Position = 4;</code>
     * @param \Volc\Service\Imp\Models\Business\LogoPosition $var
     * @return $this
     */
    public function setPosition($var)
    {
        GPBUtil::checkMessage($var, \Volc\Service\Imp\Models\Business\LogoPosition::class);
        $this->Position = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Volcengine.Imp.Models.Business.TimeLine TimeLine = 5;</code>
     * @return \Volc\Service\Imp\Models\Business\TimeLine|null
     */
    public function getTimeLine()
    {
        return $this->TimeLine;
    }

    public function hasTimeLine()
    {
        return isset($this->TimeLine);
    }

    public function clearTimeLine()
    {
        unset($this->TimeLine);
    }

    /**
     * Generated from protobuf field <code>.Volcengine.Imp.Models.Business.TimeLine TimeLine = 5;</code>
     * @param \Volc\Service\Imp\Models\Business\TimeLine $var
     * @return $this
     */
    public function setTimeLine($var)
    {
        GPBUtil::checkMessage($var, \Volc\Service\Imp\Models\Business\TimeLine::class);
        $this->TimeLine = $var;

        return $this;
    }

}

