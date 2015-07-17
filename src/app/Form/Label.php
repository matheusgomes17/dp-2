<?php 

namespace app\Form;
use app\Interfaces\LabelInterface;
use app\Interfaces\FormFieldInterface;

class Label implements LabelInterface, FormFieldInterface
{
    public $for;

    public function __construct($for)
    {
        $this->for = $for;
    }

    public function setFor($for)
    {
        $this->for = $for;
    }

    public function getFor()
    {
        return $this->for;
    }

    public function getElement()
    {
        $label = "\n<div class=\"form-group\">\n";
        $label .= "<label class=\"col-md-4 control-label\" for='". $this->for ."'>";
            $label .= $this->for;
        $label .= "</label> \n";
        return $label;
    }
}