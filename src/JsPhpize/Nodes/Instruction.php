<?php

namespace JsPhpize\Nodes;

class Instruction extends Node
{
    /**
     * @var array
     */
    protected $instructions;

    /**
     * @var bool
     */
    protected $appendReturn;

    public function add($instruction)
    {
        $this->instructions[] = $instruction;
    }

    public function prependReturn()
    {
        $this->appendReturn = true;
    }

    public function isReturnPrepended()
    {
        return $this->appendReturn === true;
    }
}
