<?php 

class form extends HTMLElement
{
    private string $action;
    private string $method;
    public function __construct(string $action='',string $method='get')
    {
        $this->action=$action;
        $this->method=$method;
    }
    protected array $elements=[];
    public function addElement(HTMLElement $el)
    {
        $this->elements[]=$el;

    }
    public function render(): string
    {
        $content=implode(PHP_EOL,array_map(fn($el)=>$el->render(),$this->elements));
        return sprintf('<form action="%s" method="%s">%s</form>',$this->action,$this->method,$content);
    }
}