<?php

namespace Volc\Service\Vod\Upload;

class Functions
{
    private static $funcs = [];

//[{"Name": "GetMeta"},{"Name":"Snapshot","Input":{"SnapshotTime": 2.0}}]
    public static function addGetMetaFunc()
    {
        self::$funcs[] = new FunctionInner("GetMeta", "");
    }

    public static function addSnapshotTimeFunc(float $snapshotTime)
    {
        self::$funcs[] = new FunctionInner("Snapshot", new SnapshotTimeInput($snapshotTime));
    }

    public static function addStartWorkflowFunc(string $templateId)
    {
        self::$funcs[] = new FunctionInner("StartWorkflow", new WorkflowInput($templateId));
    }

    public static function AddOptionInfoFunc(OptionInfo $optionInfo)
    {
        self::$funcs[] = new FunctionInner("AddOptionInfo", $optionInfo);
    }

    public static function getFunctionsString(): string
    {
        return json_encode(self::$funcs);
    }

}

