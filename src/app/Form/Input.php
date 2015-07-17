<?php 

namespace app\Form;
use app\Interfaces\InputInterface;
use app\Interfaces\FormFieldInterface;

class Input implements InputInterface, FormFieldInterface
{
	protected $type;
	protected $name;
	protected $value;
	protected $placeholder;

	public function __construct($type, $name, $value, $placeholder)
	{
		$this->type 		= $type;
		$this->name 		= $name;
		$this->value 		= $value;
		$this->placeholder 	= $placeholder;
	}

    public function setType($type)
    {
    	$this->type = $type;
    }

    public function setName($name)
    {
    	$this->name = $name;
    }

    public function setValue($value)
    {
    	$this->value = $value;
    }

    public function setPlaceholder($placeholder)
    {
    	$this->placeholder = $placeholder;
    }

    public function getType()
    {
    	return $this->type;
    }

    public function getName()
    {
    	return $this->name;
    }

    public function getValue()
    {
    	return $this->value;
    }

    public function getPlaceholder()
    {
    	return $this->placeholder;
    }

    public function getElement()
	{
		return "<div class=\"col-md-4\">\n<input type='" . $this->type . "' name='" . $this->name . "' value='" . $this->value . "' placeholder='" . $this->placeholder . "' class=\"form-control input-md\" />\n</div>\n</div>";
	}
}