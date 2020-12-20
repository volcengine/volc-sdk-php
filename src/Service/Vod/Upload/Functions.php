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


class OptionInfo
{
    public $Title;
    public $Tags;
    public $Description;
    public $Category;
}

class WorkflowInput
{
    public $TemplateId;

    /**
     * WorkflowInput constructor.
     * @param $TemplateId
     */
    public function __construct($TemplateId)
    {
        $this->TemplateId = $TemplateId;
    }

}

class SnapshotTimeInput
{

    public $SnapshotTime;

    /**
     * SnapshotTimeInput constructor.
     * @param $SnapshotTime
     */
    public function __construct($SnapshotTime)
    {
        $this->SnapshotTime = $SnapshotTime;
    }
}

class FunctionInner
{
    public $Name = "";
    public $Input;

    /**
     * FunctionInner constructor.
     * @param string $Name
     * @param $Input
     */
    public function __construct(string $Name, $Input)
    {
        $this->Name = $Name;
        $this->Input = $Input;
    }


    public function __toString()
    {
        return json_encode($this);
    }


}

