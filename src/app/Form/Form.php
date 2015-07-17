<?php 

namespace app\Form;
use app\Interfaces\FormInterface;
use app\Interfaces\FormFieldInterface;

class Form implements FormInterface
{
    protected $elements = array();
    protected $action;
    protected $method;

    public function __construct($action = "", $method = "post")
    {
        $this->action = $action;
        $this->method = $method;
    }   

    public function addElement(FormFieldInterface $field)
    {
        $this->elements[] = $field;
    }

    public function createField($field, $name, $value, $placeholder, $cols = 20, $rows = 10)
    {
        switch ($field)
        {
            case 'text':
                $label = new label($name);
                $input = new Input($field, $name, $value, $placeholder);
                $this->addElement($label);
                $this->addElement($input);
                break;
            case 'email':
                $label = new label($name);
                $input = new Input($field, $name, $value, $placeholder);
                $this->addElement($label);
                $this->addElement($input);
                break;
            case 'password':
                $label = new label($name);
                $input = new Input($field, $name, $value, $placeholder);
                $this->addElement($label);
                $this->addElement($input);
                break;
            case 'textarea':
                $label = new label($name);
                $textarea = new TextArea($cols, $name, $rows, $placeholder);
                $this->addElement($label);
                $this->addElement($textarea);
                break;
            case 'select':
                $label = new label($name);
                $select = new Select();
                $select->addOptions("Masculino");
                $select->addOptions("Feminino");
                $this->addElement($label);
                $this->addElement($select);
                break;
            
            default:
                $this->elements[] =  "Erro ao obter elemento " . $name . " do tipo " . $field;
                break;
        }
    }

    public function render()
    {
        $form = "<form action=\"{$this->action}\" method=\"{$this->method}\" class=\"form-horizontal\">\n";
            foreach($this->elements as $element)
            {
                $form .= $element->getElement();               
            }
            $form .= "<div class=\"form-group\">\n<div class=\"col-md-12\">\n<input type=\"submit\" name=\"enviar\" class=\"btn btn-success\" value=\"Enviar\" />";
            $form .= "\n<input type=\"reset\" name=\"cancelar\" class=\"btn btn-danger\" value=\"Cancelar\" />\n</div>\n</form>\n";
        echo $form;
    }
}