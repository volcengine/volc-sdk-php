<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/business/vod_workflow.proto

namespace Volc\Service\Vod\Models\Business;

use UnexpectedValueException;

/**
 * Protobuf type <code>Volcengine.Vod.Models.Business.StageStatus</code>
 */
class StageStatus
{
    /**
     * 未知
     *
     * Generated from protobuf enum <code>Unknown = 0;</code>
     */
    const Unknown = 0;
    /**
     * 等待调度
     *
     * Generated from protobuf enum <code>Scheduled = 1;</code>
     */
    const Scheduled = 1;
    /**
     * 执行中
     *
     * Generated from protobuf enum <code>Running = 2;</code>
     */
    const Running = 2;
    /**
     * 取消
     *
     * Generated from protobuf enum <code>Canceled = 3;</code>
     */
    const Canceled = 3;
    /**
     * 超时
     *
     * Generated from protobuf enum <code>TimedOut = 4;</code>
     */
    const TimedOut = 4;
    /**
     * 跳过
     *
     * Generated from protobuf enum <code>Skipped = 5;</code>
     */
    const Skipped = 5;
    /**
     * 完成
     *
     * Generated from protobuf enum <code>Completed = 6;</code>
     */
    const Completed = 6;
    /**
     * 失败
     *
     * Generated from protobuf enum <code>Failed = 7;</code>
     */
    const Failed = 7;

    private static $valueToName = [
        self::Unknown => 'Unknown',
        self::Scheduled => 'Scheduled',
        self::Running => 'Running',
        self::Canceled => 'Canceled',
        self::TimedOut => 'TimedOut',
        self::Skipped => 'Skipped',
        self::Completed => 'Completed',
        self::Failed => 'Failed',
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

