<?php 
class textinput extends baseinput
{
    public function render(): string
    {
        return sprintf('<div>
        <label>%s</label>
        </br>
        <input type="text" name="%s" value="%s"/>
        </div>',$this->label,$this->name,$this->value);
    }
    public function renderInput():string
    {
        return sprintf('<input type="text" name="%s" value="%s"/>',$this->name,$this->value);
    }
}