<?php 

abstract class baseinput extends HTMLElement
{
    protected string $name;
    protected string $label;
    protected string $value;
    public function __construct($name,$label='',$value='')
    {
        $this->label=$label;
        $this->name=$name;
        $this->value=$value;
    }
    public function render(): string
    {
        return sprintf('<div>
        <label>%s</label>
        </br>
        %s
        </div>',$this->label,$this->renderInput());
    }
    abstract public function renderInput():string;
}