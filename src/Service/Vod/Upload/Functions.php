<?php

namespace Volc\Service\Vod\Upload;

class Functions
{
    private $funcs = [];

//[{"Name": "GetMeta"},{"Name":"Snapshot","Input":{"SnapshotTime": 2.0}}]
    public function addGetMetaFunc()
    {
        $funcs[] = new FunctionInner("GetMeta", "");
    }

    public function addSnapshotTimeFunc(float $snapshotTime)
    {
        $funcs[] = new FunctionInner("Snapshot", new SnapshotTimeInput($snapshotTime));
    }

    public function addStartWorkflowFunc(string $templateId)
    {
        $funcs[] = new FunctionInner("StartWorkflow", new WorkflowInput($templateId));
    }

    public function addOptionInfoFunc(OptionInfo $optionInfo)
    {
        $funcs[] = new FunctionInner("AddOptionInfo", $optionInfo);
    }

    public function getFunctionsString(): string
    {
        return json_encode($this->funcs);
    }

}

