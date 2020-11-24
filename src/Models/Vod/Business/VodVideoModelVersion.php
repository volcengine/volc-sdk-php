<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vod/business/vod_play.proto

namespace Volc\Models\Vod\Business;

use UnexpectedValueException;

/**
 * Protobuf type <code>Volcengine.Models.Vod.Business.VodVideoModelVersion</code>
 */
class VodVideoModelVersion
{
    /**
     * 未定义的数据版本
     *
     * Generated from protobuf enum <code>UndefinedVodVideoModelVersion = 0;</code>
     */
    const UndefinedVodVideoModelVersion = 0;
    /**
     * Generated from protobuf enum <code>InternalV1VodVideoModelVersion = 1;</code>
     */
    const InternalV1VodVideoModelVersion = 1;
    /**
     * Generated from protobuf enum <code>InternalV2VodVideoModelVersion = 2;</code>
     */
    const InternalV2VodVideoModelVersion = 2;
    /**
     * Generated from protobuf enum <code>InternalV3VodVideoModelVersion = 3;</code>
     */
    const InternalV3VodVideoModelVersion = 3;
    /**
     * ToB第一版
     *
     * Generated from protobuf enum <code>ToBV1VodVideoModelVersion = 4;</code>
     */
    const ToBV1VodVideoModelVersion = 4;

    private static $valueToName = [
        self::UndefinedVodVideoModelVersion => 'UndefinedVodVideoModelVersion',
        self::InternalV1VodVideoModelVersion => 'InternalV1VodVideoModelVersion',
        self::InternalV2VodVideoModelVersion => 'InternalV2VodVideoModelVersion',
        self::InternalV3VodVideoModelVersion => 'InternalV3VodVideoModelVersion',
        self::ToBV1VodVideoModelVersion => 'ToBV1VodVideoModelVersion',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

